<?php
/**
 * The template for EDD download product page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Xenial
 */

get_header();
?>
<?php do_action( 'xenial_single_header' ); ?>
<div class="<?php xenial_post_single_content_container_classes(); ?>">
    <div id="primary" class="content-area">
        <main id="site-main" class="site-main">
            <?php 
            while( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/content/content', 'download' );        
            endwhile;
            ?>
        </main> <!-- #site-main -->
    </div><!-- #primary -->
    <?php get_sidebar(); ?>
</div><!-- .xe-container -->
<?php   
get_footer();