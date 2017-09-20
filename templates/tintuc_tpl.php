<?php $ngonngu = (!empty($_COOKIE['ngonngu']))?$_COOKIE['ngonngu']:'vn';?>
<?php
if($ngonngu == 'vn')
{ 
?>
<?php 
			$d->reset();
			//$id =  addslashes($_GET['id']);
			$sql_tinl="select * from #_tinloai1_1 where hienthi =1 and ( hienngonngu =3 or hienngonngu =1)  order by luotxem desc";
			$d->query($sql_tinl);	
			$result_tinl=$d->result_array();		
			$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
			$url=getCurrentPageURL();
			$maxR=10;
			$maxP=5;
			$paging=paging_home($result_tinl , $url, $curPage, $maxR, $maxP);
			$result_tinl=$paging['source'];
			
			
			$sql_tinll="select * from #_tinloai1_1_list where hienthi =1 and ( hienngonngu =3 or hienngonngu =1) order by stt asc";
			$d->query($sql_tinll);	
			$result_tinll=$d->result_array();	
			
			$sql_tinll_name="select * from #_tinloai1_1_list where hienngonngu =3 or hienngonngu =1";
			$d->query($sql_tinll_name);	
			$result_tinll_name=$d->fetch_array();	
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
                                    <a itemprop="item"><span itemprop="name">Tin tức</span></a>
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
                                		<div class="text-center">
                                <ul class="pagination">
                                      <?=$paging['paging']?>
                                 </ul>
                           </div> 
                                    </div>		
								</div>                                
               					<?php include _template."layout/menu_right.php"; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php 
}
else 
{
?>
<?php 
			$d->reset();
			$id =  addslashes($_GET['id']);
			$sql_tinl="select * from #_tinloai1_1 where hienthi =1 and ( hienngonngu =3 or hienngonngu =2) and id_list='".$id."' order by id desc";
			$d->query($sql_tinl);	
			$result_tinl=$d->result_array();		
			$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
			$url=getCurrentPageURL();
			$maxR=10;
			$maxP=5;
			$paging=paging_home($result_tinl , $url, $curPage, $maxR, $maxP);
			$result_tinl=$paging['source'];
			
			
			$sql_tinll="select * from #_tinloai1_1_list where hienthi =1 and ( hienngonngu =3 or hienngonngu =2) order by stt asc";
			$d->query($sql_tinll);	
			$result_tinll=$d->result_array();	
			
			$sql_tinll_name="select * from #_tinloai1_1_list where id='".$id."'";
			$d->query($sql_tinll_name);	
			$result_tinll_name=$d->fetch_array();	
?>
<div id="wrapper">
                <div class="">
                    <div id="pathway" class="clearfix">
                        <div class="container">
                            <div id="breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">

                                <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                    <a href="index.html" itemprop="item"><span itemprop="name" class="hidden-xs">Home</span></a><meta itemprop="position" content="1">
                                </span> 	
                                <span class="hidden-xs">→</span>
                                <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                    <a itemprop="item"><span itemprop="name">News</span></a>
                                    <meta itemprop="position" content="2">
                                </span>
                            </div><!-- #breadcrumbs -->
                        </div>
                    </div>
                    <div class="container">
                        <div id="main">
                            <div id="main-body">
                                <div id="main-content">
									<div class="box-heading"><h1 class="title">News</h1></div>
                                    <div class="box-content border pad10">
                                    	<div class="row">
                                    	<?php for($i=0,$count_tl=count($result_tinl);$i<$count_tl;$i++){ ?>
                                    	  <article itemtype="" itemscope="" class="row blog-item hentry post">	
                                                <div class="col-xs-4">
                                                    <a href="chi-tiet-bai-viet.html" itemprop="mainEntityOfPage" title="<?=$result_tinl[$i]["ten_en"]?>"><img src="upload/tinloai1_1/<?=$result_tinl[$i]["thumb"]?>" class="img-responsive wp-post-image" alt="<?=$result_tinl[$i]["ten_en"]?>" itemprop="image"></a>
                                                </div>
                                                <div class="col-xs-8">
                                                    <h4 class="entry-title" itemprop="headline"><a href="tin-tuc-detail/<?=$result_tinl[$i]["tenkhongdau"]?>-<?=$result_tinl[$i]["id"]?>.html" rel="bookmark" itemprop="url"><?=$result_tinl[$i]["ten_en"]?></a></h4>
                                                    <div class="entry-meta hidden">				
                                                        <time class="meta-date updated" itemprop="datePublished" datetime="2017-04-25T23:51:56+00:00"><?=$result_tinl[$i]["ngaytao"]?></time><time class="meta-date updated" itemprop="dateModified" datetime="2017-04-25T23:52:04+00:00"></time> <span itemprop="author" class="author vcard h-card">quantri</span> <span itemprop="publisher">quantri</span>
                                                    </div><!-- .entry-meta -->
                                                    <p itemprop="description" class="entry-summary entry-content hidden-xs"><?=$result_tinl[$i]["mota_en"]?></p>
                                                    <button class="btn btn-success"><i class=" fa fa-angle-double-right"></i> <a href="tin-tuc-detail/<?=$result_tinl[$i]["tenkhongdau"]?>-<?=$result_tinl[$i]["id"]?>.html">Detail</a></button>
                                                </div>
                                            </article>
                                       <?php }?>
                                		</div>
                                		<div class="text-center">
                                <ul class="pagination">
                                      <?=$paging['paging']?>
                                 </ul>
                           </div> 
                                    </div>		
								</div>                                
               					<?php include _template."layout/menu_right.php"; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php }?>