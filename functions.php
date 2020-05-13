<?php 

function democompany_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'democompany_post_thumbnails' );

add_post_type_support( 'page', 'excerpt' );

function democompany_style(){

     wp_enqueue_style('styles', get_stylesheet_uri() );
     wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
	 
	 wp_enqueue_style( 'slick-style', get_template_directory_uri() . './slick.css');

	 wp_enqueue_style( 'slick-theme', get_template_directory_uri() . './slick-theme.css');

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
	
	wp_enqueue_script(
        'slick-jquery', 'http://code.jquery.com/jquery-1.11.0.min.js'
        
    );

	wp_enqueue_script(
        'migrate', 'http://code.jquery.com/jquery-migrate-1.2.1.min.js',
        array('jquery')
	);

	wp_enqueue_script(
        'migrate', 'http://code.jquery.com/jquery-migrate-1.2.1.min.js',
        array('jquery')
	);

	wp_enqueue_script( 'main-script', get_template_directory_uri() . './main.js', array(), '1.0.0', true );

	wp_enqueue_script( 'slick-min', get_template_directory_uri() . './slick.min.js', array(), '1.0.0', true );


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


// Slider Post-type

// Creating a Sliders Custom Post Type
function crunchify_Sliders_custom_post_type() {
	$labels = array(
		'name'                => __( 'Sliders' ),
		'singular_name'       => __( 'Slider'),
		'menu_name'           => __( 'Sliders'),
		'parent_item_colon'   => __( 'Parent Slider'),
		'all_items'           => __( 'All Sliders'),
		'view_item'           => __( 'View Slider'),
		'add_new_item'        => __( 'Add New Slider'),
		'add_new'             => __( 'Add New'),
		'edit_item'           => __( 'Edit Slider'),
		'update_item'         => __( 'Update Slider'),
		'search_items'        => __( 'Search Slider'),
		'not_found'           => __( 'Not Found'),
		'not_found_in_trash'  => __( 'Not found in Trash')
	);
	$args = array(
		'label'               => __( 'Sliders'),
		'description'         => __( 'Best Crunchify Sliders'),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'revisions', 'custom-fields'),
		'public'              => true,
		'hierarchical'        => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'has_archive'         => true,
		'can_export'          => true,
		'exclude_from_search' => false,
	        'yarpp_support'       => true,
		'taxonomies' 	      => array('post_tag'),
		'publicly_queryable'  => true,
		'capability_type'     => 'page'
);
	register_post_type( 'Sliders', $args );
}
add_action( 'init', 'crunchify_Sliders_custom_post_type', 0 );