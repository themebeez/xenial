<?php 
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Xenial
 */
$xenialArchiveContents = xenial_get_option( 'archive_post_structure_one' );
if ( ! $xenialArchiveContents ) {
    return;
}
?>
<?php do_action( 'xenial_before_content' ); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    foreach ( $xenialArchiveContents as $content ) :
        switch ( $content ) {
            case 'image' :
                do_action( 'xenial_linked_post_thumbnail', array( 'thumbnail_size' => apply_filters( 'xenial_archive_post_thumbnail_size', array( 800, 450 ) ) ) );
                break;
            case 'title' :
                do_action( 'xenial_post_title', [ 'titleTag' => 'h2', 'enableLink' => true ] );
                break;
            case 'meta' :
                do_action( 'xenial_archive_grouped_post_meta' );
                break;
            case 'excerpt' :
                do_action( 'xenial_post_excerpt' );
                break;
            case 'read_more' :
                do_action( 'xenial_archive_read_more' );
                break;
            default :
                break;
        }
    endforeach;
    ?>
</article><!-- #post-<?php the_ID(); ?> -->
<?php do_action( 'xenial_after_content' ); ?>