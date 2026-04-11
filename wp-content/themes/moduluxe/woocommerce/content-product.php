<?php
/**
 * Product card for loops.
 *
 * @package ModuLuxe
 */

defined( 'ABSPATH' ) || exit;

global $product;

if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

$specs = moduluxe_get_product_specs( $product );
?>
<li <?php wc_product_class( 'product-card', $product ); ?>>
	<a href="<?php the_permalink(); ?>" class="product-card__link" aria-label="<?php echo esc_attr( get_the_title() ); ?>">
		<?php woocommerce_show_product_loop_sale_flash(); ?>
		<?php woocommerce_template_loop_product_thumbnail(); ?>
		<h2 class="woocommerce-loop-product__title"><?php the_title(); ?></h2>
		<?php woocommerce_template_loop_price(); ?>
		<?php if ( ! empty( $specs ) ) : ?>
			<p class="product-card__spec"><?php echo esc_html( $specs[0]['label'] . ': ' . $specs[0]['value'] ); ?></p>
		<?php endif; ?>
	</a>
	<?php woocommerce_template_loop_add_to_cart(); ?>
</li>
