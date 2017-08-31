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
	$config_url='kythuatkimthinhphat.com';
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
<html lang="en" class="js flexbox rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent"><!-- InstanceBegin template="/Templates/Header-Footer.dwt" codeOutsideHTMLIsLocked="false" --><!--<![endif]-->
 <base href="http://<?=$config_url?>/"	/>
<head>

<title>CÔNG TY TNHH KỸ THUẬT KIM THỊNH PHÁT</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta charset="UTF-8">
    <!-- CSS Bootstrap & Custom -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/templatemo-misc.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/templatemo-main.css">

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/logo.ico">
    <!-- For detail slider have thumb img -->
    <link href="slider/thumbnail-slider.css" rel="stylesheet" type="text/css">
    <link href="slider/ninja-slider.css" rel="stylesheet" type="text/css">
    <script src="slider/thumbnail-slider.js" type="text/javascript"></script><style></style>
    <script src="slider/ninja-slider.js" type="text/javascript"></script><style></style>

    <!-- JavaScripts -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/modernizr.js"></script>
    <!-- For Galary  -->
    <link href="gallery/css.css" rel="stylesheet" type="text/css">

    <!-- For Menus jQuery Bootstrap Addon CSS -->
    <link href="menu/addons/bootstrap/jquery.smartmenus.bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


<style type="text/css">.fancybox-margin{margin-right:17px;}</style>
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
<body>
<?php include _template."layout/header.php"; ?>

	<?php include _template.$template."_tpl.php"; ?>
	<?php include _template."layout/footer.php"; ?>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/jquery.lightbox.js"></script>
    <script src="js/custom.js"></script>
    
    
    <!--Menu Cript - Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="menu/jquery-1.11.3.min.js"></script>
    <script src="menu/bootstrap.min.js"></script>

    <!-- SmartMenus jQuery plugin -->
    <script type="text/javascript" src="menu/jquery.smartmenus.js"></script>

    <!-- SmartMenus jQuery Bootstrap Addon -->
    <script type="text/javascript" src="menu/addons/bootstrap/jquery.smartmenus.bootstrap.js"></script>


<!-- InstanceEnd --><div id="lightbox" style="display:none;"><a href="#" class="lightbox-close lightbox-button"></a><div class="lightbox-nav" style="display: none;"><a href="#" class="lightbox-previous lightbox-button"></a><a href="#" class="lightbox-next lightbox-button"></a></div><div href="#" class="lightbox-caption"><p></p></div></div></body></html>