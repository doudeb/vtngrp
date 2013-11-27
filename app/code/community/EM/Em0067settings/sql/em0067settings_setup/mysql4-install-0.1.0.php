<?php

$installer = $this;

$installer->startSetup();


####################################################################################################
# ADD THEMEFRAMEWORK LAYOUT
####################################################################################################

$model = Mage::getModel('themeframework/area');
	
$data = array(
	'package_theme'  => 'default/em0067',
	'layout'         => '1column',	
	'is_active'      => 1,
	'content_decode' => unserialize(<<<EOB
a:6:{i:0;a:7:{s:10:"custom_css";s:9:"container";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:5:"fluid";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:1:{i:0;s:6:"header";}}i:1;a:7:{s:10:"custom_css";s:7:"emarea1";s:10:"inner_html";s:40:"<div class="container">{{content}}</div>";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:5:"fluid";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:1:{i:0;s:8:"em_area1";}}i:2;a:7:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:43:"<div class="emslideshow"> {{content}}</div>";s:13:"display_empty";b:0;s:5:"fluid";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:2:{i:0;a:11:{s:6:"column";s:2:"18";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area2";}}i:1;a:11:{s:6:"column";s:1:"6";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area13";}}}}i:3;a:7:{s:10:"custom_css";s:14:"container-main";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:5:"fluid";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:11:{i:0;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area3";}}i:1;a:11:{s:6:"column";s:2:"20";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:1;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area4";}}i:2;a:11:{s:6:"column";s:1:"4";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:1;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area5";}}i:3;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:7:"em_main";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:5:{i:0;s:11:"breadcrumbs";i:1;s:15:"global_messages";i:2;s:8:"em_area6";i:3;s:7:"content";i:4;s:8:"em_area7";}}i:4;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:1;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area8";}}i:5;a:11:{s:6:"column";s:1:"6";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area14";}}i:6;a:11:{s:6:"column";s:2:"18";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area15";}}i:7;s:5:"clear";i:8;a:11:{s:6:"column";s:2:"20";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area16";}}i:9;a:11:{s:6:"column";s:1:"4";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area17";}}i:10;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area18";}}}}i:4;a:7:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:46:"<div class="footer-wrapper"> {{content}}</div>";s:13:"display_empty";b:0;s:5:"fluid";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:1:{i:0;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:2:{i:0;s:8:"em_area9";i:1;s:6:"footer";}}}}i:5;a:7:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:11:"{{content}}";s:13:"display_empty";b:0;s:5:"fluid";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:1:{i:0;s:15:"before_body_end";}}}
EOB
	)
);
$model->setData($data)->setStores(array(0))->save();

$data = array(
	'package_theme'  => 'default/em0067',
	'layout'         => '3columns',	
	'is_active'      => 1,
	'content_decode' => unserialize(<<<EOB
a:6:{i:0;a:7:{s:10:"custom_css";s:9:"container";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:5:"fluid";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:1:{i:0;s:6:"header";}}i:1;a:7:{s:10:"custom_css";s:7:"emarea1";s:10:"inner_html";s:40:"<div class="container">{{content}}</div>";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:5:"fluid";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:1:{i:0;s:8:"em_area1";}}i:2;a:7:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:43:"<div class="emslideshow"> {{content}}</div>";s:13:"display_empty";b:0;s:5:"fluid";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:2:{i:0;a:11:{s:6:"column";s:2:"18";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area2";}}i:1;a:11:{s:6:"column";s:1:"6";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area13";}}}}i:3;a:7:{s:10:"custom_css";s:14:"container-main";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:5:"fluid";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:11:{i:0;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area3";}}i:1;a:11:{s:6:"column";s:2:"16";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:1;s:10:"custom_css";s:14:"em_main pull_5";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:6:{i:0;s:8:"em_area4";i:1;s:11:"breadcrumbs";i:2;s:15:"global_messages";i:3;s:8:"em_area6";i:4;s:7:"content";i:5;s:8:"em_area7";}}i:2;a:11:{s:6:"column";s:1:"4";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:1;s:4:"last";b:0;s:10:"custom_css";s:15:"em_left pull_14";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:3:{i:0;s:9:"em_area11";i:1;s:4:"left";i:2;s:9:"em_area12";}}i:3;a:11:{s:6:"column";s:1:"4";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:8:"em_right";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:3:{i:0;s:8:"em_area5";i:1;s:5:"right";i:2;s:9:"em_area10";}}i:4;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:1;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area8";}}i:5;a:11:{s:6:"column";s:1:"6";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area14";}}i:6;a:11:{s:6:"column";s:2:"18";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area15";}}i:7;s:5:"clear";i:8;a:11:{s:6:"column";s:2:"20";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area16";}}i:9;a:11:{s:6:"column";s:1:"4";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area17";}}i:10;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area18";}}}}i:4;a:7:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:46:"<div class="footer-wrapper"> {{content}}</div>";s:13:"display_empty";b:0;s:5:"fluid";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:1:{i:0;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:2:{i:0;s:8:"em_area9";i:1;s:6:"footer";}}}}i:5;a:7:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:11:"{{content}}";s:13:"display_empty";b:0;s:5:"fluid";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:1:{i:0;s:15:"before_body_end";}}}
EOB
	)
);
$model->setData($data)->setStores(array(0))->save();

$data = array(
	'package_theme'  => 'default/em0067',
	'layout'         => '2columns-left',	
	'is_active'      => 1,
	'content_decode' => unserialize(<<<EOB
a:6:{i:0;a:7:{s:10:"custom_css";s:9:"container";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:5:"fluid";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:1:{i:0;s:6:"header";}}i:1;a:7:{s:10:"custom_css";s:7:"emarea1";s:10:"inner_html";s:40:"<div class="container">{{content}}</div>";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:5:"fluid";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:1:{i:0;s:8:"em_area1";}}i:2;a:7:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:43:"<div class="emslideshow"> {{content}}</div>";s:13:"display_empty";b:0;s:5:"fluid";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:2:{i:0;a:11:{s:6:"column";s:2:"18";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area2";}}i:1;a:11:{s:6:"column";s:1:"6";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area13";}}}}i:3;a:7:{s:10:"custom_css";s:14:"container-main";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:5:"fluid";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:10:{i:0;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area3";}}i:1;a:11:{s:6:"column";s:2:"20";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:1;s:10:"custom_css";s:14:"em_main pull_5";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:6:{i:0;s:8:"em_area4";i:1;s:11:"breadcrumbs";i:2;s:15:"global_messages";i:3;s:8:"em_area6";i:4;s:7:"content";i:5;s:8:"em_area7";}}i:2;a:11:{s:6:"column";s:1:"4";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:1;s:4:"last";b:0;s:10:"custom_css";s:15:"em_left pull_19";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:3:{i:0;s:8:"em_area5";i:1;s:4:"left";i:2;s:9:"em_area10";}}i:3;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:1;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area8";}}i:4;a:11:{s:6:"column";s:1:"6";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area14";}}i:5;a:11:{s:6:"column";s:2:"18";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area15";}}i:6;s:5:"clear";i:7;a:11:{s:6:"column";s:2:"20";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area16";}}i:8;a:11:{s:6:"column";s:1:"4";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area17";}}i:9;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:0:{}}}}i:4;a:7:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:46:"<div class="footer-wrapper"> {{content}}</div>";s:13:"display_empty";b:0;s:5:"fluid";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:1:{i:0;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:2:{i:0;s:8:"em_area9";i:1;s:6:"footer";}}}}i:5;a:7:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:11:"{{content}}";s:13:"display_empty";b:0;s:5:"fluid";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:1:{i:0;s:15:"before_body_end";}}}
EOB
	)
);
$model->setData($data)->setStores(array(0))->save();

$data = array(
	'package_theme'  => 'default/em0067',
	'layout'         => '2columns-right',	
	'is_active'      => 1,
	'content_decode' => unserialize(<<<EOB
a:6:{i:0;a:7:{s:10:"custom_css";s:9:"container";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:5:"fluid";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:1:{i:0;s:6:"header";}}i:1;a:7:{s:10:"custom_css";s:7:"emarea1";s:10:"inner_html";s:40:"<div class="container">{{content}}</div>";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:5:"fluid";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:1:{i:0;s:8:"em_area1";}}i:2;a:7:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:43:"<div class="emslideshow"> {{content}}</div>";s:13:"display_empty";b:0;s:5:"fluid";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:2:{i:0;a:11:{s:6:"column";s:2:"18";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area2";}}i:1;a:11:{s:6:"column";s:1:"6";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area13";}}}}i:3;a:7:{s:10:"custom_css";s:14:"container-main";s:10:"inner_html";s:0:"";s:10:"outer_html";s:0:"";s:13:"display_empty";b:0;s:5:"fluid";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:10:{i:0;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area3";}}i:1;a:11:{s:6:"column";s:2:"20";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:1;s:10:"custom_css";s:7:"em_main";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:6:{i:0;s:8:"em_area4";i:1;s:11:"breadcrumbs";i:2;s:15:"global_messages";i:3;s:8:"em_area6";i:4;s:7:"content";i:5;s:8:"em_area7";}}i:2;a:11:{s:6:"column";s:1:"4";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:1;s:4:"last";b:0;s:10:"custom_css";s:8:"em_right";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:3:{i:0;s:8:"em_area5";i:1;s:5:"right";i:2;s:9:"em_area10";}}i:3;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:1;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:8:"em_area8";}}i:4;a:11:{s:6:"column";s:1:"6";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area14";}}i:5;a:11:{s:6:"column";s:2:"18";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area15";}}i:6;s:5:"clear";i:7;a:11:{s:6:"column";s:2:"20";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area16";}}i:8;a:11:{s:6:"column";s:1:"4";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area17";}}i:9;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:1:{i:0;s:9:"em_area18";}}}}i:4;a:7:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:46:"<div class="footer-wrapper"> {{content}}</div>";s:13:"display_empty";b:0;s:5:"fluid";b:0;s:4:"type";s:12:"container_24";s:5:"items";a:1:{i:0;a:11:{s:6:"column";s:2:"24";s:4:"push";s:0:"";s:4:"pull";s:0:"";s:6:"prefix";s:0:"";s:6:"suffix";s:0:"";s:5:"first";b:0;s:4:"last";b:0;s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:13:"display_empty";b:0;s:5:"items";a:2:{i:0;s:8:"em_area9";i:1;s:6:"footer";}}}}i:5;a:7:{s:10:"custom_css";s:0:"";s:10:"inner_html";s:0:"";s:10:"outer_html";s:11:"{{content}}";s:13:"display_empty";b:0;s:5:"fluid";b:0;s:4:"type";s:14:"container_free";s:5:"items";a:1:{i:0;s:15:"before_body_end";}}}
EOB
	)
);
$model->setData($data)->setStores(array(0))->save();


####################################################################################################
# INSERT STATIC BLOCKS
####################################################################################################
$helper = Mage::helper('em0067settings');
$block = Mage::getModel('cms/block');
$stores = array(0);
$prefixBlock = 'em0067_';

// em0067 - Area 1 - Text
//$dataBlock = array(
//	'title' => 'em0067 - Area 1 - Text',
//	'identifier' => $prefixBlock.'area1_text',
//	'stores' => $stores,
//	'is_active' => 1,
//	'content'	=> <<<EOB

//EOB
//);
//$block = $helper->insertStaticBlock($dataBlock);
//$block_id['area1_text'] = $block->getId();

