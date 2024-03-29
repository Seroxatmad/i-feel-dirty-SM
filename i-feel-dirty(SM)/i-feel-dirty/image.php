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
		<div class="content-image">
			<div id="breadcrumb">
				<div class="img-nav">
				<?php if (hasPrevImage()) { ?>
					<div class="img-previous"><a href="<?php echo html_encode(getPrevImageURL()); ?>" title="<?php echo gettext('Previous Image'); ?>">&lt;</a></div>
				<?php } else { ?>
					<div class="img-previous disabledlink">&lt;</div>
				<?php } ?>
				<?php if (hasNextImage()) { ?>
					<div class="img-next"><a href="<?php echo html_encode(getNextImageURL()); ?>" title="<?php echo gettext('Next Image'); ?>">&gt;</a></div>
				<?php } else { ?>
					<div class="img-next disabledlink">&gt;</div>
				<?php } ?>
				</div>

				<h2>
					<?php printHomeLink('', ' » '); ?>
					<a href="<?php echo html_encode(getGalleryIndexURL(false)); ?>" title="<?php echo gettext('Main Index'); ?>"><?php echo gettext('Home'); ?></a>&nbsp;&raquo;
					<?php if ((gettext(getOption('ifeeldirty_homepage')) == gettext('none')) && (!getOption('ifeeldirty_news_on_homepage'))) { ?>
						<a href="<?php echo html_encode(getGalleryIndexURL(false)); ?>" title="<?php echo gettext('Albums Index'); ?>"><?php echo html_encode(getGalleryTitle()); ?></a>
					<?php } else { ?>
						<?php printCustomPageURL(getGalleryTitle(), 'gallery'); ?>
					<?php } ?>
					&raquo;&nbsp;<?php printParentBreadcrumb('', ' » ', ' » '); ?><?php printAlbumBreadcrumb('', ' » '); ?><?php printImageTitle(true); ?>
				</h2>
			</div>

			<?php if (function_exists('printSlideShowLink')) { ?>
			<div class="img-slide clearfix">
				<?php printSlideShowLink(gettext('Slideshow')); ?>
			</div>
			<?php } ?>

			<div id="image">
				<?php if (getOption('use_colorbox_image')) { ?>
					<?php /* to do : display full image or sized image */ ?>
					<a rel="zoom" href="<?php echo html_encode(getUnprotectedImageURL()); ?>" title="<?php echo getBareImageTitle(); ?>"><?php printDefaultSizedImage(getImageTitle()); ?></a>
				<?php } else { ?>
					<?php printDefaultSizedImage(getImageTitle()); ?>
				<?php } ?>
			</div>

			<div id="image-title"><?php printImageTitle(true); ?></div>
			
			<div id="image-infos"><?php printImageDesc(true); ?></div>
			
			<?php if ((getOption('show_exif')) && (getImageMetaData())) { ?>
			<div id="exif_link"><a href="#" title="<?php echo gettext('Image Info'); ?>" class="colorbox"><?php echo gettext('Image Info'); ?></a></div>
			<div style='display:none'><?php printImageMetadata('', false); ?></div>
			<?php } ?>

			<div class="tags">
				<?php printTags('links', NULL, 'taglist', ''); ?>
				<div class="clearfix"></div>
			</div>

			<?php if (function_exists('printRating')) { ?>
			<div class="rating"><?php printRating(); ?></div>
			<?php  } ?>

			<?php if (function_exists('printGoogleMap')) { ?>
			<div class="googlemap"><?php printGoogleMap(NULL, 'googlemap'); ?></div>
			<?php } ?>

			<?php if (function_exists('printFBLike')) { ?>
			<div class="fb-like"><?php printFBLike(); ?></div>
			<?php  } ?>
			
			<?php include('inc_print_comment.php'); ?>

		</div>	<!-- content -->

		<div class="clearfix"></div>

	</div>	<!-- main -->

<?php include('inc_footer.php'); ?>