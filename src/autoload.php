<?php
/**
 * Autoload the src/ folder.
 */

namespace NateConley\Backend;

\spl_autoload_register(
	function( $class_name ) {

		if ( false === \strpos( $class_name, 'NateConley\Backend\\' ) ) {
			return;
		}

		$class_name = \str_replace( 'NateConley\Backend\\', '', $class_name );
		$path       = \plugin_dir_path( __FILE__ );
		require_once $path . $class_name . '.php';

	}
);
