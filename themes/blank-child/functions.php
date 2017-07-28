<?php
function _lmh_scripts_import() {
	wp_enqueue_style ( 'blank-style', get_template_directory_uri().'/style.css');
	wp_enqueue_style ( 'blank-child-style', get_stylesheet_uri(), array( 'blank-style' ) );
	wp_enqueue_script( 'blank-child-script', get_stylesheet_directory_uri() .'/main.js', array('jquery'), '20170611', true);
}
add_action('wp_enqueue_scripts', '_lmh_scripts_import');