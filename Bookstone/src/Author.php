<?php

namespace App;

use App\Core\Database\Model;

class Author extends Model {
	private $name;
	private $age;

	public function __construct(string $name, int $age) {
		$this->name = $name;
		$this->age = $age;
	}

	public function getName() {
		return $this->name;
	}

	public function getAge() {
		$this->age;
	}

	public function setName(string $name) {
		$this->name = $name;
	}

	public function setAge(int $age) {
		$this->age = $age;
	}
}