<?php
/**
 * Lengow sync model config
 *
 * @category    Lengow
 * @package     Lengow_Sync
 * @author      Ludovic Drin <ludovic@lengow.com>
 * @copyright   2013 Lengow SAS 
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Lengow_Sync_Model_Config extends Varien_Object {
    
    /**
     * Config key "Debug mode"
     */
    const DEBUG_MODE = 'orders/debug';
    
    protected $_id_store;

    public static $ADDRESS_ATTRIBUTES = array(
                            'prefix' => 'na',
                            'firstname' => 'firstname',
                            'middlename' => 'na',
                            'lastname' => 'lastname',
                            'suffix' => 'na',
                            'company' => 'society',
                            'street' => array('address', 'address_2', 'address_complement'),
                            'city' => 'city',
                            'country_id' => 'country',
                            'region' => 'na',
                            'region_id' => 'na',
                            'postcode' => 'zipcode',
                            'telephone' => 'phone_home',
                            'fax' => 'phone_office',
                            'vat_id' => 'na',
                    );

    public function setStore($id_store) {
        $this->_id_store = $id_store;
        return $this;
    }

    public function getConfig($key) {
        return Mage::getStoreConfig($key, $this->_id_store);
    }

    public function get($key) {
        return Mage::getStoreConfig('sync/' . $key, $this->_id_store);
    }

    /**
     * Map Magento address attribute codes with Neteven ones
     *
     * @param string $attributeCode
     * @return mixed
     */
    public function getMappedAddressAttributeCode($attribute_code) {
        return self::$ADDRESS_ATTRIBUTES[$attribute_code];
    }

    public function getOrderState($lengow) {
        switch ($lengow) {
            case 'new':
                return Mage_Sales_Model_Order::STATE_NEW;
                break;
            case 'processing':
                return Mage_Sales_Model_Order::STATE_PROCESSING;
                break;
            case 'shipped':
                return Mage_Sales_Model_Order::STATE_COMPLETE;
                break;
            case 'canceled':
                return Mage_Sales_Model_Order::STATE_CANCELED;
                break;  
        }
    }

    /**
     * Is debug mode
     *
     * @return boolean
     */
    public function isDebugMode() {
        return $this->get(self::DEBUG_MODE);
    }
    
}