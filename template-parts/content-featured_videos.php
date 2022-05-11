<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php

	//get_template_part( 'template-parts/entry-header' );

	//if ( ! is_search() ) {
	//	get_template_part( 'template-parts/featured-image' );
	//}

	?>

	<?php $is_custom_archive = get_query_var('is_custom_archive'); ?>
	
	<?php if ( ! $is_custom_archive ) { ?>
	<div class="back-arrow-wrapper">
		<a href="/gaia-videos"><span>Back to Gaia Videos</span></a>
	</div>
	<?php } ?>

	<div class="featured-video-wrapper">
		<?php if ( $is_custom_archive ) { ?>
			<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
		<?php } ?>		
		<?php the_field( 'featured_video_embed' ); ?>
		<?php if ( $is_custom_archive ) { ?>
			</a>
		<?php } ?>
	</div>

	<div class="post-content-wrapper">
		<div class="post-date-wrapper">
			<?php the_date(); ?>
		</div>
		<div class="post-title-wrapper">
			<h2>
            <?php if ( $is_custom_archive ) { ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<?php } ?>
			<?php the_title(); ?>
			<?php if ( $is_custom_archive ) { ?>
				</a>
			<?php } ?>
			</h2>
		</div>
		<div class="post-content-wrapper">
			<?php 
			if ( ! $is_custom_archive ) {
				the_field( 'featured_body_text' );
			}
			?>
		</div>
	</div>

</article><!-- .post -->
