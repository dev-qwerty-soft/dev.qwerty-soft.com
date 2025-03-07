<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Theme Options page
 */
if ( function_exists( 'acf_add_options_page' ) ) {
	$parent = acf_add_options_page( [
		'page_title' => 'Theme General Settings',
		'menu_title' => 'Theme Settings',
		'menu_slug' => 'theme-general-settings',
		'capability' => 'manage_options',
		'redirect' => false,
		'icon_url' => 'dashicons-schedule',
		'position' => '15.54'
	] );
}
