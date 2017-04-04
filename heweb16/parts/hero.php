<?php
/**
 * @package brvry
 */
?>
<section class="hero">
    <?php
        $hero_img = get_field('hero_image');
        $size = 'hero'; // (thumbnail, medium, large, full or custom size)

        if( $hero_img ) {

            echo wp_get_attachment_image( $hero_img, $size );

        }
    ?>
    <span class="color-adjust"></span>
    <div class="page-title">
        <h1><?php the_title(); ?></h1>
        <div class="subhead"><?php the_field('page_subhead'); ?></div>
    </div>
</section>