<?php
/**
 * wp-stub.php
 * 
 * This file provides dummy implementations of basic WordPress functions.
 * It is used for local previewing when a full WordPress environment is not available.
 * 
 * DO NOT include this file in a production WordPress environment.
 */

if (!function_exists('get_template_directory_uri')) {
    function get_template_directory_uri() {
        return '.';
    }
}

if (!function_exists('get_stylesheet_uri')) {
    function get_stylesheet_uri() {
        return './style.css';
    }
}

if (!function_exists('home_url')) {
    function home_url($path = '') {
        return '/' . ltrim($path, '/');
    }
}

if (!function_exists('esc_url')) {
    function esc_url($url) {
        return $url;
    }
}

if (!function_exists('wp_head')) {
    function wp_head() {
        echo '<!-- wp_head stub -->';
    }
}

if (!function_exists('wp_footer')) {
    function wp_footer() {
        echo '<!-- wp_footer stub -->';
    }
}

if (!function_exists('get_header')) {
    function get_header($name = null) {
        if ($name) {
             $file = 'header-' . $name . '.php';
             if (file_exists($file)) include $file;
        } else {
             include 'header.php';
        }
    }
}

if (!function_exists('get_footer')) {
    function get_footer($name = null) {
        if ($name) {
             $file = 'footer-' . $name . '.php';
             if (file_exists($file)) include $file;
        } else {
             include 'footer.php';
        }
    }
}

if (!function_exists('language_attributes')) {
    function language_attributes() {
        echo 'lang="en-US"';
    }
}

if (!function_exists('bloginfo')) {
    function bloginfo($show = '') {
        switch($show) {
            case 'charset': echo 'UTF-8'; break;
            default: echo ''; break;
        }
    }
}

if (!function_exists('body_class')) {
    function body_class($class = '') {
        echo 'class="home ' . $class . '"';
    }
}

if (!function_exists('wp_body_open')) {
    function wp_body_open() {
        echo '<!-- wp_body_open stub -->';
    }
}

// --- New Mocks for functions.php ---

if (!function_exists('add_action')) {
    function add_action($hook, $callback, $priority = 10, $accepted_args = 1) {
        // Mock implementation: just do nothing or store it
    }
}

if (!function_exists('add_theme_support')) {
    function add_theme_support($feature, ...$args) {
        // Mock
    }
}

if (!function_exists('register_nav_menus')) {
    function register_nav_menus($locations = array()) {
        // Mock
    }
}

if (!function_exists('esc_html__')) {
    function esc_html__($text, $domain = 'default') {
        return $text;
    }
}

if (!function_exists('wp_enqueue_style')) {
    function wp_enqueue_style($handle, $src = '', $deps = array(), $ver = false, $media = 'all') {
        // Mock
    }
}

if (!function_exists('wp_enqueue_script')) {
    function wp_enqueue_script($handle, $src = '', $deps = array(), $ver = false, $in_footer = false) {
        // Mock
    }
}

if (!function_exists('wp_localize_script')) {
    function wp_localize_script($handle, $name, $data) {
        // Mock
    }
}

// --- Dynamic Content Mocks ---

if (!function_exists('get_template_part')) {
    function get_template_part($slug, $name = null) {
        $templates = array();
        if ( isset($name) )
            $templates[] = $slug . '-' . $name . '.php';
        $templates[] = $slug . '.php';

        foreach ( $templates as $t ) {
            if ( file_exists( $t ) ) {
                include $t;
                return;
            }
        }
    }
}

if (!function_exists('have_posts')) {
    function have_posts() {
        return false; // Stop loops in local
    }
}

if (!function_exists('the_post')) {
    function the_post() {
    }
}

if (!function_exists('the_content')) {
    function the_content() {
        echo "Lorem ipsum content...";
    }
}

if (!function_exists('the_title')) {
    function the_title() {
        echo "Dummy Title";
    }
}

if (!function_exists('the_permalink')) {
    function the_permalink() {
        echo "#";
    }
}

if (!function_exists('the_excerpt')) {
    function the_excerpt() {
        echo "Dummy excerpt...";
    }
}

if (!function_exists('the_ID')) {
    function the_ID() {
        echo "1";
    }
}

if (!function_exists('post_class')) {
    function post_class() {
        echo 'class="post"';
    }
}

if (!function_exists('is_page_template')) {
    function is_page_template($template = '') {
        return false;
    }
}
