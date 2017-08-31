<?php 
	$d->reset();
	$sql_chinhsach ="select * from #_product where chinhsach = 1 order by stt asc limit 0,5";
	$d->query($sql_chinhsach);
	$chinhsach=$d->result_array();
	
	$d->reset();
	$sql_list ="select *	from #_product_list where hienthi=1 order by stt asc limit 0,8";
	$d->query($sql_list);
	$list =$d->result_array();
?>

<div id="footer">
		<div class="container">
			<div class="left-footer">
				<h4>Hệ thống cửa hàng</h4>
					<p><i class="fa fa-map-marker"></i> &nbsp;Tầng 3, tòa nhà An Phú Plaza, số 117-119 đường Lý Chính Thắng, P.7, Q.3, Tp.HCM </p>
	<p><i class="fa fa-phone"></i> Điện thoại: <a href="tel:0917 049 077">0917 049 077</a>  |  Fax: <a href="tel:0917 049 077">0917 049 077 | Giờ mở cửa: 8:00-21:30 (Cả tuần)</a></p>
					<p><i class="fa fa-map-marker"></i> &nbsp;Tầng 1, tòa nhà Packsimex Plaza, số 52 đường Đông Du, P.Bến Nghé, Q.1, Tp.HCM </p>
			</div>	
			<div class="right-footer">
				<h4>Bản quyền thuộc</h4>
				<p>Công Ty CP Kiến Trúc Xây Dựng Home Decor<br>
					Văn phòng giao dịch 01: Tầng 3, tòa nhà An Phú Plaza, số 117-119 đường Lý Chính Thắng, P.7, Q.3, Tp.HCM
				</p>
				<p><i class="fa fa-phone"></i> Điện thoại: <a href="tel:0917 049 077">0917 049 077 </a> | Hotline: <a href="tel:0917 049 077">0917 049 077  |  CSKH: 0917 049 077</a></p>
				<p><i class="fa fa-envelope"></i> Email: <a href="mailto:homedecor.info.vn">contact@homedecor.info.vn</a>  |  Website: <a href="">homedecor.info.vn</a></p>
				<p></p>
			</div>	
			<div class="clear"></div>
			<div class="logo-footer">
				<h4>Các công ty thành viên trực thuộc TCT Group:</h4>
				<ul>
					<li><a target="_blank" href="http://www.nhadep.com.vn/"><img src="images/banner1.png" alt=""></a></li>
					<li><a target="_blank" href="http://www.vanhoaclub.com.vn/"><img src="images/banner2.png" alt=""></a></li>
					<li><a target="_blank" href="http://www.fivimart.com.vn/"><img src="images/banner3.png" alt=""></a></li>
					<li><a target="_blank" href="http://www.phobien.com.vn/"><img src="images/banner4.png" alt=""></a></li>
					<li><a target="_blank" href="http://denhat.com.vn/"><img src="images/de-nhat1-e1447238908371.jpg" alt=""></a></li>
					<li><a target="_blank" href="http://www.zcafe.com.vn/"><img src="images/banner6.png" alt=""></a></li>
					<li><a target="_blank" href="http://www.thiensonplaza.com.vn/"><img src="images/banner7.png" alt=""></a></li>
					<li><a target="_blank" href=""><img src="images/banner9.png" alt=""></a></li>
					<li><a target="_blank" href="http://www.thienson.com.vn/vanep/lienhe.asp"><img src="images/banner10.png" alt=""></a></li>
					<li><a target="_blank" href="http://www.tctgroup.com.vn/CP_XDNT_TCT.asp"><img src="images/logo_tctcp-e1447239338639.gif" alt=""></a></li>
					<li><a target="_blank" href="http://fit24hn.com.vn/"><img src="images/Untitled-3-012.jpg" alt=""></a></li>
					<li><a target="_blank" href="http://mammamia-italia.com/"><img src="images/Untitled-2-011.jpg" alt=""></a></li>
				</ul>
			</div>
		</div>
    </div><!--footer-->