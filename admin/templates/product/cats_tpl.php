<h3><a href="index.php?com=product&act=add_cat">Thêm danh mục</a></h3>
<table class="blue_table">
	<tr>
		<th style="width:5%;">Stt</th>	
        <th style="width:20%;">Danh mục</th>	      
        <th style="width:20%;">Tên tiếng việt</th>
        <th style="width:20%;">Tên tiếng anh</th>
        <th style="width:20%;">Loại hiển thị</th>
		<th style="width:5%;">Sửa</th>
		<th style="width:5%;">Xóa</th>
	</tr>
	<?php for($i=0, $count=count($items); $i<$count; $i++){?>
	<tr>
		<td style="width:5%;"><?=$items[$i]['stt']?></td>  
        <td style="width:20%;">
			  <?php
				$sql_danhmuc="select ten_vi from table_product_list where id='".$items[$i]['id_list']."'";
				$result=mysql_query($sql_danhmuc);
				$item_danhmuc =mysql_fetch_array($result);
				echo @$item_danhmuc['ten_vi']
			?>      
        </td>      	      
		<td style="width:20%;"><a href="index.php?com=product&act=edit_cat&id_list=<?=$items[$i]['id_list']?>&id=<?=$items[$i]['id']?>&curPage=<?=$_REQUEST['curPage']?>" style="text-decoration:none;"><?=$items[$i]['ten_vi']?> </a></td>
        <td style="width:20%;"><a href="index.php?com=product&act=edit_cat&id_list=<?=$items[$i]['id_list']?>&id=<?=$items[$i]['id']?>&curPage=<?=$_REQUEST['curPage']?>" style="text-decoration:none;"><?=$items[$i]['ten_en']?> </a></td>
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
		<td style="width:5%;"><a href="index.php?com=product&act=edit_cat&id_list=<?=$items[$i]['id_list']?>&id=<?=$items[$i]['id']?>"><img src="media/images/edit.png" border="0" /></a></td>
		<td style="width:5%;"><a href="index.php?com=product&act=delete_cat&id=<?=$items[$i]['id']?>" onClick="if(!confirm('Xác nhận xóa')) return false;"><img src="media/images/delete.png" border="0" /></a></td>
	</tr>
	<?php	}?>
</table>
<a href="index.php?com=product&act=add_cat"><img src="media/images/add.jpg" border="0"  /></a>

<div class="paging"><?=$paging['paging']?></div>