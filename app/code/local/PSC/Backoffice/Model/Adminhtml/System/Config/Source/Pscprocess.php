<?php 
/*
Executed on System>Configuration>Payment method MyCompanyName_MyModuleName_Adminhtml_Model_System_Config_Source
PSC_Backoffice_Adminhtml_Model_System_Config_Source_Pscprocess
$standard = Mage::getModel('backoffice/standard');
*/

class PSC_Backoffice_Model_Adminhtml_System_Config_Source_Pscprocess 
{
    public function __construct(){ 
		$new_install = realpath( "app/code/local/PSC/Backoffice/controllers/new_install.txt");
		$config	= Mage::getStoreConfig("payment/backoffice_standard");
		$standard = Mage::getModel('backoffice/standard');
		$this->AddCustomStatus();
		 if(file_exists($new_install) ){
			if(@unlink($new_install)){ 
				$inchooSwitch = new Mage_Core_Model_Config();
				$this->removeMyModuleAction();
				 $currentUrl = Mage::helper('core/url')->getCurrentUrl();
				 sleep(1);
				header('location:'.$currentUrl.'');
				 die(); 
			}
		}
		
		
	}
	
	public function removeMyModuleAction() {
    	$sql = "DELETE FROM `core_config_data`
WHERE `path` LIKE '%payment/backoffice_standard%'";
    	$connection = Mage::getSingleton('core/resource')->getConnection('core_write');
		
		try {
			$connection->query($sql);
		} catch (Exception $e) {
			echo $e->getMessage();
		}
	}
	
	
	public function AddCustomStatus(){
		// ADD Failed transaction > Paiement refusé
		$installer = new Mage_Core_Model_Resource_Setup();
		/**
		 * Prepare database for install
		 */
		$installer->startSetup();
		$status = Mage::getModel('sales/order_status');

		$status->setStatus('failed')->setLabel('Failed')
			->assignState(Mage_Sales_Model_Order::STATE_CANCELED) 
			->save();
	}
	
	public function toOptionArray()
    {
        $methods = array('Easy-pay','Paysite-cash');
        return $methods;
    }
}

?>