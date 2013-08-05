<?php
/*
	Template Name: Services
*/

get_header(); 
?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content services" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<div class="entry-content<?php echo (happyhorse_has_quick_contact() ? ' has_quick_contact' : '');?>">
						<?php the_content(); ?>
					</div><!-- .entry-content -->
					<?php happyhorse_quick_contact(); ?>
					<?php if (has_post_thumbnail()) { the_post_thumbnail(); }?>
					<div class="cleaner"></div>
				</article><!-- #post -->
			<?php endwhile; ?>
			<hr>
			<?php if (happyhorse_has_box('equine_transport_content')) { happyhorse_services('equine_transport_content'); } ?>
			<hr>
			<?php if (happyhorse_has_box('exotic_transport_content')) { happyhorse_services('exotic_transport_content'); } ?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>