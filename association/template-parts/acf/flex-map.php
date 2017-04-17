<?php
/**
 * Displays an ACF Google Map with pins
 *
 * @package WordPress
 * @subpackage Association
 * @since 1.0
 * @version 1.0
 */


 // Setup our ACF data
 $section_title = get_sub_field('section_title');
 $section_description = get_sub_field('section_description');
?>

<section id="<?php sanitize_title_with_dashes( $section_title ); ?>" class="flex-map content-section">
  <header class="content-section--title">
    <h2><?php echo $section_title; ?></h2>
    <div class="content-section--description">
      <?php echo $section_description; ?>
    </div>
  </header>
    <?php if( have_rows('map') ): ?>
  	<div class="acf-map">
  		<?php while ( have_rows('map') ) : the_row();

  			$location = get_sub_field('location');

  			?>
  			<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
  				<h4><?php the_sub_field('title'); ?></h4>
  				<p class="address"><?php echo $location['address']; ?></p>
  				<p><?php the_sub_field('popover_content'); ?></p>
  			</div>
  	   <?php endwhile; ?>
  	</div>
  <?php endif; ?>
</section>
