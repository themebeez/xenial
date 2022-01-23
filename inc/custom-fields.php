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
			add_action( 'save_post', array( $this, 'save_theme_elements_post_meta' ) );
			add_action( 'save_post', array( $this, 'save_page_content_elements_post_meta' ) );
			add_action( 'save_post', array( $this, 'save_post_content_elements_post_meta' ) );
		}

		/**
		 * Register post custom meta fields.
		 *
		 * @since    1.0.0
		 */
		public function register_post_meta() {   

		    add_meta_box( 
		    	'xenial_theme_elements_post_meta', 
		    	esc_html__( 'Xenial Theme Elements', 'xenial' ), 
		    	array( $this, 'theme_elements_post_meta_template' ), 
		    	array( 'post', 'page' ), 
		    	'side', 
		    	'default' 
		    );

		    add_meta_box( 
		    	'xenial_page_content_meta', 
		    	esc_html__( 'Xenial Page Content Elements', 'xenial' ), 
		    	array( $this, 'page_content_elements_meta_template' ), 
		    	array( 'page' ), 
		    	'side', 
		    	'default' 
		    );

		    add_meta_box( 
		    	'xenial_post_content_meta', 
		    	esc_html__( 'Xenial Post Content Elements', 'xenial' ), 
		    	array( $this, 'post_content_elements_meta_template' ), 
		    	array( 'post' ), 
		    	'side', 
		    	'default' 
		    );
		}

		

		public function theme_elements_post_meta_template( $post ) {

			$header_display_value = get_post_meta( $post->ID, 'xenial_theme_header_display', true );

			$transparent_header_display_value = get_post_meta( $post->ID, 'xenial_transparent_header_display', true );

			$sidebar_position_value = get_post_meta( $post->ID, 'xenial_post_sidebar_position', true );

			$footer_display_value = get_post_meta( $post->ID, 'xenial_theme_footer_display', true );

			$sidebar_positions = $this->get_sidebar_position_choices();

			$display_choices = $this->get_display_choices();

			wp_nonce_field( 'xenial_theme_elements_post_meta_nonce', 'xenial_theme_elements_post_meta_nonce_id' );
			?>
			<table class="options xe-pagemeta-table">
				<tr>
		        	<td>
		        		<label for="xenial-default-header-meta"><?php echo esc_html__( 'Display Header', 'xenial' ); ?>
		        		</label>
		        		<select name="xenial-default-header-meta" id="xenial-default-header-meta" class="xenial-select-field">
		        			<?php foreach ( $display_choices as $value => $label ) { ?>
		        				<option value="<?php echo esc_attr( $value ); ?>" <?php selected( $value, $header_display_value ); ?>><?php echo esc_html( $label ); ?></option>
		        			<?php } ?>
		        		</select>

		        		<hr/>

		        		<label for="xenial-transparent-header-meta"><?php echo esc_html__( 'Display Transparent Header', 'xenial' ); ?>
		        		</label>
		        		<select name="xenial-transparent-header-meta" id="xenial-transparent-header-meta" class="xenial-select-field">
		        			<?php foreach ( $display_choices as $value => $label ) { ?>
		        				<option value="<?php echo esc_attr( $value ); ?>" <?php selected( $value, $transparent_header_display_value ); ?>><?php echo esc_html( $label ); ?></option>
		        			<?php } ?>
		        		</select>
		        	</td>
		        </tr>

		        <tr>
		        	<td>
		        		<label for="xenial-sidebar-position-meta"><?php echo esc_html__( 'Display Sidebar', 'xenial' ); ?></label>
			        	<select name="xenial-sidebar-position-meta" id="xenial-sidebar-position-meta" class="xenial-select-field">
			        		<?php
			        		foreach( $sidebar_positions as $value => $label ) {
			        			?>
			        			<option value="<?php echo esc_attr( $value ); ?>" <?php selected( $sidebar_position_value, $value ); ?>><?php echo esc_html( $label ); ?></option>
			        			<?php
			        		}
			        		?>
			        	</select>
		        	</td>
		        </tr>

		        <tr>
		        	<td>
		        		<label for="xenial-default-footer-meta"><?php echo esc_html__( 'Display Footer', 'xenial' ); ?>
		        		</label>
		        		<select name="xenial-default-footer-meta" id="xenial-default-footer-meta" class="xenial-select-field">
		        			<?php foreach ( $display_choices as $value => $label ) { ?>
		        				<option value="<?php echo esc_attr( $value ); ?>" <?php selected( $value, $footer_display_value ); ?>><?php echo esc_html( $label ); ?></option>
		        			<?php } ?>
		        		</select>
		        	</td>
		        </tr>
		    </table>
		    <?php
		}

		public function page_content_elements_meta_template( $post ) {

			$content_layout = get_post_meta( $post->ID, 'xenial_post_content_layout', true );

			$disable_page_header = get_post_meta( $post->ID, 'xenial_post_disable_page_header', true );

			$page_header_width = get_post_meta( $post->ID, 'xenial_page_header_width', true );

			$disable_page_title = get_post_meta( $post->ID, 'xenial_post_disable_page_title', true );

			$breadcrumbs_display_value = get_post_meta( $post->ID, 'xenial_breadcrumbs_display', true );

			$featured_image_display = get_post_meta( $post->ID, 'xenial_post_featured_image_display', true );

			$display_choices = $this->get_display_choices();

			$container_choices = $this->get_container_width_choices();

			wp_nonce_field( 'xenial_page_content_elements_post_meta_nonce', 'xenial_page_content_elements_post_meta_nonce_id' );
			?>
			<table class="options xe-pagemeta-table">
		        <tr>
		        	<td>
		        		<label for="xenial-content-layout-position-meta"><?php echo esc_html__( 'Content Width', 'xenial' ); ?></label>
			        	<select name="xenial-content-layout-position-meta" id="xenial-content-layout-position-meta" class="xenial-select-field">
			        		<?php
			        		foreach( $container_choices as $value => $label ) {
			        			?>
			        			<option value="<?php echo esc_attr( $value ); ?>" <?php selected( $content_layout, $value ); ?>><?php echo esc_html( $label ); ?></option>
			        			<?php
			        		}
			        		?>
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
			        		foreach( $container_choices as $value => $label ) {
			        			?>
			        			<option value="<?php echo esc_attr( $value ); ?>" <?php selected( $page_header_width, $value ); ?>><?php echo esc_html( $label ); ?></option>
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
		        		<label for="xenial-breadcrumb-meta"><?php echo esc_html__( 'Display Breadcrumbs', 'xenial' ); ?>
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
		        		<label for="xenial-featured-img-meta"><?php echo esc_html__( 'Display Featured Image', 'xenial' ); ?>
		        		</label>
		        		<select name="xenial-featured-img-meta" id="xenial-featured-img-meta" class="xenial-select-field">
		        			<?php 
		        			foreach ( $display_choices as $value => $label ) { 
		        				if ( $value != 'enable' ) {
		        					?>
		        					<option value="<?php echo esc_attr( $value ); ?>" <?php selected( $value, $featured_image_display ); ?>><?php echo esc_html( $label ); ?></option>
		        					<?php 
		        				}
		        			} 
		        			?>
		        		</select>
			        	
		        	</td>
		        </tr>	
		    </table>
			<?php
		}

		public function post_content_elements_meta_template( $post ) {

			$content_layout = get_post_meta( $post->ID, 'xenial_post_content_layout', true );

			$page_header_width = get_post_meta( $post->ID, 'xenial_page_header_width', true );

			$breadcrumbs_display_value = get_post_meta( $post->ID, 'xenial_breadcrumbs_display', true );

			$featured_image_display = get_post_meta( $post->ID, 'xenial_post_featured_image_display', true );

			$display_choices = $this->get_display_choices();

			$container_choices = $this->get_container_width_choices();

			wp_nonce_field( 'xenial_post_content_elements_post_meta_nonce', 'xenial_post_content_elements_post_meta_nonce_id' );
			?>
			<table class="options xe-pagemeta-table">
		        <tr>
		        	<td>
		        		<label for="xenial-content-layout-position-meta"><?php echo esc_html__( 'Content Width', 'xenial' ); ?></label>
			        	<select name="xenial-content-layout-position-meta" id="xenial-content-layout-position-meta" class="xenial-select-field">
			        		<?php
			        		foreach( $container_choices as $value => $label ) {
			        			?>
			        			<option value="<?php echo esc_attr( $value ); ?>" <?php selected( $content_layout, $value ); ?>><?php echo esc_html( $label ); ?></option>
			        			<?php
			        		}
			        		?>
			        	</select>
		        	</td>
		        </tr>

		        <tr>
		        	<td>
		        		<label for="xenial-page-header-width-meta"><?php echo esc_html__( 'Breadcrumbs Width', 'xenial' ); ?></label>
			        	<select name="xenial-page-header-width-meta" id="xenial-page-header-width-meta" class="xenial-select-field">
			        		<?php
			        		foreach( $container_choices as $value => $label ) {
			        			?>
			        			<option value="<?php echo esc_attr( $value ); ?>" <?php selected( $page_header_width, $value ); ?>><?php echo esc_html( $label ); ?></option>
			        			<?php
			        		}
			        		?>
			        	</select>
		        	</td>
		        </tr>

		        <tr>
		        	<td>
		        		<label for="xenial-breadcrumb-meta"><?php echo esc_html__( 'Display Breadcrumbs', 'xenial' ); ?>
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
		        		<label for="xenial-featured-img-meta"><?php echo esc_html__( 'Display Featured Image', 'xenial' ); ?>
		        		</label>
		        		<select name="xenial-featured-img-meta" id="xenial-featured-img-meta" class="xenial-select-field">
		        			<?php 
		        			foreach ( $display_choices as $value => $label ) { 
		        				if ( $value != 'enable' ) {
		        					?>
		        					<option value="<?php echo esc_attr( $value ); ?>" <?php selected( $value, $featured_image_display ); ?>><?php echo esc_html( $label ); ?></option>
		        					<?php 
		        				}
		        			} 
		        			?>
		        		</select>
			        	
		        	</td>
		        </tr>	
		    </table>
			<?php
		}

		public function save_theme_elements_post_meta( $post_id ) { 

		    // Bail if we're doing an auto save
		    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		        return;
		    }
		    
		    // if our nonce isn't there, or we can't verify it, bail
		    if ( ! isset( $_POST['xenial_theme_elements_post_meta_nonce_id'] ) || ! wp_verify_nonce( sanitize_key( $_POST['xenial_theme_elements_post_meta_nonce_id'] ), 'xenial_theme_elements_post_meta_nonce' ) ) {
		        return;
		    }
		    
		    // if our current user can't edit this post, bail
		    if ( ! current_user_can( 'edit_post', $post_id ) ) {
		        return;
		    } 

		    if ( isset( $_POST['xenial-sidebar-position-meta'] ) ) {

				update_post_meta( $post_id, 'xenial_post_sidebar_position', sanitize_text_field( wp_unslash( $_POST['xenial-sidebar-position-meta'] ) ) ); 
			}

			if ( isset( $_POST['xenial-default-header-meta'] ) ) {
				update_post_meta( $post_id, 'xenial_theme_header_display', sanitize_text_field( wp_unslash( $_POST['xenial-default-header-meta'] ) ) ); 
			}

			if ( isset( $_POST['xenial-transparent-header-meta'] ) ) {
				update_post_meta( $post_id, 'xenial_transparent_header_display', sanitize_text_field( wp_unslash( $_POST['xenial-transparent-header-meta'] ) ) ); 
			}

			if ( isset( $_POST['xenial-default-footer-meta'] ) ) {
				update_post_meta( $post_id, 'xenial_theme_footer_display', sanitize_text_field( wp_unslash( $_POST['xenial-default-footer-meta'] ) ) ); 
			}
		}

		public function save_page_content_elements_post_meta( $post_id ) { 

		    // Bail if we're doing an auto save
		    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {

		        return;
		    }
		    
		    // if our nonce isn't there, or we can't verify it, bail
		    if ( ! isset( $_POST['xenial_page_content_elements_post_meta_nonce_id'] ) || ! wp_verify_nonce( sanitize_key( $_POST['xenial_page_content_elements_post_meta_nonce_id'] ), 'xenial_page_content_elements_post_meta_nonce' ) ) {

		        return;
		    }
		    
		    // if our current user can't edit this post, bail
		    if ( ! current_user_can( 'edit_post', $post_id ) ) {
		        return;
		    } 

			if ( isset( $_POST['xenial-content-layout-position-meta'] ) ) {
				update_post_meta( $post_id, 'xenial_post_content_layout', sanitize_text_field( wp_unslash( $_POST['xenial-content-layout-position-meta'] ) ) ); 
			}			

			update_post_meta( $post_id, 'xenial_post_disable_page_header', ( ( isset( $_POST['xenial-page-header-meta']  ) ) ? true : false ) );

			if ( isset( $_POST['xenial-page-header-width-meta'] ) ) {
				update_post_meta( $post_id, 'xenial_page_header_width', sanitize_text_field( wp_unslash( $_POST['xenial-page-header-width-meta'] ) ) );
			}

			update_post_meta( $post_id, 'xenial_post_disable_page_title', ( ( isset( $_POST['xenial-page-title-meta']  ) ) ? true : false ) );

			if ( isset( $_POST['xenial-breadcrumb-meta'] ) ) {
				update_post_meta( $post_id, 'xenial_breadcrumbs_display', sanitize_text_field( wp_unslash( $_POST['xenial-breadcrumb-meta'] ) ) );
			}		

			if ( isset( $_POST['xenial-featured-img-meta'] ) ) {
				update_post_meta( $post_id, 'xenial_post_featured_image_display', sanitize_text_field( wp_unslash( $_POST['xenial-featured-img-meta'] ) ) );
			}	
		}

		public function save_post_content_elements_post_meta( $post_id ) { 

		    // Bail if we're doing an auto save
		    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {

		        return;
		    }
		    
		    // if our nonce isn't there, or we can't verify it, bail
		    if ( ! isset( $_POST['xenial_post_content_elements_post_meta_nonce_id'] ) || ! wp_verify_nonce( sanitize_key( $_POST['xenial_post_content_elements_post_meta_nonce_id'] ), 'xenial_post_content_elements_post_meta_nonce' ) ) {

		        return;
		    }
		    
		    // if our current user can't edit this post, bail
		    if ( ! current_user_can( 'edit_post', $post_id ) ) {
		        return;
		    } 

			if ( isset( $_POST['xenial-content-layout-position-meta'] ) ) {
				update_post_meta( $post_id, 'xenial_post_content_layout', sanitize_text_field( wp_unslash( $_POST['xenial-content-layout-position-meta'] ) ) ); 
			}

			if ( isset( $_POST['xenial-page-header-width-meta'] ) ) {
				update_post_meta( $post_id, 'xenial_page_header_width', sanitize_text_field( wp_unslash( $_POST['xenial-page-header-width-meta'] ) ) );
			}

			if ( isset( $_POST['xenial-breadcrumb-meta'] ) ) {
				update_post_meta( $post_id, 'xenial_breadcrumbs_display', sanitize_text_field( wp_unslash( $_POST['xenial-breadcrumb-meta'] ) ) );
			}	

			if ( isset( $_POST['xenial-featured-img-meta'] ) ) {
				update_post_meta( $post_id, 'xenial_post_featured_image_display', sanitize_text_field( wp_unslash( $_POST['xenial-featured-img-meta'] ) ) );
			}	
		}


		public function get_sidebar_position_choices() {

			return array(
		    	'default' 		=> esc_html__( 'Default', 'xenial' ),
		        'right-sidebar' => esc_html__( 'Right Sidebar', 'xenial' ),
		        'left-sidebar' 	=> esc_html__( 'Left Sidebar', 'xenial' ),
		        'no-sidebar' 	=> esc_html__( 'No Sidebar', 'xenial' )
		    );
		}

		public function get_container_width_choices() {

			return array(
		    	'default' 		=> esc_html__( 'Default', 'xenial' ),
		        'wide' 			=> esc_html__( 'Wide', 'xenial' ),
				'container' 	=> esc_html__( 'Container', 'xenial' ),
				'narrow' 		=> esc_html__( 'Narrow', 'xenial' )
		    );
		}

		public function get_display_choices() {

			return array(
		    	'default' 		=> esc_html__( 'Default', 'xenial' ),
		    	'enable' 		=> esc_html__( 'Enable', 'xenial' ),
		    	'disable' 		=> esc_html__( 'Disable', 'xenial' )
		    );
		}
	}
endif;

$xenial_custom_fields = new Xenial_Custom_Fields();