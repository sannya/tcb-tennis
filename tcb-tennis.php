<?php

/*
Plugin Name: TCB Tennis
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: Plugin zur Verwaltung von Spielplänen und Spielern des Vereins ***
Version: 1.0
Author: Alexander Siewert
Author URI: http://www.raumvisionen.de
License: GPL2
*/

add_filter('the_content', 'display_something' );


/*
 * Plugin Name: User Greeting
 * Description: Display a message to anyone whose username starts with "user"
 */

function display_something($content) {

    // Postinformationen holen
    $id     = get_the_ID();
    $title  = "get_the_title()";
    $featured_image = get_the_post_thumbnail();

    return $content.'Hello World';

}

/*
 * Plugin Name: User Greeting
 * Description: Display a message to anyone whose username starts with "user"
 */

add_action('admin_notices','show_notice');

function show_notice()
{

    // Always add these two lines to capture details about the currently logged in user.
    global $current_user;
    get_currentuserinfo();


    // If you want to define an array
    $preferred_users = array('admin','user2');
    if(in_array($current_user->user_login,$preferred_users))
    {
        echo "Hello, " . $current_user->user_login . ' at ' . $current_user->user_email;
    }


    // If you want to capture an email domain
    if(strpos($current_user->user_email,'asdf.com'))
    {
        echo "Hello, " . $current_user->user_login . ' at ' . $current_user->user_email;
    }

    // If you want to greet usernames that begin with a specific prefix like "user"
    if(substr($current_user->user_login,0,4)=="user")
    {
        echo "Hello, " . $current_user->user_login;
    }


}


