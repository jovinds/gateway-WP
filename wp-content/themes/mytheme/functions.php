<?php
function sample_site_files() {
    // Enqueue main stylesheet
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all');

    if (is_page('about')) {
        wp_enqueue_style('about-style', get_template_directory_uri() . '/css/about.css', array(), '1.0', 'all');
    }

    if (is_page('service')) {
        wp_enqueue_style('service-style', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all');
    }
    
    if (is_page('partner')) {
        wp_enqueue_style('partner-style', get_template_directory_uri() . '/css/partner.css', array(), '1.0', 'all');
    }

    if (is_page('contact')) {
        wp_enqueue_style('partner-style', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all');
    }

    // Enqueue jQuery (WordPress includes jQuery by default, so we use 'jquery' handle)
    wp_enqueue_script('jquery'); 

    // Enqueue JavaScript files
    wp_enqueue_script('jquery-2.2.4', get_template_directory_uri() . '/js/jquery/jquery-2.2.4.min.js', array('jquery'), '2.2.4', true);
    wp_enqueue_script('popper', get_template_directory_uri() . '/js/bootstrap/popper.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap/bootstrap.min.js', array('jquery', 'popper'), '4.0', true);
    wp_enqueue_script('plugins', get_template_directory_uri() . '/js/plugins/plugins.js', array('jquery'), '1.0', true);
    wp_enqueue_script('active', get_template_directory_uri() . '/js/active.js', array('jquery', 'plugins'), '1.0', true);


}

add_action("wp_enqueue_scripts", "sample_site_files");
