<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the main and #page div elements.
 *
 * @since 1.0.0
 */
$bavotasan_theme_options = bavotasan_theme_options();
?>
	

	</main><!-- main -->
	<div class="social-icons row" style="text-align:center; margin:auto;">
			<div class="facebook-icon col-md-4"> 
				<i class="fa fa-facebook fa-4x"></i>
			</div>

			<div class="youtube-icon col-md-4">
				<i class="fa fa-youtube fa-4x"></i>
			</div>

			<div class="twitter-icon col-md-4">
				<i class="fa fa-twitter fa-4x"></i>
			</div>	
		</div>
	</div>
	<footer id="footer" role="contentinfo">
		<div id="footer-content" class="container">
			<div class="row">
				<div class="copyright col-lg-12">
					<span class="pull-left"><?php printf( __( 'Copyright &copy; %s %s. All Rights Reserved.', 'arcade' ), date( 'Y' ), ' <a href="' . home_url() . '">' . get_bloginfo( 'name' ) .'</a>' ); ?></span>
					



					<span class="credit-link pull-right"><a href="http://ca.linkedin.com/pub/connor-shocrylas/38/2bb/b8b"><i class="fa fa-bolt fa-2x"></i> Designed by Connor Shocrylas</a></span>
				</div><!-- .col-lg-12 -->
			</div><!-- .row -->
		</div><!-- #footer-content.container -->
	</footer><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>