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
    }

    /**
     * Registers the meta box that will be used to display all of the post meta data
     * associated with the current post.
     */
    public function add_meta_box() {
        add_meta_box(
            'single-post-meta-manager-admin',
            'Single Post Meta Manager',
            array( $this, 'render_meta_box' ),
            'post',
            'normal',
            'core'
        );
    }

    /**
     * Requires the file that is used to display the user interface of the post meta box.
     */
    public function render_meta_box() {
        require_once plugin_dir_path( __FILE__ ) . 'partials/tcb-tennis.php';
    }

}
?>


<!---->
<!---->
<!---->
<!--<div class="wrap">-->
<!--    <h2>--><?php //esc_attr_e( 'Spielplan', 'wp_admin_style' ); ?><!--</h2>-->
<!---->
<!--    <table></table>-->
<!---->
<!--    <input type="text" value="Termin" class="regular-text" />-->
<!--    <input type="text" value="Heim-Mannschaft" class="regular-text" />-->
<!--    <input type="text" value="Gast-Mannschaft" class="regular-text" />-->
<!--    <input type="text" value="Gats-Mannschaft" class="regular-text" />-->
<!---->
<!--</div>-->
<!---->
<!--<h2>Einzel</h2>-->
<!--<table class="widefat">-->
<!--    <thead>-->
<!--    <tr>-->
<!--        <th class="row-title">Name</th>-->
<!--        <th>--><?php //esc_attr_e( 'Table header cell #2', 'wp_admin_style' ); ?><!--</th>-->
<!--    </tr>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--    <tr>-->
<!--        <td class="row-title"><label for="tablecell">--><?php //esc_attr_e(
//                    'Table Cell #1, with label', 'wp_admin_style'
//                ); ?><!--</label></td>-->
<!--        <td>--><?php //esc_attr_e( 'Table Cell #2', 'wp_admin_style' ); ?><!--</td>-->
<!--    </tr>-->
<!--    <tr class="alternate">-->
<!--        <td class="row-title"><label for="tablecell">--><?php //esc_attr_e(
//                    'Table Cell #3, with label and class', 'wp_admin_style'
//                ); ?><!-- <code>alternate</code></label></td>-->
<!--        <td>--><?php //esc_attr_e( 'Table Cell #4', 'wp_admin_style' ); ?><!--</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <td class="row-title">--><?php //esc_attr_e( 'Table Cell #5, without label', 'wp_admin_style' ); ?><!--</td>-->
<!--        <td>--><?php //esc_attr_e( 'Table Cell #6', 'wp_admin_style' ); ?><!--</td>-->
<!--    </tr>-->
<!--    <tr class="alt">-->
<!--        <td class="row-title">--><?php //esc_attr_e(
//                'Table Cell #7, without label and with class', 'wp_admin_style'
//            ); ?><!-- <code>alt</code></td>-->
<!--        <td>--><?php //esc_attr_e( 'Table Cell #8', 'wp_admin_style' ); ?><!--</td>-->
<!--    </tr>-->
<!--    <tr class="form-invalid">-->
<!--        <td class="row-title">--><?php //esc_attr_e(
//                'Table Cell #9, without label and with class', 'wp_admin_style'
//            ); ?><!-- <code>form-invalid</code></td>-->
<!--        <td>--><?php //esc_attr_e( 'Table Cell #10', 'wp_admin_style' ); ?><!--</td>-->
<!--    </tr>-->
<!--    </tbody>-->
<!--    <tfoot>-->
<!--    <tr>-->
<!--        <th class="row-title">--><?php //esc_attr_e( 'Table header cell #1', 'wp_admin_style' ); ?><!--</th>-->
<!--        <th>--><?php //esc_attr_e( 'Table header cell #2', 'wp_admin_style' ); ?><!--</th>-->
<!--    </tr>-->
<!--    </tfoot>-->
<!--</table>-->
<!--<br>-->
<!---->
<!--<h2>Doppel</h2>-->
<!--<input class="button-primary" type="submit" name="Example" value="--><?php //esc_attr_e( 'Spielplan erstellen','tcb' ); ?><!--" />-->
