/*
	date create : 2-1-2013
*/
jQuery(document).ready(function($) {

	//	disable Stop Slider
	if($('#stop_slideroff').is(':checked') == true ){
		$("#stop_after_loop").attr("disabled","disabled");
		$("#stop_at_slide").attr("disabled","disabled");
	}else{
		$("#stop_after_loop").removeAttr("disabled");
		$("#stop_at_slide").removeAttr("disabled");
	}

	$('#stop_slideron').change(function() {
		$("#stop_after_loop").removeAttr("disabled");
		$("#stop_at_slide").removeAttr("disabled");
	});
	$('#stop_slideroff').change(function() {
		$("#stop_after_loop").attr("disabled","disabled");
		$("#stop_at_slide").attr("disabled","disabled");
	});

	//	disable Stop Slider
	if($('#slider_typeresponsitive').is(':checked') == true ){
		$("#slideshow2_general3 :input").removeAttr("disabled");
	}else{
		$("#slideshow2_general3 :input").attr("disabled","disabled");	
	}

	$('#slider_typeresponsitive').change(function() {
		$("#slideshow2_general3 :input").removeAttr("disabled");
	});
	$('#slider_typefixed').change(function() {
		$("#slideshow2_general3 :input").attr("disabled","disabled");
	});
	$('#slider_typefullwidth').change(function() {
		$("#slideshow2_general3 :input").attr("disabled","disabled");
	});

	//	disable Position field
	if($("#type").val() == 'center'){
		$("#mg_left").attr("disabled","disabled");
		$("#mg_right").attr("disabled","disabled");
	}

	$("select#type").bind("change", function() {
		$("select#type option:selected").each(function () {
			var value	=	$(this).val();
			if(value == 'center'){
				$("#mg_left").attr("disabled","disabled");
				$("#mg_right").attr("disabled","disabled");
			}else{
				$("#mg_left").removeAttr("disabled");
				$("#mg_right").removeAttr("disabled");
			}
		});
	});

	// color picker
	$('#bg_color').css("background-color",$('#bg_color').val());
	$('#bg_color').ColorPicker({
		onChange: function(hsb, hex, rgb, el) {
			var value	=	'#'+hex;
			$('#bg_color').val(value);
			$('#bg_color').css("background-color",value);
		},
		onSubmit: function(hsb, hex, rgb, el) {
			$('#bg_color').ColorPickerHide();
		}
	});
	
	//	disable Stop Slider
	if($('#show_bg_imgfalse').is(':checked') == true ){
		$("#bg_img").attr("disabled","disabled");
	}else{
		$("#bg_img").removeAttr("disabled");
	}

	$('#show_bg_imgtrue').change(function() {
		$("#bg_img").removeAttr("disabled");
	});
	$('#show_bg_imgfalse').change(function() {
		$("#bg_img").attr("disabled","disabled");
	});

	change_transaction();
});

function change_transaction(){
	//	Show image Transaction field
	jQuery(".sel_trans").each(function () {
		var value	=	jQuery(this).val();
		var parent	=	jQuery(this).parent(0);
		parent.find(".show_trans").addClass(value);
	});

	jQuery("select.sel_trans").bind("change", function() {
		var tmp_sel	=	jQuery(this);
		var parent	=	tmp_sel.parent(0);
		var sub	=	parent.find(".show_trans").removeClass();
		sub.addClass("show_trans "+tmp_sel.val());
	});
}

	