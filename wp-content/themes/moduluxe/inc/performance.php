<?php
/**
 * Performance improvements.
 *
 * @package ModuLuxe
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function moduluxe_resource_hints( $urls, $relation_type ) {
	if ( 'preconnect' === $relation_type ) {
		$urls[] = 'https://fonts.gstatic.com';
	}
	return $urls;
}
add_filter( 'wp_resource_hints', 'moduluxe_resource_hints', 10, 2 );

function moduluxe_custom_image_sizes() {
	add_image_size( 'moduluxe-card', 640, 480, true );
	add_image_size( 'moduluxe-hero', 1800, 900, true );
}
add_action( 'after_setup_theme', 'moduluxe_custom_image_sizes' );
