<?php
	$d->reset();
	$sql_list ="select *	from #_product_list where hienthi=1 and noibat=1 order by stt asc limit 0,8";
	$d->query($sql_list);
	$list =$d->result_array();
	
	$d->reset();
	$result_detailq="select * from #_tinloai1_1 order by id limit 0,3";
	$d->query($result_detailq);
	$result_detailq=$d->result_array();
?>
<div class="col-lg-4 col-sm-12 col-md-12 col-xs-12">
                
                <div class="alert alert-info text-center">
                          <h4> BẠN CẦN VAY ONLINE?</h4> 
                          <hr>
                            <i class="fa fa-warning fa-4x"></i>
                          <p>
                         SFund hỗ trợ tài chính linh hoạt Cầm cố/Thế chấp tất cả tài sản có giá trị quy đổi và Cung cấp các dịch vụ tài chính chất lượng cao
                        </p>
                          <hr>
                           <a href="#"><img class="img-responsive" src="images/button-dang-ky.png"></a> 
               </div>
              <div class="panel panel-default">
               <?php
               for($i=0;$i<count($list);$i++)
               { 
                   $d->reset();
				  $sql_cat ="select *  from #_product_cat where id_list='".$list[$i]["id"]."' order by stt asc";
				  $d->query($sql_cat);
				  $cat =$d->result_array();
               ?>
                	<h2 class="box-header"><?=$list[$i]['ten_vi']?></h2>
                    <ul class="list-group border">
                    <?php for($j=0,$count_c=count($cat);$j<$count_c;$j++){ ?>
                              <li class="list-group-item"><i class="fa fa-forward" aria-hidden="true"></i>
<a href="danh-muc-cat/<?=$cat[$j]["tenkhongdau"]?>-<?=$cat[$j]["id"]?>.html"><?=$cat[$j]["ten_vi"]?></a></li>
                     <?php
                    } 
                    ?>          
                             
                    </ul>
                <?php 
                }
                ?>
              </div>          
                        
                <h2 class="box-header">TIN TỨC MỚI NHẤT</h2>
                	<div class="col-xs-12 col-sm-12 wow fadeInDown border ">
            <div class="testimonial padd">
             <?php
             for($i=0;$i<count($result_detailq);$i++)
             { 
             ?>
              <div class="media testimonial-inner">
              <a href="tin-tuc-detail/<?=$result_detailq[$i]['tenkhongdau']?>-<?=$result_detailq[$i]['id']?>.html">
                <div class="pull-left"> <img class="img-responsive thum" src="upload/tinloai1_1/<?=$result_detailq[$i]['thumb']?>"> </div>
                <div class="media-body">
                  <h2><?=$result_detailq[$i]['ten_vi']?></h2>
                  <p><?=$result_detailq[$i]['mota_vi']?></p>
                   </div>
               </a>
              </div>
             <?php
             } 
             ?>
            </div>
          </div>
                
                
                </div>