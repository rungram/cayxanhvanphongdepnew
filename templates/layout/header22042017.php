<?php
	$d->reset();
	$sql_list ="select *	from #_product_list order by stt asc limit 0,5";
	$d->query($sql_list);
	$list =$d->result_array();
	
	$d->reset();
	$sql_tin_l ="select *	from #_tinloai1_1_list order by stt asc limit 0,3";
	$d->query($sql_tin_l);
	$tin_l=$d->result_array();
?>

<div id="headPage">
	<div class="page-width"> <a href="index.html" id="logo"> <img src="images/logo.png" /></a>
	<?php include _template."layout/menu_top.php"; ?>
	<?php include _template."layout/menu_top_mobi.php"; ?>
	<div class="box-search-language">
		<div class="search-box">
		<div class="search-div">
			<input runnat="TextBox" class="TextBox" id="txtSearch_RD150" placeholder="Tìm kiếm theo từ khoá" />
			<button runnat="Button" class="Button" id="Button1_RD153"> </button>
		</div>
		<button class="Button open-button"> </button>
		</div>
		<div class="language"> <a class="vi"> Tiếng việt</a><span>|</span><a class="en">Tiếng Anh</a> </div>
	</div>
	</div>
</div>

<div class="headHeight"> </div>
