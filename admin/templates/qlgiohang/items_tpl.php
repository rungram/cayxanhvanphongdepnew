<?php
function get_status($idstatus , $id = 0)
{
        $sql="select * from table_donhang_trangthai order by id";
        $stmt=mysql_query($sql);
        $str='
                <select id="'.$id.'" onchange="select_onchangestatus(this.value,this.id)" name="trangthai" class="main_font">               
                ';
        while ($row=@mysql_fetch_array($stmt)) 
        {
                if($row["id"]==(int)@$idstatus)
                        $selected="selected";
                else 
                        $selected="";
                $str.='<option value='.$row["id"].' '.$selected.'>'.$row["tentrangthai"].'</option>';                 
        }
        $str.='</select>';
        return $str;
}
?>
<script language="javascript">  
        function select_onchangestatus(vl,id)
        {       
                var b=document.getElementById("id_list");
                window.location ="index.php?com=qlgiohang&act=status&id="+id+"&keyword="+vl;   
                return true;
        }
        
</script>
<form action="#" method="post" name="frmLIST_PRODUCT" id="frmLIST_PRODUCT">
<table class="blue_table">
	<tr>
		<th style="width:5%;">Số thứ tự</th>
                <th style="width:10%;">Trạng thái</th>		
        <th style="width:10%;">Tên người đặt hàng</th>
		<th style="width:10%;">Điện thoại</th>
		<th style="width:10%;">Email</th>                           
        <th style="width:15%;">Địa chỉ</th>       
        <th style="width:10%;">Tên mặt hàng</th>
		<th style="width:5%;">Hình</th>
        <th style="width:10%;">Giá</th>
        <th style="width:5%;">Số lượng</th>
        <th style="width:5%;">Tổng giá</th>
        <th style="width:10%;">Ngày đặt</th>
		<th style="width:5%;">Xóa</th>
         
	</tr>
	<?php $stt=1;for($i=0, $count=count($items); $i<$count; $i++){?>
	<tr>
		<td style="width:5%;"><?=$stt++?></td>
        <td style="width:10%;"><?=get_status($items[$i]['trangthai'] , $items[$i]['id']);?></td>
        <td style="width:10%;"><?=$items[$i]['tennguoidat']?></td>
        <td style="width:10%;"><?=$items[$i]['dienthoai']?></td>	
        <td style="width:10%;"><?=$items[$i]['email']?></td>	
        <td style="width:15%;"><?=$items[$i]['diachi']?></td>	
        <td style="width:10%;"><?=$items[$i]['tenmathang']?></td>	
        <td style="width:10%;"><img src="<?=_upload_sanpham.$items[$i]['hinh']?>"  width="90" height="80"  /></td>	
        <td style="width:5%;"><?=$items[$i]['giamathang']?></td>
        <td style="width:5%;"><?=$items[$i]['soluong']?></td>	
        <td style="width:10%;"><?=$items[$i]['tonggia']?></td>		
        <td style="width:5%;"><?=$items[$i]['ngaydathang']?></td>	      
       
  
		<td style="width:5%;"><a href="index.php?com=qlgiohang&act=delete&id=<?=$items[$i]['id']?>" onClick="if(!confirm('Xác nhận xóa')) return false;"><img src="media/images/delete.png" border="0" /></a></td>
	</tr>
	<?php	}?>
</table>
</form>

<div class="paging"><?=$paging['paging']?></div>