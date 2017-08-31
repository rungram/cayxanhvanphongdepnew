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
	<div class="col-100">
		<div class="col-3">
		<h4 style="color:#fff;font-size: 16px;padding-bottom: 7px;">GIỚI THIỆU VỀ HOME DECOR</h4>
		<p style="color:#fff"> HOME DECOR là thương hiệu Thiết kế kiến trúc, Thiết kế nội thất, Trang trí nội thất, Thi công xây dựng, Cung cấp thiết bị nội thất.
			Với sự	nỗ lực trong suốt thời gian qua, chúng tôi mong muốn mang lại cho khách hàng những sản phẩm thiết kế tốt nhất và biến những sản phẩm
			thiết kế đó trở thành hiện thực. 
			Home Decor tin rằng với khát vọng đầy tính nhân văn của mình, sẽ tạo được nhiều giá trị thích dụng và bền vững cho toàn xã hội. </p>
		</div>
		<div class="col-3">
		<p style="color:#fff;font-size: 16px;padding-bottom: 7px;"><strong>CÔNG TY CP KIẾN TRÚC XÂY DỰNG HOME DECOR</strong></p>
		<p style="color:#fff"> Mã số thuế: 0314 373 972 do sở Kế Hoạch Đầu Tư Tp.HCM cấp </p>
		<p style="color:#fff"> Trụ sở: Tầng lửng tại tầng 01, tòa nhà An Phú Plaza, số 117-119 đường Lý Chính Thắng, P.7, Q.3, Tp.HCM </p>
		<p style="color:#fff"> Văn phòng giao dịch 01: Tầng 1, tòa nhà Packsimex Plaza, số 52 đường Đông Du, P.Bến Nghé, Q.1, Tp.HCM </p>
		<p style="color:#fff"><i class="fa fa-phone"></i> Hotline: <a style="color:#fff" href="tel:0917 049 077">0917 049 077</a></p>
		<p style="color:#fff"><i class="fa fa-envelope"></i> Email: <a style="color:#fff" href="">homedecor.info.vn@gmail.com</a></p>
		<p style="color:#fff"> Website: <a style="color:#fff" href="">homedecor.info.vn</a></p>
		<p></p>
		</div>
		<div class="col-3">
		<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fhomedecor.info.vn%3Ffref%3Dts&amp;width=360&amp;height=190&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false"
			scrolling="no" frameborder="0" style="border: none; overflow: hidden; width: 360px;
			height: 160px;" allowtransparency="true"></iframe>
		<!-- Histats.com	(div with counter) -->
		<div id="histats_counter"></div>
		<!-- Histats.com	START	(aync)-->
		<script type="text/javascript">var _Hasync= _Hasync|| [];
		_Hasync.push(['Histats.start', '1,3792557,4,403,118,80,00011111']);
		_Hasync.push(['Histats.fasi', '1']);
		_Hasync.push(['Histats.track_hits', '']);
		(function() {
		var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
		hs.src = ('//s10.histats.com/js15_as.js');
		(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
		})();</script>
		<noscript>
		<a href="/" target="_blank"><img	src="//sstatic1.histats.com/0.gif?3792557&101" alt="" border="0"></a>
		</noscript>
		<!-- Histats.com	END	-->
		</div>
	</div>
	<div class="clear"></div>
	</div>
	<div style="padding-top: 25px">
	<div class="clear"> </div>
	<div style="text-align: center;color:#c1c1c1;"> Copyright © <a style="color:#c1c1c1;" href="http://homedecor.info.vn" target="_blank">Home Decor</a> </div>
	</div>
</div>
<!--footer-->
