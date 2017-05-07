<?php
/**
 * Template Name: Schedule (elm)
 *
 * Displays the schedule with customizing tools.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Association
 * @since 1.0
 * @version 1.0
 */

 get_header(); ?>
   <main id="main" class="site-main" role="main">
    <?php
       while ( have_posts() ) : the_post();

         if ( association_has_acf_header() ) {
           get_template_part( 'template-parts/custom-header/hero' );
         } else {
           get_template_part( 'template-parts/page/content', 'page' );
         }
       endwhile;

       // Grab our schedule Markup
       get_template_part('template-parts/schedule/content', 'schedule');
    ?>

    </main><!-- #main -->
 <?php get_footer();
