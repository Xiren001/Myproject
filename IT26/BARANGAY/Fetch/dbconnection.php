<?php
$con = mysqli_connect("localhost", "root", "", "barangay_profiling");

if($con == false){
    die("Connection Error:". mysqli_connect_error());
}

?>