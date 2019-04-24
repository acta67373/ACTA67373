<?php
/**
 * @package acta
 */
?>


<article id="post-<?php the_ID(); ?>" <?php post_class('block post-block category-post col-6-sm'); ?>>
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