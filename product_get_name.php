<?php
	$host = "ec2-54-167-152-185.compute-1.amazonaws.com";
	$database = "d7rjokn0julj07";
	$user = "gqkbiudkurbksn";
	$password = "b0f9ad0d6bc76622ca310653f9129f2cab440d8e23e3061ef22d3b1934906c01";
	$port = "5432";

	$connection = pg_connect("host=".$host." dbname=".$database." user=".$user." port=".$port." password=".$password." sslmode=require");

	$ajaxId = $_GET["id"];

    $pg = 'SELECT name FROM public."Product" WHERE id = \''.$ajaxId.'\'';
    echo "<p>".$pg."</p>";
    $result = pg_query($connection,$pg);
    while ($row = pg_fetch_row($result)) {
    	echo "<p>".$row[0]."</p>";
    }
?>