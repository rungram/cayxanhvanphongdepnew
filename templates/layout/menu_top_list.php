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
				 <li>
					<a href="<?php echo $href;?>">
					<?php
					if(!empty($list[$i]["thumb"]))
					{ 
					?>
					   <img src="upload/sanpham/<?php if($list[$i]["tc_big"]==1) echo $list[$i]["thumb"]; else echo $list[$i]["thumb"] ?>" alt=""></a>
					<?php
					} 
					?>
					<a href="<?php echo $href;?>"><?=$list[$i]["ten_vi"]?></a>
				</li>
                <?php }?> 