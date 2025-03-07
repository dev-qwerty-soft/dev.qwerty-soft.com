<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

add_action('wp_enqueue_scripts', 'qs_enqueue_scripts');
function qs_enqueue_scripts() {
	wp_enqueue_style( 'main-style', QS_THEME_URI . 'assets/dist/css/main-style.min.css' );
	wp_enqueue_style( 'contact-form-style', QS_THEME_URI . 'assets/dist/css/contact-form.css' );
	wp_enqueue_script( 'contact-form-script', QS_THEME_URI . 'assets/dist/js/contact-form.js', [], null, true );
	// wp_enqueue_script( 'general', QS_THEME_URI . 'assets/dist/js/general.min.js', ['jquery', 'slick', 'tippy'], null, true );
	wp_enqueue_script( 'general', QS_THEME_URI . 'assets/src/js/general.js', ['jquery', 'slick', 'tippy'], null, true );


	wp_enqueue_style( 'slick', QS_THEME_URI . 'assets/slick/slick.css' );
	wp_enqueue_script( 'slick', QS_THEME_URI . 'assets/slick/slick.min.js', [], null, true );

	wp_enqueue_script( 'popper', 'https://unpkg.com/popper.js@1', [], null, true );
	wp_enqueue_script( 'tippy', 'https://unpkg.com/tippy.js@5', ['popper'], null, true );
}