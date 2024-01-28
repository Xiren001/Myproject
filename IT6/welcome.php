<?php

require_once('INDEX.PHP');
echo"<br><h1>This is my table.<h1>";


$sql ="SELECT * FROM user_table";
$query = $connection ->query($sql);

$num_rows = $query->num_rows;
echo"The no. of rows is:" . $num_rows;

 while($row = $query->fetch_assoc()) {
    $id = $row['id'];
    $username = $row['username'];
    $password = $row['password'];
    $name = $row['name'];
  
    echo"<hr>";
    echo "id:" . $id ."<br>";
    echo "username:" . $username ."<br>";
    echo "password:" . $password ."<br>";
    echo "name:" . $name ."<br>";
    echo "<hr>";

 }
 
 
 
 
?>