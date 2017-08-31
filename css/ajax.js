jQuery(document).ready(function($){
	// Đăng ký
	$('input[name="submit_dangky"]').click(function(){
		if($("#dangky").valid()){
			$('.loading').css('display', 'block');
			$ten = $('input[name="ten"]').val();
			$password = $('input[name="password"]').val();
			$email = $('input[name="email"]').val();
			$dienthoai = $('input[name="dienthoai"]').val();
			
			$.ajax({
				data: {
					'dangky': true,
					'ten': $ten,
					'password': $password,
					'email': $email,
					'dienthoai': $dienthoai,
				},
				cache: false,
				type: 'GET',
				url: ajaxurl,
				datatype: "html",
				success: function(data){
					$('.loading').css('display', 'none');
					if(data == 'exists')
						alert('Email đã tồn tại');
					else{
						alert('Bạn đã đăng ký thành công. Vui lòng kiểm tra email để kích hoạt');
						$.fancybox.close();
					}
				}
			});
			return false;
		}
	});
	// Đăng nhập
	$('input[name="submit_dangnhap"]').click(function(){
		$dn_ten = $('input[name="dn_ten"]').val();
		$dn_password = $('input[name="dn_password"]').val();
		if($dn_ten != '' && $dn_password != ''){
			$('.loading').css('display', 'block');
			$.ajax({
				data: {
					'dangnhap': true,
					'dn_ten': $dn_ten,
					'dn_password': $dn_password,
				},
				cache: false,
				type: 'GET',
				url: ajaxurl,
				datatype: "html",
				success: function(data){
					$('.loading').css('display', 'none');
					if(data == 'exist')
						alert('Tài khoản chưa được kích hoạt');
					else if(data == 'notok')
						alert('Tên đăng nhập hoặc mật khẩu không đúng');
					else
						window.location.href=ajaxurl;
				}
			});
		}
		return false;
	});
});