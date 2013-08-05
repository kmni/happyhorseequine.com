<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="footer">
			<?php 
				$qc_phone	= get_field('quick_contact_phone', false, false);
				wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => '', 'items_wrap' => '<ul>%3$s<li>'.$qc_phone.'</li></ul>' ) );
				do_action( 'happyhorse_credits' );
			?>
			</div> <!--// .footer -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>