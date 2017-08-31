<?php

    $id =  (!empty(addslashes($_GET['id'])))?addslashes($_GET['id']):0;
    if(!empty(addslashes($_GET['id'])))
    {
        $d->reset();
//         $sql_list ="select * from #_product_cat where hienthi=1 and id_list='$id' order by stt asc limit 0,8";
        $sql_list ="select * from #_product_cat where hienthi=1 order by stt asc limit 0,9";
        $d->query($sql_list);
        $list =$d->result_array();
    }
    else 
    {
    	$d->reset();
//     	$sql_list ="select * from #_product_cat where hienthi=1 order by stt asc limit 0,8";
    	$sql_list ="select * from #_product_cat where hienthi=1 order by stt asc limit 0,9";
    	$d->query($sql_list);
    	$list =$d->result_array();
    }
?>

	<?php for($i=0,$count_l=count($list);$i<$count_l;$i++){
?>
<a href="danh-muc-cat/<?=$list[$i]["tenkhongdau"]?>-<?=$list[$i]["id"]?>.html"><?=$list[$i]["ten_vi"]?></a>
<?php }?>
