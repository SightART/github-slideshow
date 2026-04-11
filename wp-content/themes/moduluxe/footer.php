<?php
/**
 * Footer template.
 *
 * @package ModuLuxe
 */
?>
	<footer class="site-footer" role="contentinfo">
		<div class="container site-footer__grid">
			<section aria-labelledby="footer-service-title">
				<h2 id="footer-service-title"><?php esc_html_e( 'Klantenservice', 'moduluxe' ); ?></h2>
				<?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => false, 'fallback_cb' => false ) ); ?>
			</section>
			<section aria-labelledby="footer-contact-title">
				<h2 id="footer-contact-title"><?php esc_html_e( 'Contact', 'moduluxe' ); ?></h2>
				<p><?php esc_html_e( 'Ma-Vr 09:00-17:30', 'moduluxe' ); ?></p>
				<p><a href="tel:+31101234567">+31 10 123 45 67</a></p>
			</section>
			<section aria-labelledby="footer-trust-title">
				<h2 id="footer-trust-title"><?php esc_html_e( 'Vertrouwen', 'moduluxe' ); ?></h2>
				<p><?php esc_html_e( 'Keurmerk / review badges placeholder', 'moduluxe' ); ?></p>
			</section>
			<?php if ( is_active_sidebar( 'footer-service' ) ) : ?>
				<?php dynamic_sidebar( 'footer-service' ); ?>
			<?php endif; ?>
		</div>
		<p class="site-footer__copyright">&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?></p>
	</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
