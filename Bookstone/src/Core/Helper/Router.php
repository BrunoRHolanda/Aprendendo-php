<?php

namespace App\Core\Helper;

use App\Controller\ErrorController;
use App\Controller\AuthController;
use App\Config\Routes;
use App\Core\Http\Request;

class Router {
	private $routeMap;
	private static $regexPatters = [

		'number' => '\d+',
		'string' => '\w',
	];

	public function __construct(Routes $routes) {
		$this->routeMap = $routes::api;
	}

	public function route(Request $request): string {
		$path = $request->getPath();
	}
}