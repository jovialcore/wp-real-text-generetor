<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://jovialcore.tech/about
 * @since             1.0.0
 * @package           Real_Text_Generetor
 *
 * @wordpress-plugin
 * Plugin Name:       Real Text Generetor
 * Plugin URI:        https://jovialcore.tech/demoing
 * Description:      With this plugin a user is able to seed real data depending on the keyword he/she entered. This time it is not just lorem ipsum, but real data!
 * Version:           1.0.0
 * Author:            Chidiebere Chukwudi
 * Author URI:        https://jovialcore.tech/about
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       real-text-generetor
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
define( 'REAL_TEXT_GENERETOR_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-real-text-generetor-activator.php
 */
function activate_real_text_generetor() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-real-text-generetor-activator.php';
	Real_Text_Generetor_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-real-text-generetor-deactivator.php
 */
function deactivate_real_text_generetor() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-real-text-generetor-deactivator.php';
	Real_Text_Generetor_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_real_text_generetor');
register_deactivation_hook( __FILE__, 'deactivate_real_text_generetor');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-real-text-generetor.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_real_text_generetor() {

	$plugin = new Real_Text_Generetor();
	$plugin->run();

}
run_real_text_generetor();
