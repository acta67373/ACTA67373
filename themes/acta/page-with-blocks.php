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
 Template Name: Page with Blocks
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
  <div class="subpage-blocks">
    <div class="container">
      <div class="subpage-flex flexible-container">
        <div class="col-4-sm block custom-background-block" style="background-image:url('<?php echo the_field('block_1_background', 'option'); ?>');">
          <div class="block-inside block-inside-padding">
            <div>
              <!-- make optional: -->
              <?php if( get_field('block_1_icon', 'option') ): ?>
               <img src="<?php echo the_field('block_1_icon', 'option'); ?>">
              <?php endif; ?>
              <?php if( get_field('block_1_heading', 'option') ): ?>
                <h4><?php the_field('block_1_heading', 'option'); ?></h4>
              <?php endif; ?>
              <?php if( get_field('block_1_text', 'option') ): ?>
                <p><?php the_field('block_1_text', 'option'); ?></p>
              <?php endif; ?>
              <?php if( get_field('block_1_link', 'option') ): ?>
                <a href="<?php echo the_field('block_1_link', 'option'); ?>" class="arrow-right">Read More</a>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="mailing-list-block col-4-sm block">
          <div class="block-inside block-inside-padding">
            <!-- Begin MailChimp Signup Form -->
            <div class="mail-icon fa fa-envelope-o"></div>
            <form action="//actapgh.us11.list-manage.com/subscribe/post?u=34101dd16ea5ca23aeeb5fc27&amp;id=90cefc6550" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              <h4>Mailing List Sign-up</h4>
              <?php echo the_field('mailing_list_block_text', 12); ?>
              <div class="mc-field-group input-contain">
                <input type="email" value="" name="EMAIL" placeholder="Email address" id="mce-EMAIL">
                <ul>
                  <li><input type="checkbox" value="1" name="group[7173][1]" id="mce-group[7173]-7173-0"><label for="mce-group[7173]-7173-0">Newsletter</label></li>
                  <li><input type="checkbox" value="2" name="group[7173][2]" id="mce-group[7173]-7173-1"><label for="mce-group[7173]-7173-1">Traffic Updates</label></li>
                </ul>
              </div>
              <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" style="display:none"></div>
              </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px;"><input type="text" name="b_34101dd16ea5ca23aeeb5fc27_90cefc6550" tabindex="-1" value=""></div>
              <button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">Subscribe</button>
            </form>
            <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
            <!--End mc_embed_signup-->
          </div>
        </div>
        <div class="col-4-sm block custom-background-block" style="background-image:url('<?php echo the_field('block_2_background', 'option'); ?>');">
          <div class="block-inside block-inside-padding">
            <div>
              <?php if( get_field('block_2_icon', 'option') ): ?>
                <img src="<?php echo the_field('block_2_icon', 'option'); ?>">
              <?php endif; ?>
              <?php if( get_field('block_2_heading', 'option') ): ?>
                <h4><?php echo the_field('block_2_heading', 'option'); ?></h4>
              <?php endif; ?>
              <?php if( get_field('block_2_text', 'option') ): ?>
                <p><?php echo the_field('block_2_text', 'option'); ?></p>
              <?php endif; ?>
              <?php if( get_field('block_2_link', 'option') ): ?>
                <a href="<?php echo the_field('block_2_link', 'option'); ?>" class="arrow-right">Read More</a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>
