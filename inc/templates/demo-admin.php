
<?php 

    $logo = esc_attr( get_option('logo_image'));
    $footer = esc_attr( get_option('footer_copyright'));
    $footer_logo = esc_attr( get_option('footer_logo'));
?>
<?php settings_errors(); ?>
<form method="post" action="options.php">
    <?php settings_fields('demo-settings-group'); ?>
    <?php do_settings_sections('demo_company'); ?>
    <?php submit_button(); ?>
</form>