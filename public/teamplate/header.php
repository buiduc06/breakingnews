<?php 
include_once('Models/TheLoai.php');
include_once('Models/LoaiTin.php');
include_once('Models/TinTuc.php');
include_once('Models/Slide.php');
include_once('Models/User.php');
include_once('Models/comment.php');
include_once('Models/Video.php');
include_once('Models/QuangCao.php');
$GetMenu =TheLoai::all(); // lấy ra tất cả Menu có trong DB
// phần lấy config lấy ra danh sách tin vào phần xTheGioi
$getbody1=TinTuc::whereLimit(['id','<','5','1','2']);
$getbody2=TinTuc::whereLimit(['id','<','5','2','4']); 
$getbody3=TinTuc::whereLimit(['id','<','7','4','6']);  

// hết phần lấy ra TheGioi
// phần hình sự - phap luat
$PhapLuat1=TinTuc::whereLimit(['idLoaiTin','6','0','3']);
// <!-- phần văn hóa -->
$VanHoa=LoaiTin::where(['idTheLoai','4']);
$VanHoa0=TinTuc::whereLimit(['idLoaiTin','4','0','10']);

// TheThao
$TheThao=TinTuc::whereLimit(['idLoaiTin','6','1','8']);
 // <!-- Đời Sống --> //NHẦM TÊN
$TheGioi=TheLoai::where(['id','7',]);
$TheGioi1=TinTuc::whereLimit(['idLoaiTin','7','1','4']);

// commented
$commented=Comment::WhereLimit(['id','>','0','1','4']);

// TIN HOT
$HotNews=TinTuc::WhereLimit(['id','>','0','1','6']);

// phần lấy ra bài viết mới nhất
$baiVietMoi =TinTuc::sqlbullder(["SELECT * FROM tintuc ORDER BY id DESC LIMIT 0,6"]);

// lấy show ra chủ đề loại tintuc
$LayChuDe=TheLoai::all(); 


 // phần lấy EDITORPICKS
$EDITORPICKS =TinTuc::sqlbullder(["SELECT * FROM tintuc ORDER BY id DESC LIMIT 1,3"]);

// phần xuât ra POPULAR POSTS

$POPULARPOSTS =TinTuc::sqlbullder(["SELECT * FROM tintuc ORDER BY idLoaiTin DESC LIMIT 1,3"]);

 // PHẦN DÀNH CHO QUẢNG CÁO
$QuangCao=QuangCao::whereLimit(['id','>','0','0','3']);
?>

<!doctype html >
<!--[if IE 8]>    <html class="ie8" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang=en-US prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#"> 

