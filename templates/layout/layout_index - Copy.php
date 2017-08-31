<!DOCTYPE html>
<html>
<head>
<base href="http://<?=$config_url?>/"	/>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="http://maison-decor.vn/favicon.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="_layout/lib/bootstrap/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="_layout/lib/font-awesome/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="_layout/lib/select/select.min.css" />
    <link rel="stylesheet" type="text/css" href="_layout/lib/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" type="text/css" href="_layout/lib/carousel/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="_layout/lib/fancybox/jquery.fancybox.css" />
    <link rel="stylesheet" type="text/css" href="_layout/lib/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="_layout/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="_layout/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="_layout/css/style.css" />
    <link rel="stylesheet" type="text/css" href="_layout/css/custom.css" />
    <link rel="stylesheet" type="text/css" href="_layout/css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="css/vantam.css" media="all">
    
    <title>Công Ty CP Kiến Trúc Xây Dựng Home Decor</title>
    <meta name="description" content="Home Decor - Making your home better!" />
    <meta name="keywords" content="trang tri noi that, Home Decor, sofa, tủ, kệ, bàn ghế, đèn, đồ trang trí, den trang tri" />
    <meta content="vietnamese" name="Language">
    <meta content="" name="abstract">
    <meta content="index, follow" name="robots">
    <meta content="C#" name="copyright">
    <!--<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Ubuntu:300,400" />-->

    <!-- for Facebook -->

    <meta property="og:title" content="Maison Decor - Making your home better!" />
    <meta property="og:type" content="Website" />
    <meta property="og:image" content="http://maison-decor.vn/upload/advertising/giam-20.jpg" />
    <meta property="og:url" content="http://maison-decor.vn/" />
    <meta property="og:description" content="Home Decor - Making your home better!" />
    <meta name="DC.title" content="Maison Decor" />
    <meta name="geo.region" content="VN-SG" />
    <meta name="geo.placename" content="Ho Chi Minh City" />
    <meta name="geo.position" content="10.792154;106.689955" />
    <meta name="ICBM" content="10.792154, 106.689955" />
    <meta content="General" http-equiv="audience">
    <meta content="Document" name="resource-type">
    <meta content="Global" name="distribution">
    <meta content="1 day" name="revisit-after">
    <meta content="#" name="reply-to">

    <script language="javascript">
        var url_site = "http:/#/";
        var lang = "";
        var search_err = "Vui lòng nhập sản phẩm";
        var lang_cart = new Array();
        lang_cart = {
            cart_empty: "Giỏ hàng rỗng",
            cart_confirm: "Xác nhận",
            cart_button_ok: "Đồng ý",
            cart_button_cancel: "Bỏ qua",
            cart_note_all_delete: "Chắc chắn bạn muốn xóa hết giỏ hàng?",
            cart_note_on_delete: "Bạn muốn xóa sản phẩm này ra khỏi giỏ hàng?",

            cart_err_name: "Vui lòng nhập họ tên",
            cart_err_email: "Vui lòng nhập email",
            cart_err_email_not: "Email không hợp lệ",
            cart_err_address: "Vui lòng nhập địa chỉ giao hàng",
            cart_err_address_city: "Vui lòng chọn tỉnh / thành phố",
            cart_err_phone: "Vui lòng nhập số điện thoại",
            cart_err_phone_not: "Số điện thoại không hợp lệ",
            cart_err_date: "Vui lòng chọn ngày giao hàng",

            customers_login_err: "Đăng nhập không thành công",
            customers_change_pass_ok: "Thay đổi mật khẩu thành công.",

            customers_forgot_pass_ok: "Thông tin thay đổi đã được xử lý thành công. Vui lòng kiểm tra email để cập nhật thông tin mật khẩu mới.",
            customers_active_not: "Tài khoản chưa được kích hoạt, vui lòng kích hoạt.<br>Chọn chức năng kích hoạt lại email nếu cần. ",
        };

    </script>
    <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-79216695-1']);
        _gaq.push(['_setDomainName', 'maison-decor.vn']);
        _gaq.push(['_trackPageview']);
        (function () {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
    </script>

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
<body class="category-page ">
    <!-- TOP BANNER -->
    <!-- HEADER -->
    <?php include _template."layout/header_index.php"; ?>
    <!-- end header -->
    <div class="relative">
        <div id="jsMenuMarkLayer">&nbsp;</div>
        <div id="home-slider">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 slider-left hide">

                        <div class="home-about">
                            <div class="title">
                                <h3 class="title-rbl-04"><span><a href="http://maison-decor.vn/" title=""><strong></strong></a></span></h3>
                            </div>
                            <div class="content">

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 header-top-right">
                        <div class="homeslider">
                            <div class="content-slide">
                                <ul id="contenhomeslider">

                                    <li class="slide"><a href="#"><img alt="We are Home Decor" src="http://maison-decor.vn/upload/advertising/we-are-maison-decor.jpg" /></a></li>
                                    <li class="slide"><a href="#"><img alt="Phòng ngủ phong cách mới " src="http://maison-decor.vn/upload/advertising/phong-ngu-phong-cach-moi.jpg" /></a></li>
                                    <li class="slide"><a href="#"><img alt="Tư vấn thiết kế miễn phí tại Home Decor" src="http://maison-decor.vn/upload/advertising/tu-van-thiet-ke-mien-phi-tai-maison-decor.jpg" /></a></li>
                                    <li class="slide"><a href="#"><img alt="Banner 5" src="http://maison-decor.vn/upload/advertising/banner-5.jpg" /></a></li>
                                    <li class="slide"><a href="#"><img alt="Banner 4" src="http://maison-decor.vn/upload/advertising/banner-4.png" /></a></li>
                                    <li class="slide"><img alt="Banner 2" src="http://maison-decor.vn/upload/advertising/banner-2.png" /></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div><div class="page-top">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 page-top-left">
                        <div class="popular-tabs">
                            <ul class="nav-tab">
                                <li class="active"><a data-toggle="tab" href="#tab-4">Sản phẩm khuyến mãi</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-2">Sản phẩm mới</a></li>
                                <li class=""><a data-toggle="tab" href="#tab-3">Sản phẩm bán chạy</a></li>
                            </ul>
                            <div class="tab-container">
                                <div id="tab-2" class="tab-panel">
                                    <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav="true" data-margin="30" data-autoplaytimeout="1000" data-autoplayhoverpause="true" data-responsive='{"0":{"items":2},"600":{"items":3},"1000":{"items":5}}'>
                                        <?php
                                        $d->reset();
                                        $sql_sanphammoi="select * from #_product where hienthi = 1 order by id desc ";
                                        $d->query($sql_sanphammoi);
                                        $result_spnam=$d->result_array();
                                        for ($i=0;$i<count($result_spnam);$i++)
                                        {
                                            $gia =  ($result_spnam[$i]['giagiam']!=0)?number_format ($result_spnam[$i]['giagiam'],0,",",".")." ₫":number_format ($result_spnam[$i]['gia'],0,",",".")." ₫";
                                        ?>
                                        <li>
                                            <div class="left-block">
                                                <a href="chi-tiet-san-pham/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_spnam[$i]['id']?>.html" title="Đèn sàn Lustre">
                                                    <img class="img-responsive" alt="Đèn sàn Lustre" src="upload/sanpham/<?php if($result_spnam[$i]["tc_big"]==1) echo $result_spnam[$i]["photo"]; else echo $result_spnam[$i]["photo"] ?>" />
                                                </a>

                                                <div class="quick-view">
                                                    <a title="Xem nhanh" class="search" href="javascript:void(0);" data-id="181"></a>
                                                </div>

                                                <div class="add-to-cart">
                                                    <a title="Đặt mua" onClick="Add_Cart(181)" href="javascript:void(0)">Đặt mua</a>
                                                </div>
                                                <div class="group-price">
                                                    <span class="product-new">Mới</span>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="chi-tiet-san-pham/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_spnam[$i]['id']?>.html" title="<?=$result_spnam[$i]["ten_vi"]?>"><?=$result_spnam[$i]["ten_vi"]?></a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price"><?php echo $gia;?></span>


                                                </div>

                                            </div>
                                        </li>
                            			<?php
                            			} 
                            			?>
                                    </ul>
                                </div>
                                <div id="tab-3" class="tab-panel">
                                    <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav="true" data-margin="30" data-autoplaytimeout="1000" data-autoplayhoverpause="true" data-responsive='{"0":{"items":2},"600":{"items":3},"1000":{"items":5}}'>
                                        <?php
                                        $d->reset();
                                        $sql_sanphammoi="select * from #_product order by luotxem desc ";
                                        $d->query($sql_sanphammoi);
                                        $result_spnam=$d->result_array();
                                        for ($i=0;$i<count($result_spnam);$i++)
                                        {
                                           $gia =  ($result_spnam[$i]['giagiam']!=0)?number_format ($result_spnam[$i]['giagiam'],0,",",".")." ₫":number_format ($result_spnam[$i]['gia'],0,",",".")." ₫";
                                        ?>
                                        <li>
                                            <div class="left-block">
                                                <a href="chi-tiet-san-pham/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_spnam[$i]['id']?>.html" title="Đèn sàn Lustre">
                                                    <img class="img-responsive" alt="Đèn sàn Lustre" src="upload/sanpham/<?php if($result_spnam[$i]["tc_big"]==1) echo $result_spnam[$i]["photo"]; else echo $result_spnam[$i]["photo"] ?>" />
                                                </a>

                                                <div class="quick-view">
                                                    <a title="Xem nhanh" class="search" href="javascript:void(0);" data-id="181"></a>
                                                </div>

                                                <div class="add-to-cart">
                                                    <a title="Đặt mua" onClick="Add_Cart(181)" href="javascript:void(0)">Đặt mua</a>
                                                </div>
                                                <div class="group-price">
                                                    <span class="product-new">Mới</span>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="chi-tiet-san-pham/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_spnam[$i]['id']?>.html" title="<?=$result_spnam[$i]["ten_vi"]?>"><?=$result_spnam[$i]["ten_vi"]?></a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price"><?php echo $gia?></span>


                                                </div>

                                            </div>
                                        </li>
                            			<?php
                            			} 
                            			?>
                                    </ul>
                                </div>
                                <div id="tab-4" class="tab-panel active">
                                    <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav="true" data-margin="30" data-autoplaytimeout="1000" data-autoplayhoverpause="true" data-responsive='{"0":{"items":2},"600":{"items":3},"1000":{"items":5}}'>
                                        <?php
                                        $d->reset();
                                        $sql_sanphammoi="select * from #_product where giagiam !=0 order by id desc ";
                                        $d->query($sql_sanphammoi);
                                        $result_spnam=$d->result_array();
                                        for ($i=0;$i<count($result_spnam);$i++)
                                        {
                                            $gia =  ($result_spnam[$i]['giagiam']!=0)?number_format ($result_spnam[$i]['giagiam'],0,",",".")." ₫":number_format ($result_spnam[$i]['gia'],0,",",".")." ₫";
                                        ?>
                                        <li>
                                            <div class="left-block">
                                                <a href="chi-tiet-san-pham/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_spnam[$i]['id']?>.html" title="Đèn sàn Lustre">
                                                    <img class="img-responsive" alt="Đèn sàn Lustre" src="upload/sanpham/<?php if($result_spnam[$i]["tc_big"]==1) echo $result_spnam[$i]["photo"]; else echo $result_spnam[$i]["photo"] ?>" />
                                                </a>

                                                <div class="quick-view">
                                                    <a title="Xem nhanh" class="search" href="javascript:void(0);" data-id="181"></a>
                                                </div>

                                                <div class="add-to-cart">
                                                    <a title="Đặt mua" onClick="Add_Cart(181)" href="javascript:void(0)">Đặt mua</a>
                                                </div>
                                                <div class="group-price">
                                                    <span class="product-new">Mới</span>
                                                </div>
                                            </div>
                                            <div class="right-block">
                                                <h5 class="product-name"><a href="chi-tiet-san-pham/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_spnam[$i]['id']?>.html" title="<?=$result_spnam[$i]["ten_vi"]?>"><?=$result_spnam[$i]["ten_vi"]?></a></h5>
                                                <div class="content_price">
                                                    <span class="price product-price"><?php echo $gia?></span>


                                                </div>

                                            </div>
                                        </li>
                            			<?php
                            			} 
                            			?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="content-page">
            <div class="container">
            <?php
            	$d->reset();
            	$sql_list ="select * from #_product_list where hienthi=1 order by stt asc limit 0,8";
            	$d->query($sql_list);
            	$list =$d->result_array();
            	for($i=0,$count_l=count($list);$i<$count_l;$i++){
            	    $id = $list[$i]["id"];
            	    $href = 'danh-muc-list/'.$list[$i]["tenkhongdau"].'-'.$list[$i]["id"].'.html';
            ?>
                <div class="category-featured">
                    <nav class="navbar nav-menu nav-menu-custom show-brand ">
                        <div class="container">
                            <div class="navbar-brand"><a href="<?php echo $href;?>" title="<?=$list[$i]["ten_vi"]?>"><?=$list[$i]["ten_vi"]?></a></div>
                            <span class="toggle-menu"></span>
                            <div class="collapse navbar-collapse">
                                <ul class="nav navbar-nav">
                                <?php
                        			$d->reset();
                        			$sql_cat ="select *	from #_product_cat where id_list='".$list[$i]["id"]."' order by stt asc";
                        			$d->query($sql_cat);
                        			$cat =$d->result_array();
                        			$child = 'class="dropdown"';
                        			$taga	= '<i class="fa fa-angle-down"></i>';
                        			$toggle ='class="dropdown-toggle" data-toggle="dropdown"';
                        			for($j=0,$count_c=count($cat);$j<$count_c;$j++){
                        			 $href_cat = 'danh-muc-cat/'.$cat[$j]["tenkhongdau"].'-'.$cat[$j]["id"].'.html';
                        		 ?>
                                    <li><a href="<?php echo $href_cat;?>" title="Giường"><?=$cat[$j]["ten_vi"]?></a></li>
                                    <?php }?>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->

                    </nav>

                    <div class="product-featured clearfix">
                        <div class="product-featured-content">
                            <div class="product-featured-list">
                                <div class="tab-container">
                                    <!-- tab product -->
                                    <div class="tab-panel active">
                                        <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav="true" data-margin="30" data-autoplaytimeout="1000" data-autoplayhoverpause="true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":5}}'>
                                          <?php 
                                          $d->reset();
                                          $sql_tungdanhmuc="select * from #_product where hienthi =1 and id_list='$id'  order by stt asc limit 8";
                                          $d->query($sql_tungdanhmuc);
                                          $result_spnam=$d->result_array();
                                          ?>
                                          <?php
                                		  for ($j=0;$j<count($result_spnam);$j++)
                                		  { 
                                		      $gia =  ($result_spnam[$j]['giagiam']!=0)?number_format ($result_spnam[$j]['giagiam'],0,",",".")." ₫":number_format ($result_spnam[$j]['gia'],0,",",".")." ₫";
                                		  ?>
                                            <li>
                                                <div class="product-container">
                                                    <div class="left-block  image-p-home">
                                                        <a href="chi-tiet-san-pham/<?=$result_spnam[$j]['tenkhongdau']?>-<?=$result_spnam[$j]['id']?>.html" title="<?=$result_spnam[$j]["ten_vi"]?>">
                                                            <img class="img-responsive" alt="<?=$result_spnam[$j]["ten_vi"]?>" src="upload/sanpham/<?php if($result_spnam[$j]["tc_big"]==1) echo $result_spnam[$j]["photo"]; else echo $result_spnam[$j]["photo"] ?>" />
                                                        </a>

                                                    </div>
                                                    <div class="right-block">
                                                        <h5 class="product-name"><a href="chi-tiet-san-pham/<?=$result_spnam[$j]['tenkhongdau']?>-<?=$result_spnam[$j]['id']?>.html" title="Giường 1"><?=$result_spnam[$j]["ten_vi"]?></a></h5>
                                                        <div class="content_price">
                                                            <span class="price product-price">Giá <?php echo $gia?></span>


                                                        </div>

                                                    </div>
                                                </div>
                                            </li>
                                            <?php }?>
                                        </ul>
                                    </div>
                                    <!-- tab product -->

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
                </div>
            </div>
        </div>
        <footer id="footer">
            <div class="container">
                <!-- introduce-box -->
                <div id="introduce-box" class="row">
                    <div class="col-md-6">
                        <div class="introduce-title">Home Decor</div>
                        <div id="address-box">
                            <div id="address-list">

                                <div class="tit-name tit-dia-chi"><i class="fa fa-map-marker"></i>Địa chỉ:</div>
                                <div class="tit-contain">10/3 Trần Nhật Duật, Tân Định, Quận 1, TP.Hồ Chí Minh</div>

                                <div class="tit-name tit-dien-thoai"><i class="fa fa-phone"></i>Điện thoại:</div>
                                <div class="tit-contain">091 487 27 07</div>

                                <div class="tit-name tit-hotline"><i class="fa fa-phone"></i>Hotline:</div>
                                <div class="tit-contain">0917 049 077</div>

                                <div class="tit-name tit-email"><i class="fa fa-envelope-o"></i>Email:</div>
                                <div class="tit-contain">info@maison-decor.vn</div>

                                <div class="tit-name tit-website"><i class="fa fa-globe fa-1x"></i>Website:</div>
                                <div class="tit-contain">http://maison-decor.vn</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="introduce-title">Home Decor</div>
                                <ul id="introduce-company" class="introduce-list">
                                    <li><a href="http://maison-decor.vn/">Trang chủ</a></li>
                                    <li><a href="http://maison-decor.vn/gioi-thieu-html">Giới thiệu</a></li>
                                    <li><a href="http://maison-decor.vn/lien-he.html">Liên hệ</a></li>
                                </ul>
                                <div class="clear10"></div>
                                <div class="social-link social-product">
                                    <a title="Facebook" target="_blank" href="https://www.facebook.com/maisondecor.vn"><i class="fa fa-facebook"></i></a>
                                    <a title="Youtube" target="_blank" href="https://www.youtube.com/user/maisondecor.vn"><i class="fa fa-youtube"></i></a>
                                    <a title="Instagram" target="_blank" href="https://www.instagram.com/maisondecor.vn"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                    <div class="introduce-title">Facebook</div>
                    	<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fhomedecor.info.vn%3Ffref%3Dts&amp;width=360&amp;height=190&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false"
						scrolling="no" frameborder="0" style="border: none; overflow: hidden; width: 100%;
						height: 190px;" allowtransparency="true"></iframe>
                    </div>
                </div><!-- /#introduce-box -->
                <div id="footer-menu-box">
                    <p class="text-center">
                        Copyrights &copy; 2016 Home Decor. All Rights Reserved.<br />
                    </p>

                </div><!-- /#footer-menu-box -->
            </div>
        </footer>
        <!--div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/vi_VN/all.js#xfbml=1";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script-->
    </div>
    <a href="#" class="scroll_top" title="Lên trên" style="display: inline;">Lên trên</a>

    <!-- Script-->
    <script type="text/javascript" src="_layout/lib/jquery/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="_layout/lib/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="_layout/lib/select/select.min.js"></script>
    <script type="text/javascript" src="_layout/lib/bxslider/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="_layout/lib/carousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="_layout/lib/countdown/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="_layout/js/jquery.actual.min.js"></script>
    <script type="text/javascript" src="_layout/lib/fancybox/jquery.fancybox.js"></script>
    <script type="text/javascript" src="_layout/lib/jquery.elevatezoom.js"></script>
    <script type="text/javascript" src="_layout/js/script.js"></script>
    <script type="text/javascript" src="_layout/js/cart.js"></script>
    <script type="text/javascript" src="_layout/js/jquery.validate.js"></script>
    <script type="text/javascript" src="_layout/js/messages_vi.js"></script>
    <!-- Tim kiem -->
    <script type="text/javascript" src="_layout/js/jstorage.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            var value = $.jStorage.get('popup-new');
            if (value) {
                $("#popup-new").hide();
            } else {
                $("#popup-new").show();
            }
        });
        function popupnews() {
            $.jStorage.set('popup-new', '1');
            $("#popup-new").hide();
        }
        function popuphide() {
            $("#popup-new").hide();
        }
    </script>
    <!-- // Het tim kiem -->

</body>
</html>