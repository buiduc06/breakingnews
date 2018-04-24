<?php require_once 'public/teamplate/header.php'; ?>
</div>











<?php 

$id=$_GET['id'];
$Menucon=LoaiTin::where(['idTheLoai',"$id"]);
$category=LoaiTin::whereLimit(['idTheLoai',"$id",'0','1']);



?>





<?php foreach ($category as $category1) {

	// var_dump($category1);
	?>



	<div class="td-category-header td-container-wrap">
		<div class=td-container>
			<div class=td-pb-row>
				<div class=td-pb-span12>
					<div class=td-crumb-container>
						<div class=entry-crumbs><span>
							<a title="" class=entry-crumb href="../../index.html">Home</a></span>
							<i class="td-icon-right td-bread-sep td-bred-no-url-last"></i> 
							<span class=td-bred-no-url-last><?= $category1->getTheLoai()->Ten?></span></div></div>

							<h1 class="entry-title td-page-title"><?= $category1->getTheLoai()->Ten?></h1>
							<div class=td-category-siblings>
								<ul class=td-category>
									<?php foreach ($Menucon as $Menucon1) {
										
										?>
										<li class=entry-category>
											<a class="" value="<?= $Menucon1->id ?>" href="category.php?id=<?= $Menucon1->getTheLoai()->id?>" ><?= $Menucon1->Ten?></a></li>
											<?php } ?>

										</ul>

										<div class="td-subcat-dropdown td-pulldown-filter-display-option">
											<div class=td-subcat-more>
												<i class=td-icon-menu-down></i></div>
												<ul class=td-pulldown-filter-list></ul></div>
												<div class=clearfix></div></div>
											</div>
										</div>
										<div class="td-category-pulldown-filter td-wrapper-pulldown-filter">
											<div class=td-pulldown-filter-display-option>
												<div class=td-subcat-more>Latest <i class=td-icon-menu-down></i></div>
												<ul class=td-pulldown-filter-list>
													<li class=td-pulldown-filter-item>
														<a class=td-pulldown-category-filter-link id=td_uid_15_59c231b4b4fec data-td_block_id=td_uid_14_59c231b4b4fb5 href="index.html">Latest</a></li><li class=td-pulldown-filter-item><a class=td-pulldown-category-filter-link id=td_uid_16_59c231b4b5022 data-td_block_id=td_uid_14_59c231b4b4fb5 href="index6fdd.html?filter_by=featured">Featured posts</a></li><li class=td-pulldown-filter-item><a class=td-pulldown-category-filter-link id=td_uid_17_59c231b4b5058 data-td_block_id=td_uid_14_59c231b4b4fb5 href="index6ca3.html?filter_by=popular">Most popular</a></li><li class=td-pulldown-filter-item><a class=td-pulldown-category-filter-link id=td_uid_18_59c231b4b508d data-td_block_id=td_uid_14_59c231b4b4fb5 href="indexdcac.html?filter_by=popular7">7 days popular</a></li><li class=td-pulldown-filter-item><a class=td-pulldown-category-filter-link id=td_uid_19_59c231b4b50c1 data-td_block_id=td_uid_14_59c231b4b4fb5 href="index8dd6.html?filter_by=review_high">By review score</a></li><li class=td-pulldown-filter-item><a class=td-pulldown-category-filter-link id=td_uid_20_59c231b4b50f7 data-td_block_id=td_uid_14_59c231b4b4fb5 href="index5995.html?filter_by=random_posts">Random</a></li></ul></div></div> </div>
													</div>
													<div class="td-main-content-wrap td-container-wrap">
														<div class=td-container>
															<div class=td-pb-row>
																<div class="td-pb-span8 td-main-content">
																	<div class=td-ss-main-content>

																		<?php $laytintuc4=TinTuc::whereAndwhereLimit(['id','>','0','idLoaiTin',"$category1->id",'0','10']) ?>
																		<?php foreach ($laytintuc4 as $laytintuc5 ) {
																			?>

																			<div class="td_module_10 td_module_wrap td-animation-stack">
																				<div class=td-module-thumb>
																					<a href="page.php?id=<?=$laytintuc5->id?>" rel=bookmark title="<?=$laytintuc5->TieuDe ?>">
																						<img class=entry-thumb src="image/tintuc/<?=$laytintuc5->Hinh?>" style="width:218px;height:150px "alt="" title="<?=$laytintuc5->TieuDe?>" /></a></div>
																						<div class=item-details>
																							<h3 class="entry-title td-module-title">
																								<a href="page.php?id=<?=$laytintuc5->id?>" rel=bookmark title="<?=$laytintuc5->TieuDe?>"><?=$laytintuc5->TieuDe?></a></h3>
																								<div class=td-module-meta-info>
																									<a href="#" class=td-post-category><?=$laytintuc5->GetLoaiTin2()->Ten?></a> 


																									<span class=td-post-author-name><a href="author.php?id=<?=$laytintuc5->getTacGia()->id?>"><?=$laytintuc5->getTacGia()->name?></a> <span>-</span> </span> <span class=td-post-date><time class="entry-date updated td-module-date" datetime="2015-09-16T08:57:18+00:00">September 16, 2015</time></span> <div class=td-module-comments><a href="page.php?id=<?=$laytintuc5->id?>">1</a></div> </div>
																									<div class=td-excerpt>
																										<?=$laytintuc5->TomTat ?></div>
																									</div>
																								</div>


																								<?php } ?>





																								<div class="page-nav td-pb-padding-side"><span class=current>1</span><a href="page/2/index.html" class=page title=2>2</a><a href="page/2/index.html"><i class=td-icon-menu-right></i></a><span class=pages>Page 1 of 2</span><div class=clearfix></div></div> </div>
																							</div>
																							<div class="td-pb-span4 td-main-sidebar">
																								<div class=td-ss-main-sidebar>
																									<div class="td_block_wrap td_block_social_counter td_block_widget td_uid_21_59c231b4b7655_rand td-social-style3 td-social-colored td-pb-border-top td_block_template_1"><h4 class=block-title><span class=td-pulldown-size>FOLLOW US</span></h4><div class=td-social-list><div class="td_social_type td-pb-margin-side td_social_facebook"><div class=td-social-box><div class="td-sp td-sp-facebook"></div><span class=td_social_info>5,653</span><span class="td_social_info td_social_info_name">Fans</span><span class=td_social_button><a href="https://www.facebook.com/tagDiv" target=_blank>Like</a></span></div></div><div class="td_social_type td-pb-margin-side td_social_twitter"><div class=td-social-box><div class="td-sp td-sp-twitter"></div><span class=td_social_info>782</span><span class="td_social_info td_social_info_name">Followers</span><span class=td_social_button><a href="https://twitter.com/tagDivOfficial" target=_blank>Follow</a></span></div></div><div class="td_social_type td-pb-margin-side td_social_youtube"><div class=td-social-box><div class="td-sp td-sp-youtube"></div><span class=td_social_info>3,751</span><span class="td_social_info td_social_info_name">Subscribers</span><span class=td_social_button><a href="http://www.youtube.com/tagdiv" target=_blank>Subscribe</a></span></div></div></div></div> <div class="td-a-rec td-a-rec-id-sidebar  "><span class=td-adspot-title>- Advertisement -</span><div class=td-visible-desktop>
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
																									</div></div><div class="td_block_wrap td_block_7 td_block_widget td_uid_23_59c231b4b77a5_rand td_with_ajax_pagination td-pb-border-top td_block_template_1 td-column-1 td_block_padding" data-td-block-uid=td_uid_23_59c231b4b77a5>

																										<!-- <script>var block_td_uid_23_59c231b4b77a5=new tdBlock();block_td_uid_23_59c231b4b77a5.id="td_uid_23_59c231b4b77a5";block_td_uid_23_59c231b4b77a5.atts='{"limit":"4","sort":"","post_ids":"","tag_slug":"","autors_id":"","installed_post_types":"","category_id":"","category_ids":"","custom_title":"LATEST NEWS","custom_url":"","show_child_cat":"","sub_cat_ajax":"","ajax_pagination":"next_prev","header_color":"#","header_text_color":"#","ajax_pagination_infinite_stop":"","td_column_number":1,"td_ajax_preloading":"","td_ajax_filter_type":"","td_ajax_filter_ids":"","td_filter_default_txt":"All","color_preset":"","border_top":"","class":"td_block_widget td_uid_23_59c231b4b77a5_rand","el_class":"","offset":"","css":"","tdc_css":"","tdc_css_class":"td_uid_23_59c231b4b77a5_rand","live_filter":"","live_filter_cur_post_id":"","live_filter_cur_post_author":"","block_template_id":""}';block_td_uid_23_59c231b4b77a5.td_column_number="1";block_td_uid_23_59c231b4b77a5.block_type="td_block_7";block_td_uid_23_59c231b4b77a5.post_count="4";block_td_uid_23_59c231b4b77a5.found_posts="63";block_td_uid_23_59c231b4b77a5.header_color="#";block_td_uid_23_59c231b4b77a5.ajax_pagination_infinite_stop="";block_td_uid_23_59c231b4b77a5.max_num_pages="16";tdBlocksArray.push(block_td_uid_23_59c231b4b77a5);</script> -->



																										<div class=td-block-title-wrap><h4 class=block-title><span class=td-pulldown-size>LATEST NEWS</span></h4></div><div id=td_uid_23_59c231b4b77a5 class=td_block_inner>


																											<!-- phan last news -->
																											<?php $lastnews =TinTuc::sqlbullder(["SELECT * FROM tintuc WHERE id> 0 AND idLoaiTin=$category1->id ORDER BY id DESC LIMIT 0,4"]); ?>

																											<?php foreach ($lastnews as $lastnews1 ) {
																												?>
																												<div class=td-block-span12>
																													<div class="td_module_6 td_module_wrap td-animation-stack">
																														<div class=td-module-thumb>
																															<a href="page.pph?id=<?=  $lastnews1->id?>" rel=bookmark title="<?=  $lastnews1->TieuDe?>">
																																<img style="width:100px;height: 70px;" class=entry-thumb src="image/tintuc/<?=  $lastnews1->Hinh?>" alt="" title="<?=  $lastnews1->TieuDe?>" /></a></div>
																																<div class=item-details>
																																	<h3 class="entry-title td-module-title"><a href="page.php?id=<?=  $lastnews1->id?>" rel=bookmark title="<?=  $lastnews1->TieuDe?>"><?=  $lastnews1->TieuDe?></a></h3> <div class=td-module-meta-info>
																																		<span class=td-post-date><time class="entry-date updated td-module-date" datetime="2015-09-16T08:57:18+00:00">September 16, 2015</time></span> </div>
																																	</div>
																																</div>
																															</div>
																															<?php } ?>



																														</div><div class=td-next-prev-wrap><a href="#" class="td-ajax-prev-page ajax-page-disabled" id=prev-page-td_uid_23_59c231b4b77a5 data-td_block_id=td_uid_23_59c231b4b77a5><i class="td-icon-font td-icon-menu-left"></i></a><a href="#" class=td-ajax-next-page id=next-page-td_uid_23_59c231b4b77a5 data-td_block_id=td_uid_23_59c231b4b77a5><i class="td-icon-font td-icon-menu-right"></i></a></div></div> </div>
																													</div>
																												</div>
																											</div>
																										</div>



																										<?php } ?>




																										<?php include_once('public/teamplate/footer.php') ?>