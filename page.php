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
<header class="xe-pageheader">
    <div class="xe-container">
		<aside class="xe-pagetitle-holder">
			<div class="xe-post-title xe-entry-title">
	            <h1 class="xe-title"><?php the_title(); ?></h1>
	        </div><!-- // xe-post-title -->
		</aside><!-- // xe-pagetitle-holder -->
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
        	while ( have_posts() ) :
				the_post();

				?>
				<article class="hentry xe-article">
	                <?php 
	                if ( has_post_thumbnail() ) :
	                	?>
		                <div class="post-thumbnail xe-entry-thumbnail">
		                    <figure class="xe-thumb">
		                        <?php the_post_thumbnail(); ?>
		                    </figure><!-- // xe-thumb -->
		                    <figcaption>Photo Credits: www.pexels.com</figcaption>
		                </div><!-- // post-thumbnail -->
		                <?php 
		            endif;
		            ?>
	                <div class="xe-entry-content">
	                    <?php 

	                    the_content(); 

	                    wp_link_pages(
							array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'xenial' ),
								'after'  => '</div>',
							)
						);
	                    ?>
	                </div><!-- // xe-entry-content -->
	            </article>
				<?php

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
        </main> <!-- // #site-main -->
    </div><!-- // #primary -->
</div><!-- // xe-container -->
<?php    
get_footer();