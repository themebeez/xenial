<?php 
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Xenial
 */
?>
<?php do_action( 'xenial_before_content' ); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php do_action( 'xenial_post_thumbnail', [ 'thumbSize' => [ 800, 450 ] ] ); ?>
    <?php do_action( 'xenial_post_title', [ 'titleTag' => 'h2', 'enableLink' => true ] ); ?>
    <?php do_action( 'xenial_grouped_post_metas' ); ?>
    <?php do_action( 'xenial_post_excerpt' ); ?>
    <?php do_action( 'xenial_post_read_more' ); ?>
</article><!-- #post-<?php the_ID(); ?> -->
<?php do_action( 'xenial_after_content' ); ?>