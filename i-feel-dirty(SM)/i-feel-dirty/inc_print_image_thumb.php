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

				<?php // images thumbnails loop ?>

				<div id="images" class="clearfix">
					<?php $col = 1; while (next_image()): ; ?>
						<div class="image">
							<div class="imagethumb<?php if ($col == getOption('personnal_thumb_image_number_col')) { echo '-lastcol'; $col = 0; } ?>">
								<a class="thumb" href="<?php echo html_encode(getImageLinkURL()); ?>" title="<?php echo getAnnotatedImageTitle(); ?>"><?php printImageThumb(getAnnotatedImageTitle()); ?></a>
							</div>
						</div>
					<?php $col++; endwhile; ?>
				</div>
				<br style="clear: both" />
