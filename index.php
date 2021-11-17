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
 * @package Xenial
 */

get_header(); 
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
