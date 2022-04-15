<?php


function followAndrew_theme_support(){
    // add dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'followAndrew_theme_support');


/**
 * Create menu locations
 */
function followAndrew_menus(){
    $locations = array(
        'primary' => "Desktop Primary Left Slidebar",
        'footer' => "Footer Menu Items",
    );

    register_nav_menus( $locations );
}
add_action('init', 'followAndrew_menus');


/**
 * Define styles
 */
function followAndrew_register_styles(){

    $theme_version = wp_get_theme()->get( 'Version' );

    // Theme CSS
    wp_enqueue_style( 'followandrew-style', get_template_directory_uri() . "/style.css", array('followandrew-bootstrap'), $theme_version, 'all' );
    // Bootstrap CSS
    wp_enqueue_style( 'followandrew-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all' );
    // FontAwesome CSS
    wp_enqueue_style( 'followandrew-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all' );

}
add_action( 'wp_enqueue_scripts', 'followAndrew_register_styles' );


/**
 * Define scripts
 */
function followAndrew_register_scripts(){

    // Bootstrap Javascript
    // jquery
    wp_enqueue_script( 'followandrew-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true );
    // popper.js
    wp_enqueue_script( 'followandrew-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), '1.16.0', true );
    // bootstrap
    wp_enqueue_script( 'followandrew-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), '4.4.1', true );
    // main
    wp_enqueue_script( 'followandrew-main', get_template_directory_uri()."/assets/js/main.js", array(), '1.0', true );
    
}
add_action( 'wp_enqueue_scripts', 'followAndrew_register_scripts' );


/**
 * Add widget areas
 */
function followAndrew_widget_areas(){
    register_sidebar(
        array(
            'name'          => 'Footer Area',
            'id'            => 'footer-1',
            'description'   => 'Footer Widget Area',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => '',
        ) 
    );
}
add_action('widgets_init', 'followAndrew_widget_areas');


?>