/**
 * Scripts within the customizer controls window.
 *
 * Contextually shows the color hue control and informs the preview
 * when users open or close the front page sections section.
 */

(function() {

	var api = wp.customize;

	api.bind( 'ready', function() {

		function _TBControlVisibility( mainControl, dependentControl ) {

			if( dependentControl.constructor === Array ) {

				var dependentControlsLength = dependentControl.length;

				for( i=0 ; i<dependentControlsLength ; i++ ) {

					// Only show a control when there's a control enabled.
					api( mainControl, function( setting ) {
						api.control( dependentControl[i], function( control ) {
							var visibility = function() {
								if ( true === setting.get() ) {
									control.container.slideDown( 180 );
								} else {
									control.container.slideUp( 180 );
								}
							};

							visibility();
							setting.bind( visibility );
						});
					});
				}
			} else {

				// Only show a control when there's a control enabled.
				api( mainControl, function( setting ) {
					api.control( dependentControl, function( control ) {
						var visibility = function() {
							if ( true === setting.get() ) {
								control.container.slideDown( 180 );
							} else {
								control.container.slideUp( 180 );
							}
						};

						visibility();
						setting.bind( visibility );
					});
				});
			}
		}

		// var bannerDependentControls = [ 
		// 	'cream_magazine_pro_banner_separator_1', 
		// 	'cream_magazine_pro_select_banner_layout', 
		// 	'cream_magazine_pro_banner_separator_2', 
		// 	'cream_magazine_pro_banner_categories',
		// 	'cream_magazine_pro_banner_posts_no',
		// 	'cream_magazine_pro_banner_separator_3',
		// 	'cream_magazine_pro_enable_banner_author_meta',
		// 	'cream_magazine_pro_enable_banner_date_meta',
		// 	'cream_magazine_pro_enable_banner_cmnts_no_meta',
		// 	'cream_magazine_pro_enable_banner_categories_meta',
		// 	'cream_magazine_pro_enable_banner_format_icon' 
		// 	];

		// cream_magazine_pro_control_visibility( 
		// 	'cream_magazine_pro_enable_banner', 
		// 	bannerDependentControls 
		// );

		

		
	});
})( jQuery );
