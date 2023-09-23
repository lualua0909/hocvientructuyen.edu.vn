<?php
/**
 * N Framework
 *
 * WARNING: This file is part of the core N Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @since      0.0.1
 * @package    N
 * @subpackage N/includes/structure
 */

if (!defined('ABSPATH')):
	exit; // Exit if accessed directly.
endif;

/**
 * HTML doctype markup.
 *
 * @since 0.0.1
 */
function _n_do_doctype(){
	?>

	<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php
}

add_action('_n_doctype', '_n_do_doctype');
