<?php
/**
 * Enqueue scripts and styles.
 *
 * @package ModuLuxe
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Build file version from filemtime for better cache busting.
 */
function moduluxe_asset_version( $relative_path ) {
	$file_path = MODULUXE_DIR . $relative_path;
	if ( file_exists( $file_path ) ) {
		return (string) filemtime( $file_path );
	}

	return MODULUXE_VERSION;
}

function moduluxe_enqueue_assets() {
	wp_enqueue_style( 'moduluxe-main', MODULUXE_URI . '/assets/css/main.css', array(), moduluxe_asset_version( '/assets/css/main.css' ) );

	wp_enqueue_script( 'moduluxe-main', MODULUXE_URI . '/assets/js/theme.js', array(), moduluxe_asset_version( '/assets/js/theme.js' ), true );
	wp_script_add_data( 'moduluxe-main', 'defer', true );

	wp_localize_script(
		'moduluxe-main',
		'moduluxeData',
		array(
			'menuLabelOpen'  => __( 'Open menu', 'moduluxe' ),
			'menuLabelClose' => __( 'Sluit menu', 'moduluxe' ),
		)
	);
}
add_action( 'wp_enqueue_scripts', 'moduluxe_enqueue_assets' );
