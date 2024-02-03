<?php
add_action('after_setup_theme', function () {

    //Title-Tag aktivieren
    add_theme_support('title-tag');

    //Aktivierung der Beitragsbilder
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

    //Bildgröße hinzufügen
    add_image_size('news', 700, 200, array('center', 'center'));


    //Textdatei für Übersetzungen laden
    load_textdomain('wifi', get_template_directory() . '/assets/languages');

    //Custom Logo
    add_theme_support(
        'custom-logo',
        array(
            'height' => 60,
            'width' => 100,

            /*Bei SVG notwendig, beide Werte auf true*/
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

    // Responsive Embeds (ZB. YouTube Videos, Iframes) erlauben
    add_theme_support('responsive-embeds');

    // Theme für Gutenberg optimiert - Lade default Block styles
    add_theme_support('wp-block-styles');

    //Backend-Styling
    add_theme_support('editor-styles');
    add_editor_style('assets/css/style-editor.css');
    add_editor_style('assets/css/icons.css');

    //Gradients ausblenden
    add_theme_support('disable-custom-gradients');
    add_theme_support('editor-gradient-presets');

    //Farben ausblenden / Eingrenzen
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

    //Schriftgrößen eingrenzen
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

    //Ermöglicht Margin, Padding im Gutenberg
    add_theme_support('appearance-tools');

    // aktiviere wide & fullwidth Layouts
    add_theme_support('align-wide');

});