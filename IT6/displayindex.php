<?php
require_once('INDEX.PHP');

$firstname = "dyrel";
$lastname = "monday";

try{
    $sql = "INSERT INTO sampletbl(firstname, lastname) VALUES('$firstname', '$lastname')";
    $query = $conn->query($sql);

    if($query){
        echo "NEW ROW ADDED";
    }else{
        echo "ROW NOT ADDED";
    }
}catch(Exception $e){
    if(str_contains($e->getMessage(), 'Duplicate entry')){
        echo "ERROR: DATA EXIST!";
      }else{
        echo "ERROR: " . $e->getMessage();
     }
}


?>