<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package acta
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="container">
			<main id="main" class="site-main page-main col-8-sm margin-clear" role="main">

				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'acta' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><?php _e( 'It looks like nothing was found at this location. Maybe try searching?', 'acta' ); ?></p>

						<?php get_search_form(); ?>

					</div><!-- .page-content -->
				</section><!-- .error-404 -->

			</main><!-- #main -->
		</div>
	</div><!-- #primary -->

<?php get_footer(); ?>
