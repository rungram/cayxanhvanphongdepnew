<?php 
$ngonngu = (!empty($_COOKIE['ngonngu']))?$_COOKIE['ngonngu']:'vn';
?>
<?php
if($ngonngu == 'vn')
{ 
?> 
<?php
	
	$d->reset();
	$sql_qc_slide ="select * from #_linhvuc where hienthi = 1 and taisan = 1 order by stt asc limit 0,12";
	$d->query($sql_qc_slide);
	$qc_slide=$d->result_array();
	
	$d->reset();
	$sql_tungdanhmuc="select * from #_product where hienthi = 1 and ( hienngonngu =3 or hienngonngu =1) order by stt asc limit 12";
	$d->query($sql_tungdanhmuc);
	$result_spnam=$d->result_array();
	
	$d->reset();
	$sql_xemnhieu="select * from #_product where hienthi = 1 and ( hienngonngu =3 or hienngonngu =1) order by luotxem desc limit 20";
	$d->query($sql_xemnhieu);
	$result_spxemnhieu=$d->result_array();
	
	$d->reset();
    $sql_list ="select *  from #_product_list where noibat = 1 and ( hienngonngu =3 or hienngonngu =1) order by stt asc ";
    $d->query($sql_list);
    $list =$d->result_array();
    
	$d->reset();
	$sql_linhvuc="select * from #_linhvuc where hienthi = 1 and linhvuc = 1 order by stt asc limit 4";
	$d->query($sql_linhvuc);
	$result_linhvuc=$d->result_array();
	
	$d->reset();
	$sql_detailq="select * from #_tinloai1_1 where hienthi = 1 and ( hienngonngu =3 or hienngonngu =1) order by luotxem limit 3";
	$d->query($sql_detailq);
	$result_detailq=$d->result_array();
	
	$d->reset();
	$sql_detailq="select * from #_tinloai1_1 where hienthi = 1 and ( hienngonngu =3 or hienngonngu =1) and dichvu = 1 order by id limit 6";
	$d->query($sql_detailq);
	$result_tindichvu=$d->result_array();
	
	
	$d->reset();
	$sql_detailq="select * from #_tinloai1_1 where hienthi = 1 and ( hienngonngu =3 or hienngonngu =1) and congty = 1 order by id limit 6";
	$d->query($sql_detailq);
	$result_tincongty=$d->result_array();
	
	
	$d->reset();
	$sql_detailq="select * from #_tinloai1_1 where hienthi = 1 and huongdan = 1 and ( hienngonngu =3 or hienngonngu =1) order by id limit 6";
	$d->query($sql_detailq);
	$result_tinhuongdan=$d->result_array();
	
	
	$d->reset();
	$sql_detaitvtk="select * from #_tinloai1_1 where tuvan_thietke = 1 and hienthi = 1 and ( hienngonngu =3 or hienngonngu =1) order by id limit 4";
	$d->query($sql_detaitvtk);
	$result_detaitvtk=$d->result_array();
	
	$d->reset();
	$sql_gioithieu="select * from #_gioithieu  where hienthi=1 and ( hienngonngu =3 or hienngonngu =1) order by id desc limit 1";
	$d->query($sql_gioithieu);
	$result_gioithieu=$d->fetch_array();
	$mota_gioithieu = $result_gioithieu["noidung_vi"];
	$id_gioithieu = $result_gioithieu["id"];
	$Summary = $mota_gioithieu;
	if(strlen ($Summary) > 300)
	{
	    $Summary = substr ($Summary, 0, 300);
	    $Summary = substr ($Summary, 0, strrpos ($Summary, ' ')).'...';
	}
	
	$tg=date('Y-m-d H:i:s');
	$tgout=900;
	$tgnew=$tg - $tgout;
	$ipaddress = '';
	if (isset($_SERVER['HTTP_CLIENT_IP']))
	    $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
	else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
	    $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
	else if(isset($_SERVER['HTTP_X_FORWARDED']))
	    $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
	else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
	    $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
	else if(isset($_SERVER['HTTP_FORWARDED']))
	    $ipaddress = $_SERVER['HTTP_FORWARDED'];
	else if(isset($_SERVER['REMOTE_ADDR']))
	    $ipaddress = $_SERVER['REMOTE_ADDR'];
	else
	    $ipaddress = 'UNKNOWN';
	$local = $_SERVER['PHP_SELF'];
// 	$sql_insert = "INSERT INTO #_useronline (Tgtmp, Ip, Local) VALUES ('$tg', '$ipaddress', '$local')";                  
// 	$d->query($sql_insert);
// 	$next30 = strtotime( '-900 seconds' );
// 	$tgnew =  date('Y-m-d H:i:s',$next30 );
// 	$d->reset();
// 	$sql_delete = "DELETE FROM #_useronline WHERE Tgtmp < '$tgnew'";
// 	$d->query($sql_delete);
// 	$d->reset();
// 	$result_detail="select DISTINCT ip from #_useronline where Local='$local'";
// 	$d->query($result_detail);
// 	$result_detail=$d->fetch_array();
// 	$useronline = count($result_detail);

	//slide show
	$d->reset();
	$sql_thuvienanh="select * from #_slideshow";
	$d->query($sql_thuvienanh);
	$result_thuvienanh=$d->result_array();
	

	$d->reset();
	$sql_slider = "select ten,photo,link from #_slideshow order by stt asc";
	$d->query($sql_slider);
	$result_slider=$d->result_array();
?>
<div id="wrapper">
    <div class="">
    <div id="slideshows">
      <div id="slider-widget-2" class="vnthemes-slider">
        <div data-ride="carousel" class="carousel slide" id="myCarousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
          <?php  for($i=0,$count_result_slider=count($result_slider);$i<$count_result_slider;$i++){ 
              $active = "";
              if($i==0)
              {
                  $active = "active";
              }
          ?>
            <li class="<?=$active;?>" data-slide-to="<?=$i?>" data-target="#myCarousel"></li>
          <?php } ?>	
          </ol>
          <div class="carousel-inner">
              <?php  for($i=0,$count_result_slider=count($result_slider);$i<$count_result_slider;$i++){ 
                  $active = "";
                  if($i==0)
                  {
                      $active = "active";
                  }
              ?>
                <div class="item <?=$active;?>"> <a href="#"><img alt="" src="<?= _upload_slideshow_l.$result_slider[$i]['photo'] ?>" class="img-responsive"></a> </div>
              <?php } ?>	
          </div>
          <a data-slide="prev" href="#myCarousel" class="left carousel-control"><span class="glyphicon glyphicon-chevron-left"></span></a> 
          <a data-slide="next" href="#myCarousel" class="right carousel-control"><span class="glyphicon glyphicon-chevron-right"></span></a> </div>
      </div>
    </div>
    <div class="container">
      <div id="main" class="row">
        <div id="main-homepage" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
      </div>
      <div class="col-lg-12">
      <?php 
    for ($j=0;$j<count($list);$j++)
    {
        $href = 'danh-muc-list/'.$list[$j]["tenkhongdau"].'-'.$list[$j]["id"].'.html';
        ?>
        <div class="widget_product ">
          <div class="box-heading">
            <h4 class="title"><a href="<?=$href?>" title="Cây công trình"><?=$list[$j]["ten_vi"]?></a></h4>
          </div>
          <!-- banner image -->
      <div class="box-content">
      <?php 
        $idlist = $list[$j]["id"];
        $d->reset();
        $sql_tungdanhmuc="select * from #_product where hienthi =1 and id_list='$idlist' and ( hienngonngu =3 or hienngonngu =1) order by stt asc limit 10";
		$d->query($sql_tungdanhmuc);	
		$result_spnam=$d->result_array();	
        for ($i=0;$i<count($result_spnam);$i++)
        {
            //$gia =  number_format ($result_spnam[$i]['gia'],0,",",".")." vnđ";
            $giathuc =  ($result_spnam[$i]['giagiam']!=0)?$result_spnam[$i]['giagiam']: $result_spnam[$i]['gia'];
            $gia = (!empty($giathuc))?number_format ($giathuc,0,",",".")." vnđ":'Gọi để biết giá';
            
            $giagiam =  (int)($result_spnam[$i]['giagiam']);
        ?>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 product-block"> <a href="chi-tiet-san-pham/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_spnam[$i]['id']?>.html" title="<?=$result_spnam[$i]["ten_vi"]?>"> <img src="upload/sanpham/<?php if($result_spnam[$i]["tc_big"]==1) echo $result_spnam[$i]["photo"]; else echo $result_spnam[$i]["photo"] ?>" class="img-responsive wp-post-image" alt="sen-dat-4aa" itemprop="image" /> </a>
          <h4 class="product-name"><a href="chi-tiet-san-pham/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_spnam[$i]['id']?>.html" title="<?=$result_spnam[$i]["ten_vi"]?>"><?=$result_spnam[$i]["ten_vi"]?></a></h4>
          <span class="price"><span class="amount"><?=$gia?></span></span>
          <button onclick="addtocart(<?=$result_spnam[$i]['id']?>,1)" type="submit" class="single_add_to_cart_button button alt btn btn-link">Thêm vào giỏ</button>
        </div>
        <?php }?>
      </div>
    </div>
    <?php }?>
          </div>
        </div>
        <div class="container">
          <div class="home-banner-static row">
            <div class="box-heading">
              <h4 class="title"><a href="tin-tuc.html" title="Tin tức">Thông tin nổi bật</a></h4>
            </div>
            <?php
             for($i=0;$i<count($result_detailq);$i++)
             { 
                 $Summary = $result_detailq[$i]['mota_vi'];
                 if(strlen ($Summary) > 200)
                 {
                     $Summary = substr ($Summary, 0, 200);
                     $Summary = substr ($Summary, 0, strrpos ($Summary, ' ')).'...';
                 }
             ?>
            <div class="banner-box banner-box1 col-sm-4 col-md-4 col-sms-12">
              <div class="banner-img"> <img src="upload/tinloai1_1/<?=$result_detailq[$i]['thumb']?>" class="img-responsive" alt="<?=$result_detailq[$i]['ten_vi']?>"> </div>
              <div class="banner-col">
                <h2 class="banner-static"><a href="tin-tuc-detail/<?=$result_detailq[$i]['tenkhongdau']?>-<?=$result_detailq[$i]['id']?>.html" title="<?=$result_detailq[$i]['ten_vi']?>"><?=$result_detailq[$i]['ten_vi']?></a></h2>
              </div>
              <div class="textbanner">
                <p> <a href="tin-tuc-detail/<?=$result_detailq[$i]['tenkhongdau']?>-<?=$result_detailq[$i]['id']?>.html"><?=$Summary?></a> <a href="tin-tuc-detail/<?=$result_detailq[$i]['tenkhongdau']?>-<?=$result_detailq[$i]['id']?>.html"><i class="fa fa-angle-double-right"></i> Xem thêm</a> </p>
              </div>
            </div>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
<?php 
}
else 
{
?>
<?php
	
	$d->reset();
	$sql_qc_slide ="select * from #_linhvuc where hienthi = 1 and taisan = 1 order by stt asc limit 0,12";
	$d->query($sql_qc_slide);
	$qc_slide=$d->result_array();
	
	$d->reset();
	$sql_tungdanhmuc="select * from #_product where hienthi = 1 and ( hienngonngu =3 or hienngonngu =2) order by stt asc limit 12";
	$d->query($sql_tungdanhmuc);
	$result_spnam=$d->result_array();
	
	$d->reset();
	$sql_xemnhieu="select * from #_product where hienthi = 1 and ( hienngonngu =3 or hienngonngu =2) order by luotxem desc limit 20";
	$d->query($sql_xemnhieu);
	$result_spxemnhieu=$d->result_array();
	
	$d->reset();
    $sql_list ="select *  from #_product_list where noibat = 1 and ( hienngonngu =3 or hienngonngu =2) order by stt asc ";
    $d->query($sql_list);
    $list =$d->result_array();
    
	$d->reset();
	$sql_linhvuc="select * from #_linhvuc where hienthi = 1 and linhvuc = 1 order by stt asc limit 4";
	$d->query($sql_linhvuc);
	$result_linhvuc=$d->result_array();
	
	$d->reset();
	$sql_detailq="select * from #_tinloai1_1 where hienthi = 1 and ( hienngonngu =3 or hienngonngu =2) order by luotxem limit 3";
	$d->query($sql_detailq);
	$result_detailq=$d->result_array();
	
	$d->reset();
	$sql_detailq="select * from #_tinloai1_1 where hienthi = 1 and dichvu = 1 and ( hienngonngu =3 or hienngonngu =2) order by id limit 6";
	$d->query($sql_detailq);
	$result_tindichvu=$d->result_array();
	
	
	$d->reset();
	$sql_detailq="select * from #_tinloai1_1 where hienthi = 1 and congty = 1 and ( hienngonngu =3 or hienngonngu =2) order by id limit 6";
	$d->query($sql_detailq);
	$result_tincongty=$d->result_array();
	
	
	$d->reset();
	$sql_detailq="select * from #_tinloai1_1 where hienthi = 1 and huongdan = 1 and ( hienngonngu =3 or hienngonngu =2) order by id limit 6";
	$d->query($sql_detailq);
	$result_tinhuongdan=$d->result_array();
	
	
	$d->reset();
	$sql_detaitvtk="select * from #_tinloai1_1 where tuvan_thietke = 1 and hienthi = 1 and ( hienngonngu =3 or hienngonngu =2) order by id limit 4";
	$d->query($sql_detaitvtk);
	$result_detaitvtk=$d->result_array();
	
	$d->reset();
	$sql_gioithieu="select * from #_gioithieu  where hienthi=1 and ( hienngonngu =3 or hienngonngu =2) order by id desc limit 1";
	$d->query($sql_gioithieu);
	$result_gioithieu=$d->fetch_array();
	$mota_gioithieu = $result_gioithieu["noidung_vi"];
	$id_gioithieu = $result_gioithieu["id"];
	$Summary = $mota_gioithieu;
	if(strlen ($Summary) > 300)
	{
	    $Summary = substr ($Summary, 0, 300);
	    $Summary = substr ($Summary, 0, strrpos ($Summary, ' ')).'...';
	}
	
	$tg=date('Y-m-d H:i:s');
	$tgout=900;
	$tgnew=$tg - $tgout;
	$ipaddress = '';
	if (isset($_SERVER['HTTP_CLIENT_IP']))
	    $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
	else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
	    $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
	else if(isset($_SERVER['HTTP_X_FORWARDED']))
	    $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
	else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
	    $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
	else if(isset($_SERVER['HTTP_FORWARDED']))
	    $ipaddress = $_SERVER['HTTP_FORWARDED'];
	else if(isset($_SERVER['REMOTE_ADDR']))
	    $ipaddress = $_SERVER['REMOTE_ADDR'];
	else
	    $ipaddress = 'UNKNOWN';
	$local = $_SERVER['PHP_SELF'];
// 	$sql_insert = "INSERT INTO #_useronline (Tgtmp, Ip, Local) VALUES ('$tg', '$ipaddress', '$local')";                  
// 	$d->query($sql_insert);
// 	$next30 = strtotime( '-900 seconds' );
// 	$tgnew =  date('Y-m-d H:i:s',$next30 );
// 	$d->reset();
// 	$sql_delete = "DELETE FROM #_useronline WHERE Tgtmp < '$tgnew'";
// 	$d->query($sql_delete);
// 	$d->reset();
// 	$result_detail="select DISTINCT ip from #_useronline where Local='$local'";
// 	$d->query($result_detail);
// 	$result_detail=$d->fetch_array();
// 	$useronline = count($result_detail);

	//slide show
	$d->reset();
	$sql_thuvienanh="select * from #_slideshow";
	$d->query($sql_thuvienanh);
	$result_thuvienanh=$d->result_array();
	

	$d->reset();
	$sql_slider = "select ten,photo,link from #_slideshow order by stt asc";
	$d->query($sql_slider);
	$result_slider=$d->result_array();
?>
<div id="wrapper">
    <div class="">
    <div id="slideshows">
      <div id="slider-widget-2" class="vnthemes-slider">
        <div data-ride="carousel" class="carousel slide" id="myCarousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
          <?php  for($i=0,$count_result_slider=count($result_slider);$i<$count_result_slider;$i++){ 
              $active = "";
              if($i==0)
              {
                  $active = "active";
              }
          ?>
            <li class="<?=$active;?>" data-slide-to="<?=$i?>" data-target="#myCarousel"></li>
          <?php } ?>	
          </ol>
          <div class="carousel-inner">
              <?php  for($i=0,$count_result_slider=count($result_slider);$i<$count_result_slider;$i++){ 
                  $active = "";
                  if($i==0)
                  {
                      $active = "active";
                  }
              ?>
                <div class="item <?=$active;?>"> <a href="#"><img alt="" src="<?= _upload_slideshow_l.$result_slider[$i]['photo'] ?>" class="img-responsive"></a> </div>
              <?php } ?>	
          </div>
          <a data-slide="prev" href="#myCarousel" class="left carousel-control"><span class="glyphicon glyphicon-chevron-left"></span></a> 
          <a data-slide="next" href="#myCarousel" class="right carousel-control"><span class="glyphicon glyphicon-chevron-right"></span></a> </div>
      </div>
    </div>
    <div class="container">
      <div id="main" class="row">
        <div id="main-homepage" class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
      </div>
      <div class="col-lg-12">
      <?php 
    for ($j=0;$j<count($list);$j++)
    {
        $href = 'danh-muc-list/'.$list[$j]["tenkhongdau"].'-'.$list[$j]["id"].'.html';
        ?>
        <div class="widget_product ">
          <div class="box-heading">
            <h4 class="title"><a href="<?=$href?>" title="Cây công trình"><?=$list[$j]["ten_en"]?></a></h4>
          </div>
          <!-- banner image -->
      <div class="box-content">
      <?php 
        $idlist = $list[$j]["id"];
        $d->reset();
        $sql_tungdanhmuc="select * from #_product where hienthi =1 and id_list='$idlist' and ( hienngonngu =3 or hienngonngu =2) order by stt asc limit 10";
		$d->query($sql_tungdanhmuc);	
		$result_spnam=$d->result_array();	
        for ($i=0;$i<count($result_spnam);$i++)
        {
            //$gia =  number_format ($result_spnam[$i]['gia'],0,",",".")." vnđ";
            $giathuc =  ($result_spnam[$i]['giagiam']!=0)?$result_spnam[$i]['giagiam']: $result_spnam[$i]['gia'];
            $gia = (!empty($giathuc))?number_format ($giathuc,0,",",".")." vnđ":'Call for price';
            
            $giagiam =  (int)($result_spnam[$i]['giagiam']);
        ?>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 product-block"> <a href="chi-tiet-san-pham/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_spnam[$i]['id']?>.html" title="<?=$result_spnam[$i]["ten_en"]?>"> <img src="upload/sanpham/<?php if($result_spnam[$i]["tc_big"]==1) echo $result_spnam[$i]["photo"]; else echo $result_spnam[$i]["photo"] ?>" class="img-responsive wp-post-image" alt="sen-dat-4aa" itemprop="image" /> </a>
          <h4 class="product-name"><a href="chi-tiet-san-pham/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_spnam[$i]['id']?>.html" title="<?=$result_spnam[$i]["ten_en"]?>"><?=$result_spnam[$i]["ten_en"]?></a></h4>
          <span class="price"><span class="amount"><?=$gia?></span></span>
          <button onclick="addtocart(<?=$result_spnam[$i]['id']?>,1)" type="submit" class="single_add_to_cart_button button alt btn btn-link">Add to cart</button>
        </div>
        <?php }?>
      </div>
    </div>
    <?php }?>
          </div>
        </div>
        <div class="container">
          <div class="home-banner-static row">
            <div class="box-heading">
              <h4 class="title"><a href="tin-tuc.html" title="Tin tức">Hot news</a></h4>
            </div>
            <?php
             for($i=0;$i<count($result_detailq);$i++)
             { 
                 $Summary = $result_detailq[$i]['mota_en'];
                 if(strlen ($Summary) > 200)
                 {
                     $Summary = substr ($Summary, 0, 200);
                     $Summary = substr ($Summary, 0, strrpos ($Summary, ' ')).'...';
                 }
             ?>
            <div class="banner-box banner-box1 col-sm-4 col-md-4 col-sms-12">
              <div class="banner-img"> <img src="upload/tinloai1_1/<?=$result_detailq[$i]['thumb']?>" class="img-responsive" alt="<?=$result_detailq[$i]['ten_en']?>"> </div>
              <div class="banner-col">
                <h2 class="banner-static"><a href="tin-tuc-detail/<?=$result_detailq[$i]['tenkhongdau']?>-<?=$result_detailq[$i]['id']?>.html" title="<?=$result_detailq[$i]['ten_en']?>"><?=$result_detailq[$i]['ten_en']?></a></h2>
              </div>
              <div class="textbanner">
                <p> <a href="tin-tuc-detail/<?=$result_detailq[$i]['tenkhongdau']?>-<?=$result_detailq[$i]['id']?>.html"><?=$Summary?></a> <a href="tin-tuc-detail/<?=$result_detailq[$i]['tenkhongdau']?>-<?=$result_detailq[$i]['id']?>.html"><i class="fa fa-angle-double-right"></i> See more</a> </p>
              </div>
            </div>
            <?php }?>
          </div>
        </div>
      </div>
    </div>  
<?php }?>