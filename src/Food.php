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
				'show_in_rest'        => true,
				'show_in_graphql'     => true,
				'graphql_single_name' => 'food',
				'graphql_plural_name' => 'foods',
			]
		);

	}

}
