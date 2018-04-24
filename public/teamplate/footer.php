


 <div class="td-footer-wrapper td-container-wrap ">
<div class=td-container>
<div class=td-pb-row>
<div class=td-pb-span12>
</div>
</div>
<div class=td-pb-row>
<div class=td-pb-span4>
<div class="td_block_wrap td_block_7 td_uid_41_59befff9d54e8_rand td-pb-border-top td_block_template_1 td-column-1 td_block_padding" data-td-block-uid=td_uid_41_59befff9d54e8>

<!-- <script>var block_td_uid_41_59befff9d54e8=new tdBlock();block_td_uid_41_59befff9d54e8.id="td_uid_41_59befff9d54e8";block_td_uid_41_59befff9d54e8.atts='{"limit":3,"sort":"featured","post_ids":"","tag_slug":"","autors_id":"","installed_post_types":"","category_id":"","category_ids":"","custom_title":"EDITOR PICKS","custom_url":"","show_child_cat":"","sub_cat_ajax":"","ajax_pagination":"","header_color":"","header_text_color":"","ajax_pagination_infinite_stop":"","td_column_number":1,"td_ajax_preloading":"","td_ajax_filter_type":"","td_ajax_filter_ids":"","td_filter_default_txt":"All","color_preset":"","border_top":"","class":"td_uid_41_59befff9d54e8_rand","el_class":"","offset":"","css":"","tdc_css":"","tdc_css_class":"td_uid_41_59befff9d54e8_rand","live_filter":"","live_filter_cur_post_id":"","live_filter_cur_post_author":"","block_template_id":""}';block_td_uid_41_59befff9d54e8.td_column_number="1";block_td_uid_41_59befff9d54e8.block_type="td_block_7";block_td_uid_41_59befff9d54e8.post_count="3";block_td_uid_41_59befff9d54e8.found_posts="5";block_td_uid_41_59befff9d54e8.header_color="";block_td_uid_41_59befff9d54e8.ajax_pagination_infinite_stop="";block_td_uid_41_59befff9d54e8.max_num_pages="2";tdBlocksArray.push(block_td_uid_41_59befff9d54e8);</script> -->

<div class=td-block-title-wrap>

<h4 class=block-title>

<span class=td-pulldown-size>EDITOR PICKS</span></h4></div>

<div id=td_uid_41_59befff9d54e8 class=td_block_inner>


<!-- phần EDITORPICKS -->

<?php foreach ($EDITORPICKS as $EDITORPICKS) {
 ?>
<div class=td-block-span12>
<div class="td_module_6 td_module_wrap td-animation-stack">
<div class=td-module-thumb><a href="page.php?id=<?=$EDITORPICKS->id ?>" rel=bookmark title="<?= $EDITORPICKS->TieuDe ?>"><img width=100 height=70 class=entry-thumb src="image/tintuc/<?= $EDITORPICKS->Hinh ?>" alt="" title="<?= $EDITORPICKS->TieuDe ?>" /></a></div>
<div class=item-details>
<h3 class="entry-title td-module-title"><a href="page.php?id=<?=$EDITORPICKS->id ?>" rel=bookmark title="<?= $EDITORPICKS->TieuDe ?>"><?= $EDITORPICKS->TieuDe ?></a></h3> <div class=td-module-meta-info>
<span class=td-post-date><time class="entry-date updated td-module-date" datetime="2015-09-16T08:52:02+00:00">September 16, 2015</time></span> </div>
</div>
</div>
</div>
<?php } ?>


