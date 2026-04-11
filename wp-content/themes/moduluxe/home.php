<?php get_header(); ?>
<main id="primary" class="site-main container">
	<header class="page-header"><h1><?php single_post_title(); ?></h1></header>
	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'template-parts/content', 'post' ); ?>
	<?php endwhile; ?>
	<?php the_posts_pagination(); ?>
</main>
<?php get_footer(); ?>
