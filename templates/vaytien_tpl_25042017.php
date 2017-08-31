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
<script src="PawnJS/jquery.filer.min.js"></script>
<link href="PawnJS/jquery.steps.css" rel="stylesheet">
<link href="PawnJS/jquery-ui.css" rel="stylesheet">
<script src="PawnJS/jquery.steps.min.js"></script>
<div class="container-fluid" id="section-content">
    <div class="row">
        <div class="container">
            <link href="PawnJS/jquery.filer-dragdropbox-theme.css" rel="stylesheet">
            <link href="PawnJS/jquery.filer.css" rel="stylesheet">
            <link href="PawnJS/jquery-filer.css" rel="stylesheet">
            <link href="PawnJS/ModifyStyle.css" rel="stylesheet">
            <script src="Scripts/jquery.validate.min.js"></script>
<div class="regis_credit_onlne" role="tablist">

    <form method="post" name="frm" action="vay-tien.html"><div class="steps clearfix"><ul role="tablist"><li role="tab" class="first current" aria-disabled="false" aria-selected="true"><a id="formInfo-t-0" href="#formInfo-h-0" aria-controls="formInfo-p-0"><span class="current-info audible">Xác nhận: </span><span class="stt_span">01</span> <span class="span_name">Thiết lập khoản vay cầm đồ</span></a></li><li role="tab" class="disabled" aria-disabled="true"><a id="formInfo-t-1" href="#formInfo-h-1" aria-controls="formInfo-p-1"><span class="stt_span">02</span> 
            <span class="span_name">Thông tin khách hàng</span>

        </a></li><li role="tab" class="disabled last" aria-disabled="true"><a id="formInfo-t-2" href="#formInfo-h-2" aria-controls="formInfo-p-2"><span class="stt_span">03</span> <span class="span_name">Thiết lập khoản vay cầm đồ</span></a></li></ul></div><div class="content clearfix">

        <a href="#home" aria-controls="home" role="tab" data-toggle="tab" class="col-xs-12 title current" id="formInfo-h-0" tabindex="-1"><span class="span_name">Thiết lập khoản vay cầm đồ</span></a>


        <div class="content_reg_credict body current" id="formInfo-p-0" role="tabpanel" aria-labelledby="formInfo-h-0" aria-hidden="false">
            <div class="heading_credict">
                <span>01. Thiết lập khoản vay cầm đồ <h8>(Bạn vui lòng nhập đầy đủ thông tin để chúng tôi có thể hỗ trợ bạn tốt nhất)</h8> </span>
            </div>

            <div class="body_credict">
                
                <div class="row margin-bottom-20">
                    <div class="col-md-3">
                        <p>Bạn muốn vay bao nhiêu ?</p>
                    </div>
                    <div class="col-md-6">
                        <div id="slider-range-max" class="slider-range-max ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-max" style="width: 100%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span></div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group ipt_process">
                            <input type="text" id="ID_TotalMoney" name="SoTienVay" class="form-control  " value="1000000">
                            <div class="input-group-addon">VNĐ</div>
                        </div>
                    </div>
                </div>

                <div class="row margin-bottom-20">
                    <div class="col-md-3">
                        <p>Bạn muốn vay bao lâu ?</p>
                    </div>
                    <div class="col-md-6">
                        <div id="slider-range-date" class="slider-range-date ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-max" style="width: 100%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span></div>
                    </div>
                    <div class="col-md-3">
                        <div class="input-group ipt_process">
                            <input type="text" id="ID_TotalDays" name="ThoiHanVay" class="form-control  " value="10">
                            <div class="input-group-addon">Ngày</div>
                        </div>
                    </div>
                </div>
                <div class="row margin-bottom-20 custom_form">
                    <div class="col-md-3">
                        <p>Tài sản thế chấp</p>
                        <select class="form-control" id="TaiSanTheChap" name="TaiSanTheChap">
                            <option value="Đăng ký xe ô tô" >Đăng ký xe ô tô</option>
                            <option value="Ô tô" >Ô tô </option>
                            <option value="Điện thoại" >Điện thoại</option>
                            <option value="Laptop" >Laptop</option>
                            <option value="Xe máy" >Xe máy</option>
                            <option value="Trang sức" >Trang sức</option>
                        </select>
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-5">
                                <p>Thương hiệu</p>
                                <input type="text" class="form-control" id="ThuongHieu" name="ThuongHieu">
                            </div>
                            <div class="col-md-4">
                                <p>Năm sản xuất</p>
                                <select class="form-control" id="ID_Year" name="NamSanXuat"><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option><option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option></select>
                            </div>
                        </div>

                    </div>
                </div>
                
                <div class="row margin-bottom-20">
                    <div class="box-process" style="display: none">
                        <div class="row">
                            <div class="col-md-3">
                                <div>
                                    <p class="lead color_dark_green"><strong>Lãi suất</strong> </p>
                                </div>
                                <div>
                                    <div class="input-group ipt_process">
                                        <input type="text" class="form-control" id="ID_Interest" value="6" readonly="true">
                                        <div class="input-group-addon">%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-md-offset-1">
                                <div>
                                    <p class="lead color_dark_green"><strong>Tổng lãi</strong> </p>
                                </div>
                                <div>
                                    <div class="input-group ipt_process">
                                        <input type="text" class="form-control" id="ID_TotalInterest" value="60,000" readonly="true">
                                        <div class="input-group-addon">VNĐ</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-md-offset-1">
                                <div>
                                    <p class="lead color_dark_green"><strong>Tổng tiền phải trả</strong> </p>
                                </div>
                                <div>
                                    <div class="input-group ipt_process">
                                        <input type="text" class="form-control" id="ID_TotalMoneyInterest" value="1,060,000" readonly="true">
                                        <div class="input-group-addon">VNĐ</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <p>Mô tả tài sản cầm cố:</p>
                        <textarea name="MoTaTaiSan" class="form-control" rows="4" id="ID_Description"></textarea>
                    </div>
                </div>

                <div class="row margin-bottom-20">
                    <div class="col-md-3">
                        <input type="button" class="btn btn-submit-custom form-control" id="btnAppcet" value="Xác nhận">
                    </div>
                </div>
            </div>
        </div>


        <a href="#home" aria-controls="home" role="tab" data-toggle="tab" id="formInfo-h-1" tabindex="-1" class="title">
            <span class="span_name">Thông tin khách hàng</span>

        </a>

        <div class="content_reg_credict needRemove body" id="formInfo-p-1"  role="tabpanel" aria-labelledby="formInfo-h-1" aria-hidden="true">
            <div class="heading_credict">
                <span>02. Thông tin khách hàng <h8>(Cố lên bạn còn nốt bước này thôi sẽ hoàn thành đăng ký vay rồi)</h8></span>
            </div>

            <div class="body_credict">
                
                <div class="row margin-bottom-20">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-9">
                                <p>Tên khách hàng</p>
                                <input type="text" class="form-control required" id="CustomerName" name="Ten">
                            </div>
                            <div class="col-md-3">
                                <p>Giới tính</p>
                                <select class="form-control" id="ID_Gender" name="GioiTinh">
                                    <option value="1">Nam</option>
                                    <option value="0">Nữ</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
                
                <div class="form-group" style="display: none">
                    <label class="col-sm-2 control-label no-padding">Hộ khẩu thường trú</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="ID_HouseHold" name="HouseHold" value="Hộ khẩu thường trú">
                    </div>
                </div>
                <div class="form-group" style="display: none">
                    <label class="col-sm-2 control-label no-padding">Số CMND</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control mt_20" id="ID_Identity" name="Identity" value="999999999">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control mt_20" placeholder="01-01-1970" id="ID_IdentityDate" name="IdentityDate" value="01-01-1970">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control mt_20" placeholder="Nơi cấp" id="ID_IdentityPlace" name="IdentityPlace" value="Nơi cấp">
                    </div>
                </div>
                <div class="row margin-bottom-20">
                    <div class="col-md-9">
                        <p>Chọn tỉnh thành</p>
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

                </div>
                
                <div class="row margin-bottom-20">
                    <div class="col-md-9">
                        <p>Số di động</p>
                        <input type="text" class="form-control" id="ID_Mobile" name="DienThoai">
                    </div>

                </div>
                <div class="row margin-bottom-20">
                    <div class="col-md-9">
                        <p>Địa chỉ mail</p>
                        <input type="text" class="form-control" id="ID_Email" name="Email">
                    </div>

                </div>

                <div class="row margin-bottom-20">
                    <div class="col-md-3">
                        <button runnat="Button" class="Button" style="position: absolute; right: 0px; top: 40px;"><span>Gửi yêu cầu về cho chúng tôi</span></button>
                    </div>
                </div>

            </div>
        </div>



        <a href="#home" aria-controls="home" role="tab" data-toggle="tab" class="col-xs-12 title" id="formInfo-h-2" tabindex="-1"><span class="span_name">Thiết lập khoản vay cầm đồ</span></a>


        <div class="content_reg_credict needRemove body" id="formInfo-p-2" style="display: none" role="tabpanel" aria-labelledby="formInfo-h-2" aria-hidden="true">
            <div class="heading_credict">
                <span>03. Gửi thiết lập </span>
            </div>

            <div class="body_credict">
                <div class="row margin-bottom-20">
                    <div class="col-md-12">
                        <div class="box_alert">
                            <span class="icon_success">
                                <img src="Files/Images/index/icon/check_success.png" alt="">
                            </span>
                            <h4 class="text-center color_success">Hoàn tất thiết lập khoản vay</h4>
                            <p class="text-center content-notify">
                                <span>Chúng tôi sẽ liên lạc với bạn thông qua </span>
                                <span class="color_success">Email và số điện thoại</span>
                                <span>sau</span>
                                <span class="color_success">30 phút</span>
                                <span>(Trong giờ hành chính) để hỗ trợ bạn về khoản vay</span>
                            </p>
                            <div class=" margin-bottom-20">
                                <div class=" btn-submit-auto">
                                    <a href="/" class="btn btn-submit-custom  form-control" style="padding-top: 9px;">Trở về trang chủ</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div></form>
