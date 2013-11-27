<?php
/**
 * @deprecated use Mage::helper('em0067settings') instead
 * @methods:
 * - get[Section]_[ConfigName]($defaultValue = '')
 */
class EM_Em0067settings_Em0067settings
{
	static function __callStatic($name, $args) {
		if (method_exists(self, $name))
			call_user_func_array(array(self, $name), $args);
			
		elseif (preg_match('/^get([^_][a-zA-Z0-9_]+)$/', $name, $m)) {
			$segs = explode('_', $m[1]);
			foreach ($segs as $i => $seg)
				$segs[$i] = strtolower(preg_replace('/([^A-Z])([A-Z])/', '$1_$2', $seg));

			$value = Mage::getStoreConfig('em0067/'.implode('/', $segs));
			if (!$value) $value = @$args[0];
			return $value;
		}
		
		else 
			call_user_func_array(array(self, $name), $args);
	}

	
	/**
	 * @return array
	 */
	public static function getAllCssConfig() {
		return array(
			'general_color' => Mage::getStoreConfig('em0067/typography/primary_color'),
			'primary_color' => Mage::getStoreConfig('em0067/typography/primary_color'),
			'secondary_color' => Mage::getStoreConfig('em0067/typography/secondary_color'),
			'negative_color' => Mage::getStoreConfig('em0067/typography/negative_color'),
			'line_color' => Mage::getStoreConfig('em0067/typography/line_color'),
			'line_secondary_color' => Mage::getStoreConfig('em0067/typography/line_secondary_color'),
			'line_third_color' => Mage::getStoreConfig('em0067/typography/line_third_color'),
			'primary_bgcolor' => Mage::getStoreConfig('em0067/typography/primary_bgcolor'),
			'secondary_bgcolor' => Mage::getStoreConfig('em0067/typography/secondary_bgcolor'),
			'third_bgcolor' => Mage::getStoreConfig('em0067/typography/third_bgcolor'),
			'fourth_bgcolor' => Mage::getStoreConfig('em0067/typography/fourth_bgcolor'),
			'fifth_bgcolor' => Mage::getStoreConfig('em0067/typography/fifth_bgcolor'),
			'button1' => Mage::getStoreConfig('em0067/typography/button1'),
			'button2' => Mage::getStoreConfig('em0067/typography/button2'),
			'button3' => Mage::getStoreConfig('em0067/typography/button3'),
			'page_bg_image' => Mage::getStoreConfig('em0067/typography/page_bg_image'),
			'box_shadow' => Mage::getStoreConfig('em0067/typography/box_shadow'),
			'general_font' => Mage::getStoreConfig('em0067/typography/general_font'),
			'h1_font' => Mage::getStoreConfig('em0067/typography/h1_font'),
			'h2_font' => Mage::getStoreConfig('em0067/typography/h2_font'),
			'h3_font' => Mage::getStoreConfig('em0067/typography/h3_font'),
			'h4_font' => Mage::getStoreConfig('em0067/typography/h4_font'),
			'h5_font' => Mage::getStoreConfig('em0067/typography/h5_font'),
		);
	}   
}