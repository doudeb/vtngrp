<?php
class Profileolabs_Lengow_Model_System_Config_Source_Getattributes extends Mage_Core_Model_Config_Data
{


    public function toOptionArray()
    {
        $attribute = Mage::getResourceModel('eav/entity_attribute_collection')->setEntityTypeFilter(Mage::getModel('catalog/product')->getResource()->getTypeId());
        $attributeArray = array();
        
        foreach ($attribute as $option) {
           // if($option->getIsUserDefined() && $option->getFrontendLabel()) {
                $attributeArray[] = array(
                    'value'=>$option->getAttributeCode(),
                    'label'=>$option->getAttributeCode()
                );
         //   }
        }
    
        return $attributeArray;
    }
}
