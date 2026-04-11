<?php
/**
 * WooCommerce integration.
 *
 * @package ModuLuxe
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function moduluxe_woocommerce_setup() {
	add_theme_support(
		'woocommerce',
		array(
			'thumbnail_image_width' => 420,
			'single_image_width'    => 900,
		)
	);
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'moduluxe_woocommerce_setup' );

function moduluxe_wc_content_wrapper_start() {
	echo '<main id="primary" class="site-main site-main--shop"><div class="container">';
}

function moduluxe_wc_content_wrapper_end() {
	echo '</div></main>';
}
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
add_action( 'woocommerce_before_main_content', 'moduluxe_wc_content_wrapper_start', 10 );
add_action( 'woocommerce_after_main_content', 'moduluxe_wc_content_wrapper_end', 10 );

function moduluxe_wc_products_per_page() {
	return 12;
}
add_filter( 'loop_shop_per_page', 'moduluxe_wc_products_per_page' );

function moduluxe_wc_breadcrumb_defaults( $defaults ) {
	$defaults['wrap_before'] = '<nav class="moduluxe-breadcrumb" aria-label="Breadcrumb"><ol>';
	$defaults['wrap_after']  = '</ol></nav>';
	$defaults['before']      = '<li>';
	$defaults['after']       = '</li>';
	return $defaults;
}
add_filter( 'woocommerce_breadcrumb_defaults', 'moduluxe_wc_breadcrumb_defaults' );

/**
 * Better quantity + notice UX.
 */
function moduluxe_wc_update_fragments( $fragments ) {
	ob_start();
	?>
	<span class="cart-count"><?php echo esc_html( WC()->cart ? WC()->cart->get_cart_contents_count() : 0 ); ?></span>
	<?php
	$fragments['span.cart-count'] = ob_get_clean();
	return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'moduluxe_wc_update_fragments' );

function moduluxe_wc_sale_badge( $html ) { // phpcs:ignore Generic.CodeAnalysis.UnusedFunctionParameter.Found
	return '<span class="onsale">' . esc_html__( 'Aanbieding', 'moduluxe' ) . '</span>';
}
add_filter( 'woocommerce_sale_flash', 'moduluxe_wc_sale_badge' );
