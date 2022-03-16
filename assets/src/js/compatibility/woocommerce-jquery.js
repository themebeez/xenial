(function ($) {

    'use strict';

    var xeWooCartModal = $('#xe-woo-added-to-cart-modal');
    var xeCloseCartModal = $('#xe-close-cart-modal-button');
    var xeCartModalOverlay = $('#xe-added-to-cart-modal-overlay');

    function xeWoocommerceAddedtoCart() {

        // Listen to event.
        $(document).on('added_to_cart', function (event, fragments, cart_hash, $button) {

            xeWooCartModal.addClass('visible');
            xeCartModalOverlay.addClass('visible');
            xeWooCartModal.removeClass('hidden');
            xeCartModalOverlay.removeClass('hidden');
        });

        // Close modal.
        xeCloseCartModal.on('click', function (e) {

            xeWooCartModal.removeClass('visible');
            xeCartModalOverlay.removeClass('visible');
            xeWooCartModal.addClass('hidden');
            xeCartModalOverlay.addClass('hidden');
        });
    }

    $(document).ready(function () {

        xeWoocommerceAddedtoCart();
    });
})(jQuery);