<?php
	$d->reset();
	$sql_list ="select *	from #_product_list order by stt asc limit 0,5";
	$d->query($sql_list);
	$list =$d->result_array();
	
	$d->reset();
	$sql_tin_l ="select *	from #_tinloai1_1_list order by stt asc limit 0,3";
	$d->query($sql_tin_l);
	$tin_l=$d->result_array();
	
	$d->reset();
	$sql_face ="select * from #_nhung_face limit 1";
	$d->query($sql_face);
	$lienket=$d->fetch_array();
	$facebook = $lienket['facebook'];
	$twinter = $lienket['twinter'];
	$google = $lienket['google'];
	$youtube = $lienket['youtube'];
	
?>
<?php //include _template."layout/menu_top.php"; ?>
<header>
<div class="header clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-2 col-sm-6 col-xs-12" id="logo">
                <a href="index.html" title="Chợ hoa Việt &#8211; Thế giới hoa, cây cảnh nghệ thuật">
                    <img class="logo" alt="Chợ hoa Việt &#8211; Thế giới hoa, cây cảnh nghệ thuật" src="wp-content/themes/vn_flowers/images/logo.png">
                </a>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="row">
                <div class="itemSupport">
                    <div><a href="skype:nguyenmy0203?chat"><img src="http://saigonhoa.com/skype.png" alt="Ms Mỹ: 0906 60 3389"></a></div>
                    <div>Mr Tám: 0906 60 9989</div>
                </div>
                <div class="itemSupport">
                    <div><a href="skype:live:kinhdoanh3_21?chat"><img src="http://saigonhoa.com/skype.png" alt="Ms. Duyên: 0909 51 3389"></a></div>
                    <div>Mrs. Dung: 0909 661 3388</div>
                </div>
                <div class="itemSupport">
                    <div><a href="skype:hoainhikinhdoanh2?chat"><img src="http://saigonhoa.com/skype.png" alt="Ms Nhi: 0906 80 3389"></a></div>
                    <div>Ms Trí: 0922 80 3268</div>
                </div>
                </div>
                
            </div>
          <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                <div class="row">
                <div class="itemSupport">
                    <div><a href="#"><img alt="" src="wp-content/images/zalo.png"> 0999.920.099</a></div>
                </div>
                <div class="itemSupport">
                    <div><a href="#"><img alt="" src="wp-content/images/viber.png"> 0999.920.099</a></div>
                </div>
                <div class="itemSupport">
                    <div class="hotline"> <i class="fa fa-2x fa-mobile "></i> Hotline: 0999.920.099</div>
                </div>
                </div>
            </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            	<div class="itemSupport pad-b1">
                    <div> <i class="fa fa-envelope"></i> Email: info@cayxanhvanphongdep</div>
                </div>
            	<div class="row">
                    <div class="search">
                            <form>
                                <input type="text" name="s" id="smobile" placeholder="Từ khóa...">
                                <button type="submit" name="submit" id="searchsubmit">Tìm kiếm</button>
                           		<a class="pull-right" href="#"><img alt="" src="wp-content/images/vn.png"> </a>
                                <a class="pull-right" href="#"><img alt="" src="wp-content/images/en.png"> </a>
                            </form>
                        </div><!-- .search-form -->
    </div><!-- .header-search -->
    <!--<div class="itemSupport hidden-xs">
        <div><a href="#"><img alt="" src="wp-content/images/vn.png"> </a><a href="#"><img alt="" src="wp-content/images/en.png"> </a></div>
    </div>-->
</div>

<!--<div class="head_hotline col-lg-6 col-md-7 col-sm-8 hidden-xs"></div>-->

        </div>
    </div>
</div>

<div role="navigation" class="navbar navbar-default">
    <div class="col-lg-12">
        <div class="row">
            <div class="navbar-header">
                <button data-effect="off-canvas-effect-4" data-nav="#t3-off-canvas" data-pos="left" type="button" class="btn-inverse off-canvas-toggle visible-xs">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <?php include _template."layout/menu_top.php"; ?>
            </div>
        </div>
    </div>
</header>