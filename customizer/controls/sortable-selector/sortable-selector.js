wp.customize.controlConstructor['xenial-sortable-selector'] = wp.customize.Control.extend({

	ready: function() {

		'use strict';

		var setting = this;

		var selectEle = setting.container.find('select');

		var slimselectInit = new SlimSelect({
			select: '#'+selectEle.attr('id'),
			showSearch: true
		});
	}
});

(function($){

	"use strict";

	jQuery( document ).ready(function($) {

		/**
		 * Sortable Selector Custom Control
		 *
		 * @author Anthony Hortin <http://maddisondesigns.com>
		 * @license http://www.gnu.org/licenses/gpl-2.0.html
		 * @link https://github.com/maddisondesigns
		 */

		// Make our Repeater fields sortable
		$(this).find('.sortable-elements-wrapper.sortable').sortable({
			update: function(event, ui) {
				xenialGetAllInputs($(this).parent());
			}
		});

		// Remove item starting from it's parent element
		jQuery('.sortable-elements-wrapper').on('click', '.sortable-selector-input-delete', function(event) {
			event.preventDefault();
			var topParentWrapper = jQuery(this).parent().parent().parent();

			var selector = topParentWrapper.find('.sortable-selector-select');
			var selectedElementsWrapper = jQuery(this).parent().parent();

			var optionValue = jQuery(this).parent().find('.sortable-selector-input').val();
			$(this).parent().slideUp('fast', function() {
				$(this).remove();
				xenialGetAllInputs(topParentWrapper);
				xenialEnableOptionToSelector(selector,optionValue);
			});
		});

		// Add new item
		$('.sortable-selector-input-add').click(function(event) {
			event.preventDefault();
			var selector = jQuery(this).parent().find('.sortable-selector-select');
			var selectedElementsWrapper = jQuery(this).parent().parent().find('.sortable-elements-wrapper');

			var selectorValue = selector.val();
			var optionLabel = xenialGetOptionLabel(selector,selectorValue);

			xenialAppendRow(selectedElementsWrapper,selectorValue,optionLabel);

			xenialGetAllInputs(jQuery(this).parent().parent());
			xenialDisableOptionFromSelector(selector,selectorValue);
		});

		// Refresh our hidden field if any fields change
		jQuery('.sortable-elements-wrapper').change(function() {
			xenialGetAllInputs($(this).parent());
		});


		function xenialDisableOptionFromSelector(selector,optionValue) {
			selector.find('option').each(function() {
				var targetOption = jQuery(this);
				if( targetOption.attr('value') == optionValue ) {
					targetOption.attr('disabled', 'disabled');
				}
			});
		}

		function xenialEnableOptionToSelector(selector,optionValue) {
			selector.find('option').each(function() {
				var targetOption = jQuery(this);
				if( targetOption.attr('value') == optionValue ) {
					targetOption.removeAttr('disabled');
				}
			});
		}


		function xenialGetOptionLabel(selector,optionValue) {
			var label = '';
			selector.find('option').each(function() {
				var targetOption = jQuery(this);
				if ( targetOption.attr('value') == optionValue ) {
					label = targetOption.attr('data-label');
				}
			});
			return label;
		}

		function xenialAppendRow($element,inputValue,inputLabel) {
			var newRow = '<div class="sortable-element" style="display:none"><input type="hidden" value="' + inputValue + '" class="sortable-selector-input" /><span class="item-label">' + inputLabel + '</span><span class="sortable-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M11 11V5.828L9.172 7.657 7.757 6.243 12 2l4.243 4.243-1.415 1.414L13 5.828V11h5.172l-1.829-1.828 1.414-1.415L22 12l-4.243 4.243-1.414-1.415L18.172 13H13v5.172l1.828-1.829 1.415 1.414L12 22l-4.243-4.243 1.415-1.414L11 18.172V13H5.828l1.829 1.828-1.414 1.415L2 12l4.243-4.243 1.414 1.415L5.828 11z"/></svg></span><a class="sortable-selector-input-delete" href="#"><span class="dashicons dashicons-no-alt"></span></a></div>';

			$element.append(newRow);
			$element.find('.sortable-element:last').slideDown();
		}

		function xenialGetAllInputs($element) {
			var inputValues = $element.find('.sortable-selector-input').map(function() {
				return $(this).val();
			}).toArray();
			// Add all the values from our repeater fields to the hidden field (which is the one that actually gets saved)
			$element.find('.sortable-selector-value').val(inputValues);
			// Important! Make sure to trigger change event so Customizer knows it has to save the field
			$element.find('.sortable-selector-value').trigger('change');
		}
	});
})(jQuery);