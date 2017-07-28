<?php
function twentyseventeen_scripts_import() {
	// enqueue style
	wp_enqueue_style('twentyseventeen-style', get_template_directory_uri().'/style.css');
	wp_enqueue_style( 'twentyseventeen-child-style', get_stylesheet_uri(), array( 'parent-style' ) );
	// enqueue script
	wp_enqueue_script('twentyseventeen-child-script', get_stylesheet_directory_uri() .'/main.js', array('jquery'), '20170611', true);
}
add_action('wp_enqueue_scripts', 'twentyseventeen_scripts_import');