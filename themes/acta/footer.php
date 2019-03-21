<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package acta
 */
?>

	</div><!-- #content -->

	<div class="top-return">
  	<div class="container">
  	  <a href="#masthead">Go to the top of the page</a>
  	</div>
	</div>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="site-info col-3-md">
				<div class="footer-title">Airport Corridor Transportation Association</div>
				<div class="address">
					<div><?php the_field('address', 'option'); ?></div>
					<div><?php the_field('city', 'option'); ?>, <?php the_field('state', 'option'); ?>  <?php the_field('zip_code', 'option'); ?></div>
				</div>
				<div class="contact-info">
					<div class="phone"><a href="tel:+1<?php the_field('phone', 'option'); ?>"><?php the_field('phone', 'option'); ?></a> Phone</div>
					<div class="fax"><?php the_field('fax', 'option'); ?> Fax</div>
				</div>
			</div><!-- .site-info -->
			<div class="footer-nav col-9-md">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'footer-menu' ) ); ?>
			</div>
			<div class="footer-logos">
				<div class="rideacta-footer-logo col-6">
					<img src="<?php echo get_template_directory_uri(); ?>/images/rideacta-footer-logo.svg" alt="Ride ACTA Logo">
				</div>
				<div class="acta-footer-logo col-6">
					<img src="<?php echo get_template_directory_uri(); ?>/images/acta-footer-logo.svg" alt="ACTA Logo">
				</div>
			</div>
			<div class="footer-bottom">
				<div class="footer-bottom-menu col-7-sm">
					<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
				</div>
				<div class="footer-copyright col-5-sm">
					&copy; Copyright <?php the_date('Y') ?>  Airport Corridor Transportation Association
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
