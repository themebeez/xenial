<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Xenial
 */

get_header();

do_action( 'xenial_archive_page_header' ); 
?>
<div class="<?php xenial_archive_content_container_classes(); ?>">
    <div id="primary" class="content-area">
        <main id="site-main" class="site-main">
            <?php 
            if ( have_posts() ) :
                while( have_posts() ) :
                    the_post();
                    get_template_part( 'template-parts/content/content', 'archive' );
                endwhile; 
            else :
                get_template_part( 'template-parts/content/content', 'none' );
            endif;

            do_action( 'xenial_pagination' );
            ?>
        </main> <!-- #site-main -->
    </div><!-- #primary -->
    <?php get_sidebar(); ?>
</div><!-- .xe-container -->
<?php    
get_footer();
