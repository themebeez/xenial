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
<header class="xe-pageheader">
    <div class="xe-container">
        <nav class="xe-breadcrumb" role="navigation">
            <ul class="trail-items">
                <li class="trail-item trail-begin"><a href="index.html"><span>Home</span></a></li>
                <li class="trail-item"><a href="archive.html"><span>eCommerce</span></a></li>
                <li class="trail-item trail-end"><a href="single.html"><span>These Are the Handpicked April Top selling brands.</a></li>
            </ul>
        </nav><!-- // xe-breadcrumb -->
    </div><!-- // xe-container -->
</header><!-- // xe-pageheader -->
<div class="xe-container xe-flex-alt">
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
</div><!-- .xe-container -->
<?php    
get_footer();
