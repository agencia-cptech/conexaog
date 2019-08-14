<?php

    // register_nav_menus( array(
    //     'primary'   => __( 'Primary Menu', 'myfirsttheme' ),
    // ) );
    function register_my_menu() {
        register_nav_menu('header-menu',__( 'Header Menu' ));
    }
    add_action( 'init', 'register_my_menu' );

    function conexaog_wp_styles() {
        wp_enqueue_style('style_css', get_stylesheet_uri());
        wp_enqueue_style('main_css', get_stylesheet_directory_uri() . '/assets/css/main.css');
        wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Lato:400,900');

        wp_enqueue_script('main_js', get_template_directory_uri() . '/assets/js/main.min.js', array('jquery'), '', true);
    }
    add_action('wp_enqueue_scripts', 'conexaog_wp_styles');

    // add_action('wp_enqueue_scripts', 'conexaog_wp_styles');
    // add_filter( 'wp_image_editors', 'change_graphic_lib' );

    function change_graphic_lib($array) {
    return array( 'WP_Image_Editor_GD', 'WP_Image_Editor_Imagick' );
    }
    add_theme_support('post-thumbnails');
    
    add_action( 'after_setup_theme', 'theme_setup' );
    
    function theme_setup() {
        add_action( 'init', 'add_support_to_pages' );
    }
    
    function add_support_to_pages() {
        add_post_type_support( 'page', 'excerpt' );
    }
    
    function meus_posts_types() {
        register_post_type('linhadotempo',
            array(
                'labels' => array(
                    'name' => __('Linha do Tempo'),
                    'singular_name' => __('Linha do Tempo')
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-clock',
                'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'page-attributes'),
            )
        );
        register_post_type('materia',
            array(
                'labels' => array(
                    'name' => __('Matérias'),
                    'singular_name' => __('Matéria')
                ),
                'public' => true,
                'has_archive' => true,
                'menu_icon' => 'dashicons-welcome-write-blog',
                'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'page-attributes'),
            )
        );
    }

    add_action( 'init', 'meus_posts_types');

