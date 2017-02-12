<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>

		<div id="footer-container">
			<footer class="main-footer">
				<div class="row">
					<div class="small-12 columns">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/wdyouthlogo-vertical.png" alt="WDYouth Logo" />
						<nav class="footer-social">
							<a href="https://www.facebook.com/WD-Youth-195985515868/" target="_blank" class="fa fa-facebook"></a>
							<a href="https://twitter.com/wdyouth/" target="_blank" class="fa fa-twitter"></a>
							<a href="https://www.instagram.com/wdyouth/" target="_blank" class="fa fa-instagram"></a>
							<a href="https://www.youtube.com/user/thewdyouth" target="_blank" class="fa fa-youtube-play"></a>
						</nav>
						<small>© 2017 WDYouth</small>
					</div>
				</div>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>
