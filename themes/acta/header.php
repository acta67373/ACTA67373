<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package acta
 */
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="//use.typekit.net/zys0reu.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
<?php wp_head(); ?>
<!--[if lt IE 9]>
  <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.custom.55653.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
  <script type="text/javascript">
  if(!Modernizr.svg) {
    jQuery('img[src*="svg"]').attr('src', function() {
        return jQuery(this).attr('src').replace('.svg', '.png');
    });
  }
</script>
<![endif]-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-372331-2', 'auto');
  ga('send', 'pageview');

</script>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'acta' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="secondary-nav">
			<div class="container">
  			<div class="search-button">
          <i class="fa fa-search search-toggle"></i>
  			</div>
        <div class="search-box">
        	<?php get_search_form(); ?>
        </div>
        <?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'secondary-menu' ) ); ?>
			</div>
		</div>
		
		
		
		<div class="container" id="header-wrapper">
			<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
  				<?php bloginfo( 'name' ); ?>
  		  </a>
			</div><!-- .site-branding -->
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span>Menu</span></button>
			<nav id="site-navigation" class="main-navigation col-8-lg" role="navigation">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
			</nav><!-- #site-navigation -->
			<?php if ( is_front_page()) { ?>
			<div class="call-to-action">
  			<?php if( get_field('tagline') ): ?>
				  <h1>
  				  <?php the_field('tagline'); ?>
  				  <?php if( get_field('tagline_link') ): ?>
  				    <a href="<?php echo the_field('tagline_link')?>"><?php echo the_field('tagline_link_text'); ?></a>
  				  <?php endif; ?>
				  </h1>
        <?php endif; ?>
        
        <?php if( get_field('quick_contact') ): ?>
  				<span><?php echo the_field('quick_contact'); ?></span>
        <?php endif; ?>
				
			</div>
			<?php } ?>
		</div>
	</header><!-- #masthead -->
	<?php if ( ! is_front_page() && ! is_category() && ! is_search() && ! is_home() && ! is_day() && ! is_month() && ! is_year()) { ?>
	<div class="sub-header">
		<div class="container">
			
			<?php 
  			if( tribe_is_month() && !is_tax() ) { // The Main Calendar Page
        echo '<h1 class="page-title">Events Calendar</h1>';
        } elseif( tribe_is_month() && is_tax() ) { // Calendar Category Pages
          echo '<h1 class="page-title">Events Calendar' . ' &raquo; ' . single_term_title('', false) . '</h1>';
        } elseif( tribe_is_event() && !tribe_is_day() && !is_single() ) { // The Main Events List
          echo '<h1 class="page-title">Events List</h1>';
        } elseif( tribe_is_event() && is_single() ) { // Single Events
          echo the_title( '<h1 class="page-title">', '</h1>' );
        } elseif( tribe_is_day() ) { // Single Event Days
          echo '<h1 class="page-title">' . 'Events on: ' . date('F j, Y', strtotime($wp_query->query_vars['eventDate'])) . '</h1>';
        } elseif( tribe_is_venue() ) { // Single Venues
          echo the_title( '<h1 class="page-title">', '</h1>' );
        } elseif( is_404() ) { //404 template
          echo '<h1 class="page-title">404</h1>';
        } else {
            echo the_title( '<h1 class="page-title">', '</h1>' );
        }
      ?>			
		</div>
	</div>
	<?php } ?>
	
	<?php if (is_category()) { ?>
  <div class="sub-header">
		<div class="container">
    <?php 
  	  the_archive_title( '<h1 class="page-title">', '</h1>' );
    ?>
		</div>
  </div>
	<?php } ?>	
	
	<?php if (is_home()) { ?>
  <div class="sub-header">
		<div class="container">
  		<h1 class="page-title">Announcements</h1>
      <?php 
  	    //the_archive_title( '<h1 class="page-title">', '</h1>' );
      ?>
    </div>
  </div>
	<?php } ?>
	
	<?php if (is_day()) { ?>
	<div class="sub-header">
		<div class="container">
  		<h1 class="page-title">Daily archives for <?php echo get_the_date(); ?></h1>
		</div>
	</div>
	<?php } ?>
	
	<?php if (is_month()) { ?>
	<div class="sub-header">
		<div class="container">
  		<h1 class="page-title">Monthly archives for <?php echo get_the_date('F, Y'); ?></h1>
		</div>
	</div>
	<?php } ?>
	
	<?php if (is_year()) { ?>
	<div class="sub-header">
		<div class="container">
  		<h1 class="page-title">Yearly archives for <?php echo get_the_date('Y'); ?></h1>
		</div>
	</div>
	<?php } ?>
	
	<?php if (is_search()) { ?>
	  <div class="sub-header">
	  	<div class="container">
        <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'acta' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
	  	</div>
	  </div>
	<?php } ?>
	
  <?php if ( is_page() ) { ?><?php
		if($post->post_parent)
		  $children = wp_list_pages('sort_order=ASC&title_li=&child_of='.$post->post_parent.'&echo=0'); else
      $children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0');
      if ($children) { ?>
				<div class="sub-pages-menu">
					<div class="container">
				    <ul>
				     	<?php echo $children; ?>
				    </ul>
				  </div>
			  </div><!--/subpages -->
				<?php } ?>
		<?php wp_reset_postdata(); ?>
	<?php } ?>


  <?php if ( is_front_page()) { ?>
	  <div id="content" class="site-content home-content">
	<?php } else { ?>
  	<div id="content" class="site-content content">
	<?php } ?>
