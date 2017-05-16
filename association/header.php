<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Association
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-pageid="<?php the_ID(); ?>">
	<button class="menu-toggle" aria-controls="site-menu-group" aria-expanded="false"><img data-src="<?php echo association_img_path( 'icons/icon-menu.svg' );?>" class="inline-svg menu-icon" /> <span class="screen-reader-text"><?php _e( 'Menu', 'association' ); ?></span></button>
	<section id="masthead">
		<header class="site-branding">
			<div class="site-logo">
				<span class="site-title screen-reader-text"><?php the_title(); ?></span>
				<?php the_custom_logo(); ?>
			</div>
		</header>
		<nav class="site-menu-group">
			<?php if ( has_nav_menu( 'site-menu' ) ) {
				get_template_part( 'template-parts/navigation/menu', 'site' );
			}
			if ( has_nav_menu( 'related-links' ) ) {
				get_template_part( 'template-parts/navigation/menu', 'related' );
			}
			if ( has_nav_menu( 'social' ) ) {
				get_template_part( 'template-parts/navigation/menu', 'social' );
			} ?>
		</nav>
	</section>
	<section id="primary-content">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'association' ); ?></a>
