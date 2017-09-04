<?php
	$com = (isset($_REQUEST['com'])) ? addslashes($_REQUEST['com']) : "";
	$act = (isset($_REQUEST['act'])) ? addslashes($_REQUEST['act']) : "";
	$d = new database($config['database']);
	$d->reset();
	$sql_setting = "select * from #_setting limit 0,1";
	$d->query($sql_setting);
	$row_setting= $d->fetch_array();
	
	
	switch($com){
		case 'ban-do':
			$source = "map";
			$template ="map";
			break;
// 		case 'tin-tuc':
// 			$template ="tinloai3_3";
// 			break;
		case 'tin-tuc-detail':
			$template ="chitiettinloai3_3";
			break;
		case 'tin-tuc-list':
			$template ="tinloai3_3_list";
			break;
		case 'tin-tuc-cat':
			$template ="tinloai3_3_cat";
			break;
		case 'dich-vu':
			$template ="tinloai3_2";
			break;
		case 'intro':
			$template ="intro";
			break;
		case 'gioi-thieu-list':
		    $template = "about_list";
		    break;
		case 'gioi-thieu':
		    $template = "about";
		    break;
		case 'gioi-thieu-cat':
			$template = "about";
			break;
// 		case 'gioi-thieu-cat':
// 			$template ="about_cat";
// 			break;
		case 'tuyen-dung':
			$template = isset($_GET['id']) ? "tuyendung_detail" : "tuyendung";
			break;
		
		case 'tin-tucx':
			$source = "tinloai2_1";
			$template = isset($_GET['id']) ? "chitiettinloai2_1" : "tinloai2_1";
			break;
		case 'chi-tiet-tin-tuc':
			$source = "chitiettinloai2_1";
			$template =  "chitiettinloai2_1";
			break;
			
		case 'cong-trinh-thi-cong':
			$source = "tinloai2_2";
			$template = isset($_GET['id']) ? "chitiettinloai2_2" : "tinloai2_2";
			break;
		case 'dich-vu':
			$source = "tinloai2_5";
			$template =  "tinloai2_5";
			break;
		case 'chi-tiet-dich-vu':
			$source = "chitiettinloai2_5";
			$template =  "chitiettinloai2_5";
			break;
		case 'chi-tiet-giai-phap-cong-nghe':
			$source = "chitiettinloai2_4";
			$template =  "chitiettinloai2_4";
			break;
		case 'chi-tiet-tu-van-phong-thuy':
			$source = "chitiettinloai2_2";
			$template =  "chitiettinloai2_2";
			break;
			
		case 'lien-ket':
			$template =  "tinloai2_3";
			break;
		case 'dang-ky':
			$template =  "dangky";
			break;
		case 'quan-ly-tai-khoan':
			$template =  "capnhattaikhoan";
			break;
		case 'dang-nhap':
			
			$template =  "dangnhap";
			break;
		case 'thoat':
			
			$template =  "thoat";
			break;
		case 'top-ban-chay':
			
			$template =  "topbanchay";
			break;	
		case 'tin-tuc':
		    //$source = "index1";
		    $template = "tintuc";
		    break;
	    case 'thi-cong':
	        //$source = "index1";
	        $template = "thicong";
	        break;
		case 'vay-tien':
		    //$source = "index1";
		    $template = "vaytien";
		    break;
		case 'lien-he':
		    //$source = "index1";
			$template = "lienhe";
			break;
		case 'don-gia':
		    //$source = "index1";
			$template = "dongia";
			break;
			
		case 'san-pham-trang-chu':
			
			$template = "download";
			break;
		
		case 'tim-kiem':
			$source = "timkiem";
			$template =  "timkiem";		
			break;	
		case 'thong-tin-chung':
			$template =  "tinloai3_1" ;
			break;
		case 'chi-tiet':
		    $template =  "chi_tiet" ;
		    break;
	    case 'danh-muc':
	        $template =  "danhmuc_detail" ;
	        break;
        case 'danh-muc-dich-vu-list':
            $template =  "danhmucdv1_detail" ;
            break;
        case 'danh-muc-dich-vu-cat':
            $template =  "danhmucdv2_detail" ;
            break;
		case 'thi-cong':
			$template =  "danhmuctc_detail" ;
			break;
		case 'danh-muc-ajax':
		    $template =  "danhmuc_ajax" ;
		    break;
	    case 'danh-muc-cat-ajax':
	        $template =  "danhmuc_cat_ajax" ;
	        break;
		case 'danh-muc-cat':
			$template =  "danhmucc2_detail" ;
			break;
		case 'danh-muc-list':
		    $template =  "danhmucc1_detail" ;
		    break;
		case 'danh-muc-item':
			$template =  "danhmucc3_detail" ;
			break;
		case 'muc-gia':
			$template =  "nhomdm_detail" ;
			break;
		case 'khuyen-mai':	
			$template = "cumsp";
			break;
		case 'dich-vu-xay-dung-detail':	
			$template = "cumsp_detail";
			break;
		case 'danh-muc-cap1':
			$source = "listsp_cap2";
			$template = isset($_GET['id']) ? "danhmucc2_detail" : "danhmuc";	
			break;
		case 'chi-tiet-anh':
		    $template = "chitiet_thuvienanh";
		    break;
		case 'chi-tiet-san-pham':
			$template = "sanpham_detail";		
			break;
		case 'may-cung-gia':
			$template =  "maycunggia";		
			break;
		case 'thanh-toan':
			$template =  "thanhtoancotk";		
			break;	
		case 'quen-mat-khau':
			$template =  "quenmatkhau";		
			break;	
		case 'dat-hang':		
			$template =isset($_GET['id']) ? "dathang" : "product";
			break;
		case 'gio-hang':
			$template ="giohang";
			break;
		case 'gui-don-hang':
			$template ="guidonhang";
			break;
		case 'cap-nhat-gio-hang':
			$template = "capnhatgiohang" ;
			break;
		case 'ngonngu':
			
			if(isset($_GET['lang']))
			{
				switch($_GET['lang'])
					{
					case 'vi':
						$_SESSION['lang2'] = 'vi';						
						break;
					case 'en':
						$_SESSION['lang2'] = 'en';						
						break;
					case 'cn':
						$_SESSION['lang2'] = 'cn';
						break;
					default: 
						$_SESSION['lang2'] = 'vi';
						break;
					}
			}
			else{
			$_SESSION['lang2'] = 'vi';
			}			
				
					redirect($_SERVER['HTTP_REFERER']);
			break;
			
		
		default: 
			$source = "index";
			$template = "index";
			break;
	}
	if($source!="") include _source.$source.".php";
	
	if($_REQUEST['com']=='logout')
	{
	session_unregister($login_name);
	header("Location:index.php");
	}		
?>