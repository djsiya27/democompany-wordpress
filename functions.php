<?php 


function democompany_style(){

     wp_enqueue_style('styles', get_stylesheet_uri() );
     wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
     

     wp_enqueue_script(
        'bootsatrap_script', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js',
        array('jquery')
    );

    wp_enqueue_script(
        'jquery_script', 'https://code.jquery.com/jquery-3.4.1.slim.min.js');

     wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/ec98676f87.js');


    wp_enqueue_script(
        'pooper_script', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js',
        array('jquery')
    );


}

add_action('wp_enqueue_scripts', 'democompany_style');


if ( ! function_exists( 'democompany_register_nav_menu' ) ) {
 
    function democompany_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'text_domain' ),
            'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
        ) );
    }
    add_action( 'init', 'democompany_register_nav_menu', 0 );
}

function add_link_atts($atts){
    $atts['class'] = 'nav-link footer ul li a';
    return $atts;
}

add_filter('nav_menu_link_attributes', 'add_link_atts');