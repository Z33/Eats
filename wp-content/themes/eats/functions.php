<?php

$root = get_stylesheet_directory_uri();

// ------------------
// REMOVE FUNCTIONALITY
// ------------------
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// ------------------
// ADD FUNCTIONALITY
// ------------------
add_theme_support('post-thumbnails');

// ------------------
// FUNCTIONS
// ------------------

// Async & Defer assets
function eats_async_scripts($url)
{
    if (strpos($url, '#asyncload') === false) {
        return $url;
    } else if (is_admin()) {
        return str_replace('#asyncload', '', $url);
    } else {
        return str_replace('#asyncload', '', $url) . "' async='async";
    }
}
add_filter('clean_url', 'eats_async_scripts', 11, 1);

function eats_defer_scripts($url)
{
    if (strpos($url, '#defersync') === false) {
        return $url;
    } else if (is_admin()) {
        return str_replace('#defersync', '', $url);
    } else {
        return str_replace('#defersync', '', $url) . "' defer='defer";
    }
}
add_filter('clean_url', 'eats_defer_scripts', 11, 1);


// ------------------
// ASSETS
// ------------------
function enqueue_eats_styles()
{
    wp_enqueue_style('stylesheet-print', '/print.css');
    wp_enqueue_style('stylesheet-screen', get_stylesheet_directory_uri() . '/dist/css/styles.css?ver=200803');
}
add_action('wp_enqueue_scripts', 'enqueue_eats_styles');


function enqueue_eats_scripts()
{
    if (!is_admin()) {
        wp_deregister_script('jquery');
        // wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js');
        // wp_enqueue_script('jquery');
    }
    wp_register_script('main', get_stylesheet_directory_uri() . '/src/js/scripts.js?ver=200803', '', true, true);
    wp_enqueue_script('main');
}
add_action('wp_enqueue_scripts', 'enqueue_eats_scripts');

// ------------------
// OTHER
// ------------------
function add_body_class($classes)
{
    global $post;
    if (isset($post)) {
        $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
}
add_filter('body_class', 'add_body_class');
