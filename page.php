<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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

					get_template_part( 'template-parts/content/content', 'page' );

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