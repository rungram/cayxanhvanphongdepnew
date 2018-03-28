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

<h3>Tin tức</h3>
<script language="javascript">			
	function select_onchange()
	{		
		var b=document.getElementById("id_list");
		window.location ="index.php?com=tinloai1_1&act=<?php if($_REQUEST['act']=='edit') echo 'edit'; else echo 'add';?><?php if($_REQUEST['id']!='') echo"&id=".$_REQUEST['id']; ?>&id_list="+b.value;	
		return true;
	}

	
</script>


<script language="javascript">			
	function select_onchange2()
	{		
		var b=document.getElementById("id_list");
		window.location ="index.php?com=tinloai1_1&act=<?php if($_REQUEST['act']=='edit') echo 'edit'; else echo 'add';?><?php if($_REQUEST['id']!='') echo"&id=".$_REQUEST['id']; ?>&id_list="+b.value	;	
		return true;
	}

	
</script>


<?php
function get_main_list()
	{
		$sql="select * from table_tinloai1_1_list order by stt,id desc";
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
?>

<form name="frm" method="post" action="index.php?com=tinloai1_1&act=save&curPage=<?=$_REQUEST['curPage']?>" enctype="multipart/form-data" class="nhaplieu">
    <b>Danh mục cấp 1:</b><?=get_main_list();?><br /><br />
    <?php if ($_REQUEST['act']==edit)
	{?>
	<b>Hình hiện tại:</b><img src="<?=_upload_tinloai1_1.$item['thumb']?>"  width="120" alt="NO PHOTO" /><br />
	<?php }?>
	<b>Hình ảnh:</b> <input type="file" name="file" /> <?=_tinloai1_1_type?><br />
    <br />
    <b>Tiêu đề</b> <input type="text" name="ten_vi" value="<?=$item['ten_vi']?>" class="input" /><br />   
    <b>Tiêu đề tiếng anh</b> <input type="text" name="ten_en" value="<?=$item['ten_en']?>" class="input" /><br />     
    <b>Tóm tắt </b> <br/>
    <textarea class="ckeditor"  name="mota_vi" cols="100" rows="6" class="input"><?=$item['mota_vi']?>
    </textarea>
    <br />    
    <b>Tóm tắt tiếng anh </b> <br/>
    <textarea class="ckeditor"  name="mota_en" cols="100" rows="6" class="input"><?=$item['mota_en']?>
    </textarea>
    <br />      
  <b>Nội dung </b><br/>
	<div>
	 <textarea class="ckeditor"  name="noidung_vi" id="noidung_vi"><?=$item['noidung_vi']?></textarea></div>
    <br /> 
  <b>Nội dung tiếng anh</b><br/>
	<div>
	 <textarea class="ckeditor"  name="noidung_en" id="noidung_en"><?=$item['noidung_en']?></textarea></div>
    <br />    
    <b>Số thứ tự</b> <input type="text" name="stt" value="<?=isset($item['stt'])?$item['stt']:1?>" style="width:30px"><br>
    <br />  
   	<b>Hiển thị</b> <input type="checkbox" name="hienthi" <?=(!isset($item['hienthi']) || $item['hienthi']==1)?'checked="checked"':''?>><br /> 
	
	<b>Dịch vụ</b> <input type="checkbox" name="dichvu" <?=($item['dichvu']==1)?'checked="checked"':''?>><br /> 
	<b>Hướng dẫn</b> <input type="checkbox" name="huongdan" <?=($item['huongdan']==1)?'checked="checked"':''?>><br /> 
	<b>Công ty</b> <input type="checkbox" name="congty" <?=($item['congty']==1)?'checked="checked"':''?>><br /> 
	<b>Menu right</b> <input type="checkbox" name="menuright" <?=($item['menuright']==1)?'checked="checked"':''?>><br /> 
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
	<input type="button" value="Thoát" onclick="javascript:window.location='index.php?com=tinloai1_1&act=man'" class="btn" />
</form>