(function($) {

	jQuery(document).ready(function() {

		/**
		 * TinyMCE Custom Control
		 *
		 * @author Anthony Hortin <http://maddisondesigns.com>
		 * @license http://www.gnu.org/licenses/gpl-2.0.html
		 * @link https://github.com/maddisondesigns
		 */
		$('.customize-control-tinymce-editor').each(function(){
			// Get the toolbar strings that were passed from the PHP Class
			var tinyMCEToolbar1String = _wpCustomizeSettings.controls[$(this).attr('id')].xenialTinyMCEToolbar1;
			var tinyMCEToolbar2String = _wpCustomizeSettings.controls[$(this).attr('id')].xenialTinyMCEToolbar2;
			var tinyMCEMediaButtons = _wpCustomizeSettings.controls[$(this).attr('id')].xenialEditorMediaButtons;

			wp.editor.initialize( $(this).attr('id'), {
				tinymce: {
					wpautop: true,
					toolbar1: tinyMCEToolbar1String,
					toolbar2: tinyMCEToolbar2String
				},
				quicktags: true,
				mediaButtons: tinyMCEMediaButtons
			});
		});

		$(document).on( 'tinymce-editor-init', function( event, editor ) {
			editor.on('change', function(e) {
				tinyMCE.triggerSave();
				$('#'+editor.id).trigger('change');
			});
		});
	});
	
})( jQuery );