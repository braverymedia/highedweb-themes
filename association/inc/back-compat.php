<?php
/**
 * Assocation back compat functionality (based on Association)
 *
 * Prevents Association from running on WordPress versions prior to 4.7,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.7.
 *
 * @package WordPress
 * @subpackage Association
 * @since Association 1.0
 */

/**
 * Prevent switching to Assocaition on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since association 1.0
 */
function association_switch_theme() {
	switch_theme( WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'association_upgrade_notice' );
}
add_action( 'after_switch_theme', 'association_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * Association on WordPress versions prior to 4.7.
 *
 * @since Association 1.0
 *
 * @global string $wp_version WordPress version.
 */
function association_upgrade_notice() {
	$message = sprintf( __( 'Association requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'association' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.7.
 *
 * @since Association 1.0
 *
 * @global string $wp_version WordPress version.
 */
function association_customize() {
	wp_die( sprintf( __( 'Association requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'association' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'association_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.7.
 *
 * @since Association 1.0
 *
 * @global string $wp_version WordPress version.
 */
function association_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'Association requires at least WordPress version 4.7. You are running version %s. Please upgrade and try again.', 'association' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'association_preview' );
