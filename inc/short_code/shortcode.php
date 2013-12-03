<?php 
	function foobar_func( $atts ){
		return "foo and bar";
	}
	add_shortcode( 'foobar', 'foobar_func' );

	// button 
	// Add Shortcode
	function tt_button( $atts ) {

		// Attributes
		extract( shortcode_atts(
			array(
				'type' => '',
			), $atts )
		);

		// Code
		return '<a class="button">..</a>';
	}
	add_shortcode( 'button', 'tt_button' );
 ?>