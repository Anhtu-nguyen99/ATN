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

	$host = "ec2-54-167-152-185.compute-1.amazonaws.com";
	$database = "d7rjokn0julj07";
	$user = "gqkbiudkurbksn";
	$password = "b0f9ad0d6bc76622ca310653f9129f2cab440d8e23e3061ef22d3b1934906c01";
	$port = "5432";

	// $host_param_str = "host=".$host;
	// $dbname_param_str
	// $user_param_str
	// $pass_param_str
	// $sslmode_param_str
	// $port_param_str

	// $connection_str = $host_param_str + $dbname_param_str + .... 

	$connection = pg_connect("host=".$host.", dbname=".$database.", user=".$user.", port".$port.", password".$password.", ssl= required");

	if ($connection === false)
		die("ERROR: could not connect to database");
	else 
		echo "SUCCESS: Connection to HERUKU postages has been established";
	?>
</body>
</html>