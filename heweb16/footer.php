<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package brvry
 */
?>
</section><!-- #page -->
<footer id="colophon" class="site-footer primary" role="contentinfo">
	<div class="site-info">
        <section id="site-meta">
            <a href="http://www.highedweb.org" title="HighEdWeb Association Website"><img src="<?php echo brvry_image_path('heweb-logo.svg'); ?>" class="iconic heweb-logo" /></a>
            <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container' => false ) ); ?>
        </section>
        <aside id="legal">&copy;<?php echo date("Y"); ?> <a href="http://www.highedweb.org" title="HighEdWeb Association Website">HighEdWeb Professionals Association</a>. All Rights Reserved. All Content Used by Permission.</aside>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
<?php wp_footer(); ?>

</body>
</html>
