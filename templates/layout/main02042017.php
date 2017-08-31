<?php
	
	$d->reset();
	$sql_qc_slide ="select *  from #_banner order by stt asc limit 0,2";
	$d->query($sql_qc_slide);
	$qc_slide=$d->result_array();
?>

<section id="content">

		  
			  <!-- end divider -->
  <div class="row">
			    
			      <div class="col-lg-12">

                        <div class=" container three">
			              <div class="col-md-12 col-sm-12 ">
			                <!--<h2 class="title_index">Sản phẩm tiêu biểu</h2>-->
			                  <div class=" col-md-4 col-sm-4 col-xsm-6 col-xs-12  padding10 text-center style_line1">
			                    <div class="item-service"><a href="danh-muc-cat/phan-npk-1.html" ></a><a href="danh-muc-cat/phan-npk-1.html" class="img"><img src="img/sp.png" alt="Sản phẩm"></a><a href="danh-muc-cat/phan-npk-1.html">
		                        <h2>Sản phẩm</h2>
			                      </a> </div>
		                      </div>
			                  <div class=" col-md-4 col-sm-4 col-xsm-6 col-xs-12  padding10 text-center style_line2">
			                    <div class="item-service"> <a href="tin-tuc-cat/tin-tuc-va-su-kien-3.html"  class="img"> <img src="img/news_header3.png" alt="Tin tức"> </a> <a href="tin-tuc-cat/tin-tuc-va-su-kien-3.html">
		                        <h2>Tin tức</h2>
			                      </a> </div>
		                      </div>
			                  <div class=" col-md-4 col-sm-4 col-xsm-6 col-xs-12  padding10 text-center style_line3">
			                    <div class="item-service"> <a href="#"  class="img" > <img src="img/contact-us-header_03.png" alt="Liên hệ"> </a> <a href="#">
		                        <h2>Liên hệ</h2>
			                      </a> 
                                </div>
		                    </div>
			               
		                  </div>
		                </div>
                        <div style="clear:both"></div>
			            <div class="info">
                        	<div class="container">
                            	<div class="col-lg-7">
                                  <h2 class="title_index">Giới thiệu</h2>
                                  <?php
                                  $d->reset();
                        		  $sql_laycat="select * from #_product_cat where hienthi =1 and noibat = 1 ORDER BY id asc limit 1 ";
                        		  $d->query($sql_laycat);	
                        		  $result_cat=$d->fetch_array();
                        		  $id_list = $result_cat["id_list"];
                        		  $d->reset();
                        		  $sql_laylist="select * from #_product_list where hienthi =1 and id='$id_list'";
                        		  $d->query($sql_laylist);
                        		  $result_list=$d->fetch_array();
                        		  $str = $result_cat["mota_vi"];
                        		  if(strlen ($str) > 700)
                        		  {
                        		      $str = substr ($str, 0, 700);
                        		      $str = substr ($str, 0, strrpos ($str, ' ')).'...';
                        		  }
                                  ?>
                                  <div class="caption">
                                          <p><?php echo $str;?></p>
                                  </div>
                                  <div><i class="fa fa-fast-forward" aria-hidden="true"><a href="<?php echo $result_list["ten_en"]?>-cat/<?=$result_cat["tenkhongdau"]?>-<?=$result_cat["id"]?>.html">Xem thêm</a></i>
