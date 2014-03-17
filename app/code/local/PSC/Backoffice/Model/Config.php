<?php
class PSC_Backoffice_Model_Config{
    protected $_supportedCurrencyCodes = array('AUD', 'CAD', 'CZK', 'DKK', 'EUR', 'HKD', 'HUF', 'ILS', 'JPY', 'MXN',
        'NOK', 'NZD', 'PLN', 'GBP', 'SGD', 'SEK', 'CHF', 'USD');
    
    public function isCurrencyCodeSupported($code){
        return in_array($code, $this->_supportedCurrencyCodes);
    }

    public function setMethod($method){
        if ($method instanceof Mage_Payment_Model_Method_Abstract) {
            $this->_methodCode = $method->getCode();
        } elseif (is_string($method)) {
            $this->_methodCode = $method;
        }
        return $this;
    }
    
    public function getPSCUrl(array $params = array()){
		$config	= Mage::getStoreConfig("payment/backoffice_standard");
		if($config['portal']==1) return 'https://billing.paysite-cash.biz';
		return 'https://secure.easy-pay.net'; 
    }
    
}
?>