<?php
function hypervsn_scripts() {
    // Enqueue Main Style
    wp_enqueue_style('main-style', get_stylesheet_uri());

    // Enqueue Component Styles
    wp_enqueue_style('header-style', get_template_directory_uri() . '/assets/components/header/header.css', array(), '1.0', 'all');
    wp_enqueue_style('hero-style', get_template_directory_uri() . '/assets/components/hero/hero.css', array(), '1.0', 'all');
    wp_enqueue_style('roi-style', get_template_directory_uri() . '/assets/components/roi/roi.css', array(), '1.0', 'all');
    wp_enqueue_style('use-cases-style', get_template_directory_uri() . '/assets/components/use-cases/use-cases.css', array(), '1.0', 'all');
    wp_enqueue_style('contact-style', get_template_directory_uri() . '/assets/components/contact/contact.css', array(), '1.0', 'all');

    // Solutions Page Assets
    if (is_page_template('page-solutions.php')) {
        wp_enqueue_style('solutions-style', get_template_directory_uri() . '/assets/css/solutions.css', array(), '1.0', 'all');
        wp_enqueue_script('solutions-js', get_template_directory_uri() . '/assets/js/solutions.js', array(), '1.0', true);
    }

    // Enqueue Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap', array(), null);

    // Enqueue Scripts
    // Use true for last argument to load in footer
    wp_enqueue_script('header-js', get_template_directory_uri() . '/assets/components/header/header.js', array(), '1.0', true);
    wp_enqueue_script('hero-js', get_template_directory_uri() . '/assets/components/hero/hero.js', array(), '1.0', true);
    wp_enqueue_script('use-cases-js', get_template_directory_uri() . '/assets/components/use-cases/use-cases.js', array(), '1.0', true);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'hypervsn_scripts');

// Add theme support
function hypervsn_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'hypervsn_setup');
?>
