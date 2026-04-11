<?php
/**
 * Header template.
 *
 * @package ModuLuxe
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#primary"><?php esc_html_e( 'Ga direct naar content', 'moduluxe' ); ?></a>
<div class="site-wrap">
	<div class="topbar" role="status" aria-live="polite">
		<p><?php esc_html_e( 'Gratis levering vanaf € 500 · 30 dagen retour · Persoonlijk advies', 'moduluxe' ); ?></p>
	</div>
	<header class="site-header" role="banner">
		<div class="container site-header__inner">
			<div class="site-branding">
				<?php if ( has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
				<?php else : ?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-logo" rel="home">ModuLuxe</a>
				<?php endif; ?>
			</div>
			<button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primary-menu" aria-label="<?php esc_attr_e( 'Open hoofdmenu', 'moduluxe' ); ?>">
				<?php esc_html_e( 'Menu', 'moduluxe' ); ?>
			</button>
			<nav class="main-nav" aria-label="<?php esc_attr_e( 'Hoofdmenu', 'moduluxe' ); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
						'container'      => false,
						'fallback_cb'    => false,
					)
				);
				?>
			</nav>
			<div class="header-actions" aria-label="<?php esc_attr_e( 'Snelle acties', 'moduluxe' ); ?>">
				<a href="<?php echo esc_url( moduluxe_get_wc_page_url( 'myaccount' ) ); ?>"><?php esc_html_e( 'Account', 'moduluxe' ); ?></a>
				<a href="<?php echo esc_url( moduluxe_get_cart_url() ); ?>">
					<?php esc_html_e( 'Winkelwagen', 'moduluxe' ); ?>
					<span class="cart-count"><?php echo esc_html( function_exists( 'WC' ) && WC()->cart ? WC()->cart->get_cart_contents_count() : 0 ); ?></span>
				</a>
			</div>
		</div>
	</header>
