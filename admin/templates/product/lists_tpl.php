<h3><a href="index.php?com=product&act=add_list">Thêm danh mục</a></h3>
<table class="blue_table">
	<tr>
		<th style="width:5%;">STT</th>
		<th style="width:20%;">Tên tiếng việt</th>
		<th style="width:20%;">Tên tiếng anh</th>
        <th style="width:20%;">Loại hiển thị</th>
		<th style="width:5%;">Hiển thị</th>
		<th style="width:5%;">Sửa</th>
		<th style="width:5%;">Xóa</th>
	</tr>
	<?php for($i=0, $count=count($items); $i<$count; $i++){?>
	<tr>
		<td style="width:5%;"><?=$items[$i]['stt']?></td>
		<td align="center" style="width:20%;"><?=$items[$i]['ten_vi']?> </td>		
        <td align="center" style="width:20%;"><?=$items[$i]['ten_en']?> </td>		
 		<td align="center" style="width:20%;"> 
 		<?php
 		if($items[$i]['hienngonngu']==1)
 		{
 		    echo "Tiếng việt";
 		} 
 		elseif($items[$i]['hienngonngu']==2)
 		{
 		    echo "Tiếng anh";
 		}
 		else
 		{
 		    echo "2 ngôn ngữ";
 		}
 		?>
 		</td>		
		<td style="width:5%;">
		
        <?php 
		if(@$items[$i]['hienthi']==1)
		{
        $hienthi = '<a href="index.php?com=product&act=man_list&hienthi='.$items[$i]['id'].'"><img src="media/images/active_1.png"  border="0"/></a>';
		
		}
		else
		{
		   $hienthi = '<a href="index.php?com=product&act=man_list&hienthi='.$items[$i]['id'].'"><img src="media/images/active_0.png"  border="0"/></a>';
         
		 }?>
        
        <?php echo $hienthi;?>
        
        
        
        </td>
		<td style="width:5%;"><a href="index.php?com=product&act=edit_list&id=<?=$items[$i]['id']?>"><img src="media/images/edit.png" border="0" /></a></td>
		<td style="width:5%;"><a href="index.php?com=product&act=delete_list&id=<?=$items[$i]['id']?>" onClick="if(!confirm('Xác nhận xóa')) return false;"><img src="media/images/delete.png" border="0" /></a></td>
	</tr>
	<?php	}?>
</table>

<a href="index.php?com=product&act=add_list"><img src="media/images/add.jpg" border="0"  /></a>
<div class="paging"><?=$paging['paging']?></div>