<?php
/**
 * The Single Post Meta Manager Admin defines all functionality for the dashboard
 * of the plugin.
 *
 * This class defines the meta box used to display the post meta data and registers
 * the style sheet responsible for styling the content of the meta box.
 *
 * @since    1.0.0
 */
class Tcb_Admin {

    /**
     * A reference to the version of the plugin that is passed to this class from the caller.
     *
     * @access private
     * @var    string    $version    The current version of the plugin.
     */
    protected $version;

    /**
     * Initializes this class and stores the current version of this plugin.
     *
     * @param    string    $version    The current version of this plugin.
     */
    public function __construct( $version ) {
        $this->version = $version;
    }

    /**
     * Enqueues the style sheet responsible for styling the contents of this
     * meta box.
     */
    public function enqueue_styles() {
        wp_enqueue_style(
            'tcb',
            plugin_dir_url( __FILE__ ) . 'css/tcb.css',
            array(),
            $this->version,
            FALSE
        );

        wp_enqueue_script(
            'tcb',
            plugin_dir_url( __FILE__ ) . 'js/tcb-plugin.js',
            array(),
            $this->version,
            FALSE
        );
    }

//    /**
//     * Loads the textdomain for translations
//     */
//    public function load_textdomain() {
//        load_plugin_textdomain( 'tcb', false, dirname( plugin_basename(__FILE__) ) . '/languages/' );
//    }

    /**
     * Register a custom menu page.
     */
    function register_admin_menu() {

        add_menu_page(
            __('page-title', 'tcb'),
            __('TC Bodenwerder', 'tcb'),
            'manage_options',
            'tcb',
            'include_admin_page',
            'dashicons-awards',
            50                              // Reihenfolge, in der der Menüpunkt erscheint
        );

        add_submenu_page(
            'tcb',
            __('page-title', 'tcb'),
            __('Mannschaften', 'tcb'),
            'manage_options',
            'Mannschaft',
            'include_submenu_page'
        );

        function include_admin_page() {
            include(plugin_dir_path( __FILE__ ).'../templates/spielplan.php');
        }

        function include_submenu_page() {
            include(plugin_dir_path( __FILE__ ).'../templates/mannschaften.php');
        }

    }
}
