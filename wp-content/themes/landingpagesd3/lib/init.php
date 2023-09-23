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
 * Tự động tải các file chức năng.
 *
 * @since 0.0.1
 */
foreach (glob(__DIR__ . "/functions/*.php") as $function_file):
	require_once $function_file;
endforeach;

/**
 * Tải template
 *
 * @since 0.0.1
 */
require_once __DIR__ . '/template-functions.php';
require_once __DIR__ . '/template-hooks.php';
