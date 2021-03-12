<?php

namespace My_Plugin;

defined( 'ABSPATH' ) || exit;

class Admin {

	public function __construct() {
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_assets' ), 100 );
	}

	public function enqueue_assets() {
		Utils::enqueue_style( 'my_plugin_admin', 'admin' );
		Utils::enqueue_script( 'my_plugin_admin', 'admin' );
	}
}
