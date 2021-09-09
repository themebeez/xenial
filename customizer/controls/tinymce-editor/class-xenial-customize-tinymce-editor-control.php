<?php 

/**
 * TinyMCE Custom Control
 *
 * @author Anthony Hortin <http://maddisondesigns.com>
 * @license http://www.gnu.org/licenses/gpl-2.0.html
 * @link https://github.com/maddisondesigns
 */

if ( ! class_exists( 'Xenial_Customize_TinyMCE_Editor_Control' ) ) {

	class Xenial_Customize_TinyMCE_Editor_Control extends WP_Customize_Control {

		/**
		 * The type of control being rendered
		 */
		public $type = 'xenial-tinymce-editor';

		/**
		 * Enqueue our scripts and styles
		 */
		public function enqueue() {

			$asset_uri = XENIAL_THEME_URI . '/customizer/controls/tinymce-editor/';

			wp_enqueue_editor();

            wp_enqueue_style( 
                XENIAL_THEME_SLUG . '-tinymce-editor',
                $asset_uri . 'tinymce-editor.css', 
                null, 
                XENIAL_THEME_VERSION 
            );

            wp_enqueue_script( 
                XENIAL_THEME_SLUG . '-tinymce-editor',
                $asset_uri . 'tinymce-editor.js', 
                array( 'jquery' ), 
                XENIAL_THEME_VERSION, 
                true 
            );
		}
		/**
		 * Pass our TinyMCE toolbar string to JavaScript
		 */
		public function to_json() {
			parent::to_json();
			$this->json['xenialTinyMCEToolbar1'] = isset( $this->input_attrs['toolbar1'] ) ? $this->input_attrs['toolbar1'] : 'bold italic bullist numlist alignleft aligncenter alignright link';
			$this->json['xenialTinyMCEToolbar2'] = isset( $this->input_attrs['toolbar2'] ) ? $this->input_attrs['toolbar2'] : '';
			$this->json['xenialEditorMediaButtons'] = isset( $this->input_attrs['mediaButtons'] ) && ( $this->input_attrs['mediaButtons'] === true ) ? true : false;
		}

		/**
		 * Render the control in the customizer
		 */
		public function render_content(){
			?>
			<div class="tinymce-control">
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
				<?php if( ! empty( $this->description ) ) { ?>
					<span class="customize-control-description"><?php echo esc_html( $this->description ); ?></span>
				<?php } ?>
				<textarea id="<?php echo esc_attr( $this->id ); ?>" class="customize-control-tinymce-editor" <?php $this->link(); ?>><?php echo esc_attr( $this->value() ); ?></textarea>
			</div>
			<?php
		}
	}
}