//EM0067 - Area 13 - Banners
$dataBlock = array(
	'title' => 'EM0067 - Area 13 - Banners',
	'identifier' => $prefixBlock.'area13_banners',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<p><a href="#"><img class="fluid" src="{{skin url='images/media/area13_banner1.png'}}" alt="" /></a></p>
<p><a href="#"><img class="fluid" src="{{skin url='images/media/area13_banner2.png'}}" alt="" /></a></p>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['area13_banners'] = $block->getId();


// EM0067 - Area 3 - Popular Categories
$dataBlock = array(
	'title' => 'EM0067 - Area 3 - Popular Categories',
	'identifier' => $prefixBlock.'area3_popular_categories',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div>{{block type="core/template" name="featured_category" template="cms/featured_category.phtml"}}</div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['area3_popular_categories'] = $block->getId();

// EM0067 - Area 5 - Banners
$dataBlock = array(
	'title' => 'EM0067 - Area 5 - Banners',
	'identifier' => $prefixBlock.'area5_banners',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<p><a href="#"><img class="max-fluid" style="border: 1px solid #dcdcdc;" src="{{skin url='images/media/area5_banner1.png'}}" alt="" /></a></p>
<p><a href="#"><img class="max-fluid" src="{{skin url='images/media/area5_banner2.png'}}" alt="" /></a></p>
<p><a href="#"><img class="max-fluid" style="border: 1px solid #dcdcdc;" src="{{skin url='images/media/area5_banner3.png'}}" alt="" /></a></p>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['area5_banners'] = $block->getId();

// EM0067 - Area 8 - Banners
$dataBlock = array(
	'title' => 'EM0067 - Area 8 - Banners',
	'identifier' => $prefixBlock.'area8_banners',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div class="row">
<div class="span12"><a href="#"><img class="max-fluid" src="{{skin url='images/media/area8_banner1.png'}}" alt="" /></a></div>
<div class="span12 "><a href="#"><img class="max-fluid" src="{{skin url='images/media/area8_banner2.png'}}" alt="" /></a></div>
</div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['area8_banners'] = $block->getId();

// EM0067 - Area 14 - Banners - Left
$dataBlock = array(
	'title' => 'EM0067 - Area 14 - Banners - Left',
	'identifier' => $prefixBlock.'area14_banners_left',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<p><a href="#"><img class="max-fluid" style="border: 1px solid #dcdcdc;" src="{{skin url='images/media/area14_banner3.png'}}" alt="" /></a></p>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['area14_banners_left'] = $block->getId();

// EM0067 - Area 17 - Banners - Deal
$dataBlock = array(
	'title' => 'EM0067 - Area 17 - Banners - Deal',
	'identifier' => $prefixBlock.'area17_banners_deal',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<p><a href="#"><img class="max-fluid" style="border: 1px solid #dcdcdc;" src="{{skin url='images/media/area17_banner4.png'}}" alt="" /></a></p>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['area17_banners_deal'] = $block->getId();

// EM0067 - Area 18 - Links
$dataBlock = array(
	'title' => 'EM0067 - Area 18 - Links',
	'identifier' => $prefixBlock.'area18_links',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div class="row">
<div class="span6">
<h3>Popular Searches</h3>
<ul>
<li><a href="#">Praesent ullamcorper</a></li>
<li><a href="#">Sapien eget nisl vehicula</a></li>
<li><a href="#">Ut accumsan massa laoreet</a></li>
<li><a href="#">Suspendisse et tincidunt</a></li>
<li><a href="#">Nulla luctus nibh ut erat</a></li>
<li><a href="#">Facilisis convallis</a></li>
<li><a href="#">Suspendisse porta</a></li>
<li><a href="#">Pellentesque ipsum</a></li>
<li><a href="#">Non pharetra ipsum lavinia</a></li>
</ul>
</div>
<div class="span6">
<h3>Shop by Hardwares</h3>
<ul>
<li><a href="#">Hard Disk</a></li>
<li><a href="#">RAM</a></li>
<li><a href="#">Video Card</a></li>
<li><a href="#">Mainboard</a></li>
<li><a href="#">PSU</a></li>
<li><a href="#">Case</a></li>
<li><a href="#">Sound Card</a></li>
<li><a href="#">Monitor</a></li>
<li><a href="#">More...</a></li>
</ul>
</div>
<div class="span6">
<h3>Shop by Brands</h3>
<ul>
<li><a href="#">Hard Disk</a></li>
<li><a href="#">RAM</a></li>
<li><a href="#">Video Card</a></li>
<li><a href="#">Mainboard</a></li>
<li><a href="#">PSU</a></li>
<li><a href="#">Case</a></li>
<li><a href="#">Sound Card</a></li>
<li><a href="#">Monitor</a></li>
<li><a href="#">More...</a></li>
</ul>
</div>
<div class="span6">
<h3>Popular Products</h3>
<ul>
<li><a href="#">Praesent ullamcorper</a></li>
<li><a href="#">Sapien eget nisl vehicula</a></li>
<li><a href="#">Ut accumsan massa laoreet</a></li>
<li><a href="#">Suspendisse et tincidunt</a></li>
<li><a href="#">Nulla luctus nibh ut erat</a></li>
<li><a href="#">Facilisis convallis</a></li>
<li><a href="#">Suspendisse porta</a></li>
<li><a href="#">Pellentesque ipsum</a></li>
<li><a href="#">Non pharetra ipsum lavinia</a></li>
</ul>
</div>
</div>
<div class="row">
<div class="span24">
<h3>We provide to you</h3>
<div class="row">
<div class="span6"><a href="#"> <span class="icon shipping f-left">icon</span> <span class="h4">Fast Shipping</span></a></div>
<div class="span6"><a href="#"> <span class="icon service f-left">icon</span> <span class="h4">Friendly &amp; Trused Service</span> </a></div>
<div class="span6"><a href="#"> <span class="icon return f-left">icon</span> <span class="h4">Easy Returns</span> </a></div>
<div class="span6"><a href="#"> <span class="icon secured f-left">icon</span> <span class="h4">Safe &amp; Secured</span> </a></div>
</div>
</div>
</div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['area18_links'] = $block->getId();

// EM0067 - Area 9 - Links
$dataBlock = array(
	'title' => 'EM0067 - Area 9 - Links',
	'identifier' => $prefixBlock.'area9_links',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div class="row">
<div class="span6">{{block type="blog/post_list_recent" name="erea9.blog" template="em_blog/post/list/area9_recent.phtml"}}</div>
<div class="span6">
<h3>Company Info</h3>
<ul>
<li><a href="#">Praesent ullamcorper</a></li>
<li><a href="#">Sapien eget nisl vehicula</a></li>
<li><a href="#">Ut accumsan massa laoreet</a></li>
<li><a href="#">Suspendisse et tincidunt</a></li>
<li><a href="#">Nulla luctus nibh ut erat</a></li>
</ul>
<h3>Policy Info</h3>
<ul>
<li><a href="#">Praesent ullamcorper</a></li>
<li><a href="#">Sapien eget nisl vehicula</a></li>
<li><a href="#">Ut accumsan massa laoreet</a></li>
<li><a href="#">Suspendisse et tincidunt</a></li>
<li><a href="#">Nulla luctus nibh ut erat</a></li>
</ul>
</div>
<div class="span6">
<h3>Categories</h3>
<ul>
<li><a href="furniture.html">Computers</a></li>
<li><a href="electronics/cell-phones.html">Computer Parts</a></li>
<li><a href="apparel/shirts.html">TV &amp; Video</a></li>
<li><a href="apparel/shoes.html">Audio</a></li>
<li><a href="hard-drives.html">Cameras</a></li>
<li><a href="electronics/cameras.html">Car&amp;GPS</a></li>
<li><a href="electronics/computers.html">Cell Phones</a></li>
<li><a href="laptop.html">Softwares</a></li>
<li><a href="tablets.html">Video Games</a></li>
</ul>
<h3>Contact Us</h3>
<ul>
<li><a href="#">Resellers</a></li>
<li><a href="#">Email Us</a></li>
<li><a href="#">FAQ</a></li>
</ul>
</div>
<div class="span6">{{block type="newsletter/subscribe" name="area9.newsletter" template="newsletter/subscribe.phtml"}}
<h3 style="margin-bottom: 14px;">Socialize with Us</h3>
<p style="margin-bottom: 35px;"><span class="icon facebook">facebook</span> <span class="icon twitter">twitter</span> <span class="icon flickr">Flickr</span> <span class="icon vimeo">vimeo</span> <span class="icon rss">rss</span></p>
<h3 style="margin-bottom: 14px;">Payment</h3>
<p><span class="icon paypal">paypal</span> <span class="icon visa">visa</span> <span class="icon mastercard">mastercard</span> <span class="icon express">express</span></p>
</div>
</div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['area9_links'] = $block->getId();

// EM0067 - Left - Banner
$dataBlock = array(
	'title' => 'EM0067 - Left - Banner',
	'identifier' => $prefixBlock.'left_banner',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<p><a title="" href="#"><img class="max-fluid" style="border: 1px solid #dcdcdc;" src="{{skin url='images/media/banner-left.jpg'}}" alt="col-left-callout" /></a></p>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['left_banner'] = $block->getId();

// EM0067 - Left - Banner2
$dataBlock = array(
	'title' => 'EM0067 - Left - Banner2',
	'identifier' => $prefixBlock.'left_banner2',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<p><a title="" href="#"><img class="max-fluid" style="border: 1px solid #dcdcdc;" src="{{skin url='images/media/col_left_callout_2.jpg'}}" alt="col-left-callout" /></a></p>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['left_banner2'] = $block->getId();

// EM0067 - Header - Contact
$dataBlock = array(
	'title' => 'EM0067 - Header - Contact',
	'identifier' => $prefixBlock.'header_contact',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div>
<p>Call To Free <strong> {{config path="general/store_information/phone"}} </strong></p>
</div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['header_contact'] = $block->getId();

// EM0067 - Left - Banner3
$dataBlock = array(
	'title' => 'EM0067 - Left - Banner3',
	'identifier' => $prefixBlock.'left_banner3',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<p>Your account are being protected by</p>
<p><span class="icon sign">Sign</span><span class="icon trust">trust</span></p>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['left_banner3'] = $block->getId();

// EM0067 Product Collateral Sample
$dataBlock = array(
	'title' => 'EM0067 Product Collateral Sample',
	'identifier' => $prefixBlock.'product_collateral_sample',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<p>A sample of additional collateral tabs that you can insert as a widget in static the backend.</p>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['product_collateral_sample'] = $block->getId();

// EM0067 - Area 6 - Sample Block
$dataBlock = array(
	'title' => 'EM0067 - Area 6 - Sample Block',
	'identifier' => $prefixBlock.'area6_sample_block',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div class="box" style="background-color: #ffff99;">This is a sample content in position <strong>Area 6</strong>. You can add your own content by insert widget into position <strong>Area 6</strong>.</div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['area6_sample_block'] = $block->getId();

// EM0067 - Area 7 - Sample Block
$dataBlock = array(
	'title' => 'EM0067 - Area 7 - Sample Block',
	'identifier' => $prefixBlock.'area7_sample_block',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div class="box" style="background-color: #ffff99;">This is a sample content in position <strong>Area 7</strong>. You can add your own content by insert widget into position <strong>Area 7</strong>.</div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['area7_sample_block'] = $block->getId();

// EM0067 - Extra Hint
$dataBlock = array(
	'title' => 'EM0067 - Extra Hint',
	'identifier' => $prefixBlock.'extra_hint',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div class="box" style="background-color: #ffff99;">This is a sample content in position <strong>Extra Hint</strong>. You can add your own content by insert widget into position <strong>Extra Hint</strong>.</div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['extra_hint'] = $block->getId();

// EM0067 - Alert Urls
$dataBlock = array(
	'title' => 'EM0067 - Alert Urls',
	'identifier' => $prefixBlock.'alert_urls',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div class="box" style="background-color: #ffff99;">This is a sample content in position <strong>Alert Urls</strong>. You can add your own content by insert widget into position <strong>Alert Urls</strong>.</div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['alert_urls'] = $block->getId();

// EM0067 - Product View Short Description After
$dataBlock = array(
	'title' => 'EM0067 - Product View Short Description After',
	'identifier' => $prefixBlock.'product_view_short_description_after',
	'stores' => $stores,
	'is_active' => 1,
	'content'	=> <<<EOB
<div class="box" style="background-color: #ffff99;">This is a sample content in position <strong>Product View Short Description After</strong>. You can add your own content by insert widget into position <strong>Product View Short Description After</strong>.</div>
EOB
);
$block = $helper->insertStaticBlock($dataBlock);
$block_id['product_view_short_description_after'] = $block->getId();

####################################################################################################
# INSERT PAGE
####################################################################################################
 
$prefixPage = 'em0067_';
$page = Mage::getModel('cms/page');

// Home
$dataPage = array(
	'title'				=> 'EM0067 Marketplace Magento Theme - Homepage',
	'identifier' 		=> $prefixPage.'home',
	'stores'			=> $stores,
	'content_heading'	=> '',
	'root_template'		=> 'one_column',
	'content'			=> <<<EOB
<!-- empty -->
EOB
);
$helper->insertPage($dataPage);

// Typography
$dataPage = array(
	'title'				=> 'Typography',
	'identifier' 		=> 'typography',
	'stores'			=> $stores,
	'content_heading'	=> 'Typography',
	'root_template'		=> 'one_column',
	'content'			=> <<<EOB
<h2>General Elements</h2>
<h1>Heading 1</h1>
<h2>Heading 2</h2>
<h3>Heading 3</h3>
<h4>Heading 4</h4>
<h5>Heading 5</h5>
<ul>
<li>Bullet List 1</li>
<ul>
<li>Bullet List 1.1</li>
<li>Bullet List 1.2</li>
<li>Bullet List 1.3</li>
<li>Bullet List 1.4</li>
</ul>
<li>Bullet List 2</li>
<li>Bullet List 3</li>
<li>Bullet List 4</li>
</ul>
<ol>
<li>Number List 1</li>
<ol>
<li>Number List 1.1</li>
<li>Number List 1.2</li>
<li>Number List 1.3</li>
<li>Number List 1.4</li>
</ol>
<li>Number List 2</li>
<li>Number List 3</li>
<li>Number List 4</li>
</ol><dl><dt>Definition title dt</dt><dd>Defination description dd</dd><dt>Definition title dt</dt><dd>Defination description dd</dd></dl>
<p><code>Code tag:&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</code></p>
<blockquote>
<p>block quote&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</blockquote>
<div class="box f-left">element with class <strong>.f-left</strong></div>
<div class="box f-right">element with class <strong>.f-right</strong></div>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<h2>Tables</h2>
<p>Table with class <strong>.data-table</strong></p>
<table class="data-table" style="width: 100%;" border="0">
<thead>
<tr><th>THEAD TH</th><th>THEAD TH</th><th>THEAD TH</th><th>THEAD TH</th><th>THEAD TH</th></tr>
</thead>
<tbody>
<tr>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
</tr>
<tr>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
</tr>
<tr>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
<td>TBODY TD</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<h2>Custom CSS Classes</h2>
<p class="normal">this is a paragraph with class <strong>.normal</strong></p>
<p class="primary">this is a paragraph with class <strong>.primary</strong></p>
<p class="secondary">this is a paragraph with class <strong>.secondary</strong></p>
<p class="secondary2">this is a paragraph with class <strong>.secondary2</strong></p>
<p class="small">tag <strong>small</strong> and class <strong>.small</strong></p>
<p class="underline">element with class <strong>.underline</strong></p>
<p><strong>ul.none</strong> and <strong>ol.none</strong>:</p>
<ul class="none">
<li>Bullet List 1</li>
<ul>
<li>Bullet List 1.1</li>
<li>Bullet List 1.2</li>
<li>Bullet List 1.3</li>
<li>Bullet List 1.4</li>
</ul>
<li>Bullet List 2</li>
<li>Bullet List 3</li>
<li>Bullet List 4</li>
</ul>
<p><strong>ul.hoz</strong> and <strong>ol.hoz</strong>:</p>
<ul class="hoz">
<li>Bullet List 1</li>
<li>Bullet List 2</li>
<li>Bullet List 3</li>
<li>Bullet List 4</li>
</ul>
<div class="box">
<p>paragraph with class <strong>.box</strong>:</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>
<p class="bottom">Paragraph with class <strong>.bottom</strong> always has margin-bottom = 0.</p>
<p>Add class <strong>.hide-lte2</strong> to hide element when screen's width less than 1280px.</p>
<p class="box hide-lte2">This block will disappear when resize window less than 1280px</p>
<p>Add class <strong>.hide-lte1</strong> to hide element when screen's width less than 980px.</p>
<p class="box hide-lte1">This block will disappear when resize window less than 980px</p>
<p>Add class <strong>.hide-lte0</strong> to hide element when screen's width less than 760px.</p>
<p class="box hide-lte0">This block will disappear when resize window less than 760px</p>
<h2>Icons</h2>
<table class="data-table" border="0">
<tbody>
<tr>
<td align="center" valign="top">
<p>.icon.facebook</p>
<p><span class="icon facebook">span.icon.facebook</span></p>
</td>
<td align="center" valign="top">
<p>.icon.twitter</p>
<p><span class="icon twitter">span.icon.twitter</span></p>
</td>
<td align="center" valign="top">
<p>.icon.flickr</p>
<p><span class="icon flickr">span.icon.flickr</span></p>
</td>
<td align="center" valign="top">
<p>.icon.vimeo</p>
<p><span class="icon vimeo">span.icon.vimeo</span></p>
</td>
<td align="center" valign="top">
<p>.icon.rss</p>
<p><span class="icon rss">span.icon.rss</span></p>
</td>
</tr>
<tr>
<td style="background: #005cb9; color: #ffffff;" align="center" valign="top">
<p>.icon.shipping</p>
<p><span class="icon shipping">span.icon.shipping</span></p>
</td>
<td style="background: #005cb9; color: #ffffff;" align="center" valign="top">
<p>.icon.service</p>
<p><span class="icon service">span.icon.service</span></p>
</td>
<td style="background: #005cb9; color: #ffffff;" align="center" valign="top">
<p>.icon.return</p>
<p><span class="icon return">span.icon.return</span></p>
</td>
<td style="background: #005cb9; color: #ffffff;" align="center" valign="top">
<p>.icon.secured</p>
<p><span class="icon secured">span.icon.secured</span></p>
</td>
</tr>
<tr>
<td align="center" valign="top">
<p>.icon.paypal</p>
<p><span class="icon paypal">span.icon.paypal</span></p>
</td>
<td align="center" valign="top">
<p>.icon.visa</p>
<p><span class="icon visa">span.icon.visa</span></p>
</td>
<td align="center" valign="top">
<p>.icon.mastercard</p>
<p><span class="icon mastercard ">span.icon.mastercard </span></p>
</td>
<td align="center" valign="top">
<p>.icon.express</p>
<p><span class="icon express">span.icon.express</span></p>
</td>
</tr>
<tr>
<td align="center" valign="top">
<p>.icon.sign</p>
<p><span class="icon sign">span.icon.sign</span></p>
</td>
<td align="center" valign="top">
<p>.icon.trust</p>
<p><span class="icon trust">span.icon.trust</span></p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<h2>Brands</h2>
<table class="data-table" border="0">
<tbody>
<tr>
<td align="center" valign="top">
<p>.brand-logo.intel</p>
<p><span class="brand-logo intel">span.brand-logo.intel</span></p>
</td>
<td align="center" valign="top">
<p>.brand-logo.gigabyte</p>
<p><span class="brand-logo gigabyte">span.brand-logo.gigabyte</span></p>
</td>
<td align="center" valign="top">
<p>.brand-logo.dell</p>
<p><span class="brand-logo dell">span.brand-logo.dell</span></p>
</td>
<td align="center" valign="top">
<p>.brand-logo.nvidia</p>
<p><span class="brand-logo nvidia">span.brand-logo.nvidia</span></p>
</td>
</tr>
<tr>
<td align="center" valign="top">
<p>.brand-logo.unknow</p>
<p><span class="brand-logo unknow">span.brand-logo.unknow</span></p>
</td>
<td align="center" valign="top">
<p>.brand-logo.amd</p>
<p><span class="brand-logo amd">span.brand-logo.amd</span></p>
</td>
<td align="center" valign="top">
<p>.brand-logo.cooler</p>
<p><span class="brand-logo cooler">span.brand-logo.cooler</span></p>
</td>
<td align="center" valign="top">
<p>.brand-logo.steel</p>
<p><span class="brand-logo steel">span.brand-logo.steel</span></p>
</td>
<td align="center" valign="top">
<p>.brand-logo.hp</p>
<p><span class="brand-logo hp">span.brand-logo.hp</span></p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<p>image with class <strong>.fluid</strong>:</p>
<p><img class="fluid" title="image with class .fluid" src="{{skin url="images/media/demo_typo.jpg"}}" alt="image with class .fluid" /></p>
EOB
);
$helper->insertPage($dataPage);

// Widgets
$dataPage = array(
	'title'				=> 'Widgets',
	'identifier' 		=> 'widgets',
	'stores'			=> $stores,
	'content_heading'	=> '',
	'root_template'		=> 'one_column',
	'content'			=> <<<EOB
<h2>Demo EM Slideshow Widget</h2>
<div style="display: inline-block; margin-bottom: 15px;">{{widget type="slideshow2/slideshow2" slideshow="1"}}</div>
<hr />
<p>&nbsp;</p>
<h2>Demo EM Featured Products Widget</h2>
<table style="width: 100%;" border="0">
<tbody>
<tr>
<td style="width: 50%;" valign="top">
<h3>Grid View</h3>
<p>{{widget type="dynamicproducts/dynamicproducts" featured_choose="Featured" limit_count="10" column_count="2" order_by="name asc" item_class="span4" thumbnail_width="150" thumbnail_height="150" show_product_name="true" show_thumbnail="true" show_description="true" show_price="true" show_reviews="true" show_addtocart="true" show_addto="true" show_label="true" choose_template="em_featured_products/featured_grid.phtml"}}</p>
</td>
<td style="width: 50%;" valign="top">
<h3>Grid View with column count = 3</h3>
<p>{{widget type="dynamicproducts/dynamicproducts" featured_choose="Featured" limit_count="10" column_count="3" order_by="name asc" item_class="span3" thumbnail_width="150" thumbnail_height="150" show_product_name="true" show_thumbnail="true" show_description="true" show_price="true" show_reviews="true" show_addtocart="true" show_addto="true" show_label="true" choose_template="em_featured_products/featured_grid.phtml"}}</p>
<p>&nbsp;</p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<table style="width: 100%;" border="0">
<tbody>
<tr>
<td style="width: 50%;" valign="top">
<h3>List View</h3>
<p>{{widget type="dynamicproducts/dynamicproducts" featured_choose="Featured" limit_count="10" order_by="name asc" item_class="span11" thumbnail_width="150" thumbnail_height="150" show_product_name="true" show_thumbnail="true" show_description="true" show_price="true" show_reviews="true" show_addtocart="true" show_addto="true" show_label="true" choose_template="em_featured_products/featured_list.phtml"}}</p>
</td>
<td style="width: 50%;" valign="top">
<h3>List View with column count = 2</h3>
<p>{{widget type="dynamicproducts/dynamicproducts" featured_choose="Featured" limit_count="10" column_count="2" order_by="name asc" item_class="span11" thumbnail_width="150" thumbnail_height="150" show_product_name="true" show_thumbnail="true" show_description="true" show_price="true" show_reviews="true" show_addtocart="true" show_addto="true" show_label="true" choose_template="em_featured_products/featured_list.phtml"}}</p>
<p>&nbsp;</p>
</td>
</tr>
</tbody>
</table>
<hr />
<p>&nbsp;</p>
<h2>Demo EM Bestseller Products Widget</h2>
<table style="width: 100%;" border="0">
<tbody>
<tr>
<td style="width: 50%;" valign="top">
<h3>Grid View</h3>
<p>{{widget type="bestsellerproducts/list" order_by="name asc" limit_count="10" column_count="2" frontend_title="Bestseller Products" item_class="span4" thumbnail_width="150" thumbnail_height="150" show_product_name="true" show_thumbnail="true" show_description="true" show_price="true" show_reviews="true" show_addtocart="true" show_addto="true" show_label="true" choose_template="em_bestseller_products/bestseller_grid.phtml"}}</p>
</td>
<td style="width: 50%;" valign="top">
<h3>List View</h3>
<p>{{widget type="bestsellerproducts/list" order_by="name asc" limit_count="10" column_count="4" frontend_title="Bestseller Products" item_class="span11" thumbnail_width="150" thumbnail_height="150" show_product_name="true" show_thumbnail="true" show_description="true" show_price="true" show_reviews="true" show_addtocart="true" show_addto="true" show_label="true" choose_template="em_bestseller_products/bestseller_list.phtml"}}</p>
<div>&nbsp;</div>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<hr />
<p>&nbsp;</p>
<h2>Demo EM New Products Widget</h2>
<table style="width: 100%;" border="0">
<tbody>
<tr>
<td style="width: 50%;" valign="top">
<h3>Grid View</h3>
<p>{{widget type="newproducts/list" limit_count="10" column_count="3" order_by="name asc" frontend_title="New Products" item_class="span3" thumbnail_width="150" thumbnail_height="150" show_product_name="true" show_thumbnail="true" show_description="true" show_price="true" show_reviews="true" show_addtocart="true" show_addto="true" show_label="true" choose_template="em_new_products/new_grid.phtml"}}</p>
</td>
<td style="width: 50%;" valign="top">
<h3>List View</h3>
<p>{{widget type="newproducts/list" limit_count="10" column_count="4" order_by="name asc" frontend_title="New Products" item_class="span11" thumbnail_width="150" thumbnail_height="150" show_product_name="true" show_thumbnail="true" show_description="true" show_price="true" show_reviews="true" show_addtocart="true" show_addto="true" show_label="true" choose_template="em_new_products/new_list.phtml"}}</p>
<div>&nbsp;</div>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<hr />
<p>&nbsp;</p>
<h2>Demo EM Sale Products Widget</h2>
<table style="width: 100%;" border="0">
<tbody>
<tr>
<td style="width: 50%;" valign="top">
<h3>Grid View</h3>
<p>{{widget type="saleproducts/list" order_by="name asc" limit_count="10" column_count="3" frontend_title="Sale Products" item_class="span3" thumbnail_width="150" thumbnail_height="150" show_product_name="true" show_thumbnail="true" show_description="true" show_price="true" show_reviews="true" show_addtocart="true" show_addto="true" show_label="true" choose_template="em_sale_products/sale_grid.phtml"}}</p>
</td>
<td style="width: 50%;" valign="top">
<h3>List View</h3>
<p>{{widget type="saleproducts/list" order_by="name asc" limit_count="10" column_count="4" frontend_title="Sale Products" item_class="span11" thumbnail_width="150" thumbnail_height="150" show_product_name="true" show_thumbnail="true" show_description="true" show_price="true" show_reviews="true" show_addtocart="true" show_addto="true" show_label="true" choose_template="em_sale_products/sale_list.phtml"}}</p>
<div>&nbsp;</div>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<hr />
<p>&nbsp;</p>
<h2>Demo EM Slider Widget</h2>
<div class="grid_12">
<h3>Vertical Sliding</h3>
<p>{{widget type="sliderwidget/slide" instance="4" direction="1" container=".category-grid" slider_height="500" items_per_slide="2"}}</p>
</div>
<div class="grid_12">
<h3>Horizontal Sliding</h3>
<p>{{widget type="sliderwidget/slide" instance="4" container=".category-grid" items_per_slide="3"}}</p>
</div>
<p>&nbsp;</p>
<hr />
<p>&nbsp;</p>
<h2>Demo EM Tabs Widget</h2>
<p>{{widget type="tabs/group" title_1="YTo0OntpOjA7czo1OiJUYWIgMSI7aToxO3M6MDoiIjtpOjM7czowOiIiO2k6MjtzOjA6IiI7fQ==" block_1="6" title_2="YTo0OntpOjA7czo1OiJUYWIgMiI7aToxO3M6MDoiIjtpOjM7czowOiIiO2k6MjtzOjA6IiI7fQ==" block_2="5" title_3="YTo0OntpOjA7czo1OiJUYWIgMyI7aToxO3M6MDoiIjtpOjM7czowOiIiO2k6MjtzOjA6IiI7fQ==" block_3="15" template="emtabs/group.phtml"}}</p>
<p>&nbsp;</p>
EOB
);
$helper->insertPage($dataPage);

####################################################################################################
# INSERT WIDGET INSTANCE
####################################################################################################

$widgetInstance = Mage::getModel('widget/widget_instance');
$package_theme  = 'default/em0067';

// EM0067 - Area 13 - Banners
$widget = array(
	'title' => 'EM0067 - Area 13 - Banners',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:5:{s:8:"block_id";s:1:"6";s:12:"custom_class";s:0:"";s:25:"custom_html_wrapper_class";s:0:"";s:22:"custom_html_wrapper_id";s:0:"";s:11:"block_title";s:0:"";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:1:"3";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:1:"3";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:1:"3";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:1:"3";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:1:"3";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:1:"3";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:1:"3";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:1:"3";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:1:"3";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:1:"3";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:1:"3";s:3:"for";s:3:"all";s:13:"layout_handle";s:15:"cms_index_index";s:5:"block";s:9:"em_area13";}}}
EOB
	)
);
em0067_install_fix_widget_block_id($widget, $block_id['area13_banners']);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();

// EM0067 - Area 3 - Popular Categories
$widget = array(
	'title' => 'EM0067 - Area 3 - Popular Categories',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:5:{s:8:"block_id";s:1:"7";s:12:"custom_class";s:17:"slider-categories";s:25:"custom_html_wrapper_class";s:0:"";s:22:"custom_html_wrapper_id";s:0:"";s:11:"block_title";s:0:"";}
EOB
	,
	'page_groups'=>	null
);
em0067_install_fix_widget_block_id($widget, $block_id['area3_popular_categories']);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();
$widget_id = $widgetInstance->getId();

// EM0067 - Area 3 - Popular Categories - Slider
$widget = array(
	'title' => 'EM0067 - Area 3 - Popular Categories - Slider',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:9:{s:8:"instance";s:1:"4";s:9:"direction";s:1:"0";s:9:"container";s:28:"#slideshow_featured_category";s:12:"slider_width";s:0:"";s:13:"slider_height";s:0:"";s:12:"auto_sliding";s:1:"0";s:8:"circular";s:1:"0";s:15:"items_per_slide";s:1:"1";s:9:"css_class";s:0:"";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:1:"4";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:1:"4";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:1:"4";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:1:"4";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:1:"4";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:1:"4";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:1:"4";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:1:"4";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:1:"4";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:1:"4";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:1:"4";s:3:"for";s:3:"all";s:13:"layout_handle";s:15:"cms_index_index";s:5:"block";s:8:"em_area3";}}}
EOB
	)
);
em0067_install_fix_widget_instance_id($widget, $widget_id);
$widgetInstance->setData($widget)->setType('sliderwidget/slide')->setPackageTheme($package_theme)->save();

// EM0067 - Area 4 - Featured Products
$widget = array(
	'title' => 'EM0067 - Area 4 - Featured Products',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:23:{s:15:"featured_choose";s:11:"em_featured";s:11:"limit_count";s:1:"4";s:12:"column_count";s:1:"4";s:8:"order_by";s:8:"name asc";s:12:"custom_class";s:14:"area4-featured";s:14:"frontend_title";s:17:"Featured Products";s:20:"frontend_description";s:0:"";s:10:"item_class";s:5:"span5";s:11:"item_height";s:0:"";s:12:"item_spacing";s:0:"";s:15:"thumbnail_width";s:3:"235";s:16:"thumbnail_height";s:3:"235";s:17:"show_product_name";s:4:"true";s:14:"show_thumbnail";s:4:"true";s:16:"show_description";s:5:"false";s:10:"show_price";s:4:"true";s:12:"show_reviews";s:4:"true";s:14:"show_addtocart";s:4:"true";s:10:"show_addto";s:4:"true";s:10:"show_label";s:4:"true";s:15:"choose_template";s:40:"em_featured_products/featured_grid.phtml";s:12:"custom_theme";s:0:"";s:14:"cache_lifetime";s:0:"";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:1:"5";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:1:"5";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:1:"5";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:1:"5";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:1:"5";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:1:"5";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:1:"5";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:1:"5";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:1:"5";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:1:"5";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:1:"5";s:3:"for";s:3:"all";s:13:"layout_handle";s:15:"cms_index_index";s:5:"block";s:8:"em_area4";}}}
EOB
	)
);
$widgetInstance->setData($widget)->setType('dynamicproducts/dynamicproducts')->setPackageTheme($package_theme)->save();

// EM0067 - Area 4 - Best Selling Products
$widget = array(
	'title' => 'EM0067 - Area 4 - Best Selling Products',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:22:{s:8:"order_by";s:8:"name asc";s:11:"limit_count";s:1:"4";s:12:"column_count";s:1:"4";s:12:"custom_class";s:0:"";s:14:"frontend_title";s:21:"Best Selling Products";s:20:"frontend_description";s:0:"";s:10:"item_class";s:5:"span5";s:11:"item_height";s:0:"";s:12:"item_spacing";s:0:"";s:15:"thumbnail_width";s:3:"235";s:16:"thumbnail_height";s:3:"235";s:17:"show_product_name";s:4:"true";s:14:"show_thumbnail";s:4:"true";s:16:"show_description";s:5:"false";s:10:"show_price";s:4:"true";s:12:"show_reviews";s:4:"true";s:14:"show_addtocart";s:5:"false";s:10:"show_addto";s:5:"false";s:10:"show_label";s:4:"true";s:15:"choose_template";s:44:"em_bestseller_products/bestseller_grid.phtml";s:12:"custom_theme";s:0:"";s:14:"cache_lifetime";s:0:"";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:1:"6";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:1:"6";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:1:"6";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:1:"6";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:1:"6";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:1:"6";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:1:"6";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:1:"6";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:1:"6";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:1:"6";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:1:"6";s:3:"for";s:3:"all";s:13:"layout_handle";s:15:"cms_index_index";s:5:"block";s:8:"em_area4";}}}
EOB
	)
);
$widgetInstance->setData($widget)->setType('bestsellerproducts/list')->setPackageTheme($package_theme)->save();

// EM0067 - Area 5 - Banners
$widget = array(
	'title' => 'EM0067 - Area 5 - Banners',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:5:{s:8:"block_id";s:1:"8";s:12:"custom_class";s:12:"banner-area5";s:25:"custom_html_wrapper_class";s:0:"";s:22:"custom_html_wrapper_id";s:0:"";s:11:"block_title";s:0:"";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:2:{i:1;a:12:{s:10:"page_group";s:9:"all_pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"55";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"55";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"55";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"55";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"55";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"55";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"55";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"55";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"55";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:4:{s:7:"page_id";s:2:"55";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";s:5:"block";s:5:"right";}s:5:"pages";a:3:{s:7:"page_id";s:2:"55";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}i:0;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:1:"7";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:1:"7";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:1:"7";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:1:"7";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:1:"7";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:1:"7";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:1:"7";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:1:"7";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:1:"7";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:1:"7";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:1:"7";s:3:"for";s:3:"all";s:13:"layout_handle";s:15:"cms_index_index";s:5:"block";s:8:"em_area5";}}}
EOB
	)
);
em0067_install_fix_widget_block_id($widget, $block_id['area5_banners']);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();

// EM0067 - Area 8 - Banners
$widget = array(
	'title' => 'EM0067 - Area 8 - Banners',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:5:{s:8:"block_id";s:1:"9";s:12:"custom_class";s:10:"two-banner";s:25:"custom_html_wrapper_class";s:0:"";s:22:"custom_html_wrapper_id";s:0:"";s:11:"block_title";s:0:"";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:1:"8";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:1:"8";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:1:"8";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:1:"8";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:1:"8";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:1:"8";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:1:"8";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:1:"8";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:1:"8";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:1:"8";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:1:"8";s:3:"for";s:3:"all";s:13:"layout_handle";s:15:"cms_index_index";s:5:"block";s:8:"em_area8";}}}
EOB
	)
);
em0067_install_fix_widget_block_id($widget, $block_id['area8_banners']);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();

