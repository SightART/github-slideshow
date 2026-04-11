<?php
/**
 * Register block patterns.
 *
 * @package ModuLuxe
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function moduluxe_register_patterns() {
	register_block_pattern_category( 'moduluxe', array( 'label' => __( 'ModuLuxe', 'moduluxe' ) ) );

	register_block_pattern(
		'moduluxe/usp-row',
		array(
			'title'      => __( 'USP rij', 'moduluxe' ),
			'categories' => array( 'moduluxe' ),
			'content'    => '<!-- wp:columns --><div class="wp-block-columns"><!-- wp:column --><div class="wp-block-column"><p><strong>Gratis advies</strong><br>Binnen 24 uur.</p></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><p><strong>Snelle levering</strong><br>Betrouwbare planning.</p></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><p><strong>Premium kwaliteit</strong><br>Duurzame materialen.</p></div><!-- /wp:column --></div><!-- /wp:columns -->',
		)
	);
}
add_action( 'init', 'moduluxe_register_patterns' );
