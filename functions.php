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


register_sidebar( array(
    'name' => 'Footer Sidebar 1',
    'id' => 'footer-sidebar-1',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );
    register_sidebar( array(
    'name' => 'Footer Sidebar 2',
    'id' => 'footer-sidebar-2',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );
    register_sidebar( array(
    'name' => 'Footer Sidebar 3',
    'id' => 'footer-sidebar-3',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );
    register_sidebar( array(
    'name' => 'Footer Sidebar 4',
    'id' => 'footer-sidebar-4',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );

require get_template_directory() . '/inc/function-admin.php';
require get_template_directory() . '/inc/enqueue.php';