</div>



<script type="text/javascript">
    var form = $("#formInfo"); var myStep = 0;
    $(document).ready(function () {
        $(".needRemove").css("style", "display:block");
        myStep = 0;
        var c1 = form.validate({
            rules: {
                Trademark: {
                    required: true
                },
                //Images: {
                //    required: true
                //},
                CustomerName: {
                    required: true
                },
                //Birthday: {
                //    required: true
                //},
                //Identity: {
                //    required: true
                //},
                //IdentityDate: {
                //    required: true
                //},
                //IdentityPlace: {
                //    required: true
                //},
                //Household: {
                //    required: true
                //},
                Province: {
                    required: true
                },
                //Address: {
                //    required: true
                //},
                Mobile: {
                    required: true,
                    number: true,
                    minlength: 10,
                    maxlength: 11
                },
                Email: {
                    required: true,
                    email: true
                }

            },
            messages: {
                Trademark: { required: "Nhập vào thương hiệu sản phẩm!" },

                //Images: { required: "Tải ảnh sản phẩm của bạn!" },
                CustomerName: "Nhập vào tên khách hàng!",
                //Birthday: "Nhập vào ngày sinh của bạn!",
                //Identity: "Nhập vào số chứng minh thư của bạn!",
                //IdentityDate: "Nhập vào ngày cấp chứng minh thư của bạn!",
                //IdentityPlace: "Nhập vào nơi cấp chứng minh thư của bạn!",
                //Household: "Nhập vào địa chỉ sổ hộ khẩu của bạn!",
                Province: "Chọn một tỉnh thành!",
                Address: "Nhập vào địa chỉ của bạn!",
                Mobile: "Nhập vào số điện thoại của bạn!",
                Email: "Nhập vào email của bạn!"


            }
        });



        var myFormStep = form.steps({
            enablePagination: false,
            //stepsContainerTag:"input",
            headerTag: "a", titleTemplate: "<span class=\"stt_span\">0#index#</span> #title#",
            bodyTag: "div", forceMoveForward: false,
            transitionEffect: "slideLeft",
            onStepChanging: function (event, currentIndex, newIndex) {

                if (newIndex < currentIndex) {
                    return false;
                }
                else {
                    form.validate().settings.ignore = ":disabled,:hidden";
                    return form.valid();
                }
            },
            //onFinished:{}
            onFinishing: function (event, currentIndex) {

                form.validate().settings.ignore = ":disabled";

                return form.valid();
            }
              , labels: {
                  cancel: "Huỷ",
                  current: "Xác nhận:",
                  pagination: "Phân trang",
                  finish: "Xong",
                  next: "Gửi cho chúng tôi",
                  previous: "Trước",
                  loading: "Đang khởi động ..."
              }
        });

        $("#btnAppcet").click(function () {
            $("#formInfo-p-0").removeClass("activeFm");
            $("#formInfo-p-1").addClass("activeFm");
            myStep++;
            myFormStep.steps("next");

        });
        $("#btnSendRequire").click(function () {
            myStep++;
            $("#formInfo-p-1").removeClass("activeFm");
            $("#formInfo-p-2").addClass("activeFm");
            SendInfo();
            myFormStep.steps("next");

        });
        $("#ID_Year").empty();
        for (var year = 2006; year <= new Date().getFullYear() ; year++) {
            var option = $("<option>").attr("value", year).text(year);

            $("#ID_Year").append(option);
        }
    });

