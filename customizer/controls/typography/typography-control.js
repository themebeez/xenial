/**
 * Googe Font Select Custom Control
 *
 * @author Anthony Hortin <http://maddisondesigns.com>
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 * @link https://github.com/maddisondesigns
 */

wp.customize.controlConstructor['xenial-google-fonts'] = wp.customize.Control.extend({

	ready: function() {

		'use strict';

		var setting = this;

		var googleFontSelectEleSlimSelectInit = new SlimSelect({
			select: '#google-font-'+setting.id,
			showSearch: true
		});

		var googleFontWeightsEleSlimSelectInit = new SlimSelect({
			select: '#google-font-weights-'+setting.id,
			showSearch: false
		});

		var googleFontWeightsEleSlimSelectInit = new SlimSelect({
			select: '#google-font-weight-'+setting.id,
			showSearch: false
		});
	}
});

( function($) {

	jQuery( document ).ready( function($) {
		
		// jQuery('.google-fonts-list, .google-fonts-regularweight-style').select2();
		// jQuery('.google-fonts-weights').select2({
		// 	minimumResultsForSearch: -1
		// });

		$('.google-fonts-list').on('change', function() {
			var controlId = $(this).attr('data-id');
			var elementRegularWeight = $(this).parent().parent().find('#google-font-weights-'+controlId);
			var elementFontWeight = $(this).parent().parent().find('#google-font-weight-'+controlId);
			var selectedFont = $(this).val();
			var customizerControlName = $(this).attr('control-name');
			var elementBoldWeightCount = 0;

			// Clear Weight/Style dropdowns
			elementRegularWeight.empty();
			elementFontWeight.empty();
			// Make sure Italic & Bold dropdowns are enabled
			elementFontWeight.prop('disabled', false);

			// Get the Google Fonts control object
			var bodyfontcontrol = _wpCustomizeSettings.controls[customizerControlName];

			// Find the index of the selected font
			var indexes = $.map(bodyfontcontrol.googlefontslist, function(obj, index) {
				if(obj.family === selectedFont) {
					return index;
				}
			});
			var index = indexes[0];

			// For the selected Google font show the available weight/style variants
			$.each(bodyfontcontrol.googlefontslist[index].variants, function(val, text) {
				elementRegularWeight.append(
					$('<option></option>').val(text).html( xenial_readable_font(text) )
				);
				
				elementFontWeight.append(
					$('<option></option>').val(text).html(xenial_readable_font(text))
				);
				elementBoldWeightCount++;
			});

			if(elementBoldWeightCount == 0) {
				elementBoldWeight.append(
					$('<option></option>').val('').html('Not Available for this font')
				);
				elementBoldWeight.prop('disabled', 'disabled');
			}

			// Update the font category based on the selected font
			$(this).parent().parent().find('.google-fonts-category').val(bodyfontcontrol.googlefontslist[index].category);

			taleBlogGetAllSelects($(this).parent().parent());
		});

		$('.google_fonts_select_control select').on('change', function() {
			taleBlogGetAllSelects($(this).parent().parent());
		});

		function taleBlogGetAllSelects($element) {
			var selectedFont = {
				font: $element.find('.google-fonts-list').val(),
				regularweight: $element.find('.google-fonts-regularweight-style').val(),
				boldweight: $element.find('.google-fonts-weights').val(),
				category: $element.find('.google-fonts-category').val()
			};

			// Important! Make sure to trigger change event so Customizer knows it has to save the field
			$element.find('.customize-control-google-font-selection').val(JSON.stringify(selectedFont)).trigger('change');
		}

		function xenial_readable_font( text ) {

			var readbleText;

			switch ( text ) {

				case 'regular' :
					readbleText = '400 ' + text;
					break;
				case 'italic' :
					readbleText = '400 ' + text;
					break;
				default :
					readbleText = text.replace( 'italic', ' italic' ); 
			}

			return readbleText;
		}
	} );
})( jQuery, wp.customize );