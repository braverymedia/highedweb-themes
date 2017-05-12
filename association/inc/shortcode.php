<?php
/**
 * Shortcodes to use
 *
 * @package WordPress
 * @subpackage Association
 * @since 1.0
 */


/*
 * Shortcake!
 */
add_action( 'init', 'association_shortcode_ui_dev_register_shortcodes' );
function association_shortcode_ui_dev_register_shortcodes() {

	add_shortcode( 'hew-button', 'association_shortcode_ui_button_shortcode' );

}

add_action( 'register_shortcode_ui', 'association_button_shortcode_ui' );
function association_button_shortcode_ui() {
	$fields = array(
    array(
			'label'    => esc_html__( 'Button Label', 'association' ),
			'attr'     => 'label',
			'type'     => 'text',
		),
    array(
			'label'    => esc_html__( 'Button Link', 'association' ),
			'attr'     => 'url',
			'type'     => 'url',
		),
    array(
			'label'    => esc_html__( 'Link Target', 'association' ),
			'attr'     => 'target',
			'type'        => 'select',
			'options'     => array(
				array( 'value' => '', 'label' => esc_html__( 'None', 'association' ) ),
				array( 'value' => '_self', 'label' => esc_html__( '_self', 'association' ) ),
				array( 'value' => '_blank', 'label' => esc_html__( '_blank', 'association' ) ),
				),
			),
		);
	/*
	 * Define the Shortcode UI arguments.
	 */
	$shortcode_ui_args = array(

		'label' => esc_html__( 'Button', 'association' ),
		'listItemImage' => 'dashicons-marker',
		'attrs' => $fields,
	);
	shortcode_ui_register_for_shortcode( 'hew-button', $shortcode_ui_args );
}

/*
 * 3. Define the callback for the advanced shortcode.
 */
function association_shortcode_ui_button_shortcode( $attr, $content, $shortcode_tag ) {
	$attr = shortcode_atts( array(
    'label' => '',
    'url'     => '',
		'target' => ''
	), $attr, $shortcode_tag );
	ob_start();
	?>
  <a href="<?php echo $attr['url']; ?>" <?php if ( !empty( $attr['target'] ) ) { ?>target="<?php echo $attr['target']; ?>"<?php } ?> class="button"><?php echo $attr['label']; ?></a>
	<?php
	return ob_get_clean();
}
