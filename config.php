<?php
$dbhost = "localhost";  // Use the name of the MySQL service defined in Docker Compose
$dbuser = "root";   // MySQL root user
$dbpass = "";  // Password you set in the docker-compose.yml
$dbname = "panel";  // Database name

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
    die("Could not connect to the database: " . mysqli_connect_error());
}
?>
