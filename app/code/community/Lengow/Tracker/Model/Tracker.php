<?php

/**
 * Lengow tracker model tracker
 *
 * @category    Lengow
 * @package     Lengow_Export
 * @author      Romain Le Polh <romain@lengow.com>
 * @copyright   2013 Lengow SAS 
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Lengow_Tracker_Model_Tracker extends Varien_Object {

    /**
     * Return list of order's items id
     *
     * @param $order Mage_Sales_Model_Order
     * @return string
     */
    public function getIdsProducts($quote) {
        if($quote instanceof Mage_Sales_Model_Order || $quote instanceof Mage_Sales_Model_Quote) {
            $quote_items = $quote->getAllVisibleItems();
            $ids = array();
            foreach($quote_items as $item) {
                $ids[] = $item->getSku();
            }
            return implode('|', $ids);
        }
        return false;
    }

}