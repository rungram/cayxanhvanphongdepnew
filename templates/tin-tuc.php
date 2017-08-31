<?php 
			$d->reset();
			$id =  addslashes($_GET['id']);
			$sql_tinl="select * from #_tinloai1_1 where hienthi =1 order by id desc";
			$d->query($sql_tinl);	
			$result_tinl=$d->result_array();		
			$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
			$url=getCurrentPageURL();
			$maxR=10;
			$maxP=5;
			$paging=paging_home($result_tinl , $url, $curPage, $maxR, $maxP);
			$result_tinl=$paging['source'];
			
			
			$sql_tinll="select * from #_tinloai1_1_list where hienthi =1 order by stt asc";
			$d->query($sql_tinll);	
			$result_tinll=$d->result_array();	
			
			$sql_tinll_name="select * from #_tinloai1_1_list where id='".$id."'";
			$d->query($sql_tinll_name);	
			$result_tinll_name=$d->fetch_array();	
?>
<section>
    	<div class="container">
            <div class="col-lg-12">
            
              <div class="col-lg-8 col-sm-8 col-md-6 col-xs-12">
                <h2 class="box-header">TIN TỨC </h2>
                  <div class="media tintuc wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                  		  
                    	  <div class="pull-left"> <img class="img-responsive" src="images/news1.jpg"> </div>
                          <div class="media-body">
                            <h3 class="media-heading">6 địa điểm du lịch đáng để đi trốn ngày 10 - 3 này</h3>
                            <span>6 địa điểm du lịch đáng để đi trốn ngày 10 - 3 này.Một trong những địa điểm du lịch quanh Hà Nội, ngoại thành lý tưởng cho du khách, đặc biệt bởi cảnh sắc đẹp...</span>
                            <span><a href="#">Chi tiết</a></span>
                          </div>
                  </div>
                  <div class="pagination">
                                    <nav aria-label="Page navigation">
                                        <div class="pagination-container"><ul class="pagination"><li class="active"><a>1</a></li><li><a href="/tin-tuc?page=2">2</a></li><li><a href="/tin-tuc?page=3">3</a></li><li><a href="/tin-tuc?page=4">4</a></li><li><a href="/tin-tuc?page=5">5</a></li><li><a href="/tin-tuc?page=6">6</a></li><li><a href="/tin-tuc?page=7">7</a></li><li><a href="/tin-tuc?page=8">8</a></li><li class="PagedList-skipToNext"><a href="/tin-tuc?page=2" rel="next">»</a></li></ul></div>
                                    </nav>
                                </div>
              </div>
                <div class="col-lg-4 col-sm-4 col-md-6 col-xs-12">
                <div class="alert alert-info text-center">
                          <h4> BẠN CẦN VAY ONLINE?</h4> 
                          <hr>
                            <i class="fa fa-warning fa-4x"></i>
                          <p>
                         SFund hỗ trợ tài chính linh hoạt Cầm cố/Thế chấp tất cả tài sản có giá trị quy đổi và Cung cấp các dịch vụ tài chính chất lượng cao
                        </p>
                          <hr>
                           <a href="#"><img class="img-responsive" src="images/button-dang-ky.png"></a> 
                        </div>
                <h2 class="box-header">TIN TỨC MỚI NHẤT</h2>
                	<div class="col-xs-12 col-sm-12 wow fadeInDown border ">
            <div class="testimonial padd">
              
              <div class="media testimonial-inner">
                <div class="pull-left"> <img class="img-responsive thum" src="images/news1.jpg"> </div>
                <div class="media-body">
                  <h2>Tiết lộ bí quyết giúp "tiền đẻ ra tiền"</h2>
                  <p>Tiết lộ bí quyết giúp "tiền đẻ ra tiền"Một cách khác mà tiền...</p>
                   </div>
              </div>
              <div class="media testimonial-inner">
                <div class="pull-left"> <img class="img-responsive thum" src="images/news1.jpg"> </div>
                <div class="media-body">
                  <h2>Tiết lộ bí quyết giúp "tiền đẻ ra tiền"</h2>
                  <p>Tiết lộ bí quyết giúp "tiền đẻ ra tiền"Một cách khác mà tiền...</p>
                   </div>
              </div>
              <div class="media testimonial-inner">
                <div class="pull-left"> <img class="img-responsive thum" src="images/news1.jpg"> </div>
                <div class="media-body">
                  <h2>Tiết lộ bí quyết giúp "tiền đẻ ra tiền"</h2>
                  <p>Tiết lộ bí quyết giúp "tiền đẻ ra tiền"Một cách khác mà tiền...</p>
                   </div>
              </div>
              <div class="media testimonial-inner">
                <div class="pull-left"> <img class="img-responsive thum" src="images/news1.jpg"> </div>
                <div class="media-body">
                  <h2>Tiết lộ bí quyết giúp "tiền đẻ ra tiền"</h2>
                  <p>Tiết lộ bí quyết giúp "tiền đẻ ra tiền"Một cách khác mà tiền...</p>
                   </div>
              </div>
              <div class="media testimonial-inner">
                <div class="pull-left"> <img class="img-responsive thum" src="images/news3.jpg"> </div>
                <div class="media-body">
                  <h2>Cả thế giới nể phục cách tiết kiệm của người Nhật</h2>
                  <p>Cả thế giới nể phục cách tiết kiệm của người Nhật.Nhật Bản phát triển một cách thần kì ...</p>
                </div>
              </div>
            </div>
          </div>
                
                
                </div>
              </div>  
        </div>
    </section>
    <div class=" clearfix"></div>