</script>



<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="PawnJS/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="PawnJS/myscript.js"></script>
<!--jQuery filer upload-->
<script type="text/javascript" src="PawnJS/jquery-latest.min.js"></script>
<script type="text/javascript" src="PawnJS/jquery.filer.min.js"></script>
<script type="text/javascript" src="PawnJS/custom.js"></script>
<!-- jQuery validation -->


<script type="text/javascript">

    function Calc() {

        var TotalInterest = 0;
        var TotalMoneyInterest = 0;
        var TotalMoney = $("#ID_TotalMoney").val().replace(/,/g, "") * 1;
        var TotalDays = $("#ID_TotalDays").val().replace(/,/g, "");
        var Interest = $("#ID_Interest").val().replace(/,/g, "");

        TotalInterest = TotalMoney * (Interest / 100) * (TotalDays / 30);
        TotalMoneyInterest = TotalMoney + TotalInterest;

        $("#ID_TotalInterest").val(TotalInterest);
        $("#ID_TotalInterest").formatCurrency({ symbol: "", roundToDecimalPlace: 0 });
        $("#ID_TotalMoneyInterest").val(TotalMoneyInterest);
        $("#ID_TotalMoneyInterest").formatCurrency({ symbol: "", roundToDecimalPlace: 0 });
    }


    function SendInfo() {
        var result = form.valid();
        if (result == true) {
            if (myStep == 2) {
                $(this).off("click");

                //var arrBirthday = $("#Birthday").val().split("-");
                //var strBirthday = arrBirthday[2] + "-" + arrBirthday[1] + "-" + arrBirthday[0];
                //var arrIdentityDate = $("#ID_IdentityDate").val().split("-");
                //var strIdentityDate = $("#Birthday").val();
                var strIdentityDate = '';
                // post data to server /PawnOnline/SavePawnOnline
                $.ajax({
                    type: "POST",
                    url: "/pawn/submit/data",
                    data: {
                        // object customer
                        CustomerName: $("#CustomerName").val(),
                        Gender: $("#ID_Gender").val(),
                        Birthday: strIdentityDate,
                        CustomerIdentity: $("#ID_Identity").val(),
                        IdentityDate: strIdentityDate,
                        IdentityPlace: $("#ID_IdentityPlace").val(),
                        HouseHold: $("#ID_HouseHold").val(),
                        Province: $("#ID_Province").val(),
                        //Address: $("#ID_Address").val(),
                        Address: '',
                        Mobile: $("#ID_Mobile").val(),
                        Email: $("#ID_Email").val(),
                        Marital: $("#ID_Marital").val(),
                        CustomerStatus: 1,
                        // object pawn online
                        Asset: $("#ID_Asset").val(),
                        Trademark: $("#ID_Trademark").val(),
                        ProductionYear: $("#ID_Year").val(),
                        Description: $("#ID_Description").val(),
                        Money: $("#ID_TotalMoney").val().replace(/,/g, ""),
                        Days: $("#ID_TotalDays").val(),
                        Interest: $("#ID_Interest").val(),
                        TotalInterest: $("#ID_TotalInterest").val().replace(/,/g, ""),
                        TotalMoney: $("#ID_TotalMoneyInterest").val().replace(/,/g, ""),
                        PawnOnlineStatus: 1,
                        // object pawn online files
                        //FilePath: $("#ID_Images").val()
                        FilePath: ''
                    },
                    success: function (data) {

                    }
                });
            }
        }
    }
