<?php
/**
 * Displays normal WP Content from ACF
 *
 * @package WordPress
 * @subpackage Association
 * @since 1.0
 * @version 1.0
 */
?>
<section id="<?php sanitize_title_with_dashes( $section_title ); ?>" class="flex-general content-section">
  <div class="content-section--general entry">
    <?php the_sub_field('section_content'); ?>
  </div>
</section>
