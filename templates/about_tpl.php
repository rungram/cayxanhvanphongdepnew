<?php 
		 
		$id =	addslashes($_GET['id']);
		
		$d->reset();
// 		$sql_tanglx="update	#_tinloai1_1 set luotxem=luotxem+1 where id='$id'";
// 		$d->query($sql_tanglx);
		$result_detail="select * from #_gioithieu  where id='$id' order by stt desc limit 1";
		$d->query($result_detail);	
		$result_detail=$d->fetch_array();
		//$id = $result_detail["id"];

		$sql_tinll="select * from #_gioithieu where hienthi =1 order by stt asc";
		$d->query($sql_tinll);	
		$result_detaill=$d->result_array(); 
		
		
		$d->reset();
		$result_detailq="select * from #_gioithieu where hienthi =1 and	id<>'$id'";
		$d->query($result_detailq); 
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
      <h2>Giới Thiệu</h2>
      <span></span>
     </div>
    <!-- /.title-section -->
    <div class="container">
      <div class="detail">
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
             $Summary = $result_detailq[$i]['noidung_vi'];
             if(strlen ($Summary) > 300)
             {
                 $Summary = substr ($Summary, 0, 300);
                 $Summary = substr ($Summary, 0, strrpos ($Summary, ' ')).'...';
             }
         ?>
         <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="media">
            <div class=" pull-left"></div>
            <div class="  media-body">
              <h3 class="heading"><a href="gioi-thieu/gioi-thieu-<?=$result_detailq[$i]['id']?>.html"><?=$result_detailq[$i]['ten_vi']?></a></h3>
              <p class="sort"><?=$Summary?> </p>
              <p><a href="gioi-thieu/gioi-thieu-<?=$result_detailq[$i]['id']?>.html" class="btn btn-primary btn-luxe-primary">Xem thêm .. <i class="ti-angle-right"></i></a></p>
            </div>
          </div>
          
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