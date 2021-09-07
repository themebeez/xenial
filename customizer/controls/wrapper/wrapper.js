/**
 * Customizer order control.
 */
( function ( $ ) {
	'use strict';
	wp.XenialWrapperAccordion = {
		init: function () {
			this.handleToggle();
		},
		handleToggle: function () {
			$( '.customize-control-xenial-wrapper.accordion .customizer-wrapper-title' ).on( 'click', function () {
				var accordion = $( this ).closest( '.accordion' );
				$( accordion ).toggleClass( 'expanded' );
				return false;
			} );
		},
	};

	$( document ).ready(
		function () {
			wp.XenialWrapperAccordion.init();
		}
	);
} )( jQuery );
