<?php 
            $id =  addslashes($_GET['id']);
			$d->reset();
			$sql_tungdanhmuc="select * from #_linhvuc where hienthi =1 and id='$id'  order by stt asc ";
			$d->query($sql_tungdanhmuc);	
			$result_spnam=$d->result_array();	
			
			$d->reset();
			$sql_laycat="select * from #_linhvuc where hienthi =1 and id='$id'";
			$d->query($sql_laycat);	
			$result_laycat=$d->fetch_array();	
			
			
						
			$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
			$url=getCurrentPageURL();
			$maxR=30;
			$maxP=5;
			$paging=paging_home($result_spnam , $url, $curPage, $maxR, $maxP);
			$result_spnam=$paging['source'];
            
			
			$total_sp = count($result_spnam);
        ?>


	<!-- start header -->
	
<section>
    	<div class="container">
            <div class="col-lg-12">
            
              <div class="col-lg-8 col-sm-8 col-md-6 col-xs-12">
                <h2 class="box-header"><?=$result_laycat["ten_vi"]?></h2>
                 <div class="panel-group border" id="accordion">
      <div class="panel panel-default">
        <div class="panel-heading">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
           </a>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in">
          <div class="panel-body">
             <?=$result_laycat["noidung_vi"]?></div>
        </div>
      </div>
      
      
    </div>
                  
              </div>
                <?php include _template."layout/content_right.php"; ?>
              </div>  
        </div>
    </section>
    <div class=" clearfix"></div>