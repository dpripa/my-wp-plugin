<?php

namespace My_Plugin;

defined( 'ABSPATH' ) || exit;

final class Setup {

	use Abstracts\Singable;

	public function __construct() {
		add_action( 'plugins_loaded', array( $this, 'plugin_loaded' ) );
	}

	public function plugin_loaded(): void {
		load_plugin_textdomain( TEXTDOMAIN, false, MY_PLUGIN_PATH . 'languages' );

		new Admin();
	}
}
