<?php
/*
	Plugin Name: D4 Lightbox
	Plugin URI: https://github.com/d4advancedmedia/D4lightbox
	GitHub Theme URI: https://github.com/d4advancedmedia/D4lightbox
	GitHub Branch: master
	Description: Responsive Image/Video Lightbox 
	Version: 19Aug15
	Author: D4 Adv. Media
	License: GPL2
*/


//	REGISTER - Javascripts & Styles
	add_action('wp_enqueue_scripts', 'd4lightbox_scriptnstyle_enqueuer');
	function d4lightbox_scriptnstyle_enqueuer() {
			wp_register_script(
				'd4lightbox-script', // slug
				plugins_url( '/js/jquery.prettyPhoto.js' , __FILE__ ), // source file
				array('jquery'), // dependencies
				'3.1.6', // version
				true // in footer?
			);
			wp_enqueue_script('d4lightbox-script');

			wp_register_style(
				'd4lightbox-style', // slug
				plugins_url( '/css/style.css' , __FILE__ ), // source file
				false, // dependencies
				'3.1.6', // version
				'screen' // media
			);
			wp_enqueue_style ('d4lightbox-style');
			
	}

?>