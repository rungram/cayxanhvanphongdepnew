<?php 

			$d->reset();
			$sql_tinl="select * from #_tinloai1_1 where thicong=1 and hienthi =1 order by id desc limit 1";
			$d->query($sql_tinl);	
		    $result_detail=$d->fetch_array();

		    $id = $result_detail["id"];
			$d->reset();
    		$result_detailq="select * from #_tinloai1_1 where thicong=1 and hienthi =1 and id<>'$id'";
    		$d->query($result_detailq); 
    		$result_detailq=$d->result_array();

    		$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
    		$url=getCurrentPageURL();
    		$maxR=4;
    		$maxP=5;
    		$paging=paging_home($result_detailq , $url, $curPage, $maxR, $maxP);
    		$result_detailq=$paging['source'];
?>
<div id="news" class="section-content">
    <div class="title-section text-center">
      <h2>Thi công</h2>
      <span></span></div>
    <!-- /.title-section -->
    <?php if(!empty($result_detail))
    {?>
    <div id="moinhat" class="moinhat">
      <div class="container">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a href="tin-tuc-detail/<?=$result_detail['tenkhongdau']?>-<?=$result_detail['id']?>.html"> <img src="upload/tinloai1_1/<?=$result_detail['thumb']?>" class="img-responsive" alt="Image"></a></div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
              <h3><a href="tin-tuc-detail/<?=$result_detail['tenkhongdau']?>-<?=$result_detail['id']?>.html"><?=$result_detail["ten_vi"]?></a></h3>
              <?=$result_detail["noidung_vi"]?>
              <hr>
              <p><a href="tin-tuc-detail/<?=$result_detail['tenkhongdau']?>-<?=$result_detail['id']?>.html" class="">Xem thêm .. <i class="ti-angle-right"></i></a></p>
            </div>
      </div>
      <!-- /.team-member -->
    </div>
    <?php }?>
    <!-- /.col-md-6 -->
    <div class="container">
       <?php
         for($i=0;$i<count($result_detailq);$i++)
         { 
         ?>
         <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="media">
            <div class=" pull-left"><a href="tin-tuc-detail/<?=$result_detailq[$i]['tenkhongdau']?>-<?=$result_detailq[$i]['id']?>.html"> <img src="upload/tinloai1_1/<?=$result_detailq[$i]['thumb']?>" class="img-responsive img_news" alt="Image"></a></div>
            <div class="  media-body">
              <h3 class="heading"><a href="tin-tuc-detail/<?=$result_detailq[$i]['tenkhongdau']?>-<?=$result_detailq[$i]['id']?>.html"><?=$result_detailq[$i]['ten_vi']?></a></h3>
              <p class="sort">Vệ sinh máy giặt không chỉ giúp cho máy làm việc hiệu quả, tăng tuổi thọ mà còn... </p>
              <p><a href="tin-tuc-detail/<?=$result_detailq[$i]['tenkhongdau']?>-<?=$result_detailq[$i]['id']?>.html" class="btn btn-primary btn-luxe-primary">Xem thêm .. <i class="ti-angle-right"></i></a></p>
            </div>
          </div>
          <?php 
                $i++;
                if($i<count($result_detailq))
                {
          ?>
            <div class="media">
            <div class=" pull-left"><a href="tin-tuc-detail/<?=$result_detailq[$i]['tenkhongdau']?>-<?=$result_detailq[$i]['id']?>.html"> <img src="upload/tinloai1_1/<?=$result_detailq[$i]['thumb']?>" class="img-responsive img_news" alt="Image"></a></div>
            <div class="  media-body">
              <h3 class="heading"><a href="tin-tuc-detail/<?=$result_detailq[$i]['tenkhongdau']?>-<?=$result_detailq[$i]['id']?>.html"><?=$result_detailq[$i]['ten_vi']?></a></h3>
              <p class="sort">Vệ sinh máy giặt không chỉ giúp cho máy làm việc hiệu quả, tăng tuổi thọ mà còn... </p>
              <p><a href="tin-tuc-detail/<?=$result_detailq[$i]['tenkhongdau']?>-<?=$result_detailq[$i]['id']?>.html" class="btn btn-primary btn-luxe-primary">Xem thêm .. <i class="ti-angle-right"></i></a></p>
            </div>
          </div>
              
         <?php 
                }
        ?>  
        </div>
         <?php
         }
         ?>
    	<!-- /.col-md-6 -->
    </div>
     <hr>
     <div class="text-center">
                    <ul class="pagination">
                          <?=$paging['paging']?></div>
                      </ul>
        </div>   
     </div>