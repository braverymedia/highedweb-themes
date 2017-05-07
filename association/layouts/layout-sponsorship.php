<?php
/**
 * Template Name: Sponsors Prospectus
 *
 * Shows the sponsorship information (not signed sponsors).
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
         // Let's do our Sponsor Prospectus
         ?>
         <section id="overview" class="sponsor-group">
           <div class="sponsor-info overview--conference entry">
             <h2>Annual Conference</h2>
             <?php the_field('annual_conference'); ?>
           </div>
           <div class="sponsor-info overview--institutions entry">
             <h2>Institutions</h2>
             <?php the_field('institutions_copy'); ?>
           </div>
           <div class="sponsor-info overview--attendees entry">
             <h2>Our Attendees</h2>
             <?php the_field('attendees_copy'); ?>
           </div>
         </section>
         <section id="packages" class="sponsor-group">
           <header class="packages--intro">
               <h2><?php the_field('package_introduction_title'); ?></h2>
               <article class="intro-copy">
                   <?php the_field('package_introduction_copy'); ?>
               </article>
           </header>
           <div class="sponsor-packages">
               <article class="sponsor-package platinum">
                  <span class="teardrop"></span>
                   <header class="sponsor-package--heading">
                       <div class="price-cluster">
                           <h3><?php the_field('title_platinum'); ?></h3>
                           <span class="price"><?php the_field('price_platinum'); ?></span>
                           <?php
                               $availability = get_field('availability_platinum');
                               if ( $availability ) {?>
                                   <span class="availability"><?php echo $availability; ?> Available</span>
                           <?php } ?>
                       </div>
                   </header>
                   <section class="sponsor-package--details">
                     <div class="description">
                         <?php the_field('description_platinum'); ?>
                     </div>
                     <div class="benefits">
                         <h4>Benefits</h4>
                         <?php the_field('benefits_list_platinum'); ?>
                     </div>
                    </section>
                    <section class="sponsor-package--additions platinum-additions">
                     <?php if ( have_rows('event_platinum') ) : while ( have_rows('event_platinum') ) : the_row(); ?>
                       <div class="opportunity">
                         <span class="teardrop"></span>
                         <header class="sponsor-package--heading">
                             <div class="price-cluster">
                              <span class="opportunity--subhead"><?php the_field('title_platinum'); ?> Addition</span>
                               <h3><?php the_sub_field('event_title'); ?></h3>
                               <?php
                               $availability = get_sub_field('event_availability');
                               if ( $availability ) {?>
                                   <p class="subhead availability"><?php echo $availability; ?> Available</p>
                              <?php } ?>
                              </div>
                           </header>
                           <div class="benefits">
                             <h4>Added Benefits</h4>
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
                       </div>
                   <?php endwhile; endif; ?>
                   </section>
               </article>
               <article class="sponsor-package gold">
                   <header>
                       <div class="price-cluster">
                           <h3><?php the_field('title_gold'); ?></h3>
                           <span class="price"><?php the_field('price_gold'); ?></span>
                           <?php
                               $availability = get_field('availability_gold');
                               if ( $availability ) {?>
                                   <span class="availability"><?php echo $availability; ?> Available</span>
                           <?php } ?>
                       </div>
                   </header>
                   <div class="description">
                       <?php the_field('description_gold'); ?>
                   </div>
                   <div class="benefits">
                       <h4>Benefits</h4>
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
                   <div class="description">
                       <?php the_field('description_silver'); ?>
                   </div>
                   <div class="benefits">
                       <h4>Benefits</h4>
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
                   <div class="description">
                       <?php the_field('description_bronze'); ?>
                   </div>
                   <div class="benefits">
                       <h4>Benefits</h4>
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
                   <div class="description">
                       <?php the_field('description_academy'); ?>
                   </div>
                   <div class="benefits">
                       <h4>Benefits</h4>
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
         <section id="notes" class="sponsor-info disclaimer">
           <div class="entry notes--entry">
             <?php the_field('closing_remarks'); ?>
           </div>
         </section>
        <?php
         // Run our ACF Flex Content layouts
         association_flex_content();

       endwhile; // End of the loop.

       ?>

   </main><!-- #main -->
<?php get_footer();
