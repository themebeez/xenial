wp.customize.controlConstructor['xenial-dimensions'] = wp.customize.Control.extend({

	ready: function() {

		'use strict';

		var control = this;

		if ( xenialDimensionScriptObj.isResponsive ) {

			control.container.on( 'change keyup paste', '.dimension-desktop_top', function() {
				control.settings['desktop_top'].set( jQuery( this ).val() );
			} );

			control.container.on( 'change keyup paste', '.dimension-desktop_right', function() {
				control.settings['desktop_right'].set( jQuery( this ).val() );
			} );

			control.container.on( 'change keyup paste', '.dimension-desktop_bottom', function() {
				control.settings['desktop_bottom'].set( jQuery( this ).val() );
			} );

			control.container.on( 'change keyup paste', '.dimension-desktop_left', function() {
				control.settings['desktop_left'].set( jQuery( this ).val() );
			} );

			control.container.on( 'change keyup paste', '.dimension-tablet_top', function() {
				control.settings['tablet_top'].set( jQuery( this ).val() );
			} );

			control.container.on( 'change keyup paste', '.dimension-tablet_right', function() {
				control.settings['tablet_right'].set( jQuery( this ).val() );
			} );

			control.container.on( 'change keyup paste', '.dimension-tablet_bottom', function() {
				control.settings['tablet_bottom'].set( jQuery( this ).val() );
			} );

			control.container.on( 'change keyup paste', '.dimension-tablet_left', function() {
				control.settings['tablet_left'].set( jQuery( this ).val() );
			} );

			control.container.on( 'change keyup paste', '.dimension-mobile_top', function() {
				control.settings['mobile_top'].set( jQuery( this ).val() );
			} );

			control.container.on( 'change keyup paste', '.dimension-mobile_right', function() {
				control.settings['mobile_right'].set( jQuery( this ).val() );
			} );

			control.container.on( 'change keyup paste', '.dimension-mobile_bottom', function() {
				control.settings['mobile_bottom'].set( jQuery( this ).val() );
			} );

			control.container.on( 'change keyup paste', '.dimension-mobile_left', function() {
				control.settings['mobile_left'].set( jQuery( this ).val() );
			} );
		} else {
			control.container.on( 'change keyup paste', '.dimension-top', function() {
				control.settings['top'].set( jQuery( this ).val() );
			} );

			control.container.on( 'change keyup paste', '.dimension-right', function() {
				control.settings['right'].set( jQuery( this ).val() );
			} );

			control.container.on( 'change keyup paste', '.dimension-bottom', function() {
				control.settings['bottom'].set( jQuery( this ).val() );
			} );

			control.container.on( 'change keyup paste', '.dimension-left', function() {
				control.settings['left'].set( jQuery( this ).val() );
			} );
		}
	}

});

jQuery( document ).ready( function($) {

	// Linked button
	$( '.xenial-linked' ).on( 'click', function() {
		
		// Set up variables
		var $this = $( this );
		
		// Remove linked class
		$this.parent().parent( '.dimension-wrap' ).prevAll().slice(0,4).find( 'input' ).removeClass( 'linked' ).attr( 'data-element', '' );
		
		// Remove class
		$this.parent( '.link-dimensions' ).removeClass( 'unlinked' );

	} );
	
	// Unlinked button
	$( '.xenial-unlinked' ).on( 'click', function() {

		// Set up variables
		var $this 		= $( this ),
			$element 	= $this.data( 'element' );
		
		// Add linked class
		$this.parent().parent( '.dimension-wrap' ).prevAll().slice(0,4).find( 'input' ).addClass( 'linked' ).attr( 'data-element', $element );
		
		// Add class
		$this.parent( '.link-dimensions' ).addClass( 'unlinked' );

	} );
	
	// Values linked inputs
	$( '.dimension-wrap' ).on( 'input', '.linked', function() {

		var $data 	= $( this ).attr( 'data-element' ),
			$val 	= $( this ).val();

		$( '.linked[ data-element="' + $data + '" ]' ).each( function( key, value ) {
			$( this ).val( $val ).change();
		} );

	} );

} );