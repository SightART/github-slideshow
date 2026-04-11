<?php
/**
 * Front page template.
 *
 * @package ModuLuxe
 */

get_header();

$shop_url = moduluxe_get_wc_page_url( 'shop' );
$terms    = get_terms(
	array(
		'taxonomy'   => 'product_cat',
		'hide_empty' => true,
		'number'     => 3,
	)
);

$featured_products = array();
if ( function_exists( 'wc_get_products' ) ) {
	$featured_products = wc_get_products(
		array(
			'status'   => 'publish',
			'limit'    => 4,
			'featured' => true,
			'orderby'  => 'date',
			'order'    => 'DESC',
		)
	);
}
?>
<main id="primary" class="site-main">
	<section class="hero container">
		<h1><?php esc_html_e( 'Modulaire oplossingen die perfect passen in jouw ruimte', 'moduluxe' ); ?></h1>
		<p><?php esc_html_e( 'Vergelijk uitvoeringen, specificaties en levertijden in één rustige koopervaring.', 'moduluxe' ); ?></p>
		<a class="btn btn--primary" href="<?php echo esc_url( $shop_url ); ?>"><?php esc_html_e( 'Bekijk assortiment', 'moduluxe' ); ?></a>
	</section>
	<section class="usp-bar container" aria-label="<?php esc_attr_e( 'USP overzicht', 'moduluxe' ); ?>">
		<p>✔ <?php esc_html_e( 'Premium materialen', 'moduluxe' ); ?></p>
		<p>✔ <?php esc_html_e( 'Duidelijke maatvoering', 'moduluxe' ); ?></p>
		<p>✔ <?php esc_html_e( 'Persoonlijk advies', 'moduluxe' ); ?></p>
	</section>
	<section class="container section">
		<h2><?php esc_html_e( 'Populaire categorieën', 'moduluxe' ); ?></h2>
		<div class="category-grid">
			<?php if ( ! is_wp_error( $terms ) && ! empty( $terms ) ) : ?>
				<?php foreach ( $terms as $term ) : ?>
					<a class="card" href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo esc_html( $term->name ); ?></a>
				<?php endforeach; ?>
			<?php else : ?>
				<p><?php esc_html_e( 'Voeg productcategorieën toe om ze hier te tonen.', 'moduluxe' ); ?></p>
			<?php endif; ?>
		</div>
	</section>
	<section class="container section">
		<h2><?php esc_html_e( 'Uitgelichte producten', 'moduluxe' ); ?></h2>
		<?php if ( ! empty( $featured_products ) ) : ?>
			<ul class="products columns-4">
				<?php foreach ( $featured_products as $featured_product ) : ?>
					<?php
					$GLOBALS['post'] = get_post( $featured_product->get_id() );
					setup_postdata( $GLOBALS['post'] );
					wc_get_template_part( 'content', 'product' );
					?>
				<?php endforeach; ?>
			</ul>
			<?php wp_reset_postdata(); ?>
		<?php else : ?>
			<p><?php esc_html_e( 'Nog geen uitgelichte producten ingesteld.', 'moduluxe' ); ?></p>
		<?php endif; ?>
	</section>
	<section class="container section section--soft">
		<h2><?php esc_html_e( 'Keuzehulp nodig?', 'moduluxe' ); ?></h2>
		<p><?php esc_html_e( 'Gebruik onze adviesservice voor afmetingen, opstelling en materiaalkeuze.', 'moduluxe' ); ?></p>
	</section>
	<section class="container section" aria-labelledby="reviews-title">
		<h2 id="reviews-title"><?php esc_html_e( 'Wat klanten zeggen', 'moduluxe' ); ?></h2>
		<blockquote>“<?php esc_html_e( 'Duidelijke specs en snelle levering.', 'moduluxe' ); ?>” ★★★★★</blockquote>
	</section>
	<section class="container section seo-content">
		<h2><?php esc_html_e( 'Over onze modulaire collectie', 'moduluxe' ); ?></h2>
		<p><?php esc_html_e( 'Deze tekstsectie is bedoeld voor SEO-content, interne links en extra koopadvies.', 'moduluxe' ); ?></p>
	</section>
</main>
<?php
get_footer();
