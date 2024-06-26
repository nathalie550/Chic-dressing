<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'chicdressing_enqueue_styles');
function chicdressing_enqueue_styles()
{
    // Chargement du style.css du thème parent
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

add_filter('big_image_size_threshold', '__return_false');


/*DESACTIVER LES POLICES GOOGLES FONTS*/
function remove_google_fonts_stylesheet()
{
    wp_dequeue_style('ashe-playfair-font');
    wp_dequeue_style('ashe-opensans-font');
    wp_dequeue_style('ashe-kalam-font');
    wp_dequeue_style('ashe-rokkitt-font');

    wp_enqueue_style('PlayfairDisplay-VariableFont', get_stylesheet_directory_uri() . '/google-fonts/Playfair_Display/PlayfairDisplay-VariableFont_wght.ttf');
    wp_enqueue_style('OpenSans-VariableFont', get_stylesheet_directory_uri() . '/google-fonts/Open_Sans/OpenSans-VariableFont_wdth,wght.ttf');
    wp_enqueue_style('google-font/Kalam-Regular', get_stylesheet_directory_uri() . '/google-fonts/Kalam/Kalam-Regular.ttf');
    wp_enqueue_style('Rokkitt-VariableFont_wght', get_stylesheet_directory_uri() . '/google-fonts/Rokkitt/Rokkitt-VariableFont_wght.ttf');
}

add_action('wp_enqueue_scripts', 'remove_google_fonts_stylesheet', 999);
