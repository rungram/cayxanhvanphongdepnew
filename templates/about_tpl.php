<?php $ngonngu = (!empty($_COOKIE['ngonngu']))?$_COOKIE['ngonngu']:'vn';?>
<?php
if($ngonngu == 'vn')
{ 
?>
<?php 
		 
		$id =	addslashes($_GET['id']);
		
		$d->reset();
		$sql_tanglx="update  #_gioithieu set luotxem=luotxem+1 where id='$id'";
		$d->query($sql_tanglx);
		
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
		$result_detailq="select * from #_gioithieu where hienthi =1 and	id<>'$id' order by luotxem desc limit 3";
		$d->query($result_detailq); 
		$result_detailq=$d->result_array();
		$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
		$url=getCurrentPageURL();
		$maxR=4;
		$maxP=5;
		$paging=paging_home($result_detailq , $url, $curPage, $maxR, $maxP);
		$result_detailq=$paging['source'];
?>
<div id="wrapper">
    <div class="">
        <div id="pathway" class="clearfix">
            <div class="container">
                <div id="breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
    
                    <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a href="index.html" itemprop="item"><span itemprop="name" class="hidden-xs">Trang chủ</span></a><meta itemprop="position" content="1">
                    </span> 	
                    <span> → <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item"><span itemprop="name"><?=$result_detail["ten_vi"]?></span></a><meta itemprop="position" content="3"></span></span>
                </div><!-- #breadcrumbs -->
        </div>
    </div>
    <div class="container">
        <div id="main">
            <div id="main-body">
                <div id="main-content" class="border pad10">
                    <div id="content">
                        <article class="hentry">
                            <div class="heading">
                                <h1 class="entry-title" itemprop="headline"><?=$result_detail["ten_vi"]?></h1>
                                <div class="entry-meta">
                                    <span> Đăng bởi <span class="author h-card">quantri</span></span> lúc <time class="published" datetime="2017-04-25T23:51:56+00:00"><?=$result_detail["ngaytao"]?></time> <time class="updated"><span class="hidden">2017-04-25T23:52:04+00:00</span> - Lượt xem: <?=$result_detail["luotxem"]?></time>
                                </div>
                            </div>
                            <?=$result_detail["noidung_vi"]?>
                    </article>
                    <h3 class="section-title">Ý KIẾN BÌNH LUẬN</h3>
                    <!-- You can start editing here. -->
                    <div id="comments">
                        <!-- If comments are open, but there are no comments. -->
                        <p class="nocomments">Chưa có bình luận/đánh giá về sản phẩm này.</p>
                    </div><!-- /#comments_wrap -->
                    <div id="respond" class="comment-respond">
                        <h3 id="reply-title" class="comment-reply-title">Bình luận <small><a rel="nofollow" id="cancel-comment-reply-link" href="/cac-giong-hoa-hong-cua-david-austin-sai-bong-lon-trong-duoc-o-viet-nam/#respond" style="display:none;">Hủy</a></small></h3>				<form action="http://chohoaviet.com/wp-comments-post.php" method="post" id="commentform" class="comment-form">
                            <p class="comment-notes"><span id="email-notes">Thư điện tử của bạn sẽ không được hiển thị công khai.</span> Các trường bắt buộc được đánh dấu <span class="required">*</span></p><p class="comment-form-comment"><textarea id="comment" name="comment" placeholder="Hãy bày tỏ ý tưởng, suy nghĩ của bạn về bài viết này bằng cách nhấp vào đây" cols="45" rows="8" aria-required="true"></textarea></p><div class="row">
                                <div class="col-sm-4"><p class="comment-form-author"><input id="author" placeholder="Tên của bạn (No Keywords)" name="author" value="" size="30" type="text"></p></div>
                                <div class="col-sm-4"><p class="comment-form-email"><input id="email" placeholder="email@domain.com" name="email" value="" size="30" type="text"></p></div>
                                <div class="col-sm-4"><p class="comment-form-url"><input id="url" name="url" placeholder="http://your-site-name.com" value="" size="30" type="text"> </p></div>
                            </div>
                            <p class="form-submit">
                                <input name="submit" id="submit" class="submit" value="Phản hồi" type="submit"> <input name="comment_post_ID" value="2759" id="comment_post_ID" type="hidden">
                                <input name="comment_parent" id="comment_parent" value="0" type="hidden">
                            </p>
                        </form>
                    </div><!-- #respond -->
                    <div class="related-post">
                        <h3 class="section-title">CÓ THỂ BẠN QUAN TÂM</h3>
                        <div class="related-loop row">
                        <?php
                         for($i=0;$i<count($result_detailq);$i++)
                         { 
                         ?>
                         <div class="col-md-4 col-sm-6">
                                <div class="hentry post-item">
                                    <a href="gioi-thieu/<?=$result_detailq[$i]['tenkhongdau']?>-<?=$result_detailq[$i]['id']?>.html" rel="bookmark"><img src="<?=_upload_gioithieu_l.$result_detailq[$i]['thumb']?>" class="img-responsive wp-post-image" alt="<?=$result_detailq[$i]['ten_vi']?>"></a>
                                    <h4 class="entry-title"><a title="<?=$result_detailq[$i]['ten_vi']?>" href="gioi-thieu/<?=$result_detailq[$i]['tenkhongdau']?>-<?=$result_detailq[$i]['id']?>.html"><?=$result_detailq[$i]['ten_vi']?></a></h4>
                                    <div class="entry-meta hidden">
                                        <time class="meta-date updated" datetime="2017-02-05T21:47:35+00:00"><?=$result_detailq[$i]['ngaytao']?></time> <span class="p-author author h-card" itemprop="author">quantri</span>
                                    </div><!-- .entry-meta -->
                                </div>
                            </div>
                         <?php
                         }
                         ?>
                        </div>
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
		 
		$id =	addslashes($_GET['id']);
		
		$d->reset();
		$sql_tanglx="update  #_gioithieu set luotxem=luotxem+1 where id='$id'";
		$d->query($sql_tanglx);
		
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
		$result_detailq="select * from #_gioithieu where hienthi =1 and	id<>'$id' order by luotxem desc limit 3";
		$d->query($result_detailq); 
		$result_detailq=$d->result_array();
		$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
		$url=getCurrentPageURL();
		$maxR=4;
		$maxP=5;
		$paging=paging_home($result_detailq , $url, $curPage, $maxR, $maxP);
		$result_detailq=$paging['source'];
?>
<div id="wrapper">
    <div class="">
        <div id="pathway" class="clearfix">
            <div class="container">
                <div id="breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
    
                    <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a href="index.html" itemprop="item"><span itemprop="name" class="hidden-xs">Home</span></a><meta itemprop="position" content="1">
                    </span> 	
                    <span> → <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a itemprop="item"><span itemprop="name"><?=$result_detail["ten_en"]?></span></a><meta itemprop="position" content="3"></span></span>
                </div><!-- #breadcrumbs -->
        </div>
    </div>
    <div class="container">
        <div id="main">
            <div id="main-body">
                <div id="main-content" class="border pad10">
                    <div id="content">
                        <article class="hentry">
                            <div class="heading">
                                <h1 class="entry-title" itemprop="headline"><?=$result_detail["ten_en"]?></h1>
                                <div class="entry-meta">
                                    <span> Posted by  <span class="author h-card">admin</span></span> on <time class="published" datetime="2017-04-25T23:51:56+00:00"><?=$result_detail["ngaytao"]?></time> <time class="updated"><span class="hidden">2017-04-25T23:52:04+00:00</span> - View: <?=$result_detail["luotxem"]?></time>
                                </div>
                            </div>
                            <?=$result_detail["noidung_en"]?>
                    </article>
                    <h3 class="section-title">COMMENT AGREEMENT</h3>
                    <!-- You can start editing here. -->
                    <div id="comments">
                        <!-- If comments are open, but there are no comments. -->
                        <p class="nocomments">No comment / review about this product.</p>
                    </div><!-- /#comments_wrap -->
                    <div id="respond" class="comment-respond">
                        <h3 id="reply-title" class="comment-reply-title">Comment <small><a rel="nofollow" id="cancel-comment-reply-link" href="/cac-giong-hoa-hong-cua-david-austin-sai-bong-lon-trong-duoc-o-viet-nam/#respond" style="display:none;">Cancel</a></small></h3>				<form action="http://chohoaviet.com/wp-comments-post.php" method="post" id="commentform" class="comment-form">
                            <p class="comment-notes"><span id="email-notes">Your email will not be displayed publicly.</span> Required fields are marked <span class="required">*</span></p><p class="comment-form-comment"><textarea id="comment" name="comment" placeholder="Please express your ideas, thoughts on this article by clicking here" cols="45" rows="8" aria-required="true"></textarea></p><div class="row">
                                <div class="col-sm-4"><p class="comment-form-author"><input id="author" placeholder="Name (No Keywords)" name="author" value="" size="30" type="text"></p></div>
                                <div class="col-sm-4"><p class="comment-form-email"><input id="email" placeholder="email@domain.com" name="email" value="" size="30" type="text"></p></div>
                                <div class="col-sm-4"><p class="comment-form-url"><input id="url" name="url" placeholder="http://your-site-name.com" value="" size="30" type="text"> </p></div>
                            </div>
                            <p class="form-submit">
                                <input name="submit" id="submit" class="submit" value="Review" type="submit"> <input name="comment_post_ID" value="2759" id="comment_post_ID" type="hidden">
                                <input name="comment_parent" id="comment_parent" value="0" type="hidden">
                            </p>
                        </form>
                    </div><!-- #respond -->
                    <div class="related-post">
                        <h3 class="section-title">MAY YOU INTEREST</h3>
                        <div class="related-loop row">
                        <?php
                         for($i=0;$i<count($result_detailq);$i++)
                         { 
                         ?>
                         <div class="col-md-4 col-sm-6">
                                <div class="hentry post-item">
                                    <a href="gioi-thieu/<?=$result_detailq[$i]['tenkhongdau']?>-<?=$result_detailq[$i]['id']?>.html" rel="bookmark"><img src="<?=_upload_gioithieu_l.$result_detailq[$i]['thumb']?>" class="img-responsive wp-post-image" alt="<?=$result_detailq[$i]['ten_en']?>"></a>
                                    <h4 class="entry-title"><a title="<?=$result_detailq[$i]['ten_en']?>" href="gioi-thieu/<?=$result_detailq[$i]['tenkhongdau']?>-<?=$result_detailq[$i]['id']?>.html"><?=$result_detailq[$i]['ten_en']?></a></h4>
                                    <div class="entry-meta hidden">
                                        <time class="meta-date updated" datetime="2017-02-05T21:47:35+00:00"><?=$result_detailq[$i]['ngaytao']?></time> <span class="p-author author h-card" itemprop="author">quantri</span>
                                    </div><!-- .entry-meta -->
                                </div>
                            </div>
                         <?php
                         }
                         ?>
                        </div>
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