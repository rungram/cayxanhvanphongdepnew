<h3>        </h3>
<script language="javascript">	
	function select_onchange()
	{	
		var b=document.getElementById("id_list");
		window.location ="index.php?com=tinloai1_3&act=man&id_list="+b.value;	
		return true;
	}
	
	
</script>
<?php
function get_main_category()
	{
		$sql="select * from table_tinloai1_3_list order by stt asc,id desc";
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
			$str.='<option value='.$row["id"].' '.$selected.'>'.$row["ten_vi"].'</option>';			
		}
		$str.='</select>';
		return $str;
	}
	
	
?>

<form action="#" method="post" name="frmLIST_PRODUCT" id="frmLIST_PRODUCT">
<table class="blue_table">
	<tr>
       
		<th style="width:20%;">Nội dung </th>                           
        <th style="width:20%;">Nội dung tiếng anh</th>
		<th style="width:5%;">Sửa</th>
            <input name="ids" type="hidden" id="ids">
            <input name="mod" type="hidden" id="mod">
            <input name="strID" type="hidden" id="strID">
            <input name="txtLIST_ID" type="hidden" id="txtLIST_ID" value="<?=$_POST['txtLIST_ID']?>">
	</tr>
	<?php for($i=0, $count=count($items); $i<$count; $i++){?>
	<tr>
      <td align="center" style="width:20%;">
	 <a href="index.php?com=tinloai1_3&act=edit&id_list=<?=$items[$i]['id_list']?>&id_cat=<?=$items[$i]['id_cat']?>&id=<?=$items[$i]['id']?><?php if($_REQUEST['curPage']!='') echo'&curPage='. $_REQUEST['curPage'];?>" style="text-decoration:none;">
	  <?=$items[$i]['noidung_vi']?> 
      </a>      
      </td>   
      <td align="center" style="width:20%;">
	 <a href="index.php?com=tinloai1_3&act=edit&id_list=<?=$items[$i]['id_list']?>&id_cat=<?=$items[$i]['id_cat']?>&id=<?=$items[$i]['id']?><?php if($_REQUEST['curPage']!='') echo'&curPage='. $_REQUEST['curPage'];?>" style="text-decoration:none;">
	  <?=$items[$i]['noidung_en']?> 
      </a>      
      </td>                   
        
          
        
                
		<td style="width:5%;"><a href="index.php?com=tinloai1_3&act=edit&id_danhmuc=<?=$items[$i]['id_danhmuc']?>&id_list=<?=$items[$i]['id_list']?>&id_cat=<?=$items[$i]['id_cat']?>&id_item=<?=$items[$i]['id_item']?>&id=<?=$items[$i]['id']?><?php if($_REQUEST['id_cat']!='') echo'&id_cat='. $_REQUEST['id_cat'];?><?php if($_REQUEST['curPage']!='') echo'&curPage='. $_REQUEST['curPage'];?>"><img src="media/images/edit.png" border="0" /></a></td>
	</tr>
	<?php	}?>
</table>
</form>
<div class="paging"><?=$paging['paging']?></div>