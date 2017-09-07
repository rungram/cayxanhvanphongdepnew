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
	
	$d->reset();
	$sql_detailq="select * from #_tinloai1_3 limit 1";
	$d->query($sql_detailq);
	$result_thongtincongty=$d->result_array();
	
	
	$d->reset();
	$sql_detailq="select * from #_tinloai1_1 where dichvu = 1 order by id limit 6";
	$d->query($sql_detailq);
	$result_tindichvu=$d->result_array();
	
	
	$d->reset();
	$sql_detailq="select * from #_tinloai1_1 where congty = 1 order by id limit 5";
	$d->query($sql_detailq);
	$result_tincongty=$d->result_array();
	
	
	$d->reset();
	$sql_detailq="select * from #_tinloai1_1 where huongdan = 1 order by id limit 6";
	$d->query($sql_detailq);
	$result_tinhuongdan=$d->result_array();
?>

    <section class="footer-info">
                <div class="container">
                    <div class="footer-static row">
                        <div class="f-col col-sm-4 col-md-4 col-sms-6 col-smb-12">
                            <div class="footer-static-content">
                                <div class="footer-static-title">
                                  <h3>CÔNG TY CÂY XANH VĂN PHÒNG</h3></div>			<div class="textwidget">
                                    <?php
                                     for($i=0;$i<count($result_thongtincongty);$i++)
                                     { 
                                     ?>
                                        <?=$result_thongtincongty[$i]['noidung_vi']?>
                                      <?php }?> 
                                </div>
                            </div>
                        </div>
                        <div class="f-col f-col2 col-sm-2 col-md-2 col-sms-6 col-smb-12">
                            <div class="footer-static-content">
                                <div class="footer-static-title"><h3>Các dịch vụ</h3></div>			
                                <div class="textwidget">
                                    <ul>
                                    <?php
                                     for($i=0;$i<count($result_tindichvu);$i++)
                                     { 
                                     ?>
                                        <li><a href="tin-tuc-detail/<?=$result_tindichvu[$i]['tenkhongdau']?>-<?=$result_tindichvu[$i]['id']?>.html"><?=$result_tindichvu[$i]['ten_vi']?></a></li>
                                      <?php }?> 
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="f-col f-col3 col-sm-3 col-md-3 col-sms-6 col-smb-12">
                            <div class="footer-static-content">
                                <div class="footer-static-title"><h3>Cây Xanh Văn Phòng Đẹp</h3></div>			<div class="textwidget">
                                    <ul>
                                        <li class="first"><a href="lien-he.html">Liên hệ</a></li>
                                        <?php
                                         for($i=0;$i<count($result_tincongty);$i++)
                                         { 
                                         ?>
                                        <li><a href="tin-tuc-detail/<?=$result_tincongty[$i]['tenkhongdau']?>-<?=$result_tincongty[$i]['id']?>.html"><?=$result_tincongty[$i]['ten_vi']?></a></li>
                                        <?php }?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="f-col f-col3 col-sm-3 col-md-3 col-sms-6 col-smb-12">
                            <div class="footer-static-content">
                                <div class="footer-static-title"><h3>Hướng dẫn</h3></div>			<div class="textwidget">
                                    <ul>
                                        <?php
                                         for($i=0;$i<count($result_tinhuongdan);$i++)
                                         { 
                                         ?>
                                        <li><a href="tin-tuc-detail/<?=$result_tinhuongdan[$i]['tenkhongdau']?>-<?=$result_tinhuongdan[$i]['id']?>.html"><?=$result_tinhuongdan[$i]['ten_vi']?></a></li>
                                        <?php }?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                  </div>

                </div>

            </section>

            <div class="wrap hidden" id="vnt-botsl1">

                <div class="main">

                    <div class="main-inner1 clearfix container">

                        <div class="row">

                           <!-- SPOTLIGHT -->
                            <div class="vnt-box column vnt-box-right col-md-6 col-xs-12">

                                <div class="vnt-moduletable moduletable  clearfix">

                                </div>

                            </div>

                            <!-- SPOTLIGHT -->

                        </div>
                    </div>

                </div>

            </div>

            <!--footer-->

            <footer>

                <div class="container">

                    <div class="row">

                        <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">

                            <div class="copyright">

                                © 2017 <strong>Cây Xanh Văn Phòng Đẹp</strong><br />

                            </div>

                        </div>

                        <div class="col-lg-7 col-md-6 col-sm-6 hidden-xs">

                            <div class="pull-right text-right"> Hỗ trợ và CSKH: 0288.11.090<br /></div>

                        </div>

                    </div>

                </div>

                <!-- {%FOOTER_LINK} -->

            </footer>