<?php

/**
 * The functions for our theme.
 *
 * @package fffsigwptheme
 *
 */


add_theme_support('post-thumbnails');

function custom_theme_assets() {
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'custom_theme_assets');

function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'footer-menu' => __('Footer Menu')
        )
    );
}
add_action('init', 'register_my_menus');

/**
 * menu includes
 */

include get_theme_file_path() . '/includes/menus/header-menu.php';
include get_theme_file_path() . '/includes/menus/footer-menu.php';


/**
 * Customizer includes
 */
include get_theme_file_path() . '/includes/customizer/announcement-bar.php';
include get_theme_file_path() . '/includes/customizer/index-widgets.php';
include get_theme_file_path() . '/includes/customizer/social-icons.php';
