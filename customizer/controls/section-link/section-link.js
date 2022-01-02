wp.customize.controlConstructor['xenial-section-link'] = wp.customize.Control.extend({

	ready: function() {

		"use strict";

		var control = this;

		var settingID = control.setting.id;

		var controlContainer = control.container; 

		var divContainerEle = controlContainer[0].querySelector( '.xenial-section-link-control-wrapper' );

		var inputCheckboxEle = controlContainer[0].querySelector( '.xenial-section-link-input-checkbox' );
		if ( inputCheckboxEle != undefined  || inputCheckboxEle != null ) {
			inputCheckboxEle.addEventListener( 'click', ( event ) => {
				if ( event.target.checked ) {
					control.setting.set( true );
				} else {
					control.setting.set( false );
				}

				divContainerEle.classList.toggle('xenial-switch-enabled');
			} );
		}

		if ( divContainerEle != undefined || divContainerEle != null ) {
			divContainerEle.addEventListener( 'click', ( event ) => {
				if ( 
					event.target.classList.contains( 'xenial-has-switch' ) && 
					event.target.classList.contains( 'xenial-switch-enabled' ) 
				) {
					let sectionID = event.target.getAttribute( "data-section" );
					if ( sectionID ) {
						wp.customize.section(sectionID).focus();
					}
				}

				if ( event.target.classList.contains( 'xenial-has-no-switch' ) ) {
					let sectionID = event.target.getAttribute( "data-section" );
					if ( sectionID ) {
						wp.customize.section(sectionID).focus();
					}
				}
			} );
		}
	}
});