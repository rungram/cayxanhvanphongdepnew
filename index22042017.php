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
	if($_REQUEST['command']=='add' && $_REQUEST['productid']>0){
	
	$pid=$_REQUEST['productid'];	
	$_SESSION['size'.$pid]=$_REQUEST['spsize']; 
	$_SESSION['mau'.$pid]=$_REQUEST['spmau']; 
	$q=isset($_GET['quality']) ? (int)$_GET['quality'] : "1";
	addtocart($pid,$q);
	redirect("http://$config_url/gio-hang.html");
	}
	$config_url='localhost:81/testweb/khonggianmoi';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<base href="http://<?=$config_url?>/"	/>
<head id="Head1">
<title>Công Ty CP Kiến Trúc Xây Dựng Home Decor</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" type="image/x-icon" href="/content/images/home/bietthudep.ico" />
<meta name="description" content="Home Decor chuyên thiết kế xây dựng những	nhà đẹp, biệt thự đẹp, biệt thự hiện đại, biệt thự cổ điển, liên hệ: 0937669966" />
<meta name="keywords" content="mẫu nhà đẹp, mau nha dep, nhà đẹp, nha dep, biệt thự đẹp, thiet ke xay dung, xây dựng biệt thự" />
<meta name="robots" content="INDEX,FOLLOW,ALL" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta property="og:url" content="Home Decor | Thiết Kế Xây Dựng Biệt Thự Nhà Đẹp">
<meta property="og:title" content="Home Decor | Thiết Kế Xây Dựng Biệt Thự Nhà Đẹp">
<meta property="og:description" content="Home Decor chuyên thiết kế xây dựng những	nhà đẹp, biệt thự đẹp, biệt thự hiện đại, biệt thự cổ điển, liên hệ: 0937669966">
<meta property="og:sitename" content="mẫu nhà đẹp, mau nha dep, nhà đẹp, nha dep, biệt thự đẹp, thiet ke xay dung, xây dựng biệt thự">
<link href="css/font.css?family=Roboto+Condensed:400,300,700" rel="stylesheet" type="text/css" />
<link href="css/font2.css" rel="stylesheet" type="text/css" />
<link href="css/Utils-min.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/utils-min.js" type="text/javascript"></script>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css" />
<link href="css/Site.css" rel="stylesheet" type="text/css" />
<link href="css/Reponsive.css" rel="stylesheet" type="text/css" />
<script src="js/page.js" type="text/javascript"></script>
<script>
		if (window.location.pathname == "/") {
			window.location.pathname = "/index.html";
		}
	</script>
<script src="js/slidemaster.js" type="text/javascript"></script>
<script>
		$(function () {
			$("#slideLeftBanner").slidemaster({ min: 500 });
			setInterval(function () { $(".next_slideLeftBanner").click(); }, 5000)
		})
	</script>
<style>
.headHeight {
	height: 100px;
}
#bannerMain {
	display: block;
}
.sep-menu {
	height: 20px;
}
</style>
</head>
<body>
<script>
	(function (d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.3";
			fjs.parentNode.insertBefore(js, fjs);
		} (document, 'script', 'facebook-jssdk'));</script>
<div id="fb-root"> </div>
<div runnat="Window" class="Window" id="pageMain_RD147" apply="yPhM+NHI1I4udJTQGLC2n1sQffSVZ6WCdpJ2C/+XL+0=">
	<?php include _template."layout/header.php"; ?>
	<?php include _template.$template."_tpl.php"; ?>
	<?php include _template."layout/footer.php"; ?>
</div>
<script id="script-server">$("#pageMain_RD147").data("paramPage","lang=vi");</script>
</body>
</html>
