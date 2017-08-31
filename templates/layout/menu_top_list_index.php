<?php
	$d->reset();
	$sql_list ="select *	from #_product_list where hienthi=1 order by stt asc limit 0,8";
	$d->query($sql_list);
	$list =$d->result_array();
?>
                <?php for($i=0,$count_l=count($list);$i<$count_l;$i++){
				  $d->reset();
				  $sql_cat ="select *  from #_product_cat where id_list='".$list[$i]["id"]."' order by stt asc";
				  $d->query($sql_cat);
				  $cat =$d->result_array();
				  $child = 'class="dropdown"';
				  $taga  = '<i class="fa fa-angle-down"></i>';
				  $href = 'danh-muc-list/'.$list[$i]["tenkhongdau"].'-'.$list[$i]["id"].'.html';
				  $toggle ='class="dropdown-toggle" data-toggle="dropdown"';
				  if(count($cat)<1)
				  {
				    $href = 'danh-muc-list/'.$list[$i]["tenkhongdau"].'-'.$list[$i]["id"].'.html';  
				  	$child = "";
				  	$taga = "";
				  	$toggle='';
				  }
				 ?>
				 <li <?=$child?>>
					<a href="<?php echo $href;?>" <?=$toggle?>>
					<?php
					if(!empty($list[$i]["thumb"]))
					{ 
					?>
					<span class="icon-menu">
 				
					   <img src="upload/sanpham/<?php if($list[$i]["tc_big"]==1) echo $list[$i]["photo"]; else echo $list[$i]["photo"] ?>" alt="">

				   </span>
				   <br>
					<?php
					} 
					?><?=$list[$i]["ten_vi"]?></a>
					<ul class="dropdown-menu container-fluid">
    					<li class="block-container">
                            <ul class="block">
					<?php for($j=0,$count_c=count($cat);$j<$count_c;$j++){ ?>
					       <li class="link_container">
                              <a href="danh-muc-cat/<?=$cat[$j]["tenkhongdau"]?>-<?=$cat[$j]["id"]?>.html"><?=$cat[$j]["ten_vi"]?></a>
                           </li>
					<?php }?>
					        </ul>
                        </li>
					</ul>
				</li>
                <?php }?> 