<?php  if(!defined('_source')) die("Error");
{
	$d->reset();
	$sql_tungdanhmuc="select id,thumb,ten_$lang,tenkhongdau,gia,masp,giagiam,spmoi,luotxem from #_product where spdc >0  order by stt asc ";
	$d->query($sql_tungdanhmuc);	
	$result_spnam=$d->result_array();	
	

	
				
	$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
	$url=getCurrentPageURL();
	$maxR=20;
	$maxP=5;
	$paging=paging_home($result_spnam , $url, $curPage, $maxR, $maxP);
	$result_spnam=$paging['source'];
	
}
?>
<div id="wrapper">
                <div class="">
                    <div id="pathway" class="clearfix">
                        <div class="container">
                            <div id="breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">

                                <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                    <a href="http://chohoaviet.com" itemprop="item"><span itemprop="name" class="hidden-xs">Trang chủ</span></a><meta itemprop="position" content="1">
                                </span> 	
                                <span class="hidden-xs">→</span>
                                <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                    <a href="san-pham.html" itemprop="item"><span itemprop="name">Thanh toán</span></a>
                                    <meta itemprop="position" content="2">
                                </span>
                            </div><!-- #breadcrumbs -->
                        </div>
                    </div>
                    <div class="container">
                            
                           <div class="box-heading">
                                        <h4 class="title">Thanh toán</h4>
                           </div>
                           <div id="thanhtoan">
                        <form method="post" name="frm" action="gui-don-hang.html" enctype="multipart/form-data">
                        <div class="row mart-t50">
                            <div class="col-md-6 col-sm-6">
                                <div class="contact-form">
                                    <p class="full-row">
                                        <label class="col-lg-5" for="name-id">Họ tên (*):</label>
                                        <span class="col-lg-7 form-group"><input id="name-id" name="hoten2" type="text" required></span>
                                    </p>
                                    <p class="full-row">
                                        <label class="col-lg-5" for="email-id">Email (*):</label>
                                        <span class="col-lg-7 form-group"><input id="email-id" name="email" type="text" required></span>
                                    </p>
                                    <p class="full-row">
                                        <label class="col-lg-5" for="subject-id">Điện thoại (*):</label>
                                        <span class="col-lg-7 form-group"><input id="subject-id" name="dienthoai" type="text" required></span>
                                    </p>
                                    <p class="full-row">
                                        <label class="col-lg-5" for="message">Địa chỉ giao hàng (*):</label>
                                        <span class="col-lg-7 form-group"><input id="add-id" name="diachi" type="text" required></span>
                                    </p>
                                    <p class="full-row">
                                        <label class="col-lg-5" for="message">Ghi chú</label>
                                         <span class="col-lg-7 form-group"><textarea style="width: 100%;" name="noidung" type="text" id="add-id" ></textarea></span>
                                    </p>
                                </div>
                            </div> <!-- /.col-md-6 -->
                            <div class="col-md-6 col-sm-6">
                                <div class="table-responsive" id="no-more-tables">
                                    <table class="table table-hover table-vcenter table-bordered">
                                        <tbody>
                                         <?php
                            $max=count($_SESSION['cart']);
                            $ship = 0;
                            $vat = 0;
                            	for($i=0;$i<$max;$i++)
                            	{
                            		
                            					$pid=$_SESSION['cart'][$i]['productid'];
                            					$q=$_SESSION['cart'][$i]['qty'];					
                            					$pname=get_product_name($pid);
                            					$phinh=get_hinh($pid);
                            					$pmota=get_mota($pid);
                            					$pkodau=get_kodau($pid);
                            					$psale=get_giagiam($pid);
                            					$pma=get_masp($pid);
                            					if($psale ==0)
                            					{
                            					    $gia = get_price($pid);
                            					}
                            					else
                            					{
                            					    $gia = $psale;
                            					}
                            					$ship = $ship+$q*get_phivanchuyen($pid);
                            					$vat = $vat + $gia*$q*get_vat($pid)/100;
                            		?> 
                                <tr class="row-1193"> 
                                    <td colspan="2" class="text-left"> 
                                        <div class="media"> 
                                            <div class="media-left"> 
                                                <a href="chi-tiet-san-pham/<?=$pkodau?>-<?=$pid?>.html"> <img class="small-img" src="upload/sanpham/<?=$phinh?>" alt=""> </a> 
                                            </div> 
                                            <div class="media-body"> 
                                                <h4 class="media-heading"> <a href="chi-tiet-san-pham/<?=$pkodau?>-<?=$pid?>.html" title="<?=$pname?>">  <?=$pname?></a> <br> MÃ sp: <strong><?=$pma?></strong> </h4> <p> <strong class="lblTotalPrice">
                                                <?php 
					echo number_format($gia,0, ',', '.').'₫ x '.$q;
					 ?>=<?php echo number_format($gia*$q,0, ',', '.').'₫';?>  </strong> </p> 
                                          </div>
                                        </div> 
                                    </td>
                                </tr>
                                <?php
                                	}
                                ?>
                                        </tbody>
                                        <tfoot>
                                            <tr> 
                                     <td colspan="2" class="text-right text-primary" style="white-space:nowrap;font-weight:700;">  Thành tiền: <strong class="lblTotal" data-total="180000"><?= number_format( get_ordersale_total($pid)+$row_setting['phivc'],0, ',', '.').'đ';?></strong> 
                                     </td>
                                 </tr>
                                 <tr> 
                                     <td colspan="2" class="text-right text-primary" style="white-space:nowrap;font-weight:700;">V.A.T: <strong class="lblTotal" data-total="180000">
                                     <?php  
                                     echo number_format($vat,0, ',', '.').'₫';
                                     ?></strong> 
                                     </td>
                                 </tr>
                                 <tr class="ship-price"> 
                                     <td colspan="2" class="text-right text-info" style="white-space:nowrap;font-weight:700;">  Phí vận chuyển: <strong class="lblShipPrice" data-price="0">
                                     <?php  
                                     echo number_format($ship,0, ',', '.').'₫';
                                     ?></strong> 
                                       <input name="Ship" id="Ship" value="0" type="hidden"> </td>
                                 </tr>
                                 <tr class="ship-price"> 
                                     <td colspan="2" class="text-right text-success">  Tổng cộng: <strong class="lblTotalPrice"><?= number_format( get_ordersale_total($pid)+$ship + $vat,0, ',', '.').'đ';?></strong> 
                                     </td>
                                 </tr>



                                        </tfoot>
                                    </table>
                                </div>
                                <p class="clearfix"></p>
                                <a><button class="btn btn-cart"> <i class=" fa fa-cart-plus"></i> Đặt hàng  </button></a>
                            </div> <!-- /.col-md-6 -->
                        </div>
                    </form>
                    </div>
                    </div>
                </div>
            </div>