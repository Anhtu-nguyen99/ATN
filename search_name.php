<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	$host = "ec2-54-167-152-185.compute-1.amazonaws.com";
	$database = "d7rjokn0julj07";
	$user = "gqkbiudkurbksn";
	$password = "b0f9ad0d6bc76622ca310653f9129f2cab440d8e23e3061ef22d3b1934906c01";
	$port = "5432";

	$connection = pg_connect("host=".$host." dbname=".$database." user=".$user." port=".$port." password=".$password." sslmode=require");
	$ajaxName = $_GET["name"];

    $pgPost = 'SELECT name FROM public."Product"';
    $names = pg_query($connection,$pgPost);
    $result = array();
    foreach ($names as $name) {
    	if (preg_match("/$ajaxName/", $name)) {
    		$result[] = "<a href='#'>$name</a>";
    	}
    }
    echo implode("<br>", $result);
	?>
</body>
</html>