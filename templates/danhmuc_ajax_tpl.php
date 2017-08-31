<?php 
            $id =  ($_POST['id']);
			$d->reset();
			$order = isset($_POST['order']) ? 'order by gia '.$_POST['order'] : 'order by stt asc';
			$sql_tungdanhmuc="select * from #_product where hienthi =1 and id_list='$id' ".$order;
			$d->query($sql_tungdanhmuc);	
			$result_spnam=$d->result_array();	
			
			$d->reset();
			$sql_laylist="select * from #_product_list where hienthi =1 and id='$id'";
			$d->query($sql_laylist);	
			$result_laylist=$d->fetch_array();	
			
			
						
			$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
			$url=getCurrentPageURL();
			$maxR=30;
			$maxP=15;
			$paging=paging_home($result_spnam , $url, $curPage, $maxR, $maxP);
			$result_spnam=$paging['source'];
            
			
			$total_sp = count($result_spnam);
?>
<?php
for ($i=0;$i<count($result_spnam);$i++)
{ 
?>
	<div class="item-content">
			<div class="item" style="height: 285px;">	
				<a href="chi-tiet-san-pham/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_spnam[$i]['id']?>.html" class="thumbnail">
					<img src="upload/sanpham/<?php if($result_spnam[$i]["tc_big"]==1) echo $result_spnam[$i]["photo"]; else echo $result_spnam[$i]["photo"] ?>" alt="<?=$result_spnam[$i]["ten_vi"]?>">
						<img src="upload/sanpham/<?php if($result_spnam[$i]["tc_big"]==1) echo $result_spnam[$i]["photo"]; else echo $result_spnam[$i]["photo"] ?>" alt="<?=$result_spnam[$i]["ten_vi"]?>" class="phoicanh">
													                							</a>
				<div class="text">
					<h3><a href="chi-tiet-san-pham/<?=$result_spnam[$i]['tenkhongdau']?>-<?=$result_spnam[$i]['id']?>.html"><?=$result_spnam[$i]["ten_vi"]?></a></h3>
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
					<p>Tình trạng: Hàng sắp về</p>
				</div>
			</div>
		</div>
<?php
} 
?>
					<div class="clear"></div>