<?php get_header(); ?>
<main id="primary" class="site-main container">
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class( 'entry' ); ?>>
			<h1><?php the_title(); ?></h1>
			<div class="entry-meta"><?php moduluxe_posted_on(); ?></div>
			<div class="entry-content"><?php the_content(); ?></div>
		</article>
	<?php endwhile; ?>
</main>
<?php get_footer(); ?>
