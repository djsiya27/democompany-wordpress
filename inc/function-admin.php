<?php

function democompany_admin_page(){
    //Generate Demo Company Admin Page
    add_menu_page( 'Demo Company Options', 'Demo Company', 'manage_options', 'demo_company', 'demo_company_create_page','dashicons-admin-generic', 110);

    //Activate custom settings
    add_action( 'admin_init', 'demo_custom_settings');

}
add_action( 'admin_menu', 'democompany_admin_page');

function demo_custom_settings() {
    register_setting( 'demo-settings-group', 'logo_image');
    register_setting( 'demo-settings-group', 'footer_copyright');
    register_setting( 'demo-settings-group', 'footer_logo');


    add_settings_section('demo-company-options', 'Demo Company Options', 'demo_company_options','demo_company');

    add_settings_field('demo-logo-image', 'Logo Image', 'demo_company_profile', 'demo_company', 'demo-company-options');
    add_settings_field('footer-copy', 'Footer Copyright Text', 'demo_company_footer', 'demo_company', 'demo-company-options');
    add_settings_field('footer-logo', 'Footer Logo', 'demo_company_footer_logo', 'demo_company', 'demo-company-options');
}

function demo_company_options() {
    echo 'Customize Your Information';
}

function demo_company_profile() {
    $logo = esc_attr( get_option('logo_image'));
    echo '<input type="button" class="button button-secondary" value="Upload Logo Image" id="upload-button"> <input type="hidden" id="logo-image" name="logo_image"  value="'.$logo.'" />';
}


function demo_company_footer() {
    $footer = esc_attr( get_option('footer_copyright'));
    echo '<input type="text" name="footer_copyright" class="footer-copy" value="'.$footer.'" placeholder="2020 rtPanel. All Rights Reserved. Designed by Siyabonga Majola for rtCamp "/><p class="description">Change the footer copyright information</p>';
}

function demo_company_footer_logo() {
    $footer_logo = esc_attr( get_option('footer_logo'));
    echo '<input type="button" class="button button-secondary" value="Upload Footer Logo Image" id="footer-upload-button"> <input type="hidden" id="footer-logo-image" name="footer_logo"  value="'.$footer_logo.'" />';
}

function demo_company_create_page(){
    //generation of the admin page
    require_once( get_template_directory(). '/inc/templates/demo-admin.php');
}