// EM0067 - Area 14 - Banners - Left
$widget = array(
	'title' => 'EM0067 - Area 14 - Banners - Left',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:5:{s:8:"block_id";s:2:"10";s:12:"custom_class";s:0:"";s:25:"custom_html_wrapper_class";s:0:"";s:22:"custom_html_wrapper_id";s:0:"";s:11:"block_title";s:0:"";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:1:"9";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:1:"9";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:1:"9";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:1:"9";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:1:"9";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:1:"9";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:1:"9";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:1:"9";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:1:"9";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:1:"9";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:1:"9";s:3:"for";s:3:"all";s:13:"layout_handle";s:15:"cms_index_index";s:5:"block";s:9:"em_area14";}}}
EOB
	)
);
em0067_install_fix_widget_block_id($widget, $block_id['area14_banners_left']);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();

// EM0067 - Area 15 - Combo Products
$widget = array(
	'title' => 'EM0067 - Area 15 - Combo Products',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:23:{s:15:"featured_choose";s:7:"em_deal";s:11:"limit_count";s:1:"6";s:12:"column_count";s:1:"3";s:8:"order_by";s:8:"name asc";s:12:"custom_class";s:12:"widget-combo";s:14:"frontend_title";s:17:"Most Bought Combo";s:20:"frontend_description";s:0:"";s:10:"item_class";s:5:"span6";s:11:"item_height";s:0:"";s:12:"item_spacing";s:0:"";s:15:"thumbnail_width";s:2:"95";s:16:"thumbnail_height";s:2:"75";s:17:"show_product_name";s:4:"true";s:14:"show_thumbnail";s:4:"true";s:16:"show_description";s:5:"false";s:10:"show_price";s:4:"true";s:12:"show_reviews";s:5:"false";s:14:"show_addtocart";s:5:"false";s:10:"show_addto";s:5:"false";s:10:"show_label";s:4:"true";s:15:"choose_template";s:40:"em_featured_products/featured_list.phtml";s:12:"custom_theme";s:0:"";s:14:"cache_lifetime";s:0:"";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"10";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"10";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"10";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"10";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"10";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"10";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"10";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"10";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"10";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"10";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:2:"10";s:3:"for";s:3:"all";s:13:"layout_handle";s:15:"cms_index_index";s:5:"block";s:9:"em_area15";}}}
