<?php
/**
 * Template tags.
 *
 * @package ModuLuxe
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Output post publish date.
 */
function moduluxe_posted_on() {
	$time_string = sprintf(
		'<time class="entry-date published updated" datetime="%1$s">%2$s</time>',
		esc_attr( get_the_date( DATE_W3C ) ),
		esc_html( get_the_date() )
	);
	echo '<span class="entry-meta__date">' . wp_kses_post( $time_string ) . '</span>';
}

/**
 * Get WooCommerce page url with fallback.
 */
function moduluxe_get_wc_page_url( $page ) {
	if ( function_exists( 'wc_get_page_permalink' ) ) {
		return wc_get_page_permalink( $page );
	}

	return home_url( '/' );
}

/**
 * Get cart url with fallback.
 */
function moduluxe_get_cart_url() {
	if ( function_exists( 'wc_get_cart_url' ) ) {
		return wc_get_cart_url();
	}

	return home_url( '/' );
}

/**
 * Return sanitized product attribute label and value.
 */
function moduluxe_get_product_specs( $product ) {
	if ( ! $product || ! is_a( $product, 'WC_Product' ) ) {
		return array();
	}

	$map = array(
		'pa_breedte'   => __( 'Breedte', 'moduluxe' ),
		'pa_kleur'     => __( 'Kleur', 'moduluxe' ),
		'pa_opstelling'=> __( 'Opstelling', 'moduluxe' ),
		'pa_materiaal' => __( 'Materiaal', 'moduluxe' ),
	);

	$specs = array();
	foreach ( $map as $taxonomy => $label ) {
		$value = $product->get_attribute( $taxonomy );
		if ( $value ) {
			$specs[] = array(
				'label' => $label,
				'value' => sanitize_text_field( $value ),
			);
		}
	}

	return $specs;
}
