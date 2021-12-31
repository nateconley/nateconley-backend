<?php

namespace NateConley\Backend;

class Food {

	public function __construct() {

		\add_action( 'init', [ $this, 'register_architecture' ] );

	}

	public function register_architecture() {

		\register_extended_post_type(
			'food',
			[
				'show_in_rest' => true,
			]
		);

	}

}
