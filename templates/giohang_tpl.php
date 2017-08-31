<?php
if($_REQUEST['command']=='delete' && $_REQUEST['pid']>0){
	remove_product($_REQUEST['pid']);
	}
	else if($_REQUEST['command']=='clear'){
	unset($_SESSION['cart']);
	}
	else if($_REQUEST['command']=='update'){
	$max=count($_SESSION['cart']);
	for($i=0;$i<$max;$i++){
		$pid=$_SESSION['cart'][$i]['productid'];
		$q=intval($_REQUEST['product'.$pid]);
		if($q>0 && $q<=999){
		$_SESSION['cart'][$i]['qty']=$q;
		}
		else{
		$msg='Some proudcts not updated!, quantity must be a number between 1 and 999';
		}
	}
	}
?>
<script language="javascript">
	function del(pid){
		if(confirm('Do you really mean to delete this item')){
		document.formgiobo.pid.value=pid;
		document.formgiobo.command.value='delete';
		document.formgiobo.submit();
		}
	}
	function clear_cart(){
		if(confirm('This will empty your shopping cart, continue?')){
		document.formgiobo.command.value='clear';
		document.formgiobo.submit();
		}
	}
	function updatecart(){
		document.formgiobo.command.value='update';
		document.formgiobo.submit();
	}
</script>

