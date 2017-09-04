<?php
$baseUrl1 = '../Scripts/ckeditor_upload/';
$_SESSION['_baseUrl1'] = $baseUrl1; 
?>
<script language="javascript">
	var _baseUrl1 = '../Scripts/';
</script>
<script src="../Scripts/ckeditor/ckeditor.js" type="text/javascript"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		mode : "exact",
        elements : "noidung_vi,noidung_en,mota_vi,mota_en",
		theme : "advanced",
		convert_urls : false,
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,imagemanager,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",
height:"300px",
    width:"100%",
	remove_script_host : false,

		// Theme options
		theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",		
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Style formats
		style_formats : [
			{title : 'Bold text', inline : 'b'},
			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
			{title : 'Example 1', inline : 'span', classes : 'example1'},
			{title : 'Example 2', inline : 'span', classes : 'example2'},
			{title : 'Table styles'},
			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
		],

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>

<h3>Sản phẩm</h3>
<script language="javascript">			
	function select_onchange()
	{		
		var b=document.getElementById("id_list");
		window.location ="index.php?com=product&act=<?php if($_REQUEST['act']=='edit') echo 'edit'; else echo 'add';?><?php if($_REQUEST['id']!='') echo"&id=".$_REQUEST['id']; ?>&id_list="+b.value;	
		return true;
	}

	
</script>

<script language="javascript">			
	function select_onchange2()
	{		
		var b=document.getElementById("id_list");
		var c=document.getElementById("id_cat");
		window.location ="index.php?com=product&act=<?php if($_REQUEST['act']=='edit') echo 'edit'; else echo 'add';?><?php if($_REQUEST['id']!='') echo"&id=".$_REQUEST['id']; ?>&id_list="+b.value+"&id_cat="+c.value;	;	
		return true;
	}

	
</script>
<?php
$str_phongcach='<select id="phong_cach" name="phong_cach" class="main_font">
		<option value="0">Chọn danh mục</option>
		';
$codien = ($item['phong_cach']=='co-dien')?'selected':'';
$hiendai = ($item['phong_cach']=='hien-dai')?'selected':'';
$sangtao = ($item['phong_cach']=='sang-tao')?'selected':'';
$sangtrong = ($item['phong_cach']=='sang-trong')?'selected':'';
$tretrung = ($item['phong_cach']=='tre-trung')?'selected':'';
    $str_phongcach.='<option value="co-dien" '.$codien.'>Cổ điển</option>';
    $str_phongcach.='<option value="hien-dai" '.$hiendai.'>Hiện đại</option>';
    $str_phongcach.='<option value="sang-tao" '.$sangtao.'>Sáng tạo</option>';
    $str_phongcach.='<option value="sang-trong" '.$sangtrong.'>Sang trọng</option>';
    $str_phongcach.='<option value="tre-trung" '.$tretrung.'>Trẻ trung</option>';
$str_phongcach.='</select>';
$str_xuatxu='<select id="xuat_xu" name="xuat_xu" class="main_font">
		<option value="0">Chọn danh mục</option>
		';
$chauau = ($item['xuat_xu']=='chau-au')?'selected':'';
$dailoan = ($item['xuat_xu']=='dai-loan')?'selected':'';
$duc = ($item['xuat_xu']=='duc')?'selected':'';
$hanquoc = ($item['xuat_xu']=='han-quoc')?'selected':'';
$italia = ($item['xuat_xu']=='italia')?'selected':'';
$malaysia = ($item['xuat_xu']=='malaysia')?'selected':'';
$nhatban = ($item['xuat_xu']=='nhat-ban')?'selected':'';
$trungquoc = ($item['xuat_xu']=='trung-quoc')?'selected':'';
$vietnam = ($item['xuat_xu']=='viet-nam')?'selected':'';
$str_xuatxu.='<option value="chau-au" '.$chauau.'>Châu Âu</option>';
$str_xuatxu.='<option value="dai-loan" '.$dailoan.'>Đài Loan</option>';
$str_xuatxu.='<option value="duc" '.$duc.'>Đức</option>';
$str_xuatxu.='<option value="han-quoc" '.$hanquoc.'>Hàn Quốc</option>';
$str_xuatxu.='<option value="italia" '.$italia.'>Italia</option>';
$str_xuatxu.='<option value="malaysia" '.$malaysia.'>Malaysia</option>';
$str_xuatxu.='<option value="nhat-ban" '.$nhatban.'>Nhật Bản</option>';
$str_xuatxu.='<option value="trung-quoc" '.$trungquoc.'>Trung Quốc</option>';
$str_xuatxu.='<option value="viet-nam" '.$vietnam.'>Việt Nam</option>';
$str_xuatxu.='</select>';
$str_tinhtrang='<select id="tinh_trang" name="tinh_trang" class="main_font">
		<option value="0">Chọn danh mục</option>
		';
