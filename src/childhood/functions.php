<?php

add_action( 'wp_enqueue_scripts', 'childhood_styles');
add_action( 'wp_enqueue_scripts', 'childhood_scripts');

//_ Для стилей
function childhood_styles() {
    wp_enqueue_style('childhood_styles', get_stylesheet_uri());
    // wp_enqueue_style('header-style', get_template_directory_uri() . '/assets/styles/main.min.css'); //_ для динамического формирования пути
    // wp_enqueue_style('animate-style', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.compat.min.css'); //_ для cdn
    }

//_ Для скриптов
function childhood_scripts() {
    wp_enqueue_script('childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true);
}

//_ Для добавления логотипа
add_theme_support( 'custom-logo' );

//_ Для изображения записи
add_theme_support( 'post-thumbnails' );

//_ Для отключения валидации плагина Contact Form 7
// add_filter( 'wpcf7_validate_configuration', '__return_false' );

add_theme_support( 'menus' );

add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3); //_ Для добавления класса на пункты меню

function filter_nav_menu_link_attributes($atts, $item, $args) {
    if ($args->menu === 'Main') {
        $atts['class'] = 'header__nav-item';

        if ($item->current) {
            $atts['class'] .= ' header__nav-item-active';
        }
        // print_r($item);
        if( $item->ID === 237 && ( in_category( 'soft_toys' ) || in_category( 'edu_toys' ))){
            $atts['class'] .= ' header__nav-item-active';
        }
    };

    return $atts;
}


?>