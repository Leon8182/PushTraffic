<?php
//CPT Projekte
function post_type_project()
{

	$labels = [
		'name' => _x('Projekte', 'Post Type General Name', 'wifi'),
		'singular_name' => _x('Projekt', 'Post Type Singular Name', 'wifi'),
		'menu_name' => __('Projekte', 'wifi'),
		'name_admin_bar' => __('Projekte', 'wifi'),
		'archives' => __('Projekte Archiv', 'wifi'),
		'attributes' => __('Projekt Attribute', 'wifi'),
		'parent_item_colon' => __('Parent-Projekt:', 'wifi'),
		'all_items' => __('Alle Projekte', 'wifi'),
		'add_new_item' => __('Neues Projekt hinzufügen', 'wifi'),
		'add_new' => __('Neues Projekt hinzufügen', 'wifi'),
		'new_item' => __('Neues Projekt', 'wifi'),
		'edit_item' => __('Projekt bearbeiten', 'wifi'),
		'update_item' => __('Aktualisiere Projekt', 'wifi'),
		'view_item' => __('zeige Projekt', 'wifi'),
		'view_items' => __('Zeige Projekte', 'wifi'),
		'search_items' => __('Suche Projekt', 'wifi'),
		'not_found' => __('Nichts gefunden', 'wifi'),
		'not_found_in_trash' => __('Not found in Trash', 'wifi'),
		'featured_image' => __('Projektbild', 'wifi'),
		'set_featured_image' => __('Als Projektbild festlegen', 'wifi'),
		'remove_featured_image' => __('Remove featured image', 'wifi'),
		'use_featured_image' => __('Als Projektbild verwenden', 'wifi'),
		'insert_into_item' => __('In Projekt einfügen', 'wifi'),
		'uploaded_to_this_item' => __('Zu Projekt hochladen', 'wifi'),
		'items_list' => __('Projekt Liste', 'wifi'),
		'items_list_navigation' => __('Projekte', 'wifi'),
		'filter_items_list' => __('Filter Projekt Liste', 'wifi'),
	];
	$args = [
		'label' => __('Projekt', 'wifi'),
		'labels' => $labels,
		'supports' => ['title', 'editor'],
		'hierarchical' => false,
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 10,
		'menu_icon' => 'dashicons-format-gallery',
		// https://developer.wordpress.org/resource/dashicons/
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => false,
		'can_export' => true,
		'has_archive' => false,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'capability_type' => 'page',
		'show_in_rest' => true,
		// true => zugleich Gutenberg Editor (würde das Portfolio rein mit Eigenen-Feldern aufgebaut werden, dann false)
	];
	register_post_type('project', $args);

}

add_action('init', 'post_type_project', 0);