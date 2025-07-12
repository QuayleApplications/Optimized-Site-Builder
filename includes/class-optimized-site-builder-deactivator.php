<?php

/**
 * Fired during plugin deactivation
 *
 * @link       http://www.quayle-applications.com
 * @since      1.0.0
 *
 * @package    Optimized_Site_Builder
 * @subpackage Optimized_Site_Builder/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Optimized_Site_Builder
 * @subpackage Optimized_Site_Builder/includes
 * @author     Jim Floss <jim@quayle-applications.com>
 */
class Optimized_Site_Builder_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
		flush_rewrite_rules();
	}

}
