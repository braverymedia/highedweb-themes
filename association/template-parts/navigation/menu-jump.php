<?php
/**
 * Smooth scroll menu
 *
 * @package WordPress
 * @subpackage Association
 * @since 1.0
 * @version 1.0
 */


 // Prep some ACF SQLiteUnbuffered

 $menu_title = get_field('menu_heading');
 $source = get_field("link_source");

 if ( $source == 'automatic' ) {

 } else {

 }

?>
<div id="jump-menu">
  <?php if ( $menu_title ) {
    echo '<h5>'. $menu_title .'</h5>';
  } ?>


</div>
