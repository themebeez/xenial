<?php 

if ( ! function_exists( 'xenial_add_edd_mini_cart_header_element' ) ) {

	function xenial_add_edd_mini_cart_header_element( $header_elements ) {

		$header_elements['edd_minicart'] = array(
			'section' => 'xenial_header_edd_minicart',
			'label' => esc_html__( 'EDD Minicart', 'xenial' ),
			'icon' 	=> '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="14" height="14"><path fill="none" d="M0 0h24v24H0z"/><path d="M13.12 17.023l-4.199-2.29a4 4 0 1 1 0-5.465l4.2-2.29a4 4 0 1 1 .959 1.755l-4.2 2.29a4.008 4.008 0 0 1 0 1.954l4.199 2.29a4 4 0 1 1-.959 1.755zM6 14a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm11-6a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 12a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/></svg>'
		);

		return $header_elements; 
	}
	add_filter( 'xenial_desktop_header_elements_filter', 'xenial_add_edd_mini_cart_header_element' );
	add_filter( 'xenial_mobile_header_elements_filter', 'xenial_add_edd_mini_cart_header_element' );
}

if ( ! function_exists( 'xenial_edd_mini_cart_update_template' ) ) {

	function xenial_edd_mini_cart_update_template() {

		$cart_event = isset( $_POST['cart_event'] ) ? $_POST['cart_event'] : false;

		if ( $cart_event == 'remove' ) {
			$nonce = isset( $_POST['nonce'] ) ? $_POST['nonce'] : false;

			if ( ! $nonce || ! wp_verify_nonce( $nonce, 'xenial_edd_cart_item_remove' ) ) {
				return;
			}

			$cart_item_id = isset( $_POST['item'] ) ? $_POST['item'] : false;

			edd_remove_from_cart( $cart_item_id );
		}
		
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

		wp_die();
	}
}
add_action( 'wp_ajax_xenial_edd_mini_cart_update', 'xenial_edd_mini_cart_update_template', 20 );
add_action( 'wp_ajax_nopriv_xenial_edd_mini_cart_update', 'xenial_edd_mini_cart_update_template', 20 );