EOB
	)
);
$widgetInstance->setData($widget)->setType('dynamicproducts/dynamicproducts')->setPackageTheme($package_theme)->save();

// EM0067 - Area 16 - Looking
$widget = array(
	'title' => 'EM0067 - Area 16 - Looking',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:23:{s:15:"featured_choose";s:6:"em_hot";s:11:"limit_count";s:1:"4";s:12:"column_count";s:1:"4";s:8:"order_by";s:8:"name asc";s:12:"custom_class";s:14:"area16-looking";s:14:"frontend_title";s:35:"What Other Customers Are Looking At";s:20:"frontend_description";s:0:"";s:10:"item_class";s:5:"span6";s:11:"item_height";s:0:"";s:12:"item_spacing";s:0:"";s:15:"thumbnail_width";s:3:"235";s:16:"thumbnail_height";s:3:"235";s:17:"show_product_name";s:4:"true";s:14:"show_thumbnail";s:4:"true";s:16:"show_description";s:5:"false";s:10:"show_price";s:4:"true";s:12:"show_reviews";s:4:"true";s:14:"show_addtocart";s:5:"false";s:10:"show_addto";s:5:"false";s:10:"show_label";s:4:"true";s:15:"choose_template";s:40:"em_featured_products/featured_grid.phtml";s:12:"custom_theme";s:0:"";s:14:"cache_lifetime";s:0:"";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"11";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"11";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"11";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"11";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"11";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"11";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"11";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"11";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"11";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"11";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:2:"11";s:3:"for";s:3:"all";s:13:"layout_handle";s:15:"cms_index_index";s:5:"block";s:9:"em_area16";}}}
EOB
	)
);
$widgetInstance->setData($widget)->setType('dynamicproducts/dynamicproducts')->setPackageTheme($package_theme)->save();

// EM0067 - Area 17 - Banners - Deal
$widget = array(
	'title' => 'EM0067 - Area 17 - Banners - Deal',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:5:{s:8:"block_id";s:2:"11";s:12:"custom_class";s:0:"";s:25:"custom_html_wrapper_class";s:0:"";s:22:"custom_html_wrapper_id";s:0:"";s:11:"block_title";s:0:"";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"12";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"12";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"12";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"12";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"12";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"12";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"12";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"12";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"12";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"12";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:2:"12";s:3:"for";s:3:"all";s:13:"layout_handle";s:15:"cms_index_index";s:5:"block";s:9:"em_area17";}}}
EOB
	)
);
em0067_install_fix_widget_block_id($widget, $block_id['area17_banners_deal']);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();

// EM0067 - Area 18 - Links
$widget = array(
	'title' => 'EM0067 - Area 18 - Links',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:5:{s:8:"block_id";s:2:"12";s:12:"custom_class";s:15:"block_prefooter";s:25:"custom_html_wrapper_class";s:0:"";s:22:"custom_html_wrapper_id";s:0:"";s:11:"block_title";s:0:"";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"13";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"13";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"13";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"13";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"13";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"13";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"13";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"13";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"13";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"13";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:2:"13";s:3:"for";s:3:"all";s:13:"layout_handle";s:15:"cms_index_index";s:5:"block";s:9:"em_area18";}}}
EOB
	)
);
em0067_install_fix_widget_block_id($widget, $block_id['area18_links']);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();

// EM0067 - Area 9 - Links
$widget = array(
	'title' => 'EM0067 - Area 9 - Links',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:5:{s:8:"block_id";s:2:"13";s:12:"custom_class";s:18:"area9-links-footer";s:25:"custom_html_wrapper_class";s:0:"";s:22:"custom_html_wrapper_id";s:0:"";s:11:"block_title";s:0:"";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:9:"all_pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"14";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"14";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"14";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"14";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"14";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"14";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"14";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"14";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"14";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:4:{s:7:"page_id";s:2:"14";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";s:5:"block";s:8:"em_area9";}s:5:"pages";a:3:{s:7:"page_id";s:2:"14";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}}
EOB
	)
);
em0067_install_fix_widget_block_id($widget, $block_id['area9_links']);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();

// EM0067 - Left - Recent Review
$widget = array(
	'title' => 'EM0067 - Left - Recent Review',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:18:{s:11:"limit_count";s:1:"2";s:12:"column_count";s:1:"1";s:8:"order_by";s:8:"name asc";s:12:"custom_class";s:0:"";s:14:"frontend_title";s:14:"Recent Reviews";s:10:"item_width";s:0:"";s:11:"item_height";s:0:"";s:12:"item_spacing";s:0:"";s:15:"thumbnail_width";s:2:"75";s:16:"thumbnail_height";s:2:"70";s:17:"show_product_name";s:4:"true";s:14:"show_thumbnail";s:4:"true";s:10:"show_price";s:4:"true";s:14:"show_addtocart";s:4:"true";s:10:"show_addto";s:4:"true";s:10:"show_label";s:4:"true";s:15:"choose_template";s:48:"em_recentviewproducts/grid_products_simple.phtml";s:14:"cache_lifetime";s:0:"";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:2:{i:1;a:12:{s:10:"page_group";s:17:"anchor_categories";s:17:"anchor_categories";a:7:{s:7:"page_id";s:2:"17";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:5:"block";s:4:"left";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"17";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"17";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"17";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"17";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"17";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"17";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"17";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"17";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"17";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:3:{s:7:"page_id";s:2:"17";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}i:0;a:12:{s:10:"page_group";s:20:"notanchor_categories";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"16";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:7:{s:7:"page_id";s:2:"16";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:5:"block";s:4:"left";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"16";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"16";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"16";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"16";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"16";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"16";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"16";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"16";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:3:{s:7:"page_id";s:2:"16";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}}
EOB
	)
);
$widgetInstance->setData($widget)->setType('recentreviewproducts/list')->setPackageTheme($package_theme)->save();

// EM0067 - Left - Banner
$widget = array(
	'title' => 'EM0067 - Left - Banner',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:5:{s:8:"block_id";s:2:"14";s:12:"custom_class";s:0:"";s:25:"custom_html_wrapper_class";s:0:"";s:22:"custom_html_wrapper_id";s:0:"";s:11:"block_title";s:0:"";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:9:{i:8;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"52";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"52";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"52";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"52";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"52";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"52";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"52";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"52";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"52";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"52";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:2:"52";s:3:"for";s:3:"all";s:13:"layout_handle";s:16:"blog_index_index";s:5:"block";s:4:"left";}}i:7;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"51";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"51";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"51";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"51";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"51";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"51";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"51";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"51";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"51";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"51";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:2:"51";s:3:"for";s:3:"all";s:13:"layout_handle";s:18:"blog_category_view";s:5:"block";s:4:"left";}}i:6;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"50";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"50";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"50";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"50";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"50";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"50";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"50";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"50";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"50";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"50";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:2:"50";s:3:"for";s:3:"all";s:13:"layout_handle";s:14:"blog_post_view";s:5:"block";s:4:"left";}}i:5;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"49";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"49";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"49";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"49";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"49";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"49";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"49";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"49";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"49";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"49";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:2:"49";s:3:"for";s:3:"all";s:13:"layout_handle";s:14:"blog_rss_index";s:5:"block";s:4:"left";}}i:4;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"48";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"48";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"48";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"48";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"48";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"48";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"48";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"48";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"48";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"48";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:2:"48";s:3:"for";s:3:"all";s:13:"layout_handle";s:16:"blog_tag_taglist";s:5:"block";s:4:"left";}}i:3;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"47";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"47";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"47";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"47";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"47";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"47";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"47";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"47";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"47";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"47";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:2:"47";s:3:"for";s:3:"all";s:13:"layout_handle";s:13:"blog_tag_view";s:5:"block";s:4:"left";}}i:2;a:12:{s:10:"page_group";s:17:"anchor_categories";s:17:"anchor_categories";a:7:{s:7:"page_id";s:2:"20";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:5:"block";s:4:"left";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"20";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"20";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"20";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"20";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"20";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"20";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"20";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"20";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"20";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:3:{s:7:"page_id";s:2:"20";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}i:1;a:12:{s:10:"page_group";s:20:"notanchor_categories";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"19";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:7:{s:7:"page_id";s:2:"19";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:5:"block";s:4:"left";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"19";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"19";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"19";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"19";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"19";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"19";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"19";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"19";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:3:{s:7:"page_id";s:2:"19";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}i:0;a:12:{s:10:"page_group";s:12:"all_products";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"18";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"18";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:7:{s:7:"page_id";s:2:"18";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:5:"block";s:4:"left";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"18";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"18";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"18";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"18";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"18";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"18";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"18";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:3:{s:7:"page_id";s:2:"18";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}}
EOB
	)
);
em0067_install_fix_widget_block_id($widget, $block_id['left_banner']);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();

// EM0067 - Left - Banner2
$widget = array(
	'title' => 'EM0067 - Left - Banner2',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:5:{s:8:"block_id";s:2:"15";s:12:"custom_class";s:0:"";s:25:"custom_html_wrapper_class";s:0:"";s:22:"custom_html_wrapper_id";s:0:"";s:11:"block_title";s:0:"";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:7:{i:6;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"46";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"46";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"46";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"46";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"46";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"46";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"46";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"46";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"46";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"46";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:2:"46";s:3:"for";s:3:"all";s:13:"layout_handle";s:23:"customer_account_create";s:5:"block";s:4:"left";}}i:5;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"45";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"45";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"45";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"45";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"45";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"45";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"45";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"45";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"45";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"45";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:2:"45";s:3:"for";s:3:"all";s:13:"layout_handle";s:21:"customer_account_edit";s:5:"block";s:4:"left";}}i:4;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"44";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"44";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"44";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"44";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"44";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"44";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"44";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"44";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"44";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"44";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:2:"44";s:3:"for";s:3:"all";s:13:"layout_handle";s:31:"customer_account_forgotpassword";s:5:"block";s:4:"left";}}i:3;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"43";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"43";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"43";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"43";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"43";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"43";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"43";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"43";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"43";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"43";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:2:"43";s:3:"for";s:3:"all";s:13:"layout_handle";s:30:"customer_account_logoutsuccess";s:5:"block";s:4:"left";}}i:2;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"23";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"23";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"23";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"23";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"23";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"23";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"23";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"23";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"23";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"23";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:2:"23";s:3:"for";s:3:"all";s:13:"layout_handle";s:20:"contacts_index_index";s:5:"block";s:4:"left";}}i:1;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"22";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"22";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"22";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"22";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"22";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"22";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"22";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"22";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"22";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"22";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:2:"22";s:3:"for";s:3:"all";s:13:"layout_handle";s:22:"customer_account_login";s:5:"block";s:4:"left";}}i:0;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"21";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"21";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"21";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"21";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"21";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"21";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"21";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"21";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"21";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"21";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:2:"21";s:3:"for";s:3:"all";s:13:"layout_handle";s:16:"customer_account";s:5:"block";s:4:"left";}}}
