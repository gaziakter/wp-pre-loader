<?php
/*
 * Plugin Name:       Wp Pre Loader
 * Plugin URI:        https://gaziakter.com/plugins/wp-pre-loader/
 * Description:       A WordPress Pre loader aplicaiton.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Gazi Akter
 * Author URI:        https://gaziakter.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       pre-loader
 * Domain Path:       /languages
 */

 if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

class WpPreLoader {

    // Constructor to initialize the plugin
    public function __construct() {
        add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
    }

   // Enqueue pre-loader styles and scripts
    public function enqueue_scripts() {
        wp_enqueue_style('wp-pre-loader-style', plugin_dir_url(__FILE__) . 'assets/css/wp-pre-loader.css');
    }

}

// Initialize the plugin
new WpPreLoader();