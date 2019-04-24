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
 Template Name: Home Page
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="container">

			<main id="main" class="site-main" role="main">

				<section class="flexible-container">
					<div class="col-8-sm flexed margin-clear">
						<div class="flexed-inner">

							<?php

							// check if the flexible content field has rows of data
							if( have_rows('top_left_blocks') ):

						   	//Top Left block: two small blocks, one large slideshow block.
						    while ( have_rows('top_left_blocks') ) : the_row();

					        if( get_row_layout() == 'stat_block' ): ?>
                    <?php 
                      $blockType = get_sub_field_object('block_color');
                      $blockValue = get_sub_field('block_color');
                       ?>
					        	<div class="col-6-sm block <?php the_sub_field('block_color'); ?>"
  					        	<?php if ($blockValue == 'custom-background-block') : ?>
					        			style="background-image:url('<?php the_sub_field('background_image'); ?>');"<?php endif; ?>>
                        <div class="block-inside block-inside-padding">
    					        		<div>
    												<?php 
      												$icon = get_sub_field('icon');
                              if( !empty($icon) ): ?>
    													  <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
                              <?php endif; ?>

    												<?php if( get_sub_field('large_stat') ): ?>
    													<h3><?php the_sub_field('large_stat'); ?></h3>
    												<?php endif; ?>
    												
    						        		<?php if( get_sub_field('small_stat_headline')): ?>	
    						        			<h4><?php the_sub_field('small_stat_headline'); ?></h4>
    						        		<?php endif; ?>

    						        		<?php if( get_sub_field('stat_blurb')): ?>
    						        			<span><?php the_sub_field('stat_blurb'); ?></span>
    						        		<?php endif; ?>

    					       				<a href="<?php the_sub_field('stat_link'); ?>" class="arrow-right">Read More</a>
    					       			</div>
                        </div>
					       		</div>

					        <?php endif; ?>

					        <?php if( get_row_layout() == 'slideshow' ): ?>
						        <div class="col-12 block slideshow-container">
                      <div class="block-inside">
  											<div class="flexslider carousel home-slideshow">
  												<?php if( have_rows('slide') ): ?>
  				            			<ul class="slides">
  				            				<?php while( have_rows('slide') ): the_row(); ?>
  					            				<li>
  								                <?php
  								                  $slideimage = get_sub_field('image');
  								                  $size = 'slider-thumb';
  								                ?>
  								                <?php echo wp_get_attachment_image( $slideimage, $size ); ?>
  								                <?php if( get_sub_field('caption')): ?>
    								              <a href="<?php echo the_sub_field('page_link'); ?>">
  						                      <div class="caption">
  						                        <h3><?php echo the_sub_field('heading'); ?></h3>
  						                        <?php echo the_sub_field('caption'); ?>
  						                      </div>
                                  </a>
                                  <?php endif; ?>
  						                  </li>
  				            				<?php endwhile; ?>
  				            			</ul>
  				            		<?php endif; ?>
  											</div>
                      </div>
										</div>
									<?php endif; ?>

						    <?php endwhile; endif; ?>

						</div>
					</div>

					<div class="col-4-sm block flexed last headlines traffic-alerts">
            <div class="block-inside">
  						<div class="headline-header">
  							<h2>Recent Traffic Alerts</h2>
  						</div>
  						<ul>
  							<?php $query = new WP_Query( array(
              	'posts_per_page' => 4,
               	'ignore_sticky_posts' => true,
               	'category_name' => 'traffic-alerts'
               	)); ?>
                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                  <li>
                    <h4><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h4>
                    <?php
                      //Not in the design? echo wp_trim_words( get_the_content(), 10, '...' );
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
				</section>

				<section class="flexible-container"><!-- section two. -->
					<div class="col-4-sm block flexed headlines construction-updates">
            <div class="block-inside">
  						<div class="headline-header">
  							<h2>Construction Updates</h2>
  						</div>
  						<ul>
  						<?php $query = new WP_Query( array(
              	'posts_per_page' => 4,
               	'ignore_sticky_posts' => true,
               	'category_name' => 'construction-updates'
               	)); ?>

                <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
                  <li>
                    <h4><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h4>
                    <?php
                      //Not in the design? echo wp_trim_words( get_the_content(), 10, '...' );
                    ?>
                    <?php if( get_field('project_start_date') ): ?>
                			<span>Project Start Date: <?php the_field('project_start_date'); ?></span>
                		<?php endif; ?>
                		<?php if( get_field('project_completion_date') ): ?>
                			<span>Project Completion: <?php the_field('project_completion_date'); ?></span>
                		<?php endif; ?>
                  </li>
                
                  <?php endwhile; ?>
                  <?php wp_reset_postdata(); ?>
                <?php endif; ?>
              </ul>
              <div class="headline-footer">
              	<a href="/category/construction-updates/" class="read-more">View All Construction Updates</a>
              </div>
            </div>
					</div>

					<div class="col-8-sm flexed">
						<div class="flexed-inner second-right-blocks">
							
							<?php 
						    if( have_rows('second_right_blocks') ):
						    	while ( have_rows('second_right_blocks') ) : the_row();
						    		if( get_row_layout() == 'stat_block' ): ?>
						    		<?php 
                      $blockType = get_sub_field_object('block_color');
                      $blockValue = get_sub_field('block_color');
                      ?>
						    		<div class="col-6-sm block <?php the_sub_field('block_color'); ?>"
  					        	<?php if ($blockValue == 'custom-background-block') : ?>
					        			style="background-image:url('<?php the_sub_field('background_image'); ?>');"<?php endif; ?>>
                      <div class="block-inside block-inside-padding">
                        <div>												
    											<?php 
      											$icon = get_sub_field('icon');
      											if( !empty($icon) ): ?>
  													  <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
    											<?php endif; ?>
    
    											<?php if( get_sub_field('large_stat') ): ?>
    												<h3><?php the_sub_field('large_stat'); ?></h3>
    											<?php endif; ?>
    
    					        		<?php if( get_sub_field('small_stat_headline')): ?>
    					        			<h4><?php the_sub_field('small_stat_headline'); ?></h4>
    					        		<?php endif; ?>
    
    					        		<?php if( get_sub_field('stat_blurb')): ?>
    					        			<span><?php the_sub_field('stat_blurb'); ?></span>
    					        		<?php endif; ?>
    
                          <a href="<?php the_sub_field('stat_link'); ?>" class="arrow-right">Read More</a>
                        </div>
                      </div>
					       		</div>
								<?php endif; endwhile; endif; ?>

								<?php $query = new WP_Query( array(
                	'posts_per_page' => 2,
                	'ignore_sticky_posts' => true,
                	'category_name' => 'featured'
              	)); ?>

	              <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
	                <div class="post-block col-6-sm block">
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
  			 								<a href="<?php the_permalink(); ?>" class="category-icon featured-post">Read More</a>
  			 							</div>
  			 							<?php } ?>
  			 							<div class="post-body">
                        <h4><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h4>
                        <?php 
                          echo wp_trim_words( get_the_content(), 25, '...' );
                        ?>
                        <span class="posted-date">Added <?php the_time('M d, Y') ?></span>
                      </div>
                      <div class="block-footer">
                        <a href="<?php the_permalink(); ?>" class="read-more">View</a>
  	                  </div>
                    </div>
	                </div>

	              <?php endwhile; wp_reset_postdata(); endif; ?>

						</div>

					</div>

				</section>

				<section class="flexible-container"><!-- section three: includes 3 blocks, one news/publication related. -->

					<div class="col-12 flexed">
						<div class="flexed-inner third-row-blocks">
							
							  <?php $query = new WP_Query( array(
                	'posts_per_page' => 1,
                	'ignore_sticky_posts' => true,
                	'category_name' => 'resources'
              	)); ?>

	              <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
	                <div class="post-block col-4-sm block">
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
  			 								<a href="<?php the_permalink(); ?>" class="category-icon resource-post">Read More</a>
  			 							</div>
  			 							<?php } ?>
  			 							<div class="post-body">
  	                    <h4><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h4>
                        <?php
                          echo wp_trim_words( get_the_content(), 25, '...' );
                        ?>
                        <span class="posted-date">Added <?php the_time('M d, Y') ?></span>
  			 							</div>
  			 							<div class="block-footer">
                        <a href="<?php the_permalink(); ?>" class="read-more">View</a>
  	                  </div>
                    </div>
	                </div>

	              <?php endwhile; wp_reset_postdata(); endif; ?>

							<?php 
						    if( have_rows('third_row_blocks') ):
						    	while ( have_rows('third_row_blocks') ) : the_row();
						    		if( get_row_layout() == 'stat_block' ): ?>
						    		<?php 
                      $blockType = get_sub_field_object('block_color');
                      $blockValue = get_sub_field('block_color');
                      ?>
						    		<div class="col-4-sm block <?php the_sub_field('block_color'); ?>"
  					        	<?php if ($blockValue == 'custom-background-block') : ?>
					        			style="background-image:url('<?php the_sub_field('background_image'); ?>');"<?php endif; ?>>
                        <div class="block-inside block-inside-padding">
                          <div>
    												<?php 
      												$icon = get_sub_field('icon');
                              if( !empty($icon) ): ?>
  													    <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
    												<?php endif; ?>
    
    												<?php if( get_sub_field('large_stat') ): ?>
    													<h3><?php the_sub_field('large_stat'); ?></h3>
    												<?php endif; ?>
    
    						        		<?php if( get_sub_field('small_stat_headline')): ?>
    						        			<h4><?php the_sub_field('small_stat_headline'); ?></h4>
    						        		<?php endif; ?>
    
    						        		<?php if( get_sub_field('stat_blurb')): ?>
    						        			<span><?php the_sub_field('stat_blurb'); ?></span>
    						        		<?php endif; ?>
    
    					       				<a href="<?php the_sub_field('stat_link'); ?>" class="arrow-right">Read More</a>
                          </div>
                        </div>
					       		</div>
								<?php endif; endwhile; endif; ?>

						</div>
					</div>

				</section>


				<section class="flexible-container"><!-- section four. -->

					<div class="col-8-sm flexed">
						<div class="flexed-inner fourth-right-blocks">					
							<?php 
						  	if( have_rows('fourth_left_blocks') ):
						  		while ( have_rows('fourth_left_blocks') ) : the_row();
						    if( get_row_layout() == 'stat_block' ): ?>
						    <?php 
                  $blockType = get_sub_field_object('block_color');
                  $blockValue = get_sub_field('block_color');
                  ?>
						    	<div class="col-6-sm block <?php the_sub_field('block_color'); ?>"
                    <?php if ($blockValue == 'custom-background-block') : ?>
					        	  style="background-image:url('<?php the_sub_field('background_image'); ?>');"<?php endif; ?>>
                      <div class="block-inside block-inside-padding">
                        <div>
      										<?php 
        										$icon = get_sub_field('icon');
        										if( !empty($icon) ): ?>
    												  <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>" />
      										<?php endif; ?>
      
      										<?php if( get_sub_field('large_stat') ): ?>
      											<h3><?php the_sub_field('large_stat'); ?></h3>
      										<?php endif; ?>
      
      				        		<?php if( get_sub_field('small_stat_headline')): ?>
      				        			<h4><?php the_sub_field('small_stat_headline'); ?></h4>
      				        		<?php endif; ?>
      
      				        		<?php if( get_sub_field('stat_blurb')): ?>
      				        		  <span><?php the_sub_field('stat_blurb'); ?></span>
      				        		<?php endif; ?>
      
                          <a href="<?php the_sub_field('stat_link'); ?>" class="arrow-right">Read More</a>
                        </div>
                      </div>
					        </div>
							<?php endif; endwhile; endif; ?>

	            <div class="mailing-list-block col-6-sm block">
                <div class="block-inside block-inside-padding">
                  <!-- Begin MailChimp Signup Form -->
                  <div class="mail-icon fa fa-envelope-o"></div>
                  <form action="//actapgh.us11.list-manage.com/subscribe/post?u=34101dd16ea5ca23aeeb5fc27&amp;id=90cefc6550" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <h4>Mailing List Sign-up</h4>
                    <?php echo the_field('mailing_list_block_text'); ?>
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

	            <div class="social-media-block col-6-sm block">
                <div class="block-inside block-inside-padding">
  	            	<div class="social-icon fa fa-comment-o"></div>
  	              <h4>Follow Us</h4>
  	              <?php echo the_field('social_media_block_text'); ?>
  	              <ul>
  	              	<!--<li class="facebook-icon"><a href="#" class="fa fa-facebook"><span>Facebook</span></a></li>-->
  	              	<li class="twitter-icon"><a href="http://www.twitter.com/ACTAPGH" class="fa fa-twitter" target="_blank"><span>Twitter</span></a></li>
  	              	<!--<li class="linkedin-icon"><a href="#" class="fa fa-linkedin"><span>LinkedIn</span></a></li>-->
  	              </ul>
                </div>
	            </div>
						</div>
					</div>

					<div class="col-4-sm block flexed headlines events-block">
            <div class="block-inside">
						<div class="headline-header">
							<h2>Upcoming Events</h2>
						</div>
						<ul>
						<!-- Make this events: -->
						<?php $query = new WP_Query( array(
							'posts_per_page' => 4,
            	'post_type' => 'tribe_events'
             	)); ?>
	              <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
	                <li>
	                  <h4><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h4>
	                  <?php
                     echo wp_trim_words( get_the_content(), 10, '...' );
                    ?>	                  <?php
										// Get the start date and end date
										$date_output = tribe_get_start_date(null, false);
										$end_date = tribe_get_end_date(null, false);
										// Only show the end date if it is different to the start date
										if ($date_output !== $end_date) $date_output .= " &ndash; $end_date";
										// If it is an all day event then say so
										if (tribe_get_all_day()) $time_output = '(All day event)';
										// Otherwise show the start-end times
										else $time_output = tribe_get_start_date(null, false, get_option('time_format')).' &ndash; '
											.tribe_get_end_date(null, false, get_option('time_format'));
										?>
										<span class="event-date"><?php esc_html_e($date_output) ?></span>
										<span class="event-time"><?php esc_html_e($time_output) ?></span>
	                </li>
	              <?php endwhile; wp_reset_postdata(); endif; ?>
							</ul>
							<div class="headline-footer">
								<a href="/events" class="read-more">View All Events</a>
							</div>
            </div>
					</div>

				</section>


			</main><!-- #main -->
		
		</div>
	</div><!-- #primary -->

<?php get_footer(); ?>
