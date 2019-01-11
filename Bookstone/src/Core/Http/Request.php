<?php

namespace App\Core\Http;

use App\Core\Support\Collection;

class Request {
	const GET = 'GET';
	const POST = 'POST';

	private $domain;
	private $path;
	private $method;
	private $params;
	private $cookies;

	public function __construct() {
		$this->domain = $_SERVER['HTTP_HOST'];
		$this->path = $_SERVER['REQUEST_URI'];
		$this->method = $_SERVER['REQUEST_METHOD'];
		$this->params = new Collection(array_merge($_POST, $_GET));
		$this->cookies = new Collection($_COOKIE);
	}

	public function getUrl(): string {
		return $this->domain . $this->path;
	}

	public function getDomain(): string {
		return $this->path;
	}

	public function getMethod(): string {
		return $this->method;
	}

	public function isPost(): bool {
		return $this->method == self::POST;
	}

	public function isGet(): bool {
		return $this->method == self::GET;
	}

	public function all(): Collection {
		return $this->params;
	}

	public function getCookies(): Collection {
		return $this->cookies;
	}

	public function input(string $key) {
		return $this->params->get($key);
	}

	public function inputString(string $key, $filter = true): string {
		return $this->params->getString($key, $filter);
	}

	public function inputInt(string $key): int {
		return $this->params->getInt($key);
	}

	public function inputFloat(string $key): float {
		return $this->params->getFloat($key);
	}
}