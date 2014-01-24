<?php

/**
 * Copyright 2013 Lengow.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may
 * not use this file except in compliance with the License. You may obtain
 * a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */


/**
 * The Lengow Marketplace Class.
 *
 * @author Ludovic Drin <ludovic@lengow.com>
 * @copyright 2013 Lengow SAS
 */

class Lengow_Sync_Model_Marketplace {

    public static $XML_MARKETPLACES = 'marketplaces.xml';
    public static $DOM;
    public static $VALID_ACTIONS = array(
                            //  'accept' ,
                                'shipped' ,
                                'refuse' ,
                                'link' ,
                                );
    public static $WSDL_LINK_ORDER = 'https://wsdl.lengow.com/wsdl/link/#MP#/#ID_CLIENT#/#ID_FLUX#/#ORDER_ID#/#INTERNAL_ORDER_ID#/update.xml';
    public $name;
    public $object;
    public $is_loaded = false;
    public $states_lengow = array();
    public $states = array();
    public $actions = array();
    protected $_config;


    /**
      * Construct a new Markerplace instance with xml configuration.
      *
      * @param string $name The name of the marketplace
      */
    public function set($name) {  
        $this->_helper = Mage::helper('sync/data');
        $this->_loadXml();
        $this->name = strtolower($name);
        $object = self::$DOM->xpath('/marketplaces/marketplace[@name=\'' . $this->name . '\']');
        if(!empty($object)) {
            $this->object = $object[0];
            $this->api_url = (string) $this->object->api;
            foreach($this->object->states->state as $state) {
                $this->states_lengow[(string) $state['name']] = (string) $state->lengow;
                $this->states[(string) $state->lengow] = (string) $state['name'];
                if(isset($state->actions)) {
                    foreach($state->actions->action as $action) {
                        $this->actions[(string) $action['type']] = array();
                        $this->actions[(string) $action['type']]['name'] = (string) $action;
                        $params = self::$DOM->xpath('/marketplaces/marketplace[@name=\'' . $this->name . '\']/additional_params/param[@usedby=\'' . (string) $action['type']. '\']');
                        if(count($params)) {
                          foreach($params as $param) {
                              $this->actions[(string) $action['type']]['params'][(string) $param->type]['name'] = (string) $param->name;
                              if(isset($param->accepted_values))
                                  $this->actions[(string) $action['type']]['params'][(string) $param->type]['accepted_values'] = $param->accepted_values->value;
                          }
                        }
                    }
                }
            }
            $this->is_loaded = true;
        }
    }

    /**
      * If marketplace exist in xml configuration file
      *
      * @return boolean
      */
    public function isLoaded() {
        return $this->is_loaded;
    }

    /**
      * Get the real lengow's state 
      *
      * @param string $name The marketplace state
      *
      * @return string The lengow state
      */
    public function getStateLengow($name) {
        return $this->states_lengow[$name];
    }

    /**
      * Get the marketplace's state 
      *
      * @param string $name The lengow state
      *
      * @return string The marketplace state
      */
    public function getState($name) {
        return $this->states[$name];
    }

    /**
      * Get the action with parameters
      *
      * @param string $name The action's name
      *
      * @return array
      */
    public function getAction($name) {
        return $this->actions[$name];
    }

    /**
      * If action exist
      *
      * @param string $name The marketplace state
      *
      * @return boolean
      */
    public function isAction($name) {
        return isset($this->actions[$name]) ? true : false;
    }

