<?php
/**************************************************************************
Customizer include file
Includes all functions for the customizer with this theme
**************************************************************************/

/**************************************************************************
Add theme cusotmizer controls, settings etc.
**************************************************************************/
function tutsplus_customize_register( $wp_customize ) {
	
	/********************
	Define generic controls
	*********************/
	
	// create class to define textarea controls in Customizer
	class Tutsplus_Customize_Textarea_Control extends WP_Customize_Control {
		
		public $type = 'textarea';
		public function render_content() {
			
			echo '<label';
				echo '<span class="customize-control-title">' . esc_html( $this-> label ) . '</span>';
				echo '<textarea rows="2" style ="width: 100%;"';
				$this->link();
				echo '>' . esc_textarea( $this->value() ) . '</textarea>';
			echo '</label>';
			
		}
	}
}
add_action( 'customize_register', 'tutsplus_customize_register' );
