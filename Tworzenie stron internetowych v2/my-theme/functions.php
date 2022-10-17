<?php 

function css(){
wp_register_style('theme-style', get_template_directory_uri() . '/assets/css/my.css', array(), '1.0.0', 'all');
wp_enqueue_style('theme-style');
}
add_action('wp_enqueue_scripts', 'css');



function js(){
    wp_register_script('theme-js', get_template_directory_uri() . '/assets/js/my.js', array(), '1.0.0', true);
    wp_enqueue_script('theme-js');
}
    add_action('wp_enqueue_scripts', 'js');




function theme_support(){
    add_theme_support('title-tag');
    add_theme_support('menus');
}
add_action('after_setup_theme', 'theme_support');

