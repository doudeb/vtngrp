<?php
/**
 * Lengow export model convert parser product
 *
 * @category    Lengow
 * @package     Lengow_Export
 * @author      Ludovic Drin <ludovic@lengow.com>
 * @copyright   2013 Lengow SAS 
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Lengow_Export_Model_Catalog_Product extends Mage_Catalog_Model_Product {
    
    /**
     * Config model export
     *
     * @var object
     */
    protected $_config_model = true;

    /**
     * Initialize resources
     */
    protected function _construct() {
        $this->_init('catalog/product');
        $this->_config_model = Mage::getSingleton('export/config');
    }

    /**
     *   _productData
     *       @product : Magento product instance
     *       
     *       Return the product values in an array
     **/
    public function getExportDatas($attributes) {
        $_data = array();
        $parents = Mage::getResourceSingleton('catalog/product_type_configurable')->getParentIdsByChild($this->getId());    
        foreach($attributes as $field) {
            $_data[$field] = '';
            $vals = $this->_getAttrValueSpe($field, $parents);
            if($vals !== false) {
                foreach($vals as $kv => $vv)
                    $_data[$kv] = $vv;
            } else {
                $_data[$field] = $this->_getAttributeValue($field, $parents);
            }
        }
        return $_data;
    }
    
    /**
    *   _getAttrValue
    *       @key : Key to find
    *       @product : Magento product instance
    *       
    *       Return the string value of the key
    **/
    protected function _getAttributeValue($key) {
        $_data = '';
        $_attr = $this->getResource()->getAttribute($key);
        $_data = $this->getData($key);
        return $_data;
    }

    /**
    *   _getAttrValueSpe
    *       @key : Key to find
    *       @product : Magento product instance
    *       @parents : Ids array
    *       
    *       Return an array like ('field_name_1' => 'value of the first field', 'field_name_2' => 'value of the second field')
    *       Default : false
    **/
    protected function _getAttrValueSpe($key, $parents) {
        switch($key) {
            case 'product_type' :
               return array('product_type' => $this->_getProductType($parents));
            break;
            case 'price-ttc' :
                return $this->_getPrices();
            break;
            case 'shipping-name' :
                return $this->_getShippingInfo();
            break;
            case 'image-url-1' :
                return $this->_getImages();
            break;
            case 'category' :
                return $this->_getCategories();
            break;
            case 'parent-id' :
                return array('parent-id' => $this->_getParentId($parents));
            break;
            default :
                return false;
            break;
        }
    }

    protected function _getParentId($parents) {
        if(sizeof($parents) > 0) {
            foreach($parents as $p) {
                $parentid = $p;
                break;
            }   
        } else {
            $parentid = $this->getData('entity_id');
        }
        return $parentid;
    }

    protected function _getProductType($parents) {
        if($this->getTypeId() == 'simple' && sizeof($parents) > 0)
            $type = 'child';
        elseif($this->getTypeId() == 'configurable')
            $type = 'parent';
        else
            $type = 'simple';
        return $type;
    }

    public  function getShippingInfo($product_instance) {
        $data['shipping-name'] = '';
        $data['shipping-price'] = '';
        $carrier = $this->_config_model->get('data/default_shipping_method');
        if(empty($carrier))
            return $data;
        $carrierTab = explode('_',$carrier);
        list($carrierCode,$methodCode) = $carrierTab;       
        $data['shipping-name'] = ucfirst($methodCode);
        $shippingPrice = 0;     
        $countryCode = $this->_config_model->get('data/shipping_price_based_on');
        $shippingPrice = $this->_getShippingPrice($product_instance, $carrier, $countryCode);
        if(!$shippingPrice) {
            $shippingPrice = $this->_config_model->get('data/default_shipping_price');
        }
        $data['shipping-price'] = $shippingPrice;
            
        return $data;
    }
    
    protected function _getShippingPrice($product_instance, $carrierValue, $countryCode = 'FR') {
        $carrierTab = explode('_', $carrierValue);
        list($carrierCode, $methodCode) = $carrierTab;
        $shipping = Mage::getModel('shipping/shipping');
        $methodModel = $shipping->getCarrierByCode($carrierCode);
        if($methodModel) {
            $result = $methodModel->collectRates($this->_getShippingRateRequest($product_instance, $countryCode = 'FR'));
            if($result != NULL) {
                if($result->getError()) {
                    Mage::logException(new Exception($result->getError()));
                } else {
                    foreach($result->getAllRates() as $rate) {
                        return $rate->getPrice();
                    }
                }
            } else {
                return false;
            }
        }
        return false;
    }
    
    protected function _getShippingRateRequest($product_instance, $countryCode = 'FR') {
        /** @var $request Mage_Shipping_Model_Rate_Request */
        $request = Mage::getModel('shipping/rate_request');
        $storeId = $request->getStoreId();
        if (!$request->getOrig()) {
            $request->setCountryId($countryCode)
                    ->setRegionId('')
                    ->setCity('')
                    ->setPostcode('');
        }        
        $item = Mage::getModel('sales/quote_item');
        $item->setStoreId($storeId);
        $item->setOptions($this->getCustomOptions())
             ->setProduct($this);
        $request->setAllItems(array($item));
        $request->setDestCountryId($countryCode);
        $request->setDestRegionId('');
        $request->setDestRegionCode('');
        $request->setDestPostcode('');
        $request->setPackageValue($product_instance->getPrice());
        $request->setPackageValueWithDiscount($product_instance->getFinalPrice());
        $request->setPackageWeight($product_instance->getWeight());
        $request->setFreeMethodWeight(0);
        $request->setPackageQty(1);
        $request->setStoreId(Mage::app()->getStore()->getId());
        $request->setWebsiteId(Mage::app()->getStore()->getWebsiteId());
        $request->setBaseCurrency(Mage::app()->getStore()->getBaseCurrency());
        $request->setPackageCurrency(Mage::app()->getStore()->getCurrentCurrency());
        return $request;
    }
    
    public function getPrices($product_instance, $configurable_instance = null) {
        /* @var $configurable_instance Mage_Catalog_Model_Product */
        if ($configurable_instance) {
            $price = $configurable_instance->getPrice();
            $finalPrice = $configurable_instance->getFinalPrice();
            $configurablePrice = 0;
            $configurableOldPrice = 0;
            if($this->getAllowAttributes($configurable_instance)) {
                foreach($this->getAllowAttributes($configurable_instance) as $attribute) {
                    $productAttribute   = $attribute->getProductAttribute();
                    $productAttributeId = $productAttribute->getId();
                    $attributeValue     = $product_instance->getData($productAttribute->getAttributeCode());
                    foreach($attribute->getPrices() as $price) {
                        if ($price['value_index'] == $attributeValue) {
                            $configurableOldPrice += $price['is_percent'] ? $price['pricing_value'] * $price / 100 : $price['pricing_value'];
                            $configurablePrice += $price['is_percent'] ? $price['pricing_value'] * $finalPrice / 100 : $price['pricing_value'];
                        }
                    }
                }
            }
            $configurable_instance->setConfigurablePrice($configurablePrice);
            $configurable_instance->setParentId(true);
            Mage::dispatchEvent(
                'catalog_product_type_configurable_price',
                array('product' => $configurable_instance)
            );
            $configurablePrice = $configurable_instance->getConfigurablePrice();
            $price_including_tax = Mage::helper('tax')->getPrice(
                $configurable_instance->setTaxPercent(null),
                $configurable_instance->getPrice() + $configurableOldPrice
            );
            $final_price_including_tax = Mage::helper('tax')->getPrice(
                $configurable_instance->setTaxPercent(null),
                $configurable_instance->getFinalPrice() + $configurablePrice
            );
        } else {
            $price_including_tax = Mage::helper('tax')->getPrice(
                $product_instance->setTaxPercent(null),
                $product_instance->getPrice()
            );
            $final_price_including_tax = Mage::helper('tax')->getPrice(
                $product_instance->setTaxPercent(null),
                $product_instance->getFinalPrice()
            );
        }
        $discount_amount = $price_including_tax - $final_price_including_tax;
        $data['price-ttc'] = round($final_price_including_tax, 2);
        $data['price-before-discount'] = round($price_including_tax, 2);
        $data['discount-amount'] = $discount_amount > 0 ? round($discount_amount, 2) : '0';
        $data['discount-percent'] = $discount_amount > 0 ? round(($discount_amount * 100) / $price_including_tax, 0) : '0';
        $data['start-date-discount'] = $product_instance->getSpecialFromDate;
        $data['end-date-discount'] = $product_instance->getSpecialToDate;
        return $data;
    }
    
    public function getCategories($product_instance, $parent_instance, $id_store) {
        if($product_instance->getVisibility() == Mage_Catalog_Model_Product_Visibility::VISIBILITY_NOT_VISIBLE && isset($parent_instance)) {
            $categories = $parent_instance->getCategoryCollection()
                                          ->exportToArray();
        } else {
            $categories = $product_instance->getCategoryCollection()
                                           ->exportToArray();
        }
        $max_level = $this->_config_model->get('data/levelcategory');
        $current_level = 0;
        $category_buffer = false;
        foreach($categories as $category) {
            if($category['level'] > $current_level) {
                $current_level = $category['level'];
                $category_buffer = $category;
            }
            if($current_level > $max_level)
                break;
        }
        if(isset($category) && $category['path'] != '')
            $categories = explode('/', $category_buffer['path']);
        else
            $categories = array();
        $data['category'] = '';
        $data['category-url'] = '';        
        for($i = 1; $i <= $max_level; $i++) {
            $data['category-sub-'.($i)] = '';
            $data['category-url-sub-'.($i)] = '';
        }
        $i = 0;
        $ariane = array();
        foreach($categories as $cid) {
            $c = Mage::getModel('catalog/category')
                     ->setStoreId($id_store)
                     ->load($cid);
            if($c->getId() != 1) {
                // No root category
                if($i == 0) {
                    $data['category'] = $c->getName();
                    $data['category-url'] = $c->getUrl();
                    $ariane[] = $c->getName();
                } elseif($i <= $max_level) {
                    $ariane[] = $c->getName();
                    $data['category-sub-'.$i] = $c->getName();
                    $data['category-url-sub-'.$i] = $c->getUrl();
                }
                $i++;
            }
        }
        $data['category-breadcrumb'] = implode(' > ', $ariane);
        unset($categories, $category, $ariane);
        return $data;
    }

    // TODO : Clean, don't understand the merge of images parents/childs
    public function getImages($images, $parentimages = false) {
        // Si des images du parent sont à exporter
        // On fusionne les deux listes, le reste du script fera le reste
        if($parentimages !== false) {
            $images = array_merge($parentimages, $images);
            $_images = array();
            $_ids = array();
            // Nettoyage du tableau
            foreach($images as $i) {
                if(!in_array($i['value_id'], $_ids)) {
                    $_ids[] = $i['value_id'];
                    $_images[]['file'] = $i['file'];
                }
            }
            $images = $_images;
            unset($_images, $_ids, $parentimages);
        }
        $data = array();
        for($i = 1; $i < 6; $i++) {
            $data['image-url-'.$i] = '';
        }
        $c = 1;
        foreach($images as $i) {
            $url = Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA).'catalog/product'.$i['file'];
            $data['image-url-' . $c++] = $url;
            if($i == 6)
                break;
        }
        
        return $data;        
    }

}
