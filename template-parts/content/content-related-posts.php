<?php 
/**
 * Template part for displaying related posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Xenial
 */

if ( ! $args['posts']->have_posts() ) {
	return;
}

$xenialRelatedPostsContent = xenial_get_option( 'post_single_related_posts_elements' );
if ( ! $xenialRelatedPostsContent ) {
	return;
}
?>
<section class="xe-related-posts">
	<?php if ( xenial_get_option( 'post_single_related_posts_section_title' ) ) { ?>
		<div class="xe-block-title">
		    <h3 class="xe-title"><?php echo esc_html( xenial_get_option( 'post_single_related_posts_section_title' ) ); ?></h3><!-- .xe-title -->
		</div><!-- .xe-block-title -->
	<?php } ?>
	<div class="xe-flex">
		<?php 
		while( $args['posts']->have_posts() ) { 
			$args['posts']->the_post();
			?>
		    <div class="xe-col-xl-6 xe-col-lg-6 xe-col-md-12 xe-col-sm-12 xe-col-xs-12">
		        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		        	<?php 
		        	if ( has_post_thumbnail() && in_array( 'image', $xenialRelatedPostsContent ) ) { 
		        		do_action( 'xenial_linked_post_thumbnail', array( 'thumbnail_size' => apply_filters( 'xenial_related_post_thumbnail_size', array( 335, 251.25 ) ) ) );
		        	}
		        	?>
		            <div class="post-content">
		                <?php 
		                if ( in_array( 'title', $xenialRelatedPostsContent ) ) {
		                	do_action( 'xenial_post_title', [ 'titleTag' => 'h4', 'enableLink' => true ] );
		                }
		                
		                if ( in_array( 'read_more', $xenialRelatedPostsContent ) ) {
		                	do_action( 'xenial_post_read_more' );
		                } 
		                ?>
		            </div><!-- .post-content -->
		        </article>
		    </div><!-- .xe-col-* -->
			<?php  
		}
		wp_reset_postdata(); 
		?>
	</div><!-- .xe-flex -->
</section><!-- .xe-related-posts -->