<?php 
		 
		$id =	addslashes($_GET['id']);
		
		$d->reset();
		$sql_tanglx="update	#_tinloai1_1 set luotxem=luotxem+1 where id='$id'";
		$d->query($sql_tanglx);
		$result_detail="select * from #_tinloai1_1 where id='$id'";
		$d->query($result_detail);	
		$result_detail=$d->fetch_array();


		$sql_tinll="select * from #_tinloai1_1_list where hienthi =1 order by stt asc";
		$d->query($sql_tinll);	
		$result_detaill=$d->result_array(); 
		
		$id_list = $result_detail['id_list'];
		$d->reset();
		$sql_tinll="select * from #_tinloai1_1 where id<>'$id' and id_list ='$id_list'";
		$d->query($sql_tinll); 
		$result_detailq=$d->result_array();

		$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
		$url=getCurrentPageURL();
		$maxR=4;
		$maxP=5;
		$paging=paging_home($result_detailq , $url, $curPage, $maxR, $maxP);
		$result_detailq=$paging['source'];
?>
<div id="gioithieu" class="section-content">
     <div class="title-section text-center">
      <h2>Chi tiết</h2>
      <span></span>
     </div>
    <!-- /.title-section -->
    <div class="container">
      <div class="detail">
              <h3><a href="chi-tiet.html"><?=$result_detail["ten_vi"]?></a></h3>
              <p class="child"><?=$result_detail["ngaytao"]?></p>
              <hr>
              <div class="para">
                <?=$result_detail["noidung_vi"]?>
              </div>
              <div class="social">
              	<img src="images/mangxahoi.png">
              </div>
      </div>
      <!-- /.team-member -->
    </div>
    <!-- /.col-md-6 -->
     <div class="title-section text-center">
      <h2>Bài viết liên quan</h2>
      <span></span>
     </div>    
     <div id="relate" class="container">
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