<?php

/*
Plugin Name: Bangladesh Map
Plugin URI: http://webdeck.ml/
Description: Selectable Bangladesh Map With Division Form Search. 
Version: 1.0
Author: Rony T.
Author URI: https://www.facebook.com/ronytarafder99/
License: GPLv2 or later
Text Domain: tutsplus
 
*/
include(plugin_dir_path(__FILE__) . 'includes/location_functions.php');

include(plugin_dir_path(__FILE__) . 'includes/register_page.php');


function tutsplus_movie_styles()
{
    wp_enqueue_style('map',  plugin_dir_url(__FILE__) . '/css/map.css');
    wp_enqueue_style('bootstrap',  plugin_dir_url(__FILE__) . '/css/bootstrap.css');
}
add_action('wp_enqueue_scripts', 'tutsplus_movie_styles');


function magic_stuff($atts)
{
    ob_start();
    include(plugin_dir_path(__FILE__) . 'includes/map.php');
    $content = ob_get_clean();
    return $content;
}
add_shortcode('bangladesh_map', 'magic_stuff');
