<?php
/**
 * Single product template.
 *
 * @package ModuLuxe
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
?>
<?php while ( have_posts() ) : the_post(); ?>
	<?php global $product; ?>
	<main id="primary" class="site-main single-product-page">
		<div class="container">
			<?php woocommerce_breadcrumb(); ?>
			<?php wc_get_template_part( 'content', 'single-product' ); ?>

			<section class="why-product" aria-labelledby="why-product-title">
				<h2 id="why-product-title"><?php esc_html_e( 'Waarom dit product', 'moduluxe' ); ?></h2>
				<p><?php esc_html_e( 'Duurzame materialen, betrouwbare levering en duidelijke maatspecificaties.', 'moduluxe' ); ?></p>
			</section>

			<?php $specs = moduluxe_get_product_specs( $product ); ?>
			<?php if ( ! empty( $specs ) ) : ?>
				<section class="spec-list" aria-labelledby="spec-list-title">
					<h2 id="spec-list-title"><?php esc_html_e( 'Specificaties', 'moduluxe' ); ?></h2>
					<dl>
						<?php foreach ( $specs as $spec ) : ?>
							<dt><?php echo esc_html( $spec['label'] ); ?></dt>
							<dd><?php echo esc_html( $spec['value'] ); ?></dd>
						<?php endforeach; ?>
					</dl>
				</section>
			<?php endif; ?>

			<?php do_action( 'woocommerce_after_single_product_summary' ); ?>
		</div>
	</main>
<?php endwhile; ?>
<?php get_footer( 'shop' ); ?>
