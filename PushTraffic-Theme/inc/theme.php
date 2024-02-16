<?php
add_action('after_setup_theme', function () {

    
    add_theme_support('title-tag');

    
    add_theme_support('post-thumbnails');

    add_theme_support(
        'html5',
        array(
            'search-form',
            'gallery',
            'caption',
            'style',
            'script',
            'comment-list',
            'comment-form'
        )
    );

    
    add_image_size('news', 700, 200, array('center', 'center'));


  
    load_textdomain('wifi', get_template_directory() . '/assets/languages');


    add_theme_support(
        'custom-logo',
        array(
            'height' => 60,
            'width' => 100,

            'flex-height' => true,
            'flex-width' => true
        )
    );

    register_nav_menus(
        array(
            'primary' => __('Haupt Navigation', 'wifi'),
            'secondary' => __('Zweite Navigation (Übung)', 'wifi'),
            'footer' => __('Footer Navigation', 'wifi')
        )
    );


    add_theme_support('responsive-embeds');

  
    add_theme_support('wp-block-styles');


    add_theme_support('editor-styles');
    add_editor_style('assets/css/style-editor.css');
   
  


    add_theme_support('disable-custom-gradients');
    add_theme_support('editor-gradient-presets');

    add_theme_support('disable-custom-colors');

    add_theme_support(
        'editor-color-palette',
        array(
            array(
                'name' => esc_attr__('Primary-Color', 'wifi'),
                'slug' => 'primary',
                'color' => '#00C0FF'
            ),
            array(
                'name' => esc_attr__('Secondary-Color', 'wifi'),
                'slug' => 'secondary',
                'color' => '#3A2B71'
            ),
            array(
                'name' => esc_attr__('Background-Color', 'wifi'),
                'slug' => 'background',
                'color' => '#FFFFFF'
            ),
            array(
                'name' => esc_attr__('Hugo-Color', 'wifi'),
                'slug' => 'hugo',
                'color' => '#333'
            )
        )
    );


    add_theme_support('disable-custom-font-sizes');

    add_theme_support(
        'editor-font-sizes',
        array(
            array(
                'name' => esc_attr__('Regular', 'wifi'),
                'slug' => 'regular',
                'size' => 16
            ),
            array(
                'name' => esc_attr__('Small', 'wifi'),
                'slug' => 'small',
                'size' => 14
            )
        )
    );


    add_theme_support('appearance-tools');


    add_theme_support('align-wide');

});