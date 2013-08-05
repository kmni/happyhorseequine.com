<?php
/*
	Template Name: Contacts
*/
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Happy_Horse_Equine_Services
 * @since Happy Horse Equine Services 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content services" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="entry-content<?php echo (happyhorse_has_quick_contact() ? ' has_quick_contact' : '');?>">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
					<?php happyhorse_quick_contact(); ?>
					<div class="cleaner"></div>
				</article><!-- #post -->
			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>