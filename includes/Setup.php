<?php

namespace My_Plugin;

defined( 'ABSPATH' ) || exit;

final class Setup {

	public function __construct() {
		add_action( 'plugins_loaded', array( $this, 'plugin_loaded' ) );
	}

	public function plugin_loaded() {
		load_plugin_textdomain( 'my_plugin', false, MY_CORE_PATH . 'languages' );

		new Admin();
	}
}
