<h3><a href="index.php?com=about_list&act=add">Thêm giới thiệu</a></h3>
<table class="blue_table">
	<tr>
		<th style="width:5%;">STT</th>
		<th style="width:20%;">Tên tiếng Việt</th>	
		<th style="width:20%;">Tên tiếng Anh</th>	
		<th style="width:5%;">Hiển thị</th>
		<th style="width:5%;">Sửa</th>
		<th style="width:5%;">Xóa</th>
	</tr>
	<?php for($i=0, $count=count($items); $i<$count; $i++){?>
	<tr>
		<td style="width:5%;"><?=$items[$i]['stt']?></td>
		<td align="center" style="width:20%;"><?=$items[$i]['ten_vi']?> </td>
		<td align="center" style="width:20%;"><?=$items[$i]['ten_en']?> </td>				
		<td style="width:5%;">
		
        <?php 
		if(@$items[$i]['hienthi']==1)
		{
        $hienthi = '<a href="index.php?com=about_list&act=man_list&hienthi='.$items[$i]['id'].'"><img src="media/images/active_1.png"  border="0"/></a>';
		
		}
		else
		{
		   $hienthi = '<a href="index.php?com=about_list&act=man_list&hienthi='.$items[$i]['id'].'"><img src="media/images/active_0.png"  border="0"/></a>';
         
		 }?>
        
        <?php echo $hienthi;?>
        
        </td>
		<td style="width:5%;"><a href="index.php?com=about_list&act=capnhat&id=<?=$items[$i]['id']?>"><img src="media/images/edit.png" border="0" /></a></td>
		<td style="width:5%;"><a href="index.php?com=about_list&act=delete&id=<?=$items[$i]['id']?>" onClick="if(!confirm('Xác nhận xóa')) return false;"><img src="media/images/delete.png" border="0" /></a></td>
	</tr>
	<?php	}?>
</table>

<a href="index.php?com=about_list&act=add"><img src="media/images/add.jpg" border="0"  /></a>
<div class="paging"><?=$paging['paging']?></div>