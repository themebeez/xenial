<?php 
$woo_minicart_icon_classes = array( 'xe-header-element', 'is-woo-minicart-icon' );
$woo_minicart_device_visibilities = xenial_get_option( 'header_ele_woo_minicart_visibility' );

if ( $woo_minicart_device_visibilities ) {
    $woo_minicart_device_visibilities = explode( ',', $woo_minicart_device_visibilities );
    foreach ( $woo_minicart_device_visibilities as $woo_minicart_device_visibility ) {
        $woo_minicart_icon_classes[] = xenial_get_device_visibility_class( $woo_minicart_device_visibility );
        $woo_minicart_content_classes[] = xenial_get_device_visibility_class( $woo_minicart_device_visibility );
    }
} 
?>
<div class="<?php echo esc_attr( implode( ' ', $woo_minicart_icon_classes ) ); ?>">
    <div class="xe-woo-minicart-icon">
        <button class="xe-button xe-false-button xe-woo-minicart-button">
                
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>

            <span class="count xenial-cart-items-count">
                <?php
                    global $woocommerce;
                    echo $woocommerce->cart->cart_contents_count;
                ?>
            </span>
        </button>
    </div><!-- // xe-woo-minicart-icon -->
</div><!-- // xe-header-element -->
