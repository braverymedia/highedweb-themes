<?php
/**
 * Template Name: Schedule Demo
 *
 * @package brvry
 */

get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
          <div class="schedule-tools">
              <a class="button conf-evaluation-trigger" href="https://www.surveymonkey.com/r/NM7R8K6">Evaluate The Conference</a>
              <ul id="schedule-edit-btns" class="schedule-edit-btns button-group">
                <li><a class="button sch-edit" href="#">Edit Schedule</a></li>
                <li><a class="button sch-reset" href="#">Reset Schedule</a></li>
                <li><a class="button sch-academies" href="#">Hide Academies</a></li>
                <li><a class="button sch-workshops" href="#">Hide Workshops</a></li>
              </ul>
          </div>
          <?php
            // Tablet and desktop schedule
            get_template_part('parts/desktop', 'schedule');

            // Mobile display
            get_template_part('parts/mobile', 'schedule');
          ?>
        </main><!-- #main -->
    </div><!-- #primary -->
    <section id="conference" class="sponsor-info about-conference">
        <h2>Annual Conference</h2>
        <?php the_field('annual_conference'); ?>
    </section>
    <section id="attendees" class="sponsor-info attendees">
        <h2>Attendees</h2>
        <?php the_field('attendees_copy'); ?>
    </section>
    <section id="institutions" class="sponsor-info institutions">
        <h2>Institutions</h2>
        <?php the_field('institutions_copy'); ?>
    </section>
    <section id="sponsorship-packages" class="sponsor-info sponsor-group">
        <header class="package-intro introduction">
            <h2><?php the_field('package_introduction_title'); ?></h2>
            <article class="intro-copy">
                <?php the_field('package_introduction_copy'); ?>
            </article>
        </header>
        <div class="sponsor-package-details">
            <article class="sponsor-package platinum">
                <header>
                    <div class="price-cluster">
                        <h3><?php the_field('title_platinum'); ?></h3>
                        <span class="price"><?php the_field('price_platinum'); ?></span>
                        <?php
                            $availability = get_field('availability_platinum');
                            if ( $availability ) {?>
                                <span class="availability">(<?php echo $availability; ?> Available)</span>
                        <?php } ?>
                    </div>
                </header>
                <?php
                    $bg_image = get_field('image_platinum');
                    $size = 'large';
                    $src = wp_get_attachment_image_src( $bg_image, $size, false );
                ?>
                <div class="description" style="background-image: url(<?php echo $src[0]; ?>);">
                    <?php the_field('description_platinum'); ?>
                </div>
                <div class="benefits">
                    <h2>Benefits</h2>
                    <?php the_field('benefits_list_platinum'); ?>
                </div>
                <?php if ( have_rows('event_platinum') ) : while ( have_rows('event_platinum') ) : the_row(); ?>
                    <div class="opportunity">
                        <header>
                            <h3><?php the_sub_field('event_title'); ?></h3>
                            <?php
                            $availability = get_sub_field('event_availability');
                            if ( $availability ) {?>
                                <p class="subhead availability">(<?php echo $availability; ?> Available)</p>
                        <?php } ?>
                        </header>
                        <?php
                            $text = get_sub_field('event_benefits');
                            $list = explode(PHP_EOL, $text);
                            if ( $list ) :
                                echo '<ul>';
                                foreach ($list as $line) {
                                    echo '<li>' . $line . '</li>';
                                }
                                echo '</ul>';
                            endif;
                        ?>
                    </div>
                <?php endwhile; endif; ?>
            </article>
            <article class="sponsor-package gold">
                <header>
                    <div class="price-cluster">
                        <h3><?php the_field('title_gold'); ?></h3>
                        <span class="price"><?php the_field('price_gold'); ?></span>
                        <?php
                            $availability = get_field('availability_gold');
                            if ( $availability ) {?>
                                <span class="availability">(<?php echo $availability; ?> Available)</span>
                        <?php } ?>
                    </div>
                </header>
                <?php
                    $bg_image = get_field('image_gold');
                    $size = 'large';
                    $src = wp_get_attachment_image_src( $bg_image, $size, false );
                ?>
                <div class="description" style="background-image: url(<?php echo $src['url']; ?>);">
                    <?php the_field('description_gold'); ?>
                </div>
                <div class="benefits">
                    <h2>Benefits</h2>
                    <?php the_field('benefits_list_gold'); ?>
                </div>
            </article>
            <article class="sponsor-package silver">
                <header>
                    <div class="price-cluster">
                        <h3><?php the_field('title_silver'); ?></h3>
                        <span class="price"><?php the_field('price_silver'); ?></span>
                    </div>
                </header>
                <?php
                    $bg_image = get_field('image_silver');
                    $size = 'large';
                    $src = wp_get_attachment_image_src( $bg_image, $size, false );
                ?>
                <div class="description" style="background-image: url(<?php echo $src['url']; ?>);">
                    <?php the_field('description_silver'); ?>
                </div>
                <div class="benefits">
                    <h2>Benefits</h2>
                    <?php the_field('benefits_list_silver'); ?>
                </div>
            </article>
            <article class="sponsor-package bronze">
                <header>
                    <div class="price-cluster">
                        <h3><?php the_field('title_bronze'); ?></h3>
                        <span class="price"><?php the_field('price_bronze'); ?></span>
                    </div>
                </header>
                <?php
                    $bg_image = get_field('image_bronze');
                    $size = 'large';
                    $src = wp_get_attachment_image_src( $bg_image, $size, false );
                ?>
                <div class="description" style="background-image: url(<?php echo $src['url']; ?>);">
                    <?php the_field('description_bronze'); ?>
                </div>
                <div class="benefits">
                    <h2>Benefits</h2>
                    <?php the_field('benefits_list_bronze'); ?>
                </div>
            </article>
            <article class="sponsor-package academy">
                <header>
                    <div class="price-cluster">
                        <h3><?php the_field('title_academy'); ?></h3>
                        <span class="price"><?php the_field('price_academy'); ?></span>
                    </div>
                </header>
                <?php
                    $bg_image = get_field('image_academy');
                    $size = 'large';
                    $src = wp_get_attachment_image_src( $bg_image, $size, false );
                ?>
                <div class="description" style="background-image: url(<?php echo $src['url']; ?>);">
                    <?php the_field('description_academy'); ?>
                </div>
                <div class="benefits">
                    <h2>Benefits</h2>
                    <?php the_field('benefits_list_academy'); ?>
                </div>
            </article>
            <article class="sponsor-package opportunities">
                <header>
                    <div class="price-cluster">
                        <h3>Additional Opportunities</h3>
                    </div>
                </header>
                <div class="description">
                    <?php the_field('description_additional_opps'); ?>
                </div>
                <?php if ( have_rows('additional_opps') ) : while ( have_rows('additional_opps') ) : the_row(); ?>
                    <div class="opportunity">
                        <header>
                            <h3><?php the_sub_field('opportunity_title'); ?></h3>
                            <p class="price"><?php the_sub_field('opportunity_price'); ?>
                            <?php
                            $availability = get_sub_field('opportunity_availability');
                            if ( $availability ) {?>
                                <p class="subhead availability">(<?php echo $availability; ?> Available)</p>
                        <?php } ?>
                        </header>
                        <p><?php the_sub_field('opportunitydescription'); ?>
                        <?php
                            $text = get_sub_field('opportunity_benefits');
                            $list = explode(PHP_EOL, $text);
                            if ( $list ) :
                                echo '<ul>';
                                foreach ($list as $line) {
                                    echo '<li>' . $line . '</li>';
                                }
                                echo '</ul>';
                            endif;
                        ?>
                    </div>
                <?php endwhile; endif; ?>
            </article>
        </div>
    </section>
    <section id="closing" class="sponsor-info disclaimer">
        <?php the_field('closing_remarks'); ?>
    </section>
    <section id="elsewhere-things">
        <?php get_sidebar(); ?>
    </section>
<?php get_footer(); ?>
