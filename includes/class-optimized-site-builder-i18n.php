<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://www.quayle-applications.com
 * @since      1.0.0
 *
 * @package    Optimized_Site_Builder
 * @subpackage Optimized_Site_Builder/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Optimized_Site_Builder
 * @subpackage Optimized_Site_Builder/includes
 * @author     Jim Floss <jim@quayle-applications.com>
 */
class Optimized_Site_Builder_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'optimized-site-builder',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}

}
