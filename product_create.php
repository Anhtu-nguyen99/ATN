<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	$id = $_REQUEST["id"];
	$name = $_REQUEST["name"];
	$cat = $_REQUEST["cat"];
	$date = $_REQUEST["date"];
	$desc = $_REQUEST["desc"];
	$price = $_REQUEST["price"];

	echo $id;
	echo $name;
	echo $cat;
	echo $date;
	echo $desc;
	echo $price;
	?>
</body>
</html>