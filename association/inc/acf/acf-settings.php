<?php
/**
 * ACF Settings
 *
 * @package WordPress
 * @subpackage Association
 * @since 1.0
 */

 if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Global Theme Settings',
		'menu_title'	=> 'Theme Config',
		'menu_slug' 	=> 'theme-config',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

  // Google Maps Key
  add_filter('acf/settings/google_api_key', function () {
    return get_field('google_maps_api_key', 'option');
  });

  function association_flex_content() {
    if ( have_rows('content_sections') ) : while ( have_rows('content_sections') ) : the_row();
      if ( get_row_layout() == 'association_announcements' ) :
          get_template_part('template-parts/acf/flex', 'announcements');

        elseif ( get_row_layout() == 'association_map' ) :
          get_template_part('template-parts/acf/flex', 'map');

        elseif ( get_row_layout() == 'association_video' ) :
          get_template_part('template-parts/acf/flex', 'video');

        elseif ( get_row_layout() == 'association_flickr' ) :
          get_template_part('template-parts/acf/flex', 'flickr');

        elseif ( get_row_layout() == 'association_twitter_feed' ) :
          get_template_part('template-parts/acf/flex', 'twitter');

        elseif ( get_row_layout() == 'association_callout' ) :
          get_template_part('template-parts/acf/flex', 'callout');

        elseif ( get_row_layout() == 'association_content' ) :
          get_template_part('template-parts/acf/flex', 'general');

      endif;

    endwhile; endif;
  }

  // check for specific layout
  function association_has_layout($layout) {
    $flexes = get_field('content_sections');
    if ( $flexes ) {
      foreach($flexes as $key => $flex) {
        if ( $flex['acf_fc_layout'] === $layout ) {
          $flag = true;
        }
      }
    }
    return $flag;
  }

  // ACF Custom Header
  function association_custom_header() {
    global $post;
    $attachment_id = get_field('header_image', $post->ID);
    $video_url = get_field('header_video', $post->ID);

    if ( $attachment_id && empty($video_url) ) {
      return wp_get_attachment_image($attachment_id, 'association-hero-image', false);
    }
    elseif ( $video_url ) {
      return wp_oembed_get( $video_url );
    } elseif ( jetpack_is_mobile() ) {
      return wp_get_attachment_image($attachment_id);
    }
    return;
  }

  // Custom header template helper
  function association_has_acf_header() {
    global $post;
    $attachment_id = get_field('header_image', $post->ID);
    $video_url = get_field('header_video', $post->ID);
    if ( $attachment_id || $video_url ) {
      return true;
    }
    return;
  }
}
