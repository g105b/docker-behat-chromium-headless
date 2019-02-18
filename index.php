<?php
$name = $_GET["name"] ?? "World";
?><!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Hello, you!</title>
</head>
<body>
	<h1>Hello, <?php echo $name; ?></h1>

	<form>
		<label>
			<span>Enter your name here:</span>
			<input name="name" required />
		</label>

		<button>Greet</button>
	</form>
</body>
</html>
