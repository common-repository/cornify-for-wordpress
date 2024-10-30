<?php
/*
Plugin Name: Cornify for WordPress
Plugin URI: http://brooke.codes/projects/cornify
Description: This plugin will cornify your site if the user dosen't move their mouse for 5 seconds.
Version: 1.3
Author: Brooke.
Author URI: https://broo.ke
Date: 2019, December 12th

This plugin was inspired by Mihai Nica's (http://redecs.net/)
Upside Down WordPress (http://wordpress.org/extend/plugins/upside-down-wordpress/)
and cornify.com

The JavaScript used is a modified version of conify.js from http://www.cornify.com/
also uses jquery.idle  (https://github.com/jasonmcleod/jquery.idle) and
replacejscssfile from javascript kit (http://www.javascriptkit.com/javatutors/loadjavascriptcss2.shtml)


*/

add_action( 'wp_enqueue_scripts', 'BRD_cornify' );

function BRD_cornify() {
		if(!is_admin()){
			wp_enqueue_script('cornify', plugins_url('js/cornify.js', __FILE__), array('jquery'),null,true );
		}
	}

?>
