<?php
/**
 * Displays flickr grid if Flickr Justified Grid is active
 *
 * @package WordPress
 * @subpackage Association
 * @since 1.0
 * @version 1.0
 */

 if ( function_exists('fjgwpp_createGallery') ) :
   // Setup ACF data
   $count = get_sub_field('flickr_count');
   $section_title = get_sub_field('section_title');
   $section_description = get_sub_field('section_description');
   $flickr_set = get_sub_field('flickr_image_set');
?>
<section id="<?php sanitize_title_with_dashes( $section_title ); ?>" class="flex-flickr content-section">
  <?php if ( $section_title ) { ?>
    <header class="content-section--title">
      <h2><?php echo $section_title; ?></h2>
      <div class="content-section--description">
        <?php echo $section_description; ?>
      </div>
    </header>
  <?php } ?>
  <div class="content-section--flickr">
    <?php
      $params;
      if ( $flickr_set ) {
        $params .= 'flickr_set id="' . $flickr_set .'" ';
      } else {
        $params .= 'flickr_photostream ';
      }
      if ($count) {
        $params .= 'max_num_photos="' . $count .'" ';
      }
      echo do_shortcode('['. $params .']'); ?>
  </div>
</section>
<?php else :

endif; ?>
