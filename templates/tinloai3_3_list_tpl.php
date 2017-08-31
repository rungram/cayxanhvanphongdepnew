<?php 
			$d->reset();
			$id =  addslashes($_GET['id']);
			$sql_tinl="select * from #_tinloai1_1 where hienthi =1 and id_list='".$id."' order by id desc";
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
	<!-- start header -->
	<header>
	    <div id="hdbanner" class="container">
     		<div class="col-md-6 text-center  ">
            	<div class="row" style="margin-left:35%">
                    <a class="logo" href="index.html"><img src="img/logo.png" alt="" /></a>
                </div>
                <div class="row"><span class="hotline fa-2x"><i class="fa fa-phone"></i> 084 399 123</span></div>
			</div>
		<div class="col-md-6 mar-left">
							<div class="col-md-12 text-center">
								<ul class="list-lang">
									<li><a href="">
										<img src="img/vi.png"></a></li>
        
									<li><a href="../en/index.html"><img src="img/en.png"></a></li>
    
								</ul>
								</div>
								<div class="col-md-12 padding0 block-search">   
	
                                    <div class="input-group">
                                      <input class="form-control" placeholder="Tìm Kiếm" type="text">
                                      <span class="input-group-btn">
                                        <button class="form-control" type="button"><i class="fa fa-search"></i></button>
                                      </span>
                                    </div>
   
    
    
								</div>
 
							
        
		</div>
            </div>	
			
        <div class="navbar navbar-default navbar-static-top">
	 	



            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li ><a href="index.html">Trang chủ</a></li>

            			<li class="dropdown">
							<a href="gioi-thieu.html" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">TQ Cty<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="gioi-thieu.html">Tầm nhìn, sứ mệnh và giá trị cốt lõi</a></li>
                                <li><a href="gioi-thieu.html">Mục tiêu phát triển</a></li>
                                <li><a href="gioi-thieu.html">Hình thành và phát triển</a></li>
								
                            </ul>				
						
						</li>
                        <li class="dropdown active">
							<a href="tin-tuc.html" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Tin tức <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="tin-tuc.html">Tin tức và sự kiện</a></li>
                                <li><a href="tin-tuc.html">Hoạt động đoàn thể</a></li>
                                <li><a href="tin-tuc.html">Bảng giá phân bón</a></li>
								
                            </ul>			
						
						</li>
                        <li class="dropdown">
                            <a href="san-pham.html" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Sản phẩm <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="san-pham.html">Phân N-P-K</a></li>
                                <li><a href="san-pham.html">Phân Hữu Cơ</a></li>
								<li class="dropdown-submenu">
									<a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown">Phân Trung Vi Lượng</a>
									<ul class="dropdown-menu">
										<li><a href="san-pham.html">Phân Trung Vi Lượng Bón Lá</a></li>
										<li><a href="san-pham.html">Phân Trung Vi Lượng Bón Cây</a></li>
										<li><a href="san-pham.html">Phân Trung Vi Lượng Bón Trái</a></li>

									</ul>	
								</li>
                                <li><a href="san-pham.html">Phân Bón Lá</a></li>
                            </ul>
                        </li>
                        <li><a href="gia-tri.html">Giá trị</a></li>
                        <li><a href="vh-cty.html">VHCty </a></li>
                        <li class="dropdown"><a href="thu-vien.html" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Thư viện <i class="fa fa-angle-down"></i></a>
							<ul class="dropdown-menu">
                                <li><a href="thu-vien.html">Hình ảnh hoạt động</a></li>
                                <li><a href="thu-vien.html">Văn bản liên quan</a></li>
								<li><a href="thu-vien.html">Hướng dẫn kỹ thuật </a></li>
                            </ul>
						</li>
                        <li><a href="lien-he.html">Liên hệ </a></li>
                        <li><a href="ho-tro.html">Hỗ trợ </a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header>
	<!-- end header -->
	
