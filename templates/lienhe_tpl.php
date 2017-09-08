<?php 
if( $_SERVER['REQUEST_METHOD'] == 'POST' )
{
	global $d;
	$data['ten'] = $_POST['ten'];
	$data['email'] = $_POST['email'];
	$data['dienthoai'] = $_POST['dienthoai'];
	$data['noidung'] = $_POST['noidung'];
	$data['subject'] = $_POST['subject'];
	$d->setTable('lienhe');
	$d->insert($data);
}
?>
<div id="wrapper">
                <div class="">
                    <div id="pathway" class="clearfix">
                        <div class="container">
                            <div id="breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">

                                <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                    <a href="index.html" itemprop="item"><span itemprop="name" class="hidden-xs">Trang chủ</span></a><meta itemprop="position" content="1">
                                </span> 	
                                <span class="hidden-xs">→</span>
                                <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                    <a href="san-pham.html" itemprop="item"><span itemprop="name">Liên hệ</span></a>
                                    <meta itemprop="position" content="2">
                                </span>
                            </div><!-- #breadcrumbs -->
                        </div>
                    </div>
                    <div class="container">
                            
                           <div class="box-heading">
                                        <h4 class="title">Liên hệ</h4>
                           </div>
                           <div class="row border mar10">     

                                <div class="col-md-6 col-sm-6">
                                	<div class="contact-info">
                                        Quý khách có thể gửi liên hệ tới chúng tôi bằng cách hoàn tất biểu mẫu dưới đây. Chúng tôi sẽ trả lời thư của quý khách, xin vui lòng khai báo đầy đủ. Hân hạnh phục vụ và chân thành cảm ơn sự quan tâm, đóng góp ý kiến đến chúng tôi
                                    </div>
                                    <div class="divider"></div>
                                    <div class="contact-form">
                                    <form onsubmit="return alert('Gửi liên hệt thành công');" method="post" name="frm" action="lien-he.html">
                                        <p class="full-row">
                                            <label for="name-id">Họ tên:</label>
                                            <input type="text" id="name-id" name="ten" required="required">
                                        </p>
                                        <p class="full-row">
                                            <label for="email-id">Email:</label>
                                            <input type="text" id="email-id" name="email" required="required">
                                        </p>
                                        <p class="full-row">
                                            <label for="subject-id">Chủ đề:</label>
                                            <input type="text" id="subject-id" name="subject" required="required">
                                        </p>
                                        <p class="full-row">
                                            <label for="message">Nội dung:</label>
                                            <textarea name="noidung" id="message" rows="6" required="required"></textarea>
                                        </p>
                                        <input class="btn btn-success" name="" value="Gửi liên hệ" type="submit">
                                    </form>
                                    </div>
                                </div> <!-- /.col-md-3 -->
                                <div class="col-md-6 col-sm-6">
                                    <div class="map-holder">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4660.7224179809555!2d106.7364605895438!3d10.797155984931884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175260e3aeacb03%3A0x883aa75516f521e6!2zNzEgTmd1eeG7hW4gUXXDvSDEkOG7qWMsIEtodSDEkcO0IHRo4buLIEFuIFBow7ogQW4gS2jDoW5oLCBBbiBQaMO6LCBRdeG6rW4gMiwgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1504879244477" width="550" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    </div> <!-- /.map-holder -->
                                    
                                </div> <!-- /.col-md-3 -->
                            </div>
                    </div>
                </div>
            </div>