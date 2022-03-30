(function ($) {

    'use strict';

    /**
    *
    * Added to Cart function.
    * Since: 1.0.0
    */

    function xeWoocommerceAddedtoCart() {

        $(document).on('added_to_cart', function (event, fragments, cart_hash, button) {

            var product_id = button.data('product_id');

            var ajax_data = {

                action: xenialWooScriptData.added_to_cart,
                product_id: product_id,
                nonce: xenialWooScriptData.nonce
            }

            $.ajax({

                url: xenialWooScriptData.ajax_url,
                data: ajax_data,
                type: 'POST',
                success: function (response) {

                    $('body').prepend(response);
                }
            });
        });

        // Close modal.

        $(document).on('click', '#xe-close-cart-modal-button', function (e) {

            $('#xe-woo-added-to-cart-modal').removeClass('visible').addClass('hidden').remove();
            $('#xe-added-to-cart-modal-overlay').removeClass('visible').addClass('hidden').remove();
        });
    }

    /**
    *
    * Wishlist function.
    * Since: 1.0.0
    */

    function xeWishlist() {

        $(document).on('addonify_added_to_wishlist', function (event, data) {
            var getRelatedProducts = $("button.addonify-custom-wishlist-btn[data-product_id='" + data.productID + "']");
            if (getRelatedProducts.length > 0) {
                getRelatedProducts.each(function (key, product) {
                    product.setAttribute("data-tippy-content", xenialWooScriptData.addonify_inactive_wishlist_btn_label);
                });
            }
        });

        // Remove from wishlist.

        $(document).on('addonify_removed_from_wishlist', function (event, data) {
            var getRelatedProducts = $("button.addonify-custom-wishlist-btn[data-product_id='" + data.productID + "']");
            if (getRelatedProducts.length > 0) {
                getRelatedProducts.each(function (key, product) {
                    if (product.classList.contains('added-to-wishlist')) {
                        product.classList.remove('added-to-wishlist');
                        product.setAttribute("data-tippy-content", xenialWooScriptData.addonify_active_wishlist_btn_label);
                    }
                });
            }
        });
    }

    $(document).ready(function () {

        xeWoocommerceAddedtoCart();
        xeWishlist();
    });


})(jQuery);