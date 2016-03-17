</section>
<footer class="footer">
    <div class="footer-inner">
        <div class="copyright pull-left">
		<!-- hitokoto加载 -->
		<script type="text/javascript" src="http://api.hitokoto.us/rand?encode=js&cat=a&charset=utf-8"></script>
         <a href="<?php site_url(); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> 版权所有，保留一切权利 · <a href="<?php site_url(); ?>/sitemap.xml" title="站点地图">站点地图</a>   ·   基于WordPress构建   © 2015-2016 Theme by <a href="http://www.kanade.pw" title="Kanade">Kanade</a> [hitokoto：<script>hitokoto()</script>]
        </div>
        <div class="trackcode pull-right">
            <?php if( dopt('d_track_b') ) echo dopt('d_track'); ?>
        </div>
    </div>
</footer>

<?php 
wp_footer(); 
global $dHasShare; 
if($dHasShare == true){ 
	echo'<script>with(document)0[(getElementsByTagName("head")[0]||body).appendChild(createElement("script")).src="http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion="+~(-new Date()/36e5)];
</script>';
}  
if( dopt('d_footcode_b') ) echo dopt('d_footcode'); 
?>
</body>
</html>