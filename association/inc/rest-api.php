<?php
/**
 * Add fields and data to default REST API
 *
 * @package WordPress
 * @subpackage Association
 * @since 1.0
 */


/**
 * Prep JSON for custom header images
 */

 if ( class_exists('CHE_Custom_Headers') ) {
   add_action( 'rest_api_init', 'association_custom_header_rest', 1, 1 );
 }

 function association_custom_header_rest() {

     // Add the plaintext content to GET requests for individual posts
     register_rest_field(
         'page',
         'custom_header',
         array(
             'get_callback'    => 'association_return_custom_header',
         )
     );
 }

 // Return custom header sizes.
 function association_return_custom_header( $object, $field_name, $request ) {

   $json_prep = array();

   // Setup the custom header ID
   $hero_id = get_post_meta( $object['id'], '_custom_header_image_id', true );

   // hero sizes
   $hero_sizes = get_intermediate_image_sizes($hero_id);
   foreach ( $hero_sizes as $size ) {
     $src =  wp_get_attachment_image_src( $hero_id, $size, false );
     $json_prep[$size] = $src[0];
   }

   return $json_prep;
 }
