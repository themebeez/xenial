<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Xenial
 */

get_header();
?>

<header class="xe-pageheader">
    <div class="xe-container">
        <aside class="xe-pagetitle-holder">
            <h1 class="xe-title"><span class="classifier">Archive:</span> eCommerce</h1>
        </aside><!-- // xe-pagetitle-holder -->
        <nav class="xe-breadcrumb" role="navigation">
            <ul class="trail-items">
                <li class="trail-item trail-begin"><a href="index.html"><span>Home</span></a></li>
                <li class="trail-item trail-end"><a href="archive.html"><span>eCommerce</span></a></li>
            </ul>
        </nav><!-- // xe-breadcrumb -->
    </div><!-- // xe-container -->
</header><!-- // xe-pageheader -->
<div class="xe-container xe-flex-alt">
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
</div><!-- .xe-container -->
<?php    
get_footer();
