<?php
/**
 * Displays a Tweetie twitter feed
 *
 * @package WordPress
 * @subpackage Association
 * @since 1.0
 * @version 1.0
 */

  // Let's setup ACF data first
  $section_title = get_sub_field('section_title');
  $twitter_name = get_sub_field('twitter_name');
  $twitter_count = get_sub_field('tweet_count');
  $twitter_hashtag = get_sub_field('hashtag');
  $section_bg = get_sub_field('background_image');

  $twitter_data = array(
    'name' => $twitter_name,
    'count' => $twitter_count,
    'hashtag' => $twitter_hashtag
  );
  $td = json_encode($twitter_data);
?>

<section id="<?php echo sanitize_title_with_dashes( $section_title ); ?>" class="flex-twitter content-section" data-twitterapi='<?php echo $td; ?>'>
  <div class="content-section--background-image image--fit-container">
    <?php echo wp_get_attachment_image( $section_bg, 'association-featured-image', false ); ?>
  </div>
  <header class="content-section--title">
    <h2><?php echo $section_title; ?></h2>
    <a href="https://twitter.com/intent/user?screen_name=<?php echo $twitter_name; ?>" title="Follow @<?php echo $twitter_name; ?> on Twitter" class="twitter-button"><?php echo association_get_svg(array( 'icon' => 'twitter-bird' )); ?> Follow @<?php echo $twitter_name; ?></a>
  </header>
  <div id="twitter-grid"></div>
</section>