<div id="cart" class="container mart-t50">
    <div class="title-section text-center">
      <h2>Thanh toán</h2>
      <span></span>
    </div>
    <!-- /.title-section -->	
	<article class="page-cart" id="boxContent"> 
    <form name="formgiobo" method="post"> 
    <input type="hidden" name="pid" />
		<input type="hidden" name="command" />
        <div class="page-content">
             <div class="alert alert-success hidden" role="alert">
             </div> 
             <div class="table-responsive" id="no-more-tables">  
                 <table class="table table-hover table-vcenter"> 
                     <thead> 
                         <tr>
                             <th class="text-left text-capitalize" style="width:160px;">  Sản phẩm </th>
                             <th class="text-center text-capitalize" style="width:120px;"> Đơn giá </th>
                             <th class="text-center text-capitalize" style="width:40px;">  Số lượng </th>
                             <th class="text-center text-capitalize" style="width:80px;">  VAT </th>
                             <th class="text-center text-capitalize" style="width:80px;">  Phí vận chuyển (1 đơn vị)</th>
                             <th class="text-center text-capitalize" style="width:120px;">  Thành tiền </th>
                             <th class="text-center" style="width:40px;"> </th>
                         </tr> 
                     </thead> 
                     <tbody> 
                     <?php
                     $ship = 0;
                     $vat = 0;
                		if(is_array($_SESSION['cart'])){
                		$max=count($_SESSION['cart']);
                		for($i=0;$i<$max;$i++){
                			$pid=$_SESSION['cart'][$i]['productid'];
                			$q=$_SESSION['cart'][$i]['qty'];			
                			$pname=get_product_name($pid);
                			$pma=get_masp($pid);
                			$phinh=get_hinh($pid);
                			$pmota=get_mota($pid);
                			$pkodau=get_kodau($pid);
                			$psale=get_giagiam($pid);
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
                			if($q==0) continue;
                		?>
                         <tr class="row-1193"> 
                         <td class="text-left"> 
                             <div class="media"> 
                                 <div class="media-left"> 
                                 <a href="chi-tiet-san-pham/<?=$pkodau?>-<?=$pid?>.html">
                                  <img class="media-objects" src="upload/sanpham/<?=$phinh?>" alt="Giỏ Xách Kiểu 8" style="width:100px;"> </a> <!---- <img class="media-object_color" src="../uploads/images/Fabric/.jpg" alt="../uploads/images/Fabric/.jpg">--> 
                                  </div> 
                                  <div class="media-body"> 
                                      <h4 class="media-heading"> 
                                      <a href="chi-tiet-san-pham/<?=$pkodau?>-<?=$pid?>.html" title="Giỏ Xách Kiểu 8"><?=$pname?></a> 
                                      <br> <br> Mã sp: <strong><?=$pma?></strong> </h4> 
                                  </div> 
                              </div> 
                          </td>
                         <td class="text-center"> <span class="visible-xs">Đơn giá</span> 
                         <?php 
        					if($psale ==0) 
        					echo number_format(get_price($pid),0, ',', '.').'₫';
        					else 
        					echo number_format($psale,0, ',', '.').'₫';
    					 ?>
    					 </td>
                         <td class="text-center"> <span class="visible-xs">Số lượng</span> 
                             <div class="input-group boxNumber"> 
                             <input onchange="updatecart()" type="number" step="1" min="0" name="product<?=$pid?>" value="<?=$q?>" title="SL" class="numberic form-control">
                             </div> 
                         </td>
                         <td class="text-center"> <span class="visible-xs">VAT</span>
                         <?php  
                             echo get_vat($pid).' %';
                         ?>
                         </td>
                         <td class="text-center"> <span class="visible-xs">Phí vận chuyển</span> 
                         <?php  
                             echo number_format(get_phivanchuyen($pid),0, ',', '.').'₫';
                         ?>
                             
                         </td>
                         <td class="text-right"> <span class="visible-xs">Thành tiền</span> <strong class="lblTotalPrice">
                         <?php 
						if($psale ==0) 
    						echo number_format(get_price($pid)*$q,0, ',', '.').'₫';
    						else 
    						echo number_format(get_giagiam($pid)*$q,0, ',', '.').'₫';
    					 ?>
                         </strong> </td>
                         <th scope="row" class="text-center"> <a href="javascript:del(<?=$pid?>)" class="remove text-danger hidden-xs" > <i class=" fa fa-eraser" aria-hidden="true"></i>
 Xóa </a>  
                         <input id="ID__" name="ID[]" value="1193" type="hidden"> 
                         </th>
                         </tr>  
                         <?php		 
                    		}}
                    		?>
                     </tbody>  
                     <tfoot> 
                         <tr>
                             <td colspan="5" class="text-right"> V.A.T </td>
                             <td class="text-right"> 
                                <strong class="lblTotal">
                                     <?php  
                                     echo number_format($vat,0, ',', '.').'₫';
                                     ?>
                                </strong> </td>
                             <td></td>
                         </tr>
                         <tr>
                             <td colspan="5" class="text-right">Ship </td>
                             <td class="text-right"> 
                                 <strong class="lblTotal">
                                     <?php  
                                     echo number_format($ship,0, ',', '.').'₫';
                                     ?>
                                 </strong> 
                             </td>
                             <td></td>
                         </tr> 
                         <tr>
                             <td colspan="5" class="text-right">  Tổng cộng </td>
                             <td class="text-right"> <strong class="lblTotal"><?= number_format( get_ordersale_total($pid)+$row_setting['phivc'],0, ',', '.').'đ';?></strong> </td>
                             <td></td>
                         </tr> 
                     </tfoot> 
                 </table> 
             </div> 
             <nav> 
             <ul class="pager"> 
                 <li class="previous"><a href="san-pham.html"><span aria-hidden="true">←</span> Tiếp tục mua hàng</a></li>  
                 <?php if(count($_SESSION['cart'])>0)
                     {?>
                 <li class="next"><a href="thanh-toan.html"> Thanh toán <span aria-hidden="true">→</span></a></li>  
                 <li class="next"><a href="javascript:;" onclick="return UpdateCart();"> <i class="fa fa-save"></i> Cập nhật giỏ hàng</a></li>  
                 <?php }?>
                 
             </ul> 
             </nav>  
             <span style="font-size:16px;"></span> 
             <div class="clearfix"></div> 
        </div> 
 	</form> 
    </article>	
</div>