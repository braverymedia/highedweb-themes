<?php
/**
 * Displays related links navigation
 *
 * @package WordPress
 * @subpackage Association
 * @since 1.0
 * @version 1.0
 */

?>
<section class="related-links" role="navigation" aria-label="<?php _e( 'Related Links Menu', 'association' ); ?>">
    <?php wp_nav_menu( array(
        'theme_location' => 'related-links',
        'menu_id'        => 'related-links',
    ) ); ?>
</section>