<?php
/**
 * wedding2 functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wedding2
 */

if ( ! function_exists( 'wedding2_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wedding2_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on wedding2, use a find and replace
	 * to change 'wedding2' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'wedding2', get_template_directory() . '/languages' );

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
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'wedding2' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'wedding2_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'wedding2_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wedding2_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wedding2_content_width', 640 );
}
add_action( 'after_setup_theme', 'wedding2_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wedding2_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wedding2' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wedding2_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function wedding2_scripts() {
	wp_enqueue_style( 'wedding2-style', get_stylesheet_uri() );

	wp_enqueue_script( 'wedding2-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'wedding2-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wedding2_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

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

/**
 * Personal Functions
 *
 * 
 */

 /**
 * Add image sizes
 */

 add_action( 'after_setup_theme', 'baw_theme_setup' );
		function baw_theme_setup() {
			add_image_size('xlarge-img', 1800);
			add_image_size('large-img', 1200);
			add_image_size('medium-img', 700);
			add_image_size('medium-thumb-img', 700, 500, array('center','top'));
			add_image_size('small-img', 500);
			add_image_size('xsmall-img', 300);
			add_image_size('large-thumb-img', 500, 350, array('center', 'top'));
			add_image_size('thumb-img', 300, 200, array('center', 'top'));
			add_image_size('thumb-center-medium', 600, 600, array('center', 'center'));
			add_image_size('thumb-center-larg', 900, 900, array('center', 'center'));
		}

 /**
 * Remove Filter
 */
add_filter('show_admin_bar', '__return_false');


/**
 * Script for advanced custom field google map
 */

function my_theme_add_scripts() {
	wp_enqueue_script( 'google-map', 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false', array(), '3', true );
	wp_enqueue_script( 'google-map-init', get_template_directory_uri() . '/library/js/google-maps.js', array('google-map', 'jquery'), '0.1', true );
}
 
add_action( 'wp_enqueue_scripts', 'my_theme_add_scripts' );

