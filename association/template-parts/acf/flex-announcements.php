<?php
/**
 * Displays a newsfeed from Posts
 *
 * @package WordPress
 * @subpackage Association
 * @since 1.0
 * @version 1.0
 */

 // First, let's setup our ACF params.
 $item_count = get_sub_field('item_count');
 if ( empty($item_count) ) {
   $item_count = 2;
 }
 $section_title = get_sub_field('section_title');

 // Setup our posts query
 $a_args = array(
   'post_type' => 'post',
   'posts_per_page' => $item_count
 );
 $a = new WP_Query($a_args);

 if ( $a->have_posts() ) :
?>
<section id="<?php sanitize_title_with_dashes( $section_title ); ?>" class="flex-newsfeed content-section">
  <header class="content-section--title">
    <h2><?php echo $section_title; ?></h2>
  </header>
  <?php while ( $a->have_posts() ) : ?>
  <div class="news-articles">
    <?php $a->the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="post--image-heading">
          <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail('large');
          } ?>
          <h3 class="post--title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
        </header>
        <div class="entry">
          <?php the_excerpt(); ?>
        </div>
      </article>
    <?php endwhile; wp_reset_postdata(); ?>
  </div>
</section>
<?php endif; ?>
