<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Xenial
 */

get_header();
?>
<div class="xenial-container">
	<div class="xenial-row xenial-container-inner">
		<div id="xenial-primary" class="xenial-content-area">
			<?php do_action( 'xenial_before_content' ); ?>
			<main id="xenial-main" class="xenial-site-main">
				<?php
				while ( have_posts() ) :

					the_post();

					do_action( 'xenial_content_single' );

					do_action( 'xenial_post_author_box' );

					do_action( 'xenial_posts_navigation' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						
						do_action( 'xenial_post_comments_box' );

					endif;

				endwhile; // End of the loop.
				?>
			</main><!-- #main -->
			<?php do_action( 'xenial_after_content' ); ?>
		</div><!-- #primary -->
		<?php get_sidebar(); ?>
	</div>
</div>
<?php    
get_footer();
