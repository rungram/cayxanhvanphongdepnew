<?php 
	$d->reset();
	$sql_tin_nb= "select * from #_tinloai1_1 order by id desc limit 0,5";
	$d->query($sql_tin_nb);
	$tin_nb = $d->result_array();
?>
<ul>
 <?php for($i=0,$count_tnb=count($tin_nb);$i<$count_tnb;$i++){ ?>
<li> <a href="tin-tuc-detail/<?=$tin_nb[$i]["tenkhongdau"]?>-<?=$tin_nb[$i]["id"]?>.html" title="<?=$tin_nb[$i]["ten_vi"]?>" class="clearfix"> <span> <img src="upload/tinloai1_1/<?=$tin_nb[$i]["thumb"]?>" data-original="" alt="<?=$tin_nb[$i]["ten_vi"]?>"> </span> <h3><?=$tin_nb[$i]["ten_vi"]?></h3> </a> </li> 
 <?php }?>   
</ul>