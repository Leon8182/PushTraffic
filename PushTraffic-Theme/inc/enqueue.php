<?php

add_action('wp_enqueue_scripts', function () {

	
	wp_enqueue_style('fami-css', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('icons-css', get_template_directory_uri() . '/assets/icons/style.min.css');


	
	wp_enqueue_script('fami-js', get_template_directory_uri() . '/assets/js/scripts.js', [], '1.0.0', true);

});