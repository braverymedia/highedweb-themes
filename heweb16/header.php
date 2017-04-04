<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package brvry
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="https://use.typekit.net/xan6fpt.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header id="masthead" class="site-header primary" role="banner">
	<nav id="site-navigation" class="main-navigation" role="navigation">
		<div class="site-branding">
			<?php if ( is_front_page() ) { ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img data-src="<?php echo brvry_image_path('highedweb-association-wide.svg'); ?>" class="iconic" /></a></h1>
			<?php } else { ?>
				<div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img data-src="<?php echo brvry_image_path('highedweb-association-wide.svg'); ?>" class="iconic" /></a></div>
			<?php } ?>
		</div><!-- .site-branding -->
		<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><img data-src="<?php echo brvry_image_path('menu-md.svg'); ?>" class="iconic" /></button>
		<?php wp_nav_menu( array( 'theme_location' => 'site-menu', 'container' => 'div', ) ); ?>
	</nav><!-- #site-navigation -->
	<?php get_template_part( 'parts/hero' );  ?>
</header><!-- #masthead -->
<section id="page" class="hfeed site">