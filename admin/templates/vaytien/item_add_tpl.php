<table class="blue_table">
	<tr>
		<th style="width:6%;">Stt</th>
		<th style="width:32%;">Thông tin người vay </th>
		<th style="width:30%;">Thông tin khoản vay</th>
        <th style="width:32%;">Thông tin tài sản thế chấp </th>
	</tr>
	<?php for($i=0, $count=count($items); $i<$count; $i++)
	{
	?>
	<tr>
		<td style="width:6%;"><?=$i+1?></td>
        <td style="width:20%;">
            Tên        : <?=$items[$i]['Ten']?><br/>
            Điện thoại : <?=$items[$i]['DienThoai']?><br/>
            Email      : <?=$items[$i]['Email']?><br/>
            Tỉnh Thành : <?=$items[$i]['TinhThanh']?><br/>
        </td>
         <td style="width:20%;">
            Số tiền vay  : <?php echo number_format($items[$i]['SoTienVay'],0,",",".");?>&nbsp;vnđ<br/>
            Thời hạn vay : <?=$items[$i]['ThoiHanVay']?> ngày<br/>
         </td>
		<td style="width:20%;">
		    Tài sản thế chấp : <?=$items[$i]['TaiSanTheChap']?><br/>
		    Thương hiệu      : <?=$items[$i]['ThuongHieu']?><br/>
		    Năm sản xuất     : <?=$items[$i]['NamSanXuat']?><br/>
		    Mô tả tài sản    : <?=$items[$i]['MoTaTaiSan']?><br/>
		</td>
	</tr>
	<?php	}?>
</table>
<div class="paging"><?=$paging['paging']?></div>