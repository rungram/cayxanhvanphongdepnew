<?php
	$d->reset();
	$sql_list ="select *	from #_product_list where menuright=1 order by stt asc limit 0,8";
	$d->query($sql_list);
	$list =$d->result_array();
	
	$d->reset();
	$sql_detailq="select * from #_tinloai1_1 where menuright = 1 order by stt limit 0,8";
	$d->query($sql_detailq);
	$result_detailq=$d->result_array();
	
	$d->reset();
	$sql_gioithieu="select * from #_gioithieu_list  where hienthi=1 order by stt desc";
	$d->query($sql_gioithieu);
	$result_gioithieu=$d->result_array();
	
	$d->reset();
	$sql_slider = "select * from #_banner where hienthi=1 order by stt asc";
	$d->query($sql_slider);
	$result_slider=$d->result_array();
	//$id_gioithieu = $result_gioithieu["id"];
	
	$d->reset();
	$sql_detailq="select * from #_tinloai1_1 where hienthi = 1 order by id desc limit 5";
	$d->query($sql_detailq);
	$result_detainew=$d->result_array();
?>
<div id="sidebar" class="hidden-xs">
    <div class="box pav-category black">
        <h3 class="box-heading">
            <span><span class="hidden-sm">DANH MỤC </span>SẢN PHẨM</span>
        </h3>
        <nav class="box-content">
            <div class="menu-left-menu-container">
                <ul id="categories-menu" class="">
                <?php for($i=0,$count_l=count($result_detailq);$i<$count_l;$i++){
                    $href = 'tin-tuc-detail/'.$result_detailq[$i]["tenkhongdau"].'-'.$result_detailq[$i]["id"].'.html';
                ?>
                    <li id="menu-item-2735" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2735"><a href="<?php echo $href;?>"><?=$result_detailq[$i]["ten_vi"]?></a></li>
                <?php }?>  
                <?php for($i=0,$count_l=count($list);$i<$count_l;$i++){
                    $href = 'danh-muc-list/'.$list[$i]["tenkhongdau"].'-'.$list[$i]["id"].'.html';
                ?>
                    <li id="menu-item-2735" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2735"><a href="<?php echo $href;?>"><?=$list[$i]["ten_vi"]?></a></li>
                <?php }?>    
                </ul>
            </div>
        </nav>
    </div>
    <div class="widget widget-ads">
     <?php  for($i=0,$count_result_slider=count($result_slider);$i<$count_result_slider;$i++){ 
          ?>
            <a target="_blank" href="<?=$result_slider[$i]['link']?>" title="<?=$result_slider[$i]['link']?>"><img src="<?= _upload_banner_l.$result_slider[$i]['photo'] ?>" alt="<?=$result_slider[$i]['link']?>" class="img-responsive"></a>
          <?php } ?>	
        
    </div>
    <div id="recent-posts-2" class="widget widget_recent_entries">
        <h3 class="widget-title">Bài viết mới</h3>		
        <ul>
        <?php
             for($i=0;$i<count($result_detainew);$i++)
             { 
                 $Summary = $result_detainew[$i]['mota_vi'];
                 if(strlen ($Summary) > 200)
                 {
                     $Summary = substr ($Summary, 0, 200);
                     $Summary = substr ($Summary, 0, strrpos ($Summary, ' ')).'...';
                 }
             ?>
            <li>
                <a href="tin-tuc-detail/<?=$result_detainew[$i]['tenkhongdau']?>-<?=$result_detainew[$i]['id']?>.html"><?=$result_detainew[$i]['ten_vi']?></a>
            </li>
            <?php }?>
        </ul>
    </div>
</div>