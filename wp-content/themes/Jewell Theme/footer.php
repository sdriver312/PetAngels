</div><!-- end site-wrap -->

</div><!-- end page-wrap -->


<div id="footer">
	
	<div id="menu">
		<?php if(function_exists('wp_nav_menu')) : ?>
		<?php wp_nav_menu(array('menu' => 'Main Navigational Menu', )); ?>
		<?php else : ?>
		<ul>
			
		</ul>
		<?php endif; ?>
	</div><!-- end menu -->

		
		<div id="copyright">
			<p class="small">&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></p>
		</div>

	</div> <!-- end footer -->

	<?php wp_footer(); ?>
	
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37617612-1']);
  _gaq.push(['_setDomainName', 'petadoptionangels.com']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	
</body>

</html>