</script>
<!--Include jQuery Carousel -->
<script src="PawnJS/jquery-ui.js"></script>
<!-- Currency -->
<script src="PawnJS/jquery.formatCurrency-1.4.0.min.js"></script>
<script>
    $(function () {
        $("#ID_TotalMoney").formatCurrency({ symbol: "", roundToDecimalPlace: 0 });
        $("#ID_TotalMoney").on("keyup", function () {
            $("#ID_TotalMoney").formatCurrency({ symbol: "", roundToDecimalPlace: 0 });
        });
        $("#ID_TotalDays").formatCurrency({ symbol: "", roundToDecimalPlace: 0 });

        $("#slider-range-max").slider({
            range: "max",
            min: 1000000,
            max: 80000000,
            step: 1000000,
            value: 1000000,
            slide: function (event, ui) {
                $("#ID_TotalMoney").val(ui.value);
                $("#ID_TotalMoney").formatCurrency({ symbol: "", roundToDecimalPlace: 0 });
                Calc();
            }
        });
        $("#ID_TotalMoney").on("blur", function () {
            var TotalMoney = $("#ID_TotalMoney").val().replace(/,/g, '');
            if (isNaN(TotalMoney)) {
                TotalMoney = 1000000;
            } else {
                if (TotalMoney < 1000000) {
                    TotalMoney = 1000000;
                } else if (TotalMoney > 80000000) {
                    TotalMoney = 100000000;
                } else {
                    TotalMoney = parseInt(TotalMoney / 1000000) * 1000000;
                }
            }
            $("#ID_TotalMoney").val(TotalMoney);
            $("#ID_TotalMoney").formatCurrency({ symbol: "", roundToDecimalPlace: 0 });
            $("#ID_Money").slider("value", TotalMoney);
            Calc();
        });

        $("#slider-range-date").slider({
            range: "max",
            min: 10,
            max: 70,
            step: 5,
            value: 10,
            slide: function (event, ui) {
                $("#ID_TotalDays").val(ui.value);
                $("#ID_TotalDays").formatCurrency({ symbol: "", roundToDecimalPlace: 0 });
                Calc();
            }
        });
        $("#ID_TotalDays").on("blur", function () {
            var TotalDays = $("#ID_TotalDays").val().replace(/,/g, '');
            if (isNaN(TotalDays)) {
                TotalDays = 10;
            } else {
                if (TotalDays < 10) {
                    TotalDays = 10;
                } else if (TotalDays > 70) {
                    TotalDays = 70;
                } else {
                    TotalDays = parseInt(TotalDays / 5) * 5;
                }
            }
            $("#ID_TotalDays").val(TotalDays);
            $("#ID_TotalDays").formatCurrency({ symbol: "", roundToDecimalPlace: 0 });
            $("#ID_Days").slider("value", TotalDays);
            Calc();
        });
    });
</script>





        </div>
    </div>
</div>