EOB
	)
);
em0067_install_fix_widget_block_id($widget, $block_id['left_banner2']);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();

// EM0067 - Left - Banner3
$widget = array(
	'title' => 'EM0067 - Left - Banner3',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:5:{s:8:"block_id";s:2:"17";s:12:"custom_class";s:16:"protected-banner";s:25:"custom_html_wrapper_class";s:0:"";s:22:"custom_html_wrapper_id";s:0:"";s:11:"block_title";s:0:"";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:4:{i:3;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"33";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"33";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"33";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"33";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"33";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"33";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"33";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"33";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"33";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"33";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:2:"33";s:3:"for";s:3:"all";s:13:"layout_handle";s:22:"customer_account_login";s:5:"block";s:4:"left";}}i:2;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"32";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"32";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"32";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"32";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"32";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"32";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"32";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"32";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"32";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"32";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:2:"32";s:3:"for";s:3:"all";s:13:"layout_handle";s:30:"customer_account_logoutsuccess";s:5:"block";s:4:"left";}}i:1;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"31";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"31";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"31";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"31";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"31";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"31";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"31";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"31";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"31";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"31";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:2:"31";s:3:"for";s:3:"all";s:13:"layout_handle";s:21:"customer_account_edit";s:5:"block";s:4:"left";}}i:0;a:12:{s:10:"page_group";s:5:"pages";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"30";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"30";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:6:{s:7:"page_id";s:2:"30";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"30";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"30";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"30";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"30";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"30";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"30";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"30";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:4:{s:7:"page_id";s:2:"30";s:3:"for";s:3:"all";s:13:"layout_handle";s:23:"customer_account_create";s:5:"block";s:4:"left";}}}
EOB
	)
);
em0067_install_fix_widget_block_id($widget, $block_id['left_banner3']);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();

// EM0067 - Product Collateral Sample 1
$widget = array(
	'title' => 'EM0067 - Product Collateral Sample 1',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:5:{s:8:"block_id";s:2:"22";s:12:"custom_class";s:0:"";s:25:"custom_html_wrapper_class";s:0:"";s:22:"custom_html_wrapper_id";s:0:"";s:11:"block_title";s:12:"Custom Tab 1";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:12:"all_products";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"34";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"34";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:7:{s:7:"page_id";s:2:"34";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:5:"block";s:33:"product.info.additonal_collateral";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"34";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"34";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"34";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"34";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"34";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"34";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"34";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:3:{s:7:"page_id";s:2:"34";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}}
EOB
	)
);
em0067_install_fix_widget_block_id($widget, $block_id['product_collateral_sample']);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();

// EM0067 - Product Collateral Sample 2
$widget = array(
	'title' => 'EM0067 - Product Collateral Sample 2',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:5:{s:8:"block_id";s:2:"22";s:12:"custom_class";s:0:"";s:25:"custom_html_wrapper_class";s:0:"";s:22:"custom_html_wrapper_id";s:0:"";s:11:"block_title";s:12:"Custom Tab N";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:12:"all_products";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"35";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"35";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:7:{s:7:"page_id";s:2:"35";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:5:"block";s:33:"product.info.additonal_collateral";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"35";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"35";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"35";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"35";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"35";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"35";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"35";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:3:{s:7:"page_id";s:2:"35";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}}
EOB
	)
);
em0067_install_fix_widget_block_id($widget, $block_id['product_collateral_sample']);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();

// EM0067 - Area 6 - Sample Block
$widget = array(
	'title' => 'EM0067 - Area 6 - Sample Block',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:5:{s:8:"block_id";s:2:"23";s:12:"custom_class";s:0:"";s:25:"custom_html_wrapper_class";s:0:"";s:22:"custom_html_wrapper_id";s:0:"";s:11:"block_title";s:0:"";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:12:"all_products";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"36";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"36";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:7:{s:7:"page_id";s:2:"36";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:5:"block";s:8:"em_area6";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"36";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"36";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"36";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"36";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"36";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"36";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"36";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:3:{s:7:"page_id";s:2:"36";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}}
EOB
	)
);
em0067_install_fix_widget_block_id($widget, $block_id['area6_sample_block']);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();

// EM0067 - Area 7 - Sample Block
$widget = array(
	'title' => 'EM0067 - Area 7 - Sample Block',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:5:{s:8:"block_id";s:2:"24";s:12:"custom_class";s:0:"";s:25:"custom_html_wrapper_class";s:0:"";s:22:"custom_html_wrapper_id";s:0:"";s:11:"block_title";s:0:"";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:12:"all_products";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"37";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"37";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:7:{s:7:"page_id";s:2:"37";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:5:"block";s:8:"em_area7";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"37";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"37";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"37";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"37";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"37";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"37";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"37";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:3:{s:7:"page_id";s:2:"37";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}}
EOB
	)
);
em0067_install_fix_widget_block_id($widget, $block_id['area7_sample_block']);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();

// EM0067 - Extra Hint
$widget = array(
	'title' => 'EM0067 - Extra Hint',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:5:{s:8:"block_id";s:2:"25";s:12:"custom_class";s:0:"";s:25:"custom_html_wrapper_class";s:0:"";s:22:"custom_html_wrapper_id";s:0:"";s:11:"block_title";s:0:"";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:12:"all_products";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"38";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"38";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:7:{s:7:"page_id";s:2:"38";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:5:"block";s:22:"product.info.extrahint";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"38";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"38";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"38";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"38";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"38";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"38";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"38";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:3:{s:7:"page_id";s:2:"38";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}}
EOB
	)
);
em0067_install_fix_widget_block_id($widget, $block_id['extra_hint']);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();

// EM0067 - Alert Urls
$widget = array(
	'title' => 'EM0067 - Alert Urls',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:5:{s:8:"block_id";s:2:"26";s:12:"custom_class";s:0:"";s:25:"custom_html_wrapper_class";s:0:"";s:22:"custom_html_wrapper_id";s:0:"";s:11:"block_title";s:0:"";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:12:"all_products";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"39";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"39";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:7:{s:7:"page_id";s:2:"39";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:5:"block";s:10:"alert.urls";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"39";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"39";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"39";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"39";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"39";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"39";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"39";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:3:{s:7:"page_id";s:2:"39";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}}
EOB
	)
);
em0067_install_fix_widget_block_id($widget, $block_id['alert_urls']);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();