    /**
      * Call the Lengow WSDL for current marketplace 
      *
      * @param string $action The name of the action
      * @param string $id_feed The flux ID
      * @param Mage_Sales_Model_Order $order The order
      * @param string $args An array of arguments
      */
    public function wsdl($action, $id_feed, Mage_Sales_Model_Order $order, Mage_Sales_Model_Order_Shipment $shipment, $args = array()) {
        if(!in_array($action, self::$VALID_ACTIONS))
            return false;
        if(!$this->isAction($action))
            return false;
        $call_url = false;
        switch($action) {
            case 'shipped' :
                $call_url = $this->api_url;
                $call_url = str_replace('#ID_FLUX#', $id_feed, $call_url);
                $call_url = str_replace('#ORDER_ID#', $order->getData('order_id_lengow'), $call_url);
                $action_array = $this->getAction($action);
                $action_callback = $action_array['name'];
                $call_url = str_replace('#ACTION#', $action_callback, $call_url);
                if(isset($action_array['params'])) {
                    $gets = array();
                    foreach($action_array['params'] as $type => $param) {
                        switch($type) {
                            case 'tracking' :
                                $trackings = $shipment->getAllTracks();
                                if(!empty($trackings)) {
                                  $first_track = $trackings[0];
                                  $gets[] = $param['name'] . '=' . $first_track->getNumber();
                                }
                                break;
                            case 'carrier' :
                                $trackings = $shipment->getAllTracks();
                                if(!empty($trackings)) {
                                  $first_track = $trackings[0];
                                  $gets[] = $param['name'] . '=' . $first_track->getCarrierCode();
                                }
                                break;
                            case 'tracking_url' :
                                break;
                            case 'shipping_price' :
                                $gets[] = $param['name'] . '=' . $order->getShippingInclTax();
                                break;
                        }
                    }
                    if(count($gets) > 0)
                        $call_url .= '?' . implode('&', $gets);
                }
                break; 
            case 'refuse' :
                $call_url = $this->api_url;
                $call_url = str_replace('#ID_FLUX#', $id_feed, $call_url);
                $call_url = str_replace('#ORDER_ID#', $order->getData('order_id_lengow'), $call_url);
                $action_array = $this->getAction($action);
                $action_callback = $action_array['name'];
                $call_url = str_replace('#ACTION#', $action_callback, $call_url);
                if(isset($action_array['params'])) {
                    $gets = array();
                    foreach($action_array['params'] as $type => $param) {
                        switch($type) {
                            case 'refused_reason' :
                                break;
                        }
                    }
                    if(count($gets) > 0)
                        $call_url .= '?' . implode('&', $gets);
                }
                break; 
            case 'link' :
                $call_url = self::$WSDL_LINK_ORDER;
                $call_url = str_replace('#MP#', $this->name, $call_url);
                $call_url = str_replace('#ID_CLIENT#', $args['id_client'], $call_url);
                $call_url = str_replace('#ID_FLUX#', $id_feed, $call_url);
                $call_url = str_replace('#ORDER_ID#', $order->getData('order_id_lengow'), $call_url);
                $call_url = str_replace('#INTERNAL_ORDER_ID#', $order->getData('entity_id'), $call_url);

        }
        try {
            if($call_url) {
                if(!Mage::getSingleton('sync/config')->isDebugMode()) {
                    $this->_makeRequest($call_url);
                }
                Mage::helper('sync')->log('Order ' . $order->getData('order_id_lengow') . ' : call Lengow WSDL ' . $call_url);
            }
        } catch(Lengow_Sync_Model_Marketplace_Exception $e) {
            Mage::helper('sync')->log('Order ' . $order->getData('order_id_lengow') . ' : call error WSDL ' . $call_url);
            Mage::helper('sync')->log('Order ' . $order->getData('order_id_lengow') . ' : exception ' . $e->getMessage());
        }
    }

    /**
      * Load the xml configuration of all marketplaces
      */
    private function _loadXml() {
        if(!self::$DOM) {
            self::$DOM = simplexml_load_file(Mage::getModuleDir('etc', 'Lengow_Sync') . DS . self::$XML_MARKETPLACES);
        }
    } 

    /**
      * Makes an HTTP request.
      *
      * @param string $url The URL to make the request to
      *
      * @return string The response text
      */
    protected function _makeRequest($url) {
        $ch = curl_init();
        // Options
        $connector = Mage::getSingleton('sync/connector');
        $opts = $connector::$CURL_OPTS;
        $opts[CURLOPT_URL] = $url;
        // Exectute url request
        curl_setopt_array($ch, $opts);
        $result = curl_exec($ch);
        if ($result === false) {
            throw new Lengow_Sync_Model_Marketplace_Exception(
                array('message' => curl_error($ch),
                      'type' => 'CurlException',
                ),
                curl_errno($ch)
            );
        }
        curl_close($ch);
        return $result;
    }

}