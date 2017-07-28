<?php
function _lmh_scripts_import() {
	wp_enqueue_style ( 'twentyseventeen-style', get_template_directory_uri().'/style.css');
	wp_enqueue_style ( 'twentyseventeen-child-style', get_stylesheet_uri(), array( 'twentyseventeen-style' ) );
	wp_enqueue_script( 'twentyseventeen-child-script', get_stylesheet_directory_uri() .'/main.js', array('jquery'), '20170611', true);
}
add_action('wp_enqueue_scripts', '_lmh_scripts_import');