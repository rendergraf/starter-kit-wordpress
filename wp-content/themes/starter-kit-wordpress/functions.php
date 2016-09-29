<?php
// Load Scripts
// by Xavier Araque
function load_scripts() {
// Load Template Styles
    wp_enqueue_style( 'style_css', 
        get_template_directory_uri() . '/style.css', 
        array(),
        '2016-06-14');
// Load Template JS
    wp_enqueue_script( 'index_js', 
        get_template_directory_uri() . '/js/main.min.js', 
        array('jquery'), 
        '2016-01-18', 
        true);
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );

// add a favicon to your site
function blog_favicon() {
    echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('stylesheet_directory').'/favicon.ico" />' . "\n";
}
add_action('wp_head', 'blog_favicon');

// Register custom navigation walker
require_once('wp_bootstrap_navwalker.php');

// Register primary menu
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'xavier' ),
    'extra-menu' => __( 'Extra Menu' )
    ) );

// Add support SVG files
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

// Add shortcode
function url_shortcode() {
    return get_bloginfo('wpurl');
}
add_shortcode('url','url_shortcode');

// function disable_wp_emojicons() {

//   // all actions related to emojis
//   remove_action( 'admin_print_styles', 'print_emoji_styles' );
//   remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
//   remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
//   remove_action( 'wp_print_styles', 'print_emoji_styles' );
//   remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
//   remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
//   remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

//   // filter to remove TinyMCE emojis
//   add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
// }
// add_action( 'init', 'disable_wp_emojicons' );

// add_filter( 'emoji_svg_url', '__return_false' );