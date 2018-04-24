<?php include_once ('public/teamplate/header.php'); ?>

</div>
<!-- phần body -->
<?php 
$id=$_GET['id'];

$author=User::where(['id',"$id"]);



 ?>


<?php foreach ($author as $author1 ) {
 ?>

<?php $demsobaidang=TinTuc::sqlbullder([" SELECT count(id) AS sobai FROM tintuc WHERE create_by= $author1->id"]); ?>
<?php foreach ($demsobaidang as $demsobaidang1) {
} ?>
  <?php if (($author1->avatar)==NULL) {
 	$author1->avatar='default.png';
 }else{
 	$author1->avatar=$author1->avatar;
 	} ?>
<div class="td-main-content-wrap td-container-wrap">
<div class="td-container ">
<div class=td-crumb-container>
<div class=entry-crumbs><span><a title="" class=entry-crumb href="index.php">Home</a></span> <i class="td-icon-right td-bread-sep td-bred-no-url-last"></i> 
<span class=td-bred-no-url-last>Authors</span> <i class="td-icon-right td-bread-sep td-bred-no-url-last"></i> <span class=td-bred-no-url-last>Posts by <?= $author1->name ?></span></div> </div>
<div class=td-pb-row>
<div class="td-pb-span8 td-main-content">
<div class=td-ss-main-content>
<div class=td-page-header>
<h1 class="entry-title td-page-title">
<span><?= $author1->name ?></span>
</h1>
</div>
<div class="author-box-wrap td-author-page">
<img src="image/user/<?= $author1->avatar ?>" width=96 height=96 alt="Mary Karen" class="avatar avatar-96 wp-user-avatar wp-user-avatar-96 alignnone photo" /> <div class=desc>
<div class=td-author-counters>
<span class=td-author-post-count>
<?= $demsobaidang1->sobai?> POSTS </span>
<span class=td-author-comments-count>
0 COMMENTS </span>
</div>
<div class=td-author-url>
<a href="http://www.vietnammmo.net/">http://www.vietnammmo.net</a></div>My name is <?= $author1->name ?>.<?= $author1->GioiThieu ?>
<div class=td-author-social>
<span class=td-social-icon-wrap>
<a target=_blank href="#" title=Evernote>
<i class="td-icon-font td-icon-evernote"></i>
</a>
</span>
<span class=td-social-icon-wrap>
<a target=_blank href="https://www.facebook.com/duc.developer" title=Facebook>
<i class="td-icon-font td-icon-facebook"></i>
</a>
</span>
<span class=td-social-icon-wrap>
<a target=_blank href="https://plus.google.com/duc.developer" title="Google+">
<i class="td-icon-font td-icon-googleplus"></i>
</a>
</span>
<span class=td-social-icon-wrap>
<a target=_blank href="#" title=Instagram>
<i class="td-icon-font td-icon-instagram"></i>
</a>
</span>
<span class=td-social-icon-wrap>
<a target=_blank href="https://twitter.com/duc.developer" title=Twitter>
<i class="td-icon-font td-icon-twitter"></i>
</a>
</span>
<span class=td-social-icon-wrap>
<a target=_blank href="#" title=VKontakte>
<i class="td-icon-font td-icon-vk"></i>
</a>
</span>
<span class=td-social-icon-wrap>
<a target=_blank href="https://www.youtube.com/user/duc.developer" title=Youtube>
<i class="td-icon-font td-icon-youtube"></i>
</a>
</span> </div>
</div>
<div class=clearfix></div>
</div>
<div class=td-block-row>

<?php $LayBaiuser=TinTuc::whereLimit(['create_by',"$author1->id",'0','20']) ?>
<?php foreach ($LayBaiuser as $LayBaiuser1 ) {
 ?>
<div class=td-block-span6>
<div class="td_module_1 td_module_wrap td-animation-stack">
<div class=td-module-image>
<div class=td-module-thumb>
<a href="page.php?id=<?=$LayBaiuser1->id ?>" rel=bookmark title="<?=$LayBaiuser1->TieuDe ?>">
<img class=entry-thumb src="image/tintuc/<?=$LayBaiuser1->Hinh ?>" style="width:324px;height:160px" alt="" title="Sanders Gets Respectful Welcome at Conservative College" /></a></div> 

<a href="category.php?id=<?=$LayBaiuser1->GetLoaiTin()->id ?>" class=td-post-category><?=$LayBaiuser1->GetLoaiTin2()->Ten ?></a> </div>
<h3 class="entry-title td-module-title">

<a href="page.php?id=<?=$LayBaiuser1->id ?>" rel=bookmark title="<?=$LayBaiuser1->TieuDe ?>"><?=$LayBaiuser1->TieuDe ?></a></h3>
<div class=td-module-meta-info>
<span class=td-post-author-name><a href="index.php"><?=$author1->name ?></a> <span>-</span> </span> <span class=td-post-date><time class="entry-date updated td-module-date" datetime="2015-09-16T08:57:18+00:00">September 16, 2015</time></span> <div class=td-module-comments><a href="page.php?id=<?=$LayBaiuser1->id ?>">0</a></div> </div>
</div>
</div>

<?php } ?>

</div>



<div class="page-nav td-pb-padding-side"><span class=current>1</span><a href="page/2/index.html" class=page title=2>2</a><a href="page/3/index.html" class=page title=3>3</a><span class=extend>...</span><a href="page/7/index.html" class=last title=7>7</a><a href="page/2/index.html"><i class=td-icon-menu-right></i></a><span class=pages>Page 1 of 7</span><div class=clearfix></div></div> </div>
</div>
<div class="td-pb-span4 td-main-sidebar">
<div class=td-ss-main-sidebar>
<div class="td_block_wrap td_block_social_counter td_block_widget td_uid_14_59b8c2abcfe74_rand td-social-style3 td-social-colored td-pb-border-top td_block_template_1"><h4 class=block-title><span class=td-pulldown-size>FOLLOW US</span></h4><div class=td-social-list><div class="td_social_type td-pb-margin-side td_social_facebook"><div class=td-social-box><div class="td-sp td-sp-facebook"></div><span class=td_social_info>5,584</span><span class="td_social_info td_social_info_name">Fans</span><span class=td_social_button><a href="https://www.facebook.com/tagDiv" target=_blank>Like</a></span></div></div><div class="td_social_type td-pb-margin-side td_social_twitter"><div class=td-social-box><div class="td-sp td-sp-twitter"></div><span class=td_social_info>178</span><span class="td_social_info td_social_info_name">Followers</span><span class=td_social_button><a href="https://twitter.com/tagDivOfficial" target=_blank>Follow</a></span></div></div><div class="td_social_type td-pb-margin-side td_social_youtube"><div class=td-social-box><div class="td-sp td-sp-youtube"></div><span class=td_social_info>3,701</span><span class="td_social_info td_social_info_name">Subscribers</span><span class=td_social_button><a href="http://www.youtube.com/tagdiv" target=_blank>Subscribe</a></span></div></div></div></div> <div class="td-a-rec td-a-rec-id-sidebar  "><span class=td-adspot-title>- Advertisement -</span><div class=td-visible-desktop>
<a href="#"><img src="../../wp-content/uploads/2015/09/rec300.jpg" alt="" /></a>
</div>
<div class=td-visible-tablet-landscape>
<a href="#"><img src="../../wp-content/uploads/2015/09/rec200.jpg" alt="" /></a>
</div>
<div class=td-visible-tablet-portrait>
<a href="#"><img src="../../wp-content/uploads/2015/09/rec200.jpg" alt="" /></a>
</div>
<div class=td-visible-phone>
<a href="#"><img src="../../wp-content/uploads/2015/09/rec300.jpg" alt="" /></a>
</div></div><div class="td_block_wrap td_block_7 td_block_widget td_uid_16_59b8c2abcffe9_rand td_with_ajax_pagination td-pb-border-top td_block_template_1 td-column-1 td_block_padding" data-td-block-uid=td_uid_16_59b8c2abcffe9>

<!-- <script>var block_td_uid_16_59b8c2abcffe9=new tdBlock();block_td_uid_16_59b8c2abcffe9.id="td_uid_16_59b8c2abcffe9";block_td_uid_16_59b8c2abcffe9.atts='{"limit":"4","sort":"","post_ids":"","tag_slug":"","autors_id":"","installed_post_types":"","category_id":"","category_ids":"","custom_title":"LATEST NEWS","custom_url":"","show_child_cat":"","sub_cat_ajax":"","ajax_pagination":"next_prev","header_color":"#","header_text_color":"#","ajax_pagination_infinite_stop":"","td_column_number":1,"td_ajax_preloading":"","td_ajax_filter_type":"","td_ajax_filter_ids":"","td_filter_default_txt":"All","color_preset":"","border_top":"","class":"td_block_widget td_uid_16_59b8c2abcffe9_rand","el_class":"","offset":"","css":"","tdc_css":"","tdc_css_class":"td_uid_16_59b8c2abcffe9_rand","live_filter":"","live_filter_cur_post_id":"","live_filter_cur_post_author":"","block_template_id":""}';block_td_uid_16_59b8c2abcffe9.td_column_number="1";block_td_uid_16_59b8c2abcffe9.block_type="td_block_7";block_td_uid_16_59b8c2abcffe9.post_count="4";block_td_uid_16_59b8c2abcffe9.found_posts="63";block_td_uid_16_59b8c2abcffe9.header_color="#";block_td_uid_16_59b8c2abcffe9.ajax_pagination_infinite_stop="";block_td_uid_16_59b8c2abcffe9.max_num_pages="16";tdBlocksArray.push(block_td_uid_16_59b8c2abcffe9);</script> -->


<div class=td-block-title-wrap>
<h4 class=block-title>
<span class=td-pulldown-size>LATEST NEWS</span></h4></div>
<div id=td_uid_16_59b8c2abcffe9 class=td_block_inner>

<?php $lastnews = TinTuc::sqlbullder(["SELECT * FROM tintuc ORDER BY id DESC LIMIT 0,5"]); ?>


<?php foreach ($lastnews as $lastnews1) {
 ?>

<div class=td-block-span12>
<div class="td_module_6 td_module_wrap td-animation-stack">
<div class=td-module-thumb>
<a href="page.php?id=<?=$lastnews1->id ?>" rel=bookmark title="<?=$lastnews1->TieuDe ?>">
<img class=entry-thumb src="image/tintuc/<?=$lastnews1->Hinh ?>" style="width:100px; height:70px" alt="" title="<?=$lastnews1->TieuDe ?>" /></a></div>
<div class=item-details>
<h3 class="entry-title td-module-title">
<a href="page.php?id=<?=$lastnews1->id ?>" rel=bookmark title="<?=$lastnews1->TieuDe ?>"><?=$lastnews1->TieuDe ?></a></h3> <div class=td-module-meta-info>
<span class=td-post-date>
<time class="entry-date updated td-module-date" datetime="2015-09-16T08:57:18+00:00">September 16, 2015</time></span> </div>
</div>
</div>
</div>

<?php } ?>




</div><div class=td-next-prev-wrap><a href="#" class="td-ajax-prev-page ajax-page-disabled" id=prev-page-td_uid_16_59b8c2abcffe9 data-td_block_id=td_uid_16_59b8c2abcffe9><i class="td-icon-font td-icon-menu-left"></i></a><a href="#" class=td-ajax-next-page id=next-page-td_uid_16_59b8c2abcffe9 data-td_block_id=td_uid_16_59b8c2abcffe9><i class="td-icon-font td-icon-menu-right"></i></a></div></div> </div>
</div>
</div>
</div>
</div>


<?php } ?>

<?php include_once ('public/teamplate/footer.php'); ?>



