<?php 
$d->reset();
$sql_tinlq="select * from #_tinloai1_1 where hienthi =1 order by stt asc";
$d->query($sql_tinlq);
$result_tinlq=$d->result_array();
?>
<div id="pageContent" class="page-width">
<!--           <div id="mainContentPage"> -->
<!--               <div class="project-category"> -->
<!--                     <div> -->
<!--                         <h1 class="seo-tag"> -->
<!--                             Mẫu nhà đẹp -->
<!--                         </h1> -->
<!--                         <a href="/du-an.aspx"> -->
<!--                             Dự Án</a> -->
<!--                         <a href="/du-an/biet-thu.aspx">Biệt Thự</a><a href="/du-an/nha-pho.aspx">Nhà Phố</a><a href="/du-an/noi-that.aspx">Nội Thất</a><a href="/du-an/san-vuon.aspx">Sân Vườn</a><a href="/du-an/tu-van.aspx">Tư Vấn</a><a href="/du-an/video-nha-dep-biet-thu.aspx">Video</a> -->
<!--                         <a href="/thi-cong.aspx"> -->
<!--                             Thi Công</a> <a href="/don-gia.aspx" class="select"> -->
<!--                                 Bảng Giá</a> -->
<!--                     </div> -->
<!--                     <div class="clear"> -->
<!--                     </div> -->
<!--                     <div class="sep40 sep-menu"> -->
<!--                     </div> -->
<!--             </div> -->
<!--            </div> -->
                 
    <div runnat="Window" class="Window" id="Window1_RD5964" apply="yPhM+NHI1I4udJTQGLC2n90DS38HaBGDhCMQjpVdXttZBZMJY/QEsg==">
		
        <div runnat="Div" id="Div2_RD5967" class="Div title-content utm">
			
        Bảng Giá
		</div>
		
		<div runnat="Div" id="Div1_RD2530" class="Div detail-content">
			
        <p><span style="font-size:12px"><span style="font-family:arial,helvetica,sans-serif">
        <big>Công Ty <strong>HOME DECOR</strong> luôn cập nhật thường xuyên đơn giá thị trường, 
        tìm hiểu nghiên cứu các vật liệu mới, công nghệ ứng dụng mới, phù hợp cho sức khỏe cộng đồng, 
        an toàn cho công trình, vật liệu thân thiện với môi trường xanh. Chúng tôi luôn cam kết thực 
        hiện đúng chủng loại vật tư trong xây dựng.</big></span></span></p>

		</div>
		
        <div class="sep20">
        </div>
        <div runnat="DataList" id="RD5971_RD5972" class="DataList list-item">
			<div class="paging paging-top hide">
		     <a class="page selected" data="1">1</a>
		    </div>
		    <?php
            for($i=0,$count_tinlq=count($result_tinlq);$i<$count_tinlq;$i++) 
            {
            	?>
            		<div class="datalist-content">
        		      <div class="price-item">                
        		          <div class="inner-item">                    
        		              <a href="tin-tuc-detail/<?=$result_tinlq[$i]["tenkhongdau"]?>-<?=$result_tinlq[$i]["id"]?>.html">                        
        		                  <div class="title-price-item utm"><?=$result_tinlq[$i]["ten_$lang"]?></div>
        		                  <div class="img"><img src="<?=_upload_tinloai1_1_l.$result_tinlq[$i]['thumb']?>" alt="<?=$result_tinlq[$i]["ten_$lang"]?>"></div>                    
        			         </a>
        		         </div>            
        	         </div>
                    </div>
            	<?php
            }
            ?>
        <div class="paging paging-bottom hide"><a class="page selected" data="1">1</a></div>
		</div>
        <div class="clear">
        </div>
    
	</div><script id="script-server">$("#txtSearch_RD5949").textbox();$("#txtSearch_RD5949").unbind("keypress");$("#txtSearch_RD5949").onEnter("Search");$("#Button1_RD5952").unbind("click");$("#Button1_RD5952").click(function(){$("#Button1_RD5952").actionComponent("Search")});$("#RD5971_RD5972").data("Template","&lt;div class=\"price-item\"&gt;                &lt;div class=\"inner-item\"&gt;                    &lt;a href='@{GetDetailUrl}'&gt;                        &lt;div class=\"title-price-item utm\"&gt;                            @{Name}&lt;/div&gt;                        &lt;div class=\"img\"&gt;                            &lt;img src=\"@{Media}?w=174&amp;h=118&amp;mode=crop\" alt=\"@{Name}\" /&gt;                        &lt;/div&gt;                    &lt;/a&gt;                &lt;/div&gt;            &lt;/div&gt;");$("#RD5971_RD5972").data("CurrentPage",1);$("#RD5971_RD5972").datalist().reloadPaging();$("#Window1_RD5964").data("paramPage","lang=vi");</script>

         
      </div>