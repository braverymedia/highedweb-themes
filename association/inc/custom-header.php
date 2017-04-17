<?php
/**
 * Custom header implementation
 *
 * @link https://codex.wordpress.org/Custom_Headers
 *
 * @package WordPress
 * @subpackage Association
 * @since 1.0
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses association_header_style()
 */
function association_custom_header_setup() {

	/**
	 * Filter Association custom-header support arguments.
	 *
	 * @since Association 1.0
	 *
	 * @param array $args {
	 *     An array of custom-header support arguments.
	 *
	 *     @type string $default-image     		Default image of the header.
	 *     @type string $default_text_color     Default color of the header text.
	 *     @type int    $width                  Width in pixels of the custom header image. Default 954.
	 *     @type int    $height                 Height in pixels of the custom header image. Default 1300.
	 *     @type string $wp-head-callback       Callback function used to styles the header image and text
	 *                                          displayed on the blog.
	 *     @type string $flex-height     		Flex support for height of header.
	 * }
	 */
	add_theme_support( 'custom-header', apply_filters( 'association_custom_header_args', array(
		'default-image'      => get_parent_theme_file_uri( '/assets/images/header.jpg' ),
		'width'              => 2400,
		'height'             => 1400,
		'flex-height'        => true,
		'video'              => true,
		'wp-head-callback'   => 'association_header_style',
	) ) );
}
add_action( 'after_setup_theme', 'association_custom_header_setup' );

if ( ! function_exists( 'association_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog.
 *
 * @see association_custom_header_setup().
 */
function association_header_style() {
	$header_text_color = get_header_textcolor();

	// If no custom options for text are set, let's bail.
	// get_header_textcolor() options: add_theme_support( 'custom-header' ) is default, hide text (returns 'blank') or any hex value.
	if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
		return;
	}

	// If we get this far, we have custom styles. Let's do this.
	?>
	<style id="association-custom-header-styles" type="text/css">
	<?php
		// Has the text been hidden?
		if ( 'blank' === $header_text_color ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
		// If the user has set a custom color for the text use that.
		else :
	?>
		.site-title a,
		.colors-dark .site-title a,
		.colors-custom .site-title a,
		body.has-header-image .site-title a,
		body.has-header-video .site-title a,
		body.has-header-image.colors-dark .site-title a,
		body.has-header-video.colors-dark .site-title a,
		body.has-header-image.colors-custom .site-title a,
		body.has-header-video.colors-custom .site-title a,
		.site-description,
		.colors-dark .site-description,
		.colors-custom .site-description,
		body.has-header-image .site-description,
		body.has-header-video .site-description,
		body.has-header-image.colors-dark .site-description,
		body.has-header-video.colors-dark .site-description,
		body.has-header-image.colors-custom .site-description,
		body.has-header-video.colors-custom .site-description {
			color: #<?php echo esc_attr( $header_text_color ); ?>;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif; // End of association_header_style.

/**
 * Customize video play/pause button in the custom header.
 */
function association_video_controls( $settings ) {
	$settings['l10n']['play'] = '<span class="screen-reader-text">' . __( 'Play background video', 'association' ) . '</span>' . association_get_svg( array( 'icon' => 'play' ) );
	$settings['l10n']['pause'] = '<span class="screen-reader-text">' . __( 'Pause background video', 'association' ) . '</span>' . association_get_svg( array( 'icon' => 'pause' ) );
	return $settings;
}
add_filter( 'header_video_settings', 'association_video_controls' );
