<?php
/**
 * * The file responsible for starting the Single Post Meta Manager plugin
 *
 * The Single Post Meta Manager is a plugin that displays the post meta data
 * associated with a given post. This particular file is responsible for
 * including the necessary dependencies and starting the plugin.
 *
 *
 *
 * @wordpress-plugin
 * Plugin Name:       Tennisclub Bodenwerder e.V.
 * Plugin URI:        http://www.raumvisionen.de
 * Description:       Plugin zur Verwaltung von Spielplänen und Spielern des Vereins ***
 * Version:           0.1.0
 * Author:            Alexander Siewert
 * Author URI:        http://www.raumvisionen.de
 * Text Domain:       tcb
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path:       /languages
 */

if ( ! defined( 'WPINC' ) ) {
    die;
}

/**
 * Include the core class responsible for loading all necessary components of the plugin.
 */
require_once plugin_dir_path( __FILE__ ) . 'includes/class-tcb-tennis.php';

/**
 * Instantiates the Single Post Meta Manager class and then
 * calls its run method officially starting up the plugin.
 */
function run_tcb_tennis() {

    $spmm = new Tcb_Tennis();
    $spmm->run();

}

// Call the above function to begin execution of the plugin.
run_tcb_tennis();