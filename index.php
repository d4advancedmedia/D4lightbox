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


$version = '3.1.6';

//	REGISTER - Javascripts & Styles
	add_action('wp_enqueue_scripts', 'd4lightbox_scriptnstyle_enqueuer');
	function d4lightbox_scriptnstyle_enqueuer() {
			wp_register_script(
				'd4lightbox_script', // slug
				plugins_url( '/js/jquery.prettyPhoto.js' , __FILE__ ), // source file
				array('jquery'), // dependencies
				$version, // version
				true // in footer?
			);
			wp_enqueue_script('d4lightbox_script');

			wp_register_style(
				'd4lightbox_style', // slug
				plugins_url( '/css/prettyPhoto.css' , __FILE__ ), // source file
				false, // dependencies
				$version, // version
				'screen' // media
			);
			wp_enqueue_style ('d4lightbox_style');
			
	}

?>