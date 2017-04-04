<?php
    // undo stuff!
    function heweb17_undo_stuff() {
        remove_theme_support('custom-logo');
        add_theme_support( 'custom-logo', array(
            'width'       => 450,
            'height'      => 840,
            'flex-width'  => false,
            'flex-height' => true
        ) );
    }
    // have to do it on init to override parent theme
    add_action( 'init', 'heweb17_undo_stuff' );

    /**
     * TypeKit Fonts
     *
     * @since Theme 1.0
     */
    function hew_typekit() {
        wp_enqueue_script( 'hew_typekit', '//use.typekit.net/lyx2dvr.js');
    }
    add_action( 'wp_enqueue_scripts', 'hew_typekit' );

    function hew_typekit_inline() {
      if ( wp_script_is( 'hew_typekit', 'done' ) ) { ?>
        <script type="text/javascript">try{Typekit.load({ async: true });}catch(e){}</script>
        <?php }
    }
    add_action( 'wp_head', 'hew_typekit_inline' );

    function hew_enqueue_styles() {

        $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

        wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'child-style',
            get_stylesheet_directory_uri() . '/style.css',
            array( $parent_style ),
            wp_get_theme()->get('Version')
        );
    }
    add_action( 'wp_enqueue_scripts', 'hew_enqueue_styles' );

    /**
     * Register new widget areas.
     *
     * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
     */
    function hew_widgets_init() {
        register_sidebar( array(
            'name'          => __( 'Homepage Full-width', 'hew17' ),
            'id'            => 'home-widgets',
            'description'   => __( 'Add widgets here to appear on your homepage.', 'hew17' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ) );
    }
    add_action( 'widgets_init', 'hew_widgets_init' );
?>