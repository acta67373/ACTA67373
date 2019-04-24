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
 Template Name: Twitter
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

        <div class="subpage-blocks">
          <div class="container">
            <div class="subpage-flex flexible-container">
              <div class="col-4-sm block" style="background-color: #FF741D">
                <div class="block-inside block-inside-padding">
                  <div>
                    <!-- take out 'option' for things to show up -->
                    <?php if( get_field('block_1_icon') ): ?>
                     <img src="<?php echo the_field('block_1_icon'); ?>">
                    <?php endif; ?>
                    <?php if( get_field('block_1_heading') ): ?>
                      <h4><?php the_field('block_1_heading'); ?></h4>
                    <?php endif; ?>
                    <?php if( get_field('block_1_text') ): ?>
                      <p><?php the_field('block_1_text'); ?></p>
                    <?php endif; ?>
                    <?php if( get_field('block_1_link') ): ?>
                      <a href="<?php echo the_field('block_1_link'); ?>" class="arrow-right">Read More</a>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
              <div class="col-8-sm block" style="background-color: #FF741D">
                <style type="text/css">
  .error{
    padding: 5px 9px;
    border: 1px solid red;
    color: red;
    border-radius: 3px;
  }
 
  .success{
    padding: 5px 9px;
    border: 1px solid green;
    color: green;
    border-radius: 3px;
  }
 
  form span{
    color: red;
  }
</style>
 
<div id="respond">
  <?php echo $response; ?>
  <form action="<?php the_permalink(); ?>" method="post">
    <p><label for="name">Name: <span>*</span> <br><input type="text" name="message_name" value="<?php echo esc_attr($_POST['message_name']); ?>"></label></p>
    <p><label for="message_email">Email: <span>*</span> <br><input type="text" name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>"></label></p>
    <p><label for="message_text">Message: <span>*</span> <br><textarea type="text" name="message_text"><?php echo esc_textarea($_POST['message_text']); ?></textarea></label></p>
    <p><label for="message_human">Human Verification: <span>*</span> <br><input type="text" style="width: 60px;" name="message_human"> + 3 = 5</label></p>
    <input type="hidden" name="submitted" value="1">
    <p><input type="submit"></p>
  </form>
</div>

              </div>

              <div class="col-4-sm block" style="background-color: #656565">
                <div class="block-inside block-inside-padding">
                  <div>
                    <?php if( get_field('block_2_icon') ): ?>
                      <img src="<?php echo the_field('block_2_icon'); ?>">
                    <?php endif; ?>
                    <?php if( get_field('block_2_heading') ): ?>
                      <h4><?php echo the_field('block_2_heading'); ?></h4>
                    <?php endif; ?>
                    <?php if( get_field('block_2_text') ): ?>
                      <p><?php echo the_field('block_2_text'); ?></p>
                    <?php endif; ?>
                    <?php if( get_field('block_2_link') ): ?>
                      <a href="<?php echo the_field('block_2_link'); ?>" class="arrow-right">Read More</a>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
              <div class="col-8-sm block" style="background-color: #656565"></div>

              <div class="col-4-sm block" style="background-color: #7BB53A">
                <div class="block-inside block-inside-padding">
                  <div>
                    <?php if( get_field('block_3_icon') ): ?>
                      <img src="<?php echo the_field('block_3_icon'); ?>">
                    <?php endif; ?>
                    <?php if( get_field('block_3_heading') ): ?>
                      <h4><?php echo the_field('block_3_heading'); ?></h4>
                    <?php endif; ?>
                    <?php if( get_field('block_3_text') ): ?>
                      <p><?php echo the_field('block_3_text'); ?></p>
                    <?php endif; ?>
                    <?php if( get_field('block_3_link') ): ?>
                      <a href="<?php echo the_field('block_3_link'); ?>" class="arrow-right">Read More</a>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
              <div class="col-8-sm block" style="background-color: #7BB53A"></div>

            </div>
          </div>
        </div>
    
			</main><!-- #main -->
			<?php get_sidebar(); ?>
		</div>
	</div><!-- #primary -->
  

<?php get_footer(); ?>
