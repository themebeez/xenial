<?php 
?>

    <div class="xe-header-element is-edd-minicart">
       <div class="xe-edd-minicart-outer">
            <a id="xe-edd-minicart-button" class="xe-button xe-false-button" href="http://xenial.local/edd-checkout/">
                <span class="items-count"><?php echo esc_html( edd_get_cart_quantity() ); ?></span>
            </a>
            <input type="hidden" name="xe-edd-minicart-quantity" id="xe-edd-minicart-quantity" value="<?php echo esc_attr( edd_get_cart_quantity() ); ?>">
       </div>
        <div class="xe-edd-cart-items">
            <?php 
            $cart_items = edd_get_cart_contents();

            if ( $cart_items ) { 
                ?>
                <ul class="edd-cart">
                    <?php foreach ( $cart_items as $key => $item ) { ?>
                        <li class="edd-cart-item">
                            <div class="item-summary">
                                <span class="edd-cart-item-title"><?php echo wp_kses_post( edd_get_cart_item_name( $item ) ); ?> <span class="edd-cart-item-price">- <?php echo esc_html( edd_cart_item_price( $item['id'] ) ); ?></span></span>
                                <?php if ( class_exists( 'EDD_Recurring' ) ) { ?>
                                    <span class="edd-terms-notice"><?php do_action( 'edd_purchase_link_end', $item['id'], array() );?></span>
                                <?php } ?>
                            </div>
                            <div class="action">
                                <button class="xe-button xe-false-button xe-edd-remove-from-cart" data-item="<?php echo esc_attr( $key ); ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="m16.192 6.344-4.243 4.242-4.242-4.242-1.414 1.414L10.535 12l-4.242 4.242 1.414 1.414 4.242-4.242 4.243 4.242 1.414-1.414L13.364 12l4.242-4.242z"></path></svg>
                                </button>
                            </div>
                        </li>
                    <?php } ?>
                    <li class="edd-cart-total">
                        <span class="edd-cart-total-title"><?php echo esc_html__( 'Subtotal:', 'xenial' ); ?></span>
                        <span class="edd-cart-total-price"><?php echo edd_cart_subtotal(); ?></span>
                    </li>
                    <li class="edd-checkout">
                        <a class="xe-button xe-edd-minicart-checkout-button" href="<?php echo esc_url( edd_get_checkout_uri() ); ?>"><?php echo esc_html__( 'Checkout', 'xenial' ); ?></a>
                    </li>
                </ul>
                <?php 
            } else { 
                ?>
                <p class="empty"><?php echo esc_html__( 'Your cart is empty.', 'xenial' ); ?></p>
                <?php
            }
            ?>
        </div><!-- // xe-edd-cart-items -->
    </div><!-- // xe-header-element -->