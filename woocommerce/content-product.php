<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

$link = apply_filters( 'woocommerce_loop_product_link', get_the_permalink(), $product );

$add_to_cart_position = get_theme_mod( 'add_to_cart_button_position', xenial_get_customize_default( 'add_to_cart_button_position' ) );
?>
<li <?php wc_product_class( '', $product ); ?>>
    <div class="xe-woo-product">
        <figure class="xe-product-thumb">
            <a class="xe-link xe-thumb-link woocommerce-LoopProduct-link woocommerce-loop-product__link" href="<?php echo esc_url( $link ); ?>">
                <?php echo woocommerce_get_product_thumbnail(); ?>
            </a>
            
            <?php do_action( 'xenial_woocommerce_product_action_buttons' ); ?>

            <?php if ( $add_to_cart_position === 'over_image' ) { ?>
                <div class="xe-add-to-cart">
                	<?php woocommerce_template_loop_add_to_cart(); ?>
                </div><!-- .xe-add-to-cart -->
            <?php } ?>

            <?php do_action( 'woocommerce_product_sale_flash' ); ?>
            <div class="xe-stock-info"> </div>
            <!-- // xe-stock-info -->
            <div class="xe-loading"> <span class="animation"></span> </div>
            <!-- // xe-loading -->
        </figure>
        <div class="xe-product-title">
            <a class="xe-link" href="<?php echo esc_url( $link ); ?>">
                <?php 
                /**
                 * Hook: woocommerce_shop_loop_item_title.
                 *
                 * @hooked woocommerce_template_loop_product_title - 10
                 */
                do_action( 'woocommerce_shop_loop_item_title' ); ?>
            </a>            
        </div><!-- .xe-product-title -->
        <?php woocommerce_template_loop_rating(); ?>

        <div class="xe-product-price"> 
        	<?php woocommerce_template_loop_price(); ?>
        </div><!-- .xe-product-price -->

        <?php if ( $add_to_cart_position === 'default' ) { ?>
            <div class="xe-add-to-cart">
                <?php woocommerce_template_loop_add_to_cart(); ?>
            </div><!-- .xe-add-to-cart -->
        <?php } ?>
    </div><!-- .xe-woo-product -->
</li>
