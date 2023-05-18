<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://codeandpixelfluent.com
 * @since             1.0.0
 * @package           Last_Smtp
 *
 * @wordpress-plugin
 * Plugin Name:       Last SMTP
 * Plugin URI:        https://codeandpixelfluent.com
 * Description:       SMTP plugin that uses environment/constant variables configuration instead of database.
 * Version:           1.0.0
 * Author:            CodeAndPixelFluent
 * Author URI:        https://codeandpixelfluent.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       last-smtp
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'LAST_SMTP_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-last-smtp-activator.php
 */
function activate_last_smtp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-last-smtp-activator.php';
	Last_Smtp_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-last-smtp-deactivator.php
 */
function deactivate_last_smtp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-last-smtp-deactivator.php';
	Last_Smtp_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_last_smtp' );
register_deactivation_hook( __FILE__, 'deactivate_last_smtp' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-last-smtp.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_last_smtp() {

	$plugin = new Last_Smtp();
	$plugin->run();

}
run_last_smtp();
