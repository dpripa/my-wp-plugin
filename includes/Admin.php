<?php

namespace My_Plugin;

defined( 'ABSPATH' ) || exit;

class Admin {

	use Abstracts\Singable;

	public function __construct() {
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_assets' ) );
	}

	public function enqueue_assets() {
		Helpers\General::enqueue_style( 'my_plugin_admin', 'admin' );
		Helpers\General::enqueue_script( 'my_plugin_admin', 'admin' );
	}
}
