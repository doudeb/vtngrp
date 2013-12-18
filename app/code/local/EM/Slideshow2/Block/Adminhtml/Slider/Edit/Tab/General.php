<?php
class EM_Slideshow2_Block_Adminhtml_Slider_Edit_Tab_General extends Mage_Adminhtml_Block_Widget_Form
{
  protected function _prepareForm()
  {
      $form = new Varien_Data_Form();
      $this->setForm($form);
      $fieldset = $form->addFieldset('slideshow2_general', array('legend'=>Mage::helper('slideshow2')->__('General')));
     
		$fieldset->addField('name', 'text', array(
		  'label'     => Mage::helper('slideshow2')->__('Name'),
		  'class'     => 'required-entry',
		  'required'  => true,
		  'name'      => 'name',
		));
		
		// status field
		$fieldset->addField('status_slideshow', 'select', array(
			'label'     => Mage::helper('slideshow2')->__('Status'),
			'title'     => Mage::helper('slideshow2')->__('Status'),
			'name'      => 'status_slideshow',
			'required'  => true,
			'options'   => array(
				'1' => Mage::helper('slideshow2')->__('Enabled'),
				'0' => Mage::helper('slideshow2')->__('Disabled'),
			),
		));

		$fieldset->addField('delay', 'text', array(
		  'label'     => Mage::helper('slideshow2')->__('Delay'),
		  'required'  => true,
		  'name'      => 'delay',
		));
		
		$fieldset->addField('touch', 'radios', array(
		  'label'     => Mage::helper('slideshow2')->__('Touch Enabled'),
		  'name'      => 'touch',
		  'values'    => array(
			  array(
				  'value'     => 'on',
				  'label'     => Mage::helper('slideshow2')->__('On'),
			  ),
			  array(
				  'value'     => 'off',
				  'label'     => Mage::helper('slideshow2')->__('Off'),
			  ),
		  ),
		));
		
		$fieldset->addField('stop_hover', 'radios', array(
		  'label'     => Mage::helper('slideshow2')->__('Stop On Hover'),
		  'name'      => 'stop_hover',
		  'values'    => array(
			  array(
				  'value'     => 'on',
				  'label'     => Mage::helper('slideshow2')->__('On'),
			  ),
			  array(
				  'value'     => 'off',
				  'label'     => Mage::helper('slideshow2')->__('Off'),
			  ),
		  ),
		));
		
		$fieldset->addField('shuffle_mode', 'radios', array(
		  'label'     => Mage::helper('slideshow2')->__('Shuffle Mode'),
		  'name'      => 'shuffle_mode',
		  'values'    => array(
			  array(
				  'value'     => 'on',
				  'label'     => Mage::helper('slideshow2')->__('On'),
			  ),
			  array(
				  'value'     => 'off',
				  'label'     => Mage::helper('slideshow2')->__('Off'),
			  ),
		  ),
		));
		
		$fieldset->addField('stop_slider', 'radios', array(
		  'label'     => Mage::helper('slideshow2')->__('Stop Slider'),
		  'name'      => 'stop_slider',
		  'values'    => array(
			  array(
				  'value'     => 'on',
				  'label'     => Mage::helper('slideshow2')->__('On'),
			  ),
			  array(
				  'value'     => 'off',
				  'label'     => Mage::helper('slideshow2')->__('Off'),
			  ),
		  ),
		));
	  
		$fieldset->addField('stop_after_loop', 'text', array(
		  'label'     => Mage::helper('slideshow2')->__('Stop After Loops'),
		  'name'      => 'stop_after_loop',
		));
		
		$fieldset->addField('stop_at_slide', 'text', array(
		  'label'     => Mage::helper('slideshow2')->__('Stop At Slide'),
		  'name'      => 'stop_at_slide',
		));
		
		$fieldset->addField('slider_type', 'radios', array(
		  'label'     => Mage::helper('slideshow2')->__('Slider Type'),
		  'class'     => 'slider_type',
		  'name'      => 'slider_type',
		  'values'    => array(
			  array(
				  'value'     => 'fixed',
				  'label'     => Mage::helper('slideshow2')->__('Fixed'),
			  ),
			  array(
				  'value'     => 'responsitive',
				  'label'     => Mage::helper('slideshow2')->__('Responsitive'),
			  ),
			  array(
				  'value'     => 'fullwidth',
				  'label'     => Mage::helper('slideshow2')->__('Fullwidth'),
			  ),
		  ),
		));
		
		$fieldset2 = $form->addFieldset('slideshow2_general2', array('legend'=>Mage::helper('slideshow2')->__('Slider Size')));

		$fieldset2->addField('size_width', 'text', array(
		  'label'     => Mage::helper('slideshow2')->__('Slider Width'),
		  'name'      => 'slider_params[size_width]',
		  'note'	  => Mage::helper('slideshow2')->__('This field is "Grid Width" if choose Fullwidth !'),
		));
		
		$fieldset2->addField('size_height', 'text', array(
		  'label'     => Mage::helper('slideshow2')->__('Slider Height'),
		  'name'      => 'slider_params[size_height]',
		  'note'	  => Mage::helper('slideshow2')->__('This field is "Slider Max Height" if choose Fullwidth !'),
		));
		
		$fieldset3 = $form->addFieldset('slideshow2_general3', array('legend'=>Mage::helper('slideshow2')->__('Responsive Sizes')));
		
		
		$fieldset3->addField('screen_width_1', 'text', array(
		  'label'     => Mage::helper('slideshow2')->__('Screen Width 1'),
		  'name'      => 'slider_params[screen_width_1]',
		));
		
		$fieldset3->addField('slider_width_1', 'text', array(
		  'label'     => Mage::helper('slideshow2')->__('Slider Width 1'),
		  'name'      => 'slider_params[slider_width_1]',
		));
		
		$fieldset3->addField('screen_width_2', 'text', array(
		  'label'     => Mage::helper('slideshow2')->__('Screen Width 2'),
		  'name'      => 'slider_params[screen_width_2]',
		));
		
		$fieldset3->addField('slider_width_2', 'text', array(
		  'label'     => Mage::helper('slideshow2')->__('Slider Width 2'),
		  'name'      => 'slider_params[slider_width_2]',
		));
		
		$fieldset3->addField('screen_width_3', 'text', array(
		  'label'     => Mage::helper('slideshow2')->__('Screen Width 3'),
		  'name'      => 'slider_params[screen_width_3]',
		));
		
		$fieldset3->addField('slider_width_3', 'text', array(
		  'label'     => Mage::helper('slideshow2')->__('Slider Width 3'),
		  'name'      => 'slider_params[slider_width_3]',
		));
		
		$fieldset3->addField('screen_width_4', 'text', array(
		  'label'     => Mage::helper('slideshow2')->__('Screen Width 4'),
		  'name'      => 'slider_params[screen_width_4]',
		));
		
		$fieldset3->addField('slider_width_4', 'text', array(
		  'label'     => Mage::helper('slideshow2')->__('Slider Width 4'),
		  'name'      => 'slider_params[slider_width_4]',
		));
		
		$fieldset3->addField('screen_width_5', 'text', array(
		  'label'     => Mage::helper('slideshow2')->__('Screen Width 5'),
		  'name'      => 'slider_params[screen_width_5]',
		));
		
		$fieldset3->addField('slider_width_5', 'text', array(
		  'label'     => Mage::helper('slideshow2')->__('Slider Width 5'),
		  'name'      => 'slider_params[slider_width_5]',
		));
		
		$fieldset3->addField('screen_width_6', 'text', array(
		  'label'     => Mage::helper('slideshow2')->__('Screen Width 6'),
		  'name'      => 'slider_params[screen_width_6]',
		));
		
		$fieldset3->addField('slider_width_6', 'text', array(
		  'label'     => Mage::helper('slideshow2')->__('Slider Width 6'),
		  'name'      => 'slider_params[slider_width_6]',
		));
		
     
      if ( Mage::getSingleton('adminhtml/session')->getSlideshow2Data() )
      {
          $form->setValues(Mage::getSingleton('adminhtml/session')->getSlideshow2Data());
          Mage::getSingleton('adminhtml/session')->setSlideshow2Data(null);
      } elseif ( Mage::registry('slideshow2_data') ) {
          $form->setValues(Mage::registry('slideshow2_data')->getData());
      }
      return parent::_prepareForm();
  }
}