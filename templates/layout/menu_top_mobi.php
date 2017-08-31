<?php
	$d->reset();
	$sql_list ="select *	from #_product_list where hienthi=1 order by stt asc limit 0,8";
	$d->query($sql_list);
	$list =$d->result_array();
?>

<ul id="mobileMenu">
	<li><a class="glyphicon glyphicon-menu-hamburger Button"></a>
	<ul class="roboto hide">
		<li><a href="index.html"> Trang Chủ</a></li>
	<?php
		for($i=0,$count_l=count($list);$i<$count_l;$i++)
		{
			if($list[$i]["ten_cn"]!="")
			{
	?>
	<li><a href="<?php echo $list[$i]["ten_cn"]?>" target="_blank"><strong style="color: ;"><?=$list[$i]["ten_vi"]?></strong></a></li>
	<?php
			}
		else {
			?>
			<li><a href="danh-muc/<?=$list[$i]["tenkhongdau"]?>-<?=$list[$i]["id"]?>.html">
	<?=$list[$i]["ten_vi"]?>
	</a></li>
	<?php } }?>
		<li><a href="don-gia.html"> Bảng Giá</a></li>
		<li><a href="lien-he.html"> Liên hệ</a></li>
	</ul>
	</li>
</ul>