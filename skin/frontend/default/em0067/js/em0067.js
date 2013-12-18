/**
 * EMThemes
 *
 * @license commercial software
 * @copyright (c) 2012 Codespot Software JSC - EMThemes.com. (http://www.emthemes.com)
 */

(function($) {

EM_Theme = {
	CROSSSELL_ITEM_WIDTH: 250,
	CROSSSELL_ITEM_SPACING: 90,
	UPSELL_ITEM_WIDTH: 250,
	UPSELL_ITEM_SPACING: 90
};



if (typeof EM == 'undefined') EM = {};
if (typeof EM.tools == 'undefined') EM.tools = {};

var isMobile = /iPhone|iPod|iPad|Phone|Mobile|Android|hpwos/i.test(navigator.userAgent);
var isPhone = /iPhone|iPod|Phone|Android/i.test(navigator.userAgent);



var domLoaded = false, 
	windowLoaded = false;


/**
 * Auto positioning product items in products-grid
 *
 * @param (selector/element) productsGridEl products grid element
 * @param (object) options
 * - (integer) width: width of product item
 * - (integer) spacing: spacing between 2 product items
 */
EM.tools.decorateProductsGrid = function (productsGridEl) {
	var $productsGridEl = $(productsGridEl);
	if ($productsGridEl.length == 0) return;
		
	var maxHeight = 0;
	$('.item', $productsGridEl).each(function() {			
		maxHeight = Math.max(maxHeight, $(this).outerHeight(true));
	});
	
	$('.item', $productsGridEl).each(function() {
	   $(this).css({'min-height': maxHeight +  'px'});
	});
};

/**
 * Decorate Product Tab
 */ 
EM.tools.decorateProductCollateralTabs = function() {
	$(document).ready(function() {
		$('.product-collateral').addClass('tab_content').each(function(i) {
			$(this).wrap('<div class="tabs_wrapper collateral_wrapper" />');
			var tabs_wrapper = $(this).parent();
			var tabs_control = $(document.createElement('ul')).addClass('tabs_control').insertBefore(this);
			
			$('.box-collateral', this).addClass('tab-item').each(function(j) {
				var id = 'box_collateral_'+i+'_'+j;
				$(this).addClass('content_'+id);
				tabs_control.append('<li><h2><a href="#'+id+'">'+$('h2', this).html()+'</a></h2></li>');
			});
			
			initToggleTabs(tabs_wrapper);
		});
	});
};


/**
 * Fix iPhone/iPod auto zoom-in when text fields, select boxes are focus
 */
function fixIPhoneAutoZoomWhenFocus() {
	var viewport = $('head meta[name=viewport]');
	if (viewport.length == 0) {
		$('head').append('<meta name="viewport" content="width=device-width, initial-scale=1.0"/>');
		viewport = $('head meta[name=viewport]');
	}	
	var old_content = viewport.attr('content');	
	function zoomDisable(){
		viewport.attr('content', old_content + ', user-scalable=0');
	}
	function zoomEnable(){
		viewport.attr('content', old_content);
	}
	
	$("input[type=text], textarea, select").mouseover(zoomDisable).mousedown(zoomEnable);
}
/**
 * Adjust elements to make it responsive
 *
 * Adjusted elements:
 * - Image of product items in products-grid scale to 100% width
 */
function responsive() {
	
	// resize products-grid's product image to full width 100% {{{
	var position = $('.products-grid .item').css('position');
	if (position != 'absolute' && position != 'fixed' && position != 'relative')
		$('.products-grid .item').css('position', 'relative');
		
	var img = $('.products-grid .item .product-image img');
	img.each(function() {
		img.data({
			'width': $(this).width(),
			'height': $(this).height()
		})
	});
	img.removeAttr('width').removeAttr('height').css('width', '100%');
	// responsive:
	// - image 
	// - custom logo on sidebar
	// - category image
	$('.sidebar img, .category-image img').each(function() {
		if (!$(this).hasClass('fluid')) {
			$(this).css({
				'max-width': $(this).width(),
				'max-height': $(this).height(),
				'width': '100%'
			});
		}
	});
}


/**
 * Function called when layout size changed by adapt.js
 */
function whenAdapt() {	
	//disable freezed top menu when in iphone
	window.freezedTopMenu = (isMobile!=1 && EM_Theme.FREEZED_TOP_MENU) ? 1: 0;
	if (window.freezedTopMenu && $(window).scrollTop() > 145) {
		$('.em_nav, .nav-container').addClass('fixed-top');
	} else {
		$('.em_nav, .nav-container').removeClass('fixed-top');
	}

	/*
	 EM.tools.decorateProductsGrid('.category-products .products-grid', {
		width: EM_Theme.PRODUCTSGRID_ITEM_WIDTH,
		spacing: EM_Theme.PRODUCTSGRID_ITEM_SPACING
	});
	EM.tools.decorateProductsGrid('#upsell-product-table .products-grid', {
		width: EM_Theme.UPSELL_ITEM_WIDTH,
		spacing: EM_Theme.UPSELL_ITEM_SPACING
	});
	EM.tools.decorateProductsGrid('#crosssell-products-list', {
		width: EM_Theme.CROSSSELL_ITEM_WIDTH,
		spacing: EM_Theme.CROSSSELL_ITEM_SPACING
	});
	*/
}

window.onresize = function(){
	if (typeof em_slider!=='undefined')
        em_slider = new EM_Slider(em_slider.config);
	if (($('#image')!=null)&& (product_zoom != null)){
		$('#image').width(product_zoom.imageDim.width);

        Event.stopObserving($('#zoom_in'), 'mousedown', product_zoom.startZoomIn.bind(product_zoom));
        Event.stopObserving($('#zoom_in'), 'mouseup', product_zoom.stopZooming.bind(product_zoom));
        Event.stopObserving($('#zoom_in'), 'mouseout', product_zoom.stopZooming.bind(product_zoom));

        Event.stopObserving($('#zoom_out'), 'mousedown', product_zoom.startZoomOut.bind(product_zoom));
        Event.stopObserving($('#zoom_out'), 'mouseup', product_zoom.stopZooming.bind(product_zoom));
        Event.stopObserving($('#zoom_out'), 'mouseout', product_zoom.stopZooming.bind(product_zoom));

		//$('#image').height(product_zoom.imageDim.height);
		product_zoom = new Product.Zoom('image', 'track', 'handle', 'zoom_in', 'zoom_out', 'track_hint');;
	}
}

$(document).ready(function() {
	domLoaded = true;
	isMobile && fixIPhoneAutoZoomWhenFocus();	
	alternativeProductImage();	
	initTopButton();	
	if (EM_Theme.FREEZED_TOP_MENU) persistentMenu();	
	setupReviewLink();
	// safari hack: remove bold in h5, .h5
	if (navigator.userAgent.indexOf('Safari') != -1 && navigator.userAgent.indexOf('Chrome') == -1) {
		$('h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6').css('font-weight', 'normal');
	}	
	if($('body').viewPC()){
		topselect();
		toolbar();
	}
    menuVertical();
    em0067();
});

$(window).bind('load', function() {
	windowLoaded = true;
	responsive();
	if(!isMobile){
		EM.tools.decorateProductsGrid('.category-products .products-grid');
		 $('.widget-products .products-grid').each(function() {			
			 EM.tools.decorateProductsGrid(this);
		});
	}
	whenAdapt();
});
$(window).bind('orientationchange', function(e) {    
	if(!isMobile){
		EM.tools.decorateProductsGrid('.category-products .products-grid');
		$('.widget-products .products-grid').each(function() {			
			 EM.tools.decorateProductsGrid(this);
		});
	}
   if(window.orientation != 0){
        $('.store-switcher').addClass('store-switcher-landscape');
   }
});
})(jQuery);