$conhang = ($item['tinh_trang']=='Còn hàng')?'selected':'';
$hangsapve = ($item['tinh_trang']=='Hàng sắp về')?'selected':'';
$str_tinhtrang.='<option value="Còn hàng" '.$conhang.'>Còn hàng</option>';
$str_tinhtrang.='<option value="Hàng sắp về" '.$hangsapve.'>Hàng sắp về</option>';
$str_tinhtrang.='</select>';
function get_main_list()
{
	$sql="select * from table_product_list order by stt,id asc";
	$stmt=mysql_query($sql);
	$str='
		<select id="id_list" name="id_list" onchange="select_onchange()" class="main_font">
		<option value="0">Chọn danh mục</option>			
		';
	while ($row=@mysql_fetch_array($stmt)) 
	{
		if($row["id"]==(int)@$_REQUEST["id_list"])
			$selected="selected";
		else 
			$selected="";
		$str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';			
	}
	$str.='</select>';
	return $str;
}
	
	
	function get_main_cat()
	{
		$sql_huyen="select * from table_product_cat where id_list=".$_REQUEST['id_list']." order by id asc ";
		$result=mysql_query($sql_huyen);
		$str='
			<select id="id_cat" name="id_cat" onchange="select_onchange2()">
			<option value="0">Chọn danh mục</option>
			';
		while ($row_huyen=@mysql_fetch_array($result)) 
		{
			if($row_huyen["id"]==(int)@$_REQUEST["id_cat"])
				$selected="selected";
			else 
				$selected="";
			$str.='<option value='.$row_huyen["id"].' '.$selected.'>'.$row_huyen["ten_vi"].'</option>';			
		}
		$str.='</select>';
		return $str;
	}
	
	function get_main_loai()
	{
		$sql_loai="select * from table_product_item where id_list=".$_REQUEST['id_list']." and  id_cat=".$_REQUEST['id_cat']." order by stt desc ";
		$result=mysql_query($sql_loai);
		$str='
			<select id="id_item" name="id_item"  onchange="select_onchange3()" class="main_font">
			<option>Chọn danh mục</option>	
			';
		while ($row_loai=@mysql_fetch_array($result)) 
		{
			if($row_loai["id"]==(int)@$_REQUEST["id_item"])
				$selected="selected";
			else 
				$selected="";
			$str.='<option value='.$row_loai["id"].' '.$selected.'>'.$row_loai["ten_vi"].'</option>';			
		}
		$str.='</select>';
		return $str;
	}
?>
<?php
function get_main_list2($id_mau)
	{
		$sql="select * from table_tinloai2_2 order by stt,id asc";
		$stmt=mysql_query($sql);
		$str='
			<select id="id_mau" name="id_mau"  class="main_font">
			<option value="0">Chọn màu</option>			
			';
		while ($row=@mysql_fetch_array($stmt)) 
		{
			if($row["id"]==(int)$id_mau)
				$selected="selected";
			else 
				$selected="";
			$str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';			
		}
		$str.='</select>';
		return $str;
	}
function get_main_list22($id_mau)
	{
		$sql="select * from table_tinloai2_2 order by stt,id asc";
		$stmt=mysql_query($sql);
		$str='
			<select name=""  class="main_font chonmau_add">
			<option value="0">Chọn màu</option>			
			';
		while ($row=@mysql_fetch_array($stmt)) 
		{
			if($row["id"]==$id_mau)
				$selected="selected";
			else 
				$selected="";
			$str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';			
		}
		$str.='</select>';
		return $str;
	}
?>

<style>
	.dacdiem_goc,.hinh_goc,.hinhmau_goc {
		border:1px solid #ccc;
		width:95%;
		padding:1%;
		margin:1%;
		display:none;
	}
	.cac_dacdiem {
		
	}
	.moi_dacdiem,.moi_hinh,.moi_hinhmau {
		border:1px solid #ccc;
		margin:1%;
		padding:1%;
		display:block !important;
		position:relative;
	}
	.close_moi_dacdiem,.close_hinh,.close_hinhmau {
		
		position:absolute;
		top:0px;
		right:0px;
	}
	</style>
