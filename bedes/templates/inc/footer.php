<div id="footer" >
	<!-- footerLinks starts -->
	<div class="footerLinks fltrt">
		<?php print theme('links', menu_navigation_links('menu-footer-links',0)); ?>
	</div>
	<!-- footerLinks ends --> 

	<!-- footerLt starts -->
	<?php echo $footer; ?>
	<!-- footerLt ends -->
</div>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-8623448-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>