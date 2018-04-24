<?php require_once 'public/teamplate/header.php'; ?>




<!-- Phần Body -->


<div class="td-main-content-wrap td-main-page-wrap td-container-wrap">
    <div class=tdc-content-wrap>
        <div id=td_uid_1_59befff99fa9d class=tdc-row>
            <div class="vc_row td_uid_14_59befff99fad6_rand  wpb_row td-pb-row">
                <div class="vc_column td_uid_15_59befff99fbb7_rand  wpb_column vc_column_container td-pb-span12">
                    <div class=wpb_wrapper>
                        <div class="td_block_wrap td_block_trending_now td_uid_16_59befff99fc9b_rand td-pb-border-top td_block_template_1" data-td-block-uid=td_uid_16_59befff99fc9b>



                            <!-- script menu hover loi -->
<!-- <script>

var block_td_uid_16_59befff99fc9b=new tdBlock();block_td_uid_16_59befff99fc9b.id="td_uid_16_59befff99fc9b";block_td_uid_16_59befff99fc9b.atts='{"limit":5,"sort":"","post_ids":"","tag_slug":"","autors_id":"","installed_post_types":"","category_id":"","category_ids":"","custom_title":"","custom_url":"","show_child_cat":"","sub_cat_ajax":"","ajax_pagination":"","header_color":"","header_text_color":"","ajax_pagination_infinite_stop":"","td_column_number":3,"td_ajax_preloading":"","td_ajax_filter_type":"","td_ajax_filter_ids":"","td_filter_default_txt":"All","color_preset":"","border_top":"","class":"td_uid_16_59befff99fc9b_rand","el_class":"","offset":"","css":"","tdc_css":"","tdc_css_class":"td_uid_16_59befff99fc9b_rand","live_filter":"","live_filter_cur_post_id":"","live_filter_cur_post_author":"","block_template_id":""}';block_td_uid_16_59befff99fc9b.td_column_number="3";block_td_uid_16_59befff99fc9b.block_type="td_block_trending_now";block_td_uid_16_59befff99fc9b.post_count="5";block_td_uid_16_59befff99fc9b.found_posts="63";block_td_uid_16_59befff99fc9b.header_color="";block_td_uid_16_59befff99fc9b.ajax_pagination_infinite_stop="";block_td_uid_16_59befff99fc9b.max_num_pages="13";tdBlocksArray.push(block_td_uid_16_59befff99fc9b);
</script> -->
<div id=td_uid_16_59befff99fc9b class=td_block_inner>
    <div class=td-block-row>

        <!-- phần tin tuc hot -->

        <div class=td-trending-now-wrapper id=td_uid_16_59befff99fc9b data-start="">
            <div class=td-trending-now-title>TIN HOT</div>
            <div class=td-trending-now-display-area>
                <?php foreach ($HotNews as $HotNews) {
                   ?>

                   <div class="td_module_trending_now td-trending-now-post-0 td-trending-now-post">
                    <h3 class="entry-title td-module-title">
                        <a href="page.php?id=<?= $HotNews->id?>" rel=bookmark title="Sanders Gets Respectful Welcome at Conservative College"><?= $HotNews->TieuDe?></a></h3>
                    </div>
                    <?php } ?>
                </div>
                <div class=td-next-prev-wrap>
                    <a href="#" class="td_ajax-prev-pagex td-trending-now-nav-left" data-block-id=td_uid_16_59befff99fc9b data-moving=left data-control-start="">
                        <i class=td-icon-menu-left></i></a><a href="#" class="td_ajax-next-pagex td-trending-now-nav-right" data-block-id=td_uid_16_59befff99fc9b data-moving=right data-control-start="">
                            <i class=td-icon-menu-right></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- hết phần tin hot -->




        <!-- phần slide show -->




        <div class="td_block_wrap td_block_big_grid_1 td_uid_17_59befff9a0223_rand td-grid-style-4 td-hover-1 td-big-grids td-pb-border-top td_block_template_1" data-td-block-uid=td_uid_17_59befff9a0223>
            <div id=td_uid_17_59befff9a0223 class=td_block_inner>
                <div class=td-big-grid-wrapper>


                    <!-- đổ dữ liệu ra slide show -->

                    <?php $getSlideShow = Slide::all() ?>
                    <?php foreach ($getSlideShow as $SlideShow ) {
    if (($SlideShow->id)==1001) {// nếu id bằng 1 thì cho hiển thị ra slide show to
        
        ?>
        <div class="td_module_mx5 td-animation-stack td-big-grid-post-0 td-big-grid-post td-big-thumb">
            <div class=td-module-thumb>
                <a href="page.php?id=<?= $SlideShow->id?>" rel=bookmark title="<?= $SlideShow->Ten ?>">
                    <img width=534 height=462 class=entry-thumb src="image/slide/<?= $SlideShow->Hinh ?>" alt="" title="<?= $SlideShow->Ten ?>" /></a>
                </div>
                <div class=td-meta-info-container>
                    <div class=td-meta-align>
                        <div class=td-big-grid-meta>

                            <a href="category.php?id=<?= $SlideShow->getNameslide()->idTheLoai ?>" class=td-post-category><?= $SlideShow->getNameslide()->Ten ?></a>
                            <h3 class="entry-title td-module-title">
                               <a href="page.php?id=<?= $SlideShow->id?>" rel=bookmark title="<?= $SlideShow->Ten ?>"><?= $SlideShow->Ten ?></a></h3> 
                           </div>
                           <div class=td-module-meta-info>
                            <span class=td-post-author-name><a href="author.php?id=<?= $SlideShow->getNamecreate()->id ?>"><?= $SlideShow->getNamecreate()->name ?></a> <span>-</span> </span> <span class=td-post-date><time class="entry-date updated td-module-date" datetime="<?= $SlideShow->created_at ?>"><?= $SlideShow->created_at ?></time></span> </div>
                        </div>
                    </div>
                </div>


                <div class=td-big-grid-scroll>

<?php }else{ // ngược lại thì cho hiển thị ra slide show nhỏ

    ?>

    <div class="td_module_mx6 td-animation-stack td-big-grid-post-1 td-big-grid-post td-small-thumb" style="margin-right:1px;">
        <div class=td-module-thumb>
            <a href="page.php?id=<?= $SlideShow->id?>" rel=bookmark title="<?= $SlideShow->Ten ?>">
                <img width=265 height=198 class=entry-thumb src="image/slide/<?= $SlideShow->Hinh ?>" alt="" title="<?= $SlideShow->Ten ?>" /></a>
            </div> 
            <div class=td-meta-info-container>
                <div class=td-meta-align>
                    <div class=td-big-grid-meta>
                        <a href="category.php?id=<?= $SlideShow->getNameslide()->id ?>" class=td-post-category><?= $SlideShow->getNameslide()->Ten ?></a> 
                        <h3 class="entry-title td-module-title">
                            <a href="page.php?id=<?= $SlideShow->id?>" rel=bookmark title="<?= $SlideShow->Ten ?>"><?= $SlideShow->Ten ?></a>
                        </h3> 
                    </div>
                </div>

                <?php } ?>
            </div>
        </div>


        <?php } ?>
        <!-- hết phần slideshow -->


        <div class=clearfix>
            
        </div>
    </div>
