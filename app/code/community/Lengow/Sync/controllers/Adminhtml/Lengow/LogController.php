<?php
/**
 * Lengow adminhtml log controller
 *
 * @category    Lengow
 * @package     Lengow_Sync
 * @author      Ludovic Drin <ludovic@lengow.com>
 * @copyright   2013 Lengow SAS 
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Lengow_Sync_Adminhtml_Lengow_LogController extends Mage_Adminhtml_Controller_Action {
    
    protected function _initAction() {
        $this->loadLayout()
             ->_setActiveMenu('lengow/log')
             ->_addBreadcrumb(Mage::helper('sync')->__('Lengow orders'), Mage::helper('sync')->__('Lengow orders'));
        return $this;
    }
    
    public function indexAction() {
        $this->_initAction()
             ->renderLayout();        
        return $this;
    }
    
    public function deleteAction() {
        $collection = Mage::getModel('sync/log')->getCollection();
        foreach($collection as $log)
            $log->delete();            
        $this->_getSession()->addSuccess(Mage::helper('Lengow_Order')->__('Log is empty'));
        $this->_redirect('*/*/index');
            
    }
    
    public function gridAction() {
        $this->getResponse()->setBody($this->getLayout()->createBlock('sync/adminhtml_log_grid')->toHtml());        
        return $this;
    }
    
}