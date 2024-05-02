<?php
$con = mysqli_connect("localhost", "root", "", "crud");

if($con == false){
    die("Connection Error:". mysqli_connect_error());
}

?>