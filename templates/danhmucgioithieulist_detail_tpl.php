<?php 
            $id =  addslashes($_GET['id']);
			$d->reset();
			$order = isset($_GET['order']) ? 'order by gia '.$_GET['order'] : 'order by stt asc';
			$sql_tungdanhmuc="select * from #_product where hienthi =1 and id_list='$id' ".$order;
			$d->query($sql_tungdanhmuc);	
			$result_spnam=$d->result_array();	
			
			$d->reset();
			$sql_laylist="select * from #_product_list where hienthi =1 and id='$id'";
			$d->query($sql_laylist);	
			$result_laylist=$d->fetch_array();	
			
			
						
			$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
			$url=getCurrentPageURL();
			$maxR=300;
			$maxP=10;
			$paging=paging_home($result_spnam , $url, $curPage, $maxR, $maxP);
			$result_spnam=$paging['source'];
            
			
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
                                    <a itemprop="item"><span itemprop="name">Giới thiệu</span></a>
                                    <meta itemprop="position" content="2">
                                </span>
                            </div><!-- #breadcrumbs -->
                        </div>
                    </div>
                    <div class="container">
                        <div id="main">
                            <div id="main-body">
                                <div id="main-content">
									<div class="box-heading"><h1 class="title">Tin tức</h1></div>
                                    <div class="box-content border pad10">
                                    	<div class="row">
                                            <article itemtype="" itemscope="" class="row blog-item hentry post">	
                                                <div class="col-xs-4">
                                                    <a href="chi-tiet-bai-viet.html" itemprop="mainEntityOfPage" title="Các giống Hoa hồng của david austin sai, bông lớn trồng được ở Việt Nam"><img src="http://chohoaviet.com/wp-content/uploads/2017/04/hoa-hong-leo-Huntington-1a.jpg" class="img-responsive wp-post-image" alt="hoa-hong-leo-Huntington-1a" itemprop="image"></a>
                                                </div>
                                                <div class="col-xs-8">
                                                    <h4 class="entry-title" itemprop="headline"><a href="chi-tiet-bai-viet.html" rel="bookmark" itemprop="url">Các giống Hoa hồng của david austin sai, bông lớn trồng được ở Việt Nam</a></h4>
                                                    <div class="entry-meta hidden">				
                                                        <time class="meta-date updated" itemprop="datePublished" datetime="2017-04-25T23:51:56+00:00">25 Tháng Tư, 2017</time><time class="meta-date updated" itemprop="dateModified" datetime="2017-04-25T23:52:04+00:00"></time> <span itemprop="author" class="author vcard h-card">quantri</span> <span itemprop="publisher">quantri</span>
                                                    </div><!-- .entry-meta -->
                                                    <p itemprop="description" class="entry-summary entry-content hidden-xs">Là nhà lai tạo hồng nổi tiếng của thế giới, David Austin đã tạo cho thế giới gần 1000 giống hoa hồng tuyệt đẹp với hương thơm...</p>
                                                    <button class="btn btn-success"><i class=" fa fa-angle-double-right"></i> <a href="chi-tiet-bai-viet.html">Chi tiết</a></button>
                                                </div>
                                            </article>
                                            <article itemtype="" itemscope="" class="row blog-item hentry post">	
                                                <div class="col-xs-4">
                                                    <a href="chi-tiet-bai-viet.html" itemprop="mainEntityOfPage" title="Các giống Hoa hồng của david austin sai, bông lớn trồng được ở Việt Nam"><img src="http://chohoaviet.com/wp-content/uploads/2017/04/hoa-hong-leo-Huntington-1a.jpg" class="img-responsive wp-post-image" alt="hoa-hong-leo-Huntington-1a" itemprop="image"></a>
                                                </div>
                                                <div class="col-xs-8">
                                                    <h4 class="entry-title" itemprop="headline"><a href="chi-tiet-bai-viet.html" rel="bookmark" itemprop="url">Các giống Hoa hồng của david austin sai, bông lớn trồng được ở Việt Nam</a></h4>
                                                    <div class="entry-meta hidden">				
                                                        <time class="meta-date updated" itemprop="datePublished" datetime="2017-04-25T23:51:56+00:00">25 Tháng Tư, 2017</time><time class="meta-date updated" itemprop="dateModified" datetime="2017-04-25T23:52:04+00:00"></time> <span itemprop="author" class="author vcard h-card">quantri</span> <span itemprop="publisher">quantri</span>
                                                    </div><!-- .entry-meta -->
                                                    <p itemprop="description" class="entry-summary entry-content hidden-xs">Là nhà lai tạo hồng nổi tiếng của thế giới, David Austin đã tạo cho thế giới gần 1000 giống hoa hồng tuyệt đẹp với hương thơm...</p>
                                                    <button class="btn btn-success"><i class=" fa fa-angle-double-right"></i> <a href="chi-tiet-bai-viet.html">Chi tiết</a></button>
                                                </div>
                                            </article>
                                            <article itemtype="" itemscope="" class="row blog-item hentry post">	
                                                <div class="col-xs-4">
                                                    <a href="chi-tiet-bai-viet.html" itemprop="mainEntityOfPage" title="Các giống Hoa hồng của david austin sai, bông lớn trồng được ở Việt Nam"><img src="http://chohoaviet.com/wp-content/uploads/2017/04/hoa-hong-leo-Huntington-1a.jpg" class="img-responsive wp-post-image" alt="hoa-hong-leo-Huntington-1a" itemprop="image"></a>
                                                </div>
                                                <div class="col-xs-8">
                                                    <h4 class="entry-title" itemprop="headline"><a href="chi-tiet-bai-viet.html" rel="bookmark" itemprop="url">Các giống Hoa hồng của david austin sai, bông lớn trồng được ở Việt Nam</a></h4>
                                                    <div class="entry-meta hidden">				
                                                        <time class="meta-date updated" itemprop="datePublished" datetime="2017-04-25T23:51:56+00:00">25 Tháng Tư, 2017</time><time class="meta-date updated" itemprop="dateModified" datetime="2017-04-25T23:52:04+00:00"></time> <span itemprop="author" class="author vcard h-card">quantri</span> <span itemprop="publisher">quantri</span>
                                                    </div><!-- .entry-meta -->
                                                    <p itemprop="description" class="entry-summary entry-content hidden-xs">Là nhà lai tạo hồng nổi tiếng của thế giới, David Austin đã tạo cho thế giới gần 1000 giống hoa hồng tuyệt đẹp với hương thơm...</p>
                                                    <button class="btn btn-success"><i class=" fa fa-angle-double-right"></i> <a href="chi-tiet-bai-viet.html">Chi tiết</a></button>
                                                </div>
                                            </article>
                                            <article itemtype="" itemscope="" class="row blog-item hentry post">	
                                                <div class="col-xs-4">
                                                    <a href="chi-tiet-bai-viet.html" itemprop="mainEntityOfPage" title="Các giống Hoa hồng của david austin sai, bông lớn trồng được ở Việt Nam"><img src="http://chohoaviet.com/wp-content/uploads/2017/04/hoa-hong-leo-Huntington-1a.jpg" class="img-responsive wp-post-image" alt="hoa-hong-leo-Huntington-1a" itemprop="image"></a>
                                                </div>
                                                <div class="col-xs-8">
                                                    <h4 class="entry-title" itemprop="headline"><a href="chi-tiet-bai-viet.html" rel="bookmark" itemprop="url">Các giống Hoa hồng của david austin sai, bông lớn trồng được ở Việt Nam</a></h4>
                                                    <div class="entry-meta hidden">				
                                                        <time class="meta-date updated" itemprop="datePublished" datetime="2017-04-25T23:51:56+00:00">25 Tháng Tư, 2017</time><time class="meta-date updated" itemprop="dateModified" datetime="2017-04-25T23:52:04+00:00"></time> <span itemprop="author" class="author vcard h-card">quantri</span> <span itemprop="publisher">quantri</span>
                                                    </div><!-- .entry-meta -->
                                                    <p itemprop="description" class="entry-summary entry-content hidden-xs">Là nhà lai tạo hồng nổi tiếng của thế giới, David Austin đã tạo cho thế giới gần 1000 giống hoa hồng tuyệt đẹp với hương thơm...</p>
                                                    <button class="btn btn-success"><i class=" fa fa-angle-double-right"></i> <a href="chi-tiet-bai-viet.html">Chi tiết</a></button>
                                                </div>
                                            </article>
                                            <article itemtype="" itemscope="" class="row blog-item hentry post">	
                                                <div class="col-xs-4">
                                                    <a href="chi-tiet-bai-viet.html" itemprop="mainEntityOfPage" title="Các giống Hoa hồng của david austin sai, bông lớn trồng được ở Việt Nam"><img src="http://chohoaviet.com/wp-content/uploads/2017/04/hoa-hong-leo-Huntington-1a.jpg" class="img-responsive wp-post-image" alt="hoa-hong-leo-Huntington-1a" itemprop="image"></a>
                                                </div>
                                                <div class="col-xs-8">
                                                    <h4 class="entry-title" itemprop="headline"><a href="chi-tiet-bai-viet.html" rel="bookmark" itemprop="url">Các giống Hoa hồng của david austin sai, bông lớn trồng được ở Việt Nam</a></h4>
                                                    <div class="entry-meta hidden">				
                                                        <time class="meta-date updated" itemprop="datePublished" datetime="2017-04-25T23:51:56+00:00">25 Tháng Tư, 2017</time><time class="meta-date updated" itemprop="dateModified" datetime="2017-04-25T23:52:04+00:00"></time> <span itemprop="author" class="author vcard h-card">quantri</span> <span itemprop="publisher">quantri</span>
                                                    </div><!-- .entry-meta -->
                                                    <p itemprop="description" class="entry-summary entry-content hidden-xs">Là nhà lai tạo hồng nổi tiếng của thế giới, David Austin đã tạo cho thế giới gần 1000 giống hoa hồng tuyệt đẹp với hương thơm...</p>
                                                    <button class="btn btn-success"><i class=" fa fa-angle-double-right"></i> <a href="chi-tiet-bai-viet.html">Chi tiết</a></button>
                                                </div>
                                            </article>
                                            <article itemtype="" itemscope="" class="row blog-item hentry post">	
                                                <div class="col-xs-4">
                                                    <a href="chi-tiet-bai-viet.html" itemprop="mainEntityOfPage" title="Các giống Hoa hồng của david austin sai, bông lớn trồng được ở Việt Nam"><img src="http://chohoaviet.com/wp-content/uploads/2017/04/hoa-hong-leo-Huntington-1a.jpg" class="img-responsive wp-post-image" alt="hoa-hong-leo-Huntington-1a" itemprop="image"></a>
                                                </div>
                                                <div class="col-xs-8">
                                                    <h4 class="entry-title" itemprop="headline"><a href="chi-tiet-bai-viet.html" rel="bookmark" itemprop="url">Các giống Hoa hồng của david austin sai, bông lớn trồng được ở Việt Nam</a></h4>
                                                    <div class="entry-meta hidden">				
                                                        <time class="meta-date updated" itemprop="datePublished" datetime="2017-04-25T23:51:56+00:00">25 Tháng Tư, 2017</time><time class="meta-date updated" itemprop="dateModified" datetime="2017-04-25T23:52:04+00:00"></time> <span itemprop="author" class="author vcard h-card">quantri</span> <span itemprop="publisher">quantri</span>
                                                    </div><!-- .entry-meta -->
                                                    <p itemprop="description" class="entry-summary entry-content hidden-xs">Là nhà lai tạo hồng nổi tiếng của thế giới, David Austin đã tạo cho thế giới gần 1000 giống hoa hồng tuyệt đẹp với hương thơm...</p>
                                                    <button class="btn btn-success"><i class=" fa fa-angle-double-right"></i> <a href="chi-tiet-bai-viet.html">Chi tiết</a></button>
                                                </div>
                                            </article>
                                            <article itemtype="" itemscope="" class="row blog-item hentry post">	
                                                <div class="col-xs-4">
                                                    <a href="chi-tiet-bai-viet.html" itemprop="mainEntityOfPage" title="Các giống Hoa hồng của david austin sai, bông lớn trồng được ở Việt Nam"><img src="http://chohoaviet.com/wp-content/uploads/2017/04/hoa-hong-leo-Huntington-1a.jpg" class="img-responsive wp-post-image" alt="hoa-hong-leo-Huntington-1a" itemprop="image"></a>
                                                </div>
                                                <div class="col-xs-8">
                                                    <h4 class="entry-title" itemprop="headline"><a href="chi-tiet-bai-viet.html" rel="bookmark" itemprop="url">Các giống Hoa hồng của david austin sai, bông lớn trồng được ở Việt Nam</a></h4>
                                                    <div class="entry-meta hidden">				
                                                        <time class="meta-date updated" itemprop="datePublished" datetime="2017-04-25T23:51:56+00:00">25 Tháng Tư, 2017</time><time class="meta-date updated" itemprop="dateModified" datetime="2017-04-25T23:52:04+00:00"></time> <span itemprop="author" class="author vcard h-card">quantri</span> <span itemprop="publisher">quantri</span>
                                                    </div><!-- .entry-meta -->
                                                    <p itemprop="description" class="entry-summary entry-content hidden-xs">Là nhà lai tạo hồng nổi tiếng của thế giới, David Austin đã tạo cho thế giới gần 1000 giống hoa hồng tuyệt đẹp với hương thơm...</p>
                                                    <button class="btn btn-success"><i class=" fa fa-angle-double-right"></i> <a href="chi-tiet-bai-viet.html">Chi tiết</a></button>
                                                </div>
                                            </article>
                                		</div>
                                    </div>		
								</div>                                
               					<?php include _template."layout/menu_right.php"; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>