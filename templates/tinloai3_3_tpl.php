<?php 
         
			$d->reset();
			$sql_tinl="select * from #_tinloai1_1 where hienthi =1 order by id desc";
			$d->query($sql_tinl);	
			$result_tinl=$d->result_array();		
			$curPage = isset($_GET['p']) ? $_GET['p'] : 1;
			$url=getCurrentPageURL();
			$maxR=10;
			$maxP=5;
			$paging=paging_home($result_tinl , $url, $curPage, $maxR, $maxP);
			$result_tinl=$paging['source'];
			
			$d->reset();
			$sql_spkhac="select * from #_tinloai1_1_list where hienthi =1 order by stt asc and id<>'$id'";
			$d->query($sql_spkhac);
			$result_spkhac=$d->result_array();
			$sql_tinll="select * from #_tinloai1_1_list where hienthi =1 order by stt asc";
			$d->query($sql_tinll);	
			$result_tinll=$d->result_array();	

?>

<div id="pageContent" class="page-width">
        	
          <div id="mainContentPage">
              <div class="project-category">
                    <div>
                        <h1 class="seo-tag">
                            Mẫu nhà đẹp
                        </h1>
                        
                    </div>
                    <div class="clear">
                    </div>
                    <div class="sep40 sep-menu">
                    </div>
            </div>
                
    <div runnat="Window" class="Window" id="Window1_RD6600" apply="yPhM+NHI1I4udJTQGLC2nzVVF5bz+MrHiRf7JtK+t1JDXfIa/J7e7w==">
		
        <div class="nav">
            <div class="btn-next-prev">
                <a runnat="LinkButton" id="btnPrevPost_RD6603" class="LinkButton prev">
                    Bài trước</a>
                <a runnat="LinkButton" id="btnNextPost_RD6606" class="LinkButton next">
                    Bài sau</a>
            </div>
            <a href="/trang-chu.aspx">Dự Án</a><span></span><a href="/du-an/biet-thu.aspx">Biệt Thự</a><span></span><a>BIỆT THỰ ANH TIẾN - BÌNH TÂN</a>
        </div>

        <div runnat="Div" class="Div" id="RD313_RD314" style="background: #f2f2f2; padding: 10px;">
          <p>
            <a href="http://khonggianmoi.net/don-gia/chuong-trinh-uu-dai.aspx" target="_blank">
              <img alt="" src="images/KHONGGIANMOI-Giam-Thiet-Ke-2017.jpg" style="height:200px; width:930px">
            </a>
          </p>
        </div>        
        
        <div class="sep10">
        </div>
        <div id="slideMedias">
            <div class="flexslider">
                <ul class="slides">
                    
                </ul>
            </div>
            <div class="carousel">
                <ul class="slides">
                    
                </ul>
            </div>
        </div>
        <div class="sep10">
        </div>
        <!-- AddThis Button BEGIN -->
        <div class="social">
            <a class="view-box">
                6344
            </a><a class="addthis_button_facebook_like" fb:like:layout="button"></a><a
                class="addthis_button_google_plusone" g:plusone:size="medium" style="width: 32px;
                overflow: hidden;"></a><a class="addthis_button_tweet"></a><a class="addthis_button_pinterest_pinit"
                    pi:pinit:layout="vertical"></a>
            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-528af6733b365321"></script>
        </div>
        <!-- AddThis Button END -->
        <div class="sep10">
        </div>
        <h1>
            <div runnat="Div" id="RD6609_RD6610" class="Div title-content utm">
			
            <?php echo $result_tinl["ten_vi"];?>
		</div>
        </h1>
        <div runnat="Div" id="RD6611_RD6612" class="Div tip-content">
			
        
		</div>
        <div class="sep20">
        </div>
        <div class="gadget-box">
            
            <div class="clear">
            </div>
        </div>
        <div runnat="Div" id="Div2_RD6617" class="Div detail-content">
			
        <p><img alt="" src="upload/sanpham/<?=$result_tinl["photo"]?>" style="height:621px; width:930px" /></p>
