<?php
	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED); //bo thonng bao khi cac file chua dinh nghia
	session_start();
	$session=session_id();
	@define ( '_template' , './templates/');
	@define ( '_source' , './sources/');
	@define ( '_lib' , './admin/lib/');
	@define ( _upload_folder , './media/upload/' );

	if(!isset($_SESSION['lang2']))
	{
	$_SESSION['lang2']='vi';
	}
	
	$lang=$_SESSION['lang2']; //Lấy ngỗn ngữ
	require_once _source."lang_$lang.php";	//Lấy các Hằng.

	include_once _lib."config.php";
	include_once _lib."constant.php";
	include_once _lib."functions.php";
	include_once _lib."class.database.php";
	include_once _lib."file_requick.php";
	include_once _source."counter.php";
	include_once _source."useronline.php";	
	
	
	include_once _lib."functions_giohang.php";
	$config_url='localhost:81/nhadep';
    if($_REQUEST['command']=='add' && $_REQUEST['productid']>0){
    	$pid=$_REQUEST['productid'];	
    	$_SESSION['size'.$pid]=$_REQUEST['spsize']; 
    	$_SESSION['mau'.$pid]=$_REQUEST['spmau']; 
    	$q=isset($_GET['quality']) ? (int)$_GET['quality'] : "1";
    	addtocart($pid,$q);
    	redirect("http://$config_url/gio-hang.html");
	}
?>
<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" class=" yes-js js_active js" lang="vi">
<head>
<base href="http://<?=$config_url?>/"	/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta tag for responsive -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!-- Meta when no responsive:
	<meta name="viewport" content="width=1000"> -->
<title>Công Ty CP Kiến Trúc Xây Dựng Home Decor</title>
<!-- Favicon 
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" /> -->
<!-- Custom css -->
<link rel="stylesheet" type="text/css" href="js/rs-wp-v1.css" media="all">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="screen">
<link rel="stylesheet" type="text/css" href="css/font.css" media="all">
<link href="css/jquery_002.css" rel="stylesheet" type="text/css" media="screen">
<link href="css/jquery-ui.css" rel="stylesheet" type="text/css" media="screen">
<link href="css/owl_002.css" rel="stylesheet" type="text/css" media="screen">
<link href="css/owl.css" rel="stylesheet" type="text/css" media="screen">
<link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="stylesheet" type="text/css" href="css/responsive.css" media="all">
<link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css" media="screen"/>
<!-- Custom jquery -->
<script async="" charset="utf-8" src="js/a" type="text/javascript"></script>
<script async="" src="js/analytics.js"></script>
<script id="facebook-jssdk" src="js/sdk.js"></script>
<script type="text/javascript">document.documentElement.className = document.documentElement.className + ' yes-js js_active js'</script>
<style>
.wishlist_table .add_to_cart, a.add_to_wishlist.button.alt {
	border-radius: 16px;
	-moz-border-radius: 16px;
	-webkit-border-radius: 16px;
}
</style>
<script type="text/javascript">
				var yith_wcwl_plugin_ajax_web_url = 'http://nhadep.com.vn/wp-admin/admin-ajax.php';
			</script>
