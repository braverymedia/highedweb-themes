<?php
/**
 * Custom header
 *
 * If our page has a custom header image, we'll use this one.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Association
 * @since 1.0
 * @version 1.0
 */ ?>
<header class="page-header">
  <?php if ( get_header_image() ) : ?>
  <div class="custom-header-image image--fit-container">
      <?php echo association_custom_header(); ?>
  </div>
  <?php endif; ?>
  <div class="intro-text">
    <?php if ( !is_front_page() ) { ?>
      <h1><?php the_title(); ?></h1>
    <?php } ?>
    <?php the_content(); ?>
  </div>
</header>
