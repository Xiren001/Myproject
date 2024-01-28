<?php
$server ="localhost";
$username = "root";
$password = "";
$database = "IT6LDB"; //change this with your db name
$connection = new mysqli($server, $username, $password, $database);
if($connection->connect_error) die("Cant connect to database!");
else echo "Database connected!";


?>