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

<div id="contact" class="section-cotent">
        <div class="container">
            <div class="title-section text-center">
                <h2>Contact Us</h2>
                <span></span>
            </div> <!-- /.title-section -->
            <div class="row">
                <div class="col-md-7 col-sm-6">
                    <form onsubmit="return alert('Gửi liên hệt thành công');" method="post" name="frm" action="lien-he.html">
                        <div class="contact-form">
                            <p class="full-row">
                                <label for="name-id">Họ tên:</label>
                                <input type="text" id="name-id" name="ten" required="required">
                            </p>
                            <p class="full-row">
                                <label for="email-id">Email:</label>
                                <input type="text" id="email-id" name="email" required="required">
                            </p>
                            <p class="full-row">
                                <label for="subject-id">Subject:</label>
                                <input type="text" id="subject-id" name="subject" required="required">
                            </p>
                            <p class="full-row">
                                <label for="message">Nội dung:</label>
                                <textarea name="noidung" id="message" rows="6" required="required"></textarea>
                            </p>
                            <button type="submit" name="submit" class="mainBtn">Gửi liên hệ</button>
                        </div>
                    </form> 
                </div> <!-- /.col-md-3 -->
                <div class="col-md-5 col-sm-6">
                    <div class="map-holder">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.055840701139!2d106.71567851417188!3d10.807035242300763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3e32d45a36286e50!2zQ8O0bmcgVHkgVE5ISCBL4bu5IFRodeG6rXQgS2ltIFRo4buLbmggUGjDoXQ!5e0!3m2!1svi!2s!4v1499930430804" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                    </div> <!-- /.map-holder -->
                    <div class="contact-info">
                        <span><i class="fa fa-home"></i>53 C Ung Văn Khiêm, Phường 25, Quận Bình Thạnh, TP. HCM</span>
                        <span><i class="fa fa-phone"></i>0909.28.84.86 - 0909.01.84.86 - 0903.61.82.89 - 0902.41.37.39</span>
                        <span><i class="fa fa-envelope"></i>info@company.com</span>
                    </div>
                </div> <!-- /.col-md-3 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div>