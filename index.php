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
	$config_url='localhost:81/cayxanhvanphongdepnew';
    if($_REQUEST['command']=='add' && $_REQUEST['productid']>0){
    	$pid=$_REQUEST['productid'];	
    	$_SESSION['size'.$pid]=$_REQUEST['spsize']; 
    	$_SESSION['mau'.$pid]=$_REQUEST['spmau']; 
    	$q=isset($_GET['quality']) ? (int)$_GET['quality'] : "1";
    	addtocart($pid,$q);
    	redirect("http://$config_url/gio-hang.html");
	}
?>
<?php //include _template."layout/header.php"; ?>
	<?php //include _template.$template."_tpl.php"; ?>
	<?php //include _template."layout/footer.php"; ?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en">
<![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en">
<![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js mm-hover no-touch" xmlns="http://www.w3.org/1999/xhtml" lang="vi" xml:lang="vi" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#"><!-- InstanceBegin template="/Templates/HeaderFooter.dwt" codeOutsideHTMLIsLocked="false" -->
<base href="http://<?=$config_url?>/"	/>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, minimum-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="alternate" type="application/rss+xml" title="Chợ hoa Việt &#8211; Thế giới hoa, cây cảnh nghệ thuật RSS Feed" href="feed/index.html" />
    <link rel="alternate" type="application/atom+xml" title="Chợ hoa Việt &#8211; Thế giới hoa, cây cảnh nghệ thuật Atom Feed" href="feed/atom/index.html" />
    <link rel="pingback" href="xmlrpc.php" />
    <link href="wp-content/themes/vn_flowers/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="wp-content/themes/vn_flowers/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="wp-content/themes/vn_flowers/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- InstanceBeginEditable name="doctitle" -->
    <title>Cây xanh văn phòng đẹp</title>
    <!-- InstanceEndEditable -->
    <!-- SEO Ultimate (http://www./) -->
    <link rel="canonical" href="index.html" />
    <meta name="description" content="Thế giới hoa, cây cảnh nghệ thuật" />
    <meta property="og:type" content="blog" />
    <meta property="og:title" content="Chợ hoa Việt - Thế giới hoa, cây cảnh nghệ thuật" />
    <meta property="og:description" content="Thế giới hoa, cây cảnh nghệ thuật" />
    <meta property="og:url" content="index.html" />
    <meta property="og:site_name" content="Chợ hoa Việt - Thế giới hoa, cây cảnh nghệ thuật" />
    <meta name="twitter:card" content="summary" />
    <meta name="google-site-verification" content="RZClv091UbjQvY93f9bOzRTOiJ7TgWmlIlnvtdlFkCY" />
    <!-- /SEO Ultimate -->

    <script type="text/javascript">
        window._wpemojiSettings = { "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/72x72\/", "ext": ".png", "source": { "concatemoji": "http:\/\/chohoaviet.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.5.3" } };
        !function (a, b, c) { function d(a) { var c, d, e, f = b.createElement("canvas"), g = f.getContext && f.getContext("2d"), h = String.fromCharCode; if (!g || !g.fillText) return !1; switch (g.textBaseline = "top", g.font = "600 32px Arial", a) { case "flag": return g.fillText(h(55356, 56806, 55356, 56826), 0, 0), f.toDataURL().length > 3e3; case "diversity": return g.fillText(h(55356, 57221), 0, 0), c = g.getImageData(16, 16, 1, 1).data, d = c[0] + "," + c[1] + "," + c[2] + "," + c[3], g.fillText(h(55356, 57221, 55356, 57343), 0, 0), c = g.getImageData(16, 16, 1, 1).data, e = c[0] + "," + c[1] + "," + c[2] + "," + c[3], d !== e; case "simple": return g.fillText(h(55357, 56835), 0, 0), 0 !== g.getImageData(16, 16, 1, 1).data[0]; case "unicode8": return g.fillText(h(55356, 57135), 0, 0), 0 !== g.getImageData(16, 16, 1, 1).data[0] } return !1 } function e(a) { var c = b.createElement("script"); c.src = a, c.type = "text/javascript", b.getElementsByTagName("head")[0].appendChild(c) } var f, g, h, i; for (i = Array("simple", "flag", "unicode8", "diversity"), c.supports = { everything: !0, everythingExceptFlag: !0 }, h = 0; h < i.length; h++) c.supports[i[h]] = d(i[h]), c.supports.everything = c.supports.everything && c.supports[i[h]], "flag" !== i[h] && (c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[i[h]]); c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && !c.supports.flag, c.DOMReady = !1, c.readyCallback = function () { c.DOMReady = !0 }, c.supports.everything || (g = function () { c.readyCallback() }, b.addEventListener ? (b.addEventListener("DOMContentLoaded", g, !1), a.addEventListener("load", g, !1)) : (a.attachEvent("onload", g), b.attachEvent("onreadystatechange", function () { "complete" === b.readyState && c.readyCallback() })), f = c.source || {}, f.concatemoji ? e(f.concatemoji) : f.wpemoji && f.twemoji && (e(f.twemoji), e(f.wpemoji))) }(window, document, window._wpemojiSettings);
    </script>
    <meta content="http://#/wp-content/themes/vn_flowers/style.css v." name="generator" />
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
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
    <link rel="stylesheet" id="pretty-photo-css" href="wp-content/plugins/easy-image-gallery/includes/lib/prettyphoto/prettyPhoto8daf.css?ver=1.1.4" type="text/css" media="screen" />
    <script type="text/javascript" src="wp-content/themes/vn_flowers/js/bootstrap.min5152.js?ver=1.0"></script>
    <script type="text/javascript" src="wp-content/themes/vn_flowers/js/custom5152.js?ver=1.0"></script>
    <!--<script type="text/javascript" src="../../../../cayxanhvanphongdep.com/apis.google.com/js/plusone5152.js?ver=1.0"></script>-->
    <link rel="https://api.w.org/" href="wp-json/index.html" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 4.5.3" />
    <link rel="shortcut icon" href="index.html" />
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-79284166-1', 'auto');
        ga('send', 'pageview');

    </script>
    <script language="javascript" type="text/javascript">
	function addtocart(pid,quality){
		document.formtruong.productid.value=pid;
		document.formtruong.quality.value=quality;
		document.formtruong.command.value='add';
		document.formtruong.submit();
	}
    </script>
    
    
    <form name="formtruong" action="index.php">
    	<input type="hidden" name="productid" />
    	<input type="hidden" name="quality" />
        <input type="hidden" name="command" />
    </form>
</head>
<body class="home blog unknown">
    <div id="fb-root"></div>
    <script>
(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "../connect.facebook.net/vi_VN/all.js#xfbml=1&appId=443627439036532";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <div class="t3-off-canvas" id="t3-off-canvas">

        <div class="t3-off-canvas-header">
            <h2 class="t3-off-canvas-header-title">DANH MỤC</h2>
            <button aria-hidden="true" data-dismiss="modal" class="close" type="button">X</button>
        </div>

        <div class="t3-off-canvas-body">
            <div id="mobile-menu-wrap" class="t3-module module "><div class="module-ct"></div></div>
        </div>

    </div>
    <div class="t3-wrapper">
        <div class="hfeed site">
            
          <?php include _template."layout/header.php"; ?>
          <?php include _template.$template."_tpl.php"; ?>
          <?php include _template."layout/footer.php"; ?>
          <!-- InstanceBeginEditable name="EditRegion1" -->
            
            <!-- InstanceEndEditable -->
            

        </div>

        <div id="su-footer-links" style="text-align: center;"></div>
        <script type="text/javascript" src="wp-content/plugins/easy-image-gallery/includes/lib/prettyphoto/jquery.prettyPhoto8daf.js?ver=1.1.4"></script>
        <script type="text/javascript" src="wp-includes/js/wp-embed.min62d0.js?ver=4.5.3"></script>

    </div>

</body>
<!-- InstanceEnd --></html>