<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package brvry
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>
                <aside class="about-section">
                    <header><h3>About HighEdWeb</h3></header>
                    <?php the_field('home_about'); ?>
                </aside>
		</main><!-- #main -->
	</div><!-- #primary -->
    <section id="elsewhere-things">
        <?php get_sidebar(); ?>
    </section>
<?php get_footer(); ?>