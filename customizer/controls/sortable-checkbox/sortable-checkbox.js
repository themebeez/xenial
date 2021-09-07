(function($){

	"use strict";

	jQuery( document ).ready(function($) {
		/**
		 * Pill Checkbox Custom Control
		 *
		 * @author Anthony Hortin <http://maddisondesigns.com>
		 * @license http://www.gnu.org/licenses/gpl-2.0.html
		 * @link https://github.com/maddisondesigns
		 */

		$( ".sortable-checkbox_control .sortable" ).sortable({
			placeholder: "pill-ui-state-highlight",
			update: function( event, ui ) {
				taleBlogGetAllPillCheckboxes($(this).parent());
			}
		});

		$('.sortable-checkbox_control .sortable-pill-checkbox').on('change', function () {
			taleBlogGetAllPillCheckboxes($(this).parent().parent().parent());
		});

		// Get the values from the checkboxes and add to our hidden field
		function taleBlogGetAllPillCheckboxes($element) {
			var inputValues = $element.find('.sortable-pill-checkbox').map(function() {
				if( $(this).is(':checked') ) {
					return $(this).val();
				}
			}).toArray();
			$element.find('.customize-control-sortable-checkbox').val(inputValues).trigger('change');
		}
	});
})(jQuery);