</div></div> </div>
<div class=td-pb-span4>
<div class="td_block_wrap td_block_7 td_uid_42_59befff9d5b3a_rand td-pb-border-top td_block_template_1 td-column-1 td_block_padding" data-td-block-uid=td_uid_42_59befff9d5b3a>
<!-- 
<script>
var block_td_uid_42_59befff9d5b3a=new tdBlock();block_td_uid_42_59befff9d5b3a.id="td_uid_42_59befff9d5b3a";block_td_uid_42_59befff9d5b3a.atts='{"limit":3,"sort":"popular","post_ids":"","tag_slug":"","autors_id":"","installed_post_types":"","category_id":"","category_ids":"","custom_title":"POPULAR POSTS","custom_url":"","show_child_cat":"","sub_cat_ajax":"","ajax_pagination":"","header_color":"","header_text_color":"","ajax_pagination_infinite_stop":"","td_column_number":1,"td_ajax_preloading":"","td_ajax_filter_type":"","td_ajax_filter_ids":"","td_filter_default_txt":"All","color_preset":"","border_top":"","class":"td_uid_42_59befff9d5b3a_rand","el_class":"","offset":"","css":"","tdc_css":"","tdc_css_class":"td_uid_42_59befff9d5b3a_rand","live_filter":"","live_filter_cur_post_id":"","live_filter_cur_post_author":"","block_template_id":""}';block_td_uid_42_59befff9d5b3a.td_column_number="1";block_td_uid_42_59befff9d5b3a.block_type="td_block_7";block_td_uid_42_59befff9d5b3a.post_count="3";block_td_uid_42_59befff9d5b3a.found_posts="63";block_td_uid_42_59befff9d5b3a.header_color="";block_td_uid_42_59befff9d5b3a.ajax_pagination_infinite_stop="";block_td_uid_42_59befff9d5b3a.max_num_pages="21";tdBlocksArray.push(block_td_uid_42_59befff9d5b3a);
</script> -->

<div class=td-block-title-wrap>

<!-- phần POPULAR POSTS -->
<h4 class=block-title>
<span class=td-pulldown-size>POPULAR POSTS</span></h4></div>
<div id=td_uid_42_59befff9d5b3a class=td_block_inner>
<?php foreach ($POPULARPOSTS as $POPULARPOSTS ) {
?>
<div class=td-block-span12>
<div class="td_module_6 td_module_wrap td-animation-stack">
<div class=td-module-thumb><a href="page.php?id=<?=$POPULARPOSTS->id ?>" rel=bookmark title="<?= $POPULARPOSTS->TieuDe ?>">
<img class=entry-thumb src="image/tintuc/<?= $POPULARPOSTS->Hinh ?>" style="width:100px;height:70px " alt="" title="<?= $POPULARPOSTS->TieuDe ?>" /></a></div>
<div class=item-details>
<h3 class="entry-title td-module-title">
<a href="page.php?id=<?=$POPULARPOSTS->id ?>" rel=bookmark title="<?= $POPULARPOSTS->TieuDe ?>"><?= $POPULARPOSTS->TieuDe ?></a></h3> <div class=td-module-meta-info>
<span class=td-post-date><time class="entry-date updated td-module-date" datetime="2015-09-16T08:51:27+00:00">September 16, 2015</time></span> </div>
</div>
</div>
</div>
<?php } ?>

</div></div> </div>
<div class=td-pb-span4>
<div class="td_block_wrap td_block_popular_categories td_uid_43_59befff9d615e_rand widget widget_categories td-pb-border-top td_block_template_1" data-td-block-uid=td_uid_43_59befff9d615e>
<h4 class=block-title>



<!-- phần POPULAR CATEGORY -->
<span class=td-pulldown-size>POPULAR CATEGORY</span></h4>
<?php $LayRaLoaiTin=LoaiTin::where(['id','<','10']); ?>
<ul class=td-pb-padding-side>
<?php foreach ($LayRaLoaiTin as $LayRaLoaiTin ) {
 ?>
<li><a href="category.php?id=<?= $LayRaLoaiTin->id?>"><?= $LayRaLoaiTin->Ten ?>
<?php $lysobai=TinTuc::sqlbullder(["SELECT count(id) AS sobai FROM tintuc WHERE idLoaiTin=$LayRaLoaiTin->id ORDER BY sobai DESC"]); ?>
<?php foreach ($lysobai as $lysobai) {
    
} ?>
<span class=td-cat-no> <?= $lysobai->sobai ?></span></a></li>
<?php } ?>

</ul>
</div>
 </div>
