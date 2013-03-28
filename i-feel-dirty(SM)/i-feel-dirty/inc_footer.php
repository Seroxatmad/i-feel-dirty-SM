<!--
Theme Name: I feel dirty
Theme URI: http://studio.st/i-feel-dirty/
Description: A clean but dirty template
Author: Studio ST
Author URI: http://studio.st/
Adapted on ZenPhoto by: Vincent3569
URI: http://www.vincentbourganel.fr
Modified on Zenphoto by Seroxatmad
URI: www.thestottfamily.co.uk/pages/zenphoto
Version 1.4.3 -->	
	
	<div class="footer">

		<div class="footer3">
		<?php if (getOption('double_sidebars')) { ?>
		<p><?php echo("(c) <a href=\"http://www.thestottfamily.co.uk\" 	title=\"Welcome to The Stott Family Website\">www.thestottfamily.co.uk</a>");}?></p>
		</div>
	
				<div class="footer1">
				<?php if (!getOption('double_sidebars')) { ?>
				<p><?php echo("(c) <a href=\"http://www.thestottfamily.co.uk\" 	title=\"Welcome to The Stott Family Website\">www.thestottfamily.co.uk</a>");?></p>
				<?php if (($_zp_gallery_page == 'image.php') ||
					((function_exists('is_NewsArticle')) && (is_NewsArticle()))) { ?>
				<div class="nav-info">
					<img src="<?php echo $_zp_themeroot; ?>/images/help.png" title="<?php echo gettext_th('You can browse with the arrows keys of your keyboard'); ?>" alt="info_icon" />
			</div>
			<?php }} ?>

		</div>

		<div class="footer2">	
		
				<!--archive view and contact removed by seroxatmad
				<?php
				printCustomPageURL(gettext('Archive View'), 'archive', '', '');
				if (function_exists('printContactForm')) {
				printCustomPageURL(gettext('Contact'), 'contact', '', ' | ');
				}
				?>
				-->
				
		</div>
	</div>	<!-- footer -->
</div>		<!-- container -->

	<?php
	printAdminToolbox();
	zp_apply_filter('theme_body_close');
	?>
			<!-- Piwik -->
					<script type="text/javascript">
					var pkBaseURL = (("https:" == document.location.protocol) ? "https://analytics.thestottfamily.co.uk/" : "http://analytics.thestottfamily.co.uk/");
					document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
					</script><script type="text/javascript">
					try {
					var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 1);
					piwikTracker.trackPageView();
					piwikTracker.enableLinkTracking();
					} catch( err ) {}
					</script><noscript><p><img src="http://analytics.thestottfamily.co.uk/piwik.php?idsite=1" style="border:0" alt="" /></p></noscript>
			<!-- End Piwik Tracking Code -->

</body>
</html>
