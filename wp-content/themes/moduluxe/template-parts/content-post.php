<article <?php post_class( 'card card--post' ); ?>>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<?php moduluxe_posted_on(); ?>
	<?php the_excerpt(); ?>
</article>
