<?php
/**
 * Template Name: Sponsor Listing
 *
 * @package brvry
 */

get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'content', 'page' ); ?>

            <?php endwhile; // end of the loop. ?>
        </main><!-- #main -->
    </div><!-- #primary -->
    <?php // start sponsor loop

      $levels = get_terms( array(
        'taxonomy' => 'levels',
        'orderby' => 'menu_order',
        'hide_empty' => true,
      ) );

      foreach ( $levels as $l )  { ?>

      <?php
        $slug = $l->slug;
        $l_name = $l->name;

        $s_args = array(
          'post_type' => 'sponsor',
          'posts_per_page' => -1,
          'orderby' => 'name',
          'order' => 'ASC',
          'tax_query' => array(
            array(
              'taxonomy' => 'levels',
              'field'    => 'slug',
              'terms'    => $slug,
            ),
          )
        );
        $s = new WP_Query($s_args);
        if ( $s->have_posts() ) :
      ?>
      <section class="sponsor-wrap sponsor-<?php echo $slug; ?>">
        <header class="sponsor-title">
          <?php if ( $slug == "creative-partner" ) {
            echo '<h2>' . $l_name . '</h2>';
          } else {
            echo '<h2>' . $l_name . ' Sponsors</h2>';
          } ?>
        </header>
        <?php while ( $s->have_posts() ) : $s->the_post();
          get_template_part('content', 'sponsor');
        endwhile;
        ?>
      </section>
    <?php endif; ?>
    <?php
  }
    ?>
    <section id="elsewhere-things">
        <?php get_sidebar(); ?>
    </section>
<?php get_footer(); ?>
