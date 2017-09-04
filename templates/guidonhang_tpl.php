<?php if(!defined('_source')) die("Error");
		
		if(isset($_POST["hoten2"]))
	{
			include_once _lib."C_email.php";
			
			
			//add vo database
			$tennguoidat=$_POST['hoten2'];
			$diachi=$_POST['diachi'];
			$dienthoai=$_POST['dienthoai'];
			$email=$_POST['email'];
			$tinh_tp=$_POST['tinh_tp'];
			$noidung=$_POST['noidung'];	
			if($_SESSION['user_dn'])
			$user=$_SESSION['user_dn'];
			$ngaydathang=lay_thoigian();
			$ngaytim = date('Y-m-d');
			
			$max=count($_SESSION['cart']);	
			for($i=0;$i<$max;$i++)
		
 		   {
			     	$id_sp=$_SESSION['cart'][$i]['productid'];
					$soluong=$_SESSION['cart'][$i]['qty'];					
					$tenmathang=get_product_name($id_sp);
					$hinhmathang=get_hinh($id_sp);
					$pmota=get_mota($id_sp);
					$pkodau=get_kodau($id_sp);
					$masp=get_masp($id_sp);
					$psale=get_giagiam($id_sp);
					if($psale ==0) 
					$giamathang=get_price($id_sp);
					else 
					$giamathang=get_giagiam($id_sp);
					$tenkhongdau=get_kodau($id_sp);
					$ship = $soluong*get_phivanchuyen($id_sp);
					$vat =  $giamathang*$soluong*get_vat($id_sp)/100;
					$size= $_SESSION['size'.$id_sp];
			        $mau= $_SESSION['mau'.$id_sp];
		             
	  		 $tonggia=$giamathang*$soluong+$vat+$ship;
	 		 $d->reset();
	  		 $sql_sendgiohang="insert into #_donhang(tennguoidat,dienthoai,diachi,noidung,tenmathang,giamathang,soluong,ngaydathang,tonggia,hinh,user,tenkhongdau,masp,size,mau,email,tinh_tp,ngaytim)
	values('$tennguoidat','$dienthoai','$diachi','$noidung','$tenmathang','$giamathang','$soluong','$ngaydathang','$tonggia','$hinhmathang','$user','$tenkhongdau','$masp','$size','$mau','$email','$tinh_tp','$ngaytim')";
   	  		 $send_giohang=$d->query($sql_sendgiohang);	
 		   
        }
   	   //add vo database
	   
		 //add vo mail	
			
			$body = '<table>';
			$body .= '
				<tr>
					<th colspan="2">&nbsp;</th>
				</tr>
				<tr>
					<th colspan="2">Đơn hàng từ website</th>
				</tr>
				<tr>
					<th colspan="2">&nbsp;</th>
				</tr>
				<tr>
					<th>Họ tên :</th><td>'.$_POST['hoten2'].'</td>
				</tr>
				<tr>
					<th>Tỉnh/TP :</th><td>'.$_POST['tinh_tp'].'</td>
				</tr>
				<tr>
					<th>Địa chỉ :</th><td>'.$_POST['diachi'].'</td>
				</tr>
				<tr>
					<th>Email :</th><td>'.$_POST['email'].'</td>
				</tr>
				<tr>
					<th>Điện thoại :</th><td>'.$_POST['dienthoai'].'</td>
				</tr>
				
				<tr>
					<th>Ghi chú :</th><td>'.$_POST['noidung'].'</td>
				</tr>
				
				';
			
			$body .= '</table>';
			
			
			
			//danh sach san pham
			$body .= '<table border="1" cellpadding="1" cellspacing="1">';
			$body .= 
				'<tr style="border-bottom:1px solid #cecece">
				  <td align="center" width="5%">STT</td>
				  <td align="center">Mã sản phẩm</td>
				  <td align="center">Sản phẩm</td>
				  <td align="center">Đơn Giá</td>
				  <td align="center">Số lượng</td>
			      <td align="center">VAT</td>
			      <td align="center">Phí vận chuyển</td>
				  <td align="center">Thành Tiền</td>
				</tr>';
		
   			for($i=0;$i<$max;$i++)
				{
					
					$id_sp=$_SESSION['cart'][$i]['productid'];
					$soluong=$_SESSION['cart'][$i]['qty'];					
					$tenmathang=get_product_name($id_sp);
					$hinhmathang=get_hinh($id_sp);
					$pmota=get_mota($id_sp);
					$pkodau=get_kodau($id_sp);
					$psale=get_giagiam($id_sp);
					$pma=get_masp($id_sp);
					$size= $_SESSION['size'.$id_sp];
			        $mau= $_SESSION['mau'.$id_sp];
					if($psale ==0) 
					$giamathang=get_price($id_sp);
					else 
					$giamathang=get_giagiam($id_sp);
					$ship = $soluong*get_phivanchuyen($id_sp);
					$vat = $giamathang*$soluong*get_vat($id_sp)/100;
					$j=$i+1;
			$body .='<tr>
						<td align="center" width="5%">'.$j.'</td>
					
						<td align="center">'.$pma.'</td>
						<td align="center">'.$tenmathang.'</td>
						<td align="center">'. number_format ($giamathang,0,",",".").' VNĐ</td>
						
						<td align="center">'.$soluong.'</td>
					    <td align="center">'. number_format ($vat,0,",",".").' VNĐ</td>
				        <td align="center">'. number_format ($ship,0,",",".").' VNĐ</td>
						<td align="center">'. number_format(($soluong*$giamathang+$ship+$vat),0,",",".").' VNĐ</td>
						</tr>';
					
				}
				
			$body .= '</table>';
				
				
			
			 //add vo mail	

include_once "phpmailer/class.phpmailer.php";  
include_once "phpmailer/class.smtp.php";    

//Khởi tạo đối tượng
$subject = "Thông tin đơn hàng.";
//$from = "shopnana.info@gmail.com";
$from = "ctykythuatkimthinhphat@gmail.com";
$from_name = $tennguoidat;

$to = $email;
//$to = "ngoisaoleloi@gmail.com";
//$to = $txt_email;

global $error;
$mail = new PHPMailer();  // tạo một đối tượng mới từ class PHPMailer
$mail->IsSMTP(); // bật chức năng SMTP
$mail->IsSMTP(); // bật chức năng SMTP
$mail->SMTPDebug = 0;  // kiểm tra lỗi : 1 là  hiển thị lỗi và thông báo cho ta biết, 2 = chỉ thông báo lỗi
$mail->SMTPAuth = true;  // bật chức năng đăng nhập vào SMTP này
$mail->SMTPSecure = 'ssl'; // sử dụng giao thức SSL vì gmail bắt buộc dùng cái này

$mail->Host = 'smtp.gmail.com';
$mail->Port = 465; 
$mail->Username = "info.cayxanhvanphongdep@gmail.com";  
$mail->Password = "Kcdagtemyatpxh1";           
$mail->SetFrom($from, 'CÂY XANH VĂN PHÒNG ĐẸP');
$mail->From = $from;		

$mail->Subject = $subject;
$mail->Body = $body;
$mail->AddAddress($to);

// $mail->AddReplyTo($email,"Thông tin phản hồi.");// Ấn định email sẽ nhận khi người dùng reply lại.
$mail->AddCC('info.cayxanhvanphongdep@gmail.com',"Thông tin đơn hàng khách đặt.");// Ấn định email sẽ nhận khi người dùng reply lại.
$mail->WordWrap = 50; // set word wrap   
$mail->IsHTML(true); // send as HTML
//Thiết lập định dạng font chữ
$mail->CharSet = "utf-8";


	if(!$mail->Send()) {
 			transfer("Lỗi - Vui lòng thử lại", "");
						}
 	else {
			  unset($_SESSION['cart']);
			
			  ?>
              <script>
    			alert("Gửi đơn hàng thành công");
				location.href="index.html";
			   </script>
              
              <?php
			
			
		}	
    }
?>