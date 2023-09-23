<?php
/**
 * N Framework
 *
 * @link       https://nhut.me/n-framework/
 * @since      0.0.1
 *
 * @package    N
 * @subpackage N/lib
 */

if (!defined('ABSPATH')):
	exit; // Exit if accessed directly.
endif;

/**
 * Nhúng css và js.
 *
 * @since    0.0.1
 */
function _n_load_scripts(){
	$theme_version = wp_get_theme()->get('Version');

	wp_enqueue_script('jquery');

	if ((!is_admin()) && is_singular() && comments_open() && get_option('thread_comments')):
		wp_enqueue_script('comment-reply');
	endif;

	wp_enqueue_style('font-awesome', get_theme_file_uri('assets/lib/font-awesome/css/all.min.css'), [], '6.3.0', 'all');
	wp_enqueue_style('bootstrap', get_theme_file_uri('assets/lib/bootstrap/css/bootstrap.min.css'), [], '5.2.3', 'all');
	wp_enqueue_style('slick', get_theme_file_uri('assets/lib/slick/slick.css'), [], $theme_version, 'all');
	wp_enqueue_style('landingpagesd3', get_theme_file_uri('assets/css/main.css'), [], $theme_version, 'all');

	wp_enqueue_script('bootstrap', get_theme_file_uri('assets/lib/bootstrap/js/bootstrap.bundle.min.js'), [], '5.2.3', []);
	wp_enqueue_script('slick', get_theme_file_uri('assets/lib/slick/slick.js'), [], $theme_version, ['in_footer' => true]);
	wp_enqueue_script('landingpagesd3', get_theme_file_uri('assets/js/main.js'), ['jquery'], $theme_version, ['in_footer' => true]);
}

add_action('wp_enqueue_scripts', '_n_load_scripts');
