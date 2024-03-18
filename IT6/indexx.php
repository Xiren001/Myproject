<?php
$server = "localhost";
$username ="root";
$password ="";
$database ="project";
$connection =new mysqli($server,$username,$password,$database);
if($connection->connect_error) die("cant connect to database!");
else echo "Database connected!";

echo"<br> hello world!!";

?>