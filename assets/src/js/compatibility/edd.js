(function($) {
	jQuery(document).ready(function() {
		var quantityEle = jQuery('#xe-edd-minicart-button .items-count');
		var minicartWrapperEle = jQuery( '.xe-edd-cart-items' );
		var hiddenQantityEle = jQuery('#xe-edd-minicart-quantity');
		jQuery('body').on('edd_cart_item_added', function( event, response ) {
			quantityEle.html( response.cart_quantity );
			hiddenQantityEle.val( response.cart_quantity );
			jQuery.ajax({
				url : xenial_edd_script.ajax_url,
				type : "POST",
				data : {
					action : 'xenial_edd_mini_cart_update'
				},
				success : function( response ) {
					if ( response ) {
						minicartWrapperEle.html( response );

					}
				}
			});
		});

		jQuery('body').on('edd_cart_item_removed', function( event, response ) {
			quantityEle.html( response.cart_quantity );

			jQuery.ajax({
				url : xenial_edd_script.ajax_url,
				type : "POST",
				data : {
					action : 'xenial_edd_mini_cart_update'
				},
				success : function( response ) {
					if ( response ) {
						minicartWrapperEle.html( response );
					}
				}
			});
			hiddenQantityEle.val( response.cart_quantity );
		});

		jQuery('body').on('click', '.xe-edd-remove-from-cart', function( event ) {
			event.preventDefault();
			var cartItemID = jQuery(this).attr('data-item');
			jQuery.ajax({
				url: xenial_edd_script.ajax_url,

				type: "POST",
				
				data: {
					action : "xenial_edd_mini_cart_update",
					item: cartItemID,
					cart_event: "remove",
					nonce: xenial_edd_script.nonce
				},

				success: function( response ) {
					if ( response ) {
						minicartWrapperEle.html( response );
						var hiddenQantityEle = jQuery('#xe-edd-minicart-quantity');
						hiddenQantityEle.val( hiddenQantityEle.val() - 1 );
						quantityEle.html( hiddenQantityEle.val() );
					}
				}
			});
		});
	});
})( jQuery );