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
		
		<!-- code for double sidebar is below -->
		
		<?php if (getOption('double_sidebars')) { ?>
		
		<div class="sidebar">
		
		<?php $x = 0; ?>

			<?php if (getOption('allow_search')) { ?>
			<div class="bloque<?php echo ($x % 2) + 1 ; $x = $x + 1; ?>">
				<h3><?php echo gettext('Search'); ?></h3>
				<?php printSearchForm('', 'search', '', gettext('Search'), "$_zp_themeroot/images/search-drop.png", NULL, NULL,"$_zp_themeroot/images/reset.gif" ); ?>
			</div>
			<?php } ?>

			<?php if (function_exists('printAlbumMenu')) { ?>
			<div class="bloque<?php echo ($x % 2) + 1; $x = $x + 1; ?>">
				<h3><?php if (getGalleryTitle() <> NULL) {echo html_encode(getGalleryTitle()); } else {echo gettext('Gallery'); }; ?></h3>
				<?php
				$indexname = '';
				if (getOption('zp_plugin_zenpage')) {
					$indexname = gettext('Album index');
				}
				printAlbumMenu('list', false, '', 'menu-active', 'submenu', 'menu-active', $indexname, false, false);
				?>
			</div>
			<?php } ?>

			<?php if ((function_exists('printAllNewsCategories')) && (getNumNews() > 0)) { ?>
			<div class="bloque<?php echo ($x % 2) + 1; $x = $x + 1; ?>">
				<h3><?php echo gettext('News articles'); ?></h3>
				<?php printAllNewsCategories(gettext('All news'), true, 'news-cat-list', 'menu-active'); ?>
			</div>
			<?php } ?>

			<?php if ((function_exists('printPageMenu')) && (getNumPages(true) > 0)) { ?>
			<div class="bloque<?php echo ($x % 2) + 1; $x = $x + 1; ?>">
				<h3><?php echo gettext('Pages'); ?></h3>
				<?php printPageMenu('list', '', 'menu-active', 'submenu', 'menu-active'); ?>
			</div>
			<?php } ?>
			
			<?php if (getOption('show_random_pict')) { ?>
			<div class="bloque<?php echo ($x % 2) + 1; $x = $x + 1; ?>">
				<h3><?php echo gettext('Random picture...'); ?></h3>
				<div class="random-pict">
					<?php printRandomImages(1, NULL, 'all', '', 200, 200, false); ?>
				</div>
			
			</div>
			<?php } ?>
			
		</div>

		<div class="clearfix"></div>
		
		<?php } else { ?>
		
		<!-- code for double sidebar is above -->
		
		
		<!-- code for single sidebar is below -->
		
		<div class="sidebar">
		
		<?php $x = 0; ?>

			<?php if (getOption('allow_search')) { ?>
			<div class="bloque<?php echo ($x % 2) + 1 ; $x = $x + 1; ?>">
				<h3><?php echo gettext('Search'); ?></h3>
				<?php printSearchForm('', 'search', '', gettext('Search'), "$_zp_themeroot/images/search-drop.png", NULL, NULL,"$_zp_themeroot/images/reset.gif" ); ?>
			</div>
			<?php } ?>

			<?php if (function_exists('printAlbumMenu')) { ?>
			<div class="bloque<?php echo ($x % 2) + 1; $x = $x + 1; ?>">
				<h3><?php if (getGalleryTitle() <> NULL) {echo html_encode(getGalleryTitle()); } else {echo gettext('Gallery'); }; ?></h3>
				<?php
				$indexname = '';
				if (getOption('zp_plugin_zenpage')) {
					$indexname = gettext('Album index');
				}
				printAlbumMenu('list', false, '', 'menu-active', 'submenu', 'menu-active', $indexname, false, false);
				?>
			</div>
			<?php } ?>

			<?php if ((function_exists('printAllNewsCategories')) && (getNumNews() > 0)) { ?>
			<div class="bloque<?php echo ($x % 2) + 1; $x = $x + 1; ?>">
				<h3><?php echo gettext('News articles'); ?></h3>
				<?php printAllNewsCategories(gettext('All news'), true, 'news-cat-list', 'menu-active'); ?>
			</div>
			<?php } ?>

			<?php if ((function_exists('printPageMenu')) && (getNumPages(true) > 0)) { ?>
			<div class="bloque<?php echo ($x % 2) + 1; $x = $x + 1; ?>">
				<h3><?php echo gettext('Pages'); ?></h3>
				<?php printPageMenu('list', '', 'menu-active', 'submenu', 'menu-active'); ?>
			</div>
			<?php } ?>

			<?php if (getOption('show_random_pict')) { ?>
			<div class="bloque<?php echo ($x % 2) + 1; $x = $x + 1; ?>">
				<h3><?php echo gettext('Random picture...'); ?></h3>
				<div class="random-pict">
					<?php printRandomImages(1, NULL, 'all', '', 200, 200, false); ?>
				</div>
			</div>
			<?php } ?>

			<?php if (getOption('show_tag_cloud')) {
				$tags = getAllTagsCount();
				if (is_array($tags) && (array_sum($tags) != 0)) { ?>
				<div class="bloque<?php echo ($x % 2) + 1; $x = $x + 1; ?>">
					<h3><?php echo gettext('Tags'); ?></h3>
					<div class="tags-cloud">
						<?php printAllTagsAs('cloud', 'hor-list', 'abc', false, true, 2.5, 30, 2, NULL, 0.8); ?>
					</div>
				</div>
				<?php } ?>
			<?php } ?>

			<?php if (getOption('show_archive')) { ?>
			<div class="bloque<?php echo ($x % 2) + 1; $x = $x + 1; ?>">
				<h3><?php echo gettext('Archive View'); ?></h3>
				<ul>
					<?php
					if ($_zp_gallery_page == 'archive.php') {
						if (function_exists('printNewsArchive')) {
							echo '<li class="menu-active">'.gettext('Gallery And News').'</li>';
						} else {
							echo '<li class="menu-active">'.gettext('Gallery').'</li>';
						}
					} else {
						if (function_exists('printNewsArchive')) {
							echo "<li>"; printCustomPageURL(gettext('Gallery and News'), 'archive'); echo "</li>";
						} else {
							echo "<li>"; printCustomPageURL(gettext('Gallery'), 'archive'); echo "</li>";
						}
					}
					?>
				</ul>
			</div>
			<?php } ?>
			
			<?php if ((getOption('show_contact')) && (function_exists('printContactForm'))) { ?>
			<div class="bloque<?php echo ($x % 2) + 1; $x = $x + 1; ?>">
				<h3><?php echo gettext('Contact'); ?></h3>
				<ul>
				<?php
				if ($_zp_gallery_page == 'contact.php') {
					echo '<li class="menu-active">'.gettext('Contact us').'</li>';
				} else {
					echo '<li>'; printCustomPageURL(gettext('Contact'), 'contact'); echo '</li>';
				}
				?>
				</ul>
			</div>
			<?php } ?>

			<?php if (function_exists('printUserLogin_out')) { ?>
			<div class="bloque<?php echo ($x % 2) + 1; $x = $x + 1; ?>">
				<h3><?php echo gettext('Log in'); ?></h3>
				<ul>
					<li>
						<?php printUserLogin_out('', '', 2); ?>
					</li>
				</ul>

				<?php if ((!zp_loggedin()) && (function_exists('printRegistrationForm'))) { ?>
				<ul>
					<li>
						<?php
						if ($_zp_gallery_page != 'register.php') {
							printCustomPageURL(gettext('Register for this site'), 'register', '', '');
						} else {
							echo gettext('Register for this site');
						}
						?>
					</li>
				</ul>
				<?php }	?>

			</div>
			<?php } ?>

		</div>	

		<div class="clearfix"></div>
		
		<?php } ?>
		
		<!-- code for single sidebar is above -->