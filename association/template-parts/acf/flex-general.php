<?php
/**
 * Displays normal WP Content from ACF
 *
 * @package WordPress
 * @subpackage Association
 * @since 1.0
 * @version 1.0
 */
 $section_title = get_sub_field('section_title');
?>
<section id="<?php sanitize_title_with_dashes( $section_title ); ?>" class="flex-general content-section">
  <?php if ( $section_title ) { ?>
    <header class="content-section--title">
      <h2><?php echo $section_title; ?></h2>
    </header>
  <?php } ?>
  <div class="content-section--general entry">
    <?php the_sub_field('section_content'); ?>
  </div>
</section>
