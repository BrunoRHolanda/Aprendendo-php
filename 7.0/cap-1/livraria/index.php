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
	<p>You lookin'? <?php echo (int) $looking; ?></p>
	<p>The book you are looking for is</p>
	<ul>
		<li><b>Title</b>: <?php echo $_GET['title']; ?></li>
		<li><b>Author</b>: <?php echo $_GET['author']; ?></li>
	</ul>
</body>
</html>