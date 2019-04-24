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
 Template Name: Bus Map
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="container">
			<main id="main" class="site-main col-12" role="main">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'page' ); ?>
				<?php endwhile; // end of the loop. ?>
        <div id="legend">
          <h3>Legend</h3>
          <ul>
            <li><img src="/wp-content/themes/acta/images/map-acta-stop.svg" alt="ACTA Shuttle Stop"> ACTA Bus Stop</li>
            <li class="acta-bus busicon"><svg x="0" y="0" width="35" height="18"><g transform="rotate(90 20 15)"><rect class="wheel" x="6" y="3" width="3" height="5" /><rect class="wheel" x="21" y="3" width="3" height="5" /><rect class="wheel" x="6" y="15" width="3" height="5" /><rect class="wheel" x="21" y="15" width="3" height="5" /><rect class="vehicle" x="10" y="1" width="10" height="25" /><polygon class="arrow" points="15,3 11,7 19,7" /></g></svg> ACTA Bus Location</li>
            <li><img src="/wp-content/themes/acta/images/map-pat-stop.svg" alt="PAT Bus Stop"> Port Authority Bus Stop</li>
            <li class="paac-bus busicon"><svg x="0" y="0" width="35" height="18"><g transform="rotate(90 20 15)"><rect class="wheel" x="6" y="3" width="3" height="5" /><rect class="wheel" x="21" y="3" width="3" height="5" /><rect class="wheel" x="6" y="15" width="3" height="5" /><rect class="wheel" x="21" y="15" width="3" height="5" /><rect class="vehicle" x="10" y="1" width="10" height="25" /><polygon class="arrow" points="15,3 11,7 19,7" /></g></svg> Port Authority Bus Location</li>
            <li><svg width="14" height="14"><rect style="fill: #0000ff; stroke:none;" x="0" y="0" width="14" height="14" /></svg> IKEA (ACTA Bus Layover Location)</li>
          </ul>
        </div>
				<div id="map"></div>

			</main><!-- #main -->
			<?php //get_sidebar(); ?>
		</div>
	</div><!-- #primary -->

<?php get_footer(); ?>
