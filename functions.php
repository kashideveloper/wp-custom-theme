<?php
/**
 * 
 * Functions File
 * 
 * @package AKONIC
 */


 

//  ======LOADING FILES FUNCTION=======

 function akonica_script_function() {
    // Add main stylesheet
    wp_enqueue_style('main-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
    // Add Bootstrap
    wp_enqueue_style( "bootstrap-css", get_template_directory_uri() . './library/bootstrap/css/bootstrap.min.css', [], false, 'all' );

    // ==== WP SCRIPTS ====
    // main-js
    wp_enqueue_script( "main-js", get_template_directory_uri() . './assets/main.js', [], filemtime(get_template_directory() . './assets/main.js'), true );
    // bootstrap js
    wp_enqueue_script( "bootstrap-js", get_template_directory_uri() . './library/bootstrap/bootstrap.min.js', [ 'jquery' ], false, true );

}
add_action('wp_enqueue_scripts', 'akonica_script_function');


    // ======= CUSTOM FUNCTION ========

    function ikonic_config() {
        // ======= Navigation ========
        register_nav_menus( array(
            'Ikonic_main_menu' => "MAIN MENU"
            ) );
            
        // ======= GENERAL TEMPLATE HEADER IMAGE ========
        add_theme_support( 'custom-header', array(
            "height" => "200px",
            "width"  => 1200,
            ) );
            
         // ======= POST THUMBNAIL ========
        add_theme_support( 'post-thumbnails');
         // ======= POST FORMATE ========
        add_theme_support( 'post-formats',  array("video", "image"));

    }
    add_action( 'after_setup_theme', 'ikonic_config', 0);

    // ======= BLOGPAGE SIDEBAR ========
    add_action( 'widgets_init', 'Ikonic_blog_sidebar');
    function Ikonic_blog_sidebar() {
        register_sidebar( array(
            "name" => "BLOG PAGE SIDE BAAR",
            "id" => "blog-sidebar-1",
            "description" => "This is blog page sidebaar",
            "before_widget" => "<div class='blog_sidebar_wrapper'>",
            "after_widget"  => '</div>',
            "before_title" => "<h5 class='widget_title'>",
            "after_title"  => "<h5>"
        ));
    }
    
    
    
    
    // ======= CUSTOM POST TYPE ========
    
    add_action( 'init', 'akonic_projects_postType' );
    function akonic_projects_postType() {
  
        register_post_type( 'Projects',
            array(
                'labels' => array(
                    'name' => __( 'Projects' ),
                    'singular_name' => __( 'Project' )
                ),
                'public' => true,
                'has_archive' => true,
                'rewrite' => array('slug' => 'Projects'),
                'show_in_rest' => true,
      
            )
        );
    }