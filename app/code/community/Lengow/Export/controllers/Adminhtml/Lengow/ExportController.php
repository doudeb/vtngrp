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
class Lengow_Export_Adminhtml_Lengow_ExportController extends Mage_Adminhtml_Controller_Action {
	
	public function indexAction() {
        $this->loadLayout();
        $this->renderLayout();        
        return $this;
    }
    
    /**
     * Product grid for AJAX request
     */
    public function gridAction() {
        $this->loadLayout();
        $this->getResponse()->setBody(
            $this->getLayout()->createBlock('export/adminhtml_product_grid')->toHtml()
        );
    }
	    
	public function massPublishAction() {
        $productIds = (array)$this->getRequest()->getParam('product');
        $storeId    = (int)$this->getRequest()->getParam('store', 0);
        $publish     = (int)$this->getRequest()->getParam('publish');
		$resource = Mage::getResourceModel('catalog/product');
		$entityTypeId  = $resource->getEntityType()->getId();
        try {
            foreach ($productIds as $productId) {
                $product = new Varien_Object(array('entity_id'=>$productId,
                							'id'=>$productId,
                							'entity_type_id'=>$entityTypeId,
                							'store_id'=>$storeId,
                							'lengow_product'=>$publish));
                $resource->saveAttribute($product,'lengow_product');
                
            }
            $this->_getSession()->addSuccess(
                $this->__('Total of %d record(s) were successfully updated', count($productIds))
            );
        }
        catch (Mage_Core_Model_Exception $e) {
            $this->_getSession()->addError($e->getMessage());
        }
        catch (Exception $e) {
            $this->_getSession()->addException($e, $e->getMessage() . Mage::helper('export')->__('There was an error while updating product(s) publication'));
        }

        $this->_redirect('*/*/', array('store'=> $storeId));
    }
	

	protected function _getSession() {
		return Mage::getSingleton('adminhtml/session');
	}
		
}