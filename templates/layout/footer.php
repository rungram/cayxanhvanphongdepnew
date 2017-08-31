<?php 
	$d->reset();
	$sql_chinhsach ="select * from #_product where chinhsach = 1 order by stt asc limit 0,5";
	$d->query($sql_chinhsach);
	$chinhsach=$d->result_array();
	
	$d->reset();
	$sql_list ="select *	from #_product_list where hienthi=1 order by stt asc limit 0,8";
	$d->query($sql_list);
	$list =$d->result_array();
	
	$d->reset();
	$sql_face ="select * from #_nhung_face limit 1";
	$d->query($sql_face);
	$lienket=$d->fetch_array();
	$facebook = $lienket['facebook'];
	$twinter = $lienket['twinter'];
	$google = $lienket['google'];
	$youtube = $lienket['youtube'];
?>

    <div class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-xs-12 ">

                    <h3>CÔNG TY TNHH KỸ THUẬT KIM THỊNH PHÁT</h3>
                    <address>
                        <p><strong>MST:</strong> 0313 410 300 - Email: kimthinhphatt@gmail.com</p>
                        <p><strong>Địa chỉ:</strong> 53 C Ung Văn Khiêm, Phường 25, Quận Bình Thạnh, TP. HCM</p>
                        <p><strong>HOTLINE:</strong> 0909.28.84.86 - 0909.01.84.86 - 0903.61.82.89 - 0902.41.37.39</p>

                    </address>
                    <div class="clearfix"></div>
                    <div class="sf">
                        <h3>Social</h3>
                        <a target="_blank" href="<?=$facebook?>"><img src="images/f.png" alt=""></a>
                        <a target="_blank" href="<?=$twinter?>"><img src="images/g.png" alt=""></a>
                        <a target="_blank" href="<?=$google?>"><img src="images/t.png" alt=""></a>
                        <a target="_blank" href="<?=$youtube?>"><img src="images/y.png" alt=""></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-12 ">
                    <ul class="ls-ft">
                        <li><a href="ho-tro/huong-dan-mua-hang-139.html" title="Hướng dẫn mua hàng">Hướng dẫn mua hàng</a></li>
                        <li><a href="ho-tro/quy-dinh-doi-tra-san-pham-140.html" title="Quy định đổi trả sản phẩm">Quy định đổi trả sản phẩm</a></li>
                        <li><a href="ho-tro/tong-dai-ho-tro-online-141.html" title="Tổng đài hỗ trợ online">Tổng đài hỗ trợ online</a></li>
                        <li><a href="ho-tro/hinh-thuc-giao-hang-142.html" title="Hình thức giao hàng">Hình thức giao hàng</a></li>
                        <li><a href="ho-tro/huong-dan-lap-dat-147.html" title="Hướng Dẫn Lắp Đặt">Hướng Dẫn Lắp Đặt</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 col-xs-12 ">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fkimthinhphatt%2F&tabs=timeline&width=340&height=210&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="210" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                </div>
            </div>
        </div> <!-- /.container -->
    </div> <!-- /.site-footer -->
    <!-- /.row -->
    <div class="row">
        <div class="container">
            <div class="col-md-8 col-sm-8 col-xs-8">
                <p>Copyright &copy; 2017 KIM THINH PHAT</p>
            </div> <!-- /.col-md-6 -->
            <div class="col-md-4 col-sm-4 col-xs-4">
                <div class="go-top">
                    <a href="#" id="go-top">
                        <i class="fa fa-angle-up"></i>
                        Go to Top
                    </a>
                </div>
            </div> 
        </div>
    </div>