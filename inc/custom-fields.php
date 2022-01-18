<?php
/**
 * Class for creating custom meta fields for page and post.
 *
 * @package Xenial
 */

if( ! class_exists( 'Xenial_Custom_Fields' ) ) :

	class Xenial_Custom_Fields {

		public function __construct() {

			// Register post meta fields and save meta fields values.
			add_action( 'admin_init', array( $this, 'register_post_meta' ) );
			add_action( 'save_post', array( $this, 'save_theme_post_meta' ) );
		}

		/**
		 * Register post custom meta fields.
		 *
		 * @since    1.0.0
		 */
		public function register_post_meta() {   

		    add_meta_box( 
		    	'theme_post_meta', 
		    	__( 'Xenial Options', 'xenial' ), 
		    	array( $this, 'theme_post_meta_template' ), 
		    	array( 'page' ), 
		    	'side', 
		    	'default' 
		    );
		}

		/**
		 * Custom Sidebar Post Meta.
		 *
		 * @since    1.0.0
		 */
		public function theme_post_meta_template() {

			global $post;

			$sidebar_position = get_post_meta( $post->ID, 'xenial_post_sidebar_position', true );

			$content_layout = get_post_meta( $post->ID, 'xenial_post_content_layout', true );

			$theme_header_display_value = get_post_meta( $post->ID, 'xenial_theme_header_display', true );

			$theme_footer_display_value = get_post_meta( $post->ID, 'xenial_theme_footer_display', true );

			$disable_page_header = get_post_meta( $post->ID, 'xenial_post_disable_page_header', true );

			$page_header_width = get_post_meta( $post->ID, 'xenial_page_header_width', true );

			$disable_page_title = get_post_meta( $post->ID, 'xenial_post_disable_page_title', true );

			$breadcrumbs_display_value = get_post_meta( $post->ID, 'xenial_breadcrumbs_display', true );

			$disable_featured_img = get_post_meta( $post->ID, 'xenial_post_disable_featured_image', true );

		    wp_nonce_field( 'xenial_post_meta_nonce', 'xenial_post_meta_nonce_id' );

		    $sidebar_choices = array(
		    	'default' => esc_html__( 'Default', 'xenial' ),
		        'right-sidebar' => esc_html__( 'Right Sidebar', 'xenial' ),
		        'left-sidebar' => esc_html__( 'Left Sidebar', 'xenial' ),
		        'no-sidebar' => esc_html__( 'No Sidebar', 'xenial' )
		    );

		    $content_layout_choices = array(
		    	'default' => esc_html__( 'Default', 'xenial' ),
		        'wide' => esc_html__( 'Wide', 'xenial' ),
				'container' => esc_html__( 'Container', 'xenial' ),
				'narrow' => esc_html__( 'Narrow', 'xenial' )
		    );

		    $display_choices = array(
		    	'default' => esc_html__( 'Default', 'xenial' ),
		    	'enable' => esc_html__( 'Enable', 'xenial' ),
		    	'disable' => esc_html__( 'Disable', 'xenial' )
		    );
		    ?>
		    <table class="options xe-pagemeta-table">
		        <tr>
		        	<td>
		        		<label for="xenial-sidebar-position-meta"><?php echo esc_html__( 'Theme Sidebar Display', 'xenial' ); ?></label>
			        	<select name="xenial-sidebar-position-meta" id="xenial-sidebar-position-meta" class="xenial-select-field">
			        		<?php
			        		foreach( $sidebar_choices as $key => $choice ) {
			        			?>
			        			<option value="<?php echo esc_attr( $key ); ?>" <?php selected( $sidebar_position, $key ); ?>><?php echo esc_html( $choice ); ?></option>
			        			<?php
			        		}
			        		?>
			        	</select>
		        	</td>
		        </tr>

		        <tr>
		        	<td>
		        		<label for="xenial-content-layout-position-meta"><?php echo esc_html__( 'Content Width', 'xenial' ); ?></label>
			        	<select name="xenial-content-layout-position-meta" id="xenial-content-layout-position-meta" class="xenial-select-field">
			        		<?php
			        		foreach( $content_layout_choices as $key => $choice ) {
			        			?>
			        			<option value="<?php echo esc_attr( $key ); ?>" <?php selected( $content_layout, $key ); ?>><?php echo esc_html( $choice ); ?></option>
			        			<?php
			        		}
			        		?>
			        	</select>
		        	</td>
		        </tr>

		        <tr>
		        	<td>
		        		<label for="xenial-default-header-meta"><?php echo esc_html__( 'Theme Header', 'xenial' ); ?>
		        		</label>
		        		<select name="xenial-default-header-meta" id="xenial-default-header-meta" class="xenial-select-field">
		        			<?php foreach ( $display_choices as $value => $label ) { ?>
		        				<option value="<?php echo esc_attr( $value ); ?>" <?php selected( $value, $theme_header_display_value ); ?>><?php echo esc_html( $label ); ?></option>
		        			<?php } ?>
		        		</select>
			        	
		        	</td>
		        </tr>

		        <tr>
		        	<td>
		        		<label for="xenial-default-footer-meta"><?php echo esc_html__( 'Theme Footer', 'xenial' ); ?>
		        		</label>
		        		<select name="xenial-default-footer-meta" id="xenial-default-footer-meta" class="xenial-select-field">
		        			<?php foreach ( $display_choices as $value => $label ) { ?>
		        				<option value="<?php echo esc_attr( $value ); ?>" <?php selected( $value, $theme_header_display_value ); ?>><?php echo esc_html( $label ); ?></option>
		        			<?php } ?>
		        		</select>
			        	
		        	</td>
		        </tr>

		        <tr>
		        	<td>
		        		<label for="xenial-page-header-meta">
		        			<input type="checkbox" name="xenial-page-header-meta" id="xenial-page-header-meta" <?php checked( $disable_page_header, true ); ?>>
		        			<?php echo esc_html__( 'Disable Page Header', 'xenial' ); ?>
		        		</label>
		        	</td>
		        </tr>

		        <tr>
		        	<td>
		        		<label for="xenial-page-header-width-meta"><?php echo esc_html__( 'Page Header Width', 'xenial' ); ?></label>
			        	<select name="xenial-page-header-width-meta" id="xenial-page-header-width-meta" class="xenial-select-field">
			        		<?php
			        		foreach( $content_layout_choices as $key => $choice ) {
			        			?>
			        			<option value="<?php echo esc_attr( $key ); ?>" <?php selected( $page_header_width, $key ); ?>><?php echo esc_html( $choice ); ?></option>
			        			<?php
			        		}
			        		?>
			        	</select>
		        	</td>
		        </tr>

		        <tr>
		        	<td>
		        		<label for="xenial-page-title-meta">
		        			<input type="checkbox" name="xenial-page-title-meta" id="xenial-page-title-meta" <?php checked( $disable_page_title, true ); ?>>
		        			<?php echo esc_html__( 'Disable Page Title', 'xenial' ); ?>
		        		</label>
		        	</td>
		        </tr>

		        <tr>
		        	<td>
		        		<label for="xenial-breadcrumb-meta"><?php echo esc_html__( 'Breadcrumbs', 'xenial' ); ?>
		        		</label>
		        		<select name="xenial-breadcrumb-meta" id="xenial-breadcrumb-meta" class="xenial-select-field">
		        			<?php foreach ( $display_choices as $value => $label ) { ?>
		        				<option value="<?php echo esc_attr( $value ); ?>" <?php selected( $value, $breadcrumbs_display_value ); ?>><?php echo esc_html( $label ); ?></option>
		        			<?php } ?>
		        		</select>
			        	
		        	</td>
		        </tr>	       

		        <tr>
		        	<td>
		        		<label for="xenial-featured-img-meta">
		        			<input type="checkbox" name="xenial-featured-img-meta" id="xenial-featured-img-meta" <?php checked( $disable_featured_img, true ); ?>>
		        			<?php echo esc_html__( 'Disable Featured Image', 'xenial' ); ?>
		        		</label>
		        	</td>
		        </tr> 
		    </table>   
		    <?php   
		}

		/**
		 * Save Custom Sidebar Position Post Meta.
		 *
		 * @since    1.0.0
		 */
		public function save_theme_post_meta() {

		    global $post;  

		    // Bail if we're doing an auto save
		    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {

		        return;
		    }
		    
		    // if our nonce isn't there, or we can't verify it, bail
		    if ( ! isset( $_POST['xenial_post_meta_nonce_id'] ) || ! wp_verify_nonce( sanitize_key( $_POST['xenial_post_meta_nonce_id'] ), 'xenial_post_meta_nonce' ) ) {

		        return;
		    }
		    
		    // if our current user can't edit this post, bail
		    if ( ! current_user_can( 'edit_post', $post->ID ) ) {

		        return;
		    } 

		    if ( isset( $_POST['xenial-sidebar-position-meta'] ) ) {

				update_post_meta( $post->ID, 'xenial_post_sidebar_position', sanitize_text_field( wp_unslash( $_POST['xenial-sidebar-position-meta'] ) ) ); 
			}

			if ( isset( $_POST['xenial-content-layout-position-meta'] ) ) {

				update_post_meta( $post->ID, 'xenial_post_content_layout', sanitize_text_field( wp_unslash( $_POST['xenial-content-layout-position-meta'] ) ) ); 
			}

			if ( isset( $_POST['xenial-default-header-meta'] ) ) {
				update_post_meta( $post->ID, 'xenial_theme_header_display', sanitize_text_field( wp_unslash( $_POST['xenial-default-header-meta'] ) ) ); 
			}

			if ( isset( $_POST['xenial-default-footer-meta'] ) ) {
				update_post_meta( $post->ID, 'xenial_theme_footer_display', sanitize_text_field( wp_unslash( $_POST['xenial-default-footer-meta'] ) ) ); 
			}
			

			update_post_meta( $post->ID, 'xenial_post_disable_page_header', ( ( isset( $_POST['xenial-page-header-meta']  ) ) ? true : false ) );

			if ( isset( $_POST['xenial-page-header-width-meta'] ) ) {
				update_post_meta( $post->ID, 'xenial_page_header_width', sanitize_text_field( wp_unslash( $_POST['xenial-page-header-width-meta'] ) ) );
			}

			update_post_meta( $post->ID, 'xenial_post_disable_page_title', ( ( isset( $_POST['xenial-page-title-meta']  ) ) ? true : false ) );

			if ( isset( $_POST['xenial-breadcrumb-meta'] ) ) {
				update_post_meta( $post->ID, 'xenial_breadcrumbs_display', sanitize_text_field( wp_unslash( $_POST['xenial-breadcrumb-meta'] ) ) );
			}		

			update_post_meta( $post->ID, 'xenial_post_disable_featured_image', ( ( isset( $_POST['xenial-featured-img-meta']  ) ) ? true : false ) );
		}
	}
endif;

$xenial_custom_fields = new Xenial_Custom_Fields();