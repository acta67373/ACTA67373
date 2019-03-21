<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package acta
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area col-4-sm" role="complementary">
	<?php //dynamic_sidebar( 'sidebar-1' ); ?>
  <div class="traffic-alerts-widget block headlines widget">
    <div class="block-inside">
      <div class="traffic-alerts">
        <div class="headline-header">
          <h2>Recent Traffic Alerts</h2>
        </div>
        <ul>
          <?php $query = new WP_Query( array(
          'posts_per_page' => 5,
          'ignore_sticky_posts' => true,
          'category_name' => 'traffic-alerts'
          )); ?>
          <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
            <li>
              <h4><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h4>
              <?php
                //echo wp_trim_words( get_the_content(), 10, '...' );
                ?>
              <span class="posted-date">Added <?php the_time('M d, Y') ?></span>
            </li>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?> 
          <?php endif; ?>
        </ul>
        <div class="headline-footer">
          <a href="/category/traffic-alerts/" class="read-more">View All Traffic Alerts</a>
        </div>
      </div>
    </div>
  </div>
  <?php $query = new WP_Query( array(
  	'posts_per_page' => 1,
  	'ignore_sticky_posts' => true,
  	'category_name' => 'featured'
  )); ?>
  
  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
    <div class="post-block col-12 block">
      <div class="block-inside">
      	<?php
    			$teaserimage = get_field('intro_image');
          $size = 'teaser-thumb';
    		?>		 	
    			<div class="post-header">
    			<div>
    					<?php echo wp_get_attachment_image( $teaserimage, $size ); ?>
    				</div>
    				<a href="<?php the_permalink(); ?>" class="category-icon featured-post">Read More</a>
    			</div>
    			<div class="post-body">
          <h4><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h4>
          <?php
            echo wp_trim_words( get_the_content(), 10, '...' );
            ?>
          <span class="posted-date">Added <?php the_time('M d, Y') ?></span>
        </div>
        <div class="block-footer">
          <a href="<?php the_permalink(); ?>" class="read-more">View</a>
        </div>
      </div>
    </div>
  
  <?php endwhile; wp_reset_postdata(); endif; ?>
  </div><!-- #secondary -->
