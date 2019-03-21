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
 Template Name: Resources
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
          <div class="post-blocks flexible-container">
            <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
              
              <article id="post-<?php the_ID(); ?>" <?php post_class('block post-block category-post col-4-sm'); ?>>
                <div class="block-inside">
                  <?php
                  	$teaserimage = get_field('intro_image');
                  	$size = 'teaser-thumb';
                  ?>		
                  <?php if (!empty($teaserimage)) { ?>
                  <div class="post-header">
                	  <div>
                			<?php echo wp_get_attachment_image( $teaserimage, $size ); ?>
                		</div>
                	</div>
                	<?php } ?>
                
                  <div class="post-body">
                    <h2><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
                    <?php
                      echo wp_trim_words( get_the_content(), 20, '...' );
                    ?>
                    <span class="posted-date">Added <?php the_time('M d, Y') ?></span>
                  </div>
                  <div class="block-footer">
                    <a href="<?php the_permalink(); ?>" class="read-more">View</a>
                  </div>
                  
                	<div class="entry-content">
                		<?php
                			wp_link_pages( array(
                				'before' => '<div class="page-links">' . __( 'Pages:', 'acta' ),
                				'after'  => '</div>',
                			) );
                		?>
                	</div><!-- .entry-content -->
                </div>
              </article><!-- #post-## -->
              
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          </div>
          <?php endif; } ?>
      



			</main><!-- #main -->
			<?php get_sidebar(); ?>
		</div>
	</div><!-- #primary -->

<?php get_footer(); ?>
