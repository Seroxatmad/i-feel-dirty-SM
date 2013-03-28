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

				<?php // news article loop ?>

				<?php printNewsPageListWithNav(gettext('next »'), gettext('« prev')); ?>

				<?php while (next_news()): ; ?>
				<div class="post clearfix">
					<div class="posttitle">
						<h3><?php printNewsTitleLink(); ?></h3>
					</div>

					<div class="postmetadata">
						<?php printNewsDate(); ?><?php printNewsCategories(', ', gettext(' | '), 'hor-list'); ?>
					</div>

					<div class="entrytext clearfix" >
						<?php printNewsContent(); ?>
					</div>
				</div>
				<?php endwhile; ?>

				<?php printNewsPageListWithNav(gettext('next »'), gettext('« prev')); ?>