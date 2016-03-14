<?php

/*
Plugin Name: Tennisclub Bodenwerder e.V.
Plugin URI: http://www.raumvisionen.de
Description: Plugin zur Verwaltung von Spielplänen und Spielern des Vereins ***
Version: 1.0
Author: Alexander Siewert
Text Domain: tcb
Domain Path:/locale/
Author URI: http://www.raumvisionen.de
License: GPL2
*/


/**
 * loads the textdomain for translation
 */
function loads_plugin_textdomain() {
    load_plugin_textdomain( 'tcb', false, dirname( plugin_basename(__FILE__) ) . '/locale/' );
}

add_action( 'plugins_loaded', 'loads_plugin_textdomain' );

/**
 * Register a custom menu page.
 */
function wpdocs_register_my_custom_menu_page()
{
    add_menu_page(
        __('page-title', 'tcb'),
        __('menu-title', 'tcb'),
        'manage_options',
        'custompage',
        'my_custom_menu_page',
        'dashicons-awards',
        6
    );

    add_submenu_page(
        'custompage',
        __('page-title', 'tcb'),
        __('submenu-title', 'tcb'),
        'manage_options',
        'custom_submenu'
    );
}

add_action('admin_menu', 'wpdocs_register_my_custom_menu_page');

/**
 * Display a custom menu page
 */
function my_custom_menu_page()
{
    esc_html_e('Admin Page Test', 'textdomain');
}

/**
 * callback function for the plugin-page
 */
function tcb_tennis_verwaltung()
{
    ?>

    <div class="wrap">
        <h4>hello</h4>
    </div>

    <?php
}


// add_filter('the_content', 'display_something' );
//
// function display_something($content) {
//
//    // Postinformationen holen
//    $id     = get_the_ID();
//    $title  = "get_the_title()";
//    $featured_image = get_the_post_thumbnail();
//
//    return $content.'Hello World';
//
//}

/*
 * Plugin Name: User Greeting
 * Description: Display a message to anyone whose username starts with "user"
 */

//add_action('admin_notices','show_notice');

//function show_notice()
//{
//
//    // Always add these two lines to capture details about the currently logged in user.
//    global $current_user;
//    get_currentuserinfo();
//
//
//    // If you want to define an array
//    $preferred_users = array('admin','user2');
//    if(in_array($current_user->user_login,$preferred_users))
//    {
//        echo "Hello, " . $current_user->user_login . ' at ' . $current_user->user_email;
//    }
//
//
//    // If you want to capture an email domain
//    if(strpos($current_user->user_email,'asdf.com'))
//    {
//        echo "Hello, " . $current_user->user_login . ' at ' . $current_user->user_email;
//    }
//
//    // If you want to greet usernames that begin with a specific prefix like "user"
//    if(substr($current_user->user_login,0,4)=="user")
//    {
//        echo "Hello, " . $current_user->user_login;
//    }
//
//
//}