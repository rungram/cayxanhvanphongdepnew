<?php	if(!defined('_source')) die("Error");
$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
switch($act){
	case "capnhat":
		get_gioithieu();
		$template = "about/item_add";
		break;
	case "man_list":
	    get_lists();
	    $template = "about/lists";
	    break;
    case "add":
        $template = "about/item_add";
        break;
	case "save":
		save_gioithieu();
		break;
	case "delete":
	    delete();
	    break;
		
	default:
		$template = "index";
}
function delete(){
    global $d;
    if(isset($_GET['id'])){
        $id =  themdau($_GET['id']);
        $d->setTable('gioithieu');
        $d->setWhere('id', $id);
        $d->select();
        if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=about&act=man_list");
        $row = $d->fetch_array();
        delete_file(_upload_banner.$row['photo']);
        delete_file(_upload_banner.$row['thumb']);
        if($d->delete())
            redirect("index.php?com=about&act=man_list");
        else
            transfer("Xóa dữ liệu bị lỗi", "index.php?com=about&act=man_list");
    }else transfer("Không nhận được dữ liệu", "index.php?com=about&act=man_list");
}
function get_lists(){
    global $d, $items, $paging;

    #----------------------------------------------------------------------------------------
    if($_REQUEST['hienthi']!='')
    {
        $id_up = $_REQUEST['hienthi'];
        $sql_sp = "SELECT id,hienthi FROM #_gioithieu where id='".$id_up."'";
        $d->query($sql_sp);
        $cats= $d->result_array();
        $hienthi=$cats[0]['hienthi'];
        if($hienthi==0)
        {
        	$sqlUPDATE_ORDER = "UPDATE #_gioithieu SET hienthi =1 WHERE  id = ".$id_up."";
        	$d->query($sqlUPDATE_ORDER);
        }
        else
    	{
        	$sqlUPDATE_ORDER = "UPDATE #_gioithieu SET hienthi =0  WHERE  id = ".$id_up."";
        	$d->query($sqlUPDATE_ORDER);
    	}
	}

	$sql = "select * from #_gioithieu";
	$sql.=" order by stt asc";

    $d->query($sql);
    $items = $d->result_array();

	$curPage = isset($_GET['curPage']) ? $_GET['curPage'] : 1;
	$url="index.php?com=about&act=man_list";
	$maxR=20;
	$maxP=10;
	$paging=paging($items, $url, $curPage, $maxR, $maxP);
	$items=$paging['source'];
}
function fns_Rand_digit($min,$max,$num)
	{
		$result='';
		for($i=0;$i<$num;$i++){
			$result.=rand($min,$max);
		}
		return $result;	
	}

function get_gioithieu(){
	global $d, $item,$ds_tags;
	$id = isset($_GET['id']) ? themdau($_GET['id']) : "";
	if(!$id)
		transfer("Không nhận được dữ liệu", "index.php?com=about&act=man_list");	
	$sql = "select * from #_gioithieu where id='".$id."'";
	$d->query($sql);
	if($d->num_rows()==0) transfer("Dữ liệu không có thực", "index.php?com=tinloai1_1&act=man");
	$item = $d->fetch_array();
}

function save_gioithieu(){
	global $d;
	$file_name=fns_Rand_digit(0,9,5);
	if(empty($_POST)) transfer("Không nhận được dữ liệu", "index.php?com=about&act=capnhat");
	$id = isset($_POST['id']) ? themdau($_POST['id']) : "";
	
	
	if($id){
    	if($photo = upload_image("file", 'jpg|png|gif|JPG|jpeg|JPEG',_upload_gioithieu,$file_name)){
    			$data['photo'] = $photo;
    			$data['thumb'] = create_thumb($data['photo'], 280,178, _upload_gioithieu,$file_name);
    			$d->setTable('gioithieu');			
    			$d->select();
    			if($d->num_rows()>0){
    				$row = $d->fetch_array();
    				delete_file(_upload_gioithieu.$row['photo']);
    				delete_file(_upload_gioithieu.$row['thumb']);
    			}
    		}	
    	$data['id_list'] = $_POST['id_list'];
		$data['ten_vi'] = $_POST['ten_vi'];
		$data['ten_en'] = !empty(($_POST['ten_en'])) ? $_POST['ten_en'] : $_POST['ten_vi'];
    	$data['mota_vi'] = $_POST['mota_vi'];
    	$data['mota_en'] = $_POST['mota_en'];
    	$data['mota_cn'] = $_POST['mota_cn'];
    	$data['link'] = $_POST['link'];
    	$data['noidung_vi'] = $_POST['noidung_vi'];
    	$data['noidung_en'] = !empty(($_POST['noidung_en'])) ? $_POST['noidung_en'] : $_POST['noidung_vi'];
    	$data['noidung_cn'] = $_POST['noidung_cn'];
    	$data['trangchu'] = isset($_POST['trangchu']) ? 1 : 0;
    	$data['trangcon'] = isset($_POST['trangcon']) ? 1 : 0;
    	$data['tenkhongdau'] = changeTitle($_POST['ten_vi']);
    	$data['ngaytao'] = lay_thoigian();
    	$d->reset();
    	$d->setTable('gioithieu');
    	$d->setWhere('id', $id);
    	if(!$d->update($data))
    		transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=about&act=man_list");
    	redirect("index.php?com=about&act=man_list");
	}else{
	    if($photo = upload_image("file", 'jpg|png|gif|JPG|jpeg|JPEG',_upload_gioithieu,$file_name)){
	        $data['photo'] = $photo;
	        $data['thumb'] = create_thumb($data['photo'], 280,178, _upload_gioithieu,$file_name);
	        $d->setTable('gioithieu');
	        $d->select();
	        if($d->num_rows()>0){
	        				$row = $d->fetch_array();
	        				delete_file(_upload_gioithieu.$row['photo']);
	        				delete_file(_upload_gioithieu.$row['thumb']);
	        }
	    }
	    $data['id_list'] = $_POST['id_list'];
	    $data['ten_vi'] = $_POST['ten_vi'];
	    $data['ten_en'] = !empty(($_POST['ten_en'])) ? $_POST['ten_en'] : $_POST['ten_vi'];
	    $data['mota_vi'] = $_POST['mota_vi'];
	    $data['mota_en'] = $_POST['mota_en'];
	    $data['mota_cn'] = $_POST['mota_cn'];
	    $data['link'] = $_POST['link'];
	    $data['noidung_vi'] = $_POST['noidung_vi'];
	    $data['noidung_en'] = !empty(($_POST['noidung_en'])) ? $_POST['noidung_en'] : $_POST['noidung_vi'];
	    $data['noidung_cn'] = $_POST['noidung_cn'];
	    $data['trangchu'] = isset($_POST['trangchu']) ? 1 : 0;
	    $data['trangcon'] = isset($_POST['trangcon']) ? 1 : 0;
	    $data['tenkhongdau'] = changeTitle($_POST['ten_vi']);
	    $data['ngaytao'] = lay_thoigian();	
	    $d->reset();
	    $d->setTable('gioithieu');
	    if(!$d->insert($data))
	       transfer("Cập nhật dữ liệu bị lỗi", "index.php?com=about&act=man_list");
	    redirect("index.php?com=about&act=man_list");
	}
}

?>