<?php

function my_styles() {
    wp_enqueue_style('twentyseventeen-child-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'my_styles');


register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu'),
        )
);
