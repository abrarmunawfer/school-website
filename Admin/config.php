<?php
	
	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$dbname="panel";

	$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

	if (!$conn) {
		die("Cloud not connect to the database".mysqli_connect_error());
	}

?>