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
<?php do_action( 'xenial_page_header' ); ?>
<div class="xe-container xe-flex-alt">
    <div id="primary" class="content-area">
        <main id="site-main" class="site-main">
        	<?php 
        	while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'page' );

				do_action( 'xenial_post_comments' );

			endwhile; // End of the loop.
			?>
        </main> <!-- #site-main -->
    </div><!-- #primary -->
    <?php get_sidebar(); ?>
</div><!-- .xe-container -->
<?php    
get_footer();