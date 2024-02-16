<?php

add_action('widgets_init', function () {
	register_sidebar(
		array(
			'name' => __('Footer Sidebar', 'wifi'),
			'id' => 'sidebar-footer',
			'description' => __('Das ist die Footer-Sidebar, Widgets werden im Footer-Bereich eingefügt', 'wifi')
		)
	);

	register_sidebar(
		array(
			'name' => __('Contact Sidebar', 'wifi'),
			'id' => 'sidebar-contact',
			'description' => __('Das ist die Contact-Sidebar, Widgets werden über dem Footer-Bereich eingefügt', 'wifi')
		)
	);

});