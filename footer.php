<?php
/**
 * @package WHA.PE_Blog_theme
 */

?>
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wha-blog-theme' ) ); ?>">
				<?php
				printf( esc_html__( 'Proudly powered by %s', 'wha-blog-theme' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'wha-blog-theme' ), 'wha-blog-theme', '<a href="http://wha.pe">WHA Peru</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
