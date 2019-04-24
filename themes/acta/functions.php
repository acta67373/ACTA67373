<?php
/**
 * acta functions and definitions
 *
 * @package acta
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'acta_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function acta_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on acta, use a find and replace
	 * to change 'acta' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'acta', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'acta' ),
		'secondary' => __( 'Secondary Menu', 'acta'),
		'footer' => __( 'Footer Menu', 'acta'),
		//Primary repeats in footer.
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'acta_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // acta_setup
add_action( 'after_setup_theme', 'acta_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function acta_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'acta' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'acta_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function acta_scripts() {
	if(is_page_template( 'page-bus-map.php' )){
		wp_enqueue_style( 'acta-leaflet-style', get_template_directory_uri() . '/stylesheets/leaflet.css' );
		wp_enqueue_style( 'acta-busmap-style', get_template_directory_uri() . '/stylesheets/busmap.css' );

		wp_enqueue_script( 'acta-busmap-js', get_template_directory_uri() . '/js/busmap.js', array(), '20150101', true );
		wp_enqueue_script( 'acta-leaflet-js', get_template_directory_uri() . '/js/leaflet.js', array(), '20150101', true );
	}
	else {

	}

	wp_enqueue_style( 'acta-style', get_stylesheet_uri() );
	wp_enqueue_style( 'acta-custom-style', get_template_directory_uri() . '/stylesheets/custom.css' );
	wp_enqueue_style( 'flexslider-css', get_template_directory_uri() . '/stylesheets/flexslider.css' );
	wp_enqueue_style( 'acta-font-awesome-style', get_template_directory_uri() . '/stylesheets/font-awesome/css/font-awesome.min.css' );

	wp_enqueue_script( 'acta-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'acta-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
	wp_enqueue_script( 'flexslider-js', get_template_directory_uri() . '/js/jquery.flexslider-min.js', array(), '20120207', true );
	wp_enqueue_script( 'placeholder-js', get_template_directory_uri() . '/js/jquery.placeholder.min.js', array(), '20120207', true );
	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '20120207', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	//favicons for all devices
  function favicon() {
	  echo 
	    '<link rel="Shortcut Icon" type="image/x-icon" href="' .get_bloginfo('stylesheet_directory').'/images/favicons/favicon.ico" />' . "\n"
	  . '<link rel="apple-touch-icon" sizes="57x57" href="' .get_bloginfo('stylesheet_directory').'/images/favicons/apple-touch-icon-57x57.png" />' . "\n"
    . '<link rel="apple-touch-icon" sizes="60x60" href="' .get_bloginfo('stylesheet_directory').'/images/favicons/apple-touch-icon-60x60.png" />' . "\n"
    . '<link rel="apple-touch-icon" sizes="72x72" href="' .get_bloginfo('stylesheet_directory').'/images/favicons/apple-touch-icon-72x72.png" />' . "\n"
    . '<link rel="apple-touch-icon" sizes="76x76" href="' .get_bloginfo('stylesheet_directory').'/images/favicons/apple-touch-icon-76x76.png" />' . "\n"
    . '<link rel="apple-touch-icon" sizes="114x114" href="' .get_bloginfo('stylesheet_directory').'/images/favicons/apple-touch-icon-114x114.png" />' . "\n"
    . '<link rel="apple-touch-icon" sizes="120x120" href="' .get_bloginfo('stylesheet_directory').'/images/favicons/apple-touch-icon-120x120.png" />' . "\n"
    . '<link rel="apple-touch-icon" sizes="144x144" href="' .get_bloginfo('stylesheet_directory').'/images/favicons/apple-touch-icon-144x144.png" />' . "\n"
    . '<link rel="apple-touch-icon" sizes="152x152" href="' .get_bloginfo('stylesheet_directory').'/images/favicons/apple-touch-icon-152x152.png" />' . "\n"
    . '<link rel="apple-touch-icon" sizes="180x180" href="' .get_bloginfo('stylesheet_directory').'/images/favicons/apple-touch-icon-180x180.png" />' . "\n"
    . '<link rel="icon" type="image/png" href="' .get_bloginfo('stylesheet_directory').'/images/favicons/favicon-32x32.png" sizes="32x32" />' . "\n"
    . '<link rel="icon" type="image/png" href="' .get_bloginfo('stylesheet_directory').'/images/favicons/android-chrome-192x192.png" sizes="192x192" />' . "\n"
    . '<link rel="icon" type="image/png" href="' .get_bloginfo('stylesheet_directory').'/images/favicons/favicon-96x96.png" sizes="96x96" />' . "\n"
    . '<link rel="icon" type="image/png" href="' .get_bloginfo('stylesheet_directory').'/images/favicons/favicon-16x16.png" sizes="16x16" />' . "\n"
    . '<link rel="manifest" href="' .get_bloginfo('stylesheet_directory').'/images/favicons/manifest.json">' . "\n"
    . '<meta name="msapplication-TileColor" content="#ffffff">' . "\n"
    . '<meta name="msapplication-TileImage" content="' .get_bloginfo('stylesheet_directory').'/images/favicons/mstile-144x144.png" />' . "\n"
    . '<meta name="theme-color" content="#ffffff" />'; 
  }
  add_action('wp_head', 'favicon');
}
add_action( 'wp_enqueue_scripts', 'acta_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

add_action( 'after_setup_theme', 'acta_thumb_sizes' );
function acta_thumb_sizes() {
  add_image_size( 'intro-image', 800, false );
  add_image_size( 'slider-thumb', 760, 375, true );
  add_image_size( 'subpage-fc-image', 370, 150, true );
  add_image_size( 'teaser-thumb', 600 );
}

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page('Footer Items');
	acf_add_options_page('Subpage Blocks');
}

//Allow uploading SVGs through the media library
add_filter('upload_mimes','add_custom_mime_types');
	function add_custom_mime_types($mimes){
		return array_merge($mimes,array (
  		'svg' => 'image/svg+xml'
		));
	}
	
//Fix The Events Calendar page title from showing the first event's title:
//define('TRIBE_MODIFY_GLOBAL_TITLE', true);
