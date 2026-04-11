<?php
/**
 * Security related hardening.
 *
 * @package ModuLuxe
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function moduluxe_remove_wp_version() {
	return '';
}
add_filter( 'the_generator', 'moduluxe_remove_wp_version' );

function moduluxe_sanitize_search_query( $query ) {
	if ( $query instanceof WP_Query && $query->is_main_query() && $query->is_search() && ! is_admin() ) {
		$query->set( 's', sanitize_text_field( (string) $query->get( 's' ) ) );
	}
}
add_action( 'pre_get_posts', 'moduluxe_sanitize_search_query' );

/**
 * Add rel noopener to external target blank links in content.
 */
function moduluxe_secure_external_links( $content ) {
	if ( ! function_exists( 'wp_targeted_link_rel' ) ) {
		return $content;
	}

	return wp_targeted_link_rel( $content );
}
add_filter( 'the_content', 'moduluxe_secure_external_links', 20 );
