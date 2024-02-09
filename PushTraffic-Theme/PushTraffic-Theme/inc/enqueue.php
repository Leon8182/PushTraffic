<?php
//Scripts einbinden
add_action('wp_enqueue_scripts', function () {

	//Einbinden der CSS Dateien
	wp_enqueue_style('fami-css', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('icons-css', get_template_directory_uri() . '/assets/icons/style.min.css');


	//Einbinden der JS Dateien
	wp_enqueue_script('fami-js', get_template_directory_uri() . '/assets/js/scripts.js', [], '1.0.0', true);

});