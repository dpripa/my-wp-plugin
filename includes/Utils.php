<?php

namespace My_Plugin;

defined( 'ABSPATH' ) || exit;

class Utils {

	public static function enqueue_style( string $handle, string $slug, array $deps = array() ) {
		wp_enqueue_style( $handle, MY_PLUGIN_URL . 'assets/styles/' . $slug . '.min.css', $deps, filemtime( MY_PLUGIN_PATH . 'assets/styles/' . $slug . '.min.css' ) );
	}

	public static function enqueue_script( string $handle, string $slug, array $deps = array(), bool $in_footer = true ) {
		wp_enqueue_script( $handle, MY_PLUGIN_URL . 'assets/scripts/' . $slug . '.min.js', $deps, filemtime( MY_PLUGIN_PATH . 'assets/scripts/' . $slug . '.min.js' ), $in_footer );
	}
}
