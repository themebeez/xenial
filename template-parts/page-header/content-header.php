<?php 
/**
 * Template part for displaying page header.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Xenial
 */
if ( $args['display_title'] == false && $args['display_breadcrumbs'] == false ) {
    return;
}
?>
<header class="xe-pageheader">
    <div class="<?php echo esc_attr( implode( ' ', $args['classes'] ) ); ?>">
        <?php if ( $args['display_title'] == true ) { ?>
            <aside class="xe-pagetitle-holder">
                <?php
                switch ( $args['current_page'] ) {
                    case 'archive' :
                        if ( class_exists( 'WooCommerce' ) && is_woocommerce() ) {
                            echo $args['before_title'];
                            woocommerce_page_title();
                            echo $args['after_title'];
                        } else {
                            the_archive_title( $args['before_title'], $args['after_title'] );
                        }                        
                        break;
                    case 'home' :
                        echo $args['before_title'] . esc_html__( 'Home', 'xenial' ) . $args['after_title'];
                        break;
                    case 'search' :
                        /* translators:  %1$s: before tag, %2$s: search query, and %3$s: after tag */
                        printf( esc_html__( '%1$sSearch Results for: %2$s %3%s', 'tale-blog' ), $args['before_title'],  '<span>' . get_search_query() . '</span>', $args['after_title'], );
                        break;
                    case 'page' :
                        the_title( $args['before_title'], $args['after_title'] );
                        break;
                    default :
                }
                ?>
            </aside><!-- .xe-pagetitle-holder -->
        <?php } ?>
        <?php 
        if ( $args['display_breadcrumbs'] ) {
            do_action( 'xenial_breadcrumbs' );
        }
        ?>
    </div><!-- .xe-container -->
</header><!-- .xe-pageheader -->