/**
*   Slider
**/
function initSlider(e,verticals) {
	var $ = jQuery;
    var wraps;
	if (verticals == null){
		verticals=false;
        wraps = null;
    }else{
        wraps = 'circular';
    }
	
	var widthcss = $( e + ' li.item').width();
	var rightcss = $( e + ' li.item').outerWidth(true)- $( e + ' li.item').outerWidth();
	$(e).addClass('jcarousel-skin-tango');
	$(e).parent().append('<div class="slide_css">');
	$(e).parent().find('.slide_css').html('<style type="text/css">'+e+' .jcarousel-item {width:' + widthcss + 'px;margin-right:'+ rightcss +'px;}</style>');
	//jQuery('#<?php echo $idJs;?>_css').html('<style type="text/css">#<?php echo $idJs;?> .jcarousel-skin-tango .jcarousel-item {width:' + width_<?php echo $idJs;?> + 'px;}</style>');
	//$('.jcarousel-skin-tango .jcarousel-item').css('width',  width>');
	$(e).jcarousel({
		buttonNextHTML:'<a class="next" href="javascript:void(0);" title="Next"></a>',
		buttonPrevHTML:'<a class="previous" href="javascript:void(0);" title="Previous"></a>',
		scroll: 1,
		wrap: wraps,
		animation:'slow',
		vertical:verticals,
		initCallback: function (carousel) {
			var context = carousel.container.context;
			$(context).touchwipe({
				wipeLeft: function() { 
					carousel.next();
				},
				wipeRight: function() { 
					carousel.prev();
				},
				preventDefaultEvents: false
			});
			$(window).resize(function() {
				carousel.scroll(1,true);
			});
		}
	});
}


