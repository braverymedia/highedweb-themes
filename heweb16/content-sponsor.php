<?php
/**
 * The template used for displaying single sponsors
 *
 * @package brvry
 */
?>

<?php

if ( has_term( array('platinum', 'creative-partner', 'gold'), 'levels') ) { ?>
	<?php if ( has_post_thumbnail() ) { ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<a href="<?php the_field('sponsor_website'); ?>" title="Visit <?php the_title(); ?>">
				<?php
					$post_thumbnail_id = get_post_thumbnail_id( $post_id );
					$mime = get_post_mime_type( $post_thumbnail_id );
					if ( $mime == 'image/svg+xml' ) {
						the_post_thumbnail('large', array('class'	=> "iconic"));
					}
					else {
						the_post_thumbnail('large');
					}
				?>
				<div class="sponsor-description">
					<?php the_content(); ?>
				</div>
			</a>
		</article><!-- #post-## -->
	<?php } // has_post_thumbnail ?>
<?php }
else { ?>
	<?php if ( has_post_thumbnail() ) { ?>
	<a href="<?php the_field('sponsor_website'); ?>" title="Visit <?php the_title(); ?>" id="post-<?php the_ID(); ?>" <?php post_class('sponsor-logo'); ?>>
		<?php
			$post_thumbnail_id = get_post_thumbnail_id( $post_id );
			$mime = get_post_mime_type( $post_thumbnail_id );
			if ( $mime == 'image/svg+xml' ) {
				the_post_thumbnail('large', array('class'	=> "iconic"));
			}
			else {
				the_post_thumbnail('large');
			}
		?>
	</a>
	<?php } // has_post_thumbnail ?>
<?php }
?>
