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

		foreach ($this->routeMap as $route => $info) {
			$regexRoute = $this->getRegexRoute($route, $info);
			if (preg_match("@^/$regexRoute$@", $path)) {
				return $this->executeController(
					$route,$path, $info, $request
				);
			}
		}

		$errorController = new ErrorController($request);
		return $errorController->notFound();
	}

	public function getRegexRoute(
		string $route,
		array $info
	): string {
		if (isset($info['params'])) {
			foreach ($info['params'] as $name => $type) {
				$route = str_replace(':'.$name,self::$regexPatters[$type], $route);
			}
		}

		return $route;
	}

	public function extractParams(
		string $route,
		string $path
	): array {
		$params = [];

		$pathParts = explode('/', $path);
		$routeParts = explode('/', $route);
	}
}