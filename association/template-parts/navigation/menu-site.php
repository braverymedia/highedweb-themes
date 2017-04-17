<?php
/**
 * Displays site navigation
 *
 * @package WordPress
 * @subpackage Association
 * @since 1.0
 * @version 1.0
 */

?>
<section id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php _e( 'Site Menu', 'association' ); ?>">
    <?php wp_nav_menu( array(
        'theme_location' => 'site-menu',
        'menu_id'        => 'site-menu',
    ) ); ?>
</section><!-- #site-navigation -->