<section id="content">

		  
			  <!-- end divider -->
  <div class="row">
			    
		<div class="col-lg-12">
             <div class=" container content">
			     <div class="col-lg-9">
                        <div class="news">
                        <h2 >Tin tức</h2>
                        <div class="col-lg-12 listnews">
                           <div class="row">
                             <h4>Những dịch bệnh hại cần chú ý trong tuần (từ 12-19/12).</h4>
                                                <img class="img-responsive pull-left" alt="" src="img/2.jpg">
                                                <p>
                                                     Bọ nhảy, sâu xanh, sâu khoang gây hại có chiều hướng gia tăng trên rau, mức độ nhẹ đến trung bình. Tiếp tục theo dõi, xác định địa điểm châu chấu đẻ trứng để kịp thời tổ chức, thực hiện phòng chống.
                                                </p>
                                                <div><i class="fa fa-fast-forward" aria-hidden="true"><a href="chi-tiet.html">Chi tiết</a></i></div>                           
                           </div>
                           <div class="row">
                             <h4>Những dịch bệnh hại cần chú ý trong tuần (từ 12-19/12).</h4>
                                                <img class="img-responsive pull-left" alt="" src="img/2.jpg">
                                                <p>
                                                     Bọ nhảy, sâu xanh, sâu khoang gây hại có chiều hướng gia tăng trên rau, mức độ nhẹ đến trung bình. Tiếp tục theo dõi, xác định địa điểm châu chấu đẻ trứng để kịp thời tổ chức, thực hiện phòng chống.
                                                </p>
                                                <div><i class="fa fa-fast-forward" aria-hidden="true"><a href="chi-tiet.html">Chi tiết</a></i></div>                           
                           </div>
                           <div class="row">
                             <h4>Những dịch bệnh hại cần chú ý trong tuần (từ 12-19/12).</h4>
                                                <img class="img-responsive pull-left" alt="" src="img/2.jpg">
                                                <p>
                                                     Bọ nhảy, sâu xanh, sâu khoang gây hại có chiều hướng gia tăng trên rau, mức độ nhẹ đến trung bình. Tiếp tục theo dõi, xác định địa điểm châu chấu đẻ trứng để kịp thời tổ chức, thực hiện phòng chống.
                                                </p> 
                                                <div><i class="fa fa-fast-forward" aria-hidden="true"><a href="chi-tiet.html">Chi tiết</a></i></div>                          
                           </div>
                           <div class="row">
                             <h4>Những dịch bệnh hại cần chú ý trong tuần (từ 12-19/12).</h4>
                                                <img class="img-responsive pull-left" alt="" src="img/2.jpg">
                                                <p>
                                                     Bọ nhảy, sâu xanh, sâu khoang gây hại có chiều hướng gia tăng trên rau, mức độ nhẹ đến trung bình. Tiếp tục theo dõi, xác định địa điểm châu chấu đẻ trứng để kịp thời tổ chức, thực hiện phòng chống.
                                                </p> 
                                                <div><i class="fa fa-fast-forward" aria-hidden="true"><a href="chi-tiet.html">Chi tiết</a></i></div>                          
                           </div>
                           <div class="row">
                             <h4>Những dịch bệnh hại cần chú ý trong tuần (từ 12-19/12).</h4>
                                                <img class="img-responsive pull-left" alt="" src="img/2.jpg">
                                                <p>
                                                     Bọ nhảy, sâu xanh, sâu khoang gây hại có chiều hướng gia tăng trên rau, mức độ nhẹ đến trung bình. Tiếp tục theo dõi, xác định địa điểm châu chấu đẻ trứng để kịp thời tổ chức, thực hiện phòng chống.
                                                </p>
                                                <div><i class="fa fa-fast-forward" aria-hidden="true"><a href="chi-tiet.html">Chi tiết</a></i></div>
						   </div> 

                           <div class="no-bottom">
                                <h4>Những dịch bệnh hại cần chú ý trong tuần (từ 12-19/12).</h4>
                                                <img class="img-responsive pull-left" alt="" src="img/0678509327614520.jpg">
                                                <p>
                                                Bọ nhảy, sâu xanh, sâu khoang gây hại có chiều hướng gia tăng trên rau, mức độ nhẹ đến trung bình. Tiếp tục theo dõi, xác định địa điểm châu chấu đẻ trứng để kịp thời tổ chức, thực hiện phòng chống.
                                                </p>
                                                <div><i class="fa fa-fast-forward" aria-hidden="true"><a href="chi-tiet.html">Chi tiết</a></i></div>                           
                           </div>
                           
                        </div>                        
                      </div>
                        
                    		
            </div>
            <div class="col-lg-3">
                 <div class="box">
                        	<h1>Video</h1>
                         	<div class=" boxed">
                            	<a href="#" class="video"> <img src="img/images.png" alt=" "></a>
                                <a href="#" class="video"> <img src="img/images.png" alt=" "></a>
                            </div>
                  </div>
                  <div class="box">
                        	<h1>Thư viện</h1>
                         	<div class=" boxed">
                            	<div class="content-img">
                                  <div class="padding5 item-img-left col-md-6"> <a href="#"><img src="img/95017730881.jpg"></a> </div>
                                  <div class="padding5 item-img-left col-md-6"> <a href="#"><img src="img/95017730880.jpg"></a> </div>
                                  <div class="padding5 item-img-left col-md-6"> <a href="#"><img src="img/1633088327.png"></a> </div>
                                  <div class="padding5 item-img-left col-md-6"> <a href="#"><img src="img/80572517181.png"></a> </div>
                                  <div class="padding5 item-img-left col-md-6"> <a href="#"><img src="img/1561031705.jpg"></a> </div>
                                  <div class="padding5 item-img-left col-md-6"> <a href="#"><img src="img/90377741090.jpg"></a> </div>
                                  <div class="padding5 item-img-left col-md-6"> <a href="#"><img src="img/69198311360.jpg"></a> </div>
                                  <div class="padding5 item-img-left col-md-6"> <a href="#"><img src="img/4834146575.jpg"></a> </div>
                                  <div class="padding5 item-img-left col-md-6"> <a href="#"><img src="img/38458851070.jpg"></a> </div>
                                  <div class="padding5 item-img-left col-md-6"><a href="#"><img src="img/38458851071.jpg"></a></div>
                                </div>
                            
                            </div>
                  </div>
        
            </div>
           </div>
    </div>
 
    		<div class="  clear"></div>
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
                                              <option value="" selected="selected">Liên kết website</option>
                                              <option value="https://www.google.com.vn/">Bộ nông nghiệp</option>
                                              <option value="https://www.google.com.vn/">Đại học nông nghiệp</option>
                                            </select>
                                        </div>
                                        
                                      </div>                               
                            </div>                     

			        	</div>
    </div>
            </div>
  <!-- divider -->
			  
	  </section>	
	
