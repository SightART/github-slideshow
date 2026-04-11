<?php
/**
 * Theme bootstrap.
 *
 * @package ModuLuxe
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'MODULUXE_VERSION', '1.0.0' );
define( 'MODULUXE_DIR', get_template_directory() );
define( 'MODULUXE_URI', get_template_directory_uri() );

require_once MODULUXE_DIR . '/inc/setup.php';
require_once MODULUXE_DIR . '/inc/enqueue.php';
require_once MODULUXE_DIR . '/inc/template-tags.php';
require_once MODULUXE_DIR . '/inc/security.php';
require_once MODULUXE_DIR . '/inc/performance.php';
require_once MODULUXE_DIR . '/inc/woocommerce.php';
require_once MODULUXE_DIR . '/inc/patterns.php';