<?=$result_tinl["mota_en"]?>
<p><br />
<span style="font-size:12px"><span style="font-family:verdana,geneva,sans-serif"><strong><span style="color:#696969">Xem thêm :&nbsp;</span><a href="http://khonggianmoi.net/Mau-nha-dep.aspx" style="-webkit-tap-highlight-color: transparent; cursor: pointer; text-decoration: none; color: rgb(0, 0, 0); border: 0px; margin: 0px; padding: 0px; font-size: 12.96px; text-shadow: none;" target="_blank"><span style="color:#696969">Mẫu nhà đẹp</span></a><span style="color:#696969">,&nbsp;</span><a href="http://khonggianmoi.net/Du-an/Biet-thu.aspx" style="-webkit-tap-highlight-color: transparent; cursor: pointer; text-decoration: none; color: rgb(0, 0, 0); border: 0px; margin: 0px; padding: 0px; font-size: 12.96px; text-shadow: none;" target="_blank"><span style="color:#696969">biệt thự đẹp</span></a><span style="color:#696969">,&nbsp;</span><a href="http://khonggianmoi.net/Du-an/Nha-pho.aspx" style="-webkit-tap-highlight-color: transparent; cursor: pointer; text-decoration: none; color: rgb(0, 0, 0); border: 0px; margin: 0px; padding: 0px; font-size: 12.96px; text-shadow: none;" target="_blank"><span style="color:#696969">mẫu nhà phố</span></a><span style="color:#696969">,</span></strong></span></span></p>

		</div>
        <!-- AddThis Button BEGIN -->
        <div class="social">
            <a class="view-box">
                6344
            </a><a class="addthis_button_facebook_like" fb:like:layout="button"></a><a
                class="addthis_button_google_plusone" g:plusone:size="medium" style="width: 32px;
                overflow: hidden;"></a><a class="addthis_button_tweet"></a><a class="addthis_button_pinterest_pinit"
                    pi:pinit:layout="vertical"></a>
            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-528af6733b365321"></script>
        </div>
        <div class="btn-next-prev">
            <a runnat="LinkButton" id="btnPrevPost2_RD6620" class="LinkButton prev">
                Bài trước</a>
            <a runnat="LinkButton" id="btnNextPost2_RD6623" class="LinkButton next">
                Bài sau</a>
        </div>
        <div class="sep20">
        </div>
        <div class="title-relative utm">
            Xem dự án liên quan
        </div>
        <div class="sep20">
        </div>
        <div class="list-item">
			<?php for($i=0,$count_spnam=count($result_spkhac);$i<$count_spnam;$i++) 
			{ 
			?>
			<div class="element-item" data-category="2">                    
                	<div class="p10">                        
                    	<div class="rel">                            
                            <a href="chi-tiet-san-pham/<?=$result_spkhac[$i]['tenkhongdau']?>-<?=$result_spkhac[$i]['id']?>.html">
                                 <img src="upload/sanpham/<?=$result_spkhac["photo"]?>" alt="BIỆT THỰ ANH TIẾN - BÌNH TÂN" />                         
                                 <div class="title-element utm"><?php echo $result_spkhac[$i]['ten_vi'];?>                              
                                 </div>                                
                                 <div class="tip clearP">                                    
                                     <p><?php echo $result_spkhac[$i]['mota_vi'];?> </p>
                                 </div>              
                            </a>                        
						</div>                    
                    </div>                
			</div>
		   <?php
				}
		   ?>
            

            <div class="clear">
            </div>
        </div>
    
	</div><script id="script-server">$("#txtSearch_RD6585").textbox();$("#txtSearch_RD6585").unbind("keypress");$("#txtSearch_RD6585").onEnter("Search");$("#Button1_RD6588").unbind("click");$("#Button1_RD6588").click(function(){$("#Button1_RD6588").actionComponent("Search")});$("#Window1_RD6600").data("paramPage","lang=vi&sub1=biet-thu&sub2=biet-thu-anh-tien-binh-tan");$("#btnPrevPost_RD6603").attr("href","/du-an/biet-thu/biet-thu-chu-tham-thua-thien-hue.aspx");$("#btnPrevPost2_RD6620").attr("href","/du-an/biet-thu/biet-thu-chu-tham-thua-thien-hue.aspx");$("#btnNextPost_RD6606").setDisplay(false);$("#btnNextPost2_RD6623").setDisplay(false);</script>
    
          </div>
      </div>