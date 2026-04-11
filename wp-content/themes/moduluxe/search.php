<?php get_header(); ?>
<main id="primary" class="site-main container">
	<header class="page-header"><h1><?php printf( esc_html__( 'Zoekresultaten voor: %s', 'moduluxe' ), esc_html( get_search_query() ) ); ?></h1></header>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'template-parts/content', 'search' ); ?>
	<?php endwhile; else : ?>
		<?php get_template_part( 'template-parts/content', 'none' ); ?>
	<?php endif; ?>
</main>
<?php get_footer(); ?>
