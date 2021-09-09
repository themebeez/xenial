<?php

if ( ! class_exists( 'Xenial_Customize_Button_Group_Control' ) ) {

	/**
	 * Text Radio Button Custom Control
	 *
	 * @author Anthony Hortin <http://maddisondesigns.com>
	 * @license http://www.gnu.org/licenses/gpl-2.0.html
	 * @link https://github.com/maddisondesigns
	 */
	 class Xenial_Customize_Button_Group_Control extends WP_Customize_Control {
 		/**
 		 * The type of control being rendered
 		 */
  		public $type = 'xenial-radio-button-group';
 		/**
 		 * Enqueue our scripts and styles
 		 */
  		public function enqueue() {

  			$asset_uri = XENIAL_THEME_URI . '/customizer/controls/button-group/';

            wp_enqueue_style( 
                XENIAL_THEME_SLUG . '-button-group',
                $asset_uri . 'button-group.css', 
                null, 
                XENIAL_THEME_VERSION 
            );
  		}
 		/**
 		 * Render the control in the customizer
 		 */
  		public function render_content() {
  			$item = isset( $this->input_attrs['item'] ) ? $this->input_attrs['item'] : 'text';
  			$columns = isset( $this->input_attrs['columns'] ) ? $this->input_attrs['columns'] : 3;
  			?>
 			<div class="xenial-<?php echo esc_attr( $item ); ?>-radio-button-group-control">
 				<?php if( !empty( $this->label ) ) { ?>
 					<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
 				<?php } ?>
 				<?php if( !empty( $this->description ) ) { ?>
 					<span class="customize-control-description"><?php echo esc_html( $this->description ); ?></span>
 				<?php } ?>

				<div class="radio-buttons group-columns-<?php echo esc_attr( $columns ); ?>">
					<?php 
					foreach ( $this->choices as $key => $value ) { 
						?>
	 					<label class="radio-button-label">
	 						<input type="radio" name="<?php echo esc_attr( $this->id ); ?>" value="<?php echo esc_attr( $key ); ?>" <?php $this->link(); ?> <?php checked( esc_attr( $key ), $this->value() ); ?>/>
	 						<?php 
	 						switch( $this->input_attrs['item'] ) {
	 							case 'image' :
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
	 				?>
				</div>
 			</div>
  			<?php
  		}
  	}
}