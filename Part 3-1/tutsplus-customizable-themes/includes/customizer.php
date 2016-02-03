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
	
	/*******************************************
	Contact details in header
	********************************************/
	
	// add the section
	$wp_customize->add_section( 'tutsplus_contact' , array(
		'title' => __( 'Contact Details', 'tutsplus')
	) );
	
	//settings
	// address
	$wp_customize->add_setting( 'tutsplus_address_setting', array (
		'default' => __( 'Your address', 'tutsplus' )
	) );
	$wp_customize->add_control( new Tutsplus_Customize_Textarea_Control(
		$wp_customize,
		'tutsplus_address_setting',
		array( 
			'label' => __( 'Address', 'tutsplus' ),
			'section' => 'tutsplus_contact',
			'settings' => 'tutsplus_address_setting'
	)));
	
	// phone number
	$wp_customize->add_setting( 'tutsplus_telephone_setting', array (
		'default' => __( 'Your telephone number', 'tutsplus' )
	) );
	$wp_customize->add_control( new Tutsplus_Customize_Textarea_Control(
		$wp_customize,
		'tutsplus_telephone_setting',
		array( 
			'label' => __( 'Telephone Number', 'tutsplus' ),
			'section' => 'tutsplus_contact',
			'settings' => 'tutsplus_telephone_setting'
	)));
	
	// email
	$wp_customize->add_setting( 'tutsplus_email_setting', array (
		'default' => __( 'Your email address', 'tutsplus' )
	) );
	$wp_customize->add_control( new Tutsplus_Customize_Textarea_Control(
		$wp_customize,
		'tutsplus_email_setting',
		array( 
			'label' => __( 'Email', 'tutsplus' ),
			'section' => 'tutsplus_contact',
			'settings' => 'tutsplus_email_setting'
	)));
	
	
	
}
add_action( 'customize_register', 'tutsplus_customize_register' );
