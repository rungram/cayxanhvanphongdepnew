<?php 
            $id =  addslashes($_GET['id']);
			$d->reset();
			$order = isset($_GET['order']) ? 'order by gia '.$_GET['order'] : '';
			$sql_tungdanhmuc="select * from #_tinloai1_1 t  inner join #_tinloai1_1_list l ON t.id_list=l.id and l.dichvu=1 where t.hienthi =1 and t.id_list='".$id."' order by t.stt asc";
			$d->query($sql_tungdanhmuc);	
			$result_spnam=$d->result_array();
			
			
						
			$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
			$url=getCurrentPageURL();
			$maxR=10;
			$maxP=5;
			$paging=paging_home($result_spnam , $url, $curPage, $maxR, $maxP);
			$result_spnam=$paging['source'];
            
			
			$total_sp = count($result_spnam);
?>
<div id="dichvu" class="section-content">
    <div class="title-section text-center">
      <h2>Dịch vụ</h2>
      <span></span>
    </div>
    <!-- /.title-section -->
    
      <div class="container">
       <?php
	for ($i=0;$i<count($result_spnam);$i++)
	{ 
	?>
      	<div class="row dichvu">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><a href="chi-tiet-tinloai1_1/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_spnam[$i]['id']?>.html"> <img src="<?=_upload_tinloai1_1_l.$result_spnam[$i]['thumb']?>" class="img-responsive" alt="Image"></a></div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
              <h3><a href="chi-tiet.html"><?=$result_spnam[$i]['ten_vi']?></a></h3>
              <hr>
              <p class="sort"><?=$result_spnam[$i]['mota_vi']?> </p>
              <a href="chi-tiet-tinloai1_1/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_spnam[$i]['id']?>.html">Xem thêm .. <i class="ti-angle-right"></i></a>
     		</div> <!-- /.row-->
   	 	</div>
 	 <?php
	} 
	?>
    <!-- /.col-md-6 -->
         <div class="text-center">
                        <ul class="pagination">
                          <?=$paging['paging']?></div>
                        </ul>
          </div>  
     </div>
  <!-- /.our-team -->
</div>