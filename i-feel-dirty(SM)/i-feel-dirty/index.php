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
Version 1.4.3 --><!--
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

<?php
if (function_exists('checkForPage')) { // check if Zenpage is enabled or not
	if (checkForPage(getOption('ifeeldirty_homepage'))) { // switch to home page
		$isHomePage = true;
		include ('pages.php');
	} else {
		if (getOption('ifeeldirty_news_on_homepage')) { // switch to news page
			$isHomePage = true;
			include ('news.php');
		} else {
			$isHomePage = false;
			include ('gallery.php');
		}
	}
} else {
	$isHomePage = false;
	include ('gallery.php');
}
?>