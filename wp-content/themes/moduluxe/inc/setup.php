<?php
/**
 * Theme setup hooks.
 *
 * @package ModuLuxe
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function moduluxe_theme_setup() {
	load_theme_textdomain( 'moduluxe', MODULUXE_DIR . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', array( 'height' => 60, 'width' => 220, 'flex-height' => true, 'flex-width' => true ) );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/css/editor.css' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'moduluxe' ),
			'footer'  => __( 'Footer Menu', 'moduluxe' ),
		)
	);
}
add_action( 'after_setup_theme', 'moduluxe_theme_setup' );

function moduluxe_set_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'moduluxe_content_width', 1240 );
}
add_action( 'after_setup_theme', 'moduluxe_set_content_width', 0 );

function moduluxe_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Footer Service Kolom', 'moduluxe' ),
			'id'            => 'footer-service',
			'before_widget' => '<section class="footer-widget">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="footer-widget__title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'moduluxe_widgets_init' );
