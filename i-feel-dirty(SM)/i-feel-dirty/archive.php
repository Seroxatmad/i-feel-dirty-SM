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
					<?php printHomeLink('', ' » '); ?>
					<a href="<?php echo html_encode(getGalleryIndexURL(false)); ?>" title="<?php echo gettext('Main Index'); ?>"><?php echo gettext('Home'); ?></a>&nbsp;&raquo;
					<?php echo gettext('Archive View'); ?>
				</h2>
			</div>

			<div class="post">
				<table id="archive">
					<tr>
						<td>
							<h4><?php echo gettext('Gallery Archive'); ?></h4>
							<?php printAllDates('archive', 'year', 'month', 'desc'); ?>
						</td>
						<?php if (function_exists('printNewsArchive')) { ?>
						<td id="newsarchive">
							<h4><?php echo gettext('News archive'); ?></h4>
							<?php printNewsArchive('archive', 'year', 'month', 'archive-active', false, 'desc'); ?>
						</td>
						<?php } ?>
					</tr>
				</table>
			</div>

		</div>	<!-- content -->

			
				<?php include('inc_sidebar.php'); ?> 
				

	</div>	<!-- main -->

<?php include('inc_footer.php'); ?>