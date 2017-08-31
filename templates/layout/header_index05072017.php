<?php
	$d->reset();
	$sql_list ="select *	from #_product_list order by stt asc limit 0,5";
	$d->query($sql_list);
	$list =$d->result_array();
	
	$d->reset();
	$sql_tin_l ="select * from #_tinloai1_1_list order by stt asc limit 0,3";
	$d->query($sql_tin_l);
	$tin_l=$d->result_array();
	
	$sanpham_arr_all = array();
	$d->reset();
	$sql_list ="select ten_vi from #_product order by stt asc limit 0,5";
	$d->query($sql_list);
	$sanpham_arr_all =$d->result_array();
	$sanpham_all = array();
	foreach ($sanpham_arr_all as $item)
	{
	    $sanpham_all[] = $item['ten_vi'];
	}
?>
<script>
  $( function() {
	  var availableTags = <?php echo json_encode($sanpham_all); ?>;
    $( "#keyword" ).autocomplete({
      source: availableTags
    });
  } );
  </script>
<script language="javascript"> 
	function doEnter(evt){
	// IE		 // Netscape/Firefox/Opera
		var key;
		if(evt.keyCode == 13 || evt.which == 13){
		onSearch(evt);
		}
	}
	function onSearch(evt) {	
		var keyword = document.getElementById("keyword").value;
		if(keyword=='')
		alert('Bạn chưa nhập tên!');
		else{
		//alert(keyword);
		//var encoded = Base64.encode(keyword);
		location.href = "index.php?com=tim-kiem&keyword="+keyword;
		//alert(location.href);
//		location.href = "google.com";
		loadPage(document.location);		
		//alert();
		}
	}	 
</script>
<div id="header" class="header">
	<!--/.top-header -->
	<!-- MAIN HEADER -->
	<div class="container main-header">
	<div class="row">
		<div class="col-xs-12 col-sm-3 logo"> <a title="" href="index.html"> <img alt="Logo" src="images/logo.png"> </a> </div>
		<div class="col-xs-7 col-sm-5 header-search-box">
		<form class="form-inline">
			<div class="form-group input-serach">
			<input id="keyword" type="text" class="txtsearch" name="q" autocomplete="off" placeholder="Tìm sản phẩm của bạn...">
			</div>
			<button class="pull-right btn-search" type="button" onClick="onSearch(event,'keyword');">Tìm&nbsp;kiếm</button>
		</form>
		</div>
		<div class="col-xs-12 col-sm-2 block-language">
		<div class="language-content"> <a href="#"><img alt="English" src="http://maison-decor.vn/frame/default/images/en.png" />English</a> <a href="#"><img alt="Vietnam" src="http://maison-decor.vn/frame/default/images/vn.png" />Tiếng Việt</a> </div>
		</div>
		<div class="col-xs-12 col-sm-2 hotline">
		<div class="content-hotline"> <span class="label-hotline">Hotline</span> <span class="re-hotline">0917 049 077</span> </div>
		</div>
	</div>
	</div>
	<!-- END MANIN HEADER -->
	<div id="nav-top-menu" class="nav-top-menu">
	<div class="container">
		<div class="row">
		<div id="main-menu" class="col-sm-12 main-menu">
			<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <i class="fa fa-bars"></i> </button>
				<a class="navbar-brand" href="#">MENU</a> </div>
				<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="index.html"><span class="icon-menu i-home"></span><br />
					Trang chủ</a></li>
					<?php include _template."layout/menu_top_list_index.php"; ?>
					<li><a href="http://homedecor.info.vn/lien-he.html" target="_blank"><span class="icon-menu i-contact"></span><br />
					Liên hệ</a></li>
				</ul>
				</div>
				<!--/.nav-collapse -->
			</div>
			</nav>
		</div>
		</div>
		<!-- userinfo on top-->
		<div id="form-search-opntop"> </div>
		<!-- userinfo on top-->
		<div id="user-info-opntop"> </div>
		<!-- CART ICON ON MMENU -->
		<div id="shopping-cart-box-ontop"> <a href=""><i class="fa fa-shopping-cart"></i></a>
		<div class="shopping-cart-box-ontop-content"></div>
		</div>
	</div>
	</div>
</div>
