<?php 
         
			$d->reset();
			$id =  addslashes($_GET['id']);
			$sql_tinl="select * from #_tinloai1_1 where hienthi =1 and id_cat='".$id."' order by id desc";
			$d->query($sql_tinl);	
			$result_tinl=$d->result_array();		
			$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
			$url=getCurrentPageURL();
			$maxR=10;
			$maxP=5;
			$paging=paging_home($result_tinl , $url, $curPage, $maxR, $maxP);
			$result_tinl=$paging['source'];
			
			
			
			
			$sql_tinll_name="select * from #_tinloai1_1_cat where id='".$id."'";
			$d->query($sql_tinll_name);	
			$result_tinll_name=$d->fetch_array();	
			$id_list = $result_tinll_name["id_list"];
			
			$sql_tinll="select * from #_tinloai1_1_list where id='".$id_list."' order by stt asc";
			$d->query($sql_tinll);
			$result_tinll=$d->fetch_array();
			$href_list = 'tin-tuc-list/'.$result_tinll["tenkhongdau"].'-'.$result_tinll["id"].'.html';
			
			//$href_cat = "tin-tuc-cat/".$result_tinll_name["tenkhongdau"]."-".$result_tinll_name["id"].".html";
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
                                <a href="<?=$href_list?>" itemprop="item"><span itemprop="name" class="hidden-xs"><?=$result_tinll["ten_vi"]?></span></a><meta itemprop="position" content="1">
                            </span> 	
                            <span class="hidden-xs">→</span>
                            <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                <a itemprop="item"><span itemprop="name"><?=$result_tinll_name["ten_vi"]?></span></a>
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
                                	<?php for($i=0,$count_tl=count($result_tinl);$i<$count_tl;$i++){ ?>
                                	  <article itemtype="" itemscope="" class="row blog-item hentry post">	
                                            <div class="col-xs-4">
                                                <a href="chi-tiet-bai-viet.html" itemprop="mainEntityOfPage" title="<?=$result_tinl[$i]["ten_vi"]?>"><img src="upload/tinloai1_1/<?=$result_tinl[$i]["thumb"]?>" class="img-responsive wp-post-image" alt="<?=$result_tinl[$i]["ten_vi"]?>" itemprop="image"></a>
                                            </div>
                                            <div class="col-xs-8">
                                                <h4 class="entry-title" itemprop="headline"><a href="tin-tuc-detail/<?=$result_tinl[$i]["tenkhongdau"]?>-<?=$result_tinl[$i]["id"]?>.html" rel="bookmark" itemprop="url"><?=$result_tinl[$i]["ten_vi"]?></a></h4>
                                                <div class="entry-meta hidden">				
                                                    <time class="meta-date updated" itemprop="datePublished" datetime="2017-04-25T23:51:56+00:00"><?=$result_tinl[$i]["ngaytao"]?></time><time class="meta-date updated" itemprop="dateModified" datetime="2017-04-25T23:52:04+00:00"></time> <span itemprop="author" class="author vcard h-card">quantri</span> <span itemprop="publisher">quantri</span>
                                                </div><!-- .entry-meta -->
                                                <p itemprop="description" class="entry-summary entry-content hidden-xs"><?=$result_tinl[$i]["mota_vi"]?></p>
                                                <button class="btn btn-success"><i class=" fa fa-angle-double-right"></i> <a href="tin-tuc-detail/<?=$result_tinl[$i]["tenkhongdau"]?>-<?=$result_tinl[$i]["id"]?>.html">Chi tiết</a></button>
                                            </div>
                                        </article>
                                   <?php }?>
                            		</div>
                                </div>		
							</div>                                
           					<?php include _template."layout/menu_right.php"; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>