<?php
/**
 * Additional features to allow styling of the templates
 *
 * @package WordPress
 * @subpackage Association
 * @since 1.0
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function association_body_classes( $classes ) {
	// Add class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Add class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Add class if we're viewing the Customizer for easier styling of theme options.
	if ( is_customize_preview() ) {
		$classes[] = 'association-customizer';
	}

	// Add class on front page.
	if ( is_front_page() && 'posts' !== get_option( 'show_on_front' ) ) {
		$classes[] = 'association-front-page';
	}

	// Add a class if there is a custom header.
	if ( association_has_acf_header() ) {
		$classes[] = 'has-header-image';
	} else {
		$classes[] = 'no-header-image';
	}

	// Add class if the site title and tagline is hidden.
	if ( 'blank' === get_header_textcolor() ) {
		$classes[] = 'title-tagline-hidden';
	}

	return $classes;
}
add_filter( 'body_class', 'association_body_classes' );

/**
 * Checks to see if we're on the homepage or not.
 */
function association_is_frontpage() {
	return ( is_front_page() && ! is_home() );
}

/**
 * Keeps HTML when auto-generating the_excerpt()
 */
function association_excerpt_markup($text) {
  global $post;
	if ( '' == $text ) {
    $text = get_the_content('');
    $text = apply_filters('the_content', $text);
    $text = str_replace('\]\]\>', ']]&gt;', $text);
    $text = preg_replace('@<script[^>]*?>.*?</script>@si', '', $text);
    $text = strip_tags($text, '<a>');
  }
  return $text;
}
remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'association_excerpt_markup');
