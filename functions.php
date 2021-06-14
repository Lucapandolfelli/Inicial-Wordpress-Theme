<?php

    function register_navwalker(){
        require_once get_template_directory() . '/include/navbar.php';
    }
    add_action( 'after_setup_theme', 'register_navwalker' );

    // Theme Support

    function theme_support(){
        add_theme_support('title-tag');
    }
    add_action('after_setup_theme', 'theme_support');

    function register_styles(){

        wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array('bootstrap'), '1.0,', 'all');
        wp_enqueue_style('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css", array(), '5.0.1', 'all');
        wp_enqueue_style('fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css", array(), '5.15.3', 'all');

    }
    add_action('wp_enqueue_scripts', 'register_styles');

    function register_scripts(){
        
        wp_enqueue_script('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js", array(), '5.0.1', true);
        wp_enqueue_script('poppins', "https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js", array(), '2.9.2', true);

    }
    add_action('wp_enqueue_scripts', 'register_scripts');

    // Register Menu

    function register_menus() {
        register_nav_menus(
          array(
              'main-menu' => __( 'Main Menu' )
            )
        );
    }
    add_action( 'init', 'register_menus' );


?>