<!-- Mirrored from demo.tagdiv.com/newspaper_local_news/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2017 23:04:53 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<title>Tin Tức 24h | ducdeveloper</title>
	<meta charset=UTF-8 />
	<meta name=viewport content="width=device-width, initial-scale=1.0">
	<link rel=pingback href="xmlrpc.php" />
	<meta name=description content="Are you searching for a professional touch on your community news site? Experience the best news WordPress theme on Newspaper Local News Demo website!" />
	<meta name=robots content=noodp />
	<link rel=canonical href="index.html" />
	<meta property=og:locale content=en_US />
	<meta property=og:type content=website />
	<meta property=og:title content="Newspaper Local News Demo | Newspaper WordPress Theme by tagDiv" />
	<meta property=og:description content="Are you searching for a professional touch on your community news site? Experience the best news WordPress theme on Newspaper Local News Demo website!" />
	<meta property=og:url content="index.html" />
	<meta property=og:site_name content="Newspaper Local News Demo" />
	<meta property=fb:app_id content=1681822448721994 />
	<meta name=twitter:card content=summary />
	<meta name=twitter:description content="Are you searching for a professional touch on your community news site? Experience the best news WordPress theme on Newspaper Local News Demo website!" />
	<meta name=twitter:title content="Newspaper Local News Demo | Newspaper WordPress Theme by tagDiv" />
	<meta name=twitter:creator content="@tagdivofficial" />

	<script type='application/ld+json'>{"@context":"http:\/\/schema.org","@type":"WebSite","@id":"#website","url":"https:\/\/demo.tagdiv.com\/newspaper_local_news\/","name":"Newspaper Local News Demo","potentialAction":{"@type":"SearchAction","target":"https:\/\/demo.tagdiv.com\/newspaper_local_news\/?s={search_term_string}","query-input":"required name=search_term_string"}}</script>
	<link rel=dns-prefetch href='http://fonts.googleapis.com/' />
	<link rel=dns-prefetch href='http://s.w.org/' />
	<link rel=alternate type="application/rss+xml" title="Newspaper Local News Demo &raquo; Feed" href="feed/index.html" />
	<link rel=alternate type="application/rss+xml" title="Newspaper Local News Demo &raquo; Comments Feed" href="comments/feed/index.html" />
	<link rel=alternate type="application/rss+xml" title="Newspaper Local News Demo &raquo; Homepage Comments Feed" href="homepage/feed/index.html" />

	<script type="text/javascript">window._wpemojiSettings={"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.2.1\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/demo.tagdiv.com\/newspaper_local_news\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.7.5"}};!function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),!(j.toDataURL().length<3e3)&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,65039,8205,55356,57096),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57331,55356,57096),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55357,56425,55356,57341,8205,55357,56507),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55357,56425,55356,57341,55357,56507),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);</script>
	<style type="text/css">img.wp-smiley,img.emoji{display:inline!important;border:none!important;box-shadow:none!important;height:1em!important;width:1em!important;margin:0 .07em!important;vertical-align:-.1em!important;background:none!important;padding:0!important}</style>
	<link rel=stylesheet id=td_live_css_frontend-css href='wp-content/plugins/td-composer/css-live/assets/css/A.td_live_css_frontend.css%2cqver%3d4.7.5.pagespeed.cf.hgsjq34X9o.css' type='text/css' media=all />
	<link rel=stylesheet id=google-fonts-style-css href='https://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400%2C400italic%2C600%2C600italic%2C700%7CRoboto%3A300%2C400%2C400italic%2C500%2C500italic%2C700%2C900&amp;ver=8.0_d55' type='text/css' media=all />
	<link rel=stylesheet id=td-theme-css href='wp-content/themes/011/A.style.css%2cqver%3d8.0_d55.pagespeed.cf.EoFlJlOqAc.css' type='text/css' media=all />
	<link rel=stylesheet id=td-theme-demo-style-css href='wp-content/themes/011/includes/demos/local_news/A.demo_style.css%2cqver%3d8.0_d55.pagespeed.cf.cxirilruTL.css' type='text/css' media=all />
	<script type='text/javascript' src='wp-includes/js/jquery/jquery.js%2cqver%3d1.12.4.pagespeed.jm.pPCPAKkkss.js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min.js%2cqver%3d1.4.1.pagespeed.jm.C2obERNcWh.js'></script>
	<link rel='https://api.w.org/' href='wp-json/index.html' />
	<link rel=EditURI type="application/rsd+xml" title=RSD href="xmlrpc0db0.php?rsd" />
	<link rel=wlwmanifest type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.xml" />
	<meta name=generator content="WordPress 4.7.5" />
	<link rel=shortlink href='index.html' />
	<link rel=alternate type="application/json+oembed" href="wp-json/oembed/1.0/embed621a.html?url=https%3A%2F%2Fdemo.tagdiv.com%2Fnewspaper_local_news%2F" />
	<link rel=alternate type="text/xml+oembed" href="wp-json/oembed/1.0/embed7133.html?url=https%3A%2F%2Fdemo.tagdiv.com%2Fnewspaper_local_news%2F&amp;format=xml" />
	<style id=tdw-css-placeholder></style>

	<script>window.tdwGlobal={"adminUrl":"https:\/\/demo.tagdiv.com\/newspaper_local_news\/wp-admin\/","wpRestNonce":"5a8306614d","wpRestUrl":"https:\/\/demo.tagdiv.com\/newspaper_local_news\/wp-json\/","permalinkStructure":"\/%postname%\/"};</script>

	
	<!--[if lt IE 9]><script src="https://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script>var td_is_safari=false;var td_is_ios=false;var td_is_windows_phone=false;var ua=navigator.userAgent.toLowerCase();var td_is_android=ua.indexOf('android')>-1;if(ua.indexOf('safari')!=-1){if(ua.indexOf('chrome')>-1){}else{td_is_safari=true;}}if(navigator.userAgent.match(/(iPhone|iPod|iPad)/i)){td_is_ios=true;}if(navigator.userAgent.match(/Windows Phone/i)){td_is_windows_phone=true;}if(td_is_ios||td_is_safari||td_is_windows_phone||td_is_android){if(top.location!=location){top.location.replace('https://demo.tagdiv.com/newspaper/');}}var tdBlocksArray=[];function tdBlock(){this.id='';this.block_type=1;this.atts='';this.td_column_number='';this.td_current_page=1;this.post_count=0;this.found_posts=0;this.max_num_pages=0;this.td_filter_value='';this.is_ajax_running=false;this.td_user_action='';this.header_color='';this.ajax_pagination_infinite_stop='';}(function(){var htmlTag=document.getElementsByTagName("html")[0];if(navigator.userAgent.indexOf("MSIE 10.0")>-1){htmlTag.className+=' ie10';}if(!!navigator.userAgent.match(/Trident.*rv\:11\./)){htmlTag.className+=' ie11';}if(/(iPad|iPhone|iPod)/g.test(navigator.userAgent)){htmlTag.className+=' td-md-is-ios';}var user_agent=navigator.userAgent.toLowerCase();if(user_agent.indexOf("android")>-1){htmlTag.className+=' td-md-is-android';}if(-1!==navigator.userAgent.indexOf('Mac OS X')){htmlTag.className+=' td-md-is-os-x';}if(/chrom(e|ium)/.test(navigator.userAgent.toLowerCase())){htmlTag.className+=' td-md-is-chrome';}if(-1!==navigator.userAgent.indexOf('Firefox')){htmlTag.className+=' td-md-is-firefox';}if(-1!==navigator.userAgent.indexOf('Safari')&&-1===navigator.userAgent.indexOf('Chrome')){htmlTag.className+=' td-md-is-safari';}if(-1!==navigator.userAgent.indexOf('IEMobile')){htmlTag.className+=' td-md-is-iemobile';}})();var tdLocalCache={};(function(){"use strict";tdLocalCache={data:{},remove:function(resource_id){delete tdLocalCache.data[resource_id];},exist:function(resource_id){return tdLocalCache.data.hasOwnProperty(resource_id)&&tdLocalCache.data[resource_id]!==null;},get:function(resource_id){return tdLocalCache.data[resource_id];},set:function(resource_id,cachedData){tdLocalCache.remove(resource_id);tdLocalCache.data[resource_id]=cachedData;}};})();var tds_login_sing_in_widget="show";var td_viewport_interval_list=[{"limitBottom":767,"sidebarWidth":228},{"limitBottom":1018,"sidebarWidth":300},{"limitBottom":1140,"sidebarWidth":324}];var td_animation_stack_effect="type0";var tds_animation_stack=true;var td_animation_stack_specific_selectors=".entry-thumb, img";var td_animation_stack_general_selectors=".td-animation-stack img, .td-animation-stack .entry-thumb, .post img";var td_ajax_url="index.html\/\/demo.tagdiv.com\/newspaper_local_news\/wp-admin\/admin-ajax.php?td_theme_name=Newspaper&v=8.0_d55";var td_get_template_directory_uri="index.html\/\/demo.tagdiv.com\/newspaper_local_news\/wp-content\/themes\/011";var tds_snap_menu="smart_snap_always";var tds_logo_on_sticky="show";var tds_header_style="3";var td_please_wait="Please wait...";var td_email_user_pass_incorrect="User or password incorrect!";var td_email_user_incorrect="Email or username incorrect!";var td_email_incorrect="Email incorrect!";var tds_more_articles_on_post_enable="";var tds_more_articles_on_post_time_to_wait="";var tds_more_articles_on_post_pages_distance_from_top=0;var tds_theme_color_site_wide="#f4511e";var tds_smart_sidebar="enabled";var tdThemeName="Newspaper";var td_magnific_popup_translation_tPrev="Previous (Left arrow key)";var td_magnific_popup_translation_tNext="Next (Right arrow key)";var td_magnific_popup_translation_tCounter="%curr% of %total%";var td_magnific_popup_translation_ajax_tError="The content from %url% could not be loaded.";var td_magnific_popup_translation_image_tError="The image #%curr% could not be loaded.";var td_ad_background_click_link="";var td_ad_background_click_target="";</script>

	<style>body{background-color:#e7e7e7}.td-header-wrap .black-menu .sf-menu>.current-menu-item>a,.td-header-wrap .black-menu .sf-menu>.current-menu-ancestor>a,.td-header-wrap .black-menu .sf-menu>.current-category-ancestor>a,.td-header-wrap .black-menu .sf-menu>li>a:hover,.td-header-wrap .black-menu .sf-menu>.sfHover>a,.td-header-style-12 .td-header-menu-wrap-full,.sf-menu>.current-menu-item>a:after,.sf-menu>.current-menu-ancestor>a:after,.sf-menu>.current-category-ancestor>a:after,.sf-menu>li:hover>a:after,.sf-menu>.sfHover>a:after,.td-header-style-12 .td-affix,.header-search-wrap .td-drop-down-search:after,.header-search-wrap .td-drop-down-search .btn:hover,input[type="submit"]:hover,.td-read-more a,.td-post-category:hover,.td-grid-style-1.td-hover-1 .td-big-grid-post:hover .td-post-category,.td-grid-style-5.td-hover-1 .td-big-grid-post:hover .td-post-category,.td_top_authors .td-active .td-author-post-count,.td_top_authors .td-active .td-author-comments-count,.td_top_authors .td_mod_wrap:hover .td-author-post-count,.td_top_authors .td_mod_wrap:hover .td-author-comments-count,.td-404-sub-sub-title a:hover,.td-search-form-widget .wpb_button:hover,.td-rating-bar-wrap div,.td_category_template_3 .td-current-sub-category,.dropcap,.td_wrapper_video_playlist .td_video_controls_playlist_wrapper,.wpb_default,.wpb_default:hover,.td-left-smart-list:hover,.td-right-smart-list:hover,.woocommerce-checkout .woocommerce input.button:hover,.woocommerce-page .woocommerce a.button:hover,.woocommerce-account div.woocommerce .button:hover,#bbpress-forums button:hover,.bbp_widget_login .button:hover,.td-footer-wrapper .td-post-category,.td-footer-wrapper .widget_product_search input[type="submit"]:hover,.woocommerce .product a.button:hover,.woocommerce .product #respond input#submit:hover,.woocommerce .checkout input#place_order:hover,.woocommerce .woocommerce.widget .button:hover,.single-product .product .summary .cart .button:hover,.woocommerce-cart .woocommerce table.cart .button:hover,.woocommerce-cart .woocommerce .shipping-calculator-form .button:hover,.td-next-prev-wrap a:hover,.td-load-more-wrap a:hover,.td-post-small-box a:hover,.page-nav .current,.page-nav:first-child>div,.td_category_template_8 .td-category-header .td-category a.td-current-sub-category,.td_category_template_4 .td-category-siblings .td-category a:hover,#bbpress-forums .bbp-pagination .current,#bbpress-forums #bbp-single-user-details #bbp-user-navigation li.current a,.td-theme-slider:hover .slide-meta-cat a,a.vc_btn-black:hover,.td-trending-now-wrapper:hover .td-trending-now-title,.td-scroll-up,.td-smart-list-button:hover,.td-weather-information:before,.td-weather-week:before,.td_block_exchange .td-exchange-header:before,.td_block_big_grid_9.td-grid-style-1 .td-post-category,.td_block_big_grid_9.td-grid-style-5 .td-post-category,.td-grid-style-6.td-hover-1 .td-module-thumb:after,.td-pulldown-syle-2 .td-subcat-dropdown ul:after,.td_block_template_9 .td-block-title:after,.td_block_template_15 .td-block-title:before{background-color:#f4511e}.global-block-template-4 .td-related-title .td-cur-simple-item:before{border-color:#f4511e transparent transparent transparent!important}.woocommerce .woocommerce-message .button:hover,.woocommerce .woocommerce-error .button:hover,.woocommerce .woocommerce-info .button:hover,.global-block-template-4 .td-related-title .td-cur-simple-item,.global-block-template-3 .td-related-title .td-cur-simple-item,.global-block-template-9 .td-related-title:after{background-color:#f4511e!important}.woocommerce .product .onsale,.woocommerce.widget .ui-slider .ui-slider-handle{background:none #f4511e}.woocommerce.widget.widget_layered_nav_filters ul li a{background:none repeat scroll 0 0 #f4511e!important}a,cite a:hover,.td_mega_menu_sub_cats .cur-sub-cat,.td-mega-span h3 a:hover,.td_mod_mega_menu:hover .entry-title a,.header-search-wrap .result-msg a:hover,.top-header-menu li a:hover,.top-header-menu .current-menu-item>a,.top-header-menu .current-menu-ancestor>a,.top-header-menu .current-category-ancestor>a,.td-social-icon-wrap>a:hover,.td-header-sp-top-widget .td-social-icon-wrap a:hover,.td-page-content blockquote p,.td-post-content blockquote p,.mce-content-body blockquote p,.comment-content blockquote p,.wpb_text_column blockquote p,.td_block_text_with_title blockquote p,.td_module_wrap:hover .entry-title a,.td-subcat-filter .td-subcat-list a:hover,.td-subcat-filter .td-subcat-dropdown a:hover,.td_quote_on_blocks,.dropcap2,.dropcap3,.td_top_authors .td-active .td-authors-name a,.td_top_authors .td_mod_wrap:hover .td-authors-name a,.td-post-next-prev-content a:hover,.author-box-wrap .td-author-social a:hover,.td-author-name a:hover,.td-author-url a:hover,.td_mod_related_posts:hover h3>a,.td-post-template-11 .td-related-title .td-related-left:hover,.td-post-template-11 .td-related-title .td-related-right:hover,.td-post-template-11 .td-related-title .td-cur-simple-item,.td-post-template-11 .td_block_related_posts .td-next-prev-wrap a:hover,.comment-reply-link:hover,.logged-in-as a:hover,#cancel-comment-reply-link:hover,.td-search-query,.td-category-header .td-pulldown-category-filter-link:hover,.td-category-siblings .td-subcat-dropdown a:hover,.td-category-siblings .td-subcat-dropdown a.td-current-sub-category,.widget a:hover,.td_wp_recentcomments a:hover,.archive .widget_archive .current,.archive .widget_archive .current a,.widget_calendar tfoot a:hover,.woocommerce a.added_to_cart:hover,.woocommerce-account .woocommerce-MyAccount-navigation a:hover,#bbpress-forums li.bbp-header .bbp-reply-content span a:hover,#bbpress-forums .bbp-forum-freshness a:hover,#bbpress-forums .bbp-topic-freshness a:hover,#bbpress-forums .bbp-forums-list li a:hover,#bbpress-forums .bbp-forum-title:hover,#bbpress-forums .bbp-topic-permalink:hover,#bbpress-forums .bbp-topic-started-by a:hover,#bbpress-forums .bbp-topic-started-in a:hover,#bbpress-forums .bbp-body .super-sticky li.bbp-topic-title .bbp-topic-permalink,#bbpress-forums .bbp-body .sticky li.bbp-topic-title .bbp-topic-permalink,.widget_display_replies .bbp-author-name,.widget_display_topics .bbp-author-name,.footer-text-wrap .footer-email-wrap a,.td-subfooter-menu li a:hover,.footer-social-wrap a:hover,a.vc_btn-black:hover,.td-smart-list-dropdown-wrap .td-smart-list-button:hover,.td_module_17 .td-read-more a:hover,.td_module_18 .td-read-more a:hover,.td_module_19 .td-post-author-name a:hover,.td-instagram-user a,.td-pulldown-syle-2 .td-subcat-dropdown:hover .td-subcat-more span,.td-pulldown-syle-2 .td-subcat-dropdown:hover .td-subcat-more i,.td-pulldown-syle-3 .td-subcat-dropdown:hover .td-subcat-more span,.td-pulldown-syle-3 .td-subcat-dropdown:hover .td-subcat-more i,.td-block-title-wrap .td-wrapper-pulldown-filter .td-pulldown-filter-display-option:hover,.td-block-title-wrap .td-wrapper-pulldown-filter .td-pulldown-filter-display-option:hover i,.td-block-title-wrap .td-wrapper-pulldown-filter .td-pulldown-filter-link:hover,.td-block-title-wrap .td-wrapper-pulldown-filter .td-pulldown-filter-item .td-cur-simple-item,.global-block-template-2 .td-related-title .td-cur-simple-item,.global-block-template-5 .td-related-title .td-cur-simple-item,.global-block-template-6 .td-related-title .td-cur-simple-item,.global-block-template-7 .td-related-title .td-cur-simple-item,.global-block-template-8 .td-related-title .td-cur-simple-item,.global-block-template-9 .td-related-title .td-cur-simple-item,.global-block-template-10 .td-related-title .td-cur-simple-item,.global-block-template-11 .td-related-title .td-cur-simple-item,.global-block-template-12 .td-related-title .td-cur-simple-item,.global-block-template-13 .td-related-title .td-cur-simple-item,.global-block-template-14 .td-related-title .td-cur-simple-item,.global-block-template-15 .td-related-title .td-cur-simple-item,.global-block-template-16 .td-related-title .td-cur-simple-item,.global-block-template-17 .td-related-title .td-cur-simple-item,.td-theme-wrap .sf-menu ul .td-menu-item>a:hover,.td-theme-wrap .sf-menu ul .sfHover>a,.td-theme-wrap .sf-menu ul .current-menu-ancestor>a,.td-theme-wrap .sf-menu ul .current-category-ancestor>a,.td-theme-wrap .sf-menu ul .current-menu-item>a,.td_outlined_btn{color:#f4511e}a.vc_btn-black.vc_btn_square_outlined:hover,a.vc_btn-black.vc_btn_outlined:hover,.td-mega-menu-page .wpb_content_element ul li a:hover,.td-theme-wrap .td-aj-search-results .td_module_wrap:hover .entry-title a,.td-theme-wrap .header-search-wrap .result-msg a:hover{color:#f4511e!important}.td-next-prev-wrap a:hover,.td-load-more-wrap a:hover,.td-post-small-box a:hover,.page-nav .current,.page-nav:first-child>div,.td_category_template_8 .td-category-header .td-category a.td-current-sub-category,.td_category_template_4 .td-category-siblings .td-category a:hover,#bbpress-forums .bbp-pagination .current,.post .td_quote_box,.page .td_quote_box,a.vc_btn-black:hover,.td_block_template_5 .td-block-title>*,.td_outlined_btn{border-color:#f4511e}.td_wrapper_video_playlist .td_video_currently_playing:after{border-color:#f4511e!important}.header-search-wrap .td-drop-down-search:before{border-color:transparent transparent #f4511e transparent}.block-title > span,
	.block-title > a,
	.block-title > label,
	.widgettitle,
	.widgettitle:after,
	.td-trending-now-title,
	.td-trending-now-wrapper:hover .td-trending-now-title,
	.wpb_tabs li.ui-tabs-active a,
	.wpb_tabs li:hover a,
	.vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container .vc_tta-tab.vc_active > a,
	.vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container .vc_tta-tab:hover > a,
	.td_block_template_1 .td-related-title .td-cur-simple-item,
	.woocommerce .product .products h2:not(.woocommerce-loop-product__title),
	.td-subcat-filter .td-subcat-dropdown:hover .td-subcat-more, 
	.td_3D_btn,
	.td_shadow_btn,
	.td_default_btn,
	.td_round_btn, 
	.td_outlined_btn:hover {background-color:#f4511e}.woocommerce div.product .woocommerce-tabs ul.tabs li.active{background-color:#f4511e!important}.block-title,.td_block_template_1 .td-related-title,.wpb_tabs .wpb_tabs_nav,.vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container,.woocommerce div.product .woocommerce-tabs ul.tabs:before{border-color:#f4511e}.td_block_wrap .td-subcat-item a.td-cur-simple-item{color:#f4511e}.td-grid-style-4 .entry-title{background-color:rgba(244,81,30,.7)}.block-title > span,
	.block-title > span > a,
	.block-title > a,
	.block-title > label,
	.widgettitle,
	.widgettitle:after,
	.td-trending-now-title,
	.td-trending-now-wrapper:hover .td-trending-now-title,
	.wpb_tabs li.ui-tabs-active a,
	.wpb_tabs li:hover a,
	.vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container .vc_tta-tab.vc_active > a,
	.vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container .vc_tta-tab:hover > a,
	.td_block_template_1 .td-related-title .td-cur-simple-item,
	.woocommerce .product .products h2:not(.woocommerce-loop-product__title),
	.td-subcat-filter .td-subcat-dropdown:hover .td-subcat-more,
	.td-weather-information:before,
	.td-weather-week:before,
	.td_block_exchange .td-exchange-header:before,
	.td-theme-wrap .td_block_template_3 .td-block-title > *,
	.td-theme-wrap .td_block_template_4 .td-block-title > *,
	.td-theme-wrap .td_block_template_7 .td-block-title > *,
	.td-theme-wrap .td_block_template_9 .td-block-title:after,
	.td-theme-wrap .td_block_template_10 .td-block-title::before,
	.td-theme-wrap .td_block_template_11 .td-block-title::before,
	.td-theme-wrap .td_block_template_11 .td-block-title::after,
	.td-theme-wrap .td_block_template_14 .td-block-title,
	.td-theme-wrap .td_block_template_15 .td-block-title:before,
	.td-theme-wrap .td_block_template_17 .td-block-title:before {background-color:#424242}.woocommerce div.product .woocommerce-tabs ul.tabs li.active{background-color:#424242!important}.block-title,.td_block_template_1 .td-related-title,.wpb_tabs .wpb_tabs_nav,.vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container,.woocommerce div.product .woocommerce-tabs ul.tabs:before,.td-theme-wrap .td_block_template_5 .td-block-title>*,.td-theme-wrap .td_block_template_17 .td-block-title,.td-theme-wrap .td_block_template_17 .td-block-title::before{border-color:#424242}.td-theme-wrap .td_block_template_4 .td-block-title>*:before,.td-theme-wrap .td_block_template_17 .td-block-title::after{border-color:#424242 transparent transparent transparent}.td-header-wrap .td-header-top-menu-full,.td-header-wrap .top-header-menu .sub-menu{background-color:#222}.td-header-style-8 .td-header-top-menu-full{background-color:transparent}.td-header-style-8 .td-header-top-menu-full .td-header-top-menu{background-color:#222;padding-left:15px;padding-right:15px}.td-header-wrap .td-header-top-menu-full .td-header-top-menu,.td-header-wrap .td-header-top-menu-full{border-bottom:none}.td-header-top-menu,.td-header-top-menu a,.td-header-wrap .td-header-top-menu-full .td-header-top-menu,.td-header-wrap .td-header-top-menu-full a,.td-header-style-8 .td-header-top-menu,.td-header-style-8 .td-header-top-menu a{color:#ededed}.top-header-menu .current-menu-item>a,.top-header-menu .current-menu-ancestor>a,.top-header-menu .current-category-ancestor>a,.top-header-menu li a:hover{color:#f4511e}.td-header-wrap .td-header-sp-top-widget .td-icon-font{color:#ededed}.td-header-wrap .td-header-sp-top-widget i.td-icon-font:hover{color:#f4511e}.td-header-wrap .td-header-menu-wrap-full,.sf-menu>.current-menu-ancestor>a,.sf-menu>.current-category-ancestor>a,.td-header-menu-wrap.td-affix,.td-header-style-3 .td-header-main-menu,.td-header-style-3 .td-affix .td-header-main-menu,.td-header-style-4 .td-header-main-menu,.td-header-style-4 .td-affix .td-header-main-menu,.td-header-style-8 .td-header-menu-wrap.td-affix,.td-header-style-8 .td-header-top-menu-full{background-color:#222}.td-boxed-layout .td-header-style-3 .td-header-menu-wrap,.td-boxed-layout .td-header-style-4 .td-header-menu-wrap,.td-header-style-3 .td_stretch_content .td-header-menu-wrap,.td-header-style-4 .td_stretch_content .td-header-menu-wrap{background-color:#222!important}@media (min-width:1019px){.td-header-style-1 .td-header-sp-recs,.td-header-style-1 .td-header-sp-logo{margin-bottom:28px}}@media (min-width:768px) and (max-width:1018px){.td-header-style-1 .td-header-sp-recs,.td-header-style-1 .td-header-sp-logo{margin-bottom:14px}}.td-header-style-7 .td-header-top-menu{border-bottom:none}.sf-menu>.current-menu-item>a:after,.sf-menu>.current-menu-ancestor>a:after,.sf-menu>.current-category-ancestor>a:after,.sf-menu>li:hover>a:after,.sf-menu>.sfHover>a:after,.td_block_mega_menu .td-next-prev-wrap a:hover,.td-mega-span .td-post-category:hover,.td-header-wrap .black-menu .sf-menu>li>a:hover,.td-header-wrap .black-menu .sf-menu>.current-menu-ancestor>a,.td-header-wrap .black-menu .sf-menu>.sfHover>a,.header-search-wrap .td-drop-down-search:after,.header-search-wrap .td-drop-down-search .btn:hover,.td-header-wrap .black-menu .sf-menu>.current-menu-item>a,.td-header-wrap .black-menu .sf-menu>.current-menu-ancestor>a,.td-header-wrap .black-menu .sf-menu>.current-category-ancestor>a{background-color:#f4511e}.td_block_mega_menu .td-next-prev-wrap a:hover{border-color:#f4511e}.header-search-wrap .td-drop-down-search:before{border-color:transparent transparent #f4511e transparent}.td_mega_menu_sub_cats .cur-sub-cat,.td_mod_mega_menu:hover .entry-title a,.td-theme-wrap .sf-menu ul .td-menu-item>a:hover,.td-theme-wrap .sf-menu ul .sfHover>a,.td-theme-wrap .sf-menu ul .current-menu-ancestor>a,.td-theme-wrap .sf-menu ul .current-category-ancestor>a,.td-theme-wrap .sf-menu ul .current-menu-item>a{color:#f4511e}.td-header-wrap .td-header-menu-wrap .sf-menu>li>a,.td-header-wrap .header-search-wrap .td-icon-search{color:#ededed}.td-menu-background:before,.td-search-background:before{background:rgba(0,0,0,.7);background:-moz-linear-gradient(top,rgba(0,0,0,.7) 0%,rgba(0,30,66,.7) 100%);background:-webkit-gradient(left top,left bottom,color-stop(0%,rgba(0,0,0,.7)),color-stop(100%,rgba(0,30,66,.7)));background:-webkit-linear-gradient(top,rgba(0,0,0,.7) 0%,rgba(0,30,66,.7) 100%);background: -o-linear-gradient(top, rgba(0,0,0,0.7) 0%, @mobileu_gradient_two_mob 100%);background:-ms-linear-gradient(top,rgba(0,0,0,.7) 0%,rgba(0,30,66,.7) 100%);background:linear-gradient(to bottom,rgba(0,0,0,.7) 0%,rgba(0,30,66,.7) 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='rgba(0,0,0,0.7)', endColorstr='rgba(0,30,66,0.7)', GradientType=0 )}.white-popup-block:after{background:rgba(0,0,0,.7);background:-moz-linear-gradient(45deg,rgba(0,0,0,.7) 0%,rgba(0,30,66,.7) 100%);background:-webkit-gradient(left bottom,right top,color-stop(0%,rgba(0,0,0,.7)),color-stop(100%,rgba(0,30,66,.7)));background:-webkit-linear-gradient(45deg,rgba(0,0,0,.7) 0%,rgba(0,30,66,.7) 100%);background:-o-linear-gradient(45deg,rgba(0,0,0,.7) 0%,rgba(0,30,66,.7) 100%);background:-ms-linear-gradient(45deg,rgba(0,0,0,.7) 0%,rgba(0,30,66,.7) 100%);background:linear-gradient(45deg,rgba(0,0,0,.7) 0%,rgba(0,30,66,.7) 100%);filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='rgba(0,0,0,0.7)', endColorstr='rgba(0,30,66,0.7)', GradientType=0 )}.td-banner-wrap-full,.td-header-style-11 .td-logo-wrap-full{background-color:#424242}.td-header-style-11 .td-logo-wrap-full{border-bottom:0}@media (min-width:1019px){.td-header-style-2 .td-header-sp-recs,.td-header-style-5 .td-a-rec-id-header>div,.td-header-style-5 .td-g-rec-id-header>.adsbygoogle,.td-header-style-6 .td-a-rec-id-header>div,.td-header-style-6 .td-g-rec-id-header>.adsbygoogle,.td-header-style-7 .td-a-rec-id-header>div,.td-header-style-7 .td-g-rec-id-header>.adsbygoogle,.td-header-style-8 .td-a-rec-id-header>div,.td-header-style-8 .td-g-rec-id-header>.adsbygoogle,.td-header-style-12 .td-a-rec-id-header>div,.td-header-style-12 .td-g-rec-id-header>.adsbygoogle{margin-bottom:24px!important}}@media (min-width:768px) and (max-width:1018px){.td-header-style-2 .td-header-sp-recs,.td-header-style-5 .td-a-rec-id-header>div,.td-header-style-5 .td-g-rec-id-header>.adsbygoogle,.td-header-style-6 .td-a-rec-id-header>div,.td-header-style-6 .td-g-rec-id-header>.adsbygoogle,.td-header-style-7 .td-a-rec-id-header>div,.td-header-style-7 .td-g-rec-id-header>.adsbygoogle,.td-header-style-8 .td-a-rec-id-header>div,.td-header-style-8 .td-g-rec-id-header>.adsbygoogle,.td-header-style-12 .td-a-rec-id-header>div,.td-header-style-12 .td-g-rec-id-header>.adsbygoogle{margin-bottom:14px!important}}.td-footer-wrapper::before{background-image:url(wp-content/uploads/2015/09/Polygon_Art_1920x1080.jpg)}.td-footer-wrapper::before{background-size:cover}.td-footer-wrapper::before{opacity:.15}.td-menu-background,.td-search-background{background-image:url(https://demo.tagdiv.com/newspaper_local_news/wp-content/uploads/2016/05/mobile3.jpg)}.white-popup-block:before{background-image:url(https://demo.tagdiv.com/newspaper_local_news/wp-content/uploads/2016/05/mobile3.jpg)}.top-header-menu>li>a,.td-weather-top-widget .td-weather-now .td-big-degrees,.td-weather-top-widget .td-weather-header .td-weather-city,.td-header-sp-top-menu .td_data_time{font-size:12px;line-height:30px;font-weight:bold;text-transform:uppercase}ul.sf-menu>.td-menu-item>a{line-height:50px;font-weight:bold}.sf-menu ul .td-menu-item a{font-family:"Open Sans";font-weight:bold;text-transform:uppercase}.td_mod_mega_menu .item-details a{font-family:"Open Sans";font-size:13px;line-height:18px;font-weight:bold;text-transform:uppercase}.td_mega_menu_sub_cats .block-mega-child-cats a{font-family:"Open Sans";font-weight:bold;text-transform:uppercase}.block-title > span,
	.block-title > a,
	.widgettitle,
	.td-trending-now-title,
	.wpb_tabs li a,
	.vc_tta-container .vc_tta-color-grey.vc_tta-tabs-position-top.vc_tta-style-classic .vc_tta-tabs-container .vc_tta-tab > a,
	.td-theme-wrap .td-related-title a,
	.woocommerce div.product .woocommerce-tabs ul.tabs li a,
	.woocommerce .product .products h2:not(.woocommerce-loop-product__title),
	.td-theme-wrap .td-block-title {font-family:"Open Sans";font-size:14px;line-height:33px;font-weight:bold;text-transform:uppercase}.td-theme-wrap .td-subcat-filter,.td-theme-wrap .td-subcat-filter .td-subcat-dropdown,.td-theme-wrap .td-block-title-wrap .td-wrapper-pulldown-filter .td-pulldown-filter-display-option,.td-theme-wrap .td-pulldown-category{line-height:33px}.td_block_template_1 .block-title>*{padding-bottom:0;padding-top:0}.td-big-grid-meta .td-post-category,.td_module_wrap .td-post-category,.td-module-image .td-post-category{font-size:11px;line-height:11px;font-weight:normal;text-transform:uppercase}.td_module_wrap .td-module-title{font-family:"Open Sans"}.td_module_1 .td-module-title{font-size:17px;line-height:22px;font-weight:bold;text-transform:uppercase}.td_module_2 .td-module-title{font-size:17px;line-height:22px;font-weight:bold;text-transform:uppercase}.td_module_3 .td-module-title{font-size:17px;line-height:22px;font-weight:bold;text-transform:uppercase}.td_module_4 .td-module-title{font-size:17px;line-height:22px;font-weight:bold;text-transform:uppercase}.td_module_5 .td-module-title{font-size:17px;line-height:22px;font-weight:bold;text-transform:uppercase}.td_module_6 .td-module-title{font-size:13px;line-height:18px;font-weight:bold;text-transform:uppercase}.td_module_7 .td-module-title{font-size:13px;line-height:18px;font-weight:bold;text-transform:uppercase}.td_module_8 .td-module-title{font-size:14px;line-height:20px;font-weight:bold;text-transform:uppercase}.td_module_9 .td-module-title{font-size:17px;line-height:22px;font-weight:bold;text-transform:uppercase}.td_module_10 .td-module-title{font-size:17px;line-height:22px;font-weight:bold;text-transform:uppercase}.td_module_11 .td-module-title{font-size:17px;line-height:22px;font-weight:bold;text-transform:uppercase}.td_module_12 .td-module-title{font-size:26px;line-height:32px;font-weight:bold;text-transform:uppercase}.td_module_13 .td-module-title{font-size:26px;line-height:32px;font-weight:bold;text-transform:uppercase}.td_module_14 .td-module-title{font-size:26px;line-height:32px;font-weight:bold;text-transform:uppercase}.td_module_15 .entry-title{font-size:26px;line-height:32px;font-weight:bold;text-transform:uppercase}.td_module_16 .td-module-title{font-size:17px;line-height:22px;font-weight:bold;text-transform:uppercase}.td_block_trending_now .entry-title a,.td-theme-slider .td-module-title a,.td-big-grid-post .entry-title{font-family:"Open Sans"}.td_module_mx1 .td-module-title a{font-weight:bold;text-transform:uppercase}.td_module_mx2 .td-module-title a{font-weight:bold;text-transform:uppercase}.td_module_mx3 .td-module-title a{font-weight:bold;text-transform:uppercase}.td_module_mx4 .td-module-title a{font-weight:bold;text-transform:uppercase}.td_module_mx7 .td-module-title a{font-weight:bold;text-transform:uppercase}.td_module_mx8 .td-module-title a{font-weight:bold;text-transform:uppercase}.td_block_trending_now .entry-title a{font-weight:bold}.td-theme-slider.iosSlider-col-1 .td-module-title a{font-weight:bold;text-transform:uppercase}.td-theme-slider.iosSlider-col-2 .td-module-title a{font-weight:bold;text-transform:uppercase}.td-theme-slider.iosSlider-col-3 .td-module-title a{font-weight:bold;text-transform:uppercase}.td-big-grid-post.td-big-thumb .td-big-grid-meta,.td-big-thumb .td-big-grid-meta .entry-title{font-size:17px;line-height:24px;font-weight:bold;text-transform:uppercase}.td-big-grid-post.td-medium-thumb .td-big-grid-meta,.td-medium-thumb .td-big-grid-meta .entry-title{font-size:17px;line-height:24px;font-weight:bold;text-transform:uppercase}.td-big-grid-post.td-small-thumb .td-big-grid-meta,.td-small-thumb .td-big-grid-meta .entry-title{font-size:13px;line-height:19px;font-weight:bold;text-transform:uppercase}.td-big-grid-post.td-tiny-thumb .td-big-grid-meta,.td-tiny-thumb .td-big-grid-meta .entry-title{font-size:11px;line-height:15px;font-weight:bold;text-transform:uppercase}.homepage-post .td-post-template-8 .td-post-header .entry-title{font-size:17px;line-height:24px;font-weight:bold;text-transform:uppercase}.post .td-post-header .entry-title{font-family:"Open Sans"}.td-post-template-default .td-post-header .entry-title{font-weight:bold;text-transform:uppercase}.td-post-template-1 .td-post-header .entry-title{font-weight:bold;text-transform:uppercase}.td-post-template-2 .td-post-header .entry-title{font-weight:bold;text-transform:uppercase}.td-post-template-3 .td-post-header .entry-title{font-weight:bold;text-transform:uppercase}.td-post-template-4 .td-post-header .entry-title{font-weight:bold;text-transform:uppercase}.td-post-template-5 .td-post-header .entry-title{font-weight:bold;text-transform:uppercase}.td-post-template-6 .td-post-header .entry-title{font-weight:bold;text-transform:uppercase}.td-post-template-7 .td-post-header .entry-title{font-weight:bold;text-transform:uppercase}.td-post-template-8 .td-post-header .entry-title{font-weight:bold;text-transform:uppercase}.td-post-template-9 .td-post-header .entry-title{font-weight:bold;text-transform:uppercase}.td-post-template-10 .td-post-header .entry-title{font-weight:bold;text-transform:uppercase}.td-post-template-11 .td-post-header .entry-title{font-weight:bold;text-transform:uppercase}.td-post-template-12 .td-post-header .entry-title{font-weight:bold;text-transform:uppercase}.td-post-template-13 .td-post-header .entry-title{font-weight:bold;text-transform:uppercase}.td-post-content p,.td-post-content{font-family:"Open Sans";font-size:17px;line-height:31px}.td-post-content h1{font-family:"Open Sans";font-weight:bold;text-transform:uppercase}.td-post-content h2{font-family:"Open Sans";font-weight:bold;text-transform:uppercase}.td-post-content h3{font-family:"Open Sans";font-weight:bold;text-transform:uppercase}.td-post-content h4{font-family:"Open Sans";font-weight:bold;text-transform:uppercase}.td-post-content h5{font-family:"Open Sans";font-weight:bold;text-transform:uppercase}.td-post-content h6{font-family:"Open Sans";font-weight:bold;text-transform:uppercase}.post .td-category a{font-family:"Open Sans";font-weight:bold;text-transform:uppercase}.post .td-post-next-prev-content a{font-family:"Open Sans";font-weight:bold;text-transform:uppercase}.td_block_related_posts .entry-title a{font-family:"Open Sans";font-weight:bold;text-transform:uppercase}.td-page-title,.woocommerce-page .page-title,.td-category-title-holder .td-page-title{font-family:"Open Sans";font-weight:bold;text-transform:uppercase}.td-page-content h1,.wpb_text_column h1{font-family:"Open Sans";font-weight:bold;text-transform:uppercase}.td-page-content h2,.wpb_text_column h2{font-family:"Open Sans";font-weight:bold;text-transform:uppercase}.td-page-content h3,.wpb_text_column h3{font-family:"Open Sans";font-weight:bold;text-transform:uppercase}.td-page-content h4,.wpb_text_column h4{font-family:"Open Sans";font-weight:bold;text-transform:uppercase}.td-page-content h5,.wpb_text_column h5{font-family:"Open Sans";font-weight:bold;text-transform:uppercase}.td-page-content h6,.wpb_text_column h6{font-family:"Open Sans";font-weight:bold;text-transform:uppercase}.footer-text-wrap{font-size:13px}.td-sub-footer-menu ul li a{font-family:"Open Sans";font-weight:bold;text-transform:uppercase}.category .td-category a{font-family:"Open Sans";font-weight:bold;text-transform:uppercase}.widget_archive a,.widget_calendar,.widget_categories a,.widget_nav_menu a,.widget_meta a,.widget_pages a,.widget_recent_comments a,.widget_recent_entries a,.widget_text .textwidget,.widget_tag_cloud a,.widget_search input,.woocommerce .product-categories a,.widget_display_forums a,.widget_display_replies a,.widget_display_topics a,.widget_display_views a,.widget_display_stats{font-family:"Open Sans";font-size:13px;line-height:18px;font-weight:bold;text-transform:uppercase}input[type="submit"],.td-read-more a,.vc_btn,.woocommerce a.button,.woocommerce button.button,.woocommerce #respond input#submit{font-family:"Open Sans";font-weight:bold;text-transform:uppercase}.top-header-menu>li,.td-header-sp-top-menu,#td-outer-wrap .td-header-sp-top-widget{line-height:30px}@media (min-width:768px){#td-header-menu{min-height:50px!important}.td-header-style-4 .td-main-menu-logo img,.td-header-style-5 .td-main-menu-logo img,.td-header-style-6 .td-main-menu-logo img,.td-header-style-7 .td-header-sp-logo img,.td-header-style-12 .td-main-menu-logo img{max-height:50px}.td-header-style-4 .td-main-menu-logo,.td-header-style-5 .td-main-menu-logo,.td-header-style-6 .td-main-menu-logo,.td-header-style-7 .td-header-sp-logo,.td-header-style-12 .td-main-menu-logo{height:50px}.td-header-style-4 .td-main-menu-logo a,.td-header-style-5 .td-main-menu-logo a,.td-header-style-6 .td-main-menu-logo a,.td-header-style-7 .td-header-sp-logo a,.td-header-style-7 .td-header-sp-logo img,.td-header-style-7 .header-search-wrap .td-icon-search,.td-header-style-12 .td-main-menu-logo a,.td-header-style-12 .td-header-menu-wrap .sf-menu>li>a{line-height:50px}.td-header-style-7 .sf-menu{margin-top:0}.td-header-style-7 #td-top-search{top:0;bottom:0}}.td-local-news .td-header-style-3 .td-header-menu-wrap:before,.td-local-news .td-grid-style-4 .td-big-grid-post .td-post-category{background-color:#f4511e}</style>
</head>




<body class="home page-template page-template-page-pagebuilder-latest page-template-page-pagebuilder-latest-php page page-id-2 homepage global-block-template-1 td-local-news td-animation-stack-type0 td-boxed-layout" itemscope=itemscope itemtype="https://schema.org/WebPage">
	<div class=td-scroll-up><i class=td-icon-menu-up></i></div>
	<div class=td-menu-background></div>
	<div id=td-mobile-nav>
		<div class=td-mobile-container>
			<div class=td-menu-socials-wrap>
				<div class=td-menu-socials>
					<span class=td-social-icon-wrap>
						<a target=_blank href="#" title=Facebook>
							<i class="td-icon-font td-icon-facebook"></i>
						</a>
					</span>
					<span class=td-social-icon-wrap>
						<a target=_blank href="#" title=Twitter>
							<i class="td-icon-font td-icon-twitter"></i>
						</a>
					</span>
					<span class=td-social-icon-wrap>
						<a target=_blank href="#" title=VKontakte>
							<i class="td-icon-font td-icon-vk"></i>
						</a>
					</span>
					<span class=td-social-icon-wrap>
						<a target=_blank href="#" title=Youtube>
							<i class="td-icon-font td-icon-youtube"></i>
						</a>
					</span> </div>
					<div class=td-mobile-close>
						<a href="#"><i class=td-icon-close-mobile></i></a>
					</div>
				</div>
				<div class=td-menu-login-section>
					<div class=td-guest-wrap>
						<div class=td-menu-avatar><div class=td-avatar-container><img src="https://secure.gravatar.com/avatar/?s=80&amp;d=mm&amp;r=g" width=80 height=80 alt="" class="avatar avatar-80 wp-user-avatar wp-user-avatar-80 photo avatar-default" /></div></div>
						<div class=td-menu-login><a id=login-link-mob>Sign in</a></div>
					</div>
				</div>


				<div class=td-mobile-content>
					<div class=menu-main-menu-container><ul id=menu-main-menu class=td-mobile-main-menu><li id=menu-item-138 class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-first menu-item-138"><a href="index.php">Home</a></li>
						<li id=menu-item-142 class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-142"><a href="category/business/index.html">Business<i class="td-icon-menu-right td-element-after"></i></a>
							<ul class=sub-menu>
								<li id=menu-item-0 class=menu-item-0><a href="category/business/finance/index.html">Finance</a></li>
								<li class=menu-item-0><a href="category/business/marketing/index.html">Marketing</a></li>
								<li class=menu-item-0><a href="category/business/politics/index.html">Politics</a></li>
							</ul>
						</li>
						<li id=menu-item-143 class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-143"><a href="category/lifestyle/index.html">Lifestyle<i class="td-icon-menu-right td-element-after"></i></a>
							<ul class=sub-menu>
								<li class=menu-item-0><a href="category/lifestyle/celebrity/index.html">Celebrity</a></li>
								<li class=menu-item-0><a href="category/lifestyle/fashion/index.html">Fashion</a></li>
								<li class=menu-item-0><a href="category/lifestyle/make-up/index.html">Make-up</a></li>
								<li class=menu-item-0><a href="category/lifestyle/musicvideo/index.html">Music/Video</a></li>
							</ul>
						</li>
						<li id=menu-item-148 class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-148"><a href="category/tech/entertainment/index.html">Entertainment</a></li>
						<li id=menu-item-145 class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-145"><a href="category/travel/index.html">Travel</a></li>
						<li id=menu-item-146 class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-146"><a href="#">News<i class="td-icon-menu-right td-element-after"></i></a>
							<ul class=sub-menu>
								<li id=menu-item-155 class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-155"><a href="category/travel/food-recipes/index.html">Food &#038; Recipes</a></li>
								<li id=menu-item-152 class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-152"><a href="category/lifestyle/musicvideo/index.html">Music/Video</a></li>
								<li id=menu-item-150 class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-150"><a href="category/lifestyle/celebrity/index.html">Celebrity</a></li>
								<li id=menu-item-149 class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-149"><a href="category/business/politics/index.html">Politics</a></li>
								<li id=menu-item-151 class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-151"><a href="category/lifestyle/make-up/index.html">Make-up</a></li>
								<li id=menu-item-153 class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-153"><a href="category/tech/audio/index.html">Audio</a></li>
								<li id=menu-item-154 class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-154"><a href="category/tech/gadgets/index.html">Gadgets</a></li>
							</ul>
						</li>
					</ul></div> </div>
				</div>
				<div id=login-form-mobile class=td-register-section>
					<div id=td-login-mob class="td-login-animation td-login-hide-mob">
						<div class=td-login-close>
							<a href="#" class=td-back-button><i class=td-icon-read-down></i></a>
							<div class=td-login-title>Sign in</div>
							<div class=td-mobile-close>
								<a href="#"><i class=td-icon-close-mobile></i></a>
							</div>
						</div>
						<div class=td-login-form-wrap>
							<div class=td-login-panel-title><span>Welcome!</span>Log into your account</div>
							<div class=td_display_err></div>
							<div class=td-login-inputs><input class=td-login-input type=text name=login_email id=login_email-mob value="" required><label>your username</label></div>
							<div class=td-login-inputs><input class=td-login-input type=password name=login_pass id=login_pass-mob value="" required><label>your password</label></div>
							<input type=button name=login_button id=login_button-mob class=td-login-button value="LOG IN">
							<div class=td-login-info-text><a href="#" id=forgot-pass-link-mob>Forgot your password?</a></div>
						</div>
					</div>
					<div id=td-forgot-pass-mob class="td-login-animation td-login-hide-mob">
						<div class=td-forgot-pass-close>
							<a href="#" class=td-back-button><i class=td-icon-read-down></i></a>
							<div class=td-login-title>Password recovery</div>
						</div>
						<div class=td-login-form-wrap>
							<div class=td-login-panel-title>Recover your password</div>
							<div class=td_display_err></div>
							<div class=td-login-inputs><input class=td-login-input type=text name=forgot_email id=forgot_email-mob value="" required><label>your email</label></div>
							<input type=button name=forgot_button id=forgot_button-mob class=td-login-button value="Send My Pass">
						</div>
					</div>
				</div>
			</div>


			<div class=td-search-background></div>
			<div class=td-search-wrap-mob>
				<div class=td-drop-down-search aria-labelledby=td-header-search-button>
					<form method=get class=td-search-form action="https://demo.tagdiv.com/newspaper_local_news/">
						<div class=td-search-close>
							<a href="#"><i class=td-icon-close-mobile></i></a>
						</div>
						<div role=search class=td-search-input>
							<span>Search</span>
							<input id=td-header-search-mob type=text value="" name=s autocomplete=off />
						</div>
					</form>
					<div id=td-aj-search-mob></div>
				</div>
			</div>




			<div id=td-outer-wrap class=td-theme-wrap>
				<div class="td-header-wrap td-header-style-3">
					<div class="td-header-top-menu-full td-container-wrap ">
						<div class="td-container td-header-row td-header-top-menu">
							<div class=top-bar-style-1>
								<div class=td-header-sp-top-menu>
									<div class=td-weather-top-widget id=td_top_weather_uid>
										<i class="td-icons broken-clouds-d"></i>
										<div class=td-weather-now data-block-uid=td_top_weather_uid>
											<span class=td-big-degrees>27.4</span>
											<span class=td-weather-unit>C</span>
										</div>
										<div class=td-weather-header>
											<div class=td-weather-city>Chicago</div>
										</div>
									</div>
									<ul class="top-header-menu td_ul_login"><li class=menu-item><a class="td-login-modal-js menu-item" href="#login-form" data-effect=mpf-td-login-effect>Sign in / Join</a><span class="td-sp-ico-login td_sp_login_ico_style"></span></li></ul><div class=menu-top-container><ul id=menu-top-menu class=top-header-menu><li id=menu-item-257 class="menu-item menu-item-type-post_type menu-item-object-page menu-item-first td-menu-item td-normal-menu menu-item-257"><a href="blog/index.html">Blog</a></li>
										<li id=menu-item-140 class="menu-item menu-item-type-custom menu-item-object-custom td-menu-item td-normal-menu menu-item-140"><a href="#">Radio</a></li>
										<li id=menu-item-141 class="menu-item menu-item-type-custom menu-item-object-custom td-menu-item td-normal-menu menu-item-141"><a href="#">Local</a></li>
									</ul></div></div>
									<div class=td-header-sp-top-widget>
										<span class=td-social-icon-wrap>
											<a target=_blank href="#" title=Facebook>
												<i class="td-icon-font td-icon-facebook"></i>
											</a>
										</span>
										<span class=td-social-icon-wrap>
											<a target=_blank href="#" title=Twitter>
												<i class="td-icon-font td-icon-twitter"></i>
											</a>
										</span>
										<span class=td-social-icon-wrap>
											<a target=_blank href="#" title=VKontakte>
												<i class="td-icon-font td-icon-vk"></i>
											</a>
										</span>
										<span class=td-social-icon-wrap>
											<a target=_blank href="#" title=Youtube>
												<i class="td-icon-font td-icon-youtube"></i>
											</a>
										</span></div>
									</div>
									<div id=login-form class="white-popup-block mfp-hide mfp-with-anim">
										<div class=td-login-wrap>
											<a href="#" class=td-back-button><i class=td-icon-modal-back></i></a>
											<div id=td-login-div class="td-login-form-div td-display-block">
												<div class=td-login-panel-title>Sign in</div>
												<div class=td-login-panel-descr>Welcome! Log into your account</div>
												<div class=td_display_err></div>
												<div class=td-login-inputs><input class=td-login-input type=text name=login_email id=login_email value="" required><label>your username</label></div>
												<div class=td-login-inputs><input class=td-login-input type=password name=login_pass id=login_pass value="" required><label>your password</label></div>
												<input type=button name=login_button id=login_button class="wpb_button btn td-login-button" value=Login>
												<div class=td-login-info-text><a href="#" id=forgot-pass-link>Forgot your password? Get help</a></div>
											</div>
											<div id=td-forgot-pass-div class="td-login-form-div td-display-none">
												<div class=td-login-panel-title>Password recovery</div>
												<div class=td-login-panel-descr>Recover your password</div>
												<div class=td_display_err></div>
												<div class=td-login-inputs><input class=td-login-input type=text name=forgot_email id=forgot_email value="" required><label>your email</label></div>
												<input type=button name=forgot_button id=forgot_button class="wpb_button btn td-login-button" value="Send My Password">
												<div class=td-login-info-text>A password will be e-mailed to you.</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="td-banner-wrap-full td-container-wrap ">
								<div class="td-container td-header-row td-header-header">
									<div class=td-header-sp-logo>
										<h1 class=td-logo> <a class=td-main-logo href="index.html">
											<img class=td-retina-data data-retina="https://demo.tagdiv.com/newspaper_local_news/wp-content/uploads/2015/09/logo-header@2x.png" src="wp-content/uploads/2015/09/logo-header.png" alt="" />
											<span class=td-visual-hidden>Newspaper Local News Demo</span>
										</a>
									</h1> </div>
									<div class=td-header-sp-recs>
										<div class=td-header-rec-wrap>
											<div class="td-a-rec td-a-rec-id-header  "><div class=td-visible-desktop>
												<a href="#"><img src="wp-content/uploads/2015/09/rec728.jpg" alt="" /></a>
											</div>
											<div class=td-visible-tablet-landscape>
												<a href="#"><img src="wp-content/uploads/2015/09/rec468.jpg" alt="" /></a>
											</div>
											<div class=td-visible-tablet-portrait>
												<a href="#"><img src="wp-content/uploads/2015/09/rec468.jpg" alt="" /></a>
											</div>
											<div class=td-visible-phone>
												<a href="#"><img src="wp-content/uploads/2015/09/rec320.jpg" alt="" /></a>
											</div></div>
										</div> </div>
									</div>
								</div>
								<div class="td-header-menu-wrap-full td-container-wrap ">

									<!-- phần header menu chính  -->

									<div class=td-header-menu-wrap>
										<div class="td-container td-header-row td-header-main-menu black-menu">
											<div id=td-header-menu role=navigation>
												<div id=td-top-mobile-toggle><a href="#"><i class="td-icon-font td-icon-mobile"></i></a></div>

												<div class="td-main-menu-logo td-logo-in-header">
<!-- <a class="td-mobile-logo td-sticky-mobile" href="index.html">
<img class=td-retina-data data-retina="https://demo.tagdiv.com/newspaper_local_news/wp-content/uploads/2017/05/mobile-theme2@2x.png" src="wp-content/uploads/2017/05/mobile-theme2.png" alt="" />
</a>
--><a class="td-header-logo td-sticky-mobile" href="index.php">
	<img class=td-retina-data data-retina="https://demo.tagdiv.com/newspaper_local_news/wp-content/uploads/2015/09/logo-header@2x.png" src="wp-content/uploads/2015/09/logo-header.png" alt="" />
</a>
</div>
<!-- phần menu hiển thị chính -->
<div class=menu-main-menu-container>
	<ul id=menu-main-menu-1 class=sf-menu>

		<!-- phần nút home bỏ qua -->
		<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-first td-menu-item td-normal-menu menu-item-138"><a href="index.php"><img src="image/home.gif" width="10px" height="5px"></a></li>




		<?php foreach ($GetMenu as $Menu) { ?><!-- vòng lặp lấy ra tên menu -->





		<li class="menu-item menu-item-type-taxonomy menu-item-object-category td-menu-item td-mega-menu menu-item-142">
			<a href="category.php?id=<?= $Menu->id?>" style="font-size: 12.5px;"><?= $Menu->Ten?></a>
			<ul class=sub-menu>
				<li class=menu-item-0>
					<div class=td-container-border>
						<div class=td-mega-grid>
							<div class="td_block_wrap td_block_mega_menu td_uid_2_59befff99cbf2_rand td_with_ajax_pagination td-pb-border-top td_block_template_1" data-td-block-uid=td_uid_2_59befff99cbf2>

								<!-- đoạn script sử lý hover hiện tin lỗi -->
<!-- <script>
var block_td_uid_2_59befff99cbf2=new tdBlock();
block_td_uid_2_59befff99cbf2.id="td_uid_2_59befff99cbf2";block_td_uid_2_59befff99cbf2.atts='{"limit":4,"sort":"","post_ids":"","tag_slug":"","autors_id":"","installed_post_types":"","category_id":"3","category_ids":"","custom_title":"","custom_url":"","show_child_cat":30,"sub_cat_ajax":"","ajax_pagination":"next_prev","header_color":"","header_text_color":"","ajax_pagination_infinite_stop":"","td_column_number":3,"td_ajax_preloading":"","td_ajax_filter_type":"td_category_ids_filter","td_ajax_filter_ids":"","td_filter_default_txt":"All","color_preset":"","border_top":"","class":"td_uid_2_59befff99cbf2_rand","el_class":"","offset":"","css":"","tdc_css":"","tdc_css_class":"td_uid_2_59befff99cbf2_rand","live_filter":"","live_filter_cur_post_id":"","live_filter_cur_post_author":"","block_template_id":""}';block_td_uid_2_59befff99cbf2.td_column_number="3";block_td_uid_2_59befff99cbf2.block_type="td_block_mega_menu";block_td_uid_2_59befff99cbf2.post_count="4";block_td_uid_2_59befff99cbf2.found_posts="18";block_td_uid_2_59befff99cbf2.header_color="";block_td_uid_2_59befff99cbf2.ajax_pagination_infinite_stop="";block_td_uid_2_59befff99cbf2.max_num_pages="5";tdBlocksArray.push(block_td_uid_2_59befff99cbf2);
</script> -->
<div class=td_mega_menu_sub_cats>
	<div class=block-mega-child-cats>


		<!-- vòng lặp sub menu nhỏ -->

		<?php 
		$getSubMenu= LoaiTin::where(['idTheLoai',"$Menu->id"]); foreach ($getSubMenu as $SubMenu) { ?>
		<a class="cur-sub-cat mega-menu-sub-cat-td_uid_2_59befff99cbf2" id=td_uid_3_59befff99cf8f data-td_block_id=td_uid_2_59befff99cbf2 data-td_filter_value="" href="category.php?id=<?= $SubMenu->getTheLoai()->id ?>">
			
			<?= $SubMenu->Ten?>
		</a>
		<?php } ?>


		<!-- hết vòng lặp sub menu nhỏ -->


	</div>
</div>
<div id=td_uid_2_59befff99cbf2 class=td_block_inner>
	<div class=td-mega-row>

		<!-- phần hiển thị thông tin theo loaitin -->
		<!-- lấy ra 4 tin từ db -->
		<?php $getSubHot= TinTuc::whereLimit(['idLoaiTin',"$Menu->id",'0','4']); ?>

		<?php foreach ($getSubHot as $SubHot ) { ?>
		<div class=td-mega-span>
			<div class="td_module_mega_menu td_mod_mega_menu">
				<div class=td-module-image>
					<div class=td-module-thumb>
						<a href="page.php?id=<?= $SubHot->id?>" rel=bookmark title="<?= $SubHot->TieuDe?>">
							<img class=entry-thumb src="image/tintuc/<?= $SubHot->Hinh ?>" style="width: 210px;height: 150px;" alt="" title="<?= $SubHot->TieuDe?>" /></a>
						</div> 
						<a href="category.php?id=<?= $SubMenu->getTheLoai()->id?>" class=td-post-category><?= $SubMenu->Ten?></a></div>
						<div class=item-details>
							<h3 class="entry-title td-module-title">

								<a href="page.php?id=<?= $SubHot->id?>" rel=bookmark title="<?= $SubHot->TieuDe?>"><?= $SubHot->TieuDe?></a></h3> </div>
							</div>
						</div>
						<?php } ?>
						<!-- hết phần hiện thị thông tin theo loại tin -->

					</div>
				</div><div class=td-next-prev-wrap><a href="#" class="td-ajax-prev-page ajax-page-disabled" id=prev-page-td_uid_2_59befff99cbf2 data-td_block_id=td_uid_2_59befff99cbf2><i class="td-icon-font td-icon-menu-left"></i></a><a href="#" class=td-ajax-next-page id=next-page-td_uid_2_59befff99cbf2 data-td_block_id=td_uid_2_59befff99cbf2><i class="td-icon-font td-icon-menu-right"></i></a></div><div class=clearfix></div></div> </div></div></li>
			</ul>
		</li>





		<?php } ?><!-- hết vòng lặp lấy ra tên menu -->
	</ul>
</div>
</div>


<div class=td-search-wrapper>
	<div id=td-top-search>
		<div class=header-search-wrap>
			<div class="dropdown header-search">
				<a id=td-header-search-button href="#" role=button class="dropdown-toggle " data-toggle=dropdown><i class=td-icon-search></i></a>
				<a id=td-header-search-button-mob href="#" role=button class="dropdown-toggle " data-toggle=dropdown><i class=td-icon-search></i></a>
			</div>
		</div>
	</div>
</div>
<div class=header-search-wrap>
	<div class="dropdown header-search">
		<div class=td-drop-down-search aria-labelledby=td-header-search-button>
			<form method=get class=td-search-form action="https://demo.tagdiv.com/newspaper_local_news/">
				<div role=search class=td-head-form-search-wrap>
					<input id=td-header-search type=text value="" name=s autocomplete=off /><input class="wpb_button wpb_btn-inverse btn" type=submit id=td-header-search-top value=Search />
				</div>
			</form>
			<div id=td-aj-search></div>
		</div>
	</div>
</div> 
</div>
</div>
<!-- hết phần header menu -->
</div>
