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
					<a href="<?php echo html_encode(getGalleryIndexURL(false)); ?>" title="<?php echo gettext('Main Index'); ?>"><?php echo gettext('Home'); ?></a>
					<?php printNewsIndexURL(gettext('News'), ' » '); ?><?php printCurrentNewsCategory(' » ' . gettext('Category') . ' : '); ?><?php printCurrentNewsArchive(' » '); ?>
				</h2>
			</div>

			<?php
			if (is_NewsArticle()) {

				// single news article ?>
				<?php if ((getPrevNewsURL()) || (getNextNewsURL())) { ?>
				<div class="navigation">
					<?php if (getPrevNewsURL()) { ?><div class="singlenews_prev"><?php printPrevNewsLink(); ?></div><?php } ?>
					<?php if (getNextNewsURL()) { ?><div class="singlenews_next"><?php printNextNewsLink(); ?></div><?php } ?>
				</div>
				<?php } ?>

				<div class="post">
					<div class="posttitle">
						<h3><?php printNewsTitle(); ?></h3>
					</div>

					<div class="postmetadata">
						<?php printNewsDate(); ?><?php printNewsCategories(', ', gettext(' | '), 'hor-list'); ?>
					</div>

					<?php if (getNewsExtraContent()) { ?>
					<div class="extra-content">
						<?php printNewsExtraContent(); ?>
					</div>
					<?php } ?>

					<div class="entrytext clearfix">
						<?php
						printNewsContent();
						printCodeblock(1);
						?>
					</div>

					<div class="tags clearfix">
						<?php printTags('links', NULL, 'taglist', ''); ?>
					</div>

					<?php include('inc_print_comment.php'); ?>

				</div>

			<?php
			} else {
				
				// news article loop
				include('inc_print_news_loop.php');
			}
			?>

		</div>	<!-- content -->

	<?php include('inc_sidebar.php'); ?> 

	</div>	<!-- main -->

<?php include('inc_footer.php'); ?>