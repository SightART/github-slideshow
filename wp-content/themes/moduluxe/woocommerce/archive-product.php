<?php
/**
 * Product archive template.
 *
 * @package ModuLuxe
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );
?>
<main id="primary" class="site-main site-main--shop">
	<div class="container">
		<header class="shop-header">
			<?php woocommerce_breadcrumb(); ?>
			<h1 class="shop-header__title"><?php woocommerce_page_title(); ?></h1>
			<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
				<div class="shop-intro"><?php do_action( 'woocommerce_archive_description' ); ?></div>
			<?php endif; ?>
		</header>

		<?php do_action( 'woocommerce_before_shop_loop' ); ?>

		<?php if ( woocommerce_product_loop() ) : ?>
			<?php woocommerce_product_loop_start(); ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php wc_get_template_part( 'content', 'product' ); ?>
			<?php endwhile; ?>
			<?php woocommerce_product_loop_end(); ?>
			<?php do_action( 'woocommerce_after_shop_loop' ); ?>
		<?php else : ?>
			<?php do_action( 'woocommerce_no_products_found' ); ?>
		<?php endif; ?>

		<section class="seo-content" aria-labelledby="shop-seo-title">
			<h2 id="shop-seo-title"><?php esc_html_e( 'Categorie informatie', 'moduluxe' ); ?></h2>
			<p><?php esc_html_e( 'Ruimte voor extra SEO-content onder productgrid.', 'moduluxe' ); ?></p>
		</section>
	</div>
</main>
<?php get_footer( 'shop' ); ?>
