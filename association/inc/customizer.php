<?php
/**
 * Association: Customizer
 *
 * @package WordPress
 * @subpackage Association
 * @since 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function association_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'association_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'association_customize_partial_blogdescription',
	) );
}
add_action( 'customize_register', 'association_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Association 1.0
 * @see association_customize_register()
 *
 * @return void
 */
function association_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Association 1.0
 * @see association_customize_register()
 *
 * @return void
 */
function association_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Return whether we're previewing the front page and it's a static page.
 */
function association_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}

/**
 * Bind JS handlers to instantly live-preview changes.
 */
function association_customize_preview_js() {
	wp_enqueue_script( 'association-customize-preview', get_theme_file_uri( '/assets/js/customize-preview.js' ), array( 'customize-preview' ), '1.0', true );
}
add_action( 'customize_preview_init', 'association_customize_preview_js' );

/**
 * Load dynamic logic for the customizer controls area.
 */
function association_panels_js() {
	wp_enqueue_script( 'association-customize-controls', get_theme_file_uri( '/assets/js/customize-controls.js' ), array(), '1.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'association_panels_js' );
