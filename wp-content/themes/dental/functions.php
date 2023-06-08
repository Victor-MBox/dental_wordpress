<?php
add_action('wp_enqueue_scripts', 'dental_style');
add_action('wp_enqueue_scripts', 'dental_scripts');

function dental_style() {
    wp_enqueue_style('dental_style', get_stylesheet_uri());
};

function dental_scripts() {
    wp_enqueue_script('dental_jquery', get_template_directory_uri(). '/assets/js/jquery-3.4.1.min.js' , array(), null, true);
    wp_enqueue_script('dental_jquery-validate', get_template_directory_uri(). '/assets/js/jquery.validate.min.js' , array(), null, true);
    wp_enqueue_script('dental_jquery-validate-mask', get_template_directory_uri(). '/assets/js/jquery.maskedinput.min.js' , array(), null, true);
    wp_enqueue_script('dental_slick', get_template_directory_uri(). '/assets/js/slick.min.js' , array(), null, true);
    wp_enqueue_script('dental_scripts', get_template_directory_uri(). '/assets/js/app.js' , array(), null, true);
    wp_enqueue_script('dental_scripts-page', get_template_directory_uri(). '/assets/js/page-app.js' , array(), null, true);
};



add_theme_support( 'custom-logo' ); 
add_theme_support( 'menus' ); 















?>

