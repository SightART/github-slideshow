<?php get_header(); ?>
<main id="primary" class="site-main container">
	<h1><?php esc_html_e( 'Pagina niet gevonden', 'moduluxe' ); ?></h1>
	<p><?php esc_html_e( 'De pagina bestaat niet meer. Gebruik de zoekfunctie of ga naar de shop.', 'moduluxe' ); ?></p>
	<?php get_search_form(); ?>
	<a class="btn btn--primary" href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>"><?php esc_html_e( 'Naar shop', 'moduluxe' ); ?></a>
</main>
<?php get_footer(); ?>
