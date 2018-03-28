<?php	if(!defined('_source')) die("Error");

$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
$id=$_REQUEST['id'];
switch($act)
{

	case "man":
		$sql_xemgiohang="select * from table_donhang";
		$d->query($sql_xemgiohang);
		$items= $d->result_array();	
	
	
		$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
		$url=getCurrentPageURL();	
		$maxR=20;
		$maxP=100;
		$paging=paging_home($items, $url, $curPage, $maxR, $maxP);
		$items=$paging['source'];	
		
		$template = "qlgiohang/items";
		break;
	case "delete":
		$sql_delete = "delete from #_donhang where id='".$id."'";
		$d->query($sql_delete);
		redirect("index.php?com=qlgiohang&act=man");
		break;
	case "status":
		$keyword = (isset($_REQUEST['keyword'])) ? addslashes($_REQUEST['keyword']) : 1;
		$sql_sp = "UPDATE table_donhang SET trangthai ='".$keyword."' WHERE  id = ".$id."";
		$d->query($sql_sp);
		redirect("index.php?com=qlgiohang&act=man");
		break;
}


?>
