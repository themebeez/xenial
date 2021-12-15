wp.customize.controlConstructor['xenial-section-link'] = wp.customize.Control.extend({

	ready: function() {

		"use strict";

		var control = this;

		var settingID = control.setting.id;

		var buttonEle = control.container.find( '#xenial-section-link-button-' + settingID );

		buttonEle.on( 'click', function( event ) {
			event.preventDefault();
			const sectionID = buttonEle[0].getAttribute( "data-section" );
			if ( sectionID ) {
				wp.customize.section(sectionID).focus();
			}
		} );
	}
});