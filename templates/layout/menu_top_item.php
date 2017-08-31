<?php
    $id =  (!empty(addslashes($_GET['id'])))?addslashes($_GET['id']):0;
    $d->reset();
    $sql_list ="select * from #_product_item where hienthi=1 and id_cat='$id' order by stt asc limit 0,8";
    $d->query($sql_list);
    $list =$d->result_array();
?>

	<?php for($i=0,$count_l=count($list);$i<$count_l;$i++){
?>
<a href="danh-muc-item/<?=$list[$i]["tenkhongdau"]?>-<?=$list[$i]["id"]?>.html"><?=$list[$i]["ten_vi"]?></a>
<?php }?>
