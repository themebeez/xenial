( function( $ ) {	

	jQuery(document).ready(function(e){

		var topHeaderLeftElement = jQuery('#customize-control-top_header_left_element select');
		var topHeaderRightElement = jQuery('#customize-control-top_header_right_element select');

		jQuery('body').on('change', topHeaderLeftElement, function() {
			taleBlogDisableSelectOption( topHeaderLeftElement, topHeaderRightElement );
		});	
		
		jQuery('body').on('change', topHeaderRightElement, function() {
			taleBlogDisableSelectOption( topHeaderRightElement, topHeaderLeftElement );
		});	

		function responsiveSwitcher(){

			// Responsive switchers
			jQuery( 'body' ).on( 'click', '.customize-control .responsive-switchers button', function( event ) {
				
				// Set up variables				var ,
					var $device 	= jQuery(this).data( 'device' ),
					$body 		= jQuery( '.wp-full-overlay' ),
					$footer_devices = jQuery( '.wp-full-overlay-footer .devices' );
					var $devices 	= jQuery( '.responsive-switchers' );
				// Button class
				
				if ( $device == 'desktop' ) {
					jQuery(this).parents(".responsive-switchers").toggleClass("responsive-switchers-open");

					jQuery(this).parents('li').siblings('.has-switchers').find('.responsive-switchers').toggleClass('responsive-switchers-open');
				}

				$devices.find( 'button' ).removeClass( 'active' );
				$devices.find( 'button.preview-' + $device ).addClass( 'active' );

				var controls = jQuery('.control-wrap');
				controls.each(function() {
					if ( jQuery(this).hasClass($device) ) {
						jQuery(this).addClass('active');
					} else {
						jQuery(this).removeClass('active');
					}
				});

				// Wrapper class
				$body.removeClass( 'preview-desktop preview-tablet preview-mobile' ).addClass( 'preview-' + $device );

				// Panel footer buttons
				$footer_devices.find( 'button' ).removeClass( 'active' ).attr( 'aria-pressed', false );
				$footer_devices.find( 'button.preview-' + $device ).addClass( 'active' ).attr( 'aria-pressed', true );

			} );

	        jQuery('#customize-footer-actions .devices button').on( 'click', function( event ) {
	            event.preventDefault();
	            var device = jQuery(this).data('device');
	            var queries 	= jQuery( '.responsive-switchers' );

	            // Button class
				if (  device == 'desktop' ) {
					if ( queries.hasClass('responsive-switchers-open') ) {
						queries.removeClass('responsive-switchers-open');
					} else {
						queries.addClass('responsive-switchers-open')
					}
				} else {
					if ( ! queries.hasClass('responsive-switchers-open') ) {
						queries.addClass('responsive-switchers-open');
					}
				}

				queries.find( 'button' ).removeClass( 'active' );
	            queries.find( 'button.preview-' + device ).addClass( 'active' );

	            var controls = jQuery('.control-wrap');
				controls.each(function() {
					if ( jQuery(this).hasClass(device) ) {
						jQuery(this).addClass('active');
					} else {
						jQuery(this).removeClass('active');
					}
				});
	        });
		}

		responsiveSwitcher();

	    
	});

	function taleBlogDisableSelectOption( source, target ) {
		var targetValue = source.val();
		target.find('option').each(function() {
			targetOption = jQuery(this);
			if( targetOption.attr('value') == targetValue ) {
				targetOption.attr('disabled', 'disabled');
			} else {
				targetOption.removeAttr('disabled');
			}
		});
	}
}) ( jQuery );