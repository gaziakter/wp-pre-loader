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
        add_action('wp_body_open', array($this, 'add_preloader_html'));

    }

   // Enqueue pre-loader styles and scripts
    public function enqueue_scripts() {
        wp_enqueue_style('wp-pre-loader-style', plugin_dir_url(__FILE__) . 'assets/css/wp-pre-loader.css');
        wp_enqueue_script('wp-pre-loader-script', plugin_dir_url(__FILE__) . 'js/wp-pre-loader.js', array('jquery'), null, true);
    }

    // Add pre-loader HTML to the site
    public function add_preloader_html() {
        echo '<div id="preloader">
                <div class="spinner"></div>
              </div>';
    }

}

// Initialize the plugin
new WpPreLoader();




    public function enqueue_scripts() {
        wp_enqueue_style('wp-pre-loader-style', plugin_dir_url(__FILE__) . 'css/wp-pre-loader.css');
        wp_enqueue_script('wp-pre-loader-script', plugin_dir_url(__FILE__) . 'js/wp-pre-loader.js', array('jquery'), null, true);
    }