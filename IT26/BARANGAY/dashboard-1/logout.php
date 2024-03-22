<?php
require 'C:\xampp\htdocs\Myproject\IT26\BARANGAY\landing_page\function.php';
$_SESSION = [];
session_unset();
session_destroy();
header("Location: C:\xampp\htdocs\Myproject\IT26\BARANGAY\landing_page\barangay.php");

?>
