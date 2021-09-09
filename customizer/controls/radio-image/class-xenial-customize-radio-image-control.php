<?php
/**
 * Radio Image Custom Control
 */

if( ! class_exists( 'Xenial_Customize_Radio_Image_Control' ) ) {

    class Xenial_Customize_Radio_Image_Control extends WP_Customize_Control {
        
        public $type = 'radio-image';

        /**
         * Enqueue our scripts and styles
         */
        public function enqueue() {

            $asset_uri = XENIAL_THEME_URI . '/customizer/controls/radio-image/';

            wp_enqueue_style( 
                XENIAL_THEME_SLUG . '-radio-image',
                $asset_uri . 'radio-image.css', 
                null, 
                XENIAL_THEME_VERSION 
            );
        }

        public function render_content() {
            
            $name = '_customize-radio-' . $this->id;
            ?>
            <span class="customize-control-title">
                <?php echo esc_html( $this->label ); ?>
            </span>
            <div id="input_<?php echo esc_attr( $this->id ); ?>" class="image">
                <?php 
                foreach ( $this->choices as $value => $label ) : 
                    ?>                
                    <label for="<?php echo esc_attr( $this->id ) . esc_attr( $value ); ?>">
                        <input class="image-select" type="radio" value="<?php echo esc_attr( $value ); ?>" name="<?php echo esc_attr( $name ); ?>" id="<?php echo esc_attr( $this->id ) . esc_attr( $value ); ?>" <?php esc_url( $this->link() ); checked( $this->value(), $value ); ?>>
                        <img src="<?php echo esc_url( $label ); ?>"/>
                    </label>
                    <?php 
                endforeach; 
                ?>
            </div>
            <?php
        }
    }
}