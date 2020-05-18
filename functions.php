<?php 
function democompany_wp_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'democompany_wp_setup' );


function democompany_theme_logo() {
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-width' => true ) );
    }
add_action( 'after_setup_theme', 'democompany_theme_logo' );

add_post_type_support( 'page', 'excerpt' );

function wpc_cat_pages() {
    register_taxonomy_for_object_type('category', 'page');
}
add_action('init', 'wpc_cat_pages');

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


// Slider Post-type

add_action( 'init', 'custom_bootstrap_slider' );
/**
 * Register a Custom post type for.
 */
function custom_bootstrap_slider() {
	$labels = array(
		'name'               => _x( 'Slider', 'post type general name'),
		'singular_name'      => _x( 'Slide', 'post type singular name'),
		'menu_name'          => _x( 'Bootstrap Slider', 'admin menu'),
		'name_admin_bar'     => _x( 'Slide', 'add new on admin bar'),
		'add_new'            => _x( 'Add New', 'Slide'),
		'add_new_item'       => __( 'Name'),
		'new_item'           => __( 'New Slide'),
		'edit_item'          => __( 'Edit Slide'),
		'view_item'          => __( 'View Slide'),
		'all_items'          => __( 'All Slide'),
		'featured_image'     => __( 'Featured Image', 'text_domain' ),
		'search_items'       => __( 'Search Slide'),
		'parent_item_colon'  => __( 'Parent Slide:'),
		'not_found'          => __( 'No Slide found.'),
		'not_found_in_trash' => __( 'No Slide found in Trash.'),
	);

	$args = array(
		'labels'             => $labels,
		'menu_icon'	     => 'dashicons-star-half',
    	        'description'        => __( 'Description.'),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail'),
		'taxonomies'          => array( 'category' ),
	);


	register_post_type( 'slider', $args );

	
}

function logo_display()
{
    ?>
        <input type="hidden" name="ologo" value="<?php echo get_option('logo'); ?>" readonly /><input type="file" name="logo" id="imgupload" style="display: none;" />
  <a id="OpenImgUpload" class="button button-primary">Image Upload</a>
        <?php echo get_option('logo'); ?>
   <?php
}
function handle_logo_upload()
{
    if(isset($_FILES["logo"]) && !empty($_FILES['logo']['name']))
    {
        $urls = wp_handle_upload($_FILES["logo"], array('test_form' => FALSE));
        $temp = $urls["url"];
       return $temp;
    }
 elseif(isset($_FILES["logo"]) && empty($_FILES['logo']['name'])){
  $urls = $_POST["ologo"];
  return $urls;
 }
   return $option;
} 
function display_theme_panel_fields()
{
    add_settings_section("section", "All Settings", null, "theme-options");
    add_settings_field("logo", "Logo", "logo_display", "theme-options", "section");  
    register_setting("section", "logo", "handle_logo_upload");
}
add_action("admin_init", "display_theme_panel_fields");