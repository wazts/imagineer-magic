<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Imagineer Magic
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<?php if ( is_active_sidebar( 'sidebar-bottom-1' ) ) : ?>
					<div id="sidebar-bottom" class="widget-area" role="complementary">
						<?php dynamic_sidebar( 'sidebar-bottom-1' ); ?>
					</div><!-- #sidebar-bottom -->
				<?php endif; ?>
			</div>
			<div id="site-footer-info" class="site-info">
					<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'imagineer-magic' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'imagineer-magic' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php printf( __( 'Theme: %1$s by %2$s.', 'imagineer-magic' ), 'Imagineer Magic', '<a href="http://kyle-wagner.com" rel="designer">Kyle Wagner</a>' ); ?>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
