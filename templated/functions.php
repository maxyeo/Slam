<?php

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );


//Making jQuery Google API
function modify_jquery() {
    if (!is_admin()) {
        // comment out the next two lines to load the local copy of jQuery
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', false, '1.8.1');
        wp_enqueue_script('jquery');
    }
}
add_action('init', 'modify_jquery');


function slam15_resources() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script( 'style', get_template_directory_uri() . '/js/style.js', array( 'jquery' ), '1.0', true );
}

add_action('wp_enqueue_scripts', 'slam15_resources');

// Get top ancestor
function get_top_ancestor_id() {
    global $post;
    if ($post->post_parent) {
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];
    }
    return $post->ID;
}

// Does page have children?
function has_children() {
    global $post;
    $pages = get_pages('child_of=' . $post->ID);
    return count($pages);
}

// Customize excerpt word count length
function custom_excerpt_length() {
    return 22;
}

add_filter('excerpt_length', 'custom_excerpt_length');

// Theme setup
function slam15_setup() {
    
    // Navigation Menus
    register_nav_menus(array(
        'leftnav' => __( 'Left Header Menu'),
        'rightnav' => __( 'Right Header Menu'),
    ));
    
    // Add featured image support
    add_theme_support('post-thumbnails');
    add_image_size('small-thumbnail', 180, 120, true);
    add_image_size('square-thumbnail', 80, 80, true);
    add_image_size('banner-image', 920, 210, array('left', 'top'));
    
    // Add post type support
    add_theme_support('post-formats', array('aside', 'gallery', 'link'));
}

add_action('after_setup_theme', 'slam15_setup');

// Add Widget Areas
function ourWidgetsInit() {
    
    register_sidebar( array(
        'name' => 'Sidebar',
        'id' => 'sidebar1',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    
    register_sidebar( array(
        'name' => 'Footer Area 1',
        'id' => 'footer1',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    
    register_sidebar( array(
        'name' => 'Footer Area 2',
        'id' => 'footer2',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    
    register_sidebar( array(
        'name' => 'Footer Area 3',
        'id' => 'footer3',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    
    register_sidebar( array(
        'name' => 'Footer Area 4',
        'id' => 'footer4',
        'before_widget' => '<div class="widget-item">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    
}

add_action('widgets_init', 'ourWidgetsInit');

function title_format($content) {
return '%s';
}
add_filter('private_title_format', 'title_format');
add_filter('protected_title_format', 'title_format');

function theme_slug_filter_wp_title( $title ) {
    if ( is_404() ) {
        $title = 'Page not found';
    }
    // You can do other filtering here, or
    // just return $title
    return $title;
}
// Hook into wp_title filter hook
add_filter( 'wp_title', 'theme_slug_filter_wp_title', 11 );