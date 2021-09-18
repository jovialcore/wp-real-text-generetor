<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://jovialcore.tech/about
 * @since      1.0.0
 *
 * @package    Real_Text_Generetor
 * @subpackage Real_Text_Generetor/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Real_Text_Generetor
 * @subpackage Real_Text_Generetor/includes
 * @author     Chidiebere Chukwudi <chidideveloper@gmail.com>
 */
class Real_Text_Generetor_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'real-text-generetor',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
