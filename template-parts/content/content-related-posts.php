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
?>
<section class="xe-related-posts">
	<div class="xe-block-title">
	    <h3 class="xe-title">Related posts</h3><!-- .xe-title -->
	</div><!-- .xe-block-title -->
	<div class="xe-flex">
		<?php 
		while( $args['posts']->have_posts() ) { 
			$args['posts']->the_post();
			?>
		    <div class="xe-col-xl-6 xe-col-lg-6 xe-col-md-12 xe-col-sm-12 xe-col-xs-12">
		        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		            <?php do_action( 'xenial_post_thumbnail', [ 'enableLink' => true ] ); ?>
		            <div class="post-content">
		                <?php do_action( 'xenial_post_title', [ 'titleTag' => 'h4', 'enableLink' => true ] ); ?>
		                <?php do_action( 'xenial_post_read_more' ); ?>
		            </div><!-- .post-content -->
		        </article>
		    </div><!-- .xe-col-* -->
			<?php  
		}
		wp_reset_postdata(); 
		?>
	</div><!-- .xe-flex -->
</section><!-- .xe-related-posts -->