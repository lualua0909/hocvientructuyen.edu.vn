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
 * Add ACF option page
 *
 * @since      0.0.1
 */
function _n_acf_options_init(){
	if (function_exists('acf_add_options_page')){
		$parent = acf_add_options_page([
			'page_title' => 'Theme General Settings',
			'menu_title' => 'Theme Settings',
			'menu_slug'  => 'theme-general-settings',
			'capability' => 'manage_options',
			'redirect'   => false
		]);

		acf_add_options_sub_page([
			'page_title'  => 'Header',
			'menu_title'  => 'Header',
			'menu_slug'   => 'theme-header-settings',
			'capability'  => 'manage_options',
			'parent_slug' => $parent['menu_slug'],
		]);

		acf_add_options_sub_page([
			'page_title'  => 'Home',
			'menu_title'  => 'Home',
			'menu_slug'   => 'theme-home-settings',
			'capability'  => 'manage_options',
			'parent_slug' => $parent['menu_slug'],
		]);

		acf_add_options_sub_page([
			'page_title'  => 'Footer',
			'menu_title'  => 'Footer',
			'menu_slug'   => 'theme-footer-settings',
			'capability'  => 'manage_options',
			'parent_slug' => $parent['menu_slug'],
		]);
	}
}

add_action('acf/init', '_n_acf_options_init');
