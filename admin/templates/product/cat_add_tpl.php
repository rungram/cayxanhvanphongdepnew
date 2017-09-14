<?php
$baseUrl1 = '../Scripts/ckeditor_upload/';
$_SESSION['_baseUrl1'] = $baseUrl1; 
?>
<script language="javascript">
	var _baseUrl1 = '../Scripts/';
</script>
<script src="../Scripts/ckeditor/ckeditor.js" type="text/javascript"></script>
<?php
function get_main_category()
	{
		$sql="select * from table_product_list order by stt";
		$stmt=mysql_query($sql);
		$str='
			<select id="id_list" name="id_list" onchange="select_onchange1()" class="main_font">
			<option>Chọn danh mục</option>			
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
<h3>Thêm hãng</h3>
<form name="frm" method="post" action="index.php?com=product&act=save_cat" enctype="multipart/form-data" class="nhaplieu">	
    <b>Danh mục :</b><?=get_main_category();?><br /><br />
    <b>Tên tiếng việt</b> <input type="text" name="ten_vi" value="<?=$item['ten_vi']?>" class="input" /><br /><br>
    <b>Tên tiếng anh</b> <input type="text" name="ten_en" value="<?=$item['ten_en']?>" class="input" /><br /><br>
  	 <b>Mô tả</b> <br /> 
    <textarea class="ckeditor" name="mota_vi" cols="80" rows="5" ><?=@$item['mota_vi']?></textarea><br /><br>
    <b>Số thứ tự</b> <input type="text" name="stt" value="<?=isset($item['stt'])?$item['stt']:1?>" style="width:30px"><br /><br>
    <b>Link video:</b> <input type="text" name="url" value="<?=$item['url']?>" class="input" /><br /><br />
    <b>Nổi bật</b> <input type="checkbox" name="noibat" <?=(!isset($item['noibat']) || $item['noibat']==1)?'checked="checked"':''?>><br />
	<b>Hiển thị</b> <input type="checkbox" name="hienthi" <?=(!isset($item['hienthi']) || $item['hienthi']==1)?'checked="checked"':''?>><br />
	<b>Loại menu</b>
	<select name="menutype" id="menutype" class="main_font">
	<?php 
		if($item['menutype']==2)
		{
	?>
		<option value="1">Dịch vụ</option>	
		<option value="2" selected="selected">Sản phẩm</option>
	<?php
		}
		else 
		{
	?>
		<option value="1">Dịch vụ</option>		
		<option value="2">Sản phẩm</option>
	<?php	
		}
	?>	
	</select><br/>
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
	<input type="button" value="Thoát" onclick="javascript:window.location='index.php?com=product&act=man_cat'" class="btn" />
</form>