</div> 
</div>
</div>
</div>
</div>
<div id=td_uid_3_59befff9a1027 class=tdc-row>
    <div class="vc_row td_uid_18_59befff9a1060_rand td-ss-row wpb_row td-pb-row">
        <div class="vc_column td_uid_19_59befff9a1162_rand  wpb_column vc_column_container td-pb-span8">


            <div class=wpb_wrapper>



                <!-- phần body tin  -->


                <!-- phần body 1 -->
                <?php foreach ($GetMenu as $Menu) {
                    ?>
                    <?php if (($Menu->id)==2) {
                       ?>


                       <div class="td_block_wrap td_block_2 td_uid_20_59befff9a1252_rand td-pb-border-top td_block_template_1 td-column-2 td_block_padding" data-td-block-uid=td_uid_20_59befff9a1252>

                        <style>
                        body .td_uid_20_59befff9a1252_rand .td_module_wrap:hover .entry-title a,body .td_uid_20_59befff9a1252_rand .td-pulldown-filter-link:hover,body .td_uid_20_59befff9a1252_rand .td-subcat-item a:hover,body .td_uid_20_59befff9a1252_rand .td-subcat-item .td-cur-simple-item,body .td_uid_20_59befff9a1252_rand .td_quote_on_blocks,body .td_uid_20_59befff9a1252_rand .td-opacity-cat .td-post-category:hover,body .td_uid_20_59befff9a1252_rand .td-opacity-read .td-read-more a:hover,body .td_uid_20_59befff9a1252_rand .td-opacity-author .td-post-author-name a:hover,body .td_uid_20_59befff9a1252_rand .td-instagram-user a{color:#009688}body .td_uid_20_59befff9a1252_rand .td-next-prev-wrap a:hover,body .td_uid_20_59befff9a1252_rand .td-load-more-wrap a:hover{background-color:#009688;border-color:#009688}body .td_uid_20_59befff9a1252_rand .block-title>*,body .td_uid_20_59befff9a1252_rand .td-trending-now-title,body .td_uid_20_59befff9a1252_rand .td-read-more a,body .td_uid_20_59befff9a1252_rand .td-weather-information:before,body .td_uid_20_59befff9a1252_rand .td-weather-week:before,body .td_uid_20_59befff9a1252_rand .td-subcat-dropdown:hover .td-subcat-more,body .td_uid_20_59befff9a1252_rand .td-exchange-header:before,body .td-footer-wrapper .td_uid_20_59befff9a1252_rand .td-post-category,body .td_uid_20_59befff9a1252_rand .td-post-category:hover{background-color:#009688}body .td-footer-wrapper .td_uid_20_59befff9a1252_rand .block-title>*{padding:6px 7px 5px;line-height:1}body .td_uid_20_59befff9a1252_rand .block-title{border-color:#009688}
                    </style>
<!-- <script>
var block_td_uid_20_59befff9a1252=new tdBlock();block_td_uid_20_59befff9a1252.id="td_uid_20_59befff9a1252";block_td_uid_20_59befff9a1252.atts='{"limit":"6","sort":"","post_ids":"","tag_slug":"","autors_id":"","installed_post_types":"","category_id":"3","category_ids":"","custom_title":"Business","custom_url":"","show_child_cat":"","sub_cat_ajax":"","ajax_pagination":"","header_color":"#009688","header_text_color":"","ajax_pagination_infinite_stop":"","td_column_number":2,"td_ajax_preloading":"preload_all","td_ajax_filter_type":"td_category_ids_filter","td_ajax_filter_ids":"4,5,6","td_filter_default_txt":"All","color_preset":"","border_top":"","class":"td_uid_20_59befff9a1252_rand","el_class":"","offset":"","css":"","tdc_css":"","tdc_css_class":"td_uid_20_59befff9a1252_rand","live_filter":"","live_filter_cur_post_id":"","live_filter_cur_post_author":"","block_template_id":""}';block_td_uid_20_59befff9a1252.td_column_number="2";block_td_uid_20_59befff9a1252.block_type="td_block_2";block_td_uid_20_59befff9a1252.post_count="6";block_td_uid_20_59befff9a1252.found_posts="18";block_td_uid_20_59befff9a1252.header_color="#009688";block_td_uid_20_59befff9a1252.ajax_pagination_infinite_stop="";block_td_uid_20_59befff9a1252.max_num_pages="3";tdBlocksArray.push(block_td_uid_20_59befff9a1252);
</script>  -->


<!-- đoạn scrpit lỗi  -->

<!-- hết đoạn lỗi -->

<div class=td-block-title-wrap>
    <h4 class=block-title>
        <span class=td-pulldown-size><?= $Menu->Ten ?></span></h4>
        <div class="td-pulldown-syle-default td-subcat-filter" id=td_pulldown_td_uid_20_59befff9a1252>
            <ul class=td-subcat-list id=td_pulldown_td_uid_20_59befff9a1252_list>
                <script>
                    function showUser(str) {
                        if (str == "") {
                            document.getElementById("txtHint").innerHTML = "";
                            return;
                        } else { 
                            if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","Ajax1.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>

<!-- lấy ra sub menu -->
<?php 
$getSubMenu= LoaiTin::where(['idTheLoai',"$Menu->id"]); foreach ($getSubMenu as $SubMenu) { ?>
<li class=td-subcat-item value="<?= $SubMenu->id ?>" onclick="showUser(this.value)" > 
    <a class=td-subcat-link id=td_uid_21_59befff9a5267 data-td_filter_value="" data-td_block_id=td_uid_20_59befff9a1252 href="#"><?= $SubMenu->Ten ?></a>

</li>

<?php } ?>

<!-- đóng vòng lấy submenu -->
</ul>

<div class=td-subcat-dropdown>
    <div class=td-subcat-more aria-haspopup=true><span>More</span><i class=td-icon-read-down></i>
    </div>
    <ul class=td-pulldown-filter-list></ul>
</div>
</div>
</div>
<div id=td_uid_20_59befff9a1252 class=td_block_inner>
    <!-- id hien thi ra ajax -->
    <div id="txtHint">
        <div class=td-block-row > 
            <!-- câu lệnh lấy ra tin đầu tiên -->
            
            <?php foreach ($getbody1 as $getBody1) { ?>


            <div class=td-block-span6>
                <div class="td_module_2 td_module_wrap td-animation-stack">
                    <div class=td-module-image>
                        <div class=td-module-thumb>
                            <a href="page.php?id=<?= $getBody1->id ?>" rel=bookmark title="<?=  $getBody1->TieuDe ?>">
                                <img style="width: 324px;height: 160px" class=entry-thumb src="image/tintuc/<?=  $getBody1->Hinh ?>" alt="" title="<?=  $getBody1->TieuDe ?>" />
                            </a>
                        </div>
                        <a href="category.php?id=<?= $getBody1->GetLoaiTin()->id ?>" class=td-post-category><?=  $getBody1->GetLoaiTin()->Ten ?></a>
                    </div>
                    <h3 class="entry-title td-module-title">
                        <a href="page.php?id=<?= $getBody1->id ?>" rel=bookmark title="<?=  $getBody1->TieuDe ?>e"><?=  $getBody1->TieuDe ?></a></h3>
                        <div class=td-module-meta-info>
                            <span class=td-post-author-name><a href="author.php?id=<?=  $getBody1->getTacGia()->id ?>"><?=  $getBody1->getTacGia()->name ?></a> 
                                <span>-</span> </span> <span class=td-post-date><time class="entry-date updated td-module-date" datetime="2015-09-16T08:57:18+00:00">September 16, 2015</time></span> 
                                <div class=td-module-comments>
                                    <a href="page.php?id=<?= $getBody1->id ?>">1</a>
                                </div> 
                            </div>
                            <div class=td-excerpt>
                                <?=  $getBody1->TomTat ?>...
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                </div>
                <div class=td-block-row>


                    <!-- câu lênh lấy ra 2 câu tiếp theo -->
                    <?php foreach ($getbody2 as $getBody2) { ?>


                    <div class=td-block-span6>
                        <div class="td_module_6 td_module_wrap td-animation-stack">
                            <div class=td-module-thumb>

                                <a href="page.php?id=<?= $getBody2->id ?>" rel=bookmark title="The Secret to Your Company&#8217;s Financial Health">

                                    <img width="100" height="70" class=entry-thumb src="image/tintuc/<?=  $getBody2->Hinh ?>"  alt="" title="<?=  $getBody2->TieuDe ?>" /></a></div>
                                    <div class=item-details>

                                        <h3 class="entry-title td-module-title">

                                            <a href="page.php?id=<?= $getBody2->id ?>" rel=bookmark title="The Secret to Your Company&#8217;s Financial Health"><?=  $getBody2->TieuDe ?></a></h3> <div class=td-module-meta-info>
                                                <span class=td-post-date>
                                                    <time class="entry-date updated td-module-date" datetime="2015-09-16T08:55:16+00:00">September 16, 2015</time></span> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class=td-block-row>



                                        <?php foreach ($getbody3 as $getBody3) { ?>


                                        <div class=td-block-span6>
                                            <div class="td_module_6 td_module_wrap td-animation-stack">
                                                <div class=td-module-thumb><a href="page.php?id=<?= $getBody3->id ?>" rel=bookmark title="<?=  $getBody3->TieuDe ?>"><img width=100 height=70 class=entry-thumb src="image/tintuc/<?=  $getBody3->Hinh ?>" alt="" title="<?=  $getBody2->TieuDe ?>" /></a></div>
                                                <div class=item-details>
                                                    <h3 class="entry-title td-module-title"><a href="page.php?id=<?= $getBody3->id ?>" rel=bookmark title="<?=  $getBody3->TieuDe ?>"><?=  $getBody3->TieuDe ?></a></h3> <div class=td-module-meta-info>
                                                        <span class=td-post-date><time class="entry-date updated td-module-date" datetime="2015-09-16T08:50:11+00:00">September 16, 2015</time></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?> 
                                        <!-- đóng vòng getbody3 -->
                                    </div>
                                </div>
                            </div>
                        </div>







                        <?php }else{} ?>
                        <?php } ?>
                        <!-- hết phần body1 -->










                        <!-- đoạn slide body 2 -->

                        <div class="td_block_wrap td_block_15 td_uid_25_59befff9a5fe7_rand td_with_ajax_pagination td-pb-border-top td_block_template_1 td-column-2 td_block_padding" data-td-block-uid=td_uid_25_59befff9a5fe7>

                            <style>
                            body .td_uid_25_59befff9a5fe7_rand .td_module_wrap:hover .entry-title a,body .td_uid_25_59befff9a5fe7_rand .td-pulldown-filter-link:hover,body .td_uid_25_59befff9a5fe7_rand .td-subcat-item a:hover,body .td_uid_25_59befff9a5fe7_rand .td-subcat-item .td-cur-simple-item,body .td_uid_25_59befff9a5fe7_rand .td_quote_on_blocks,body .td_uid_25_59befff9a5fe7_rand .td-opacity-cat .td-post-category:hover,body .td_uid_25_59befff9a5fe7_rand .td-opacity-read .td-read-more a:hover,body .td_uid_25_59befff9a5fe7_rand .td-opacity-author .td-post-author-name a:hover,body .td_uid_25_59befff9a5fe7_rand .td-instagram-user a{color:#e91e63}body .td_uid_25_59befff9a5fe7_rand .td-next-prev-wrap a:hover,body .td_uid_25_59befff9a5fe7_rand .td-load-more-wrap a:hover{background-color:#e91e63;border-color:#e91e63}body .td_uid_25_59befff9a5fe7_rand .block-title>*,body .td_uid_25_59befff9a5fe7_rand .td-trending-now-title,body .td_uid_25_59befff9a5fe7_rand .td-read-more a,body .td_uid_25_59befff9a5fe7_rand .td-weather-information:before,body .td_uid_25_59befff9a5fe7_rand .td-weather-week:before,body .td_uid_25_59befff9a5fe7_rand .td-subcat-dropdown:hover .td-subcat-more,body .td_uid_25_59befff9a5fe7_rand .td-exchange-header:before,body .td-footer-wrapper .td_uid_25_59befff9a5fe7_rand .td-post-category,body .td_uid_25_59befff9a5fe7_rand .td-post-category:hover{background-color:#e91e63}body .td-footer-wrapper .td_uid_25_59befff9a5fe7_rand .block-title>*{padding:6px 7px 5px;line-height:1}body .td_uid_25_59befff9a5fe7_rand .block-title{border-color:#e91e63}
                        </style>
<!-- <script>

var block_td_uid_25_59befff9a5fe7=new tdBlock();block_td_uid_25_59befff9a5fe7.id="td_uid_25_59befff9a5fe7";block_td_uid_25_59befff9a5fe7.atts='{"limit":"3","sort":"","post_ids":"","tag_slug":"","autors_id":"","installed_post_types":"","category_id":"7","category_ids":"","custom_title":"Lifestyle today","custom_url":"","show_child_cat":"","sub_cat_ajax":"","ajax_pagination":"next_prev","header_color":"#e91e63","header_text_color":"","ajax_pagination_infinite_stop":"","td_column_number":2,"td_ajax_preloading":"preload","td_ajax_filter_type":"","td_ajax_filter_ids":"","td_filter_default_txt":"All","color_preset":"","border_top":"","class":"td_uid_25_59befff9a5fe7_rand","el_class":"","offset":"","css":"","tdc_css":"","tdc_css_class":"td_uid_25_59befff9a5fe7_rand","live_filter":"","live_filter_cur_post_id":"","live_filter_cur_post_author":"","block_template_id":""}';block_td_uid_25_59befff9a5fe7.td_column_number="2";block_td_uid_25_59befff9a5fe7.block_type="td_block_15";block_td_uid_25_59befff9a5fe7.post_count="3";block_td_uid_25_59befff9a5fe7.found_posts="20";block_td_uid_25_59befff9a5fe7.header_color="#e91e63";block_td_uid_25_59befff9a5fe7.ajax_pagination_infinite_stop="";block_td_uid_25_59befff9a5fe7.max_num_pages="7";tdBlocksArray.push(block_td_uid_25_59befff9a5fe7);
</script> -->


<!-- phần hình sự -->


<div class=td-block-title-wrap><h4 class=block-title><span class=td-pulldown-size>Pháp Luật-Hình Sự</span></h4></div><div id=td_uid_25_59befff9a5fe7 class="td_block_inner td-column-2">
    <div class=td-block-row>
        <?php foreach ($PhapLuat1 as $PhapLuat1 ) {
          ?>

          <div class=td-block-span4>
            <div class="td_module_mx4 td_module_wrap td-animation-stack">
                <div class=td-module-image>
                    <div class=td-module-thumb><a href="page.php?id=<?= $PhapLuat1->id ?>" rel=bookmark title="<?= $PhapLuat1->TieuDe?>"><img width=218 height=150 class=entry-thumb src="image/tintuc/<?= $PhapLuat1->Hinh?>" alt="" title="<?= $PhapLuat1->TieuDe?>" /></a></div> 
                </div>
                <h3 class="entry-title td-module-title"><a href="page.php?id=<?= $PhapLuat1->id ?>" rel=bookmark title="<?= $PhapLuat1->TieuDe?>"><?= $PhapLuat1->TieuDe?></a></h3>
            </div>
        </div>

        <?php } ?>


    </div>
</div>
<div class=td-next-prev-wrap>
    <a href="#" class="td-ajax-prev-page ajax-page-disabled" id=prev-page-td_uid_25_59befff9a5fe7 data-td_block_id=td_uid_25_59befff9a5fe7><i class="td-icon-font td-icon-menu-left"></i></a>
    <a href="#" class=td-ajax-next-page id=next-page-td_uid_25_59befff9a5fe7 data-td_block_id=td_uid_25_59befff9a5fe7><i class="td-icon-font td-icon-menu-right"></i></a>

</div>
</div> 



<!-- hết phần pháp luật và hình sự -->


<!-- phần Văn Hóa -->


<div class=clearfix></div>
<div class="td_block_wrap td_block_11 td_uid_26_59befff9a655f_rand td_with_ajax_pagination td-pb-border-top td_block_template_1 td-column-2" data-td-block-uid=td_uid_26_59befff9a655f>
    <style>
    body .td_uid_26_59befff9a655f_rand .td_module_wrap:hover .entry-title a,body .td_uid_26_59befff9a655f_rand .td-pulldown-filter-link:hover,body .td_uid_26_59befff9a655f_rand .td-subcat-item a:hover,body .td_uid_26_59befff9a655f_rand .td-subcat-item .td-cur-simple-item,body .td_uid_26_59befff9a655f_rand .td_quote_on_blocks,body .td_uid_26_59befff9a655f_rand .td-opacity-cat .td-post-category:hover,body .td_uid_26_59befff9a655f_rand .td-opacity-read .td-read-more a:hover,body .td_uid_26_59befff9a655f_rand .td-opacity-author .td-post-author-name a:hover,body .td_uid_26_59befff9a655f_rand .td-instagram-user a{color:#607d8b}body .td_uid_26_59befff9a655f_rand .td-next-prev-wrap a:hover,body .td_uid_26_59befff9a655f_rand .td-load-more-wrap a:hover{background-color:#607d8b;border-color:#607d8b}body .td_uid_26_59befff9a655f_rand .block-title>*,body .td_uid_26_59befff9a655f_rand .td-trending-now-title,body .td_uid_26_59befff9a655f_rand .td-read-more a,body .td_uid_26_59befff9a655f_rand .td-weather-information:before,body .td_uid_26_59befff9a655f_rand .td-weather-week:before,body .td_uid_26_59befff9a655f_rand .td-subcat-dropdown:hover .td-subcat-more,body .td_uid_26_59befff9a655f_rand .td-exchange-header:before,body .td-footer-wrapper .td_uid_26_59befff9a655f_rand .td-post-category,body .td_uid_26_59befff9a655f_rand .td-post-category:hover{background-color:#607d8b}body .td-footer-wrapper .td_uid_26_59befff9a655f_rand .block-title>*{padding:6px 7px 5px;line-height:1}body .td_uid_26_59befff9a655f_rand .block-title{border-color:#607d8b}
</style>


<script>
    function showUsera(stra) {
        if (stra == "") {
            document.getElementById("txtHinta").innerHTML = "";
            return;
        } else { 
            if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHinta").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","Ajax2.php?qa="+stra,true);
        xmlhttp.send();
    }
}
</script>

<!-- script loi -->
<script src="public/js/jsloi2.js type="text/javascript" ></script>


<div class=td-block-title-wrap>
    <h4 class=block-title>
        <span class=td-pulldown-size>Văn Hóa</span></h4>
        

        <div class="td-pulldown-syle-default td-subcat-filter" id=td_pulldown_td_uid_26_59befff9a655f>
            <ul class=td-subcat-list id=td_pulldown_td_uid_26_59befff9a655f_list>
                <?php foreach ($VanHoa as $VanHoa) {
                   ?>
                   <li class=td-subcat-item value="<?= $VanHoa->id ?>" onclick="showUsera(this.value)" >
                    <a class=td-subcat-link id=td_uid_27_59befff9aaf3b data-td_filter_value="" data-td_block_id=td_uid_26_59befff9a655f href="#"><?= $VanHoa->Ten ?></a>
                </li>
                
                <?php } ?>
            </ul>
            <div class=td-subcat-dropdown>
                <div class=td-subcat-more aria-haspopup=true><span>More</span><i class=td-icon-read-down></i></div>
                <ul class=td-pulldown-filter-list></ul>
            </div>
        </div>
    </div>

    <div id=td_uid_26_59befff9a655f class=td_block_inner>
        <div id="txtHinta">
            <?php foreach ($VanHoa0 as $VanHoa1) {
               ?>
               <div class=td-block-span12>
                <div class="td_module_10 td_module_wrap td-animation-stack">
                    <div class=td-module-thumb>
                        <a href="page.php?id=<?= $VanHoa1->id ?>" rel=bookmark title="<?= $VanHoa1->TieuDe ?>">
                            <img style="width: 218px;height: 150px" class=entry-thumb src="image/tintuc/<?= $VanHoa1->Hinh ?>" alt="" title="<?= $VanHoa1->TieuDe ?>" /></a></div>
                            <div class=item-details>
                                <h3 class="entry-title td-module-title">
                                    <a href="page.php?id=<?= $VanHoa1->id ?>" rel=bookmark title="<?= $VanHoa1->TieuDe ?>"><?= $VanHoa1->TieuDe ?></a></h3>
                                    <div class=td-module-meta-info>
                                        <a href="category.php?id=<?= $VanHoa1->GetLoaiTin()->id ?>" class=td-post-category><?= $VanHoa1->GetLoaiTin()->Ten ?></a> <span class=td-post-author-name><a href="author.php?id=<?= $VanHoa1->getTacGia()->id ?>"><?= $VanHoa1->getTacGia()->name ?></a> <span>-</span> </span> <span class=td-post-date><time class="entry-date updated td-module-date" datetime="2015-09-16T08:52:00+00:00">September 16, 2015</time></span> <div class=td-module-comments><a href="page.php?id=<?= $VanHoa1->id ?>">0</a></div> </div>
                                        <div class=td-excerpt>
                                            <?= $VanHoa1->TomTat ?></div>
                                        </div>
                                    </div>
                                </div>

                                <?php } ?>
                            </div>




                        </div>

                        <!-- phần LoadMore -->



                        <div class=td-load-more-wrap>

                           <a href="#" class="td_ajax_load_more td_ajax_load_more_js" id=next-page-td_uid_26_59befff9a655f data-td_block_id=td_uid_26_59befff9a655f>Load more<i class="td-icon-font td-icon-menu-down"></i></a>








                       </div>
                   </div>
               </div>
           </div>
           <div class="vc_column td_uid_31_59befff9ac52c_rand  wpb_column vc_column_container td-pb-span4">
              <div class=wpb_wrapper>
                  <div class="td_block_wrap td_block_social_counter td_uid_32_59befff9ac614_rand td-social-style3 td-social-colored td-pb-border-top td_block_template_1">
                      <h4 class=block-title>
                          <span class=td-pulldown-size>Follow us</span>
                      </h4>
                      <div class=td-social-list>
                          <div class="td_social_type td-pb-margin-side td_social_facebook">
                              <div class=td-social-box>
                                  <div class="td-sp td-sp-facebook"></div>
                                  <span class=td_social_info>5,627</span>
                                  <span class="td_social_info td_social_info_name">Fans</span>
                                  <span class=td_social_button><a href="https://www.facebook.com/duc.developer">Like</a></span>
                              </div>
                          </div>
                          <div class="td_social_type td-pb-margin-side td_social_twitter">
                              <div class=td-social-box>
                                  <div class="td-sp td-sp-twitter"></div>
                                  <span class=td_social_info>179</span>
                                  <span class="td_social_info td_social_info_name">Followers</span>
                                  <span class=td_social_button>
                                      <a href="https://twitter.com/duc.developer">Follow</a>
                                  </span>
                              </div>
                          </div>
                          <div class="td_social_type td-pb-margin-side td_social_youtube">
                              <div class=td-social-box>
                                  <div class="td-sp td-sp-youtube">
                                  </div>
                                  <span class=td_social_info>3,737</span>
                                  <span class="td_social_info td_social_info_name">Subscribers</span>
                                  <span class=td_social_button><a href="http://www.youtube.com/duc.developer">Subscribe</a></span>
                              </div>
                          </div>
                      </div>
                  </div> 
                  <div class="td-a-rec td-a-rec-id-sidebar  ">
                      <span class=td-adspot-title>- Advertisement -</span>

                      <div class=td-visible-desktop>
                        <a href="#"><img src="image/ads.jpg" alt="" /></a>
                    </div>
                    <div class=td-visible-tablet-landscape>
                        <a href="#"><img src="image/ads.jpg" alt="" /></a>
                    </div>
                    <div class=td-visible-tablet-portrait>
                        <a href="#"><img src="image/ads.jpg" alt="" /></a>
                    </div>
                    <div class=td-visible-phone>
                        <a href="#"><img src="image/ads.jpg" alt="" /></a>
                    </div>
                </div>

                <div class="td_block_wrap td_block_9 td_uid_34_59befff9ac76e_rand td_with_ajax_pagination td-pb-border-top td_block_template_1 td-column-1 td_block_padding td_block_bot_line" data-td-block-uid=td_uid_34_59befff9ac76e>
<!-- <script>
var block_td_uid_34_59befff9ac76e=new tdBlock();block_td_uid_34_59befff9ac76e.id="td_uid_34_59befff9ac76e";block_td_uid_34_59befff9ac76e.atts='{"limit":"3","sort":"comment_count","post_ids":"","tag_slug":"","autors_id":"","installed_post_types":"","category_id":"","category_ids":"","custom_title":"Most commented","custom_url":"","show_child_cat":"","sub_cat_ajax":"","ajax_pagination":"next_prev","header_color":"","header_text_color":"","ajax_pagination_infinite_stop":"","td_column_number":1,"td_ajax_preloading":"preload","td_ajax_filter_type":"","td_ajax_filter_ids":"","td_filter_default_txt":"All","color_preset":"","border_top":"","class":"td_uid_34_59befff9ac76e_rand","el_class":"","offset":"","css":"","tdc_css":"","tdc_css_class":"td_uid_34_59befff9ac76e_rand","live_filter":"","live_filter_cur_post_id":"","live_filter_cur_post_author":"","block_template_id":""}';block_td_uid_34_59befff9ac76e.td_column_number="1";block_td_uid_34_59befff9ac76e.block_type="td_block_9";block_td_uid_34_59befff9ac76e.post_count="3";block_td_uid_34_59befff9ac76e.found_posts="63";block_td_uid_34_59befff9ac76e.header_color="";block_td_uid_34_59befff9ac76e.ajax_pagination_infinite_stop="";block_td_uid_34_59befff9ac76e.max_num_pages="21";tdBlocksArray.push(block_td_uid_34_59befff9ac76e);
</script> -->
<div class=td-block-title-wrap>
    <h4 class=block-title>
        <span class=td-pulldown-size>Most commented</span>
    </h4>
</div>
<div id=td_uid_34_59befff9ac76e class=td_block_inner>

    <!-- bình luận commented -->
    <?php foreach ($commented as $commented ) {
       ?>
       <div class=td-block-span12>
        <div class="td_module_8 td_module_wrap">
            <div class=item-details>
                <h3 class="entry-title td-module-title">
                    <a href="page.php?id=<?=$commented->id ?>" rel=bookmark title="<?=$commented->NoiDung ?>"><?=$commented->NoiDung ?></a></h3>
                    <div class=td-module-meta-info>
                        <a href="page.php?id=<?=$commented->id ?>" class=td-post-category><?=$commented->getTheLoaicomment()->TieuDe ?></a> 
                        <span class=td-post-author-name>
                            <a href="author.php?id=<?=$commented->getNguoicommnet()->id ?>"><?=$commented->getNguoicommnet()->name ?></a> <span>-</span> </span> 
                            <span class=td-post-date>
                                <time class="entry-date updated td-module-date" datetime="2015-09-16T08:51:27+00:00">September 16, 2015</time></span> 
                                <div class=td-module-comments>
                                    <a href="page.php?id=<?=$commented->id ?>">5</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <!-- hết commneted -->

            </div><div class=td-next-prev-wrap>
               <a href="#" class="td-ajax-prev-page ajax-page-disabled" id=prev-page-td_uid_34_59befff9ac76e data-td_block_id=td_uid_34_59befff9ac76e><i class="td-icon-font td-icon-menu-left"></i></a>
               <a href="#" class=td-ajax-next-page id=next-page-td_uid_34_59befff9ac76e data-td_block_id=td_uid_34_59befff9ac76e><i class="td-icon-font td-icon-menu-right"></i></a></div></div> 
               <div class="td_block_wrap td_block_13 td_uid_35_59befff9aced3_rand td-pb-border-top td_block_template_1 td-column-1" data-td-block-uid=td_uid_35_59befff9aced3>

                <!--  <script>var block_td_uid_35_59befff9aced3=new tdBlock();block_td_uid_35_59befff9aced3.id="td_uid_35_59befff9aced3";block_td_uid_35_59befff9aced3.atts='{"limit":"2","sort":"","post_ids":"","tag_slug":"","autors_id":"","installed_post_types":"","category_id":"11","category_ids":"","custom_title":"QUẢNG CÁO - THỜI TRANG","custom_url":"","show_child_cat":"","sub_cat_ajax":"","ajax_pagination":"","header_color":"","header_text_color":"","ajax_pagination_infinite_stop":"","td_column_number":1,"td_ajax_preloading":"","td_ajax_filter_type":"","td_ajax_filter_ids":"","td_filter_default_txt":"All","color_preset":"","border_top":"","class":"td_uid_35_59befff9aced3_rand","el_class":"","offset":"1","css":"","tdc_css":"","tdc_css_class":"td_uid_35_59befff9aced3_rand","live_filter":"","live_filter_cur_post_id":"","live_filter_cur_post_author":"","block_template_id":""}';block_td_uid_35_59befff9aced3.td_column_number="1";block_td_uid_35_59befff9aced3.block_type="td_block_13";block_td_uid_35_59befff9aced3.post_count="2";block_td_uid_35_59befff9aced3.found_posts="5";block_td_uid_35_59befff9aced3.header_color="";block_td_uid_35_59befff9aced3.ajax_pagination_infinite_stop="";block_td_uid_35_59befff9aced3.max_num_pages="2";tdBlocksArray.push(block_td_uid_35_59befff9aced3);</script> -->

                <div class=td-block-title-wrap>
                   <h4 class=block-title>
                       <span class=td-pulldown-size>QUẢNG CÁO </span></h4></div>
                       <div id=td_uid_35_59befff9aced3 class=td_block_inner>

                        <?php foreach ($QuangCao as $QuangCao1) {
                           ?>

                           <div class="td_module_mx3 td_module_wrap td-animation-stack">
                            <div class=td-module-thumb>
                                <a href="ads.php?id=<?= $QuangCao1->id ?>" rel=bookmark title="<?= $QuangCao1->TieuDe ?>">
                                    <img width=324 height=235 class=entry-thumb src="image/ads-contents/<?= $QuangCao1->Hinh ?>"  title="<?= $QuangCao1->TieuDe ?>" /></a></div>
                                    <div class=td-module-meta-info>
                                        <h3 class="entry-title td-module-title">
                                            <a href="ads.php?id=<?= $QuangCao1->id ?>" rel=bookmark title="<?= $QuangCao1->TieuDe ?>"><?= $QuangCao1->TieuDe ?></a></h3> 
                                            <span class=td-post-author-name>
                                                <a href="author.php?id=<?= $QuangCao1->create_by ?>">admin</a> <span>-</span> </span> 
                                                <span class=td-post-date>
                                                    <time class="entry-date updated td-module-date" datetime="2015-08-16T08:51:03+00:00">August 16, 2015</time></span> 
                                                    <div class=td-module-comments>
                                                        <a href="td-post-fashion-week-parties-night-4/index.html#respond">0</a></div> </div>
                                                    </div>

                                                    <?php } ?>


                                                </div></div> 


                                                <!-- phần menu nhanh bên trái -->



                                                <div class="td_block_wrap td_block_15 td_uid_36_59befff9ad5e2_rand td-pb-border-top td_block_template_1 td-column-1 td_block_padding" data-td-block-uid=td_uid_36_59befff9ad5e2>
<!-- <script>var block_td_uid_36_59befff9ad5e2=new tdBlock();block_td_uid_36_59befff9ad5e2.id="td_uid_36_59befff9ad5e2";block_td_uid_36_59befff9ad5e2.atts='{"limit":"4","sort":"","post_ids":"","tag_slug":"","autors_id":"","installed_post_types":"","category_id":"14","category_ids":"","custom_title":"Food &amp; recipes","custom_url":"","show_child_cat":"","sub_cat_ajax":"","ajax_pagination":"","header_color":"","header_text_color":"","ajax_pagination_infinite_stop":"","td_column_number":1,"td_ajax_preloading":"preload","td_ajax_filter_type":"","td_ajax_filter_ids":"","td_filter_default_txt":"Hoa Hậu","color_preset":"","border_top":"","class":"td_uid_36_59befff9ad5e2_rand","el_class":"","offset":"","css":"","tdc_css":"","tdc_css_class":"td_uid_36_59befff9ad5e2_rand","live_filter":"","live_filter_cur_post_id":"","live_filter_cur_post_author":"","block_template_id":""}';block_td_uid_36_59befff9ad5e2.td_column_number="1";block_td_uid_36_59befff9ad5e2.block_type="td_block_15";block_td_uid_36_59befff9ad5e2.post_count="4";block_td_uid_36_59befff9ad5e2.found_posts="5";block_td_uid_36_59befff9ad5e2.header_color="";block_td_uid_36_59befff9ad5e2.ajax_pagination_infinite_stop="";block_td_uid_36_59befff9ad5e2.max_num_pages="2";tdBlocksArray.push(block_td_uid_36_59befff9ad5e2);</script>
-->

<div class=td-block-title-wrap>
    <h4 class=block-title>
        <?php foreach ($TheGioi as $TheGioi ) {
            ?>
            <span class=td-pulldown-size><?= $TheGioi->Ten  ?></span></h4></div>
            <?php } ?>
            <div id=td_uid_36_59befff9ad5e2 class="td_block_inner td-column-1">

                <div class=td-cust-row>
                    <?php foreach ($TheGioi1 as $TheGioi1 ) {
                        ?>
                        <div class=td-block-span12>
                            <div class="td_module_mx4 td_module_wrap td-animation-stack">
                                <div class=td-module-image>
                                    <div class=td-module-thumb><a href="page.php?id=<?=$TheGioi1->id ?>" rel=bookmark title="<?= $TheGioi1->TieuDe  ?>">
                                        <img width=218 height=150 class=entry-thumb src="image/tintuc/<?= $TheGioi1->Hinh  ?>" alt="" title="<?= $TheGioi1->TieuDe  ?>" /></a></div> 
                                    </div>
                                    <h3 class="entry-title td-module-title"><a href="page.php?id=<?=$TheGioi1->id ?>" rel=bookmark title="<?= $TheGioi1->TieuDe  ?>"><?= $TheGioi1->TieuDe  ?></a></h3>
                                </div>
                            </div>
                            <?php } ?>
                            <!-- dong vong lap lay danh sach trai -->
                            <!-- bug1 xoa 1 div o day -->
                        </div>
                    </div>
                </div> 

                <div class=clearfix>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div id=td_uid_6_59befff9adf1b class="tdc-row stretch_row">

    <div class="vc_row td_uid_37_59befff9adf54_rand  wpb_row td-pb-row">
        <style scoped>.td_uid_37_59befff9adf54_rand{transform:translateZ(0)!important;-webkit-transform:translateZ(0)!important;position:relative!important;margin-bottom:48px!important;padding-top:24px!important}.td_uid_37_59befff9adf54_rand::before{content:''!important;width:100%!important;height:100%!important;position:absolute!important;top:0!important;left:0!important;display:block!important;z-index:-1!important;background-color:#222!important;background-size:cover!important;background-position:center top!important}@media (max-width:767px){.td_uid_37_59befff9adf54_rand{transform:translateZ(0)!important;-webkit-transform:translateZ(0)!important;position:relative!important;padding-top:0!important}}
    </style>
    <div class="vc_column td_uid_38_59befff9ae057_rand  wpb_column vc_column_container td-pb-span12">
        <div class=wpb_wrapper>
            <div class="td_block_wrap td_block_video_playlist">
                <div id=td_uid_39_59befff9ae23d class=td_block_inner>
                    <div class=td_video_playlist_column_3>
                        <div class=td_video_playlist_title>
                            <div class=td_video_title_text>MUST WATCH</div></div>



                            <div class=td_wrapper_video_playlist>
                                <?php $videoshot1=Video::all() ?>
                                <?php foreach ($videoshot1 as $videoshot ) {

                                   ?>
                                   <?php if (($videoshot->id)==1) {
                                       ?>
                                       <div class="td_wrapper_player td_wrapper_playlist_player_youtube" data-first-video=<?=$videoshot->link ?> data-autoplay=0>
                                        <div id=player_youtube></div>
                                    </div>
                                    <div class="td_container_video_playlist ">
                                        <div class=td_video_controls_playlist_wrapper>
                                            <div class=td_video_stop_play_control>
                                                <a class="td-sp-video-play td-sp td_youtube_control"></a></div>
                                                <div class="td_current_video_play_title_youtube td_video_title_playing"></div>
                                                <div class="td_current_video_play_time_youtube td_video_time_playing"></div>
                                            </div>
                                            <div id=td_youtube_playlist_video class="td_playlist_clickable td_add_scrollbar_to_playlist">
                                                <a class="td_<?=$videoshot->link ?> td_click_video td_click_video_youtube" data-video-id=<?=$videoshot->link ?>>
                                                   <div class=td_video_thumb >
                                                       <img src="../../img.youtube.com/vi/l5hNAx_wVIE/default.jpg" alt="" />
                                                   </div>
                                                   <?php }else{ ?>

                                                   <div class=td_video_title_and_time>
                                                       <div class=td_video_title><?=$videoshot->TieuDe ?></div>
                                                       <div class=td_video_time>07:35</div></div></a>
                                                       <a class="td_<?=$videoshot->link ?> td_click_video td_click_video_youtube" data-video-id=<?=$videoshot->link ?> >
                                                          <div class=td_video_thumb>
                                                              <img src="../../img.youtube.com/vi/6Viyt2aIOG8/default.jpg" alt="" /></div>
                                                              


                                                              <?php } ?>
                                                              <?php } ?>




                                                          </div>
                                                      </div>
                                                  </div>

                                                  <script>
                                                    ;if(undefined===window.td_youtube_list_ids){
                                                        window.td_youtube_list_ids={}};
                                                        <?php foreach ($videoshot1 as $Videojs ) {
                                                           ?>
                                                           window.td_youtube_list_ids['td_<?= $Videojs->link ?>']={title:"<?= $Videojs->TieuDe?>",time:"07:35"};
                                                           <?php } ?>
                                                       </script>
                                                   </div></div> </div></div></div></div> </div>




                                                   <!-- phần body 4 the gioi -->
                                                   <div class="td-container td-pb-article-list">
                                                    <div class=td-pb-row>

                                                        <!-- body4 trai -->
                                                        <div class="td-pb-span8 td-main-content" role=main>
                                                            <div class="td-ss-main-content td_block_template_1">
                                                                <div class=td-block-title-wrap><h4 class=block-title><span class=td-pulldown-size>
                                                                    <?php foreach ($TheThao as $TheGioi4) {
                                                                       ?>
                                                                       <?php } ?>
                                                                       <?= $TheGioi4->GetLoaiTin2()->Ten?>
                                                                   </span></h4></div>



                                                                   <div class=td-block-row>
                                                                    <?php foreach ($TheThao as $TheGioi4) {
                                                                       ?>
                                                                       <div class=td-block-span6>
                                                                        <div class="td_module_1 td_module_wrap td-animation-stack">
                                                                            <div class=td-module-image>
                                                                                <div class=td-module-thumb>
                                                                                    <a href="page.php?id=<?=$TheGioi4->id ?>" rel=bookmark title="<?= $TheGioi4->TieuDe?>">

                                                                                        <img  class=entry-thumb src="image/tintuc/<?= $TheGioi4->Hinh?>" style="width: 324px;height: 160px" title="<?= $TheGioi4->TieuDe?>" /></a></div> 
                                                                                        <a href="category.php?id=<?=$TheGioi4->GetLoaiTin2()->id ?>" class=td-post-category><?= $TheGioi4->GetLoaiTin2()->Ten?></a> </div>
                                                                                        <h3 class="entry-title td-module-title"><a href="page.php?id=<?=$TheGioi4->id ?>" rel=bookmark title="<?= $TheGioi4->TieuDe?>"><?= $TheGioi4->TieuDe?></a></h3>
                                                                                        <div class=td-module-meta-info>
                                                                                            <span class=td-post-author-name><a href="author.php?id=<?=$TheGioi4->getTacGia()->id ?>"><?= $TheGioi4->getTacGia()->name ?></a> <span>-</span> </span> 
                                                                                            <span class=td-post-date><time class="entry-date updated td-module-date" datetime="2015-09-16T08:57:18+00:00">September 16, 2015</time></span> <div class=td-module-comments><a href="page.php?id=<?=$TheGioi4->id ?>">1</a></div> </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <?php } ?>

                                                                                </div>


                                                                                <!-- phần phân trang -->


                                                                                <script>
                                                                                    function showUserb(strb) {
                                                                                        if (stra == "") {
                                                                                            document.getElementById("txtHintb").innerHTML = "";
                                                                                            return;
                                                                                        } else { 
                                                                                            if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHintb").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","AjaxPhanTrang.php?qb="+strb,true);
        xmlhttp.send();
    }
}
</script>



<!-- phan phan trang -->

<div class="page-nav td-pb-padding-side">
    <span class=current>1</span>
    <a href="category.php?id=6" class=page title=2>2</a>
    <a href="category.php?id=6" class=page title=3>3</a>
    <span class=extend>...</span>
    <a href="category.php?id=6" class=last title=7>7</a>
    <a href="category.php?id=6"><i class=td-icon-menu-right></i></a>
    <span class=pages>Page 1 of 7</span>
    <div class=clearfix></div>

</div> 
</div>
</div>

<!-- phần bài viết mới -->

<div class="td-pb-span4 td-main-sidebar" role=complementary>
    <div class=td-ss-main-sidebar>
        <aside class="td_block_template_1 widget widget_recent_entries">
           <h4 class=block-title><span>Bài Viết Mới</span></h4> 

           <ul>
               <?php foreach ($baiVietMoi as $baiVietMoi1 ) {
                  ?>
                  <li>
                    <a href="page.php?id=<?=$baiVietMoi1->id ?>"><?=$baiVietMoi1->TieuDe ?></a>
                </li>
                <?php } ?>
            </ul>
        </aside> 


        <!-- phần hiển thị chủ đề -->

        <aside class="td_block_template_1 widget widget_categories">

            <h4 class=block-title><span>DANH MỤC</span></h4> 
            <ul>
                <?php foreach ($LayChuDe as $LayChuDe1 ) { ?>
                <li class="cat-item cat-item-3">
                    <a href="category.php?id=<?=$LayChuDe1->id ?>"><?= $LayChuDe1->Ten ?></a>

                </li>
                <?php } ?>
            </ul>

        </aside> </div>
    </div>
</div>
</div>
</div>
































<!-- phần footer -->





<?php include_once('public/teamplate/footer.php') ?>



