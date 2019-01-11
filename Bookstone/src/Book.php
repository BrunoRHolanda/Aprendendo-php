<?php 

namespace App;

use App\Core\Database\Model;
use App\Author;

class Book extends Model {
	private $title;
	private $author;

	public function __construct(string $title, Author $author) {
		$this->$title = $title;
		$this->author = $author;
	}

	public function getTitle() {
		return $this->author;
	}

	public function getAuthor() {
		return $this->author;
	}

	public function setTitle(string $title) {
		$this->title = $title;
	}

	public function setAuthor(Author $author) {
		$this->author = $author;
	}
}
