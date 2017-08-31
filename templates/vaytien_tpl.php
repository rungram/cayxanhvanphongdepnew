<?php 
if( $_SERVER['REQUEST_METHOD'] == 'POST' )
{
	global $d;
	$data['SoTienVay'] = $_POST['SoTienVay'];
	$data['ThoiHanVay'] = $_POST['ThoiHanVay'];
	$data['TaiSanTheChap'] = $_POST['TaiSanTheChap'];
	$data['ThuongHieu'] = $_POST['ThuongHieu'];
	$data['NamSanXuat'] = $_POST['NamSanXuat'];
	$data['MoTaTaiSan'] = $_POST['MoTaTaiSan'];
	$data['Ten'] = $_POST['Ten'];
	$data['GioiTinh'] = $_POST['GioiTinh'];
	$data['TinhThanh'] = $_POST['TinhThanh'];
	$data['DienThoai'] = $_POST['DienThoai'];
	$data['Email'] = $_POST['Email'];
	$d->setTable('vaytien');
	$d->insert($data);
}
?>
<section id="contact-page">
        <div class="container border">
            <div class="section-title section-title-contact wow fadeInDown"> <span class="tag tag-colored">Đăng Ký Cầm Đồ</span>
              <p class="lead">SFund hỗ trợ tài chính linh hoạt Cầm cố/Thế chấp tất cả tài sản có giá trị quy đổi và Cung cấp các dịch vụ tài chính chất lượng cao 
              </p>
            </div>

            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form method="post" name="frm" action="vay-tien.html">
                <p class="lead" style="text-align: left;">01. Thiết lập khoản vay cầm đồ (Bạn vui lòng nhập đầy đủ thông tin để chúng tôi có thể hỗ trợ bạn tốt nhất)
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Bạn muốn vay bao nhiêu ? *</label>
                            <input type="text" name="SoTienVay" class="form-control" required="required">
                        </div>
                        
                        
                        <div class="form-group">
                            <label>Thương hiệu *</label>
                            <input type="text" name="ThuongHieu" class="form-control" required="required">
                        </div>
                         <div class="form-group">
                            <label>Năm sản xuất *</label>
                            <select class="form-control" id="ID_Year" name="NamSanXuat"><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option></select>
                        </div>  
                        
                    </div>
                    <div class="col-sm-5">
                    <div class="form-group">
                            <label>Bạn muốn vay bao lâu ? *</label>
                            <input type="text" name="ThoiHanVay" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                            <label>Tài sản thế chấp *</label>
                            <select class="form-control" id="TaiSanTheChap" name="TaiSanTheChap" required="required">
                                <option value="Đăng ký xe ô tô" >Đăng ký xe ô tô</option>
                                <option value="Ô tô" >Ô tô </option>
                                <option value="Điện thoại" >Điện thoại</option>
                                <option value="Laptop" >Laptop</option>
                                <option value="Xe máy" >Xe máy</option>
                                <option value="Trang sức" >Trang sức</option>
                            </select>
                         </div>
                        <div class="form-group">
                            <label>Mô tả tài sản cầm cố: *</label>
                            <textarea name="MoTaTaiSan" id="message" required class="form-control" rows="8"></textarea>
                        </div>    
                    </div>
                    <div class="col-sm-12">
              <p class="lead" style="text-align: left;">02. Thông tin khách hàng (Cố lên bạn còn nốt bước này thôi sẽ hoàn thành đăng ký vay rồi)
              </p>
                    </div>
                    <div class="col-sm-5 col-sm-offset-1">
                    <div class="form-group">
                            <label>Họ tên *</label>
                            <input type="text" name="Ten" class="form-control" required="required">
                        </div>
                    <div class="form-group">
                        <label>Giới tính *</label>
                        <select class="form-control" id="ID_Gender" name="GioiTinh">
                            <option value="1">Nam</option>
                            <option value="0">Nữ</option>
                        </select>
                    </div>
                    <div class="form-group">
                            <label>Chủ đề *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                    </div>
                    <div class="col-sm-5">
                    <div class="form-group">
                            <label>Chọn tỉnh thành *</label>
                            <select class="form-control required" id="ID_Province" name="TinhThanh">
                                <option value="">--Chọn--</option>
                                <option value="Hà Nội">Hà Nội</option>
                                <option value="TP HCM">TP HCM</option>
                                <option value="An Giang">An Giang</option>
                                <option value="Bến Tre">Bến Tre</option>
                                <option value="Bắc Giang">Bắc Giang</option>
                                <option value="Bắc Ninh">Bắc Ninh</option>
                                <option value="Bắc Cạn">Bắc Cạn</option>
                                <option value="Bình Dương">Bình Dương</option>
                                <option value="Bình Phước">Bình Phước</option>
                                <option value="Bình Định">Bình Định</option>
                                <option value="Bạc Liêu">Bạc Liêu</option>
                                <option value="Bình Thuận">Bình Thuận</option>
                                <option value="Bà Rịa Vũng Tàu">Bà Rịa Vũng Tàu</option>
                                <option value="Cà Mau">Cà Mau</option>
                                <option value="Cao Bằng">Cao Bằng</option>
                                <option value="Cần Thơ">Cần Thơ</option>
                                <option value="Đồng Tháp">Đồng Tháp</option>
                                <option value="Đồng Nai">Đồng Nai</option>
                                <option value="Đak Lak">Đak Lak</option>
                                <option value="Đà Nẵng">Đà Nẵng</option>
                                <option value="Gia Lai">Gia Lai</option>
                                <option value="Hà Giang">Hà Giang</option>
                                <option value="Hải Phòng">Hải Phòng</option>
                                <option value="Hà Tĩnh">Hà Tĩnh</option>
                                <option value="Hòa Bình">Hòa Bình</option>
                                <option value="Hải Dương">Hải Dương</option>
                                <option value="Hưng Yên">Hưng Yên</option>
                                <option value="Hà Nam">Hà Nam</option>
                                <option value="Kon Tum">Kon Tum</option>
                                <option value="Kiên Giang">Kiên Giang</option>
                                <option value="Khánh Hòa">Khánh Hòa</option>
                                <option value="Lào Cai">Lào Cai</option>
                                <option value="Lai Châu">Lai Châu</option>
                                <option value="Lâm Đồng">Lâm Đồng</option>
                                <option value="Long An">Long An</option>
                                <option value="Nghệ An">Nghệ An</option>
                                <option value="Ninh Bình">Ninh Bình</option>
                                <option value="Nam Định">Nam Định</option>
                                <option value="Ninh Thuận">Ninh Thuận</option>
                                <option value="Sơn La">Sơn La</option>
                                <option value="Thanh Hoá">Thanh Hoá</option>
                                <option value="Tuyên Quang">Tuyên Quang</option>
                                <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
                                <option value="Tiền Giang">Tiền Giang</option>
                                <option value="Trà Vinh">Trà Vinh</option>
                                <option value="Thái Bình">Thái Bình</option>
                                <option value="Tây Ninh">Tây Ninh</option>
                                <option value="Phú Yên">Phú Yên</option>
                                <option value="Phú Thọ">Phú Thọ</option>
                                <option value="Quảng Ninh">Quảng Ninh</option>
                                <option value="Quảng Bình">Quảng Bình</option>
                                <option value="Quảng Trị">Quảng Trị</option>
                                <option value="Yên Bái">Yên Bái</option>
                                <option value="Vĩnh Long">Vĩnh Long</option>
                                <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                                <option value="Lạng Sơn">Lạng Sơn</option>
                                <option value="Biên hòa">Biên hòa</option>
                                <option value="Buôn Mê Thuột">Buôn Mê Thuột</option>
                                <option value="Quảng Nam">Quảng Nam</option>
                                <option value="Quảng Ngãi">Quảng Ngãi</option>
                                <option value="Hậu Giang">Hậu Giang</option>
                                <option value="Sóc Trăng">Sóc Trăng</option>
                                <option value="Thái Nguyên">Thái Nguyên</option>
                                <option value="Đak Nông">Đak Nông</option>
                                <option value="Điện Biên">Điện Biên</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="text" name="Email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Điện thoại</label>
                            <input type="text" name="DienThoai" class="form-control">
                        </div>
                                               
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Gửi liên hệ</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
    <section id="contact-info">

        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap">
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=JoomShaper,+Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=0&amp;oq=joomshaper&amp;sll=37.0625,-95.677068&amp;sspn=42.766543,80.332031&amp;ie=UTF8&amp;hq=JoomShaper,&amp;hnear=Dhaka,+Dhaka+Division,+Bangladesh&amp;ll=23.73854,90.385504&amp;spn=0.001515,0.002452&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=1073661719450182870&amp;output=embed"></iframe>
                        </div>
                    </div>

                    <div class="col-sm-7 map-content">
                        <ul class="row">
                            <li class="col-sm-6">
                                <address>
                                    <h5>Head Office</h5>
                                    <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                                </address>

                                <address>
                                    <h5>Zonal Office</h5>
                                    <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>                                
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                                </address>
                            </li>


                            <li class="col-sm-6">
                                <address>
                                    <h5>Zone#2 Office</h5>
                                    <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                                </address>

                                <address>
                                    <h5>Zone#3 Office</h5>
                                    <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>
                                    <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                                </address>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->