<?php
error_reporting( - 1 );
//define('LP_WP_CONTENT', 'content');
function get_root_path() {
	$segs = explode( 'content', $_SERVER['SCRIPT_FILENAME'] );
	return $segs ? $segs[0] : '';
}

/** Set ABSPATH for execution */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', get_root_path() );
}
define( 'WPINC', 'includes' );
//define( 'LP_CONTENT_PATH', '/content/plugins/learnpress/' );
require( ABSPATH . 'admin/includes/noop.php' );
require( ABSPATH . WPINC . '/script-loader.php' );
require( ABSPATH . WPINC . '/version.php' );
require( LP_PLUGIN_PATH . 'inc/class-lp-assets.php' );

$load = $_GET['load'];
if ( is_array( $load ) ) {
	$load = implode( '', $load );
}
$load = preg_replace( '/[^a-z0-9,_-]+/i', '', $load );
$load = array_unique( explode( ',', $load ) );
if ( empty( $load ) ) {
	exit;
}

$compress       = ( isset( $_GET['c'] ) && $_GET['c'] );
$force_gzip     = ( $compress && 'gzip' == $_GET['c'] );
$rtl            = ( isset( $_GET['dir'] ) && 'rtl' == $_GET['dir'] );
$expires_offset = 31536000; // 1 year
$out            = '';