/**
*   persistentMenu
**/
function persistentMenu() {
	var $ = jQuery;

	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 145 && window.freezedTopMenu) {
				$('.em_nav, .nav-container').addClass('fixed-top');
			} else {
				$('.em_nav, .nav-container').removeClass('fixed-top');
			}
		});
	});
}

/**
*   initTopButton
**/
function initTopButton() {
	var $ = jQuery;
	// hide #back-top first
	$("#back-top").hide();

	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#back-top').fadeIn();
			} else {
				$('#back-top').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('#back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});
}
function topselect(){
	 var $=jQuery;
	$('#select-store').each(function(){
		$(this).insertUl();
		$(this).selectUl();
	});
    $('#select-language').each(function(){
    		$(this).insertUl();
    		$(this).selectUl();
    	});
    $('#select-currency').each(function(){
		$(this).insertUl();
		$(this).selectUl();
	});
}
function toolbar(){
    var $=jQuery;
    
	$('.show').each(function(){
	//	$(this).insertTitle();
		$(this).insertUl();
		$(this).selectUl();
	});
	$('.sortby').each(function(){
	//	$(this).insertTitle();
		$(this).insertUl();
		$(this).selectUl();
	});
}

/**
*   showReviewTab
**/
function showReviewTab() {
	var $ = jQuery;
	
	var reviewTab = $('.tabs_control li:contains('+ review +')');
	if (reviewTab.size()) {
		// scroll to review tab
		$('html, body').animate({
			 scrollTop: reviewTab.offset().top
		}, 500);
		 
		 // show review tab
		reviewTab.click();
	} else if ($('#customer-reviews').size()) {
		// scroll to customer review
		$('html, body').animate({ scrollTop: $('#customer-reviews').offset().top }, 500);
	} else {
		return false;
	}
	return true;
};

/**
*   setupReviewLink
**/
function setupReviewLink() {
	jQuery('.r-lnk').click(function (e) {
		if (showReviewTab())
			e.preventDefault();
	});
};

function em0067(){
	jQuery('.em_main').parent().addClass('row_main');
}

/**
 * Change the alternative product image when hover
 */
function alternativeProductImage() {
    var $=jQuery;
	var tm;
	function swap() {
		clearTimeout(tm);
		setTimeout(function() {
			el = $(this).find('img[data-alt-src]');
			var newImg = $(el).data('alt-src');
			var oldImg = $(el).attr('src');
			$(el).attr('src', newImg).data('alt-src', oldImg);
		}.bind(this), 200);
	}	
	$('.item .product-image img[data-alt-src]').parents('.item').bind('mouseenter', swap).bind('mouseleave', swap);
}

/**
*   After Layer Update
**/
window.afterLayerUpdate = function () {
    var $=jQuery;  
    if($('body').viewPC()){
		toolbar();
	}
    alternativeProductImage();    
}

function menuVertical() {
	var $=jQuery; 
	if($('.vnav > .menu-item-link > .menu-container > li.fix-top').length > 0){
		$('.vnav > .menu-item-link > .menu-container > li.fix-top').parent().parent().mouseover(function() {
			var $container = $(this).children('.menu-container,ul.level0');
			var $containerHeight = $container.outerHeight();
			var $containerTop = $container.offset().top;
			var $winHeight = $(window).height();
			var $maxHeight = $containerHeight + $containerTop;
			//if($maxHeight >= $winHeight){
				$setTop = $(this).parent().offset().top -  $(this).offset().top;
				if(($setTop+$containerHeight) < $(this).height()){
					$setTop  = $(this).outerHeight() - $containerHeight;
				}
			/*}else{
				$setTop = (-1);
			}*/
			var $grid = $(this).parents('.em_nav').first().parents().first();
			$container.css('top', $setTop);
			if($maxHeight < $winHeight){
				$('.vnav ul.level0,.vnav > .menu-item-link > .menu-container').first().css('top', $setTop-9 +'px');
			}
			
		});
		$('.vnav .menu-item-link > .menu-container,.vnav ul.level0').parent().mouseout(function() {
			var $container = $(this).children('.menu-container,ul.level0');
			$container.removeAttr('style');
		});
	}
}