// EM0067 - Product View Short Description After
$widget = array(
	'title' => 'EM0067 - Product View Short Description After',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> <<<EOB
a:5:{s:8:"block_id";s:2:"27";s:12:"custom_class";s:0:"";s:25:"custom_html_wrapper_class";s:0:"";s:22:"custom_html_wrapper_id";s:0:"";s:11:"block_title";s:0:"";}
EOB
	,
	'page_groups'=>	unserialize(<<<EOB
a:1:{i:0;a:12:{s:10:"page_group";s:12:"all_products";s:17:"anchor_categories";a:6:{s:7:"page_id";s:2:"40";s:13:"layout_handle";s:32:"default,catalog_category_layered";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"1";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:20:"notanchor_categories";a:6:{s:7:"page_id";s:2:"40";s:13:"layout_handle";s:32:"default,catalog_category_default";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:1:"0";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:12:"all_products";a:7:{s:7:"page_id";s:2:"40";s:13:"layout_handle";s:28:"default,catalog_product_view";s:3:"for";s:3:"all";s:5:"block";s:18:"product.info.other";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:0:"";s:8:"entities";s:0:"";}s:15:"simple_products";a:6:{s:7:"page_id";s:2:"40";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_simple";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"simple";s:8:"entities";s:0:"";}s:16:"grouped_products";a:6:{s:7:"page_id";s:2:"40";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_grouped";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"grouped";s:8:"entities";s:0:"";}s:21:"configurable_products";a:6:{s:7:"page_id";s:2:"40";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_configurable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"configurable";s:8:"entities";s:0:"";}s:16:"virtual_products";a:6:{s:7:"page_id";s:2:"40";s:13:"layout_handle";s:49:"default,catalog_product_view,PRODUCT_TYPE_virtual";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:7:"virtual";s:8:"entities";s:0:"";}s:15:"bundle_products";a:6:{s:7:"page_id";s:2:"40";s:13:"layout_handle";s:48:"default,catalog_product_view,PRODUCT_TYPE_bundle";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:6:"bundle";s:8:"entities";s:0:"";}s:21:"downloadable_products";a:6:{s:7:"page_id";s:2:"40";s:13:"layout_handle";s:54:"default,catalog_product_view,PRODUCT_TYPE_downloadable";s:3:"for";s:3:"all";s:14:"is_anchor_only";s:0:"";s:15:"product_type_id";s:12:"downloadable";s:8:"entities";s:0:"";}s:9:"all_pages";a:3:{s:7:"page_id";s:2:"40";s:13:"layout_handle";s:7:"default";s:3:"for";s:3:"all";}s:5:"pages";a:3:{s:7:"page_id";s:2:"40";s:3:"for";s:3:"all";s:13:"layout_handle";s:0:"";}}}
EOB
	)
);
em0067_install_fix_widget_block_id($widget, $block_id['product_view_short_description_after']);
$widgetInstance->setData($widget)->setType('cmswidget/widget_block')->setPackageTheme($package_theme)->save();

function em0067_install_fix_widget_block_id(&$widget, $block_id) {
	$params = unserialize($widget['widget_parameters']);
	$params['block_id'] = $block_id;
	$widget['widget_parameters'] = serialize($params);
}

function em0067_install_fix_widget_instance_id(&$widget, $instance_id) {
	$params = unserialize($widget['widget_parameters']);
	$params['instance'] = $instance_id;
	$widget['widget_parameters'] = serialize($params);
}


####################################################################################################
# ADD MEGAMENU PRO
####################################################################################################

$installer->run("

CREATE TABLE IF NOT EXISTS {$this->getTable('megamenupro')} (
  `megamenupro_id` int(11) unsigned NOT NULL auto_increment,
  `name` varchar(255) NOT NULL default '',
  `type` smallint(6) NOT NULL default '0',
  `content` text NOT NULL default '', 
  `status` smallint(6) NOT NULL default '0',
  `created_time` datetime NULL,
  `update_time` datetime NULL,
  PRIMARY KEY (`megamenupro_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

    ");

# create menu of theme EM0067
$model = Mage::getModel('em0067settings/megamenupro');
$model->setData(array(
	'name' => "Main Menu",
	'type' => "0",
	'content' => <<<EOB
a:70:{i:0;a:8:{s:4:"type";s:4:"link";s:5:"label";s:8:"Computer";s:8:"sublabel";s:0:"";s:3:"url";s:14:"furniture.html";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:1;a:5:{s:4:"type";s:4:"text";s:4:"text";s:28:"PGgzPkNlbGwgUGhvbmVzPC9oMz4=";s:9:"css_class";s:5:"title";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:2;a:5:{s:4:"type";s:4:"text";s:4:"text";s:136:"PHA+e3t3aWRnZXQgdHlwZT0ibWVnYW1lbnVwcm8vY2F0YWxvZ25hdmlnYXRpb24iIGNhdGVnb3J5X2lkPSJjYXRlZ29yeS8zIiBkaXJlY3Rpb249InZlcnRpY2FsIn19PC9wPg==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:3;a:8:{s:4:"type";s:4:"link";s:5:"label";s:14:"Computer parts";s:8:"sublabel";s:0:"";s:3:"url";s:14:"furniture.html";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:4;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:5;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:5:"span8";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:6;a:5:{s:4:"type";s:4:"text";s:4:"text";s:24:"PGgzPkNvbXB1dGVyPC9oMz4=";s:9:"css_class";s:5:"title";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:7;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:8;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:5:"span4";s:13:"container_css";s:0:"";s:5:"depth";s:1:"4";}i:9;a:5:{s:4:"type";s:4:"text";s:4:"text";s:1176:"PGg1PlZJVkEgTEEgVklUQTwvaDU+Cjx1bD4KPGxpPjxhIGhyZWY9Int7c3RvcmUgZGlyZWN0X3VybD0nZWxlY3Ryb25pY3MuaHRtbCd9fSI+RW5pbSB2b2x1cHRhdGVtPC9hPjwvbGk+CjxsaT48YSBocmVmPSJ7e3N0b3JlIGRpcmVjdF91cmw9J2VsZWN0cm9uaWNzLmh0bWwnfX0iPlF1aWEgdm9sdXB0YXMgYXNwZW1hdHU8L2E+PC9saT4KPGxpPjxhIGhyZWY9Int7c3RvcmUgZGlyZWN0X3VybD0nYXBwYXJlbC5odG1sJ319Ij5BdXQgb2RpdCBhdXQgZnVnaXQgPC9hPjwvbGk+CjxsaT48YSBocmVmPSJ7e3N0b3JlIGRpcmVjdF91cmw9J2FwcGFyZWwvc2hpcnRzLmh0bWwnfX0iPlNlZCBxdWlhIGNvbnNlcXV1bnR1cjwvYT48L2xpPgo8bGkgPjxhIGhyZWY9Int7c3RvcmUgZGlyZWN0X3VybD0nYXBwYXJlbC9zaG9lcy5odG1sJ319Ij5Wb2x1cHRhdGVtIG5lc2NpdW48L2E+PC9saT4KPC91bD4KPGg1PnplbCBkaWFzPC9oNT4KPHVsPgo8bGk+PGEgaHJlZj0ie3tzdG9yZSBkaXJlY3RfdXJsPSdlbGVjdHJvbmljcy5odG1sJ319Ij5FbmltIHZvbHVwdGF0ZW08L2E+PC9saT4KPGxpPjxhIGhyZWY9Int7c3RvcmUgZGlyZWN0X3VybD0nZWxlY3Ryb25pY3MuaHRtbCd9fSI+Vm9sdXB0YXMgYXNwZXJuYXR1PC9hPjwvbGk+CjxsaT48YSBocmVmPSJ7e3N0b3JlIGRpcmVjdF91cmw9J2FwcGFyZWwuaHRtbCd9fSI+QXV0IG9kaXQgYXV0IGZ1Z2l0IDwvYT48L2xpPgo8bGk+PGEgaHJlZj0ie3tzdG9yZSBkaXJlY3RfdXJsPSdhcHBhcmVsL3NoaXJ0cy5odG1sJ319Ij5Db25zZXF1dW50dXI8L2E+PC9saT4KPGxpPjxhIGhyZWY9Int7c3RvcmUgZGlyZWN0X3VybD0nYXBwYXJlbC9zaG9lcy5odG1sJ319Ij5Wb2x1cHRhdGVtIG5lc2NpdW48L2E+PC9saT4KPC91bD4=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"5";}i:10;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:5:"span4";s:13:"container_css";s:0:"";s:5:"depth";s:1:"4";}i:11;a:5:{s:4:"type";s:4:"text";s:4:"text";s:1064:"PGg1PlpFTCBESUFTPC9oNT4KPHVsPgo8bGk+PGEgaHJlZj0ie3tzdG9yZSBkaXJlY3RfdXJsPSdlbGVjdHJvbmljcy5odG1sJ319Ij5FbmltIHZvbHVwdGF0ZW08L2E+PC9saT4KPGxpPjxhIGhyZWY9Int7c3RvcmUgZGlyZWN0X3VybD0nZWxlY3Ryb25pY3MuaHRtbCd9fSI+UXVpYSB2b2x1cHRhcyBhc3BlbWF0dTwvYT48L2xpPgo8bGk+PGEgaHJlZj0ie3tzdG9yZSBkaXJlY3RfdXJsPSdhcHBhcmVsLmh0bWwnfX0iPkF1dCBvZGl0IGF1dCBmdWdpdCA8L2E+PC9saT4KPGxpPjxhIGhyZWY9Int7c3RvcmUgZGlyZWN0X3VybD0nYXBwYXJlbC9zaGlydHMuaHRtbCd9fSI+U2VkIHF1aWEgY29uc2VxdXVudHVyPC9hPjwvbGk+CjxsaT48YSBocmVmPSJ7e3N0b3JlIGRpcmVjdF91cmw9J2FwcGFyZWwvc2hvZXMuaHRtbCd9fSI+Vm9sdXB0YXRlbSBuZXNjaXVuPC9hPjwvbGk+CjwvdWw+CjxoNT5raWEgdml0YSB1buKAmTwvaDU+Cjx1bD4KPGxpPjxhIGhyZWY9Int7c3RvcmUgZGlyZWN0X3VybD0nZWxlY3Ryb25pY3MuaHRtbCd9fSI+Vm9sdXB0YXRlbTwvYT48L2xpPgo8bGk+PGEgaHJlZj0ie3tzdG9yZSBkaXJlY3RfdXJsPSdlbGVjdHJvbmljcy5odG1sJ319Ij5BdXQgb2RpdCBhdXQgZnVnaXQ8L2E+PC9saT4KPGxpPjxhIGhyZWY9Int7c3RvcmUgZGlyZWN0X3VybD0nYXBwYXJlbC5odG1sJ319Ij5BcXVhIGNvbnNlcXV1bnR1cjwvYT48L2xpPgo8bGk+PGEgaHJlZj0ie3tzdG9yZSBkaXJlY3RfdXJsPSdhcHBhcmVsL3NoaXJ0cy5odG1sJ319Ij5Wb2x1cHRhdGVtIG5lc2NpdW48L2E+PC9saT4KPC91bD4=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"5";}i:12;a:8:{s:4:"type";s:4:"link";s:5:"label";s:11:"TV & Videos";s:8:"sublabel";s:0:"";s:3:"url";s:24:"electronics/cameras.html";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:13;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:9:"container";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:14;a:5:{s:4:"type";s:4:"text";s:4:"text";s:32:"PGgzPkNvbXB1dGVyIHBhcnRzPC9oMz4=";s:9:"css_class";s:5:"title";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:15;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:16;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:5:"span4";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:17;a:5:{s:4:"type";s:4:"text";s:4:"text";s:152:"PGg1PkNvbXB1dGVyPC9oNT4Ke3t3aWRnZXQgdHlwZT0ibWVnYW1lbnVwcm8vY2F0YWxvZ25hdmlnYXRpb24iIGNhdGVnb3J5X2lkPSJjYXRlZ29yeS8xNSIgZGlyZWN0aW9uPSJ2ZXJ0aWNhbCJ9fQ==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"4";}i:18;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:5:"span4";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:19;a:5:{s:4:"type";s:4:"text";s:4:"text";s:152:"PGg1PkNvbXB1dGVyPC9oNT4Ke3t3aWRnZXQgdHlwZT0ibWVnYW1lbnVwcm8vY2F0YWxvZ25hdmlnYXRpb24iIGNhdGVnb3J5X2lkPSJjYXRlZ29yeS8xNSIgZGlyZWN0aW9uPSJ2ZXJ0aWNhbCJ9fQ==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"4";}i:20;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:5:"span4";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:21;a:5:{s:4:"type";s:4:"text";s:4:"text";s:152:"PGg1PkNvbXB1dGVyPC9oNT4Ke3t3aWRnZXQgdHlwZT0ibWVnYW1lbnVwcm8vY2F0YWxvZ25hdmlnYXRpb24iIGNhdGVnb3J5X2lkPSJjYXRlZ29yeS8xNSIgZGlyZWN0aW9uPSJ2ZXJ0aWNhbCJ9fQ==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"4";}i:22;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:5:"span4";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:23;a:5:{s:4:"type";s:4:"text";s:4:"text";s:152:"PGg1PkNvbXB1dGVyPC9oNT4Ke3t3aWRnZXQgdHlwZT0ibWVnYW1lbnVwcm8vY2F0YWxvZ25hdmlnYXRpb24iIGNhdGVnb3J5X2lkPSJjYXRlZ29yeS8xNSIgZGlyZWN0aW9uPSJ2ZXJ0aWNhbCJ9fQ==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"4";}i:24;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:5:"span4";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:25;a:5:{s:4:"type";s:4:"text";s:4:"text";s:152:"PGg1PkNvbXB1dGVyPC9oNT4Ke3t3aWRnZXQgdHlwZT0ibWVnYW1lbnVwcm8vY2F0YWxvZ25hdmlnYXRpb24iIGNhdGVnb3J5X2lkPSJjYXRlZ29yeS8xNSIgZGlyZWN0aW9uPSJ2ZXJ0aWNhbCJ9fQ==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"4";}i:26;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:5:"span4";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:27;a:5:{s:4:"type";s:4:"text";s:4:"text";s:152:"PGg1PkNvbXB1dGVyPC9oNT4Ke3t3aWRnZXQgdHlwZT0ibWVnYW1lbnVwcm8vY2F0YWxvZ25hdmlnYXRpb24iIGNhdGVnb3J5X2lkPSJjYXRlZ29yeS8xNSIgZGlyZWN0aW9uPSJ2ZXJ0aWNhbCJ9fQ==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"4";}i:28;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:29;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:5:"span6";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:30;a:5:{s:4:"type";s:4:"text";s:4:"text";s:232:"PHAgY2xhc3MgPSAicHJpbWFyeSI+Ly8gSGVyZSBpcyBzb21lIGNvbnRlbnRzIHdpdGggc2lkZSBpbWFnZTwvcD4KPHA+PGEgaHJlZj0iIyI+PGltZyBjbGFzcz0iZmx1aWQgIiBzcmM9Int7c2tpbiB1cmw9J2ltYWdlcy9tZWRpYS9tZW51L2ltZ19tZW51XzEuanBnJ319IiBhbHQ9IiIgLz48L2E+PC9wPg==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"4";}i:31;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:5:"span9";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:32;a:5:{s:4:"type";s:4:"text";s:4:"text";s:628:"PHAgY2xhc3MgPSAiY29tbWFuZCI+Jm5ic3A7PC9wPgo8cCBzdHlsZSA9ICJtYXJnaW4tdG9wOi0zcHgiPkxvcmVtIGlwc3VtIGRvbG9yIHNpdCAgaXJ1cmUgZG9sb3IgaW4gcmVwcmVoZW5kZXJpdCBpbiB2b2x1cHRhdGUgdmVsaXQgZXNzZSBjaWxsdW0gZG9sb3JlIGV1IGZ1Z2lhdCBudWxsYSBwYXJpYXR1ci4gRXhjZXB0ZXVyIHNpbnQgb2NjYWVjYXQgY3VwaWRhdGF0IG5vbiBwcm9pZGVudCwgc3VudCBpbiBjdWxwYSBxdWkgb2ZmaWNpYSBkZXNlcnVudCBtb2xsaXQgYW5pbSBpZCBlc3QgbGFib3J1bS48L3A+Cgo8cD5Mb3JlbSBpcHN1bSBkb2xvciBzaXQgYW1ldCwgY29uc2VjdGV0IGFsaXF1YS4gVXQgZW5pbSBhZCBtaW5pbSB2ZW5pYW0sIHF1aXMgbm9zdHJ1ZCBleGVyY2l0YXRpb24gdWxsYW1jbyBsYWJvcmlzIG5pc2kgdXQgYWxpcXVpcCBleCBlYSBjb21tb2RvIGNvbnNlcXVhdC4gRHVpcyBhdXRlIGlydXJlIC48L3A+";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"4";}i:33;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:5:"span9";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:34;a:5:{s:4:"type";s:4:"text";s:4:"text";s:708:"PHAgY2xhc3MgPSAicHJpbWFyeSI+Ly8gVGhpcyBpcyBhIGJsYWNrYm94LCB5b3UgY2FuIHVzZSBpdCB0byBoaWdobGlnaHQgc29tZQpjb250ZW50czwvcD4KPHAgc3R5bGUgPSAibWFyZ2luLXRvcDotM3B4Ij5Mb3JlbSBpcHN1bSBkb2xvciBzaXQgIGlydXJlIGRvbG9yIGluIHJlcHJlaGVuZGVyaXQgaW4gdm9sdXB0YXRlIHZlbGl0IGVzc2UgY2lsbHVtIGRvbG9yZSBldSBmdWdpYXQgbnVsbGEgcGFyaWF0dXIuIEV4Y2VwdGV1ciBzaW50IG9jY2FlY2F0IGN1cGlkYXRhdCBub24gcHJvaWRlbnQsIHN1bnQgaW4gY3VscGEgcXVpIG9mZmljaWEgZGVzZXJ1bnQgbW9sbGl0IGFuaW0gaWQgZXN0IGxhYm9ydW0uPC9wPgoKPHA+TG9yZW0gaXBzdW0gZG9sb3Igc2l0IGFtZXQsIGNvbnNlY3RldCBhbGlxdWEuIFV0IGVuaW0gYWQgbWluaW0gdmVuaWFtLCBxdWlzIG5vc3RydWQgZXhlcmNpdGF0aW9uIHVsbGFtY28gbGFib3JpcyBuaXNpIHV0IGFsaXF1aXAgZXggZWEgY29tbW9kbyBjb25zZXF1YXQuIER1aXMgYXV0ZSBpcnVyZSAuPC9wPg==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"4";}i:35;a:8:{s:4:"type";s:4:"link";s:5:"label";s:5:"Audio";s:8:"sublabel";s:0:"";s:3:"url";s:19:"apparel/shirts.html";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:36;a:5:{s:4:"type";s:4:"text";s:4:"text";s:28:"PGgzPlRWICYgVmlkZW9zPC9oMz4=";s:9:"css_class";s:5:"title";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:37;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:38;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:5:"span4";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:39;a:5:{s:4:"type";s:4:"text";s:4:"text";s:576:"PGg1PlNISVJUUzwvaDU+Cjx1bD4KPGxpPjxhIGhyZWY9Int7c3RvcmUgZGlyZWN0X3VybD0nZWxlY3Ryb25pY3MuaHRtbCd9fSI+TmVtbyB2b2x1cHRhdGVtIDE8L2E+PC9saT4KPGxpPjxhIGhyZWY9Int7c3RvcmUgZGlyZWN0X3VybD0nZWxlY3Ryb25pY3MuaHRtbCd9fSI+TmVtbyB2b2x1cHRhdGVtIDE8L2E+PC9saT4KPGxpPjxhIGhyZWY9Int7c3RvcmUgZGlyZWN0X3VybD0nZWxlY3Ryb25pY3MuaHRtbCd9fSI+TmVtbyB2b2x1cHRhdGVtIDE8L2E+PC9saT4KPGxpPjxhIGhyZWY9Int7c3RvcmUgZGlyZWN0X3VybD0nZWxlY3Ryb25pY3MuaHRtbCd9fSI+TmVtbyB2b2x1cHRhdGVtIDE8L2E+PC9saT4KPGxpPjxhIGhyZWY9Int7c3RvcmUgZGlyZWN0X3VybD0nZWxlY3Ryb25pY3MuaHRtbCd9fSI+TmVtbyB2b2x1cHRhdGVtIDE8L2E+PC9saT4KPC91bD4=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:40;a:8:{s:4:"type";s:4:"link";s:5:"label";s:7:"Cameras";s:8:"sublabel";s:0:"";s:3:"url";s:18:"apparel/shoes.html";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:41;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:9:"container";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:42;a:5:{s:4:"type";s:4:"text";s:4:"text";s:20:"PGgzPkF1ZGlvPC9oMz4=";s:9:"css_class";s:5:"title";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:43;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:44;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:5:"span8";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:45;a:5:{s:4:"type";s:4:"text";s:4:"text";s:996:"PGg1PkZPUkVWRVIgMjE8L2g1Pgo8cD5Mb3JlbSBpcHN1bSBkb2xvciBzaXQgYW1ldCwgY29uc2VjdGV0dXIgYWRpcGlzaWNpbmcgZWxpdCwgc2VkIGRvIGVpdXNtb2QgdGVtcG9yIGluY2lkaWR1bnQgdXQgbGFib3JlIGV0IGRvbG9yZSBtYWduYSBhbGlxdWEuIFV0IGVuaW0gYWQgbWluaW0gdmVuaWFtLCBxdWlzIG5vc3RydWQgZXhlcmNpdGF0aW9uIHVsbGFtY28gbGFib3JpcyBuaXNpIHV0IGFsaXF1aXAgZXggZWEgY29tbW9kbyBjb25zZXF1YXQuIER1aXMgYXV0ZSBpcnVyZSBkb2xvciBpbiByZXByZWhlbmRlcml0IGluIHZvbHVwdGF0ZSB2ZWxpdCBlc3NlIGNpbGx1bSBkb2xvcmUgZXUgZnVnaWF0IG51bGxhIHBhcmlhdHVyLjwvcD4KPGRpdiBjbGFzcz0ibm9fcXVpY2tzaG9wIj57e3dpZGdldCB0eXBlPSJuZXdwcm9kdWN0cy9saXN0IiBsaW1pdF9jb3VudD0iMSIgb3JkZXJfYnk9Im5hbWUgYXNjIiBpdGVtX2NsYXNzPSJzcGFuNyIgdGh1bWJuYWlsX3dpZHRoPSIxMzAiIHRodW1ibmFpbF9oZWlnaHQ9IjEzMCIgc2hvd19wcm9kdWN0X25hbWU9InRydWUiIHNob3dfdGh1bWJuYWlsPSJ0cnVlIiBzaG93X2Rlc2NyaXB0aW9uPSJ0cnVlIiBzaG93X3ByaWNlPSJ0cnVlIiBzaG93X3Jldmlld3M9InRydWUiIHNob3dfYWRkdG9jYXJ0PSJ0cnVlIiBzaG93X2FkZHRvPSJ0cnVlIiBzaG93X2xhYmVsPSJ0cnVlIiBjaG9vc2VfdGVtcGxhdGU9ImVtX25ld19wcm9kdWN0cy9uZXdfbGlzdC5waHRtbCJ9fTwvZGl2Pg==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"4";}i:46;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:5:"span4";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:47;a:5:{s:4:"type";s:4:"text";s:4:"text";s:1100:"PGg1PlNBTVBMRSBMSU5LUzwvaDU+Cjx1bD4KPGxpPjxhIGhyZWY9Int7c3RvcmUgZGlyZWN0X3VybD0nZWxlY3Ryb25pY3MuaHRtbCd9fSI+Q29uc2VjdGV0dXIgYWRpcGlzaWNpbmc8L2E+PC9saT4KPGxpPjxhIGhyZWY9Int7c3RvcmUgZGlyZWN0X3VybD0nZnVybml0dXJlLmh0bWwnfX0iPkVpdXNtb2QgdGVtcG9yPC9hPjwvbGk+CjxsaT48YSBocmVmPSJ7e3N0b3JlIGRpcmVjdF91cmw9J2FwcGFyZWwuaHRtbCd9fSI+TGFib3JlIGV0IGRvbG9yZTwvYT48L2xpPgo8bGk+PGEgaHJlZj0ie3tzdG9yZSBkaXJlY3RfdXJsPSdsYXB0b3AuaHRtbCd9fSI+TGFib3JpcyBuaXNpIHV0PC9hPjwvbGk+CjxsaT48YSBocmVmPSJ7e3N0b3JlIGRpcmVjdF91cmw9J3RhYmxldHMuaHRtbCd9fSI+RHVpcyBhdXRlIGlydXJlPC9hPjwvbGk+CjxsaT48YSBocmVmPSJ7e3N0b3JlIGRpcmVjdF91cmw9J3RlbGV2aXNpb25zLmh0bWwnfX0iPkNvbnNlY3RldHVyIGFkaXBpc2ljaW5nPC9hPjwvbGk+CjxsaT48YSBocmVmPSJ7e3N0b3JlIGRpcmVjdF91cmw9J3RlbGV2aXNpb25zLmh0bWwnfX0iPkVpdXNtb2QgdGVtcG9yPC9hPjwvbGk+CjxsaT48YSBocmVmPSJ7e3N0b3JlIGRpcmVjdF91cmw9J3RlbGV2aXNpb25zLmh0bWwnfX0iPkxhYm9yZSBldCBkb2xvcmU8L2E+PC9saT4KPGxpPjxhIGhyZWY9Int7c3RvcmUgZGlyZWN0X3VybD0ndGVsZXZpc2lvbnMuaHRtbCd9fSI+TGFib3JpcyBuaXNpIHV0PC9hPjwvbGk+CjxsaT48YSBocmVmPSJ7e3N0b3JlIGRpcmVjdF91cmw9J3RlbGV2aXNpb25zLmh0bWwnfX0iPkR1aXMgYXV0ZSBpcnVyZTwvYT48L2xpPgo8L3VsPg==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"4";}i:48;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:5:"span4";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:49;a:5:{s:4:"type";s:4:"text";s:4:"text";s:1100:"PGg1PlNBTVBMRSBMSU5LUzwvaDU+Cjx1bD4KPGxpPjxhIGhyZWY9Int7c3RvcmUgZGlyZWN0X3VybD0nZWxlY3Ryb25pY3MuaHRtbCd9fSI+Q29uc2VjdGV0dXIgYWRpcGlzaWNpbmc8L2E+PC9saT4KPGxpPjxhIGhyZWY9Int7c3RvcmUgZGlyZWN0X3VybD0nZnVybml0dXJlLmh0bWwnfX0iPkVpdXNtb2QgdGVtcG9yPC9hPjwvbGk+CjxsaT48YSBocmVmPSJ7e3N0b3JlIGRpcmVjdF91cmw9J2FwcGFyZWwuaHRtbCd9fSI+TGFib3JlIGV0IGRvbG9yZTwvYT48L2xpPgo8bGk+PGEgaHJlZj0ie3tzdG9yZSBkaXJlY3RfdXJsPSdsYXB0b3AuaHRtbCd9fSI+TGFib3JpcyBuaXNpIHV0PC9hPjwvbGk+CjxsaT48YSBocmVmPSJ7e3N0b3JlIGRpcmVjdF91cmw9J3RhYmxldHMuaHRtbCd9fSI+RHVpcyBhdXRlIGlydXJlPC9hPjwvbGk+CjxsaT48YSBocmVmPSJ7e3N0b3JlIGRpcmVjdF91cmw9J3RlbGV2aXNpb25zLmh0bWwnfX0iPkNvbnNlY3RldHVyIGFkaXBpc2ljaW5nPC9hPjwvbGk+CjxsaT48YSBocmVmPSJ7e3N0b3JlIGRpcmVjdF91cmw9J3RlbGV2aXNpb25zLmh0bWwnfX0iPkVpdXNtb2QgdGVtcG9yPC9hPjwvbGk+CjxsaT48YSBocmVmPSJ7e3N0b3JlIGRpcmVjdF91cmw9J3RlbGV2aXNpb25zLmh0bWwnfX0iPkxhYm9yZSBldCBkb2xvcmU8L2E+PC9saT4KPGxpPjxhIGhyZWY9Int7c3RvcmUgZGlyZWN0X3VybD0ndGVsZXZpc2lvbnMuaHRtbCd9fSI+TGFib3JpcyBuaXNpIHV0PC9hPjwvbGk+CjxsaT48YSBocmVmPSJ7e3N0b3JlIGRpcmVjdF91cmw9J3RlbGV2aXNpb25zLmh0bWwnfX0iPkR1aXMgYXV0ZSBpcnVyZTwvYT48L2xpPgo8L3VsPg==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"4";}i:50;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:11:"span8 omega";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:51;a:5:{s:4:"type";s:4:"text";s:4:"text";s:684:"PGg1PlNBTVBMRSBWSURFTzwvaDU+CjxkaXYgc3R5bGUgPSAicGFkZGluZy10b3A6IDEwcHgiPgo8ZGl2IGNsYXNzPSJqcy12aWRlbyB3aWRlc2NyZWVuIj48aWZyYW1lIHdpZHRoPSI1NjAiIGhlaWdodD0iMzE1IiBzcmM9Imh0dHA6Ly93d3cueW91dHViZS5jb20vZW1iZWQvMkVURVR1N1hKVUk/d21vZGU9dHJhbnNwYXJlbnQiIGZyYW1lYm9yZGVyPSIwIiBhbGxvd2Z1bGxzY3JlZW4+PC9pZnJhbWU+PC9kaXY+CjwvZGl2Pgo8cD5SZW0gaXBzdW0gZG9sb3Igc2l0IGFtZXQsIGNvbnNlY3RldHVyIGFkaXBpc2ljaW5nIGVsaXQsIHNlZCBkbyBlaXVzbW9kIHRlbXBvciBpbmNpZGlkdW50IHV0IGxhYm9yZSBldCBkb2xvcmUgbWFnbmEgYWxpcXVhLiBVdCBlbmltIGFkIG1pbmltIHZlbmlhbSwgcXVpcyBub3N0cnVkIGV4ZXJjaXRhdGlvbiB1bGxhbWNvIGxhYm9yaXMgbmlzaSB1dCBhbGlxdWlwIGV4IGVhIGNvbW1vZG8gY29uc2VxdWF0LiBEdWlzIGF1dGUgaXJ1cmUgZG9sb3IgaW4gcmVwcmVoZTwvcD4=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"4";}i:52;a:8:{s:4:"type";s:4:"link";s:5:"label";s:9:"Car & GPS";s:8:"sublabel";s:0:"";s:3:"url";s:28:"electronics/cell-phones.html";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:53;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:9:"container";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:54;a:5:{s:4:"type";s:4:"text";s:4:"text";s:24:"PGgzPkNhbWVyYXM8L2gzPg==";s:9:"css_class";s:5:"title";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:55;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:56;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:5:"span8";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:57;a:5:{s:4:"type";s:4:"text";s:4:"text";s:1012:"PGRpdj48cCBzdHlsZSA9ICJ0ZXh0LWFsaWduOiBjZW50ZXIiPjxhIGhyZWY9IiMiPjxpbWcgc3JjPSJ7e3NraW4gdXJsPSJpbWFnZXMvbWVkaWEvbWVudS9tZW51X2ltZ18yLmpwZyJ9fSIgYWx0PSIiIC8+PC9hPjwvcD4KPHA+QWVuZWFuIHJob25jdXMgZGljdHVtIGRpYW0gdmVsIHB1bHZpbmFyLiBNYWVjZW5hcyByaG9uY3VzIHB1bHZpbmFyIHNlbSwgdXQgYWRpcGlzY2luZyBmZWxpcyB2dWxwdXRhdGUgdGluY2lkdW50LiBBZW5lYW4gdmFyaXVzIGFsaXF1ZXQgYWNjdW1zYW4uIE51bGxhIGZhY2lsaXNpLiBOdWxsYSBlZ2V0IHRlbGx1cyBudW5jLiBGdXNjZSBzZWQgaW50ZXJkdW0gZGlhbS4gU2VkIG5lcXVlIGFyY3UsIGNvbnNlcXVhdCBpbiBtYXR0aXMgZXQsIGFkaXBpc2NpbmcgdWxsYW1jb3JwZXIgcHVydXMuIFNlZCBzaXQgYW1ldCBlbGVpZmVuZCBhcmN1LiBNb3JiaSBuaXNpIGFudGUsIG1hbGVzdWFkYSBxdWlzIHZpdmVycmEgdXQsIHBvcnR0aXRvciBzZWQgdHVycGlzLiBEdWlzIGxvcmVtIG5pYmgsIGVsZW1lbnR1bSBxdWlzIHB1bHZpbmFyIHZlbCwgc3VzY2lwaXQgaWFjdWxpcyBlc3QuIE5hbSBkaWN0dW0sIGVyb3MgYXQgYWNjdW1zYW4gZWxlaWZlbmQsIGFudGUgcXVhbSBncmF2aWRhIHJpc3VzLCBxdWlzIHZhcml1cyBkdWkgYXVndWUgaWQgc2FwaWVuLiBQaGFzZWxsdXMgYXQgaXBzdW0gaW4gbGlndWxhIHRpbmNpZHVudCB2aXZlcnJhIHZlbCBldCB0dXJwaXMuIEFlbmVhbiBmYWNpbGlzaXM8L3A+CjwvZGl2Pg==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"4";}i:58;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:5:"span4";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:59;a:5:{s:4:"type";s:4:"text";s:4:"text";s:1032:"PGg1PlNPRlJFU0g8L2g1Pgo8dWw+CjxsaT48YSBocmVmPSJ7e3N0b3JlIGRpcmVjdF91cmw9J2VsZWN0cm9uaWNzLmh0bWwnfX0iPkVuaW0gdm9sdXB0YXRlbTwvYT48L2xpPgo8bGk+PGEgaHJlZj0ie3tzdG9yZSBkaXJlY3RfdXJsPSdlbGVjdHJvbmljcy5odG1sJ319Ij5RdWlhIHZvbHVwdGFzIGFzcGU8L2E+PC9saT4KPGxpPjxhIGhyZWY9Int7c3RvcmUgZGlyZWN0X3VybD0nYXBwYXJlbC5odG1sJ319Ij5BdXQgb2RpdCBhdXQgZnVnaXQ8L2E+PC9saT4KPGxpPjxhIGhyZWY9Int7c3RvcmUgZGlyZWN0X3VybD0nYXBwYXJlbC9zaGlydHMuaHRtbCd9fSI+U2VkIHF1aWEgY29uc2VxdXVudHVyPC9hPjwvbGk+CjxsaT48YSBocmVmPSJ7e3N0b3JlIGRpcmVjdF91cmw9J2FwcGFyZWwvc2hvZXMuaHRtbCd9fSI+Vm9sdXB0YXRlbSBuZXNjaXVuIDwvYT48L2xpPgo8bGk+PGEgaHJlZj0ie3tzdG9yZSBkaXJlY3RfdXJsPSdhcHBhcmVsL3Nob2VzLmh0bWwnfX0iPlBoYXNlbGx1cyBlZ2V0IDwvYT48L2xpPgo8bGk+PGEgaHJlZj0ie3tzdG9yZSBkaXJlY3RfdXJsPSdhcHBhcmVsL3Nob2VzLmh0bWwnfX0iPkxlY3R1cyBvcmNpIFByb2luIDwvYT48L2xpPgo8bGk+PGEgaHJlZj0ie3tzdG9yZSBkaXJlY3RfdXJsPSdhcHBhcmVsL3Nob2VzLmh0bWwnfX0iPkludGVyZHVtIGlwc3VtIDwvYT48L2xpPgo8bGk+PGEgaHJlZj0ie3tzdG9yZSBkaXJlY3RfdXJsPSdhcHBhcmVsL3Nob2VzLmh0bWwnfX0iPk5vbiB0cmlzdGlxdWUgbW9sZXN0aWU8L2E+PC9saT4KPC91bD4=";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"4";}i:60;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:5:"span4";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:61;a:5:{s:4:"type";s:4:"text";s:4:"text";s:1032:"PGg1PlNPRlJFU0g8L2g1Pgo8dWw+CjxsaT48YSBocmVmPSJ7e3N0b3JlIGRpcmVjdF91cmw9J2VsZWN0cm9uaWNzLmh0bWwnfX0iPkVuaW0gdm9sdXB0YXRlbTwvYT48L2xpPgo8bGk+PGEgaHJlZj0ie3tzdG9yZSBkaXJlY3RfdXJsPSdlbGVjdHJvbmljcy5odG1sJ319Ij5RdWlhIHZvbHVwdGFzIGFzcGU8L2E+PC9saT4KPGxpPjxhIGhyZWY9Int7c3RvcmUgZGlyZWN0X3VybD0nYXBwYXJlbC5odG1sJ319Ij5BdXQgb2RpdCBhdXQgZnVnaXQ8L2E+PC9saT4KPGxpPjxhIGhyZWY9Int7c3RvcmUgZGlyZWN0X3VybD0nYXBwYXJlbC9zaGlydHMuaHRtbCd9fSI+U2VkIHF1aWEgY29uc2VxdXVudHVyPC9hPjwvbGk+CjxsaT48YSBocmVmPSJ7e3N0b3JlIGRpcmVjdF91cmw9J2FwcGFyZWwvc2hvZXMuaHRtbCd9fSI+Vm9sdXB0YXRlbSBuZXNjaXVuIDwvYT48L2xpPgo8bGk+PGEgaHJlZj0ie3tzdG9yZSBkaXJlY3RfdXJsPSdhcHBhcmVsL3Nob2VzLmh0bWwnfX0iPlBoYXNlbGx1cyBlZ2V0IDwvYT48L2xpPgo8bGk+PGEgaHJlZj0ie3tzdG9yZSBkaXJlY3RfdXJsPSdhcHBhcmVsL3Nob2VzLmh0bWwnfX0iPkxlY3R1cyBvcmNpIFByb2luIDwvYT48L2xpPgo8bGk+PGEgaHJlZj0ie3tzdG9yZSBkaXJlY3RfdXJsPSdhcHBhcmVsL3Nob2VzLmh0bWwnfX0iPkludGVyZHVtIGlwc3VtIDwvYT48L2xpPgo8bGk+PGEgaHJlZj0ie3tzdG9yZSBkaXJlY3RfdXJsPSdhcHBhcmVsL3Nob2VzLmh0bWwnfX0iPk5vbiB0cmlzdGlxdWUgbW9sZXN0aWU8L2E+PC9saT4KPC91bD4K";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"4";}i:62;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:5:"span8";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:63;a:5:{s:4:"type";s:4:"text";s:4:"text";s:572:"PGRpdiBjbGFzcz0ibm9fcXVpY2tzaG9wIj57e3dpZGdldCB0eXBlPSJuZXdwcm9kdWN0cy9saXN0IiBsaW1pdF9jb3VudD0iMSIgY29sdW1uX2NvdW50PSIxIiBvcmRlcl9ieT0ibmFtZSBhc2MiIGZyb250ZW5kX3RpdGxlPSJOZXcgUHJvZHVjdHMiIGl0ZW1fY2xhc3M9InNwYW43IiB0aHVtYm5haWxfd2lkdGg9IjM4MCIgdGh1bWJuYWlsX2hlaWdodD0iMjAwIiBzaG93X3Byb2R1Y3RfbmFtZT0idHJ1ZSIgc2hvd190aHVtYm5haWw9InRydWUiIHNob3dfZGVzY3JpcHRpb249InRydWUiIHNob3dfcHJpY2U9InRydWUiIHNob3dfcmV2aWV3cz0idHJ1ZSIgc2hvd19hZGR0b2NhcnQ9InRydWUiIHNob3dfYWRkdG89InRydWUiIHNob3dfbGFiZWw9InRydWUiIGNob29zZV90ZW1wbGF0ZT0iZW1fbmV3X3Byb2R1Y3RzL25ld19ncmlkLnBodG1sIn19PC9kaXY+";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"4";}i:64;a:8:{s:4:"type";s:4:"link";s:5:"label";s:11:"Cell Phones";s:8:"sublabel";s:0:"";s:3:"url";s:24:"electronics/cameras.html";s:6:"target";s:0:"";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"0";}i:65;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:9:"container";s:13:"container_css";s:0:"";s:5:"depth";s:1:"1";}i:66;a:5:{s:4:"type";s:4:"text";s:4:"text";s:24:"PGgzPkNhciAmIEdQUzwvaDM+";s:9:"css_class";s:5:"title";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:67;a:7:{s:4:"type";s:4:"hbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"brands";s:13:"container_css";s:0:"";s:5:"depth";s:1:"2";}i:68;a:7:{s:4:"type";s:4:"vbox";s:5:"width";s:0:"";s:6:"height";s:0:"";s:7:"spacing";s:0:"";s:9:"css_class";s:6:"span24";s:13:"container_css";s:0:"";s:5:"depth";s:1:"3";}i:69;a:5:{s:4:"type";s:4:"text";s:4:"text";s:936:"PHA+CjxhIGhyZWY9IiMiPjxpbWcgc3JjPSJ7e3NraW4gdXJsPSJpbWFnZXMvbWVkaWEvbWVudS8xLmpwZyJ9fSIgYWx0PSIiIC8+PC9hPiAKPGEgaHJlZj0iIyI+PGltZyBzcmM9Int7c2tpbiB1cmw9ImltYWdlcy9tZWRpYS9tZW51LzIuanBnIn19IiBhbHQ9IiIgLz48L2E+IAo8YSBocmVmPSIjIj48aW1nIHNyYz0ie3tza2luIHVybD0iaW1hZ2VzL21lZGlhL21lbnUvMy5qcGcifX0iIGFsdD0iIiAvPjwvYT4KIDxhIGhyZWY9IiMiPjxpbWcgc3JjPSJ7e3NraW4gdXJsPSJpbWFnZXMvbWVkaWEvbWVudS80LmpwZyJ9fSIgYWx0PSIiIC8+CjwvYT4gPGEgaHJlZj0iIyI+PGltZyBzcmM9Int7c2tpbiB1cmw9ImltYWdlcy9tZWRpYS9tZW51LzUuanBnIn19IiBhbHQ9IiIgLz48L2E+CiA8YSBocmVmPSIjIj48aW1nIHNyYz0ie3tza2luIHVybD0iaW1hZ2VzL21lZGlhL21lbnUvNi5qcGcifX0iIGFsdD0iIiAvPjwvYT4KIDxhIGhyZWY9IiMiPjxpbWcgc3JjPSJ7e3NraW4gdXJsPSJpbWFnZXMvbWVkaWEvbWVudS83LmpwZyJ9fSIgYWx0PSIiIC8+CjwvYT4gPGEgaHJlZj0iIyI+PGltZyBzcmM9Int7c2tpbiB1cmw9ImltYWdlcy9tZWRpYS9tZW51LzguanBnIn19IiBhbHQ9IiIgLz48L2E+CiA8YSBocmVmPSIjIj48aW1nIHNyYz0ie3tza2luIHVybD0iaW1hZ2VzL21lZGlhL21lbnUvOS5qcGcifX0iIGFsdD0iIiAvPjwvYT4KPC9wPg==";s:9:"css_class";s:0:"";s:13:"container_css";s:0:"";s:5:"depth";s:1:"4";}}
EOB
	,
	'status' => "1"
))->setCreatedTime(now())->setUpdateTime(now())->save();
$menu_id = $model->getId();

# Mega Menu widget instance
$widget = array(
	'title' => 'Mega Menu',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> serialize(array(
		'menu' => $menu_id
	)),	
	'page_groups' => array(
		array(
			'page_group' => 'all_pages',
			'all_pages' => array(
				'page_id' => 0,
				'layout_handle' => 'default',
				'for' => 'all',
				'block' => 'top.menu'
			)
		)
	),
);
$widgetInstance->setData($widget)->setType('megamenupro/megamenupro')->setPackageTheme($package_theme)->save();

####################################################################################################
# ADD SLIDESHOW
####################################################################################################

/**
 * Create table 'slideshow2/slider'
 */
if(!$installer->tableExists($installer->getTable('slideshow2/slider'))){
$table = $installer->getConnection()
    ->newTable($installer->getTable('slideshow2/slider'))
    ->addColumn('id', Varien_Db_Ddl_Table::TYPE_INTEGER, 11, array(
        'identity'  => true,
        'nullable'  => false,
        'primary'   => true,
        ), 'Slideshow ID')
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_VARCHAR, 100, array(
        ), 'Slideshow name')
	->addColumn('images', Varien_Db_Ddl_Table::TYPE_TEXT, '2M', array(
        ), 'images')
	->addColumn('slider_type', Varien_Db_Ddl_Table::TYPE_VARCHAR, 20, array(
        ), 'Slideshow type')
	->addColumn('slider_params', Varien_Db_Ddl_Table::TYPE_TEXT, '2M', array(
        ), 'Slideshow params')
	->addColumn('delay', Varien_Db_Ddl_Table::TYPE_VARCHAR, 10, array(
        ), 'Slideshow delay')
	->addColumn('touch', Varien_Db_Ddl_Table::TYPE_VARCHAR, 30, array(
        ), 'Slideshow touch')
	->addColumn('stop_hover', Varien_Db_Ddl_Table::TYPE_VARCHAR, 30, array(
        ), 'Slideshow stop hover')
	->addColumn('shuffle_mode', Varien_Db_Ddl_Table::TYPE_VARCHAR, 30, array(
        ), 'Slideshow shuffle mode')
	->addColumn('stop_slider', Varien_Db_Ddl_Table::TYPE_VARCHAR, 30, array(
        ), 'Slideshow stop slider')
	->addColumn('stop_after_loop', Varien_Db_Ddl_Table::TYPE_VARCHAR, 30, array(
        ), 'Slideshow stop after loop')
	->addColumn('stop_at_slide', Varien_Db_Ddl_Table::TYPE_VARCHAR, 30, array(
        ), 'Slideshow stop at slide')
	->addColumn('position', Varien_Db_Ddl_Table::TYPE_TEXT, '2M', array(
        ), 'position')
	->addColumn('appearance', Varien_Db_Ddl_Table::TYPE_TEXT, '2M', array(
        ), 'appearance')
	->addColumn('navigation', Varien_Db_Ddl_Table::TYPE_TEXT, '2M', array(
        ), 'navigation')
	->addColumn('thumbnail', Varien_Db_Ddl_Table::TYPE_TEXT, '2M', array(
        ), 'thumbnail')
	->addColumn('visibility', Varien_Db_Ddl_Table::TYPE_TEXT, '2M', array(
        ), 'visibility')
	->addColumn('trouble', Varien_Db_Ddl_Table::TYPE_TEXT, '2M', array(
        ), 'trouble')
    ->addColumn('creation_time', Varien_Db_Ddl_Table::TYPE_TIMESTAMP, null, array(
        ), 'Slideshow Creation Time')
    ->addColumn('update_time', Varien_Db_Ddl_Table::TYPE_TIMESTAMP, null, array(
        ), 'Slideshow Modification Time')
    ->addColumn('status', Varien_Db_Ddl_Table::TYPE_SMALLINT, null, array(
        'nullable'  => false,
        'default'   => '0',
        ), 'Is Slideshow Active')
    ->setComment('EM Slideshow2 Slider Table');
$installer->getConnection()->createTable($table);
}

# create slideshow of theme EM0067
$model = Mage::getModel('em0067settings/slider');
$model->setData(array(
	'name' => "EM0067-MainSlideshow",
	'images' => <<<EOB
a:3:{i:0;a:6:{s:3:"url";s:21:"1361844949_slide1.jpg";s:5:"trans";s:4:"demo";s:10:"slotamount";s:1:"7";s:4:"link";s:0:"";s:8:"position";s:1:"0";s:4:"info";a:1:{i:0;a:7:{s:4:"text";s:386:"<div class="slideshow-desc"> 
<div class="label">
	<p>-10% </p>
</div>
<h1>Geforce GTX 660 Ti</h1> 	
<p style = "padding-bottom: 20px;">Integer dui nisl, faucibus quis consequat nec, mollis ut dolor. Duis viverra imperdiet nisl, et sodales metus elementum ac.</p>
<p><span class = "price old-price">$720.00</span> 	
<span class = "price special-price">$699.00</span> </p>
</div>";s:5:"class";s:0:"";s:5:"start";s:4:"2000";s:6:"data_x";s:1:"0";s:6:"data_y";s:3:"180";s:6:"easing";s:11:"easeOutBack";s:5:"speed";s:3:"300";}}}i:1;a:6:{s:3:"url";s:21:"1361844949_slide2.jpg";s:5:"trans";s:4:"demo";s:10:"slotamount";s:1:"7";s:4:"link";s:0:"";s:8:"position";s:1:"0";s:4:"info";a:1:{i:0;a:7:{s:4:"text";s:386:"<div class="slideshow-desc"> 
<div class="label">
	<p>-10% </p>
</div>
<h1>Geforce GTX 660 Ti</h1> 	
<p style = "padding-bottom: 20px;">Integer dui nisl, faucibus quis consequat nec, mollis ut dolor. Duis viverra imperdiet nisl, et sodales metus elementum ac.</p>
<p><span class = "price old-price">$720.00</span> 	
<span class = "price special-price">$699.00</span> </p>
</div>";s:5:"class";s:0:"";s:5:"start";s:4:"2000";s:6:"data_x";s:1:"0";s:6:"data_y";s:3:"180";s:6:"easing";s:11:"easeOutBack";s:5:"speed";s:3:"300";}}}i:2;a:6:{s:3:"url";s:21:"1361844949_slide3.jpg";s:5:"trans";s:4:"demo";s:10:"slotamount";s:1:"7";s:4:"link";s:0:"";s:8:"position";s:1:"0";s:4:"info";a:1:{i:0;a:7:{s:4:"text";s:386:"<div class="slideshow-desc"> 
<div class="label">
	<p>-10% </p>
</div>
<h1>Geforce GTX 660 Ti</h1> 	
<p style = "padding-bottom: 20px;">Integer dui nisl, faucibus quis consequat nec, mollis ut dolor. Duis viverra imperdiet nisl, et sodales metus elementum ac.</p>
<p><span class = "price old-price">$720.00</span> 	
<span class = "price special-price">$699.00</span> </p>
</div>";s:5:"class";s:0:"";s:5:"start";s:4:"2000";s:6:"data_x";s:1:"0";s:6:"data_y";s:3:"180";s:6:"easing";s:11:"easeOutBack";s:5:"speed";s:3:"300";}}}}
EOB
	,
	'slider_type' => 'responsitive',
	'slider_params' => <<<EOB
a:14:{s:10:"size_width";s:3:"885";s:11:"size_height";s:3:"402";s:14:"screen_width_1";s:4:"1200";s:14:"slider_width_1";s:3:"710";s:14:"screen_width_2";s:3:"980";s:14:"slider_width_2";s:3:"548";s:14:"screen_width_3";s:3:"768";s:14:"slider_width_3";s:3:"508";s:14:"screen_width_4";s:3:"516";s:14:"slider_width_4";s:3:"420";s:14:"screen_width_5";s:3:"321";s:14:"slider_width_5";s:3:"260";s:14:"screen_width_6";s:0:"";s:14:"slider_width_6";s:0:"";}
EOB
	,
	'delay' =>'5000',
	'touch' =>'on',
	'stop_hover' =>'on',
	'shuffle_mode' =>'off',
	'stop_slider' =>'off',
	'stop_after_loop' =>'0',
	'stop_at_slide' =>'2',
	'position' => <<<EOB
a:5:{s:4:"type";s:4:"left";s:6:"mg_top";s:2:"30";s:9:"mg_bottom";s:2:"30";s:7:"mg_left";s:1:"0";s:8:"mg_right";s:1:"0";}
EOB
	,
	'appearance' => <<<EOB
a:7:{s:11:"shadow_type";s:1:"0";s:9:"show_time";s:4:"true";s:13:"time_position";s:6:"bottom";s:8:"bg_color";s:0:"";s:7:"padding";s:1:"0";s:11:"show_bg_img";s:5:"false";s:6:"bg_img";s:0:"";}
EOB
	,
	'navigation' => <<<EOB
a:7:{s:8:"nav_type";s:6:"bullet";s:10:"nav_arrows";s:4:"none";s:9:"nav_style";s:5:"round";s:14:"nav_offset_hor";s:1:"0";s:15:"nav_offset_vert";s:2:"10";s:13:"nav_always_on";s:4:"true";s:11:"hide_thumbs";s:3:"200";}
EOB
	,
	'thumbnail' => <<<EOB
a:3:{s:11:"thumb_width";s:3:"100";s:12:"thumb_height";s:2:"50";s:12:"thumb_amount";s:1:"5";}
EOB
	,
	'visibility' => <<<EOB
a:3:{s:17:"hide_slider_under";s:1:"0";s:25:"hide_defined_layers_under";s:1:"0";s:21:"hide_all_layers_under";s:1:"0";}
EOB
	,
	'trouble' => <<<EOB
a:2:{s:17:"jquery_noconflict";s:2:"on";s:10:"js_to_body";s:5:"false";}
EOB
	,
	'status' => "1"
))->setCreatedTime(now())->setUpdateTime(now())->save();
$slideshow_id = $model->getId();

# Slider widget instance
$widget = array(
	'title' => 'EM0067- Area2 - Slideshow2',
	'store_ids' => $stores,
	'sort_order' => 0,
	'widget_parameters'	=> serialize(array(
		'slideshow' => $slideshow_id
	)),
	// a:1:{s:9:"slideshow";s:1:"1";}
	'page_groups' => array(
		array(
			'page_group' => 'pages',
			'pages' => array(
				'page_id' => 41,
				'layout_handle' => 'cms_index_index',
				'for' => 'all',
				'block' => 'em_area2'
			)
		)
	),
);
$widgetInstance->setData($widget)->setType('slideshow2/slideshow2')->setPackageTheme($package_theme)->save();

$installer->endSetup(); 