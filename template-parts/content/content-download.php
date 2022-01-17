<?php 
/**
 * Template part for displaying post content in single.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Xenial
 */
$xenialSingleContents = xenial_get_option( 'post_single_content_elements' );
if ( ! $xenialSingleContents ) {
    return;
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php 
    foreach( $xenialSingleContents as $content ) {
        switch ( $content ) {
            case 'categories' :
                do_action( 'xenial_post_categories_meta' );
                break;
            case 'title' :
                do_action( 'xenial_post_title', [ 'titleTag' => 'h1', 'enableLink' => false, 'cssClass' => [ 'xe-entry-title' ] ] );
                break;
            case 'image' :
                do_action( 'xenial_single_post_thumbnail', array( 'thumbnail_size' => apply_filters( 'xenial_post_size_thumbnail_size', 'full' ) ) );
                break;
            case 'content' :
                do_action( 'xenial_post_content' );
                break;
            default :
                break;
        } 
    }
    do_action( 'xenial_single_content_footer' );
    ?>
</article><!-- #post-<?php the_ID(); ?> -->