( function($) {

	jQuery( document ).ready( function() {

		/* Widget Media Upload */

	    function media_upload( button_class ) {

            var _custom_media = false,

            _orig_send_attachment = wp.media.editor.send.attachment;

            $('body').on('click', button_class, function(e) {

                _custom_media = true;

                wp.media.editor.send.attachment = function( props, attachment ){

                    if ( _custom_media  ) {

                        $('.custom_media_url').val(attachment.name).trigger('change');

                        $('.custom_media_image').attr('src',attachment.url).css('display','block');

                    } else {

                        return _orig_send_attachment.apply( this, [props, attachment] );

                    }

                }

                wp.media.editor.open(this);

                return false;

            });

        }

        media_upload('.custom_media_button');
	} );

} ) ( jQuery );