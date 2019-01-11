<?php 

$looking = isset($_GET['title']) || isset($_GET['author']);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Bookstone</title>
</head>
<body>
	<?php
		$books = [
			[
				'title'=> 'To Kill A Mockingbird',
				'author' => 'Harper Lee',
				'avaliable' => true,
				'pages' => 336,
				'isbn' => '9780061120084'
			],
			[
				'title'=> '1984',
				'author' => 'George Orwell',
				'avaliable' => true,
				'pages' => 267,
				'isbn' => '9780547249643'
			],
			[
				'title'=> 'One Hundred Years Of Solitude',
				'author' => 'Gabriel Garcia Marquez',
				'avaliable' => true,
				'pages' => 467,
				'isbn' => '9785267006323'
			],
		];
	?>
	<ul>
	<?php foreach($books as $book): ?>
		<li>
			<i><?php echo $book['title']; ?></i>
			- <?php echo $book['author']; ?>
			<?php if (!$book['avaliable']): ?>
				<b> Not avaliable</b>
			<?php endif; ?>
				</li>
			<?php endforeach; ?>
				</ul>
	<p>
	<?php

	if (isset($_COOKIE['username'])) {
		echo "You are " . $_COOKIE['username'];
	} else {
		echo "You are not authenticated.";
	}
	?>
	</p>
	<?php
	if (isset($_GET['title']) && isset($_GET['author'])) {
	?>
	<p>The book you are looking for is</p>
	<ul>
		<li><b>Title</b>: <?php echo $_GET['title']; ?></li>
		<li><b>Author</b>: <?php echo $_GET['author']; ?></li>
	</ul>
	<?php
	} else {
	?>
	<p>You are not looking for a book?</p>
	<?php
	}
	?>
	<p>You lookin'? <?php echo (int) $looking; ?></p>
	
	
</body>
</html>