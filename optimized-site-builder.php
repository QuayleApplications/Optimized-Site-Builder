<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.quayle-applications.com
 * @since             1.0.0
 * @package           Optimized_Site_Builder
 *
 * @wordpress-plugin
 * Plugin Name:       Optimized Site Builder
 * Plugin URI:        http://www.quayle-applications.com/optimized-site-builder/
 * Description:       Built on top of the WordPress-Plugin-Boilerplate with modularized functionality.
 * Version:           1.0.0
 * Author:            Quayle Applications
 * Author URI:        http://www.quayle-applications.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       optimized-site-builder
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
define( 'OPTIMIZES_SITE_BUILDER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-optimized-site-builder-activator.php
 */
function activateOptimizedSiteBuilder() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-optimized-site-builder-activator.php';
	Optimized_Site_Builder_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-optimized-site-builder-deactivator.php
 */
function deactivateOptimizedSiteBuilder() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-optimized-site-builder-deactivator.php';
	Optimized_Site_Builder_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activateOptimizedSiteBuilder' );
register_deactivation_hook( __FILE__, 'deactivateOptimizedSiteBuilder' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-optimized-site-builder.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function runOptimizedSiteBuilder() {

	$plugin = new Optimized_Site_Builder();
	$plugin->run();

}
runOptimizedSiteBuilder();
