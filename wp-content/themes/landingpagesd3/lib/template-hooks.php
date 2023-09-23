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
 * Header templates.
 */
add_action('_n_header', '_n_get_template_header', 10);

/**
 * Home templates.
 */
add_action('_n_front', '_n_get_template_hero', 10);
add_action('_n_front', '_n_get_template_capacity', 20);
add_action('_n_front', '_n_get_template_learning_form', 30);
add_action('_n_front', '_n_get_template_suitable_object', 40);
add_action('_n_front', '_n_get_template_why_choose', 50);
add_action('_n_front', '_n_get_template_fee', 60);
add_action('_n_front', '_n_get_template_certificate', 70);
add_action('_n_front', '_n_get_template_training_route', 80);
add_action('_n_front', '_n_get_template_management', 90);
add_action('_n_front', '_n_get_template_lecturers', 100);
add_action('_n_front', '_n_get_template_partner', 110);
add_action('_n_front', '_n_get_template_subscribe_form', 120);

/**
 * Footer templates.
 */
add_action('_n_footer', '_n_get_template_footer', 10);
