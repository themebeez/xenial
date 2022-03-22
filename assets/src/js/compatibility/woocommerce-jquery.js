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

        // console.log(document.getElementById('addonify-wishlist-show-sidebar-btn'));

        // console.log($("#addonify-wishlist-show-sidebar-btn"));

        $(".addonify-custom-wishlist-btn").on('addonify_added_to_wishlist', function(event) {
            // console.log(event);
            // console.log(event.currentTarget);
            // console.log(typeof(event.target));
            event.target.setAttribute("data-tippy-content", xenialWooScriptData.addonify_inactive_wishlist_btn_label);
            // tippy(['data-tippy-content']);
        });

        $(".addonify-custom-wishlist-btn").on('addonify_removed_from_wishlist', function(event) {
            console.log(event);
        });
    });


})(jQuery);