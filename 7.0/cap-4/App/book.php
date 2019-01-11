<?php

namespace App;

use App\Database\Model;

spl_autoload_register(function ($classname) {
	$lastSlash = strpos($classname, '\\') + 1;
	$classname = substr($classname, $lastSlash);
	$directory = str_replace('\\', '/', $classname);
	$filename = __DIR__ . '/' . $directory . '.php';
	require_once($filename);
});

class Book extends Model {
	private $title;
	private $author;
	private $isbn;

	function __construct(string $title, string $author, int $isbn) {
		$this->title = $title;
		$this->author = $author;
		$this->isbn = $isbn;
	}

	function __call($functionName, $args) {
		switch ($functionName) {
			case 'getTitle':
				return $this->title;
				break;
			case 'getAuthor':
				return $this->author;
				break;
			case 'getISBN':
				return $this->isbn;
				break;
			case 'setTitle':
				$this->title = (string) $args[0];
				break;
			case 'setAuthor':
				$this->author = (string) $args[0];
				break;
			case 'setISBN':
				$this->isbn = $args[0];
				break;
		}
	}

	function __toString() { return $this->title .' - ' .$this->author; }
}

$book = new Book('Aprendendo PHP', 'Bruno R. Holanda', 123456789);

print($book);
