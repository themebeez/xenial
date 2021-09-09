<?php 


if ( ! class_exists( 'Xenial_Customize_Button_Checkbox_Control' ) ) {

	/**
	 * Image Check Box Custom Control
	 *
	 * @author Anthony Hortin <http://maddisondesigns.com>
	 * @license http://www.gnu.org/licenses/gpl-2.0.html
	 * @link https://github.com/maddisondesigns
	 */
	class Xenial_Customize_Button_Checkbox_Control extends WP_Customize_Control {

 		/**
 		 * The type of control being rendered
 		 */
  		public $type = 'xenial-button-checkbox';

 		/**
 		 * Enqueue our scripts and styles
 		 */
  		public function enqueue() {

  			$asset_uri = XENIAL_THEME_URI . '/customizer/controls/button-checkbox/';

            wp_enqueue_style( 
                XENIAL_THEME_SLUG . '-button-checkbox',
                $asset_uri . 'button-checkbox.css', 
                null, 
                XENIAL_THEME_VERSION,
                'all'
            );

            wp_enqueue_script(
				XENIAL_THEME_SLUG . '-button-checkbox',
				$asset_uri . 'button-checkbox.js',
				[ 'jquery' ],
				XENIAL_THEME_VERSION,
				true
			);
  		}

 		/**
 		 * Render the control in the customizer
 		 */
  		public function render_content() {

  			$values = $this->value();

  			if ( $values ) {
  				$values = explode( ',', $values );
  			}

  			$item = isset( $this->input_attrs['item'] ) ? $this->input_attrs['item'] : 'text';

  			$columns = isset( $this->input_attrs['columns'] ) ? $this->input_attrs['columns'] : 3;

  			$choices = ! empty( $this->choices ) ? $this->choices : [];
  			?>
 			<div class="xenial-button-checkbox-control button-checkbox-columns-<?php echo esc_attr( $columns ); ?>">
 				<?php 
 				if( !empty( $this->label ) ) { 
 					?>
 					<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
 					<?php 
 				} 

 				if( !empty( $this->description ) ) { 
 					?>
 					<span class="customize-control-description"><?php echo esc_html( $this->description ); ?></span>
 					<?php 
 				} 
 				?>
				<input type="hidden" id="<?php echo esc_attr( $this->id ); ?>" name="<?php echo esc_attr( $this->id ); ?>" value="<?php echo esc_attr( $values ); ?>" class="customize-control-multi-button-checkbox" <?php $this->link(); ?> />
				<div class="button-checkboxes">
					<?php 
	 				if ( $choices ) {
		 				foreach ( $choices as $key => $value ) { 
		 					?>
		 					<label class="checkbox-label <?php echo esc_attr( $item ); ?>-checkbox">
		 						<input type="checkbox" name="<?php echo esc_attr( $key ); ?>" value="<?php echo esc_attr( $key ); ?>" <?php checked( in_array( $key , $values ), 1 ); ?> class="multi-button-checkbox"/>
		 						<?php 
		 						switch ( $item ) {
		 							case 'image':
		 								echo '<img src="' . esc_attr( $value['image'] ) . '" alt="' . esc_attr( $value['name'] ) . '" title="' . esc_attr( $value['name'] ) . '" />';
		 								break;
		 							case 'icon' :
		 								echo '<span class="dashicons ' . esc_attr( $value ) . '"></span>';
		 								break;
		 							case 'icon-text' :
		 								echo '<span class="dashicons ' . esc_attr( $value['icon'] ) . '"> ' . esc_html( $value['text'] ) . '</span>';
		 								break;
		 							default :
		 								echo '<span>' . esc_html( $value ) . '</span>';
		 						}
		 						?> 						
		 					</label>
		 					<?php	
		 				} 
		 			}
	 				?>
				</div>
 			</div>
  			<?php
  		}
  	}
}