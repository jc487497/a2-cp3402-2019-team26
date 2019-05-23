<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The_Coffee_Can
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

        <nav class="social-menu">
	        <?php
	        wp_nav_menu( array(
		        'theme_location' => 'social',
	        ) );
	        ?>
        </nav>

		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'the-coffee-can' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'the-coffee-can' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'the-coffee-can' ), 'the-coffee-can', '<a href="https://ductuann.sgedu.site/a2/">Team_26</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
