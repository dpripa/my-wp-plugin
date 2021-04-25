<?php
/**
 * Plugin Name: My Custom Plugin
 * Plugin URI:  https://www.github.com/dpripa/my-wp-plugin
 * Description: Just my WordPress custom plugin
 * Version:     0.9.0
 * Text Domain: my_plugin
 * Author:      Some Developers
 * Author URI:  https://www.github.com/dpripa
 */

namespace My_Plugin;

defined( 'ABSPATH' ) || exit;

define( 'MY_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'MY_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

const TEXTDOMAIN = 'my_plugin';

$composer = MY_PLUGIN_PATH . 'vendor/autoload.php';

if ( ! file_exists( $composer ) ) {
	wp_die(
		__( 'You must run <code>composer install --no-dev</code> from the plugin directory.', TEXTDOMAIN ), // @codingStandardsIgnoreLine WordPress.Security.EscapeOutput.OutputNotEscaped
		esc_html__( 'Autoloader not found', TEXTDOMAIN )
	);
}

require_once $composer;

new Setup();
