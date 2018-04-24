<?php include_once 'public/teamplate/header.php'; ?>
</div>

<?php 
require_once 'models/TinTuc.php';
// phần dành cho pager cho tiết

$id=$_GET['id'];

$page=TinTuc::where(['id',"$id"]);

$pag09=LoaiTin::sqlbullder(["SELECT * FROM loaitin INNER JOIN theloai ON loaitin.idTheLoai=theloai.id
	INNER JOIN tintuc ON loaitin.id=tintuc.idLoaiTin
	WHERE tintuc.id=$id"]);

	?>


	<!-- phần body -->


	<?php foreach ($page as $page1) {
		?>
		<?php foreach ($pag09 as $pag10) {
			?>

			<div class="td-main-content-wrap td-container-wrap">
				<div class="td-container td-post-template-2">
					<article id=post-68 class="post-68 post type-post status-publish format-standard has-post-thumbnail hentry category-make-up" itemscope itemtype="https://schema.org/Article">
						<div class=td-pb-row>
							<div class=td-pb-span12>
								<div class=td-post-header>
									<div class=td-crumb-container>
										<div class=entry-crumbs>
											<span>
												<a title="" class=entry-crumb href="index.php">Home</a></span> 
												<i class="td-icon-right td-bread-sep"></i> <span>
													<a title="View all posts in Lifestyle" class=entry-crumb href="category.php?id=<?= $pag10->idTheLoai ?> "><?= $pag10->Ten ?></a></span>
													<i class="td-icon-right td-bread-sep"></i> <span>


														<a title="View all posts in Make-up" class=entry-crumb href="category.php?id=<?=$page1->GetLoaiTin()->id ?>"><?=$page1->GetLoaiTin2()->Ten ?></a></span>
														<i class="td-icon-right td-bread-sep td-bred-no-url-last"></i> 
														<span class=td-bred-no-url-last><?=$page1->TieuDe ?></span>
													</div>
												</div>
												<ul class=td-category>
													<li class=entry-category>
														<a href="category.php?id=<?= $pag10->idTheLoai ?>"><?= $pag10->Ten ?></a></li>
														<li class=entry-category><a href="category.php?id=<?=$page1->GetLoaiTin()->id ?>"><?=$page1->GetLoaiTin2()->Ten ?></a></li></ul>

														<header class=td-post-title>
															<h1 class=entry-title><?=$page1->TieuDe ?></h1>
															<div class=td-module-meta-info>
																<div class=td-post-author-name><div class=td-author-by>By</div> 
																<a href="author.php?id=<?=$page1->getTacGia()->id ?>"><?=$page1->getTacGia()->name ?></a>
																<div class=td-author-line> - </div> </div> 
																<span class=td-post-date>
																	<time class="entry-date updated td-module-date" datetime="2015-08-16T08:50:51+00:00">August 16, 2015</time></span> <div class=td-post-views>
																		<i class=td-icon-views></i><span class=td-nr-views-68><?=$page1->SoLuotXem ?></span></div> 
																		<div class=td-post-comments><a href="index.html#respond"><i class=td-icon-comments></i>0</a></div> </div>
																	</header>
																</div>
															</div>
														</div>
														<div class=td-pb-row>
															<div class="td-pb-span8 td-main-content" role=main>
																<div class=td-ss-main-content>
																	<div class="td-post-sharing td-post-sharing-top ">
																		<div class=td-default-sharing>

																			<a class="td-social-sharing-buttons td-social-facebook" href="https://www.facebook.com/sharer.php?u=https://facebook.com/duc.developer" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class=td-icon-facebook></i><div class=td-social-but-text>Share on Facebook</div></a>
																			<a class="td-social-sharing-buttons td-social-twitter" href="https://twitter.com/intent/tweet?text=10+Outfits+Inspired+by+Famous+Works+of+Art&amp;url=https%3A%2F%2Fdemo.tagdiv.com%2Fnewspaper_local_news%2Ftd-post-10-outfits-inspired-by-famous-works-of-art%2F&amp;via=Newspaper+Local+News+Demo"><i class=td-icon-twitter></i><div class=td-social-but-text>Tweet on Twitter</div></a>
																			<a class="td-social-sharing-buttons td-social-google" href="https://plus.google.com/share?url=https://demo.tagdiv.com/newspaper_local_news/td-post-10-outfits-inspired-by-famous-works-of-art/" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class=td-icon-googleplus></i></a>
																			<a class="td-social-sharing-buttons td-social-pinterest" href="https://pinterest.com/pin/create/button/?url=https://demo.tagdiv.com/newspaper_local_news/td-post-10-outfits-inspired-by-famous-works-of-art/&amp;media=https://demo.tagdiv.com/newspaper_local_news/wp-content/uploads/2015/09/301.jpg&amp;description=10+Outfits+Inspired+by+Famous+Works+of+Art" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class=td-icon-pinterest></i></a>
																			<a class="td-social-sharing-buttons td-social-whatsapp" href="whatsapp://send?text=10+Outfits+Inspired+by+Famous+Works+of+Art%20-%20https%3A%2F%2Fdemo.tagdiv.com%2Fnewspaper_local_news%2Ftd-post-10-outfits-inspired-by-famous-works-of-art%2F"><i class=td-icon-whatsapp></i></a>
																		</div></div>
																		<div class=td-post-content>
																			<div class=td-post-featured-image>
																				<a href="image/tintuc/<?=$page1->Hinh ?>" data-caption="">


																					<img class="entry-thumb td-modal-image" src="image/tintuc/<?=$page1->Hinh ?>" style="width: 696px;height: 464px" sizes="(max-width: 696px) 100vw, 696px" alt="" title=301 /></a>

																				</div>


																				<!-- phần hiển thị nội dung bài viết -->
																				<div class=td-paragraph-padding-1>
																					<?=$page1->NoiDung ?>
																				</div>






																			</div>
																			<footer>
																				<div class=td-post-source-tags>
																				</div>
																				<div class="td-post-sharing td-post-sharing-bottom td-with-like"><span class=td-post-share-title>SHARE</span>
																					<div class=td-default-sharing>
																						<a class="td-social-sharing-buttons td-social-facebook" href="https://www.facebook.com/sharer.php?u=https%3A%2F%2Fdemo.tagdiv.com%2Fnewspaper_local_news%2Ftd-post-10-outfits-inspired-by-famous-works-of-art%2F" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class=td-icon-facebook></i><div class=td-social-but-text>Facebook</div></a>
																						<a class="td-social-sharing-buttons td-social-twitter" href="https://twitter.com/intent/tweet?text=10+Outfits+Inspired+by+Famous+Works+of+Art&amp;url=https%3A%2F%2Fdemo.tagdiv.com%2Fnewspaper_local_news%2Ftd-post-10-outfits-inspired-by-famous-works-of-art%2F&amp;via=Newspaper+Local+News+Demo"><i class=td-icon-twitter></i><div class=td-social-but-text>Twitter</div></a>
																						<a class="td-social-sharing-buttons td-social-google" href="https://plus.google.com/share?url=https://demo.tagdiv.com/newspaper_local_news/td-post-10-outfits-inspired-by-famous-works-of-art/" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class=td-icon-googleplus></i></a>
																						<a class="td-social-sharing-buttons td-social-pinterest" href="https://pinterest.com/pin/create/button/?url=https://demo.tagdiv.com/newspaper_local_news/td-post-10-outfits-inspired-by-famous-works-of-art/&amp;media=https://demo.tagdiv.com/newspaper_local_news/wp-content/uploads/2015/09/301.jpg&amp;description=10+Outfits+Inspired+by+Famous+Works+of+Art" onclick="window.open(this.href, 'mywin','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class=td-icon-pinterest></i></a>
																						<a class="td-social-sharing-buttons td-social-whatsapp" href="whatsapp://send?text=10+Outfits+Inspired+by+Famous+Works+of+Art%20-%20https%3A%2F%2Fdemo.tagdiv.com%2Fnewspaper_local_news%2Ftd-post-10-outfits-inspired-by-famous-works-of-art%2F"><i class=td-icon-whatsapp></i></a>
																					</div><div class=td-classic-sharing><ul><li class=td-classic-facebook><iframe frameBorder=0 src="https://www.facebook.com/plugins/like.php?href=https://demo.tagdiv.com/newspaper_local_news/td-post-10-outfits-inspired-by-famous-works-of-art/&amp;layout=button_count&amp;show_faces=false&amp;width=105&amp;action=like&amp;colorscheme=light&amp;height=21" style="border:none;overflow:hidden;width:105px;height:21px;background-color:transparent"></iframe></li><li class=td-classic-twitter><a href="https://twitter.com/share" class=twitter-share-button data-url="https://demo.tagdiv.com/newspaper_local_news/td-post-10-outfits-inspired-by-famous-works-of-art/" data-text="10 Outfits Inspired by Famous Works of Art" data-via="" data-lang=en>tweet</a> <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="../../../platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

																					</li></ul>

																				</div>
																			</div> 
																			<div class="td-block-row td-post-next-prev">
																				<div class="td-block-span6 td-post-prev-post">
																					<div class=td-post-next-prev-content>
																						<?php $baitruoc=TinTuc::whereLimit(['id','<',"$page1->id",'0','1']) ?>
																						<?php foreach ($baitruoc as $baitruoc ) {
																							?>
																							<span>Bài Trước</span>
																							<a href="page.php?id=<?=$baitruoc->id ?>"><?=$baitruoc->TieuDe ?></a>
																							<?php } ?>
																						</div>
																					</div>
																					<div class=td-next-prev-separator></div>
																					<div class="td-block-span6 td-post-next-post">
																						<div class=td-post-next-prev-content>
																							<?php $baisau=TinTuc::whereLimit(['id','>',"$page1->id",'0','1']) ?>
																							<?php foreach ($baisau as $baisau ) {
																								?>
																								<span>Bài Tiếp Theo</span>
																								<a href="page.php?id=<?=$baisau->id ?>"><?=$baisau->TieuDe ?> </a>
																								<?php } ?>
																							</div></div></div> 

																							<div class=author-box-wrap>
																								<a href="author.php?id=<?=$page1->getTacGia()->id ?>">
																									<?php if (($page1->getTacGia()->avatar)==NULL) {
																										$page1->getTacGia()->avatar='default.png';
																									}else{
																										$page1->getTacGia()->avatar=$page1->getTacGia()->avatar;
																									} ?>
																									<img src="image/user/<?=$page1->getTacGia()->avatar ?>" width=96 height=96 alt="<?=$page1->getTacGia()->name ?>" class="avatar avatar-96 wp-user-avatar wp-user-avatar-96 alignnone photo" /></a>
																									<div class=desc>
																										<div class="td-author-name vcard author">
																											<span class=fn>
																												<a href="author.php?id=<?=$page1->getTacGia()->id ?>"><?=$page1->getTacGia()->name ?></a></span></div>
																												<div class=td-author-url><a href="http://vietnammmo.net">http://vietnammmo.net</a></div>
																												<div class=td-author-description><?=$page1->getTacGia()->name ?>. <?=$page1->getTacGia()->GioiThieu ?>.</div>
																												<div class=td-author-social>
																													<span class=td-social-icon-wrap>
																														<a target=_blank href="#" title=Evernote>
																															<i class="td-icon-font td-icon-evernote"></i>
																														</a>
																													</span>
																													<span class=td-social-icon-wrap>
																														<a target=_blank href="https://www.facebook.com/duc.developer/" title=Facebook>
																															<i class="td-icon-font td-icon-facebook"></i>
																														</a>
																													</span>
																													<span class=td-social-icon-wrap>
																														<a target=_blank href="https://www.facebook.com/duc.developer/" title="Google+">
																															<i class="td-icon-font td-icon-googleplus"></i>
																														</a>
																													</span>
																													<span class=td-social-icon-wrap>
																														<a target=_blank href="#" title=Instagram>
																															<i class="td-icon-font td-icon-instagram"></i>
																														</a>
																													</span>
																													<span class=td-social-icon-wrap>
																														<a target=_blank href="https://www.facebook.com/duc.developer/" title=Twitter>
																															<i class="td-icon-font td-icon-twitter"></i>
																														</a>
																													</span>
																													<span class=td-social-icon-wrap>
																														<a target=_blank href="#" title=VKontakte>
																															<i class="td-icon-font td-icon-vk"></i>
																														</a>
																													</span>
																													<span class=td-social-icon-wrap>
																														<a target=_blank href="https://www.facebook.com/duc.developer/" title=Youtube>
																															<i class="td-icon-font td-icon-youtube"></i>
																														</a>
																													</span></div>
																													<div class=clearfix></div></div></div> <span style=display:none itemprop=author itemscope itemtype="https://schema.org/Person"><meta itemprop=name content="Mary Karen"></span><meta itemprop=datePublished content="2015-08-16T08:50:51+00:00"><meta itemprop=dateModified content="2015-09-17T10:24:00+00:00"><meta itemscope itemprop=mainEntityOfPage itemType="https://schema.org/WebPage" itemid="index.html" /><span style=display:none itemprop=publisher itemscope itemtype="https://schema.org/Organization"><span style=display:none itemprop=logo itemscope itemtype="https://schema.org/ImageObject"><meta itemprop=url content="../wp-content/uploads/2015/09/logo-header.png"></span><meta itemprop=name content="Newspaper Local News Demo"></span><meta itemprop="headline " content="10 Outfits Inspired by Famous Works of Art"><span style=display:none itemprop=image itemscope itemtype="https://schema.org/ImageObject"><meta itemprop=url content="../wp-content/uploads/2015/09/301.jpg"><meta itemprop=width content=1068><meta itemprop=height content=712></span> </footer>
																													<div class="td_block_wrap td_block_related_posts td_uid_15_59c051a50d515_rand td_with_ajax_pagination td-pb-border-top td_block_template_1" data-td-block-uid=td_uid_15_59c051a50d515>

<!-- <script>var block_td_uid_15_59c051a50d515=new tdBlock();block_td_uid_15_59c051a50d515.id="td_uid_15_59c051a50d515";block_td_uid_15_59c051a50d515.atts='{"limit":3,"sort":"","post_ids":"","tag_slug":"","autors_id":"","installed_post_types":"","category_id":"","category_ids":"","custom_title":"","custom_url":"","show_child_cat":"","sub_cat_ajax":"","ajax_pagination":"next_prev","header_color":"","header_text_color":"","ajax_pagination_infinite_stop":"","td_column_number":3,"td_ajax_preloading":"","td_ajax_filter_type":"td_custom_related","td_ajax_filter_ids":"","td_filter_default_txt":"All","color_preset":"","border_top":"","class":"td_uid_15_59c051a50d515_rand","el_class":"","offset":"","css":"","tdc_css":"","tdc_css_class":"td_uid_15_59c051a50d515_rand","live_filter":"cur_post_same_categories","live_filter_cur_post_id":68,"live_filter_cur_post_author":"1","block_template_id":""}';block_td_uid_15_59c051a50d515.td_column_number="3";block_td_uid_15_59c051a50d515.block_type="td_block_related_posts";block_td_uid_15_59c051a50d515.post_count="3";block_td_uid_15_59c051a50d515.found_posts="4";block_td_uid_15_59c051a50d515.header_color="";block_td_uid_15_59c051a50d515.ajax_pagination_infinite_stop="";block_td_uid_15_59c051a50d515.max_num_pages="2";tdBlocksArray.push(block_td_uid_15_59c051a50d515);

</script> -->

<h4 class="td-related-title td-block-title">
	<a id=td_uid_16_59c051a50dc36 class="td-related-left td-cur-simple-item" data-td_filter_value="" data-td_block_id=td_uid_15_59c051a50d515 href="#">BÀI VIẾT LIÊN QUAN</a>
	<a id=td_uid_17_59c051a50dc6d class=td-related-right data-td_filter_value=td_related_more_from_author data-td_block_id=td_uid_15_59c051a50d515 href="#">MORE FROM AUTHOR</a></h4>
	<div id=td_uid_15_59c051a50d515 class=td_block_inner>
		<div class=td-related-row>




			<?php
			$idd=$pag10->idLoaiTin;
			$BaiVietLienQuan=TinTuc::whereAndwhereLimit(['id','>','0','idLoaiTin',"$idd",'1','3']) ?>
			<?php foreach ($BaiVietLienQuan as $BaiVietLienQuan1 ) {
				?>
				<div class=td-related-span4>
					<div class="td_module_related_posts td-animation-stack td_mod_related_posts">
						<div class=td-module-image>
							<div class=td-module-thumb>
								<a href="page.php?id=<?= $BaiVietLienQuan1->id ?>" rel=bookmark title="<?= $BaiVietLienQuan1->TieuDe ?>">
									<img width=218 height=150 style="width: 218px;height: 150px;" class=entry-thumb src="image/tintuc/<?= $BaiVietLienQuan1->Hinh ?>" alt="" title="<?= $BaiVietLienQuan1->TieuDe ?>" /></a></div> 
									<a href="category.php?id=<?= $BaiVietLienQuan1->GetLoaiTin2()->id ?>" class=td-post-category><?= $BaiVietLienQuan1->GetLoaiTin2()->Ten ?></a> </div>
									<div class=item-details>
										<h3 class="entry-title td-module-title">
											<a href="page.php?id=<?= $BaiVietLienQuan1->id ?>" rel=bookmark title="<?= $BaiVietLienQuan1->TieuDe ?>"><?= $BaiVietLienQuan1->TieuDe ?></a></h3> </div>
										</div>
									</div>
									<?php } ?>




								</div></div><div class=td-next-prev-wrap><a href="#" class="td-ajax-prev-page ajax-page-disabled" id=prev-page-td_uid_15_59c051a50d515 data-td_block_id=td_uid_15_59c051a50d515><i class="td-icon-font td-icon-menu-left"></i></a><a href="#" class=td-ajax-next-page id=next-page-td_uid_15_59c051a50d515 data-td_block_id=td_uid_15_59c051a50d515><i class="td-icon-font td-icon-menu-right"></i></a></div>
							</div>

							<!-- phần dành cho comment -->

							<div class=comments id=comments>




								<!-- phần show comment -->

								<?php $HienThiComment3=Comment::sqlbullder(["SELECT count(id) AS socomment FROM comment WHERE idTinTuc= $page1->id"]) ?>

								<div class="td-comments-title-wrap td_block_template_1">
									<?php foreach ($HienThiComment3 as $HienThiComment2 ){ ?>

									<?php } ?>
									<h4 class="td-comments-title block-title"><span><?= $HienThiComment2->socomment ?> COMMENTS</span></h4>
								</div>
								<ol class="comment-list ">

									<?php $HienThiComment=Comment::where(['idTinTuc',"$page1->id"]) ?>
									<?php foreach ($HienThiComment as $HienThiComment1 ) {
										if (($HienThiComment1)!=NULL) {
											?>

											<li class="comment " id=comment-2>
												<article>
													<footer>
														<img src="https://secure.gravatar.com/avatar/88e478531ab3bc303f1b5da82c2e9bbb?s=50&amp;d=mm&amp;r=g" width=50 height=50 alt="" class="avatar avatar-50 wp-user-avatar wp-user-avatar-50 photo avatar-default" /> <cite><a href='http://www.mary-karen.com/' rel='external nofollow' class=url><?=$HienThiComment1->getNguoicommnet()->name ?></a></cite>
														<a class=comment-link href="#comment-2">
															<time pubdate=1442484643><?=$HienThiComment1->created_at ?></time>
														</a>
													</footer>
													<div class=comment-content>
														<p><?=$HienThiComment1->NoiDung ?></p>
													</div>
													<div class=comment-meta id=comment-2>
														<a rel=nofollow class=comment-reply-link href='index0e22.html?replytocom=2#respond' onclick='return addComment.moveForm( "comment-2", "2", "respond", "102" )' aria-label='Reply to Mary Karen'>Reply</a> </div>
													</article>
												</li>

												<?php }else{} ?>
												<?php } ?>


											</ol>
											<div class=comment-pagination>
											</div>






											<!-- hết phần show comment -->









											<div id=respond class=comment-respond>





												<h3 id=reply-title class=comment-reply-title>Bình Luận <small>
													<a rel=nofollow id=cancel-comment-reply-link href="index.html#respond" style=display:none>Cancel reply</a></small></h3> 
													<form action="controllers/Comment.php?id=<?=$page1->id ?>" method=post id=commentform class=comment-form novalidate>
														<div class=clearfix></div>
														<div class="comment-form-input-wrap td-form-comment">
															<textarea placeholder=Comment: id=comment name=comment cols=45 rows=8 aria-required=true></textarea>
															<div class=td-warning-comment>Please enter your comment!</div>
														</div>
														<div class="comment-form-input-wrap td-form-author">
															<input class="" id=author name=author placeholder="Name:*" type=text value="" size=30 aria-required=true />
															<div class=td-warning-author>Please enter your name here</div>
														</div>
														<div class="comment-form-input-wrap td-form-email">
															<input class="" id=email name=email placeholder="Email:*" type=text value="" size=30 aria-required=true />
															<div class=td-warning-email-error>You have entered an incorrect email address!</div>
															<div class=td-warning-email>Please enter your email address here</div>
														</div>
														<div class="comment-form-input-wrap td-form-url">
															<input class="" id=url name=url placeholder=Website: type=text value="" size=30 />
														</div>
														<p class=form-submit><input name=submit type=submit id=submit class=submit value="Post Comment" /> <input type=hidden name=comment_post_ID value=68 id=comment_post_ID />
															<input type=hidden name=comment_parent id=comment_parent value=0 />
														</p> </form>
													</div>
												</div>
											</div>
										</div>
										<div class="td-pb-span4 td-main-sidebar" role=complementary>
											<div class=td-ss-main-sidebar>
												<div class="td_block_wrap td_block_social_counter td_block_widget td_uid_18_59c051a50e57e_rand td-social-style3 td-social-colored td-pb-border-top td_block_template_1"><h4 class=block-title><span class=td-pulldown-size>FOLLOW US</span></h4><div class=td-social-list><div class="td_social_type td-pb-margin-side td_social_facebook"><div class=td-social-box><div class="td-sp td-sp-facebook"></div><span class=td_social_info>5,635</span><span class="td_social_info td_social_info_name">Fans</span><span class=td_social_button><a href="https://www.facebook.com/duc.developer/" target=_blank>Like</a></span></div></div><div class="td_social_type td-pb-margin-side td_social_twitter"><div class=td-social-box><div class="td-sp td-sp-twitter"></div><span class=td_social_info>791</span><span class="td_social_info td_social_info_name">Followers</span><span class=td_social_button><a href="https://www.facebook.com/duc.developer/" target=_blank>Follow</a></span></div></div><div class="td_social_type td-pb-margin-side td_social_youtube"><div class=td-social-box><div class="td-sp td-sp-youtube"></div><span class=td_social_info>3,743</span><span class="td_social_info td_social_info_name">Subscribers</span><span class=td_social_button><a href="https://www.facebook.com/duc.developer/" target=_blank>Subscribe</a></span></div></div></div></div> <div class="td-a-rec td-a-rec-id-sidebar  "><span class=td-adspot-title>- Advertisement -</span><div class=td-visible-desktop>
													<a href="#"><img src="../wp-content/uploads/2015/09/rec300.jpg" alt="" /></a>
												</div>
												<div class=td-visible-tablet-landscape>
													<a href="#"><img src="../wp-content/uploads/2015/09/rec200.jpg" alt="" /></a>
												</div>
												<div class=td-visible-tablet-portrait>
													<a href="#"><img src="../wp-content/uploads/2015/09/rec200.jpg" alt="" /></a>
												</div>
												<div class=td-visible-phone>
													<a href="#"><img src="../wp-content/uploads/2015/09/rec300.jpg" alt="" /></a>
												</div></div><div class="td_block_wrap td_block_7 td_block_widget td_uid_20_59c051a50e6c2_rand td_with_ajax_pagination td-pb-border-top td_block_template_1 td-column-1 td_block_padding" data-td-block-uid=td_uid_20_59c051a50e6c2>
<!-- <script>var block_td_uid_20_59c051a50e6c2=new tdBlock();block_td_uid_20_59c051a50e6c2.id="td_uid_20_59c051a50e6c2";block_td_uid_20_59c051a50e6c2.atts='{"limit":"4","sort":"","post_ids":"","tag_slug":"","autors_id":"","installed_post_types":"","category_id":"","category_ids":"","custom_title":"LATEST NEWS","custom_url":"","show_child_cat":"","sub_cat_ajax":"","ajax_pagination":"next_prev","header_color":"#","header_text_color":"#","ajax_pagination_infinite_stop":"","td_column_number":1,"td_ajax_preloading":"","td_ajax_filter_type":"","td_ajax_filter_ids":"","td_filter_default_txt":"All","color_preset":"","border_top":"","class":"td_block_widget td_uid_20_59c051a50e6c2_rand","el_class":"","offset":"","css":"","tdc_css":"","tdc_css_class":"td_uid_20_59c051a50e6c2_rand","live_filter":"","live_filter_cur_post_id":"","live_filter_cur_post_author":"","block_template_id":""}';block_td_uid_20_59c051a50e6c2.td_column_number="1";block_td_uid_20_59c051a50e6c2.block_type="td_block_7";block_td_uid_20_59c051a50e6c2.post_count="4";block_td_uid_20_59c051a50e6c2.found_posts="63";block_td_uid_20_59c051a50e6c2.header_color="#";block_td_uid_20_59c051a50e6c2.ajax_pagination_infinite_stop="";block_td_uid_20_59c051a50e6c2.max_num_pages="16";tdBlocksArray.push(block_td_uid_20_59c051a50e6c2);

</script> -->


<div class=td-block-title-wrap>
	<h4 class=block-title>


		<span class=td-pulldown-size>LATEST NEWS</span></h4></div>


		<div id=td_uid_20_59c051a50e6c2 class=td_block_inner>

			<?php
			$iddd=$pag10->idLoaiTin;
			$lastnews=TinTuc::sqlbullder(["SELECT * FROM tintuc WHERE id>0 AND idLoaiTin = $iddd ORDER BY id DESC LIMIT 0,4"]) ?>
			<?php foreach ($lastnews as $lastnews1) {
				?>
				<div class=td-block-span12>
					<div class="td_module_6 td_module_wrap td-animation-stack">
						<div class=td-module-thumb>
							<a href="page.php?id=<?= $lastnews1->id ?>" rel=bookmark title="<?= $lastnews1->TieuDe ?>">
								<img width=100 height=70 class=entry-thumb src="image/tintuc/<?= $lastnews1->Hinh ?>" alt="" title="<?= $lastnews1->TieuDe ?>" /></a></div>
								<div class=item-details>
									<h3 class="entry-title td-module-title">
										<a href="page.php?id=<?= $lastnews1->id ?>" rel=bookmark title="<?= $lastnews1->TieuDe ?>"><?= $lastnews1->TieuDe ?></a></h3> 
										<div class=td-module-meta-info>
											<span class=td-post-date>
												<time class="entry-date updated td-module-date" datetime="2015-09-16T08:57:18+00:00">September 16, 2015</time></span> </div>
											</div>
										</div>
									</div>
									<?php } ?>

								</div><div class=td-next-prev-wrap><a href="#" class="td-ajax-prev-page ajax-page-disabled" id=prev-page-td_uid_20_59c051a50e6c2 data-td_block_id=td_uid_20_59c051a50e6c2><i class="td-icon-font td-icon-menu-left"></i></a><a href="#" class=td-ajax-next-page id=next-page-td_uid_20_59c051a50e6c2 data-td_block_id=td_uid_20_59c051a50e6c2><i class="td-icon-font td-icon-menu-right"></i></a></div></div> </div>
							</div>
						</div>
					</article>
				</div>
			</div>



			<?php } ?>
			<?php } ?>











			<!-- dieu kien hien thi giao dien $id -->

			<!-- phần footer -->
			<?php include_once('public/teamplate/footer.php') ?>







