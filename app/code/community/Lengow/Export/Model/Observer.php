<?php
/**
 * Lengow export model observer
 *
 * @category    Lengow
 * @package     Lengow_Export
 * @author      Ludovic Drin <ludovic@lengow.com>
 * @copyright   2013 Lengow SAS 
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Lengow_Export_Model_Observer {

    public function cron($observer)	{
        $store_collection = Mage::getResourceModel('core/store_collection')
                               ->addFieldToFilter('is_active', 1);
        $exceptions = array();
        foreach($store_collection as $store) {
            try {
                if(Mage::getStoreConfig('export/performances/active_cron', $store)) {
                    $generate = Mage::getSingleton('export/generate');
                    $format =Mage::getStoreConfig('export/data/format', $store);
                    $generate->exec($store->getId(), null, $format, null, null, null, null, null, false, false);
                }
            } catch (Exception $e) {
                echo $e->getMessage() . "\n" . $e->getTraceAsString() . "\n";
            }
        }
        return $this;
    }
	
}