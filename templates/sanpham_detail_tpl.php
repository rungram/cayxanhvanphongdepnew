<?php $ngonngu = (!empty($_COOKIE['ngonngu']))?$_COOKIE['ngonngu']:'vn';?>
<?php
if($ngonngu == 'vn')
{ 
?>
<?php
if(isset($_GET['id']))
{	
	$id =  addslashes($_GET['id']);
	
	$d->reset();
	$sql_tanglx="update  #_product set luotxem=luotxem+1 where id='$id'";
	$d->query($sql_tanglx);
	
	$d->reset();
	$sql_chitietsp="select *  from #_product where hienthi= 1 and id='$id'";
	$d->query($sql_chitietsp);
	$chitiet_sp=$d->fetch_array();
	//list
	$d->reset();
	$sql_l="select * from #_product_list where hienthi= 1 and id='".$chitiet_sp['id_list']."'";
	$d->query($sql_l);
	$result_laylist=$d->fetch_array();
	//
	$id_list = $chitiet_sp['id_list'];
	$d->reset();
	$sql_laylq="select * from #_product where hienthi =1 and ( hienngonngu =3 or hienngonngu =1) and id<>'$id' and id_list='$id_list' limit 0,8";
	$d->query($sql_laylq);
	$result_laylq=$d->result_array();
	//cat
	$d->reset();
	$sql_c="select * from #_product_cat where hienthi= 1 and id='".$chitiet_sp['id_cat']."'";
	$d->query($sql_c);
	$result_cat=$d->fetch_array();
	//item
	$d->reset();
	$sql_i="select * from #_product_item where hienthi= 1 and id='".$chitiet_sp['id_item']."'";
	$d->query($sql_i);
	$result_item=$d->fetch_array();
	$id_list = $chitiet_sp['id_list'];
	$d->reset();
	$sql_spkhac="select id,ten_$lang,tenkhongdau,thumb,gia,masp,luotxem,mota_vi  from #_product where hienthi= 1 and id_list ='$id_list' and id<>'$id' order by stt asc limit 0,12";
	$d->query($sql_spkhac);
	$result_spkhac=$d->result_array();
		
	$url=getCurrentPageURL();
	
	
	$mau_chinh = $chitiet_sp['id_mau'];
	$d->reset();
	$sql_laymau = "select ten_vi,ten_en from #_tinloai2_2 where id='$mau_chinh'";
	$d->query($sql_laymau);
	$result_laymau = $d->fetch_array();
	
	$href_list = 'danh-muc-list/'.$result_laylist["tenkhongdau"].'-'.$result_laylist["id"].'.html';
	$href_cat = 'danh-muc-cat/'.$result_cat["tenkhongdau"].'-'.$result_cat["id"].'.html';
	$href_item = 'danh-muc-item/'.$result_item["tenkhongdau"].'-'.$result_item["id"].'.html';
	//lay ds mau khac
	
	$d->reset();
	$sql_maukhac  = "select * from table_hinh_cungsp";
	$sql_maukhac .= " left join table_tinloai2_2 on table_tinloai2_2.id = table_hinh_cungsp.chon_mau";
	
	$sql_maukhac .= " where table_hinh_cungsp.id_sp='".$id."' and  table_hinh_cungsp.chon_mau<> '".$mau_chinh."'";
	$sql_maukhac .= " group by table_hinh_cungsp.chon_mau";
	$d->query($sql_maukhac);
	$result_maukhac = $d->result_array();
	
	//lay hinh cung mau
	$d->reset();
	$sql_cungmauc = "select thumb,photo from #_hinh_cungsp where id_sp='$id' and chon_mau='$mau_chinh'";
	$d->query($sql_cungmauc);
	$result_cungmauc = $d->result_array();
}
?>
<div id="wrapper">
    <div class="">
        <div id="pathway" class="clearfix">
            <div class="container">
                <div id="breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">

                    <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a href="index.html" itemprop="item"><span itemprop="name" class="hidden-xs">Trang chủ</span></a><meta itemprop="position" content="1">
                    </span> 
                    <?php if(!empty($result_laylist)){?>	
                    
                    <span class="hidden-xs">→</span>
                    <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a href="<?=$href_list?>" itemprop="item"><span itemprop="name"><?=$result_laylist["ten_vi"]?></span></a>
                        <meta itemprop="position" content="2">
                    </span>
                    <?php if(!empty($result_cat)){?>	
                    
                    <span class="hidden-xs">→</span>
                    <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a href="<?=$href_cat?>" itemprop="item"><span itemprop="name"><?=$result_cat["ten_vi"]?></span></a>
                        <meta itemprop="position" content="2">
                    </span>
                    <?php if(!empty($result_item)){?>	
                    
                    <span class="hidden-xs">→</span>
                    <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a href="<?=$href_item?>" itemprop="item"><span itemprop="name"><?=$result_item["ten_vi"]?></span></a>
                        <meta itemprop="position" content="2">
                    </span>
                    <?php }}}?>
                    <span class="hidden-xs">→</span>
                    <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a itemprop="item"><span itemprop="name"><?=$chitiet_sp["ten_vi"]?></span></a>
                        <meta itemprop="position" content="2">
                    </span>
                </div><!-- #breadcrumbs -->
            </div>
        </div>
        <div class="container">
            <div id="main">
                <div id="main-body">
                    <div id="main-content">
                        <div id="content">
                            <div vocab="http://schema.org/" typeof="Product" class="hentry">
                                <div class="row">
                                    <div class="col-md-5 col-sm-5">
                                        <div class="product-thumb">
                                        <?php
                                        if(empty($chitiet_sp['gia']))
                                        {
                                        ?>
                                        <div class="hethang">Hết hàng</div>
                                        <?php
                                        }
                                        ?>
                                            
                                            <a target="_blank" class="popup" title="" href="upload/sanpham/<?php if($chitiet_sp["tc_big"]==1) echo $chitiet_sp["photo"]; else echo $chitiet_sp["photo"] ?>">
                                                <img src="upload/sanpham/<?php if($chitiet_sp["tc_big"]==1) echo $chitiet_sp["photo"]; else echo $chitiet_sp["photo"] ?>" alt="<?=$chitiet_sp["ten_vi"]?>" class="img-responsive" propertyu="image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-7">
                                        <div class="product-info">
                                            <h1 class="entry-title" property="name"><?=$chitiet_sp["ten_vi"]?></h1>
                                            <span property="aggregateRating" typeof="AggregateRating" class="hidden">
                                                <span property="ratingValue">4.4</span> stars, based on <span property="reviewCount">755</span> reviews
                                            </span>
    
                                            <ul>
                                                <li>
                                                    <label>Mã SP</label>
                                                    :  <span property="mpn"></span><?=$chitiet_sp["masp"]?>
                                                </li>
                                                <li>
                                                    <label>Nhà cung cấp</label>
                                                    :  <span property="brand"></span><?=$chitiet_sp["nhacungcap"]?>
                                                </li>
                                                <li><label>Lượt xem</label>: <?=$chitiet_sp["luotxem"]?></li>
                                                <?php 
                                                $gia = (!empty($chitiet_sp['gia']))?number_format ($chitiet_sp['gia'],0,",",".")."&nbsp;₫":'Gọi để biết giá';
                                                ?>
                                                <li><label>Giá bán</label>: <span class="price"><?php echo $gia;?></span></li>
    
                                                <li class="hidden">
                                                    <span property="offers" typeof="Offer">
                                                        Giá bán    <meta property="priceCurrency" content="VND">
                                                        Khuyến mại: <span property="price"></span>
                                                        <link property="availability" href="http://schema.org/InStock">In stock! Order now!
                                                    </span>
    
    
                                                </li>
                                            </ul>
                                            <div class="addtocart">
                                                    <input name="type" value="add" type="hidden">
                                                    <input name="product_url" value="http://chohoaviet.com/cay-sen-dat-hoa-dep-thuong-duoc-trong-cac-cong-trinh-linh-thieng/" type="hidden">
                                                    <input name="product_price" value="" size="2" type="hidden">
                                                    <input name="product_sku" value="" size="2" type="hidden">
                                                    <input name="product_id" value="2773" size="2" type="hidden">
                                                    <input name="product_image" value="http://chohoaviet.com/wp-content/uploads/2017/06/sen-dat-4aa-300x200.jpg" size="2" type="hidden">
                                                    <input name="product_quantity" onchange="changesl(this.value)" size="2" class="quantity" value="1" min="1" max="1000" style="width: 50px" type="number">
                                                    <button value="1" id="dathang" onclick="addtocart(<?=$chitiet_sp['id']?>,this.value)" class="btnAddAction" type="submit">MUA NGAY</button>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="entry entry-content">
                                    <div class="text-links"></div>
    
    
                                    <div class="tabs-group box">
                                        <div id="tabs" class="htabs heighlight">
                                            <ul class="nav clearfix">
                                                <li class="first"><a class="selected" href="#tab-description">Mô tả sản phẩm</a></li>
                                                <li><a href="#tab-review">Bình luận - Đánh giá</a></li>
                                            </ul>
                                        </div>
                                        <div id="tab-description" class="tab-content" style="display: block;">
                                            <?=$chitiet_sp["mota_vi"]?>
                                        </div>
                                        <div style="display: none;" id="tab-review" class="tab-content">
    
    
    
    
                                            <!-- You can start editing here. -->
                                            <div id="comments">
                                                <!-- If comments are open, but there are no comments. -->
                                                <p class="nocomments">Chưa có bình luận/đánh giá về sản phẩm này.</p>
    
                                            </div><!-- /#comments_wrap -->
    
                                            <div id="respond" class="comment-respond">
                                                <h3 id="reply-title" class="comment-reply-title">Bình luận <small><a rel="nofollow" id="cancel-comment-reply-link" href="/cay-sen-dat-hoa-dep-thuong-duoc-trong-cac-cong-trinh-linh-thieng/#respond" style="display:none;">Hủy</a></small></h3>				<form action="http://chohoaviet.com/wp-comments-post.php" method="post" id="commentform" class="comment-form">
                                                    <p class="comment-notes"><span id="email-notes">Thư điện tử của bạn sẽ không được hiển thị công khai.</span> Các trường bắt buộc được đánh dấu <span class="required">*</span></p><p class="comment-form-comment"><textarea id="comment" name="comment" placeholder="Hãy bày tỏ ý tưởng, suy nghĩ của bạn về bài viết này bằng cách nhấp vào đây" cols="45" rows="8" aria-required="true"></textarea></p><div class="row">
                                                        <div class="col-sm-4"><p class="comment-form-author"><input id="author" placeholder="Tên của bạn (No Keywords)" name="author" value="" size="30" type="text"></p></div>
                                                        <div class="col-sm-4"><p class="comment-form-email"><input id="email" placeholder="email@domain.com" name="email" value="" size="30" type="text"></p></div>
                                                        <div class="col-sm-4"><p class="comment-form-url"><input id="url" name="url" placeholder="http://your-site-name.com" value="" size="30" type="text"> </p></div>
                                                    </div>
                                                    <p class="form-submit">
                                                        <input name="submit" id="submit" class="submit" value="Phản hồi" type="submit"> <input name="comment_post_ID" value="2773" id="comment_post_ID" type="hidden">
                                                        <input name="comment_parent" id="comment_parent" value="0" type="hidden">
                                                    </p>
                                                </form>
                                            </div><!-- #respond -->
                                        </div>
                                    </div>
                                </div> <!--end .entry-->
                                </div>
                                <div class="widget-product clearfix">
                                    <div class="box-heading"><span>SẢN PHẨM CÙNG LOẠI</span></div>
                                    <div class="box-content">
                            <?php
                            foreach ($result_laylq as $item)
                            {
                                $gia = (!empty($item['gia']))?number_format ($item['gia'],0,",",".")."&nbsp;₫":'Gọi để biết giá';
                            ?>
                              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 product-block">
                                    <a href="chi-tiet-san-pham/<?=$item["tenkhongdau"]?>-<?=$item["id"]?>.html" title="<?=$item["ten_vi"]?>">
                                        <img src="upload/sanpham/<?php if($item["tc_big"]==1) echo $item["photo"]; else echo $item["photo"] ?>" class="img-responsive wp-post-image" alt="cay-coc-5a" itemprop="image">
                                    </a>
                                    <h4 class="product-name"><a href="chi-tiet-san-pham/<?=$item["tenkhongdau"]?>-<?=$item["id"]?>.html" title="<?=$item["ten_vi"]?>"><?=$item["ten_vi"]?></a></h4>
                                    <span class="price"><?php echo $gia;?></span>
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
    <script language="javascript" type="text/javascript">
	function changesl(quality){
		$("#dathang").val(quality);
	}
    </script>
<?php 
}
else 
{
?>
<?php
if(isset($_GET['id']))
{	
	$id =  addslashes($_GET['id']);
	
	$d->reset();
	$sql_tanglx="update  #_product set luotxem=luotxem+1 where id='$id'";
	$d->query($sql_tanglx);
	
	$d->reset();
	$sql_chitietsp="select *  from #_product where hienthi= 1 and id='$id'";
	$d->query($sql_chitietsp);
	$chitiet_sp=$d->fetch_array();
	//list
	$d->reset();
	$sql_l="select * from #_product_list where hienthi= 1 and id='".$chitiet_sp['id_list']."'";
	$d->query($sql_l);
	$result_laylist=$d->fetch_array();
	//
	$id_list = $chitiet_sp['id_list'];
	$d->reset();
	$sql_laylq="select * from #_product where hienthi =1 and ( hienngonngu =3 or hienngonngu =2) and id<>'$id' and id_list='$id_list' limit 0,8";
	$d->query($sql_laylq);
	$result_laylq=$d->result_array();
	//cat
	$d->reset();
	$sql_c="select * from #_product_cat where hienthi= 1 and id='".$chitiet_sp['id_cat']."'";
	$d->query($sql_c);
	$result_cat=$d->fetch_array();
	//item
	$d->reset();
	$sql_i="select * from #_product_item where hienthi= 1 and id='".$chitiet_sp['id_item']."'";
	$d->query($sql_i);
	$result_item=$d->fetch_array();
	$id_list = $chitiet_sp['id_list'];
	$d->reset();
	$sql_spkhac="select id,ten_$lang,tenkhongdau,thumb,gia,masp,luotxem,mota_en  from #_product where hienthi= 1 and id_list ='$id_list' and id<>'$id' order by stt asc limit 0,12";
	$d->query($sql_spkhac);
	$result_spkhac=$d->result_array();
		
	$url=getCurrentPageURL();
	
	
	$mau_chinh = $chitiet_sp['id_mau'];
	$d->reset();
	$sql_laymau = "select ten_en,ten_en from #_tinloai2_2 where id='$mau_chinh'";
	$d->query($sql_laymau);
	$result_laymau = $d->fetch_array();
	
	$href_list = 'danh-muc-list/'.$result_laylist["tenkhongdau"].'-'.$result_laylist["id"].'.html';
	$href_cat = 'danh-muc-cat/'.$result_cat["tenkhongdau"].'-'.$result_cat["id"].'.html';
	$href_item = 'danh-muc-item/'.$result_item["tenkhongdau"].'-'.$result_item["id"].'.html';
	//lay ds mau khac
	
	$d->reset();
	$sql_maukhac  = "select * from table_hinh_cungsp";
	$sql_maukhac .= " left join table_tinloai2_2 on table_tinloai2_2.id = table_hinh_cungsp.chon_mau";
	
	$sql_maukhac .= " where table_hinh_cungsp.id_sp='".$id."' and  table_hinh_cungsp.chon_mau<> '".$mau_chinh."'";
	$sql_maukhac .= " group by table_hinh_cungsp.chon_mau";
	$d->query($sql_maukhac);
	$result_maukhac = $d->result_array();
	
	//lay hinh cung mau
	$d->reset();
	$sql_cungmauc = "select thumb,photo from #_hinh_cungsp where id_sp='$id' and chon_mau='$mau_chinh'";
	$d->query($sql_cungmauc);
	$result_cungmauc = $d->result_array();
}
?>
<div id="wrapper">
    <div class="">
        <div id="pathway" class="clearfix">
            <div class="container">
                <div id="breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">

                    <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a href="index.html" itemprop="item"><span itemprop="name" class="hidden-xs">Trang chủ</span></a><meta itemprop="position" content="1">
                    </span> 
                    <?php if(!empty($result_laylist)){?>	
                    
                    <span class="hidden-xs">→</span>
                    <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a href="<?=$href_list?>" itemprop="item"><span itemprop="name"><?=$result_laylist["ten_en"]?></span></a>
                        <meta itemprop="position" content="2">
                    </span>
                    <?php if(!empty($result_cat)){?>	
                    
                    <span class="hidden-xs">→</span>
                    <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a href="<?=$href_cat?>" itemprop="item"><span itemprop="name"><?=$result_cat["ten_en"]?></span></a>
                        <meta itemprop="position" content="2">
                    </span>
                    <?php if(!empty($result_item)){?>	
                    
                    <span class="hidden-xs">→</span>
                    <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a href="<?=$href_item?>" itemprop="item"><span itemprop="name"><?=$result_item["ten_en"]?></span></a>
                        <meta itemprop="position" content="2">
                    </span>
                    <?php }}}?>
                    <span class="hidden-xs">→</span>
                    <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a itemprop="item"><span itemprop="name"><?=$chitiet_sp["ten_en"]?></span></a>
                        <meta itemprop="position" content="2">
                    </span>
                </div><!-- #breadcrumbs -->
            </div>
        </div>
        <div class="container">
            <div id="main">
                <div id="main-body">
                    <div id="main-content">
                        <div id="content">
                            <div vocab="http://schema.org/" typeof="Product" class="hentry">
                                <div class="row">
                                    <div class="col-md-5 col-sm-5">
                                        <div class="product-thumb">
                                        <?php
                                        if(empty($chitiet_sp['gia']))
                                        {
                                        ?>
                                        <div class="hethang">Out of stock</div>
                                        <?php
                                        }
                                        ?>
                                            
                                            <a target="_blank" class="popup" title="" href="upload/sanpham/<?php if($chitiet_sp["tc_big"]==1) echo $chitiet_sp["photo"]; else echo $chitiet_sp["photo"] ?>">
                                                <img src="upload/sanpham/<?php if($chitiet_sp["tc_big"]==1) echo $chitiet_sp["photo"]; else echo $chitiet_sp["photo"] ?>" alt="<?=$chitiet_sp["ten_en"]?>" class="img-responsive" propertyu="image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7 col-sm-7">
                                        <div class="product-info">
                                            <h1 class="entry-title" property="name"><?=$chitiet_sp["ten_en"]?></h1>
                                            <span property="aggregateRating" typeof="AggregateRating" class="hidden">
                                                <span property="ratingValue">4.4</span> stars, based on <span property="reviewCount">755</span> reviews
                                            </span>
    
                                            <ul>
                                                <li>
                                                    <label>Product code</label>
                                                    :  <span property="mpn"></span><?=$chitiet_sp["masp"]?>
                                                </li>
                                                <li>
                                                    <label>Supplier</label>
                                                    :  <span property="brand"></span><?=$chitiet_sp["nhacungcap"]?>
                                                </li>
                                                <li><label>View</label>: <?=$chitiet_sp["luotxem"]?></li>
                                                <?php 
                                                $gia = (!empty($chitiet_sp['gia']))?number_format ($chitiet_sp['gia'],0,",",".")."&nbsp;₫":'Call for price';
                                                ?>
                                                <li><label>Price</label>: <span class="price"><?php echo $gia;?></span></li>
    
                                                <li class="hidden">
                                                    <span property="offers" typeof="Offer">
                                                        Price    <meta property="priceCurrency" content="VND">
                                                        Sale: <span property="price"></span>
                                                        <link property="availability" href="http://schema.org/InStock">In stock! Order now!
                                                    </span>
    
    
                                                </li>
                                            </ul>
                                            <div class="addtocart">
                                                    <input name="type" value="add" type="hidden">
                                                    <input name="product_url" value="http://chohoaviet.com/cay-sen-dat-hoa-dep-thuong-duoc-trong-cac-cong-trinh-linh-thieng/" type="hidden">
                                                    <input name="product_price" value="" size="2" type="hidden">
                                                    <input name="product_sku" value="" size="2" type="hidden">
                                                    <input name="product_id" value="2773" size="2" type="hidden">
                                                    <input name="product_image" value="http://chohoaviet.com/wp-content/uploads/2017/06/sen-dat-4aa-300x200.jpg" size="2" type="hidden">
                                                    <input name="product_quantity" onchange="changesl(this.value)" size="2" class="quantity" value="1" min="1" max="1000" style="width: 50px" type="number">
                                                    <button value="1" id="dathang" onclick="addtocart(<?=$chitiet_sp['id']?>,this.value)" class="btnAddAction" type="submit">MUA NGAY</button>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="entry entry-content">
                                    <div class="text-links"></div>
    
    
                                    <div class="tabs-group box">
                                        <div id="tabs" class="htabs heighlight">
                                            <ul class="nav clearfix">
                                                <li class="first"><a class="selected" href="#tab-description">Product description</a></li>
                                                <li><a href="#tab-review">Comments - Reviews</a></li>
                                            </ul>
                                        </div>
                                        <div id="tab-description" class="tab-content" style="display: block;">
                                            <?=$chitiet_sp["mota_en"]?>
                                        </div>
                                        <div style="display: none;" id="tab-review" class="tab-content">
    
    
    
    
                                            <!-- You can start editing here. -->
                                            <div id="comments">
                                                <!-- If comments are open, but there are no comments. -->
                                                <p class="nocomments">No comment / review about this product.</p>
    
                                            </div><!-- /#comments_wrap -->
    
                                            <div id="respond" class="comment-respond">
                                                <h3 id="reply-title" class="comment-reply-title">Comment <small><a rel="nofollow" id="cancel-comment-reply-link" href="/cay-sen-dat-hoa-dep-thuong-duoc-trong-cac-cong-trinh-linh-thieng/#respond" style="display:none;">Cancel</a></small></h3>				<form action="http://chohoaviet.com/wp-comments-post.php" method="post" id="commentform" class="comment-form">
                                                    <p class="comment-notes"><span id="email-notes">Your email will not be displayed publicly.</span> Required fields are marked <span class="required">*</span></p><p class="comment-form-comment"><textarea id="comment" name="comment" placeholder="Please express your ideas, thoughts on this article by clicking here" cols="45" rows="8" aria-required="true"></textarea></p><div class="row">
                                                        <div class="col-sm-4"><p class="comment-form-author"><input id="author" placeholder="Name (No Keywords)" name="author" value="" size="30" type="text"></p></div>
                                                        <div class="col-sm-4"><p class="comment-form-email"><input id="email" placeholder="email@domain.com" name="email" value="" size="30" type="text"></p></div>
                                                        <div class="col-sm-4"><p class="comment-form-url"><input id="url" name="url" placeholder="http://your-site-name.com" value="" size="30" type="text"> </p></div>
                                                    </div>
                                                    <p class="form-submit">
                                                        <input name="submit" id="submit" class="submit" value="Review" type="submit"> <input name="comment_post_ID" value="2773" id="comment_post_ID" type="hidden">
                                                        <input name="comment_parent" id="comment_parent" value="0" type="hidden">
                                                    </p>
                                                </form>
                                            </div><!-- #respond -->
                                        </div>
                                    </div>
                                </div> <!--end .entry-->
                                </div>
                                <div class="widget-product clearfix">
                                    <div class="box-heading"><span>THE SAME TYPE</span></div>
                                    <div class="box-content">
                            <?php
                            foreach ($result_laylq as $item)
                            {
                                $gia = (!empty($item['gia']))?number_format ($item['gia'],0,",",".")."&nbsp;₫":'Call for price';
                            ?>
                              <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 product-block">
                                    <a href="chi-tiet-san-pham/<?=$item["tenkhongdau"]?>-<?=$item["id"]?>.html" title="<?=$item["ten_en"]?>">
                                        <img src="upload/sanpham/<?php if($item["tc_big"]==1) echo $item["photo"]; else echo $item["photo"] ?>" class="img-responsive wp-post-image" alt="cay-coc-5a" itemprop="image">
                                    </a>
                                    <h4 class="product-name"><a href="chi-tiet-san-pham/<?=$item["tenkhongdau"]?>-<?=$item["id"]?>.html" title="<?=$item["ten_en"]?>"><?=$item["ten_en"]?></a></h4>
                                    <span class="price"><?php echo $gia;?></span>
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
    <script language="javascript" type="text/javascript">
	function changesl(quality){
		$("#dathang").val(quality);
	}
    </script>
<?php }?>