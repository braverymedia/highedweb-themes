<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package brvry
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<article class="type-page error-404 page">
				<div class="entry-content">
					<header class="page-header">
						<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'brvry' ); ?></h1>
					</header><!-- .page-header -->
				</div><!-- .entry-content -->
			</article><!-- #post-## -->
		</main><!-- #main -->
	</div><!-- #primary -->
	<section id="elsewhere-things">
        <?php get_sidebar(); ?>
    </section>
<?php get_footer(); ?>
