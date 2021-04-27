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
	$phone = $_REQUEST["phone_number"];
	$email = $_REQUEST["email"];
	$address = $_REQUEST["address"];

	$host = "ec2-54-167-152-185.compute-1.amazonaws.com";
	$database = "d7rjokn0julj07";
	$user = "gqkbiudkurbksn";
	$password = "b0f9ad0d6bc76622ca310653f9129f2cab440d8e23e3061ef22d3b1934906c01";
	$port = "5432";

	$connection = pg_connect("host=".$host." dbname=".$database." user=".$user." port=".$port." password=".$password." sslmode=require");

	if ($connection === false)
		die("ERROR: could not connect to database");
	else 
		echo "SUCCESS: Connection to HERUKU postages has been established";

	$customer_query = 'INSERT INTO public."Customer"(id,name,phone_number,address,email) VALUES (\''.$id.'\',\''.$name.'\',\''.$phone.'\',\''.$address.'\',\''.$email.'\')';

	if (pg_query($connection,$customer_query)) {
			echo '<p> SUCCESS: Record is added succesfully. A new product is created</p>';
		}
		else {
			echo '<p> ERROR: Could not Execute query</p>';
		}

	?>
	
</body>
</html>