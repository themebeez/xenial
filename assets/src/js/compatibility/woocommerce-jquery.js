(function($) {

    'use strict';

    var xeWooCartModal = $('#xe-woo-added-to-cart-modal');
    var xeCloseCartModal = $('#xe-close-cart-modal-button');
    var xeCartModalOverlay = $('#xe-added-to-cart-modal-overlay');

    function xeWoocommerceAddedtoCart() {

        // Listen to event.
        $(document).on('added_to_cart', function(event, fragments, cart_hash, $button) {

            xeWooCartModal.addClass('visible');
            xeCartModalOverlay.addClass('visible');
            xeWooCartModal.removeClass('hidden');
            xeCartModalOverlay.removeClass('hidden');
        });

        // Close modal.
        xeCloseCartModal.on('click', function(e) {

            xeWooCartModal.removeClass('visible');
            xeCartModalOverlay.removeClass('visible');
            xeWooCartModal.addClass('hidden');
            xeCartModalOverlay.addClass('hidden');
        });
    }

    $(document).ready(function() {

        xeWoocommerceAddedtoCart();

        $(document).on('addonify_added_to_wishlist', function(event, data) {
            var getRelatedProducts = $("button.addonify-custom-wishlist-btn[data-product_id='" + data.productID + "']");
            if (getRelatedProducts.length > 0) {
                getRelatedProducts.each(function(key, product) {
                    product.setAttribute("data-tippy-content", xenialWooScriptData.addonify_inactive_wishlist_btn_label);
                });
            }
        });

        $(document).on('addonify_removed_from_wishlist', function(event, data) {
            var getRelatedProducts = $("button.addonify-custom-wishlist-btn[data-product_id='" + data.productID + "']");
            if (getRelatedProducts.length > 0) {
                getRelatedProducts.each(function(key, product) {
                    if (product.classList.contains('added-to-wishlist')) {
                        product.classList.remove('added-to-wishlist');
                        product.setAttribute("data-tippy-content", xenialWooScriptData.addonify_active_wishlist_btn_label);
                    }
                });
            }
        });
    });


})(jQuery);