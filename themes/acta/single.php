<?php
/**
 * The template for displaying all single posts.
 *
 * @package acta
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="container">
			<main id="main" class="site-main page-main col-8-sm margin-clear" role="main">
      <?php
        $introimage = get_field('intro_image');
				$size = 'intro-image';
				?>
      <?php echo wp_get_attachment_image( $introimage, $size ); ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>

				<?php the_post_navigation(); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
			<?php get_sidebar('dynamic'); ?>
		</div>
	</div><!-- #primary -->

<?php get_footer(); ?>