<script>
	$(document).ready(function(e) {
        $('#add_dacdiem').click(function(e) {
            	//alert('uuu');
				$(".dacdiem_goc").clone().appendTo(".cac_dacdiem");
				$(".cac_dacdiem").find('.dacdiem_goc').attr( "class", "moi_dacdiem" );
				$(".cac_dacdiem").find('.ten_dd').attr( "name", "ten_dacdiem[]" );
				$(".cac_dacdiem").find('.mota_dd').attr( "name", "mota_dacdiem[]" );
				$(".cac_dacdiem").find('.input_dd').attr( "name", "file_dacdiem[]" );
        });
		
		$('#add_hinh').click(function(e) {
            	//alert('uuu');
				$(".hinh_goc").clone().appendTo(".cac_hinh");
				$(".cac_hinh").find('.hinh_goc').attr( "class", "moi_hinh" );
				$(".cac_hinh").find('.input_dd').attr( "name", "file_hinh[]" );
        });
		
		$('#add_hinhmau').click(function(e) {
            	//alert('uuu');
				$(".hinhmau_goc").clone().appendTo(".cac_hinhmau");
				$(".cac_hinhmau").find('.hinhmau_goc').attr( "class", "moi_hinhmau" );
				$(".cac_hinhmau").find('.input_dd').attr( "name", "file_hinhmau[]" );
				$(".cac_hinhmau").find('.chonmau_add').attr( "name", "chon_mau[]" );
        });
		
    });
	$(document).on('click', '.close_moi_dacdiem,.close_hinh,.close_hinhmau', function() {
    		$(this).parent().remove();
	});

	</script> 
    
<form name="frm" method="post" action="index.php?com=product&act=save&curPage=<?=$_REQUEST['curPage']?>" enctype="multipart/form-data" class="nhaplieu">
    <b>Danh mục 1:</b><?=get_main_list();?><br /><br />
	<b>Danh mục 2:</b><?=get_main_cat();?><br /><br />
    <b>Danh mục 3:</b><?=get_main_loai();?><br /><br />


	<?php if ($_REQUEST['act']==edit)
	{?>
	<b>Hình hiện tại:</b><img src="<?=_upload_sanpham.$item['thumb']?>"  alt="NO PHOTO" /><br />
	<?php }?>
	<b>Hình đại diện:</b> <input type="file" name="file" /> <?=_product_type?><br /><br />
 
    <br /><br />   
    <b>Tên sản phẩm</b> <input type="text" name="ten_vi" value="<?=$item['ten_vi']?>" class="input" /><br /> 
    <b>Giá sản phẩm</b> <input type="text" name="gia"    value="<?=$item['gia']?>"    class="input" /><br />  
    <b>VAT</b> <input type="text" name="vat"    value="<?=$item['vat']?>"    class="input" /><br />  
    <b>Phí vận chuyển</b> <input type="text" name="phivanchuyen"    value="<?=$item['phivanchuyen']?>"    class="input" /><br />  
    <b>Giá khuyến mãi(nếu có)</b> <input type="text" name="giagiam"    value="<?=$item['giagiam']?>"    class="input" /><br />  
    <b>Mô tả ngắn</b>  <br /> 
   <textarea class="ckeditor" name="mota_vi"><?=$item['mota_vi']?></textarea> 
    <br />  
    <b>Mô tả ngắn thêm</b> <br /> 
    <textarea class="ckeditor"  name="mota_en" cols="80" rows="5" ><?=$item['mota_en']?>
    </textarea>
    <br />     
         
     

    
    <br /><br /> 
    <b>Thông số kỹ thuật </b><br/>
	<div>
	 <textarea class="ckeditor"  name="noidung_vi" id="noidung_vi"><?=$item['noidung_vi']?></textarea></div>
    <br /><br />  

    
    <b>Video hình</b> <input type="text" name="video_hinh" value="<?=$item['video_hinh']?>" class="input" /><br />
(mã sau v= của youtube)  	<br /><br />
     <br /><br /> 
     <b>Đánh giá chi tiết </b><br/>
	<div>
	 <textarea  class="ckeditor"  name="noidung_en" id="noidung_en"><?=$item['noidung_en']?></textarea></div>
    <br /><br />  
    <b>Số thứ tự</b> <input type="text" name="stt" value="<?=isset($item['stt'])?$item['stt']:1?>" style="width:30px"><br>
    <br />  
   	<b>Hiển thị</b> <input type="checkbox" name="hienthi" <?=(!isset($item['hienthi']) || $item['hienthi']==1)?'checked="checked"':''?>><br /> 
   	<b>Chính sách</b> <input type="checkbox" name="chinhsach" <?=(!isset($item['chinhsach']) || $item['chinhsach']==1)?'checked="checked"':''?>><br /> 
   	<b>Phong cách</b> <?php echo $str_phongcach;?><br><br>
   	<b>Xuất xứ</b><input type="text" name="xuat_xu" value="<?=$item['xuat_xu']?>" class="input" /><br><br>
   	<b>Nhà cung cấp</b><input type="text" name="nhacungcap" value="<?=$item['nhacungcap']?>" class="input" /><br><br>
   	<b>Tình trạng</b> <?php echo $str_tinhtrang;?><br><br>
	<input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
	<input type="submit" value="Lưu" class="btn" />
	<input type="button" value="Thoát" onclick="javascript:window.location='index.php?com=product&act=man'" class="btn" />
</form>