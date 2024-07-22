<?php

//Sa ove dve funkcije ispod ukljucjemo linkove za css i js:
//css
function lawyer_style() {
    //prvo ide ime, pa url, pa da li ima dependencies, pa verzija
    wp_enqueue_style('Owl Carousel', get_template_directory_uri() . '/frontend/css/owl.carousel.css', array(), '1.0');
    wp_enqueue_style('Owl Carousel Theme', get_template_directory_uri() . '/frontend/css/owl.theme.default.css', array('Owl Carousel'), '1.0');
    wp_enqueue_style('Theme', get_template_directory_uri() . '/frontend/css/theme.css', array(), '1.0');
    wp_enqueue_style('Style', get_template_directory_uri() . '/style.css', array(), '1.0');
}

add_action('wp_enqueue_scripts', 'lawyer_style');

//js
function lawyer_scripts() {
    wp_enqueue_script('jQuery', get_template_directory_uri() . '/frontend/js/jquery.min.js', array(), '3.4.1', true); //true znaci da ce biti na dnu fajla
    wp_enqueue_script('Bootstrap Bundle', get_template_directory_uri() . '/frontend/js/bootstrap.bundle.min.js', array('jQuery'), '4.3.1', true);
    wp_enqueue_script('Font Awesome', 'https://kit.fontawesome.com/f4353abedd.js', array(), '6', true);
    wp_enqueue_script('Owl Carousel', get_template_directory_uri() . '/frontend/js/owl.carousel.min.js', array('jQuery'), '2.3.4', true);
    wp_enqueue_script('Main JS', get_template_directory_uri() . '/frontend/js/main.js', array('jQuery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'lawyer_scripts');

function lawyer_support() {
    //title tag suport
    add_theme_support('title-tag');

    add_theme_support('custom-logo', array(
        'height' => 28,
        'width' => 88,
        'flex-width' => false,
        'flex-height' => false
    ));
    //feature-image-support
    add_theme_support('post-thumbnails');

    // image size support

    add_image_size('news-list', 463, 307, true); //true znaci da omogucavamo kropovanje a ova ostala dva su dimenzije


    add_image_size('team-list', 273, 355, true);
    add_image_size('single_team', 558, 725, true);
}

add_action('after_setup_theme', 'lawyer_support');

function lawyer_menus() {
    register_nav_menus(array(
        'main-menu' => 'Main Menu',
        'social' => 'Social Menu'
    ));
}

add_action('init', 'lawyer_menus');

function lawyer_create_post_type() {

    register_post_type('our-service', array(
        'labels' => array(
            'name' => 'Services',
            'singular_name ' => 'Service',
            'plural_name' => 'Services',
            'all_items' => 'All Services',
            'add_new' => 'Add New Service',
            'add_new_item' => 'Add New Service Item',
            'new_item' => 'New Service',
            'edit' => 'Edit',
            'edit_item' => 'Edit Service Item',
            'view' => 'View Service',
            'view_item' => 'View Service Item',
            'featured_image' => 'Featured Image for this service'
        ),
        'public' => true,
        'hierarchical' => false,
        'menu_icon' => 'dashicons-admin-generic',
        'menu_position' => 17,
        'supports' => array(
            'title',
            'thumbnail',
            'editor'
        )
    ));
}

add_action('init', 'lawyer_create_post_type');

//sa ovom funkcijom ispod registrujemo sidebar

function lawyer_init_side_bar() {

    // Register the primary sidebar
    register_sidebar(array(
        'id'            => 'sidebar_1',
        'name'          => __( 'Primary Sidebar', 'textdomain' ),
        'description'   => __( 'A page sidebar', 'textdomain' ),
        'before_widget' => '<div id="%1$s" class="widget mb-4 p-4 bg-light %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title mb-5">',
        'after_title'   => '</h3>',
    ));
    
    // Register the first footer sidebar
    register_sidebar(array(
        'id'            => 'footer_1',
        'name'          => __( 'Footer Sidebar 1', 'textdomain' ),
        'description'   => __( 'A footer sidebar 1', 'textdomain' ),
        'before_widget' => '<div id="%1$s" class="widget mb-4 p-4 bg-light %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title mb-5">',
        'after_title'   => '</h3>',
    ));
    
    // Register the second footer sidebar
    register_sidebar(array(
        'id'            => 'footer_2',
        'name'          => __( 'Footer Sidebar 2', 'textdomain' ),
        'description'   => __( 'A footer sidebar 2', 'textdomain' ),
        'before_widget' => '<div id="%1$s" class="widget mb-4 p-4 bg-light %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title mb-5">',
        'after_title'   => '</h3>',
    ));
    
    // Register the third footer sidebar
    register_sidebar(array(
        'id'            => 'footer_3',
        'name'          => __( 'Footer Sidebar 3', 'textdomain' ),
        'description'   => __( 'A footer sidebar 3', 'textdomain' ),
        'before_widget' => '<div id="%1$s" class="widget mb-4 p-4 bg-light %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title mb-5">',
        'after_title'   => '</h3>',
    ));
}

// Hook the function into the 'widgets_init' action
add_action('widgets_init', 'lawyer_init_side_bar');

require get_template_directory() . '/inc/options.php';
require get_template_directory() . '/inc/widgets.php';
