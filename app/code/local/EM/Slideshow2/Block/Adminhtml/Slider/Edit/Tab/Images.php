<?php
class EM_Slideshow2_Block_Adminhtml_Slider_Edit_Tab_Images extends Mage_Adminhtml_Block_Widget_Form
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }

	public function _toHtml(){
		$this->setTemplate('em_slideshow2/slider_img.phtml');

		$data	=	unserialize(Mage::registry('slideshow2_data')->getImages());

		if($data)	$count	=	count($data);
		else	$count	=	0;

		$this->assign('count', $count);
		$this->assign('data', $data);

		return parent::_toHtml();
	}
	
	public function getSub($info){
		foreach($info as $key=>$val){
			if($val['text'] == "" )	unset($info[$key]);
		}
		$sub['count']	=	count($info);
		$sub['info']	=	$info;

		return $sub;
	}
	
	public function getResizeImage($name,$width = 255, $height = 255){
		if(!$name) return;

		$imagePathFull = Mage::getBaseDir('media').DS.'em_slideshow'.DS.$name;
		$resizePath = $width . 'x' . $height;
		$resizePathFull = Mage::getBaseDir('media'). DS .'em_slideshow' . DS . 'resize' . DS . $resizePath . DS . $name;

		if (file_exists($imagePathFull) && !file_exists($resizePathFull)) {
			$imageObj = new Varien_Image($imagePathFull);
			$imageObj->constrainOnly(TRUE);
			$imageObj->resize($width,$height);
			$imageObj->save($resizePathFull);
		}

		return Mage::getBaseUrl('media'). 'em_slideshow/resize/' . $resizePath . "/"  . $name;	
	}
	
}