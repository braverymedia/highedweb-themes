<?php
    // Register Custom Post Type
    function heweb_post_types() {

        $labels = array(
            'name'                  => _x( 'Sponsors', 'Post Type General Name', 'brvry' ),
            'singular_name'         => _x( 'Sponsor', 'Post Type Singular Name', 'brvry' ),
            'menu_name'             => __( 'Sponsors', 'brvry' ),
            'name_admin_bar'        => __( 'Sponsor', 'brvry' ),
            'archives'              => __( 'Item Sponsors', 'brvry' ),
            'parent_item_colon'     => __( 'Parent Sponsor:', 'brvry' ),
            'all_items'             => __( 'All Sponsors', 'brvry' ),
            'add_new_item'          => __( 'Add New Sponsor', 'brvry' ),
            'add_new'               => __( 'Add New', 'brvry' ),
            'new_item'              => __( 'New Sponsor', 'brvry' ),
            'edit_item'             => __( 'Edit Sponsor', 'brvry' ),
            'update_item'           => __( 'Update Sponsor', 'brvry' ),
            'view_item'             => __( 'View Sponsor', 'brvry' ),
            'search_items'          => __( 'Search Sponsor', 'brvry' ),
            'not_found'             => __( 'Not found', 'brvry' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'brvry' ),
            'featured_image'        => __( 'Logo', 'brvry' ),
            'set_featured_image'    => __( 'Set logo', 'brvry' ),
            'remove_featured_image' => __( 'Remove logo', 'brvry' ),
            'use_featured_image'    => __( 'Use as logo', 'brvry' ),
            'insert_into_item'      => __( 'Insert into sponsor', 'brvry' ),
            'uploaded_to_this_item' => __( 'Uploaded to this sponsor', 'brvry' ),
            'items_list'            => __( 'Sponsors list', 'brvry' ),
            'items_list_navigation' => __( 'Sponsors list navigation', 'brvry' ),
            'filter_items_list'     => __( 'Filter sponsors list', 'brvry' ),
        );
        $args = array(
            'label'                 => __( 'Sponsor', 'brvry' ),
            'description'           => __( 'Manages Sponsors', 'brvry' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', ),
            'taxonomies'            => array( 'level' ),
            'hierarchical'          => true,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-money',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => false,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'sponsor', $args );

    }
    add_action( 'init', 'heweb_post_types', 0 );

    // Register Custom Taxonomy
    function heweb_taxonomies() {

        $labels = array(
            'name'                       => _x( 'Sponsor Levels', 'Taxonomy General Name', 'brvry' ),
            'singular_name'              => _x( 'Sponsor Level', 'Taxonomy Singular Name', 'brvry' ),
            'menu_name'                  => __( 'Sponsor Level', 'brvry' ),
            'all_items'                  => __( 'All Levels', 'brvry' ),
            'parent_item'                => __( 'Parent Level', 'brvry' ),
            'parent_item_colon'          => __( 'Parent Level:', 'brvry' ),
            'new_item_name'              => __( 'New Level Name', 'brvry' ),
            'add_new_item'               => __( 'Add New Level', 'brvry' ),
            'edit_item'                  => __( 'Edit Level', 'brvry' ),
            'update_item'                => __( 'Update Level', 'brvry' ),
            'view_item'                  => __( 'View Level', 'brvry' ),
            'separate_items_with_commas' => __( 'Separate levels with commas', 'brvry' ),
            'add_or_remove_items'        => __( 'Add or remove levels', 'brvry' ),
            'choose_from_most_used'      => __( 'Choose from the most used', 'brvry' ),
            'popular_items'              => __( 'Popular Levels', 'brvry' ),
            'search_items'               => __( 'Search Levels', 'brvry' ),
            'not_found'                  => __( 'Not Found', 'brvry' ),
            'no_terms'                   => __( 'No levels', 'brvry' ),
            'items_list'                 => __( 'Levels list', 'brvry' ),
            'items_list_navigation'      => __( 'Levels list navigation', 'brvry' ),
        );
        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'show_ui'                    => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => false,
            'show_tagcloud'              => false,
        );
        register_taxonomy( 'levels', array( 'sponsor' ), $args );

    }
    add_action( 'init', 'heweb_taxonomies', 0 );