<!-- This site is optimized with the Yoast SEO plugin v3.0.4 - https://yoast.com/wordpress/plugins/seo/ -->
<meta name="description" content="Nội thất Nhà Đẹp thương hiệu nổi tiếng và uy tín từ năm 1999. Hàng triệu gia đình đã lựa chọn và hài lòng với sản phẩm, dịch vụ của Nội thất Nhà Đẹp.">
<meta name="robots" content="noodp">
<link rel="canonical" href="js/a_002.htm">
<meta property="og:locale" content="vi_VN">
<meta property="og:type" content="website">
<meta property="og:title" content="Nội thất Nhà đẹp | Thương hiệu uy tín hàng đầu từ năm 1999.">
<meta property="og:description" content="Nội thất Nhà Đẹp thương hiệu nổi tiếng và uy tín từ năm 1999. Hàng triệu gia đình đã lựa chọn và hài lòng với sản phẩm, dịch vụ của Nội thất Nhà Đẹp.">
<meta property="og:url" content="http://nhadep.com.vn/">
<meta name="twitter:card" content="summary">
<meta name="twitter:description" content="Nội thất Nhà Đẹp thương hiệu nổi tiếng và uy tín từ năm 1999. Hàng triệu gia đình đã lựa chọn và hài lòng với sản phẩm, dịch vụ của Nội thất Nhà Đẹp.">
<meta name="twitter:title" content="Nội thất Nhà đẹp | Thương hiệu uy tín hàng đầu từ năm 1999.">
<script type="application/ld+json">{"@context":"http:\/\/schema.org","@type":"WebSite","url":"http:\/\/nhadep.com.vn\/","name":"","potentialAction":{"@type":"SearchAction","target":"http:\/\/nhadep.com.vn\/?s={search_term_string}","query-input":"required name=search_term_string"}}</script>
<!-- / Yoast SEO plugin. -->
<link rel="alternate" type="application/rss+xml" title=" » Trang chủ Dòng phản hồi" href="http://nhadep.com.vn/trang-chu/feed/">
<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"http:\/\/s.w.org\/images\/core\/emoji\/72x72\/","ext":".png","source":{"concatemoji":"http:\/\/nhadep.com.vn\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.3.1"}};
			!function(a,b,c){function d(a){var c=b.createElement("canvas"),d=c.getContext&&c.getContext("2d");return d&&d.fillText?(d.textBaseline="top",d.font="600 32px Arial","flag"===a?(d.fillText(String.fromCharCode(55356,56812,55356,56807),0,0),c.toDataURL().length>3e3):(d.fillText(String.fromCharCode(55357,56835),0,0),0!==d.getImageData(16,16,1,1).data[0])):!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g;c.supports={simple:d("simple"),flag:d("flag")},c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.simple&&c.supports.flag||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
<script src="js/wp-emoji-release.js" type="text/javascript"></script>
<style type="text/css">
img.wp-smiley, img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel="stylesheet" id="woocommerce-layout-css" href="css/woocommerce-layout.css" type="text/css" media="all">
<link rel="stylesheet" id="woocommerce-smallscreen-css" href="css/woocommerce-smallscreen.css" type="text/css" media="only screen and (max-width: 768px)">
<link rel="stylesheet" id="woocommerce-general-css" href="css/woocommerce.css" type="text/css" media="all">
<link rel="stylesheet" id="woocommerce_prettyPhoto_css-css" href="css/prettyPhoto.css" type="text/css" media="all">
<link rel="stylesheet" id="jquery-selectBox-css" href="css/jquery.css" type="text/css" media="all">
<link rel="stylesheet" id="yith-wcwl-main-css" href="css/style_002.css" type="text/css" media="all">
<link rel="stylesheet" id="yith-wcwl-font-awesome-css" href="css/font-awesome_002.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/jquery_009.js"></script>
<script type="text/javascript" src="js/jquery_005.js"></script>
<script type="text/javascript" src="js/owl.js"></script>
<script type="text/javascript" src="js/jquery_006.js"></script>
<script type="text/javascript" src="js/jquery_011.js"></script>
<script type="text/javascript" src="js/jquery-validate.js"></script>
<script type="text/javascript" src="js/jquery_008.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/ajax.js"></script>
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://nhadep.com.vn/xmlrpc.php?rsd">
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://nhadep.com.vn/wp-includes/wlwmanifest.xml">
<meta name="generator" content="WordPress 4.3.1">
<meta name="generator" content="WooCommerce 2.4.10">
<link rel="shortlink" href="js/a_002.htm">
<script type="text/javascript">
	var ajaxurl = 'http://nhadep.com.vn/';
</script>
<style media="print" class="jx_ui_StyleSheet" __jx__id="___$_2" type="text/css">
.zopim {
	display: none !important
}
</style>
<link rel="stylesheet" type="text/css" href="css/vantam.css" media="all">
<script language="javascript" type="text/javascript">
	function addtocart(pid){
		document.formtruong.productid.value=pid;
		document.formtruong.command.value='add';
		document.formtruong.submit();
	}
</script>


<form name="formtruong" action="index.php">
	<input type="hidden" name="productid" />
    <input type="hidden" name="command" />
</form>
</head>

<body class="home page page-id-36 page-template page-template-index page-template-index-php">
<script>
	window.fbAsyncInit = function() {
		FB.init({
			appId			: '449365058598822',
			xfbml			: true,
			version		: 'v2.5'
		});
	};

	(function(d, s, id){
		 var js, fjs = d.getElementsByTagName(s)[0];
		 if (d.getElementById(id)) {return;}
		 js = d.createElement(s); js.id = id;
		 js.src = "//connect.facebook.net/en_US/sdk.js";
		 fjs.parentNode.insertBefore(js, fjs);
	 }(document, 'script', 'facebook-jssdk'));
</script>
<div id="fb-root" class=" fb_reset">
	<div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
		<div>
			<iframe name="fb_xdm_frame_http" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_http" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" style="border: medium none;" src="http://staticxx.facebook.com/connect/xd_arbiter/r/87XNE1PC38r.js?version=42#channel=f3edcebf672b16&amp;origin=http%3A%2F%2Fnhadep.com.vn" frameborder="0"></iframe>
			<iframe name="fb_xdm_frame_https" allowtransparency="true" allowfullscreen="true" scrolling="no" id="fb_xdm_frame_https" aria-hidden="true" title="Facebook Cross Domain Communication Frame" tabindex="-1" style="border: medium none;" src="js/87XNE1PC38r_002.htm" frameborder="0"></iframe>
		</div>
	</div>
	<div style="position: absolute; top: -10000px; height: 0px; width: 0px;">
		<div></div>
	</div>
</div>
<!-- ***	Facebook *** -->
<script>
	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.4&appId=1165255736823472";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>
<div id="wrapper"> <a href="#" class="back-to-top"><img src="images/backtotop.png" alt="Back to top"></a>
	<?php include _template."layout/header.php"; ?>
	<?php include _template.$template."_tpl.php"; ?>
	<?php include _template."layout/footer.php"; ?>
	<!--<a href="#yop-poll" class="fancybox khaosat"></a>
	<div class="hidden">
		<div id="yop-poll" style="overflow: hidden">
					</div>
	</div><div class="container">-->
</div>
<script type="text/javascript">
/* <![CDATA[ */
var wc_add_to_cart_params = 
{"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"Xem
 gi\u1ecf 
h\u00e0ng","cart_url":"http:\/\/nhadep.com.vn\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/*
 ]]> */
</script>
<script type="text/javascript" src="js/add-to-cart.js"></script>
<script type="text/javascript" src="js/jquery_003.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type="text/javascript" src="js/woocommerce.js"></script>
<script type="text/javascript" src="js/jquery_004.js"></script>
<script type="text/javascript">
/* <![CDATA[ */
var wc_cart_fragments_params = 
{"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","fragment_name":"wc_fragments"};
/*
 ]]> */
</script>
<script type="text/javascript" src="js/cart-fragments.js"></script>
<script type="text/javascript" src="js/jquery_010.js"></script>
<script type="text/javascript" src="js/jquery_007.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
<script type="text/javascript">

/* <![CDATA[ */
var yith_wcwl_l10n = 
{"ajax_url":"http:\/\/nhadep.com.vn\/wp-admin\/admin-ajax.php","redirect_to_cart":"yes","multi_wishlist":"","hide_add_button":"1","is_user_logged_in":"","ajax_loader_url":"http:\/\/nhadep.com.vn\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader.gif","remove_from_wishlist_after_add_to_cart":"no","labels":{"cookie_disabled":"We
 are sorry, but this feature is available only if cookies are enabled on
 your browser.","added_to_cart_message":"<div 
class=\"woocommerce-message\">Product correctly added to 
cart<\/div>"},"actions":{"add_to_wishlist_action":"add_to_wishlist","remove_from_wishlist_action":"remove_from_wishlist","move_to_another_wishlist_action":"move_to_another_wishlsit","reload_wishlist_and_adding_elem_action":"reload_wishlist_and_adding_elem"}};
/*
 ]]> */
</script>
<script type="text/javascript" src="js/jquery_002.js"></script>
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-70617713-1', 'auto');
	ga('send', 'pageview');

</script>
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 944239827;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="js/conversion.js">
</script>
<iframe name="google_conversion_frame" title="Google conversion frame" src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/944239827/?random=1493357924847&amp;cv=8&amp;fst=1493357924847&amp;num=1&amp;fmt=1&amp;guid=ON&amp;u_h=768&amp;u_w=1366&amp;u_ah=728&amp;u_aw=1366&amp;u_cd=24&amp;u_his=1&amp;u_tz=420&amp;u_java=false&amp;u_nplug=1&amp;u_nmime=2&amp;frm=0&amp;url=http%3A%2F%2Fnhadep.com.vn%2F&amp;tiba=N%E1%BB%99i%20th%E1%BA%A5t%20Nh%C3%A0%20%C4%91%E1%BA%B9p%20%7C%20Th%C6%B0%C6%A1ng%20hi%E1%BB%87u%20uy%20t%C3%ADn%20h%C3%A0ng%20%C4%91%E1%BA%A7u%20t%E1%BB%AB%20n%C4%83m%201999." marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" width="300" height="13" frameborder="0"></iframe>
<noscript>
<div style="display:inline;"> <img height="1" width="1" style="border-style:none;" alt="" 
src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/944239827/?value=0&amp;guid=ON&amp;script=0"/> </div>
</noscript>
<div id="_content" style="display: none;"> <a href="http://www.replicauhrenstore.eu/" target="_blank">Replica Uhren</a> <a href="http://www.uhrenreplicastore.eu/" target="_blank">Bestes Replica Uhren</a> <a href="http://www.uhrenreplicashop.eu/" target="_blank">Bestes Replica Uhren</a> <a href="http://www.repliquemontrestore.fr/" target="_blank">montres rolex replica watches</a> <a href="http://www.repliquemontresshop.fr/" target="_blank">Relique Rolex Montres</a> <a href="http://www.repliquemontreshop.fr/" target="_blank">Imitation De Montres</a> <a href="http://www.repliquemontresstore.fr/" target="_blank">Montres Pas Cher</a> <a href="http://www.watchonlinestore.cn/" target="_blank">Bestes Relique Rolex</a> <a href="http://www.replicasrelojesespana.es/" target="_blank">Replicas de relojes suizos</a> <a href="http://www.replicaelrelojstore.es/" target="_blank">Replicas de relojes suizos</a> <a href="http://www.orologireplicastore.it/" target="_blank">Replica Orologi svizzeri</a> <a href="http://www.replicaorologistore.it/" target="_blank">Repliche Orologi Rolex</a> <a href="http://www.replicaorologishop.it/" target="_blank">Imitazione Di Orologi Rolex</a> <a href="http://www.orologiimitazioneshop.it/" target="_blank">Orologi Omega Replica</a> <a href="http://www.orologiimitazionestore.it/" target="_blank">Orologi Longines Replica</a> <a href="http://www.orologiimitazione.it/" target="_blank">Repliche Orologi Rolex</a> </div>
<script>document.getElementById("_content").style.display="none"</script>
<div style="display:none"><a href="http://nhadep.com.vn/wp-content/cache/sitemap.xml" target="_blank">sitemap</a></div>
<div style="display:none"><a href="http://nhadep.com.vn/wp-content/cache/index.html" target="_blank">Replica Rolex Montres</a></div>
</body>
</html>
