<h3><a href="index.php?com=tinloai1_4&act=add">Thêm tin danh muc</a>
        &nbsp;&nbsp;&nbsp;Danh mục cấp 1&nbsp;<?=get_main_category();?></h3>
<script language="javascript">	
	function select_onchange()
	{	
		var b=document.getElementById("id_list");
		window.location ="index.php?com=tinloai1_4&act=man&id_list="+b.value;	
		return true;
	}
	
	
</script>
<?php
function get_main_category()
	{
		$sql="select * from table_tinloai1_4_list order by stt asc,id desc";
		$stmt=mysql_query($sql);
		$str='
			<select id="id_list" name="id_list" onchange="select_onchange()" class="main_font">
			<option>Chọn danh mục</option>			
			';
		while ($row=@mysql_fetch_array($stmt)) 
		{
			if($row["id"]==(int)@$_REQUEST["id_list"])
				$selected="selected";
			else 
				$selected="";
			$str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten"].'</option>';			
		}
		$str.='</select>';
		return $str;
	}
	
	
?>

<form action="#" method="post" name="frmLIST_PRODUCT" id="frmLIST_PRODUCT">
<table class="blue_table">
	<tr>
		<th style="width:5%;">Số thứ tự</th>		
        <th style="width:15%;">Cấp 1</th>
		 <th style="width:30%;">Tên dịch vụ</th>                            
         <th style="width:15%;">Hình</th>      
        <th style="width:5%;">Hiển thị</th>
		<th style="width:5%;">Sửa</th>
		<th style="width:5%;">Xóa</th>
            <input name="ids" type="hidden" id="ids">
            <input name="mod" type="hidden" id="mod">
            <input name="strID" type="hidden" id="strID">
            <input name="txtLIST_ID" type="hidden" id="txtLIST_ID" value="<?=$_POST['txtLIST_ID']?>">
	</tr>
	<?php for($i=0, $count=count($items); $i<$count; $i++){?>
	<tr>
		<td style="width:5%;"> <a href="index.php?com=tinloai1_4&act=edit&id_list=<?=$items[$i]['id_list']?>&id_cat=<?=$items[$i]['id_cat']?>&id=<?=$items[$i]['id']?>&curPage=<?=$_REQUEST['curPage']?>" style="text-decoration:none;"><?=$items[$i]['stt']?></a></td>		      
        <td align="center" style="width:15%;">
        
		<?php
		$sql_danhmuc1="select ten from table_tinloai1_4_list where id='".$items[$i]['id_list']."'";
		$result=mysql_query($sql_danhmuc1);
	 	$item_danhmuc1 =mysql_fetch_array($result);
	 	echo @$item_danhmuc1['ten'];
		?>  
    
     </td>
	    
      <td align="center" style="width:35%;">
	 <a href="index.php?com=tinloai1_4&act=edit&id_list=<?=$items[$i]['id_list']?>&id_cat=<?=$items[$i]['id_cat']?>&id=<?=$items[$i]['id']?><?php if($_REQUEST['curPage']!='') echo'&curPage='. $_REQUEST['curPage'];?>" style="text-decoration:none;">
	  <?=$items[$i]['ten']?> 
      </a>      
      </td>                      
       
    
        
          
        
        <td align="center" style="width:15%;">
     <a href="index.php?com=tinloai1_4&act=edit&id_list=<?=$items[$i]['id_list']?>&id_cat=<?=$items[$i]['id_cat']?>&id=<?=$items[$i]['id']?><?php if($_REQUEST['curPage']!='') echo'&curPage='. $_REQUEST['curPage'];?>" style="text-decoration:none;">
	  <img src="../upload/tinloai1_4/<?=$items[$i]['photo']?>" height="80"  width="100"/>
      </a>      
        
        </td>
                
         
          <td style="width:5%;">
		<?php 
		if(@$items[$i]['hienthi']==1)
		{
		?>
        
        <a href="index.php?com=tinloai1_4&act=man&hienthi=<?=$items[$i]['id']?><?php if($_REQUEST['id_danhmuc']!='') echo'&id_danhmuc='. $_REQUEST['id_danhmuc'];?><?php if($_REQUEST['id_list']!='') echo'&id_list='. $_REQUEST['id_list'];?><?php if($_REQUEST['id_cat']!='') echo'&id_cat='. $_REQUEST['id_cat'];?><?php if($_REQUEST['curPage']!='') echo'&curPage='. $_REQUEST['curPage'];?>"><img src="media/images/active_1.png" border="0" /></a>
		<? 
		}
		else
		{
		?>
         <a href="index.php?com=tinloai1_4&act=man&hienthi=<?=$items[$i]['id']?><?php if($_REQUEST['id_danhmuc']!='') echo'&id_danhmuc='. $_REQUEST['id_danhmuc'];?><?php if($_REQUEST['id_list']!='') echo'&id_list='. $_REQUEST['id_list'];?><?php if($_REQUEST['id_cat']!='') echo'&id_cat='. $_REQUEST['id_cat'];?><?php if($_REQUEST['curPage']!='') echo'&curPage='. $_REQUEST['curPage'];?>"><img src="media/images/active_0.png"  border="0"/></a>
         <?php
		 }?>        </td>
         
         
		<td style="width:5%;"><a href="index.php?com=tinloai1_4&act=edit&id_danhmuc=<?=$items[$i]['id_danhmuc']?>&id_list=<?=$items[$i]['id_list']?>&id_cat=<?=$items[$i]['id_cat']?>&id_item=<?=$items[$i]['id_item']?>&id=<?=$items[$i]['id']?><?php if($_REQUEST['id_cat']!='') echo'&id_cat='. $_REQUEST['id_cat'];?><?php if($_REQUEST['curPage']!='') echo'&curPage='. $_REQUEST['curPage'];?>"><img src="media/images/edit.png" border="0" /></a></td>
		<td style="width:5%;"><a href="index.php?com=tinloai1_4&act=delete<?php if($_REQUEST['id_cat']!='') echo "&id_cat=".$_REQUEST['id_cat'];?><?php if($_REQUEST['curPage']!='') echo "&curPage=".$_REQUEST['curPage'];?>&id=<?=$items[$i]['id']?>" onClick="if(!confirm('Xác nhận xóa')) return false;"><img src="media/images/delete.png" border="0" /></a></td>
	</tr>
	<?php	}?>
</table>
</form>
<a href="index.php?com=tinloai1_4&act=add"><img src="media/images/add.jpg" border="0"  /></a>
<div class="paging"><?=$paging['paging']?></div>