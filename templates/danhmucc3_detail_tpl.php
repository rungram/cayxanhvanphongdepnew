<?php 
    $id =  addslashes($_GET['id']);
	$d->reset();
	$sql_tungdanhmuc="select * from #_product where hienthi =1 and id_item='$id'  order by stt asc ";
	//die($sql_tungdanhmuc);
	$d->query($sql_tungdanhmuc);	
	$result_spnam=$d->result_array();	
	
	$d->reset();
	$sql_item="select * from #_product_item where hienthi =1 and id='$id'";
	$d->query($sql_item);	
	$result_item=$d->fetch_array();	
	
	$d->reset();
	$sql_laylist="select * from #_product_list where hienthi =1 and id='".$result_item['id_list']."'";
	$d->query($sql_laylist);	
	$result_laylist=$d->fetch_array();	
	
	$d->reset();
	$sql_laycat="select * from #_product_cat where hienthi =1 and id='".$result_item['id_cat']."'";
	$d->query($sql_laycat);	
	$result_cat=$d->fetch_array();	
	
				
	$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
	$url=getCurrentPageURL();
	$maxR=30;
	$maxP=5;
	$paging=paging_home($result_spnam , $url, $curPage, $maxR, $maxP);
	$result_spnam=$paging['source'];
    
	$href_list = 'danh-muc-list/'.$result_laylist["tenkhongdau"].'-'.$result_laylist["id"].'.html';
	$href_cat = 'danh-muc-cat/'.$result_cat["tenkhongdau"].'-'.$result_cat["id"].'.html';
	
	$total_sp = count($result_spnam);
?>
<div id="wrapper">
    <div class="">
        <div id="pathway" class="clearfix">
            <div class="container">
                <div id="breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">

                    <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a href="index.html" itemprop="item"><span itemprop="name" class="hidden-xs">Trang chủ</span></a><meta itemprop="position" content="1">
                    </span> 	
                    <span class="hidden-xs">→</span>
                    <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a href="<?=$href_list?>" itemprop="item"><span itemprop="name"><?=$result_laylist["ten_vi"]?></span></a>
                        <meta itemprop="position" content="2">
                    </span>
                    <span class="hidden-xs">→</span>
                    <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a href="<?=$href_cat?> itemprop="item"><span itemprop="name"><?=$result_cat["ten_vi"]?></span></a>
                        <meta itemprop="position" content="2">
                    </span>
                    <span class="hidden-xs">→</span>
                    <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a itemprop="item"><span itemprop="name"><?=$result_item["ten_vi"]?></span></a>
                        <meta itemprop="position" content="2">
                    </span>
                </div><!-- #breadcrumbs -->
            </div>
        </div>
        <div class="container">
            <div id="main">
                <div id="main-content">
                    <div class="widget_product ">
                      <!-- banner image -->
                      <div class="box-heading">
                        <h4 class="title"><a href="cay-cong-trinh/index.html" title="Cây công trình"><?=$result_laylist["ten_vi"]?></a></h4>
                      </div>
                      <div class="box-content">
                      <?php
                    	for ($i=0;$i<count($result_spnam);$i++)
                    	{ 
                    	    $gia = (!empty($result_spnam[$i]['gia']))?number_format ($result_spnam[$i]['gia'],0,",",".")."&nbsp;₫":'Gọi để biết giá';
                    	    
                    	?>
                          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 product-block"> <a href="chi-tiet-san-pham/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_spnam[$i]['id']?>.html" title="<?=$result_spnam[$i]["ten_vi"]?>"> <img src="upload/sanpham/<?php if($result_spnam[$i]["tc_big"]==1) echo $result_spnam[$i]["photo"]; else echo $result_spnam[$i]["photo"] ?>" class="img-responsive wp-post-image" alt="<?=$result_spnam[$i]["ten_vi"]?>" itemprop="image"> </a>
                              <h4 class="product-name"><a href="chi-tiet-san-pham/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_spnam[$i]['id']?>.html" title="<?=$result_spnam[$i]["ten_vi"]?>"><?=$result_spnam[$i]["ten_vi"]?></a></h4>
                              <span class="price"><span class="amount"><?php echo $gia;?></span></span>
                              <button onclick="addtocart(<?=$result_spnam[$i]['id']?>,1)" type="submit" class="single_add_to_cart_button button alt btn btn-link">Thêm vào giỏ</button>
                          </div>
                      <?php
                    	} 
                    	?>
                      </div>
                    </div>
                  </div>
                <?php include _template."layout/menu_right.php"; ?>

            </div>
        </div>
    </div>
</div>