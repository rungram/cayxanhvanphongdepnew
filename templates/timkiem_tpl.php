<?php	if(!defined('_source')) die("Error");
		
	if(isset($_GET['keyword'])){
		$tukhoa =	$_GET['keyword'];
		$tukhoa = trim(strip_tags($tukhoa));		
		if (get_magic_quotes_gpc()==false) {
			$tukhoa = mysql_real_escape_string($tukhoa);			
		}				 
		// cac tin tuc
		$sql_timkiem = "select * from #_product where (ten_vi LIKE '%$tukhoa%') and hienthi=1 order by stt asc";		
		$d->query($sql_timkiem);
		$result_spnam = $d->result_array(); 
		
		$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
		$url=getCurrentPageURL();
		$maxR=30;
		$maxP=5;
		$paging=paging_home($result_spnam, $url, $curPage, $maxR, $maxP);
		$result_spnam=$paging['source'];
		
		$total_sp = count($result_spnam);
	} 
?>
<script>
function orderajax(){
	var order =	$('#orderby').val();
	var phongcach =	$('#phongcach').val();
	var xuatxu =	$('#xuatxu').val();
	var tukhoa = "<?php echo $tukhoa;?>";
	$.ajax({
		url	 : "timkiem_ajax_tpl.php",
		type	: "POST",
		data	: {tukhoa: tukhoa, order: order ,phongcach: phongcach ,xuatxu: xuatxu},
		success : function(data) {
			$(".products").html(data);
			}
		 });
};
$(document).ready(function() {
	$(".vungphongcach").on('click', '.check', function(e) {
		$(this).parents('.vungphongcach').find(".active").removeClass("active");
		$(this).find(".checked").addClass("active");
	});
	$(".vungxuatxu").on('click', '.check', function(e) {
		$(this).parents('.vungxuatxu').find(".active").removeClass("active");
		$(this).find(".checked").addClass("active");
	});
});

function changephongcach(value){
	$('#phongcach').val(value);
	orderajax();
};

function changexuatxu(value){
	$('#xuatxu').val(value);
	orderajax();
};
</script>

<div id="content" class="archive">
	<input type="hidden" id="phongcach" />
	<input type="hidden" id="xuatxu" />
	<div class="container"> <a href="#" class="yf-mob-filter">Hiển thị bộ lọc</a>
	<div class="left">
		<div class="filter">
		<h4>Phong cách:</h4>
		<ul class="filter_ul vungphongcach">
			<li class="phongcach" ><a onClick="changephongcach('all')" class="check">
			<p class="checked active"><span></span></p>
			Tất cả</a></li>
			<li class="phongcach"><a class="check" onClick="changephongcach('co-dien')">
			<p class="checked"><span></span></p>
			Cổ điển</a></li>
			<li class="phongcach"><a class="check" onClick="changephongcach('hien-dai')">
			<p class="checked"><span></span></p>
			Hiện đại</a></li>
			<li class="phongcach"><a class="check" onClick="changephongcach('sang-tao')">
			<p class="checked"><span></span></p>
			Sáng tạo</a></li>
			<li class="phongcach"><a class="check" onClick="changephongcach('sang-trong')">
			<p class="checked"><span></span></p>
			Sang trọng</a></li>
			<li class="phongcach"><a class="check" onClick="changephongcach('tre-trung')">
			<p class="checked"><span></span></p>
			Trẻ trung</a></li>
		</ul>
		</div>
		<div class="filter">
		<h4>Xuất xứ:</h4>
		<ul class="filter_ul vungphongcach">
			<li><a class="check" onClick="changexuatxu('all')">
			<p class="checked active"><span></span></p>
			Tất cả</a></li>
			<li><a class="check" onClick="changexuatxu('chau-au')">
			<p class="checked"><span></span></p>
			Châu Âu</a></li>
			<li><a class="check" onClick="changexuatxu('dai-loan')">
			<p class="checked"><span></span></p>
			Đài Loan</a></li>
			<li><a class="check" onClick="changexuatxu('duc')">
			<p class="checked"><span></span></p>
			Đức</a></li>
			<li><a class="check" onClick="changexuatxu('han-quoc')">
			<p class="checked"><span></span></p>
			Hàn Quốc</a></li>
			<li><a class="check" onClick="changexuatxu('italia')">
			<p class="checked"><span></span></p>
			Italia</a></li>
			<li><a class="check" onClick="changexuatxu('malaysia')">
			<p class="checked"><span></span></p>
			Malaysia</a></li>
			<li><a class="check" onClick="changexuatxu('nhat-ban')">
			<p class="checked"><span></span></p>
			Nhật Bản</a></li>
			<li><a class="check" onClick="changexuatxu('trung-quoc')">
			<p class="checked"><span></span></p>
			Trung Quốc</a></li>
			<li><a class="check" onClick="changexuatxu('viet-nam')">
			<p class="checked"><span></span></p>
			Việt Nam</a></li>
		</ul>
		</div>
	</div>
	<div class="right">
		<div class="title">
		<h2>Sofa da Italia</h2>
		<div class="title_right"> <span class="count">(Tìm thấy <?php echo count($result_spnam);?> sản phẩm)</span> <span class="orderby">Sắp xếp theo:
			<select id="orderby" onChange="orderajax()">
			<option value="" selected="selected">Mặc định</option>
			<option value="desc">Giá từ cao đến thấp</option>
			<option value="asc">Giá từ thấp đến cao</option>
			</select>
			</span> </div>
		<div class="clear"></div>
		</div>
		<div class="products">
		<?php
		for ($i=0;$i<count($result_spnam);$i++)
		{ 
		?>
		<div class="item-content">
			<div class="item" style="height: 285px;"> <a href="chi-tiet-san-pham/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_spnam[$i]['id']?>.html" class="thumbnail"> <img src="upload/sanpham/<?php if($result_spnam[$i]["tc_big"]==1) echo $result_spnam[$i]["photo"]; else echo $result_spnam[$i]["photo"] ?>" alt="<?=$result_spnam[$i]["ten_vi"]?>"> <img src="upload/sanpham/<?php if($result_spnam[$i]["tc_big"]==1) echo $result_spnam[$i]["photo"]; else echo $result_spnam[$i]["photo"] ?>" alt="<?=$result_spnam[$i]["ten_vi"]?>" class="phoicanh"> </a>
			<div class="text">
				<h3><a href="chi-tiet-san-pham/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_spnam[$i]['id']?>.html">
				<?=$result_spnam[$i]["ten_vi"]?>
				</a></h3>
				<!--<h4>Mã SP: </h4>
									<table class="shop_attributes">
					<tbody>
						<tr>
						<th>Kích thước</th>
						<td><p>
											</p></td>
						</tr>
					</tbody>
					</table>
								-->
				<p class="price regular_price">&nbsp;</p>
				<p class="price">Giá: <span><span class="amount"><?php echo number_format ($result_spnam[$i]['gia'],0,",",".")." ₫";?></span></span></p>
			</div>
			<div class="status">
				<p>Tình trạng:
				<?=$result_spnam[$i]['tinh_trang']?>
				</p>
			</div>
			</div>
		</div>
		<?php
		} 
		?>
		<div class="clear"></div>
		</div>
	</div>
	<div class="clear"></div>
	</div>
</div>
