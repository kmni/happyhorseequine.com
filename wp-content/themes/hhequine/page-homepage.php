<?php
/*
Template Name: Homepage
*/

	get_header();

?>

<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if (has_post_thumbnail()) { the_post_thumbnail(); }?>
					<div class="entry-content<?php echo (happyhorse_has_quick_contact() ? ' has_quick_contact' : '');?>">
						<?php the_content(); ?>

			<?php endwhile; ?>
					</div><!-- .entry-content -->
					<?php happyhorse_quick_contact(); ?>

					<!--footer class="entry-meta">
						<?php edit_post_link( __( 'Edit', 'happyhorse' ), '<span class="edit-link">', '</span>' ); ?>
					</footer--><!-- .entry-meta -->
				</article><!-- #post -->
				<div class="boxes clearfix">
			<?php /* boxes on homepage */
				if (happyhorse_has_box('equine_transport')) { happyhorse_equine_transport(); }
				if (happyhorse_has_box('exotic_transport')) { happyhorse_exotic_transport(); }
				if (happyhorse_has_box('request_quote')) { happyhorse_request_quote(); }
			?>
			</div> <!--// .boxes -->
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>