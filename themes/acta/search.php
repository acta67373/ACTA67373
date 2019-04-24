<?php
/**
 * The template for displaying search results pages.
 *
 * @package acta
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="container">
			<main id="main" class="site-main page-main col-10-sm margin-clear" role="main">

			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				  <div class="post-blocks flexible-container">
  				<?php while ( have_posts() ) : the_post(); ?>
  
  					<?php
  					/**
  					 * Run the loop for the search to output the results.
  					 * If you want to overload this in a child theme then include a file
  					 * called content-search.php and that will be used instead.
  					 */
  					get_template_part( 'content', get_post_format() );
  					?>
            
          <?php endwhile; ?>
				</div>

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>

			</main><!-- #main -->
			<?php //get_sidebar(); ?>
		</div>
	</div><!-- #primary -->

<?php get_footer(); ?>
