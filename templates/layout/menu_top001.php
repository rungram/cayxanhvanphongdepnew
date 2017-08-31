<?php
	
	$d->reset();
	$sql_list ="select *  from #_product_list order by stt asc limit 0,5";
	$d->query($sql_list);
	$list =$d->result_array();
				
?>

<script type="text/javascript" src="js/ddsmoothmenu.js"></script>
<link href="ddsmoothmenu.css" rel="stylesheet" type="text/css" />
<!--MENU TOP CO XO CAP JS-->
<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "smoothmenu1", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>
<!--MENU TOP CO XO CAP JS-->
<style>
.nn a{
	padding:0px !important;
	margin:0px !important;
	
	margin:5px !important;
}

.header-login{
	margin-bottom:5px;
	font-size:12px;
	
}
.header-login ul{
	text-align: right;
}
.header-login ul li{
	display: inline-block;
	margin-left: 5px;
	font-size: 12px;
	line-height: 25px;
	color: #999999;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	-o-border-radius: 4px;
	-ms-border-radius: 4px;
	height:15px !important;
	border-radius: 4px;
}
.header-login ul li a{
	display: block;
	font-size: 11px;
	line-height: 25px;
	color: #999999;
	padding:0px 10px;
	-webkit-transition:all 0.5s ease;
	-moz-transition:all 0.5s ease;
	-o-transition:all 0.5s ease;
	transition:all 0.5s ease;
	text-transform:none;
}
.header-login ul li:hover{
	color:#000000;
}
.header-login ul li:hover a{
	color:#000000;
}
.header-login ul li a.dangnhap{
	padding-left: 28px;
	background: url(images/icon-login2.png) no-repeat 5px 50%;
}
.header-login ul li a.dangky{
	padding-left: 28px;
	background: url(images/icon-register2.png) no-repeat 5px 50%;
}
.header-login ul li a.dangtaisan{
	padding-left: 28px;
	background: url(images/icon-post2.png) no-repeat 5px 50%;
}

</style>
<div id="smoothmenu1" class="ddsmoothmenu">
<div class="header-login ">
<ul>


             <?php
			 if(!$_SESSION['user_dn'])
			 {
				 ?>
                        
    <li><a class="dangnhap" href="dang-nhap.html" title="Đăng nhập">Đăng nhập</a></li>
	<li><a class="dangky" href="dang-ky.html" title="Đăng ký">Đăng ký</a></li>
	<li><a class="dangtaisan" href="gio-hang.html" title="Giỏ hàng">Giỏ hàng của bạn</a></li>
             	<?php
			 }
			 else
			  {
				 ?>
                 <li><a class="dangtaisan" href="quan-ly-tai-khoan.html" title="Quản lý tài khoản">Quản lý tài khoản</a></li>
                 <li>Xin chào : <?=$_SESSION['user_dn']?></li>
                 <li><a href="thoat.html"><b>Thoát</b></a></li>
                 
   				
             	<?php
			 }
			 ?>
             
             
	
</ul>
<div class="clear"></div>
</div>
<ul>
 
 <?php for($i=0,$count_l=count($list);$i<$count_l;$i++){
			  
			  $d->reset();
			  $sql_cat ="select *  from #_product_cat where id_list='".$list[$i]["id"]."' order by stt asc";
			  $d->query($sql_cat);
			  $cat =$d->result_array();
			  ?>
            <li> <a href="danh-muc/<?=$list[$i]["tenkhongdau"]?>-<?=$list[$i]["id"]?>.html" title="<?=$list[$i]["ten_vi"]?>"> <?=$list[$i]["ten_vi"]?></a>
            
            <ul>
            
            <?php for($j=0,$count_c=count($cat);$j<$count_c;$j++){ 
				  $d->reset();
				  $sql_item ="select *  from #_product_item where id_list='".$list[$i]["id"]."' and  id_cat='".$cat[$j]["id"]."' order by stt asc";
				  $d->query($sql_item);
				  $item =$d->result_array();
			?>
				<li><a href="danh-muc-cat/<?=$cat[$j]["tenkhongdau"]?>-<?=$cat[$j]["id"]?>.html" title="<?=$cat[$j]["ten_vi"]?>"><?=$cat[$j]["ten_vi"]?></a>
                <ul>
                  <?php for($k=0,$count_i=count($item);$k<$count_i;$k++){ ?>
                	<li><a href="danh-muc-item/<?=$item[$k]["tenkhongdau"]?>-<?=$item[$k]["id"]?>.html" title="<?=$item[$k]["ten_vi"]?>"><?=$item[$k]["ten_vi"]?></a></li>
                  <?php }?> 
                </ul>
                
                
                </li> 
              <?php }?>
            
            </ul>
            
            </li>

		<?php }?>
         <li> <a href="gioi-thieu.html" title="Giới thiệu"><i class="fi fi-hoidap"></i>Giới thiệu</a> </li> 
         <li> <a href="tuyen-dung.html" title="Tuyển dụng"><i class="fi fi-xahang"></i>Tuyển dụng</a> </li> 
         <li> <a href="lien-he.html" title="Liên hệ"><i class="fi fi-khuyenmai"></i> Liên hệ</a> </li> 
</ul>

</div>

