<?php
/**
 * Product loop sale flash
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/sale-flash.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     7.8.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $post, $product;

?>
<?php 
if ( $product->is_on_sale() ) : 

    $html = '';
    $onsale_display = get_theme_mod( 'woo_onsale_display', xenial_get_customize_default( 'woo_onsale_display' ) );

    if ( $onsale_display ) {
        switch ( $onsale_display ) {
            case 'default' :
                $onsale_text = get_theme_mod( 'woo_onsale_text', xenial_get_customize_default( 'woo_onsale_text' ) );
                $onsale_text = ( $onsale_text ) ? $onsale_text : esc_html__( 'Sale!', 'xenial' );
                $html = '<span class="onsale">' . esc_html( $onsale_text ) . '</span>';
                break;
            case 'percent' :
                if (
                    $product->get_type() == 'variable' || 
                    $product->get_type() == 'grouped'
                ) {
                    $onsale_text = get_theme_mod( 'woo_onsale_text', xenial_get_customize_default( 'woo_onsale_text' ) );
                    $onsale_text = ( $onsale_text ) ? $onsale_text : esc_html__( 'Sale!', 'xenial' );
                    $html = '<span class="onsale">' . esc_html( $onsale_text ) . '</span>';
                } else {
                    $regular_price = $product->get_regular_price();
                    $sale_price = $product->get_sale_price();
                    $discount_percent = ( ( $regular_price - $sale_price ) / $regular_price ) * 100;
                    $html = '<span class="onsale">' . '-' . esc_html( number_format( $discount_percent, 2, '.', '' ) ) . '%' . '</span>';
                }
                
                break;
        }
    } else {
        $html = '<span class="onsale">' . esc_html__( 'Sale!', 'woocommerce' ) . '</span>';
    }
    ?>
    <div class="xe-woo-sale">
    	<?php echo apply_filters( 'woocommerce_sale_flash', $html, $post, $product ); ?>
    </div><!-- .xe-woo-sale -->
	<?php
endif;

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
