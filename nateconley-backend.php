<?php

/**
 * Plugin Name: Nate Conley Backend Functionality
 * Text Domain: nc-backend
 *
 * @package NateConley\Backend
 */

namespace NateConley\Backend;

require_once \plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

// Include the autoloader.
require_once \plugin_dir_path( __FILE__ ) . 'src/autoload.php';

class Backend {

	public function __construct() {

		new Food();

	}

}

new Backend();
