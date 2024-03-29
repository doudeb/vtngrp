<?php
/**
 * Lengow sync model order
 *
 * @category    Lengow
 * @package     Lengow_Sync
 * @author      Ludovic Drin <ludovic@lengow.com>
 * @copyright   2013 Lengow SAS 
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class Lengow_Sync_Model_Order extends Mage_Sales_Model_Order {
    
    protected $_countryCollection;
    protected $_config;
    
    protected $_canInvoice = false;
    protected $_canShip = false;
    protected $_canCancel = false;
    protected $_canRefund = false;
    
    protected $_hasInvoices = false;
    protected $_hasShipments = false;
    protected $_isCanceled = false;
    protected $_isRefunded = false;
    
    public function isAlreadyImported($id_lengow, $id_flux) {
        $order = Mage::getModel('sales/order')->getCollection()
                                              ->addAttributeToFilter('order_id_lengow', $id_lengow)
                                              ->addAttributeToSelect('order_id_lengow');
        if(count($order) > 0)
            return true;
        else
            return false;
    }
    
    public function getOrderByIdLengow($id_lengow, $id_flux) {
        $order = Mage::getModel('sales/order')->getCollection()
                                              ->addAttributeToFilter('order_id_lengow', $id_lengow)
                                              ->addAttributeToSelect('entity_id')
                                              ->getData();
        if(count($order))
            return Mage::getModel('sync/order')->load($order[0]);
    }
    
    /**
     * Retrieve config singleton
     *
     * @return Lengow_Sync_Model_Config
     */
    public function getConfig() {
        if(is_null($this->_config)) {
            $this->_config = Mage::getSingleton('sync/config');
        }
        return $this->_config;
    }
    
    /**
     * Create quote
     *
     * @param Varien_Object $lengowItem
     */
    public function createQuote(SimpleXMLelement $data, Lengow_Sync_Model_Customer_Customer $customer) {
        $quote = new Mage_Sales_Model_Quote();    
        $quote->setIsMultiShipping(false)
              //->setCheckoutMethod(Mage_Checkout_Model_Type_Onepage::METHOD_GUEST)
              ->setCustomerId($customer->getId())
              ->setCustomerEmail($customer->getEmail())
              ->setCustomerIsGuest(false)
              //->setCustomerGroupId(Mage_Customer_Model_Group::NOT_LOGGED_IN_ID)
              ->setStore(Mage::app()->getDefaultStoreView());
        // Add products to quote with data from Lengow
        foreach($data->cart->products->product as $lengow_product) {
            if(!$quote = $this->addItemToQuote($lengow_product, $quote, (string) $data->order_id)) {
               return false;
            }
        }
        // Set billing Address
        $billing_address =  $quote->getBillingAddress();
        $billing_address->setShouldIgnoreValidation(true); 
        $customer_billing_address = Mage::getModel('customer/address')->load($customer->getDefaultBilling());
        $billing_address->importCustomerAddress($customer_billing_address)->setSaveInAddressBook(0);
        // Set shipping Address
        $shipping_address = $quote->getShippingAddress();
        $shipping_address->setShouldIgnoreValidation(true);
        $customerAddressShipping = Mage::getModel('customer/address')->load($customer->getDefaultShipping());
        $shipping_address->importCustomerAddress($customerAddressShipping)->setSaveInAddressBook(0);
        $shipping_address->setSameAsBilling(0);
        // Create Shipment
        $shipping_cost = (float) $data->order_processing_fee + (float) $data->order_shipping;
        if(!Mage::getSingleton('tax/config')->shippingPriceIncludesTax($quote->getStore())) {
            $pseudo_product = new Varien_Object();
            $pseudo_product->setTaxClassId(Mage::getSingleton('tax/config')->getShippingTaxClass($quote->getStore()));
            $shipping_cost = Mage::helper('tax')->getPrice(
                $pseudo_product,
                $shipping_cost,
                false,
                $shipping_address,
                $billing_address,
                null,
                $quote->getStore(),
                true
            );
        }
        Mage::getSingleton('checkout/session')
            ->setShippingPrice($shipping_cost)
            ->setIsFromlengow(true);
        $quote->getShippingAddress()
              ->setShippingMethod('lengow_lengow')
              ->setCollectShippingRates(true)
              ->collectShippingRates();
        // Create Payment
        $quote->getShippingAddress()
              ->setPaymentMethod('lengow');
        $payment = $quote->getPayment();
        $payment->importData(array('method' => 'lengow' ,
                                   'marketplace' => (string) $data->marketplace . ' - ' . (string) $data->order_payment->payment_type ));
        // Create quote
        $quote->collectTotals();
        $quote->save();
        return $quote;
    }
    
    /**
     * Add item to quote
     *
     * @param Varien_Object $lengowItem
     * @param Mage_Sales_Mode_Quote
     * @return Mage_Sales_Mode_Quote
     */
    public function addItemToQuote(SimpleXMLelement $lengow_product, Mage_Sales_Model_Quote $quote, $order_id) {
        // TODO add while
        $quote->setIsSuperMode(true);       
        $product_model = Mage::getModel('catalog/product');
        $sku = (string) $lengow_product->sku;
        $sku = str_replace('\_', '_', $sku);
        $product = $product_model->load($product_model->getIdBySku($sku));
        if(!$product->getId()) {
            $sku = (string) $lengow_product->idMP;
            $sku = str_replace('\_', '_', $sku);
            $product = $product_model->load($product_model->getIdBySku($sku));
            if(!$product->getId()) {
                $sku = (string) $lengow_product->idLengow;
                $sku = str_replace('\_', '_', $sku);
                $product = $product_model->load($product_model->getIdBySku($sku));
                if(!$product->getId()) { 
                    $sku = (string) $lengow_product->sku;
                    $sku = str_replace('\_', '_', $sku);
                    $product = $product_model->load($sku);
                    if(!$product->getId()) { 
                        $sku = (string) $lengow_product->idMP;
                        $sku = str_replace('\_', '_', $sku);
                        $product = $product_model->load($sku);
                        if(!$product->getId()) {
                            $sku = (string) $lengow_product->idLengow;
                            $sku = str_replace('\_', '_', $sku);
                            $product = $product_model->load($sku);
                            if(!$product->getId()) { 
                                Mage::helper('sync')->log('Order ' . $order_id . ' : Product ' . (string) $lengow_product->sku . ' doesn\'t exist');
                                return false;
                            }
                        }
                    }
                }
            }
        }
        $quote_item = Mage::getModel('sync/quote_item');
        $quote_item
            ->setProduct($product)
            ->setCustomPrice((float) $lengow_product->price_unit)
            ->setOriginalCustomPrice((float) $lengow_product->price_unit)
            ->setQuote($quote)
            ->setQty((integer) $lengow_product->quantity)
            ->initPrice((float) $lengow_product->price_unit);
        $title_from_lengow = $this->getConfig()->setStore($quote->getStore()->getStoreId())->get('orders/title');
        if($title_from_lengow)
            $quote_item->setName((string) $lengow_product->title);
        //print_r($quote_item->debug());
        $quote->addItem($quote_item);     
        return $quote;
    }
    
    /**
     * Create order
     * 
     * @param Mage_Sales_Model_Quote
     * @return Mage_Sales_Model_Order 
     */
    public function makeOrder(SimpleXMLelement $data, Mage_Sales_Model_Quote $quote) {
        try {    
            $order = false;  
            $store = $quote->getStore();
            $grand_total = 0;  
            if (!Mage::helper('tax')->priceIncludesTax($store)) {
                $grand_total = $quote->getGrandTotal();
            }
            $quote->setGrandTotal((float) $data->order_amount);
            $quote->setBaseGrandTotal((float) $data->order_amount);
            $additional_data = array('from_lengow' => true ,
                                     'marketplace_lengow' => (string) $data->marketplace ,
                                     'fees_lengow' => (float) $data->order_commission ,
                                     'order_id_lengow' => (string) $data->order_id ,
                                     'feed_id_lengow' => (integer) $data->idFlux ,
                                     'xml_node_lengow' => Mage::helper('Core')->jsonEncode($data) ,
                                     'message_lengow' => (string) $data->order_comments ,
                                     'total_paid_lengow' => (float) $data->order_amount ,
                                     'carrier_lengow' => (string) $data->tracking_informations->tracking_carrier ,
                                     'carrier_method_lengow' => (string) $data->tracking_informations->tracking_method ,
                                    );
            $service = Mage::getModel('sales/service_quote', $quote);
            $service->setOrderData($additional_data);
            $order = false;
            if(method_exists($service, 'submitAll')) {          
                $service->submitAll();
                $order = $service->getOrder();
            } else {
                $order = $service->submit();
            }
            $order->setIsFromLengow(true)  
                  ->save();      
            // Re-ajuste cents
            // Conversion Tax Include > Tax Exclude > Tax Include maybe make 0.01 amount error     
            if (!Mage::helper('tax')->priceIncludesTax($store)) {

                if($order->getBaseShippingInclTax() != (float) $data->order_shipping) {
                    $order->setBaseShippingInclTax((float) $data->order_shipping);
                }
                if($grand_total != (float) $data->order_amount) {
                    $order->setGrandTotal((float) $data->order_amount);
                    $order->setBaseGrandTotal((float) $data->order_amount);
                    $diff = (((float) $data->order_amount) - $grand_total);
                    $order->setTaxAmount($order->getTaxAmount() + $diff);
                }
                $order->save();
            }
            $order = $this->toInvoice($order);
        } catch (Exception $e){
            Mage::helper('sync')->log('Error create order : ' . $e->getMessage());
        } 
        return $order;  
    }
    
    /**
     * Create invoice
     * 
     * @param Mage_Sales_Model_Order
     * @return Lengow_Sync_Model_Order
     */
    public function toInvoice(Mage_Sales_Model_Order $order) {
        if($order->canInvoice()) {
            $invoice = Mage::getModel('sales/service_order', $order)->prepareInvoice();
            if($invoice) {
                $invoice->register();
                $invoice->getOrder()->setIsInProcess(true);
                $transactionSave = Mage::getModel('core/resource_transaction')
                    ->addObject($invoice)
                    ->addObject($invoice->getOrder());
                $transactionSave->save();
                $this->_hasInvoices = true;
            }
        }        
        return $order;
    }
    
    /**
     * Ship order
     *
     * @param Mage_Sales_Model_Order
     * @return Lengow_Sync_Model_Order
     */
    public function toShip($order, $carrier = null, $title = '', $tracking = '') {
        if($this->_canShip && $order->canShip()) {
            $shipment = Mage::getModel('sales/service_order', $order)->prepareShipment();
            if($shipment) {
                $shipment->register();
                $shipment->getOrder()->setIsInProcess(true);
                $transactionSave = Mage::getModel('core/resource_transaction')
                    ->addObject($shipment)
                    ->addObject($shipment->getOrder());
                $transactionSave->save();
                $this->_hasShipments = true;
                // Add tracking information
                if($tracking)
                    $ship = Mage::getModel('sales/order_shipment_api')
                                ->addTrack($shipment->getIncrementId() , 
                                           $carrier ,
                                           $title ,
                                           $tracking);   
            }
        }        
        return $this;
    }
    
    /**
     * Cancel order
     *
     * @param Mage_Sales_Model_Order
     * @return Lengow_Sync_Model_Order
     */
    public function toCancel(Lengow_Sync_Model_Order $order) {
        if($this->_canCancel) {
            $order->cancel();
            $this->_isCanceled = true;
        }
    
        return $this;
    }
    
    /**
     * Refund order
     *
     * @param Mage_Sales_Model_Order
     * @return Lengow_Sync_Model_Order
     */
    public function toRefund(Lengow_Sync_Model_Order $order) {
        if($this->_canRefund && $order->canCreditmemo()) {
            $invoice_id = $order->getInvoiceCollection()->getFirstItem()->getId();            
            if(!$invoice_id) {
                return $this;            
            }            
            $invoice = Mage::getModel('sales/order_invoice')->load($invoice_id)->setOrder($order);
            $service = Mage::getModel('sales/service_order', $order);
            $creditmemo = $service->prepareInvoiceCreditmemo($invoice);            
            $backToStock = array();
            foreach($order->getAllItems() as $item) {
                $backToStock[$item->getId()] = true;
            }            
            // Process back to stock flags
            foreach ($creditmemo->getAllItems() as $creditmemoItem) {
                $orderItem = $creditmemoItem->getOrderItem();
                $parentId = $orderItem->getParentItemId();
                if (Mage::helper('cataloginventory')->isAutoReturnEnabled()) {
                    $creditmemoItem->setBackToStock(true);
                } else {
                    $creditmemoItem->setBackToStock(false);
                }
            }            
            $creditmemo->register();            
            $transactionSave = Mage::getModel('core/resource_transaction')
                ->addObject($creditmemo)
                ->addObject($creditmemo->getOrder());
            if ($creditmemo->getInvoice()) {
                $transactionSave->addObject($creditmemo->getInvoice());
            }
            $transactionSave->save();
            $this->_isRefunded = true;
        }    
        return $this;
    }
    
    /**
     * Retrieve country id based on country name
     * 
     *  @param string $country_name
     *  @return string
     */
    protected function _getCountryId($country_name) {
        if(is_null($this->_countryCollection)) {
            $this->_countryCollection = Mage::getResourceModel('directory/country_collection')->toOptionArray();
        }
        foreach($this->_countryCollection as $country) {
            if(strtolower($country['label']) == strtolower($country_name)) {
                return $country['value'];
            }
        }
        return $country_name;
    }
}