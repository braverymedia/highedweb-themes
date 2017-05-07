<?php

/**
 * Association functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Association
 * @since 1.0
 */

/**
 * Association only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
    require get_template_directory() . '/inc/back-compat.php';
    return;
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function association_setup() {

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

    add_image_size( 'association-featured-image', 1080, 606, true );

    add_image_size( 'association-hero-image', 2400, 1400, true );

    add_image_size( 'association-hero-image--phone', 800, 1200, true );

    add_image_size( 'association-thumbnail-avatar', 100, 100, true );

    // Set the default content width.
    $GLOBALS['content_width'] = 540;

    // This theme uses wp_nav_menu() in two locations.
    register_nav_menus( array(
        'site-menu'    => __( 'Site Menu', 'association' ),
        'related-links' => __( 'Related Links Menu', 'association' ),
        'social' => __( 'Social Links Menu', 'association' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    /*
     * Enable support for Post Formats.
     *
     * See: https://codex.wordpress.org/Post_Formats
     */
    add_theme_support( 'post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
        'gallery',
        'audio',
    ) );

    // Add theme support for Custom Logo @2x.
    add_theme_support( 'custom-logo', array(
        'flex-width'  => true,
        'width'       => 268,
        'flex-height' => true,
        'height'      => 500,
    ) );

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    /*
     * This theme styles the visual editor to resemble the theme style,
     * specifically font, colors, and column width.
     */
    // add_editor_style( array( 'assets/css/editor-style.css', association_fonts_url() ) );

}
add_action( 'after_setup_theme', 'association_setup' );

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and
 * a 'Continue reading' link.
 *
 * @since Association 1.0
 *
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function association_excerpt_more( $link ) {
    if ( is_admin() ) {
        return $link;
    }

    $link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
        esc_url( get_permalink( get_the_ID() ) ),
        /* translators: %s: Name of current post */
        sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'association' ), get_the_title( get_the_ID() ) )
    );
    return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'association_excerpt_more' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function association_pingback_header() {
    if ( is_singular() && pings_open() ) {
        printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
    }
}
add_action( 'wp_head', 'association_pingback_header' );

/**
 * Display custom color CSS.
 */
function association_colors_css_wrap() {
    if ( 'custom' !== get_theme_mod( 'colorscheme' ) && ! is_customize_preview() ) {
        return;
    }

    require_once( get_parent_theme_file_path( '/inc/color-patterns.php' ) );
    $hue = absint( get_theme_mod( 'colorscheme_hue', 250 ) );
?>
    <style type="text/css" id="custom-theme-colors" <?php if ( is_customize_preview() ) { echo 'data-hue="' . $hue . '"'; } ?>>
        <?php echo association_custom_colors_css(); ?>
    </style>
<?php }
add_action( 'wp_head', 'association_colors_css_wrap' );

/**
 * Enqueue scripts and styles.
 */
function association_scripts() {

    // Theme version for cache busting
    $theme = wp_get_theme();
    $theme_version = $theme->get( 'Version' );
    $typekit_id = get_theme_mod( 'typekit-id', '' );
    $google_api = get_field('google_maps_api_key', 'option');

    wp_enqueue_script('modernizr', get_stylesheet_directory_uri() . '/assets/js/min/modernizr.min.js', false, '3.5.0', false);

    if ( !empty( $typekit_id ) ) {
        wp_enqueue_script( 'typekit', '//use.typekit.net/'. $typekit_id .'.js', array(), false );
    }
    wp_enqueue_script( 'svg-injector', get_stylesheet_directory_uri() . '/assets/js/min/svg-injector.min.js', false, '1.1.3', false );

    // Theme stylesheet.
    wp_enqueue_style( 'association-style', get_stylesheet_directory_uri() . '/assets/css/association.css', false, $theme_version, 'all' );

    $association_l10n = array(
        'quote'          => association_get_svg( array( 'icon' => 'quote-right' ) ),
    );
    // wp_enqueue_script( 'jquery-scrollto', get_theme_file_uri( '/assets/js/jquery.scrollTo.js' ), array( 'jquery' ), '2.1.2', true );
    wp_enqueue_script( 'association-global', get_theme_file_uri( '/assets/js/min/global.min.js' ), array( 'jquery' ), '1.0', true );

    // Google Maps
    if ( association_has_layout('association_map') && !empty($google_api) ) {
      wp_enqueue_script('googlemaps-api', 'https://maps.googleapis.com/maps/api/js?key=' . $google_api , false, false, true);
      wp_enqueue_script('acf-map', get_stylesheet_directory_uri().'/assets/js/min/acf-map.min.js', array('jquery'), false, true);
    }
    if ( association_has_layout( 'association_twitter_feed' ) ) {
      wp_enqueue_script('tweetie', get_stylesheet_directory_uri() . '/inc/tweetie/min/tweetie.min.js', array('jquery'), false, true );
      // Tweetie API data
      $tweetie_api = array(
      	'apiPath' => get_stylesheet_directory_uri() . '/inc/tweetie/api/tweet.php',
      );
      wp_localize_script('tweetie', 'tweetie_api', $tweetie_api);
      wp_enqueue_script('twitter-feed', get_stylesheet_directory_uri() . '/assets/js/min/twitter-feed.min.js', array('tweetie'), false, true );
    }

}
add_action( 'wp_enqueue_scripts', 'association_scripts' );

