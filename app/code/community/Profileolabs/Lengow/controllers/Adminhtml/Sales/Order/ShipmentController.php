<?php
require_once('Mage/Adminhtml/controllers/Sales/Order/ShipmentController.php');
require_once(__DIR__.'/../../../../Model/Manageorders/Connector.php');
require_once(__DIR__.'/../../../../Model/Manageorders/Config.php');

class Profileolabs_Lengow_Adminhtml_Sales_Order_ShipmentController extends Mage_Adminhtml_Sales_Order_ShipmentController
{
    /**
     * Add new tracking number action
     */
    public function addTrackAction()
    {
        $ConfigLengow = new Profileolabs_Lengow_Model_Manageorders_Config();
        if($ConfigLengow->getAny('lengow_mo', 'manageorders', 'tracking_lengow'))
        {
            //Lengow action
            $carrier = $this->getRequest()->getPost('carrier');
            $number  = $this->getRequest()->getPost('number');

            if(!empty($carrier) && !empty($number))
            {
                $shipment_id = $this->_request->shipment_id;
                
                $order = Mage::getModel('sales/order')->getCollection()
                ->addAttributeToFilter('entity_id', $shipment_id)
                ->addAttributeToFilter('from_lengow',array('gt' => 0))
                ->addAttributeToSelect('order_id_lengow')
                ->addAttributeToSelect('from_lengow')
                ->addAttributeToSelect('marketplace_lengow');

                if(sizeof($order) > 0)
                {
                    $order = $order->getData();
                    $order = $order[0];
                    $order_id_lengow = $order['order_id_lengow'];
                    $order_marketplace = $order['marketplace_lengow'];
                    $idFlux = $order['from_lengow'];
                    unset($order);
                    
                    $Lengow = new LengowConnector();
                    $Lengow->lengow_token = $ConfigLengow->getApiKey();
                    $Lengow->idClient = $ConfigLengow->getAny('lengow_apik', 'general', 'login');

                    $array = array(
                        'idClient' => $ConfigLengow->getAny('lengow_apik', 'general', 'login'), 
                        'idFlux' => $idFlux,
                        'trackingColis' => $number,
                        'transporteur' => $carrier,
                        'Marketplace' => $order_marketplace,
                        'idCommandeMP' => $order_id_lengow,
                    );
                    $Lengow->callMethod('updateTrackingMagento', $array);
                }
                unset($Lengow, $ConfigLengow, $carrier, $number, $array);
            }
        }
        parent::addTrackAction();
    }

    /**
     * Remove tracking number from shipment
     */
    public function removeTrackAction()
    {
        $ConfigLengow = new Profileolabs_Lengow_Model_Manageorders_Config();
        if($ConfigLengow->getAny('lengow_mo', 'manageorders', 'tracking_lengow'))
        {
            //Lengow action
            $shipment_id = $this->_request->shipment_id;
            
            $order = Mage::getModel('sales/order')->getCollection()
            ->addAttributeToFilter('entity_id', $shipment_id)
            ->addAttributeToFilter('from_lengow',array('gt' => 0))
            ->addAttributeToSelect('order_id_lengow')
            ->addAttributeToSelect('from_lengow')
            ->addAttributeToSelect('marketplace_lengow');

            if(sizeof($order) > 0)
            {
                $order = $order->getData();
                $order = $order[0];
                $order_id_lengow = $order['order_id_lengow'];
                $order_marketplace = $order['marketplace_lengow'];
                $idFlux = $order['from_lengow'];
                unset($order);

                $Lengow = new LengowConnector();
                $Lengow->lengow_token = $ConfigLengow->getApiKey();
                $Lengow->idClient = $ConfigLengow->getAny('lengow_apik', 'general', 'login');

                $array = array(
                    'idClient' => $ConfigLengow->getAny('lengow_apik', 'general', 'login'), 
                    'idFlux' => $idFlux,
                    'trackingColis' => '',
                    'transporteur' => '',
                    'Marketplace' => $order_marketplace,
                    'idCommandeMP' => $order_id_lengow,
                );

                $Lengow->callMethod('updateTrackingMagento', $array);
                unset($Lengow, $ConfigLengow, $carrier, $number, $array);
            }
        }
        parent::removeTrackAction();
    }

}
