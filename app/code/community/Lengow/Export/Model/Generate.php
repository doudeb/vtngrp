<?php
/**
 * Lengow adminhtml export controller
 *
 * @category    Lengow
 * @package     Lengow_Export
 * @author      Ludovic Drin <ludovic@lengow.com>
 * @copyright   2013 Lengow SAS 
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Lengow_Export_Model_Generate extends Varien_Object {

    private $_id_store;

    private $_file;

    private $_filename = 'lengow_feed';

    private $_stream;

    private $_format;

    private $_config_model;

    private $_product_model;

    private $_eav_model;

    private $_helper;

    private $_time = null;

    private $_excludes = array('media_gallery', 
                               'tier_price', 
                               'short_description', 
                               'description',
                               'quantity');
    /**
     * Default fields.
     */
    public static $DEFAULT_FIELDS = array('sku' => 'sku' ,
                                          'entity_id' => 'product-id' ,
                                          'parent-id' => 'parent-id' ,
                                          'qty' => 'qty' , 
                                          'name' => 'name' , 
                                          'description' => 'description' ,  
                                          'short_description' => 'short_description' , 
                                          'price-ttc' => 'price-ttc' , 
                                          'shipping-name' => 'shipping-name' , 
                                          'image-url-1' => 'image-url-1' , 
                                          'product-url' => 'product-url');

    /**
     * Construct generator
     * Set models
     */
    public function __construct() {
        $this->_config_model = Mage::getSingleton('export/config');
        $this->_product_model = Mage::getModel('export/catalog_product');
        $this->_eav_model = Mage::getResourceModel('eav/entity_attribute_collection');
        $this->_stream = $this->_config_model->get('performances/usesavefile') ? false : true;
        $this->_helper = Mage::helper('export/data');
    }

    /**
     * Make the feed
     *
     * @param integer $id_store ID of store
     * @param varchar $mode The mode of export
     *                        size : display only count of products to export
     *                        full : export simple product + configured product
     *                        xxx,yyy : export xxx type product + yyy type product
     * @param varchar $format Format of export
     * @param varchar $types Type(s) of product
     * @param varchar $status Status of product to export
     * @param boolean $export_child Export child of product
     * @param boolean $out_of_stock Export product out of stock
     * 
     * @return Mage_Catalog_Model_Product
     */
    public function exec($id_store, $mode = null, $format = 'csv', $types = null, $status = null, $export_child = null, $out_of_stock = null, $selected_products = null, $stream = null) {
        $this->_id_store = $id_store;
        $this->_format = $format;
        // Get products list to export
        $products = $this->_getProductsCollection($types, $status, $export_child, $out_of_stock, $selected_products);
        // Mode size, return count of products
        if($mode == 'size')
            die((string) sizeof($products));
        if(!is_null($stream))
            $this->_stream = $stream;
        if(!$this->_stream) {
            header('Content-Type: text/html; charset=utf-8');
            echo date('Y-m-d h:i:s') . ' - Start export<br />';
            flush();
        }
        // Gestion des attributs à exporter
        $attributes_to_export = $this->_config_model->getMappingAllAttributes();
        $products_data = array();
        $this->_attrs = array();
        $feed = Mage::getModel('Lengow_Export_Model_Feed_' . ucfirst($this->_format));
        $first = true;
        $last = false;
        $total_product = count($products);
        $pi = 1;
        if(!$this->_stream) {
            echo date('Y-m-d h:i:s') . ' - Find ' . $total_product . ' products<br />';
            flush();
        }
        // Generate data 
        foreach($products as $p) {
            $array_data = array();
            $parent = false;
            $pi++;
            if($total_product == $pi)
                $last = true;
            $product = $this->_product_model->load($p['entity_id']);            
            $product_instance = Mage::getModel('catalog/product')->load($p['entity_id']);

            $data = $product->getData();
            $data['parent-id'] = $data['entity_id'];
            $data = array_merge($data, $product->getExportDatas($attributes_to_export));
            // Load first parent if exist
            $parents = Mage::getModel('catalog/product_type_configurable')->getParentIdsByChild($p['entity_id']);
            $parent_instance = null;
            $configurable_instance = null;
            $parent_id = null;
            if ($product_instance->getTypeId() == 'simple') {
                $parents = Mage::getModel('catalog/product_type_configurable')->getParentIdsByChild($p['entity_id']);
                if (!empty($parents)) {
                    $parent_instance = Mage::getModel('catalog/product')
                        ->getCollection()
                        ->addAttributeToFilter('type_id','configurable')
                        ->addAttributeToFilter('entity_id',array('in'=>$parents))
                        ->getFirstItem();
                    if ($parent_instance && $parent_instance->getId()) {
                        $parent_id = $parent_instance->getId();
                        $parent = $this->_product_model->load($parent_id);
                        $parent_instance = Mage::getModel('catalog/product')->load($parent_id);
                        $configurable_instance = $parent_instance;
                        $data['parent-id'] = $parent_id;
                    }
                }
            }
            $parents = Mage::getModel('catalog/product_type_grouped')->getParentIdsByChild($parent_id ? $parent_id : $p['entity_id']);
            if (!empty($parents)) {
                $parent_instance = Mage::getModel('catalog/product')
                    ->getCollection()
                    ->addAttributeToFilter('type_id','grouped')
                    ->addAttributeToFilter('entity_id',array('in'=>$parents))
                    ->getFirstItem();
                if ($parent_instance && $parent_instance->getId()) {
                    $parent_id = $parent_instance->getId();
                    $parent = $this->_product_model->load($parent_id);
                    $parent_instance = Mage::getModel('catalog/product')->load($parent_id);
                }
            }
            $qty = $product_instance->getData('stock_item');
            // Default data
            $array_data['sku'] = $product_instance->getSku();
            $array_data['product_id'] = $product_instance->getId();
            $array_data['qty'] = (integer) $qty->getQty();
            $array_data = array_merge($array_data, $product->getCategories($product_instance, $parent_instance, $this->_id_store));
            $array_data = array_merge($array_data, $product->getPrices($product_instance, $configurable_instance));
            $array_data = array_merge($array_data, $product->getShippingInfo($product_instance));
            // Images, gestion de la fusion parent / enfant
            if($this->_config_model->get('data/parentsimages') && $parent !== false)
                $array_data = array_merge($array_data, $product->getImages($data['media_gallery']['images'], $parent->getData('media_gallery')));
            else
                $array_data = array_merge($array_data, $product->getImages($data['media_gallery']['images']));
             $array_data['name'] = $product_instance->getName();
            if($product_instance->getVisibility() == Mage_Catalog_Model_Product_Visibility::VISIBILITY_NOT_VISIBLE && isset($parent_instance)) {
                $array_data['product-url'] = $parent_instance->getUrlInStore();       
                //$array_data['name'] = $parent_instance->getName();
                $array_data['description'] = $this->_helper->cleanData($parent_instance->getDescription());
                $array_data['short_description'] = $this->_helper->cleanData($parent_instance->getShortDescription()); 
            } else {
                $array_data['product-url'] = $product_instance->getUrlInStore();  
                $array_data['description'] = $this->_helper->cleanData($product_instance->getDescription());
                $array_data['short_description'] = $this->_helper->cleanData($product_instance->getShortDescription());
            }
            $array_data['parent_id'] = $data['parent-id'];     
            // Selected attributes to export with Frond End value of current shop
            if(!empty($attributes_to_export)) {
                foreach($attributes_to_export as $field => $attr) {
                    if(!in_array($field, $this->_excludes) && !isset($array_data[$field])) {
                        if($product_instance->getData($field) === null) 
                            $array_data[$attr] = '';
                        else if($this->_config_model->get('performances/formatdata'))
                            $array_data[$attr] = $this->_helper->cleanData($product_instance->getResource()->getAttribute($field)->getFrontend()->getValue($product_instance), true);
                        else
                            $array_data[$attr] = $this->_helper->cleanData($product_instance->getResource()->getAttribute($field)->getFrontend()->getValue($product_instance));
                    }
                }
            }
            // Get header of feed
            if($first) {
                $fields_header = array();
                foreach($array_data as $name => $value) {
                    $fields_header[] = $name;
                }
                // Get content type if streamed feed
                if($this->_stream)
                    header('Content-Type: ' . $feed->getContentType() . '; charset=utf-8');
                $feed->setFields($fields_header);
                $this->_write($feed->makeHeader());
                $first = false;
            }
            $this->_write($feed->makeData($array_data, array('last' => $last))); 
            if(!$this->_stream) {
                if($pi % 20 == 0) 
                    echo date('Y-m-d h:i:s') .' - Export ' . $pi . ' products<br />';
                flush();
            }
            $app = Mage::app();
            if ($app != null) {
                $cache = $app->getCache();
                if ($cache != null)
                    $cache->clean();
            }
        }
        $this->_write($feed->makeFooter());
        if(!$this->_stream) {
            $this->_copyFile();
            $store_code = Mage::app()->getStore($this->_id_store)->getCode();
            Mage::app()->setCurrentStore($this->getCurrentStore());
            $url_file = Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA) . 'lengow' . DS . $store_code . DS . $this->_filename . '.' . $this->_format;
            echo $this->_helper->__('Your feed is available here : %s' , '<a href="' . $url_file . '">' . $url_file . '</a>');
        }
    }

    protected function _getProductsCollection($types = null, $status = null, $export_child = null, $out_of_stock = null, $selected_products = null, $limit = null, $offset = null) {
        // Filter types
        if($types) {
            $_types = explode(',', $types);
        } else {
            $_types = $this->_config_model->get('global/producttype');
            $_types = explode(',', $_types);
        }
        if(is_null($selected_products))
            $selected_products = $this->_config_model->onlySelectedProducts();
        // Search product to export
        $products = $this->_product_model
                         ->getCollection()
                         ->addAttributeToSelect('sku');
        // Filter status
        if($status == 1)
            $products->addAttributeToFilter('status', 1);
        else if($status == 2)
            $products->addAttributeToFilter('status', 0);
        $products->addStoreFilter($this->_id_store)
                 ->addAttributeToFilter('type_id', array('in' => $_types));
        // Export only selected products
        if($selected_products) {  
            $products->addAttributeToFilter('lengow_product', 1);
        }
        // Filter out of stock
        if(is_null($out_of_stock))
            $out_of_stock = $this->_config_model->isExportSoldout();
        $products->joinTable('cataloginventory/stock_item', 'product_id=entity_id', array('qty' => 'qty', 'is_in_stock' => 'is_in_stock'), $this->_getOutOfStockSQL($out_of_stock), 'inner');
        // Limit & Offset        
        if($limit) {
            if($offset)
                $products->getSelect()->limit($limit, $offset);
            else
                $products->getSelect()->limit($limit);
        }
        // Filter to hide products
        Mage::getSingleton('catalog/product_status')->addVisibleFilterToCollection($products);
        $products->getSelect()
                 ->distinct(true)
                 ->group('entity_id');
        return $products->getData();
    }

    /**
    * Filter out of stock product
    **/
    protected function _getOutOfStockSQL($out_of_stock = false) {
        // Filter product without stock
        if(!$out_of_stock) {
            $config = (int)Mage::getStoreConfigFlag(Mage_CatalogInventory_Model_Stock_Item::XML_PATH_MANAGE_STOCK);
            $sql = '({{table}}.`is_in_stock` = 1) '
                 . ' OR IF({{table}}.`use_config_manage_stock` = 1, ' . $config . ', {{table}}.`manage_stock`) = 0';
            unset($config);
            return $sql;
        }
    }
    
    /**
     * Return attributes to export
     */
    protected function _getAttributesFromConfig() {
        $attributes = $this->_config_model->getSelectedAttributes();
        foreach($attributes as $name => $value)
            self::$DEFAULT_FIELDS[$name] = $value;
        return self::$DEFAULT_FIELDS;
    }

    /**
     * Retourne les attributs matchés par le client
     */
    protected function getAttributesFromConfig($exist = false) {
        $attributes =  $this->_config_model->getMappingAllAttributes();
        if($exist)  {
            $product = Mage::getModel('catalog/product');
            foreach ($attributes as $key=>$code) {
                $attribute = $product->getResource()->getAttribute($code);
                if($attribute instanceof Mage_Catalog_Model_Resource_Eav_Attribute && $attribute->getId() && $attribute->getFrontendInput() != 'weee') {
                    $attributes[$key] = $code; 
                }
            }
        } 
        return $attributes;
    }

    /**
     * File generation
     */ 

    protected  function _write($data) {
        if($this->_stream == false) {
            if(!$this->_file) {
                $this->_initFile();
            }
            $this->_file->streamLock();
            $this->_file->streamWrite($data);
            $this->_file->streamUnlock();
        } else {
            echo $data;
            flush();
        }
    }

    protected  function _initFile() {
        $this->_time = time();
        $store_code = Mage::app()->getStore($this->_id_store)->getCode();
        $file_path = Mage::getBaseDir('media') . DS . 'lengow' . DS . $store_code . DS;
        $this->_file = new Varien_Io_File;
        $this->_file->checkAndCreateFolder($file_path);
        $this->_file->cd($file_path);
        $this->_file->streamOpen($this->_filename . '.' . $this->_time . '.' . $this->_format, 'w+');
    }

    protected  function _copyFile() {
        $store_code = Mage::app()->getStore($this->_id_store)->getCode();
        $file_path = Mage::getBaseDir('media') . DS . 'lengow' . DS . $store_code . DS;
        copy($file_path . $this->_filename . '.' . $this->_time . '.' . $this->_format, $file_path . $this->_filename . '.' . $this->_format);
        unlink($file_path . $this->_filename . '.' . $this->_time . '.' . $this->_format);
    }
}