</div>
</div>
<div class=td-footer-bottom-full>
<div class=td-container>
<div class=td-pb-row>
<div class=td-pb-span3>
<aside class=footer-logo-wrap>
<a href="index.php">
<img class=td-retina-data src="wp-content/uploads/2015/09/logo-footer.png" alt="" title="" /></a></aside></div><div class=td-pb-span5>
<aside class=footer-text-wrap>
<div class=block-title><span>ABOUT US</span>
</div>TinTuc 24h is your news, entertainment, music fashion website. We provide you with the latest breaking news and videos straight from the entertainment industry.
<div class=footer-email-wrap>Contact us: 
<a href="mailto:ducbnph05034@fpt.edu.vn">contact@fpt.edu.vn</a></div></aside></div>
<div class=td-pb-span4>
<aside class="footer-social-wrap td-social-style-2">
<div class=block-title><span>FOLLOW US</span></div>
<span class=td-social-icon-wrap>
<a target=_blank href="https://www.facebook.com/duc.developer" title=Facebook>
<i class="td-icon-font td-icon-facebook"></i>
</a>
</span>
<span class=td-social-icon-wrap>
<a target=_blank href="https://www.facebook.com/duc.developer" title=Twitter>
<i class="td-icon-font td-icon-twitter"></i>
</a>
</span>
<span class=td-social-icon-wrap>
<a target=_blank href="https://www.facebook.com/duc.developer" title=VKontakte>
<i class="td-icon-font td-icon-vk"></i>
</a>
</span>
<span class=td-social-icon-wrap>
<a target=_blank href="https://www.facebook.com/duc.developer" title=Youtube>
<i class="td-icon-font td-icon-youtube"></i>
</a>
</span></aside></div> </div>
</div>
</div>
</div>
<div class="td-sub-footer-container td-container-wrap ">
<div class=td-container>
<div class=td-pb-row>
<div class="td-pb-span td-sub-footer-menu">
<div class=menu-footer-menu-container>
<ul id=menu-footer-menu class=td-subfooter-menu>
<?php foreach ($LayChuDe as $LayChuDe2) {
 ?>
<li id=menu-item-259 class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-first td-menu-item td-normal-menu menu-item-259">
<a href="category.php?id=<?= $LayChuDe2->id ?>"><?= $LayChuDe2->Ten ?></a></li>

<?php } ?>
</ul></div> </div>
<div class="td-pb-span td-sub-footer-copy">
&copy; Copyright 2017 - ducdeveloper</div>
</div>
</div>
</div>
</div>
<style type="text/css" media=screen>.td-local-news .td_block_template_1 .block-title>*{padding-bottom:0;padding-top:0}.td-trending-now-title{line-height:22px}</style>
<script type='text/javascript' src='wp-content/themes/011/js/tagdiv_theme.min.js%2cqver%3d8.0_d55.pagespeed.jm.mwajb5VTQn.js'></script>
<script type='text/javascript' src='wp-includes/js/comment-reply.min66f2.js?ver=4.7.5'></script>
<script type='text/javascript' src='wp-includes/js/wp-embed.min66f2.js?ver=4.7.5'></script>
<script>jQuery().ready(function(){tdWeather.addItem({"block_uid":"td_top_weather_uid","location":"Chicago","api_location":"Chicago","api_language":"en","today_icon":"broken-clouds-d","today_icon_text":"overcast clouds","today_temp":[27.4,81.3],"today_humidity":61,"today_wind_speed":[5.7,3.5],"today_min":[26,78.8],"today_max":[29,84.2],"today_clouds":90,"current_unit":0,"forecast":[{"timestamp":1505754000,"day_temp":[21,69],"day_name":"Mon","owm_day_index":1},{"timestamp":1505840400,"day_temp":[20,68],"day_name":"Tue","owm_day_index":2},{"timestamp":1505926800,"day_temp":[26,79],"day_name":"Wed","owm_day_index":3},{"timestamp":1506013200,"day_temp":[27,80],"day_name":"Thu","owm_day_index":4},{"timestamp":1506099600,"day_temp":[31,88],"day_name":"Fri","owm_day_index":5}],"api_key":"c3075d0842fb57c51faada7fc3cbba6b"});});(function(){var html_jquery_obj=jQuery('html');if(html_jquery_obj.length&&(html_jquery_obj.is('.ie8')||html_jquery_obj.is('.ie9'))){var path='wp-content/themes/011/style.css';jQuery.get(path,function(data){var str_split_separator='#td_css_split_separator';var arr_splits=data.split(str_split_separator);var arr_length=arr_splits.length;if(arr_length>1){var dir_path='wp-content/themes/011/index.html';var splited_css='';for(var i=0;i<arr_length;i++){if(i>0){arr_splits[i]=str_split_separator+' '+arr_splits[i];}var formated_str=arr_splits[i].replace(/\surl\(\'(?!data\:)/gi,function regex_function(str){return' url(\''+dir_path+'/'+str.replace(/url\(\'/gi,'').replace(/^\s+|\s+$/gm,'');});splited_css+="<style>"+formated_str+"</style>";}var td_theme_css=jQuery('link#td-theme-css');if(td_theme_css.length){td_theme_css.after(splited_css);}}});}})();</script>
<div id=tdw-css-writer style=display:none class="tdw-drag-dialog tdc-window-sidebar">
<header>
<a title=Editor class="tdw-tab tdc-tab-active" href="#" data-tab-content=tdw-tab-editor>Edit with Live CSS</a>
<div class=tdw-less-info title="This will be red when errors are detected in your CSS and LESS"></div>
</header>
<div class=tdw-content>
<div class="tdw-tabs-content tdw-tab-editor tdc-tab-content-active">
<script>(function(jQuery,undefined){jQuery(window).ready(function(){if('undefined'!==typeof tdcAdminIFrameUI){var $liveIframe=tdcAdminIFrameUI.getLiveIframe();if($liveIframe.length){$liveIframe.load(function(){$liveIframe.contents().find('body').append('<textarea class="tdw-css-writer-editor" style="display: none"></textarea>');});}}});})(jQuery);</script>
<textarea class="tdw-css-writer-editor td_live_css_uid_1_59befff9d6a27"></textarea>
<div id=td_live_css_uid_1_59befff9d6a27 class=td-code-editor></div>
<script>jQuery(window).load(function(){if('undefined'!==typeof tdLiveCssInject){tdLiveCssInject.init();var editor_textarea=jQuery('.td_live_css_uid_1_59befff9d6a27');var languageTools=ace.require("ace/ext/language_tools");var tdcCompleter={getCompletions:function(editor,session,pos,prefix,callback){if(prefix.length===0){callback(null,[]);return}if('undefined'!==typeof tdcAdminIFrameUI){var data={error:undefined,getShortcode:''};tdcIFrameData.getShortcodeFromData(data);if(!_.isUndefined(data.error)){tdcDebug.log(data.error);}if(!_.isUndefined(data.getShortcode)){var regex=/el_class=\"([A-Za-z0-9_-]*\s*)+\"/g,results=data.getShortcode.match(regex);var elClasses={};for(var i=0;i<results.length;i++){var currentClasses=results[i].replace('el_class="','').replace('"','').split(' ');for(var j=0;j<currentClasses.length;j++){if(_.isUndefined(elClasses[currentClasses[j]])){elClasses[currentClasses[j]]='';}}}var arrElClasses=[];for(var prop in elClasses){arrElClasses.push(prop);}callback(null,arrElClasses.map(function(item){return{name:item,value:item,meta:'in_page'}}));}}}};languageTools.addCompleter(tdcCompleter);window.editor=ace.edit("td_live_css_uid_1_59befff9d6a27");window.editorChangeHandler=function(){window.onbeforeunload=function(){if(tdwState.lessWasEdited){return"You have attempted to leave this page. Are you sure?";}return false;};var editorValue=editor.getSession().getValue();editor_textarea.val(editorValue);if('undefined'!==typeof tdcAdminIFrameUI){tdcAdminIFrameUI.getLiveIframe().contents().find('.tdw-css-writer-editor:first').val(editorValue);}tdLiveCssInject.less();};editor.getSession().setValue(editor_textarea.val());editor.getSession().on('change',editorChangeHandler);editor.setTheme("ace/theme/textmate");editor.setShowPrintMargin(false);editor.getSession().setMode("ace/mode/less");editor.setOptions({enableBasicAutocompletion:true,enableSnippets:true,enableLiveAutocompletion:false});}});</script>
</div>
</div>
<footer>
<a href="#" class=tdw-save-css></a>
<div class=tdw-more-info-text></div>
<div class=tdw-resize></div>
</footer>
</div>
</body>

</html>
