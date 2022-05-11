<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content">

	<?php

	$archive_title    = 'Our best videos, delivered weekly.';

	if ( $archive_title ) {
		?>

		<header class="archive-header has-text-align-center header-footer-group">

			<div class="archive-header-inner section-inner medium">

				<?php if ( $archive_title ) { ?>
					<h1 class="archive-title"><?php echo wp_kses_post( $archive_title ); ?></h1>
				<?php } ?>

			</div><!-- .archive-header-inner -->

		</header><!-- .archive-header -->

		<?php
	}

	?>

	<div class="featured-videos-archive-wrapper">

    <?php

    $the_query = new WP_Query( array( 
    	'post_type' => 'featured_videos'
    ) );
    

	if ( $the_query->have_posts() ) {

		$i = 0;

		while ( $the_query->have_posts() ) {
			$i++;
			
			$the_query->the_post();

			set_query_var('is_custom_archive', true);
			get_template_part( 'template-parts/content', get_post_type() );

		}
	} 

	wp_reset_postdata();

	?>

    </div>

</main><!-- #site-content -->

<?php
get_footer();
