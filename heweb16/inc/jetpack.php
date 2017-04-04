<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package brvry
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function brvry_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'brvry_jetpack_setup' );

function brvry_jetpack_remove_share() {
    remove_filter( 'the_content', 'sharing_display',19 );
    remove_filter( 'the_excerpt', 'sharing_display',19 );
    if ( class_exists( 'Jetpack_Likes' ) ) {
        remove_filter( 'the_content', array( Jetpack_Likes::init(), 'post_likes' ), 30, 1 );
    }
}

// Add a spotify link to the grid
function jetpackme_spotify_icon( $html_array ) {
    return
        $html_array +
        array(
            100 =>    // This key can be modified to change the order the new item will appear in the list
                '<a title="#heweb16 Spotify Playlist" '
                . 'href="https://open.spotify.com/user/highedwebtunes/playlist/2BMP1afOczvpRIhXfYqMbC" '
                . 'class="genericon genericon-spotify" target="_blank">'
                . '<span class="screen-reader-text">#heweb16 Spotify playlist</span></a>'
        );
}
add_filter( 'jetpack_social_media_icons_widget_array', 'jetpackme_spotify_icon' );

// Add a flickr link to the grid
function jetpackme_flickr_icon( $html_array ) {
    return
        $html_array +
        array(
            50 =>    // This key can be modified to change the order the new item will appear in the list
                '<a title="HighEdWeb Photos on Flickr" '
                . 'href="https://www.flickr.com/photos/highedweb" '
                . 'class="genericon genericon-flickr" target="_blank">'
                . '<span class="screen-reader-text">HighEdWeb Photos on Fickr</span></a>'
        );
}
// add_filter( 'jetpack_social_media_icons_widget_array', 'jetpackme_flickr_icon' );


// add_action( 'loop_start', 'brvry_jetpack_remove_share' );
