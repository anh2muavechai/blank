<?php
/**
 * Enqueues scripts and styles.
 */
add_action( 'wp_enqueue_scripts', '_ken_enqueue' );
function _ken_enqueue() {

	/* 
	==========================================================================
	Style
	========================================================================== 
	*/

	//Bootstrap stylesheet.
	wp_enqueue_style( 'ken-bootstrap-style', get_template_directory_uri(). '/assets/plugins/bootstrap/css/bootstrap.min.css' );
	// Dropdown Menu Hover
	wp_enqueue_style( 'ken-smartmenus-style', get_template_directory_uri(). '/assets/plugins/smartmenus-bootstrap/jquery.smartmenus.bootstrap.css' );
	// Offcanvas menu stylesheet
	wp_enqueue_style( 'offcanvas-style', get_template_directory_uri(). '/assets/plugins/off-canvas-menu/bootstrap.offcanvas.min.css' );
	// Theme stylesheet.
	wp_enqueue_style( 'ken-style', get_template_directory_uri(). '/assets/css/main.css' );
	// Responsive stylesheet
	wp_enqueue_style( 'responsive-style', get_template_directory_uri(). '/assets/css/responsive.css' );

	/* 
	==========================================================================
	Script
	========================================================================== 
	*/

	// Bootstrap javascript.
	wp_enqueue_script( 'ken-bootstrap-js', get_template_directory_uri() . '/assets/plugins/bootstrap/js/bootstrap.min.js', array(), '20161220', true );
	//Dropdown menu hover
	wp_enqueue_script( 'ken-smartmenus', get_template_directory_uri() . '/assets/plugins/smartmenus-bootstrap/jquery.smartmenus.min.js', array( 'jquery' ), '20161220', true );
	wp_enqueue_script( 'ken-bootstrap-smartmenus', get_template_directory_uri() . '/assets/plugins/smartmenus-bootstrap/jquery.smartmenus.bootstrap.min.js', array( 'jquery' ), '20161220', true );
	//Off canvas menu
	wp_enqueue_script( 'ken-off-canvas-menu-js', get_template_directory_uri() . '/assets/plugins/off-canvas-menu/bootstrap.offcanvas.min.js', array(), '20161220', true );
	// Theme javascript.
	wp_enqueue_script( 'ken-script', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), '20161220', true );

	// wp_script_add_data( string $handle, string $key, mixed $value ); -> check condition add script.
	// wp_localize_script( string $handle, string $name, array $data ); -> add data to script.
}