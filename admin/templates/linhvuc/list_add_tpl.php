<?php
$baseUrl1 = '../Scripts/ckeditor_upload/';
$_SESSION['_baseUrl1'] = $baseUrl1; 
?>
<script language="javascript">
	var _baseUrl1 = '../Scripts/';
</script>
<script src="../Scripts/ckeditor/ckeditor.js" type="text/javascript"></script>
<h3>Thêm danh mục</h3>
<form name="frm" method="post" action="index.php?com=linhvuc&act=save_list" enctype="multipart/form-data" class="nhaplieu">	    	    
    <b>Tên danh mục</b> <input type="text" name="ten_vi" value="<?=@$item['ten_vi']?>" class="input" /><br /><br>
    <b>Class icon desktop</b> <input type="text" name="ten_en" value="<?=@$item['ten_en']?>" class="input" /><br /><br>
    <?php 
    if ($_REQUEST['act']=='edit_list')
	{
	?>
	<b>Hình hiện tại:</b><img src="<?=_upload_linhvuc.$item['thumb']?>"  alt="NO PHOTO" /><br />
	<?php }?>
	<b>Hình đại diện:</b> <input type="file" name="file" /> <?=_product_type?><br /><br />
    <b>Liên kết ngoài</b> <input type="text" name="ten_cn" value="<?=@$item['ten_cn']?>" class="input" /><br /><br>
    <b>Mô tả</b> <br /> 
    <textarea class="ckeditor" name="mota_vi" cols="80" rows="5" ><?=@$item['mota_vi']?></textarea><br /><br>
    <b>Nội dung</b> <br /> 
    <textarea class="ckeditor" name="noidung_vi" cols="80" rows="5" ><?=@$item['noidung_vi']?></textarea><br /><br>
    <b>Số thứ tự</b> <input type="text" name="stt" value="<?=isset($item['stt'])?$item['stt']:1?>" style="width:30px"><br>
<b>Nổi bật</b> <input type="checkbox" name="noibat" <?=(!isset($item['noibat']) || $item['noibat']==1)?'checked="checked"':''?>><br />
	<b>Hiển thị</b> <input type="checkbox" name="hienthi" <?=(!isset($item['hienthi']) || $item['hienthi']==1)?'checked="checked"':''?>><br />
	<b>Lĩnh vực</b> <input type="checkbox" name="linhvuc" <?=(!isset($item['linhvuc']) || $item['linhvuc']==1)?'checked="checked"':''?>><br />
	<b>Tài sản</b> <input type="checkbox" name="taisan" <?=(!isset($item['taisan']) || $item['taisan']==1)?'checked="checked"':''?>><br />
	<input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
	<input type="submit" value="Lưu" class="btn" />
	<input type="button" value="Thoát" onclick="javascript:window.location='index.php?com=linhvuc&act=man_linhvuc'" class="btn" />
</form>