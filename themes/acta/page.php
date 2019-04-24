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

					<?php get_template_part( 'content', 'page' ); ?> 
            
				<?php endwhile; // end of the loop. ?>
		
				
				<?php 
          $term = get_field('show_category_on_page');
          $query = new WP_Query( array(
          'posts_per_page' => 10,
          'category_name' => $term->slug
          )); 
          if( !empty($term) ) {
          ?>
          <?php if( get_field('feed_title') ): ?>
            <h3><?php the_field('feed_title'); ?></h3>
          <?php endif; ?>
          <ul>
            <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
              <li><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></li>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          </ul>
          <?php endif; } ?>
      



			</main><!-- #main -->
			<?php get_sidebar(); ?>
		</div>
	</div><!-- #primary -->

<?php get_footer(); ?>
