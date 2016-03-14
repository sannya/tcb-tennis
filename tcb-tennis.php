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



register_activation_hook( __FILE__, 'tcb_create_plugin_tables' );
/**
 * Create new Table in Database, if not exist
 */
function tcb_create_plugin_tables()
{
    global $wpdb;

    $table_name = $wpdb->prefix . 'tcb';

    $sql = "CREATE TABLE $table_name (
      id int(11) NOT NULL AUTO_INCREMENT,
      name varchar(255) DEFAULT NULL,
      UNIQUE KEY id (id),
    );";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
}


add_action( 'plugins_loaded', 'loads_plugin_textdomain' );

/**
 * loads the textdomain for translation
 */
function loads_plugin_textdomain() {
    load_plugin_textdomain( 'tcb', false, dirname( plugin_basename(__FILE__) ) . '/locale/' );
}



add_action('admin_menu', 'register_admin_menu');

/**
 * Register a custom menu page.
 */
function register_admin_menu()
{
    add_menu_page(
        __('page-title', 'tcb'),
        __('menu-title', 'tcb'),
        'manage_options',
        'tcb',
        'include_admin_page',
        'dashicons-awards',
        50                              // Reihenfolge, in der der Menüpunkt erscheint
    );

    add_submenu_page(
        'tcb',
        __('page-title', 'tcb'),
        __('submenu-title', 'tcb'),
        'manage_options',
        'verwaltung',
        'include_subpage'
    );
}

function include_admin_page() {
    include(plugin_dir_path( __FILE__ ).'tcb-admin.php');
}



function include_subpage() {
    include(plugin_dir_path( __FILE__ ).'tcb-verwaltung.php');
}