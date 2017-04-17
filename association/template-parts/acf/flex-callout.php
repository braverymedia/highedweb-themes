<?php
/**
 * Displays a callout block
 *
 * @package WordPress
 * @subpackage Association
 * @since 1.0
 * @version 1.0
 */

 // Setup ACF data
 $content = get_sub_field('section_content');
 $image = get_sub_field('section_image');
 $color_theme = get_sub_field('color_theme');

?>
<section id="<?php sanitize_title_with_dashes( $section_title ); ?>" class="flex-callout content-section<?php if($color_theme) { echo ' '. $color_theme; } ?>">
  <div class="content-section--callout">
    <figure class="callout-image-frame">
      <?php echo wp_get_attachment_image($image, 'large', false); ?>
    </figure>
    <section class="entry">
      <?php the_sub_field('section_content'); ?>
    </section>
  </div>
</section>
