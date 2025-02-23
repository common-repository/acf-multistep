<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://catsplugins.com/
 * @since             1.0.0
 * @package           Acf_Multi_Step
 *
 * @wordpress-plugin
 * Plugin Name:       ACF MultiStep
 * Plugin URI:        https://catsplugins.com/download/
 * Description:       Turn long inputs of ACF fields in backend into steps. Easy to walk your client through
 * Version:           1.0.0
 * Author:            Cat's Plugins
 * Author URI:        https://catsplugins.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       acf-multi-step
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-acf-multi-step-activator.php
 */
function activate_acf_multi_step() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-acf-multi-step-activator.php';
	Acf_Multi_Step_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-acf-multi-step-deactivator.php
 */
function deactivate_acf_multi_step() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-acf-multi-step-deactivator.php';
	Acf_Multi_Step_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_acf_multi_step' );
register_deactivation_hook( __FILE__, 'deactivate_acf_multi_step' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-acf-multi-step.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_acf_multi_step() {

	$plugin = new Acf_Multi_Step();
	$plugin->run();

}
run_acf_multi_step();
