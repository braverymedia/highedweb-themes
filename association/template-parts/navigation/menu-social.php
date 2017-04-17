<?php
/**
 * Displays social links
 *
 * @package WordPress
 * @subpackage Association
 * @since 1.0
 * @version 1.0
 */

?>
<section class="social-navigation" role="navigation" aria-label="<?php _e( 'Social Links Menu', 'association' ); ?>">
    <?php
        wp_nav_menu( array(
            'theme_location' => 'social',
            'menu_class'     => 'social-links-menu menu',
            'depth'          => 1,
            'link_before'    => '<span class="screen-reader-text">',
            'link_after'     => '</span>' . association_get_svg( array( 'icon' => 'chain' ) ),
        ) );
    ?>
</section><!-- .social-navigation -->