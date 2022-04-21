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


    function xeUpdateWishlistCount() {

        $.ajax({
            url: xenialWooScriptData.ajax_url,
            data: {
                action: xenialWooScriptData.get_wishlist_count
            },
            type: 'POST',
            success: function (response) {
                $('#xe-woo-wishlist-icon #xe-wishlist-link .count').html(response);
            }
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
            xeUpdateWishlistCount();
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
            xeUpdateWishlistCount();
        });
    }

    /**
     *
     * WooCommerce Ajax Search.
     * Since: 1.0.0
     */

    function xeAjaxProductSearch() {

        var searchValue = '';
        var searchLoadingDots = $('#xe-ajax-search-loading');
        var searchContentEle = $('#xe-header-element-search-ajax-content');

        $(document).on('keyup', '#xe-search-form .woocommerce-product-search .search-field', function (event) {

            var searchField = $(this);
            var searchVal = searchField.val();
            var ajaxResults = $('#xe-header-element-search-ajax-content > ul');
            searchLoadingDots.addClass('visible').removeClass('hidden');

            if (searchVal.length <= 0) {

                searchLoadingDots.addClass('hidden').removeClass('visible');
            }

            if (searchVal.length > 2 && searchVal != searchValue) {

                searchValue = searchVal;

                $.ajax({

                    url: xenialWooScriptData.ajax_url,
                    data: {
                        action: 'xenial_ajax_product_search',
                        product_search_text: searchVal,
                        nonce: xenialWooScriptData.nonce
                    },
                    type: 'POST',

                    success: function (response) {

                        if (response.success) {

                            searchLoadingDots.addClass('hidden').removeClass('visible');
                            searchContentEle.html(response.data);

                            if (ajaxResults) {

                                new PerfectScrollbar('#xe-ajax-search-items', {

                                    wheelSpeed: 2,
                                    wheelPropagation: true,
                                    minScrollbarLength: 20
                                });
                            }

                        } else {

                            searchLoadingDots.addClass('hidden').removeClass('visible');
                            // No product found.
                            searchContentEle.html(response.data);
                        }
                    }
                });
            } else {

                searchContentEle.html('');
            }
        });

        $(document).on('focus', '#xe-search-form .woocommerce-product-search .search-field', function (event) {

            $('body').addClass('xe-ajax-search-is-active');
        });

        $(document).on('focusout', '#xe-search-form .woocommerce-product-search .search-field', function (event) {

            $('body').removeClass('xe-ajax-search-is-active');
            searchLoadingDots.addClass('hidden').removeClass('visible');
        });
    }

    $(document).ready(function () {

        // Trigger WooCommerce cart fragments.
        $(document.body).trigger('wc_fragment_refresh');

        xeWoocommerceAddedtoCart();
        xeWishlist();
        xeAjaxProductSearch();
    });


})(jQuery);