</div>
                                </div>
                                <div class="col-lg-5"><iframe class="video" width="100%" height="300px" src="https://www.youtube.com/embed/<?php echo $result_cat['url'] ?>" frameborder="1" allowfullscreen></iframe></div>
                    		</div>
                            <div class="hr-style1"></div>
    </div>
    
    <div class="product bg-x">
			              <div class=" container">
			                <h1>Sản phẩm tiêu biểu</h1>
			                <div class="block-blog1">
			                  <div class=" col-md-3 col-sm-3 col-xsm-6 col-xs-12  padding10">
			                    <div class="item-service"> <a href="danh-muc-cat/phan-npk-1.html" class="view-img"> <img src="img/3.jpg" alt="phân N-P-K"> </a> <a href="danh-muc-cat/phan-npk-1.html">
		                        <h2>phân N-P-K</h2>
			                      </a> </div>
		                      </div>
			                  <div class=" col-md-3 col-sm-3 col-xsm-6 col-xs-12  padding10">
			                    <div class="item-service"> <a href="danh-muc-cat/phan-huu-co-2.html" class="view-img"> <img src="img/1.jpg" alt="phân Hữu Cơ"> </a> <a href="danh-muc-cat/phan-huu-co-2.html">
		                        <h2>phân Hữu Cơ</h2>
		                        </a> </div>
		                      </div>
			                  <div class=" col-md-3 col-sm-3 col-xsm-6 col-xs-12  padding10">
			                    <div class="item-service"> <a href="danh-muc-cat/phan-trung-vi-luong-9.html" class="view-img"> <img src="img/2.jpg" alt="phân Trung vi lượng"> </a> <a href="danh-muc-cat/phan-trung-vi-luong-9.html">
		                        <h2>phân Trung vi lượng</h2>
		                        </a> </div>
		                      </div>
			                  <div class=" col-md-3 col-sm-3 col-xsm-6 col-xs-12  padding10">
			                    <div class="item-service"> <a href="danh-muc-cat/phan-bon-la-10.html" class="view-img"> <img src="img/Anh caphe.PNG" alt="phân Bón lá"> </a> <a href="danh-muc-cat/phan-bon-la-10.html">
		                        <h2>phân Bón lá</h2>
		                        </a> </div>
		                      </div>



			               
		                  </div>
		                </div>
                        
    					
            </div>
            <div style="clear:both"></div>
            <div class=" container support">
                        	<div class=" col-md-4 col-sm-4 col-xsm-6 col-xs-12 text-center">
                            	 <div class="progress">
                                      <div class="block">
                                      	<h1>Hotline</h1>
                                        <h3 class="title_1">Bộ phận kinh doanh</h3>
                                        <span class=" fa-3x">(+84.8) 903610327</span>
                                        <h3 class="title_1">Bộ phận hỗ trợ kỹ thuật</h3>
                                        <span class="fa-3x">(+84.8) 903610327</span>
                                        
                                      </div>
                                  </div>
                                
                            </div>
                            <div class=" col-md-4 col-sm-4 col-xsm-6 col-xs-12">
                            	 <div class="progress">
                                      <div class="block">
                                      	 <h1>Suport online</h1>
                                         <h3 class="title_1"></h3>
                                        <div class="httt">
                                        <img src="img/index_32.png" width="49"><span class="httt1">Bộ phận kinh doanh</span>
                                        </div>
                                        <div class="httt">
                                        <img src="img/index_32.png" alt="" width="49"><span class="httt1">Bộ phận hỗ trợ kỹ thuật</span>
                                        </div>
                                        
                                      </div>
                                  </div>                                
                            </div>
                            <div class=" col-md-4 col-sm-4 col-xsm-6 col-xs-12">
                            	 <div class="progress">
                                      <div class="block block-lineket">
                                      	 <h1>Mạng xã hội</h1>
                                         
                                        <div class=" httt">
                                            <ul class="social-network fa-3x text-center">
                                                <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="httt">
                                            <select onchange="window.open(this.value,'_blank')" class="block-lineket" name="select">
                                              <?php 
                                              global $d, $item;
                                              $sql = "select * from #_lkweb where hienthi='1'";
                                              $d->query($sql);
                                              $items = $d->result_array();
                                              ?>
                                              <?php for($i=0, $count=count($items); $i<$count; $i++){?>
                                               <option value="<?=$items[$i]['url']?>"><?=$items[$i]['ten_vi']?></option>
                                              <?php }?>
                                            </select>
                                        </div>
                                        
                                      </div>                               
                            </div>                     

			        	</div>
	          </div>
            </div>
            </div>
		  <!-- divider -->
			  
	  </section>	
	
	