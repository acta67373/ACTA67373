<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package acta
 Template Name: Single Column
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="container">
			<main id="main" class="site-main col-12" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

				<?php endwhile; // end of the loop. ?>

			</main><!-- #main -->
			<?php //get_sidebar(); ?>
		</div>
	</div><!-- #primary -->

<?php get_footer(); ?>
