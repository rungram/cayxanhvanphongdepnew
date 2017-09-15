<h3>Thêm danh mục</h3>
<form name="frm" method="post" action="index.php?com=tinloai1_1&act=save_list" enctype="multipart/form-data" class="nhaplieu">	    	    
    <b>Tên tiếng Việt</b> <input type="text" name="ten_vi" value="<?=@$item['ten_vi']?>" class="input" /><br /><br>
    <b>Tên tiếng Anh</b> <input type="text" name="ten_en" value="<?=@$item['ten_en']?>" class="input" /><br /><br>
    <b>Số thứ tự</b> <input type="text" name="stt" value="<?=isset($item['stt'])?$item['stt']:1?>" style="width:30px"><br>

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
	<input type="button" value="Thoát" onclick="javascript:window.location='index.php?com=tinloai1_1&act=man_list'" class="btn" />
</form>