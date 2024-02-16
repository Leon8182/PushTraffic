<?php

require_once(get_template_directory() . '/inc/theme.php');

require_once(get_template_directory() . '/inc/disable-blocks.php');

require_once(get_template_directory() . '/inc/enqueue.php');

require_once(get_template_directory() . '/inc/media.php');

require_once(get_template_directory() . '/inc/sidebars.php');

require_once(get_template_directory() . '/inc/cpt.php');

//Backend-Styling
add_theme_support('editor-styles');
add_editor_style('assets/css/style-editor.css');