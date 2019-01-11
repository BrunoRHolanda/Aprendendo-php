<?php

namespace App\Core\Support;

class Collection {
	private $map;

	public function __construct(array $baseMap) {
		$this->map = $baseMap;
	}

	public function has(string $name): bool {
		return isset($this->map[$name]);
	}

	public function get(string $key) {
		return $this->map[$key] ?? null;
	}

	public function getString(string $key, bool $filter = true): string {
		$value =  (string) $this->map[$key];
		return $filter ? addslashes($value) : $value;
	}

	public function getInt(string $key): int {
		return (int) $this->map[$key];
	}

	public function getFloat(string $key): float {
		return (float) $this->map[$key];
	}
}