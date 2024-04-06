<?php
//start session
session_start();

//including the database connection file
include_once('Crud.php');

//getting the id
$id = $_GET['id'];
 
$crud = new Crud();
 
if(isset($_POST['edit'])) {    
    $firstname = $crud->escape_string($_POST['firstname']);
    $lastname = $crud->escape_string($_POST['lastname']);
    $address = $crud->escape_string($_POST['address']);
    $age = $crud->escape_string($_POST['age']);
    $gender = $crud->escape_string($_POST['gender']);
        
    //update data
    $sql = "UPDATE member SET firstname = '$firstname', lastname = '$lastname', address = '$address', age = '$age', gender = '$gender' WHERE id = '$id'";

    if($crud->execute($sql)){
        $_SESSION['message'] = 'Member updated successfully';
    }
    else{
        $_SESSION['message'] = 'Cannot update member';
    }
        
    header('location: index.php');
}
else{
    $_SESSION['message'] = 'Select user to edit first';
    header('location: index.php');
}
?>