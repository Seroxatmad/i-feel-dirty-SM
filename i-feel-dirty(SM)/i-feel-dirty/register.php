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

<?php include ('inc_header.php'); ?>

	<div class="main">
	
			<?php if (getOption('double_sidebars')) { ?>
			<?php include('inc_sidebar2.php'); } ?> 
	
		<div class="content">
			<div id="breadcrumb">
				<h2>
					<?php printHomeLink('', ' &raquo; '); ?>
					<a href="<?php echo html_encode(getGalleryIndexURL(false)); ?>" title="<?php echo gettext('Main Index'); ?>"><?php echo gettext('Home'); ?></a>&nbsp;&raquo;
					<?php echo gettext('User Registration') ?>
				</h2>
			</div>

			<?php if (function_exists('printRegistrationForm')) { ?>
			<div class="contact">
				<?php  printRegistrationForm(); ?>
			</div>
			<?php } ?>

		</div>	<!-- content -->

	
	<?php <?php include('inc_sidebar.php'); ?> ?>
	
	</div>	<!-- main -->

<?php include('inc_footer.php'); ?>