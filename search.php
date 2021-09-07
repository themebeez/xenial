<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Xenial
 */

get_header();
?>
<div class="xenial-container">
	<div class="xenial-row xenial-container-inner">
		<div id="xenial-primary" class="xenial-content-area">
			<?php do_action( 'xenial_before_content' ); ?>
			<?php do_action( 'xenial_archive_page_title' ); ?>
			<main id="xenial-main" class="xenial-site-main">			
				<?php
				if( have_posts() ) :				
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();
						/**
					    * Hook - xenial_loop_content.
					    *
					    * @hooked xenial_loop_content_template - 10
					    */
					    do_action( 'xenial_loop_content' );
					endwhile;
				else :
					get_template_part( 'template-parts/content', 'none' );
				endif;
				?>
			</main><!-- #main -->
			<?php
			if( have_posts() ) :
				/**
			    * Hook - xenial_pagination.
			    *
			    * @hooked xenial_pagination_template - 10
			    */
			    do_action( 'xenial_pagination' );  
			endif;
		    ?>
			<?php do_action( 'xenial_after_content' ); ?>
		</div><!-- #primary -->
		<?php get_sidebar(); ?>
	</div>
</div>
<?php    
get_footer();