/**
 * If the typekit scrip gets enqueued, inline this one too.
 * inline script.
 *
 * @todo Replace prefix with your theme or plugin prefix
 */
function association_typekit_inline() {
    if ( wp_script_is( 'typekit', 'enqueued' ) ) {
        echo '<script>try{Typekit.load({ async: true });}catch(e){}</script>';
    }
}
add_action( 'wp_head', 'association_typekit_inline' );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images.
 *
 * @since association 1.0
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function association_content_image_sizes_attr( $sizes, $size ) {
    $width = $size[0];

    if ( 740 <= $width ) {
        $sizes = '(max-width: 706px) 89vw, (max-width: 767px) 82vw, 740px';
    }

    if ( is_active_sidebar( 'sidebar-1' ) || is_archive() || is_search() || is_home() || is_page() ) {
        if ( ! ( is_page() && 'one-column' === get_theme_mod( 'page_options' ) ) && 767 <= $width ) {
             $sizes = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
        }
    }

    return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'association_content_image_sizes_attr', 10, 2 );

/**
 * Filter the `sizes` value in the header image markup.
 *
 * @since association 1.0
 *
 * @param string $html   The HTML image tag markup being filtered.
 * @param object $header The custom header object returned by 'get_custom_header()'.
 * @param array  $attr   Array of the attributes for the image tag.
 * @return string The filtered header image HTML.
 */
function association_header_image_tag( $html, $header, $attr ) {
    if ( isset( $attr['sizes'] ) ) {
        $html = str_replace( $attr['sizes'], '100vw', $html );
    }
    return $html;
}
add_filter( 'get_header_image_tag', 'association_header_image_tag', 10, 3 );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails.
 *
 * @since association 1.0
 *
 * @param array $attr       Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size       Registered image size or flat array of height and width dimensions.
 * @return string A source size value for use in a post thumbnail 'sizes' attribute.
 */
function association_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
    if ( is_archive() || is_search() || is_home() ) {
        $attr['sizes'] = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
    } else {
        $attr['sizes'] = '100vw';
    }

    return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'association_post_thumbnail_sizes_attr', 10, 3 );

/**
 * Use front-page.php when Front page displays is set to a static page.
 *
 * @since Association 1.0
 *
 * @param string $template front-page.php.
 *
 * @return string The template to be used: blank if is_home() is true (defaults to index.php), else $template.
 */
function association_front_page_template( $template ) {
    return is_home() ? '' : $template;
}
add_filter( 'frontpage_template',  'association_front_page_template' );

/**
 * ACF Settings and stuff.
 */
require get_parent_theme_file_path( '/inc/acf/acf-settings.php' );

/**
 * Custom template tags for this theme.
 */
require get_parent_theme_file_path( '/inc/template-tags.php' );

/**
 * Additional features to allow styling of the templates.
 */
require get_parent_theme_file_path( '/inc/template-functions.php' );

/**
 * REST API modifications
 */
require get_parent_theme_file_path( '/inc/rest-api.php' );

/**
 * Integrate Kirki for customizer
 */
require get_parent_theme_file_path( '/inc/include-kirki.php' );
require get_parent_theme_file_path( '/inc/customizer/kirki-config.php' );

/**
 * Customizer additions.
 */
require get_parent_theme_file_path( '/inc/customizer.php' );

/**
 * SVG icons functions and filters.
 */
require get_parent_theme_file_path( '/inc/icon-functions.php' );

/**
 * Extra configurations.
 */
require get_parent_theme_file_path( '/inc/extras.php' );

/**
 * Shortcodes.
 */
require get_parent_theme_file_path( '/inc/shortcode.php' );

/**
 * Tweetie Twitter API.
 */
require get_parent_theme_file_path( '/inc/tweetie/api/config.php' );
