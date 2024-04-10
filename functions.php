<?php
function oc_itech_services_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    // Register Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'oc-itech-services'),
    ));
}

add_action('after_setup_theme', 'oc_itech_services_theme_setup');

// Enqueue theme styles and scripts
function oc_itech_services_scripts() {
    wp_enqueue_style('oc-itech-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'oc_itech_services_scripts');

// Register Custom Post Type for Services
function oc_itech_services_cpt_init() {
    register_post_type('service', array(
        'labels' => array(
            'name' => __('Services', 'oc-itech-services'),
            'singular_name' => __('Service', 'oc-itech-services'),
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'services'),
        'supports' => array('title', 'editor', 'thumbnail'),
        'menu_icon' => 'dashicons-admin-tools',
    ));
}

add_action('init', 'oc_itech_services_cpt_init');
