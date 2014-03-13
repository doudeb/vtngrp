<?php
/**
 * LaPoste_ExpeditorINet
 *
 * @category    LaPoste
 * @package     LaPoste_ExpeditorINet
 * @copyright   Copyright (c) 2010 La Poste
 * @author 	    Smile (http://www.smile.fr) & Jibé
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class LaPoste_ExpeditorINet_ExportController extends Mage_Adminhtml_Controller_Action
{

    /**
     * Constructor
     */
    protected function _construct()
    {
        $this->setUsedModuleName('LaPoste_ExpeditorINet');
    }

    /**
     * Main action : show orders list
     */
    public function indexAction()
    {
        $this->loadLayout()
            ->_setActiveMenu('sales/expeditorinet/export')
            ->_addContent($this->getLayout()->createBlock('expeditorinet/export_orders'))
            ->renderLayout();
    }

    /**
     * convert civlity in letters to a code for Expeditor
     * @param civility : string
     */
    private function getExpeditorCodeForCivility($civility)
    {
      if (strtolower($civility) == 'm.') {
	return 2;
      } elseif (strtolower($civility) == 'mme') {
	return 3;
      } elseif (strtolower($civility) == 'mlle') {
        return 4;
      } else {
        return 1;
      }
    }

    /**
     * Export Action
     * Generates a CSV file to download
     */
    public function exportAction()
    {
	    /* get the orders */
        $orderIds = $this->getRequest()->getPost('order_ids');

        /**
         * Get configuration
         */
        $separator = Mage::helper('expeditorinet')->getConfigurationFieldSeparator();
        $delimiter = Mage::helper('expeditorinet')->getConfigurationFieldDelimiter();
        if ($delimiter == 'simple_quote') {
            $delimiter = "'";
        } else if ($delimiter == 'double_quotes') {
            $delimiter = '"';
        }
        $lineBreak = Mage::helper('expeditorinet')->getConfigurationEndOfLineCharacter();
        if ($lineBreak == 'lf') {
            $lineBreak = "\n";
        } else if ($lineBreak == 'cr') {
            $lineBreak = "\r";
        } else if ($lineBreak == 'crlf') {
            $lineBreak = "\r\n";
        }
        $fileExtension = Mage::helper('expeditorinet')->getConfigurationFileExtension();
        $fileCharset = Mage::helper('expeditorinet')->getConfigurationFileCharset();

        /* So Colissimo product codes for Hors Domicile */
        $hd_productcodes = array (
           'BPR',
           'ACP',
           'CIT',
           'A2P',
           'MRL',
           'CDI'
        );

        /* set the filename */
        $filename   = 'orders_export_'.Mage::getSingleton('core/date')->date('Ymd_His').$fileExtension;

        /* get company commercial name */
        $commercialName = Mage::helper('expeditorinet')->getCompanyCommercialName();

        /* initialize the content variable */
        $content = '';

        if (!empty($orderIds)) {
            foreach ($orderIds as $orderId) {

	            /* get the order */
                $order = Mage::getModel('sales/order')->load($orderId);

                //if the product code is for Hors Domicile we should take the billing address
                if (in_array($order->getSocoProductCode(), $hd_productcodes)) {
                /* get the shipping address */
                	$address = $order->getBillingAddress();
                } else {
                /* get the billing address */
                	$address = $order->getShippingAddress();
                }
                /*
                Colonne A : R�f�rence interne [15 caract�res alphanum�riques max]
                Colonne B : Raison sociale [38 caract�res alphanum�riques max]
                Colonne C : Libell� civilit� [Liste des valeurs consultables dans l'aide]
                Colonne D  :  Nom [17 caract�res alphanum�riques max]
                Colonne E  :  Pr�nom [10 caract�res alphanum�riques max]
                Colonne F :  Service / N� Escalier / Etage [38 caract�res alphanum�riques max]
                Colonne G : B�timent / Immeuble [38 caract�res alphanum�riques max]
                Colonne H : N� de voie [Format NNNN ou NNN A]
                Colonne I : Nom de voie [32 caract�res alphanum�riques max]
                Colonne J : Lieu-dit / Boite Postale [38 caract�res alphanum�riques max]
                Colonnes K : Code Postal / Code Cedex [Exactement 5 caract�res num�riques]
                Colonne L : Ville / Libell� Cedex [32 caract�res alphanum�riques max]
                Colonne M : Niveau de garantie [Pour la lettre recommand�e uniquement R1, R2 ou R3]
                Colonne N : Poids [Limites de poids en fonction des produits]
                Colonne O : Valeur d�clar�e [Limite � consulter sur l'offre valeur d�clar�e]
                 */

                /* real order id */
                $content = $this->_addFieldToCsv($content, $delimiter, $order->getRealOrderId());
                $content .= $separator;
                /* customer company */
                $content = $this->_addFieldToCsv($content, $delimiter, $address->getCompany());
                $content .= $separator;
                /* civilite */
                $content = $this->_addFieldToCsv($content, $delimiter, $order->getSocoCivility());
                $content .= $separator;
                /* customer first name */
                $content = $this->_addFieldToCsv($content, $delimiter, ($address->getCompany()!=""?"":$address->getFirstname()));
                $content .= $separator;
                /* customer last name */
                $content = $this->_addFieldToCsv($content, $delimiter, $address->getLastname());
                $content .= $separator;
                /* street address, on 4 fields */
                /* street number */
                preg_match('/\d{1,4}/', $address->getStreet(1),$street_number);
                $content = $this->_addFieldToCsv($content, $delimiter, trim(str_replace($street_number[0], '', preg_replace("/[^A-Za-z0-9 ]/", '',$address->getStreet(1)))));
                $content .= $separator;
                $content = $this->_addFieldToCsv($content, $delimiter, preg_replace("/[^A-Za-z0-9 ]/", '',$address->getStreet(2)));
                $content .= $separator;
                $content = $this->_addFieldToCsv($content, $delimiter, $street_number[0]);
                $content .= $separator;
                $content = $this->_addFieldToCsv($content, $delimiter, trim(str_replace($street_number[0], '', preg_replace("/[^A-Za-z0-9 ]/", '',$address->getStreet(1)))));
                $content .= $separator;
                $content = $this->_addFieldToCsv($content, $delimiter, '');
                $content .= $separator;
                /* postal code */
                $content = $this->_addFieldToCsv($content, $delimiter, $address->getPostcode());
                $content .= $separator;
                /* city */
                $content = $this->_addFieldToCsv($content, $delimiter, $address->getCity());
                $content .= $separator;
                $content = $this->_addFieldToCsv($content, $delimiter, '');
                $content .= $separator;
                /* total weight */
                $total_weight = 0;
                $items = $order->getAllItems();
                foreach ($items as $item) {
                    $total_weight += round($item['row_weight']*1000);
                }
                $content = $this->_addFieldToCsv($content, $delimiter, $total_weight);
                $content .= $separator;
                /* order price */
                $content = $this->_addFieldToCsv($content, $delimiter, ($order->getGrandTotal() - $order->getShippingAmount()));
                $content .= $separator;

                $content .= $lineBreak;
            }

            /* decode the content, depending on the charset */
            if ($fileCharset == 'ISO-8859-1') {
            	$content = utf8_decode($content);
            }

            /* pick file mime type, depending on the extension */
            if ($fileExtension == '.txt') {
            	$fileMimeType = 'text/plain';
            } else if ($fileExtension == '.csv') {
            	$fileMimeType = 'application/csv';
            } else {
            	// default
                $fileMimeType = 'text/plain';
            }

            /* download the file */
            return $this->_prepareDownloadResponse($filename, $content, $fileMimeType .'; charset="'. $fileCharset .'"');
        }
        else {
	        $this->_getSession()->addError($this->__('No Order has been selected'));
        }
    }

    /**
     * Add a new field to the csv file
     * @param csvContent : the current csv content
     * @param fieldDelimiter : the delimiter character
     * @param fieldContent : the content to add
     * @return : the concatenation of current content and content to add
     */
    private function _addFieldToCsv($csvContent, $fieldDelimiter, $fieldContent) {
	    return $csvContent . $fieldDelimiter . $fieldContent . $fieldDelimiter;
    }

}
