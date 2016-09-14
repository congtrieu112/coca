<?php
/**
 * Plugin Name: SMTP WP
 * Version: 1.0
 * Plugin URI: https://sanphamweb.com
 * Description: Config smtp wp
 * Author: Cong Trieu
 * Author URI: https://sanphamweb.com/
 * Text Domain: sanphamweb
 * Domain Path: /languages/
 * License: GPL v3
 */
if ( ! function_exists( 'add_filter' ) ) {
    header( 'Status: 403 Forbidden' );
    header( 'HTTP/1.1 403 Forbidden' );
    exit();
}
// Load the smtp plugin.
require_once( dirname( __FILE__ ) . '/taomenu.php' );