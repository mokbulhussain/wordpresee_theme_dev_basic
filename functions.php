<?php 

function wtd_setup(){
    load_theme_textdomain( 'wtd_basic' );
    add_theme_support( 'title-tag' );
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'main_menu'=>__('Main Menu','wtd_basic'),
        'footer_menu'=>__('Fooert Menu','wtd_basic')
    ));
}


add_action('after_setup_theme','wtd_setup');

function wtd_basic_assets(){
    wp_enqueue_style( 'fontawesome',get_template_directory_uri().'/assets/css/font-awesome.min.css',array(),'5.15.3', 'all');
    wp_enqueue_style( 'owl',get_template_directory_uri().'/assets/css/owl.carousel.min.css',array(),'2.3.4', 'all');
    wp_enqueue_style( 'owl-detault',get_template_directory_uri().'/assets/css/owl.theme.default.min.css',array(),'2.3.4', 'all');
    wp_enqueue_style( 'main-style',get_template_directory_uri().'/assets/css/style.css',array(),'1.1', 'all');
    wp_enqueue_style( 'responsive',get_template_directory_uri().'/assets/css/responsive.css',array(),'1.1', 'all');

    //theme style css
    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_script( 'owl-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array ( 'jquery' ),'2.3.4', true);
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array ( 'jquery' ),'1.1', true);
}

add_action('wp_enqueue_scripts','wtd_basic_assets');


function wtd_basic_widgets(){

    register_sidebar( array(
        'name'=>__('Main Sidebar','wtd_basic'),
        'id'=>'sidebar-2',
        'before_widgets'=>'<div class="single-sidebar">',
        'after_widgets'=>'</div>',
        'before_title'=>'<h4>',
        'after_title'=>'</h4>'
    ) );
}

add_action('widgets_init','wtd_basic_widgets');


?>