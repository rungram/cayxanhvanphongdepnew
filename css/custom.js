jQuery(window).resize(function($){
	var w_window = jQuery(window).width();
	
	
});
jQuery(document).ready(function($){
  $('.yf-mob-filter').click(function(){
    $('.archive .left').slideToggle();
    return false;
  });
	var offset = 220;
    var duration = 500;
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.back-to-top').fadeIn(duration);
        } else {
            jQuery('.back-to-top').fadeOut(duration);
        }
    });
    jQuery('.back-to-top').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    })
	// Lọc trang archive
	function set_query($data, $yf_query){
		var newerQuery = '';
		if($data != '')
			newerQuery = $.query.SET($yf_query, $data);
		else
			newerQuery = $.query.REMOVE($yf_query);
		window.location.href = window.location.href.replace(location.search, '') + newerQuery;
	}
	$from = $.query.GET('price_from');
	$to = $.query.GET('price_to');
	if($from == '') $from = 1;
	if($to == '') $to = 99;
	$( "#slider-range" ).slider({
		range: true,
		min: 1,
		max: 99,
		values: [ $from, $to ],
		slide: function( event, ui ) {
			$( "#amount_from" ).html( ui.values[ 0 ] + '.000.000' );
			$( "#amount_to" ).html( ui.values[ 1 ] + '.000.000');
			set_query(ui.values[ 0 ], 'price_from');
			set_query(ui.values[ 1 ], 'price_to');
		}
	});
	$( "#amount_from" ).html( $( "#slider-range" ).slider( "values", 0 ) + '.000.000' );
	$( "#amount_to" ).html( $( "#slider-range" ).slider( "values", 1 ) + '.000.000');
	$('select[name="orderby"]').change(function(){
		$data = $(this).val();
		set_query($data, 'order');
		return false;
	});
	$('#filter_style a').click(function(){
		$data = $(this).attr('data-fill');
		set_query($data, 'style');
		return false;
	});
	$('#filter_made a').click(function(){
		$data = $(this).attr('data-fill');
		set_query($data, 'made');
		return false;
	});
	$('.filter_color').click(function(){
		$data = $(this).attr('data-fill');
		set_query($data, 'color');
		return false;
	});
	$('.remove_filter').click(function(){
		$data = $(this).attr('data-fill');
		set_query('', $data);
		if($data == 'price_from')
			set_query('', 'price_to');
		return false;
	});
	function getParameterByName(name) {
		name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
		var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
			results = regex.exec(location.search);
		return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
	}
	// END - Lọc trang archive
	$('.toogle-menu').click(function() {
		$('.menu-header > ul').slideToggle('slow');
		return false;
	});
  $('.menu-header ul a').click(function() {
    if($(this).parent().hasClass('menu-item-has-children')){
      if($(this).parent().children('.sub-menu').css('display') == 'none'){
         
        $('.menu-header .sub-menu').slideUp();
        $(this).parent().children('.sub-menu').slideDown();
        return false;
      }else return true;
    }else return true;
	});
	
	var owl_index = $(".index_slider");
	owl_index.owlCarousel({
		items : 1, //10 items above 1000px browser width
		itemsDesktop : [1000,1], //5 items between 1000px and 901px
		itemsDesktopSmall : [900,1], // betweem 900px and 601px
		itemsTablet: [600,1], //2 items between 600 and 0
		itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
		autoplay:true,
		autoplayHoverPause:false,
		rtl: true,
		loop: true,
	});
	
	var owl = $(".slider_single");
	owl.owlCarousel({
		items : 5, //10 items above 1000px browser width
		itemsDesktop : [1000,5], //5 items between 1000px and 901px
		itemsDesktopSmall : [900,3], // betweem 900px and 601px
		itemsTablet: [600,2], //2 items between 600 and 0
		itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
	});
	
	var owl_item = $(".slider_item");
	owl_item.owlCarousel({
    pagination : true,
		items : 1, //10 items above 1000px browser width
		itemsDesktop : [1000,1], //5 items between 1000px and 901px
		itemsDesktopSmall : [900,1], // betweem 900px and 601px
		itemsTablet: [600,1], //2 items between 600 and 0
		itemsMobile : false, // itemsMobile disabled - inherit from itemsTablet option
	});
  $(".control.next").click(function(){
		owl.trigger('owl.next');
    alert('a');
		return false;
	})
	$(".control.prev").click(function(){
		owl.trigger('owl.prev');
		return false;
	})
	
	$(".slider_item").hover(
		function(){
			$(this).trigger('owl.play',1000);
		},
		function(){
			$(this).trigger('owl.stop');
		}
	);
	
	/* Click thumbnail */
	$('.slider_single a').click(function(){
		$data = $(this).children('img').attr('src');
		$data_fill = $(this).attr('data-fill');
		// $('.zoomContainer').remove();
		// $(".zoom-image").data('zoom-image', $data).elevateZoom({
			// zoomType : "inner",
			// cursor: "crosshair" 
		// });
		$('.main_content .thumbnail-fancy').attr('data-fill', $data_fill);
		$('.main_content .thumbnail-fancy img').attr('src',$data);
		return false;
	});
	$('.thumbnail-fancy').click(function(){
		$data = $(this).attr('data-fill');
		$('#' + $data).trigger('click');
		return false;
	});
	/* print single blog */
	$('.single-blog-print').click(function(){
		$(".right-content.singles").print();
		return false;
	});
	/* print single product */
	$('.single-product-print').click(function(){
		print();
		return false;
	});
	/* zoom image */
	//$('.zoom-image').elevateZoom({ 
		//zoomType : "inner",
		//cursor: "crosshair" 
	//});
	/* More menu click */
	$('.more_menu a').click(function(){
		$('.more_menu a').removeClass('active');
		$(this).addClass('active');
		$data = $(this).attr('data-fill');
		$('.more_tab').addClass('hidden');
		$($data).removeClass('hidden');
		return false;
	});
	/* match Height */
	$('.products .item').matchHeight({
		byRow: true
	});
	/* Giao hàng khác địa chỉ trên */
	$('input[name="nguoinhan"]').click(function(){
		$data = $(this).val();
		if($data == 2){
			$('.dia-chi-2').slideDown();
			$('.dia-chi-2').css('display', 'inline-block');
		}
		else if($data == 1)
			$('.dia-chi-2').slideUp();
	});
	/* VALIDATE TTCN FORM */
	$('#yf_edit_profile').validate({
		rules: {
			password: {
				minlength: 6
			},
			password_again: {
				minlength: 6,
				equalTo: '#password'
			},
			hoten: 'required',
			dienthoai: 'required',
			diachi: 'required',
		},
		messages: {
			password: {
				minlength: 'Yêu cầu tối thiểu 6 ký tự',
			},
			password_again: {
				minlength: 'Yêu cầu tối thiểu 6 ký tự',
				equalTo: 'Xác nhận mật khẩu không đúng'
			},
			hoten: 'Vui lòng nhập họ tên',
			dienthoai: 'Vui lòng nhập số điện thoại',
			diachi: 'Vui lòng nhập địa chỉ',
		}
	});
	/* VALIDATE CHECKOUT FORM */
	$('.yf-checkout').validate({
		rules: {
			hovaten: "required",
			hovaten2: "required",
			email: {
				required:true,
				email: true
			},
			dienthoai: "required",
			dienthoai2: "required",
			diachi: "required",
			diachi2: "required"
		},
		messages: {
			hovaten: "Vui lòng nhập họ tên.",
			hovaten2: "Vui lòng nhập họ tên.",
			email: {
				required: 'Vui lòng nhập email.',
				email: 'Vui lòng kiểm tra lại emai.'
			},
			dienthoai: "Vui lòng nhập số điện thoại",
			dienthoai2: "Vui lòng nhập số điện thoại",
			diachi: "Vui lòng nhập địa chỉ",
			diachi2: "Vui lòng nhập địa chỉ"
		}
	});
	/* VALIDATE ĐĂNG KÝ FORM */
	$('#dangky').validate({
		rules: {
			ten: {
				required:true,
				minlength: 6
			},
			password: {
				required:true,
				minlength: 6
			},
			password_again: {
				minlength: 6,
				equalTo: '#password'
			},
			email: {
				required:true,
				email: true
			},
			dienthoai: "required",
		},
		messages: {
			ten: {
				required: 'Vui lòng nhập họ tên',
				minlength: 'Yêu cầu tối thiểu 6 ký tự',
			},
			password: {
				required: 'Vui lòng điền mật khẩu',
				minlength: 'Yêu cầu tối thiểu 6 ký tự',
			},
			password_again: {
				equalTo: 'Xác nhận mật khẩu không đúng'
			},
			email: {
				required: 'Vui lòng nhập email.',
				email: 'Vui lòng kiểm tra lại emai.'
			},
			dienthoai: "Vui lòng nhập số điện thoại",
		}
	});
	// RESIZE VIDEO
	$(function() {
	    var $allVideos = $("iframe[src^='//player.vimeo.com'], iframe[src^='//www.youtube.com'], object, embed"),
	    $fluidEl = $("figure");

		$allVideos.each(function() {

		  $(this)
		    // jQuery .data does not work on object/embed elements
		    .attr('data-aspectRatio', this.height / this.width)
		    .removeAttr('height')
		    .removeAttr('width');

		});

		$(window).resize(function() {

		  var newWidth = $fluidEl.width();
		  $allVideos.each(function() {

		    var $el = $(this);
		    $el
		        .width(newWidth)
		        .height(newWidth * $el.attr('data-aspectRatio'));
		  });
		}).resize();
	});
});