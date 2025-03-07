<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Defines
 */
define('QS_THEME_URI', get_stylesheet_directory_uri() . '/');
define('QS_THEME_PATH', get_stylesheet_directory() . '/');

/**
 * require theme functions
 */
require_once QS_THEME_PATH . 'inc/functions.inc.php';

function enqueue_custom_styles()
{

    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/src/custom.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');


// The proper way to enqueue GSAP script in WordPress

// wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
function theme_gsap_script(){
    // The core GSAP library
    wp_enqueue_script( 'gsap-js', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js', array(), false, true );
    // ScrollTrigger - with gsap.js passed as a dependency
    wp_enqueue_script( 'gsap-st', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js', array('gsap-js'), false, true );
    // Your animation code file - with gsap.js passed as a dependency
    wp_enqueue_script( 'gsap-js2', get_template_directory_uri() . '/assets/src/js/app.js', array('gsap-js'), false, true );
}

add_action( 'wp_enqueue_scripts', 'theme_gsap_script' );