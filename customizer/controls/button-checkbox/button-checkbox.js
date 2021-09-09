( function($) {

	jQuery(document).ready(function() {

		/**
		 * Image Check Box Custom Control
		 *
		 * @author Anthony Hortin <http://maddisondesigns.com>
		 * @license http://www.gnu.org/licenses/gpl-2.0.html
		 * @link https://github.com/maddisondesigns
		 */

		$('.multi-button-checkbox').on('change', function () {

			getAllCheckboxes($(this).parents('.xenial-button-checkbox-control'));
		});

		// Get the values from the checkboxes and add to our hidden field
		function getAllCheckboxes($element) {
			var inputValues = $element.find('.multi-button-checkbox').map(function() {
			    if( $(this).is(':checked') ) {
			    	return $(this).val();
			  	}		
		  	}).toArray();
		  	// Important! Make sure to trigger change event so Customizer knows it has to save the field
		  	$element.find('.customize-control-multi-button-checkbox').val(inputValues).trigger('change');
		}
	});
} )( jQuery );