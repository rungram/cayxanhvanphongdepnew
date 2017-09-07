<?php
	$d->reset();
	$sql_list ="select *	from #_product_list where hienthi=1 order by stt asc limit 0,8";
	$d->query($sql_list);
	$list =$d->result_array();
	
	
	$d->reset();
	$sql_gioithieu="select * from #_gioithieu_list  where hienthi=1 order by stt desc";
	$d->query($sql_gioithieu);
	$result_gioithieu=$d->result_array();
	//$id_gioithieu = $result_gioithieu["id"];
?>
<div class="navbar-collapse collapse">
<ul id="menu-main-menu" class="nav navbar-nav">
    <li id="menu-item-4" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-4 active"><a title="Trang chủ" href="index.html">Trang chủ</a></li>
    <li id="menu-item-5" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-5 dropdown">
        <a title="Giới thiệu" href="#" class="dropdown-toggle" aria-haspopup="true">Giới thiệu<span class="caret"></span></a>
        <ul role="menu" class=" dropdown-menu">
            <?php 
                for($i=0,$count_l=count($result_gioithieu);$i<$count_l;$i++){
                    $d->reset();
                    $sql_cat ="select *  from #_gioithieu where id_list='".$result_gioithieu[$i]["id"]."' order by stt asc";
                    $d->query($sql_cat);
                    $cat =$d->result_array();
                    $child = 'class="has-submenu" id="sm-15003598033380005-5" aria-haspopup="true" aria-controls="sm-15003598033380005-6" aria-expanded="false"';
                    $href = 'gioi-thieu-list/'.$result_gioithieu[$i]["tenkhongdau"].'-'.$result_gioithieu[$i]["id"].'.html';
                    $dropdown = "menu-item menu-item-type-custom menu-item-object-custom menu-item-2747";
                    $dropdown_toggle = "";
                    $caret = "";
                    if(count($cat)>0)
                    {
                        $dropdown_toggle = 'class="dropdown-toggle" aria-haspopup="true"';
                        $dropdown = "menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-12 dropdown";
                        $caret = '<span class="caret"></span>';
                        $href = "#";
                    }
            ?>
            <li id="menu-item-12" class="<?=$dropdown?>">
                <a title="<?=$result_gioithieu[$i]["ten_vi"]?>" href="<?=$href?>"><?=$result_gioithieu[$i]["ten_vi"]?></a>
                <?php
            	if(count($cat)>0)
            	{
            	?>
                <ul role="menu" class="dropdown-menu">
                    <?php for($j=0,$count_c=count($cat);$j<$count_c;$j++){ 
                        $href_cat = 'gioi-thieu/'.$cat[$j]["tenkhongdau"].'-'.$cat[$j]["id"].'.html';
                    ?>
                    <li id="menu-item-9" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-9"><a title="<?=$cat[$j]["ten_vi"]?>" href="<?=$href_cat?>"><?=$cat[$j]["ten_vi"]?></a></li>
                    <?php }?>
                </ul>
                <?php }?>
            </li>
            <?php }?>
        </ul>
    </li>
    <?php for($i=0,$count_l=count($list);$i<$count_l;$i++){
            $d->reset();
            $sql_cat ="select *  from #_product_cat where id_list='".$list[$i]["id"]."' order by stt asc";
            $d->query($sql_cat);
            $cat =$d->result_array();
            $child = 'class="has-submenu" id="sm-15003598033380005-5" aria-haspopup="true" aria-controls="sm-15003598033380005-6" aria-expanded="false"';
            $href = 'danh-muc-list/'.$list[$i]["tenkhongdau"].'-'.$list[$i]["id"].'.html';
            $menutype = 'danh-muc-list';
            $dropdown = "menu-item menu-item-type-custom menu-item-object-custom menu-item-2747";
            $dropdown_toggle = "";
            $caret = "";
            if(count($cat)>0)
            {
                $dropdown_toggle = 'class="dropdown-toggle" aria-haspopup="true"';
                $dropdown = "menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-16 dropdown";
                $caret = '<span class="caret"></span>';
            }
    ?>
    <li id="menu-item-2747" class="<?=$dropdown?>">
        <a title="<?=$list[$i]["ten_vi"]?>" href="<?php echo $href;?>" <?php echo $dropdown_toggle;?> ><?=$list[$i]["ten_vi"]?><?=$caret?></a>
        <?php
    	if(count($cat)>0)
    	{
    	?>
        <ul role="menu" class=" dropdown-menu">
            <?php for($j=0,$count_c=count($cat);$j<$count_c;$j++){ 
                $d->reset();
                $sql_item ="select *  from #_product_item where id_list='".$list[$i]["id"]."' and  id_cat='".$cat[$j]["id"]."' order by stt asc";
                $d->query($sql_item);
                $item =$d->result_array();
                $href_cat = "danh-muc-cat/".$cat[$j]["tenkhongdau"]."-".$cat[$j]["id"].".html";
                $dropdown = "";
                if(count($item)>0)
            	{
            	    $dropdown = "dropdown";
            	}
            ?>
            <li id="menu-item-297" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-297 <?=$dropdown?>">
                <a title="<?=$cat[$j]["ten_vi"]?>" href="<?=$href_cat?>"><?=$cat[$j]["ten_vi"]?></a>
                <?php
            	if(count($item)>0)
            	{
            	?>
                <ul role="menu" class=" dropdown-menu">
                    <?php for($k=0,$count_i=count($item);$k<$count_i;$k++){ ?>
                        <li id="menu-item-309" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-309"><a title="<?=$item[$k]["ten_vi"]?>" href="danh-muc-item/<?=$item[$k]["tenkhongdau"]?>-<?=$item[$k]["id"]?>.html"><?=$item[$k]["ten_vi"]?></a></li>
                    <?php }?>
                </ul>
                <?php }?>
            </li>
            <?php }?>
        </ul>
        <?php }?>
    </li>
    <?php }?>
    <li id="menu-item-811" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-811"><a title="Liên hệ" href="lien-he.html">Liên hệ</a></li>
    <?php 
    $d->reset();
    $sql_list ="select *	from #_tinloai1_1_list where hienthi=1 order by stt asc limit 0,8";
    $d->query($sql_list);
    $list =$d->result_array();
    
    for($i=0,$count_l=count($list);$i<$count_l;$i++){
            $d->reset();
            $sql_cat ="select *  from #_tinloai1_1_cat where id_list='".$list[$i]["id"]."' order by stt asc";
            $d->query($sql_cat);
            $cat =$d->result_array();
            $child = 'class="has-submenu" id="sm-15003598033380005-5" aria-haspopup="true" aria-controls="sm-15003598033380005-6" aria-expanded="false"';
            $href = 'tin-tuc-list/'.$list[$i]["tenkhongdau"].'-'.$list[$i]["id"].'.html';
            $menutype = 'danh-muc-list';
            $dropdown = "menu-item menu-item-type-custom menu-item-object-custom menu-item-2747";
            $dropdown_toggle = "";
            $caret = "";
            if(count($cat)>0)
            {
                $dropdown_toggle = 'class="dropdown-toggle" aria-haspopup="true"';
                $dropdown = "menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-16 dropdown";
                $caret = '<span class="caret"></span>';
            }
    ?>
    <li id="menu-item-2747" class="<?=$dropdown?>">
        <a title="<?=$list[$i]["ten_vi"]?>" href="<?php echo $href;?>" <?php echo $dropdown_toggle;?> ><?=$list[$i]["ten_vi"]?><?=$caret?></a>
        <?php
    	if(count($cat)>0)
    	{
    	?>
        <ul role="menu" class=" dropdown-menu">
            <?php for($j=0,$count_c=count($cat);$j<$count_c;$j++){ 
//                 $d->reset();
//                 $sql_item ="select *  from #_tinloai1_1_item where id_list='".$list[$i]["id"]."' and  id_cat='".$cat[$j]["id"]."' order by stt asc";
//                 $d->query($sql_item);
//                 $item =$d->result_array();
                $item = array();
                $href_cat = "tin-tuc-cat/".$cat[$j]["tenkhongdau"]."-".$cat[$j]["id"].".html";
                $dropdown = "";
                if(count($item)>0)
            	{
            	    $dropdown = "dropdown";
            	}
            ?>
            <li id="menu-item-297" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-297 <?=$dropdown?>">
                <a title="<?=$cat[$j]["ten_vi"]?>" href="<?=$href_cat?>"><?=$cat[$j]["ten_vi"]?></a>
                <?php
            	if(count($item)>0)
            	{
            	?>
                <ul role="menu" class=" dropdown-menu">
                    <?php for($k=0,$count_i=count($item);$k<$count_i;$k++){ ?>
                        <li id="menu-item-309" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-309"><a title="<?=$item[$k]["ten_vi"]?>" href="danh-muc-item/<?=$item[$k]["tenkhongdau"]?>-<?=$item[$k]["id"]?>.html"><?=$item[$k]["ten_vi"]?></a></li>
                    <?php }?>
                </ul>
                <?php }?>
            </li>
            <?php }?>
        </ul>
        <?php }?>
    </li>
    <?php }?>
</ul>        
<div class="header-search navbar-form navbar-right">
    <!--<div class="hidden-lg hidden-sm pull-left language-phone">
            <div><a href="#"><img alt="" src="wp-content/images/vn.png"> </a><a href="#"><img alt="" src="wp-content/images/en.png"> </a></div>
        </div>-->
      <div class="widget-cart">
            <i class="fa fa-shopping-basket"></i>
            <div class="cart-table">
                <a href="gio-hang.html" class="btn active">XEM GIỎ HÀNG</a>
            </div>
        </div>
    </div><!-- .header-search -->
</div>