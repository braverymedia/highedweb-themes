<?php
/**
 * brvry functions and definitions
 *
 * @package brvry
 */

/**
 * Load Backbone util functions
 */
// require get_template_directory() . '/inc/utils.php';

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'brvry_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function brvry_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on brvry, use a find and replace
	 * to change 'brvry' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'brvry', get_template_directory() . '/languages' );

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
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'hero', 1800, 10000, false );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'site-menu' => __( 'Site Menu', 'brvry' ),
		'social-links' => __( 'Social Links', 'brvry' ),
		'footer-menu' => __( 'Footer Menu', 'brvry' )
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
	add_theme_support( 'custom-background', apply_filters( 'brvry_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // brvry_setup
add_action( 'after_setup_theme', 'brvry_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function brvry_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Page Widgets', 'brvry' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<article id="%1$s" class="widget %2$s">',
		'after_widget'  => '</article>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'brvry_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function brvry_scripts() {
	$theme = wp_get_theme();
	$theme_version = $theme->get( 'Version' );
	wp_enqueue_script('modernizr', get_stylesheet_directory_uri() . '/js/vendor/modernizr.min.js', false, '3.3.1', false);
	// wp_enqueue_script('fast-fonts', 'http://fast.fonts.net/jsapi/8f6ec1dc-b0ee-4438-96a1-f7374ecc05b1.js');
	wp_enqueue_style( 'brvry-style', get_stylesheet_uri(), false, $theme_version, 'all' );
	wp_enqueue_script('jquery');
	/* Iconic JS for SVG icons */
	wp_enqueue_script( 'iconic', get_stylesheet_directory_uri() . '/js/iconic.min.js', array(), '0.4.2', false );
	wp_enqueue_script('heweb16', get_stylesheet_directory_uri() . '/js/min/heweb16.min.js', array('jquery'), $theme_version, true);
	// wp_enqueue_script( 'brvry-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'brvry-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'brvry_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom post types for this theme.
 */
require get_template_directory() . '/inc/post-types.php';

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
 * Custom shortcodes this theme.
 */
require get_template_directory() . '/inc/shortcodes.php';