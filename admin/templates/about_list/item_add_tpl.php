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
        elements : "noidung_vi,noidung_en,noidung_cn",
		theme : "advanced",
		convert_urls : false,
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,imagemanager,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",
height:"350px",
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

<h3>Giới thiệu</h3>
<form name="frm" method="post" action="index.php?com=about_list&act=save" enctype="multipart/form-data" class="nhaplieu">      
	
  <b>Tên</b> <input type="text" name="ten_vi" value="<?=$item['ten_vi']?>" class="input" /><br /><br>
  <b>Tên tiếng anh</b> <input type="text" name="ten_en" value="<?=$item['ten_en']?>" class="input" /><br /><br>
 <?php 
 if ($_REQUEST['act']=="capnhat")
	{  
	?>
	<b>Hình hiện tại:</b><img src="<?=_upload_gioithieu.$item['thumb']?>"  width="120" alt="NO PHOTO" /><br />
	<?php }?>
	<b>Hình ảnh:</b> <input type="file" name="file" /><br />
    <br />
 <b>Nội dung</b> <br /> 
    <textarea class="ckeditor" id="noidung_vi"  name="noidung_vi" cols="80" rows="5" ><?php echo (!empty($item['noidung_vi'])?$item['noidung_vi']:"")?>
    </textarea>
    <br /> 
     
 <b>Nội dung tiếng anh</b> <br /> 
    <textarea class="ckeditor" id="noidung_en"  name="noidung_en" cols="80" rows="5" ><?php echo (!empty($item['noidung_en'])?$item['noidung_en']:"")?>
    </textarea>
    <br />  
     
    
	<b>Trang chủ</b> <input type="checkbox" name="trangchu" <?=(!isset($item['trangchu']) || $item['trangchu']==1)?'checked="checked"':''?>><br /> 
	<b>Trang con</b> <input type="checkbox" name="trangcon" <?=(!isset($item['trangcon']) || $item['trangcon']==1)?'checked="checked"':''?>><br /> 
	<b>Hiển thị</b> <input type="checkbox" name="hienthi" <?=(!isset($item['hienthi']) || $item['hienthi']==1)?'checked="checked"':''?>><br /> 
	<b>Chọn ngôn ngữ</b>  
    <select id="hienngonngu" name="hienngonngu" class="main_font">
    <?php
    if((int)$item["hienngonngu"]==1) 
    {
    ?>
        <option value="3">Cả hai</option>
        <option value="1" selected>Tiếng Việt</option>
        <option value="2">Tiếng Anh</option>
    <?php 
    }
    ?>
    <?php
    if((int)$item["hienngonngu"]==2) 
    {
    ?>
        <option value="3">Cả hai</option>
        <option value="1">Tiếng Việt</option>
        <option value="2" selected>Tiếng Anh</option>
    <?php 
    }
    ?>
    <?php
    if((int)$item["hienngonngu"]==3) 
    {
    ?>
        <option value="3" selected>Cả hai</option>
        <option value="1">Tiếng Việt</option>
        <option value="2">Tiếng Anh</option>
    <?php 
    }
    ?>
    <?php
    if(!isset($item['hienngonngu'])) 
    {
    ?>
        <option value="3" selected>Cả hai</option>
        <option value="1">Tiếng Việt</option>
        <option value="2">Tiếng Anh</option>
    <?php 
    }
    ?>
	</select>
	<br /><br />
	<input type="hidden" name="id" id="id" value="<?=@$item['id']?>" />
	<input type="submit" value="Lưu" class="btn" />
	<input type="button" value="Thoát" onclick="javascript:window.location='index.php?com=about&act=capnhat'" class="btn" />
</form>