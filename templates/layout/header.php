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
<script language="javascript"> 
	function doEnter(evt){
	// IE	// Netscape/Firefox/Opera
    	var key;
    	if(evt.keyCode == 13 || evt.which == 13){
    	onSearch(evt);
    	}
	}
	function onSearch(evt) {
    	var keyword = document.getElementById("keyword").value;
    	if(keyword=='')
 		   alert('Bạn chưa nhập tên!');
    	else{
    	//var encoded = Base64.encode(keyword);
        	location.href = "index.php?com=tim-kiem&keyword="+keyword;
        	loadPage(document.location);	
    	}
	}	
</script>
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
                    <div><a href="skype:cvtam2003?chat"><img src="http://saigonhoa.com/skype.png" alt="Mr Phong: 0938 033 095"></a></div>
                    <div>Mr Phong: 0938 033 095</div>
                </div>
                <div class="itemSupport">
                    <div><a href="skype:cvtam2003?chat"><img src="http://saigonhoa.com/skype.png" alt="Miss Xuân: 0938 033 095"></a></div>
                    <div>Miss Xuân: 0938 033 095</div>
                </div>
                <div class="itemSupport">
                    <div><a href="skype:cvtam2003?chat"><img src="http://saigonhoa.com/skype.png" alt="Mr Dương: 0938 033 095"></a></div>
                    <div>Mr Dương: 0938 033 095</div>
                </div>
                </div>
                
            </div>
          <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                <div class="row">
                <div class="itemSupport">
                    <div><a href="#"><img alt="" src="wp-content/images/zalo.png"> 0938 033 095</a></div>
                </div>
                <div class="itemSupport">
                    <div><a href="#"><img alt="" src="wp-content/images/viber.png"> 0938 033 095</a></div>
                </div>
                <div class="itemSupport">
                    <div class="hotline"> <i class="fa fa-2x fa-mobile "></i> Hotline: 0938 033 095</div>
                </div>
                </div>
            </div>
          <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            	<div class="itemSupport pad-b1">
                    <div> <i class="fa fa-envelope"></i> Email: info@cayxanhvanphongdep.com</div>
                </div>
            	<div class="row">
                    <div class="search">
                            <form class="fs-fsearch">
                                <input type="text" id="keyword" placeholder="Từ khóa...">
                                
                                <button onclick="onSearch(event,'keyword');" type="button" name="submit">Tìm kiếm</button>
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