<?php

/*
Plugin Name: justpujasamagri
Plugin URI: http://puja.scaledesk.com
Description: A site-specific functionality plugin for justpujasamagri where you can paste your code snippets instead of using the theme's functions.php file
Author: puja
Author URI: 
Version: 2016.08.04
License: GPL
*/

add_filter( 'woocommerce_ship_to_different_address_checked', '__return_true' );
add_filter( 'woocommerce_ship_to_different_address_checked', '__return_false' );