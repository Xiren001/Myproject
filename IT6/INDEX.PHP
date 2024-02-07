<?php
$server ="localhost";
$username = "root";
$password = "";
$database = "it6_task3"; //change this with your db name
$conn = new mysqli($server, $username, $password, $database);
if($conn->connect_error) die("Cant connect to database!");
else echo "Database connected!";


?>