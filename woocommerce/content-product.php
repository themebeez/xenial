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
?>
<li <?php wc_product_class( '', $product ); ?>>
    <div class="xe-woo-product">
        <figure class="xe-product-thumb">
            <a class="xe-link xe-thumb-link woocommerce-LoopProduct-link woocommerce-loop-product__link" href="<?php echo esc_url( $link ); ?>">
                <?php echo woocommerce_get_product_thumbnail(); ?>
            </a>
            <div class="xe-woo-buttons-group visible-on-hover">
                <div class="xe-quickview xe-button-item">
                    <button class="xe-button xe-false-button xe-quickview-button xe-tippy" data-tippy-placement="left" data-tippy-content="Quickview">
                        <i class="ti-eye"></i>
                    </button>
                </div>
                <!-- // xe-qickview -->
                <div class="xe-compare xe-button-item">
                    <button class="xe-button xe-false-button xe-compare-button xe-tippy" data-tippy-placement="left" data-tippy-content="Add to compare"><i class="ti-control-shuffle"></i></button>
                </div>
                <!-- // xe-compare -->
                <div class="xe-wishlist xe-button-item">
                    <button class="xe-button xe-false-button xe-wishlist-button xe-tippy" data-tippy-placement="left" data-tippy-content="Add to wishlist"><i class="ti-star"></i></button>
                </div>
                <!-- // xe-wishlist -->
                <div class="xe-cart xe-button-item">
                    <a href="#" class="xe-button xe-false-button xe-add-to-cart-button xe-tippy" data-tippy-placement="left" data-tippy-content="Add to cart"> <i class="ti-shopping-cart-full"></i> </a>
                </div>
                <!-- // xe-wishlist -->
            </div>
            <!-- // xe-woo-buttons-group -->
            <div class="xe-add-to-cart">
            	<?php woocommerce_template_loop_add_to_cart(); ?>
            </div>
            <!-- // xe-add-to-cart -->
            <?php do_action( 'woocommerce_product_sale_flash' ); ?>
            <div class="xe-stock-info"> </div>
            <!-- // xe-stock-info -->
            <div class="xe-loading"> <span class="animation"></span> </div>
            <!-- // xe-loading -->
        </figure>
        <div class="xe-product-title">
            <h3 class="xe-title">
                <a class="xe-link" href="<?php echo esc_url( $link ); ?>"><?php the_title(); ?></a>
            </h3>
        </div>
        <!-- // xe-product-title -->
        <?php woocommerce_template_loop_rating(); ?>
        <!-- // xe-product-rating -->
        <div class="xe-product-price"> 
        	<?php woocommerce_template_loop_price(); ?>
        </div>
        <!-- // xe-product-price -->
        <div class="xe-product-swatch visible-on-hover">
            <a href="#" class="swatch red"></a>
            <a href="#" class="swatch blue"></a>
            <a href="#" class="swatch purple"></a>
            <a href="#" class="swatch green"></a>
        </div>
        <!-- // xe-product-swatch -->
    </div>
    <!-- // xe-woo-product -->
</li>
