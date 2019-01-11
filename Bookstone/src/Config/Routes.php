<?php

namespace App\Config;

class Routes {

	public static $api = [

		'books' => [
			'controller' => 'BookController',
			'action' => 'getAll',
		],

		'books/:page' => [

			'controller' => 'BookController',
			'action' => 'getAllWithPage',
			'params' => [

				'page' => 'number',
			]
		],

		'login' => [

			'controller' => 'AuthController',
			'action' => 'login'
		],

		'profile' => [

			'controller' => 'ProfileController',
			'action' => 'getUserProfile',
			'login' => true
		],
	];
}