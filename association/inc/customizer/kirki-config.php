<?php
// Setup configuration
Kirki::add_config( 'association', array(
    'capability'    => 'edit_theme_options',
    'option_type'   => 'theme_mod',
) );

// @TODO add Typekit to Kirki
// require_once get_parent_theme_file_path( '/inc/customizer/kirki-typekit.php' );

Kirki::add_section( 'typography', array(
    'title'          => __( 'Typography' ),
    'description'    => __( 'Choose which service will serve your fonts' ),
    'panel'          => '',
    'priority'       => 100,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

Kirki::add_field( 'association', array(
    'type'      => 'text',
    'settings'  => 'typekit-id',
    'label'     => __( 'Typekit Kit ID', 'association' ),
    'section'   => 'typography',
    'default'   => __( '', 'association' ),
    'priority'  => 30,
) );