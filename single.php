<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Xenial
 */

get_header();

$display_featured_image_meta = get_post_meta( get_the_ID(), 'xenial_post_disable_featured_image', true );
?>
<?php do_action( 'xenial_single_header' ); ?>
<div class="<?php xenial_post_single_content_container_classes(); ?>">
    <div id="primary" class="content-area">
        <main id="site-main" class="site-main">
        	<?php 
        	while( have_posts() ) :
        		the_post();
        		get_template_part( 'template-parts/content/content', 'single' );
        		do_action( 'xenial_post_comments' );
        		do_action( 'xenial_related_posts' );     		
        	endwhile;
        	?>
        </main> <!-- #site-main -->
    </div><!-- #primary -->
    <?php get_sidebar(); ?>
</div><!-- .xe-container -->
<?php    
get_footer();
