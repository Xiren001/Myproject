<?php
// Start session
session_start();

// Including the database connection file
include_once('Crud.php');

// Initialize Crud object
$crud = new Crud();

// Check if form is submitted for adding member
if(isset($_POST['add'])) {    
    $firstname = $crud->escape_string($_POST['firstname']);
    $middlename = $crud->escape_string($_POST['middlename']);
    $lastname = $crud->escape_string($_POST['lastname']);
    $address = $crud->escape_string($_POST['address']);
    $age = $crud->escape_string($_POST['age']);
    $gender = $crud->escape_string($_POST['gender']);
        
    // Insert data to database
    $sql = "INSERT INTO tbl_residence (firstname, middlename, lastname, address, age, gender) VALUES ('$firstname','$middlename','$lastname','$address','$age','$gender')";

    if($crud->execute($sql)){
        $_SESSION['message'] = 'Member added successfully';
    } else{
        $_SESSION['message'] = 'Cannot add member';
    }
        
    header('location: index.php');
}

// Check if form is submitted for editing or deleting member
if(isset($_POST['edit'])) {
    if(isset($_POST['id'])) {
        // Editing operation
        $firstname = $crud->escape_string($_POST['firstname']);
        $middlename = $crud->escape_string($_POST['middlename']);
        $lastname = $crud->escape_string($_POST['lastname']);
        $address = $crud->escape_string($_POST['address']);

        $suffix = $crud->escape_string($_POST['suffix']);
        $job_status = $crud->escape_string($_POST['job_status']);
        $block = $crud->escape_string($_POST['block']);
        $lot = $crud->escape_string($_POST['lot']);
        $street = $crud->escape_string($_POST['street']);
        $subd_purok = $crud->escape_string($_POST['subd_purok']);
        $birthplace = $crud->escape_string($_POST['birthplace']);
        $birthday = $crud->escape_string($_POST['birthday']);

        $age = $crud->escape_string($_POST['age']);
        $gender = $crud->escape_string($_POST['gender']);

        $civil_status = $crud->escape_string($_POST['civil_status']);
        $citizenship = $crud->escape_string($_POST['citizenship']);
        $email = $crud->escape_string($_POST['email']);
        $religion = $crud->escape_string($_POST['religion']);
        $height = $crud->escape_string($_POST['height']);
        $weight = $crud->escape_string($_POST['weight']);
        $blood_type = $crud->escape_string($_POST['blood_type']);
        $voters_id = $crud->escape_string($_POST['voters_id']);
        $presinct_no = $crud->escape_string($_POST['presinct_no']);
        $contact_number = $crud->escape_string($_POST['contact_number']);
        $bussiness_name = $crud->escape_string($_POST['bussiness_name']);
        $bussiness_permit = $crud->escape_string($_POST['bussiness_permit']);
        $purok_id = $crud->escape_string($_POST['purok_id']);
        $household_id = $crud->escape_string($_POST['household_id']);
        $monthly_income = $crud->escape_string($_POST['monthly_income']);
        $city = $crud->escape_string($_POST['city']);
        $province = $crud->escape_string($_POST['province']);
        $occupation = $crud->escape_string($_POST['occupation']);
        $disabilities = $crud->escape_string($_POST['disabilities']);
        $emergency_contacts = $crud->escape_string($_POST['emergency_contacts']);


        $id = $crud->escape_string($_POST['id']); // Get id from hidden input
        
        // Update data
        $sql = "UPDATE tbl_residence SET firstname = '$firstname', middlename = '$middlename', lastname = '$lastname', 
        suffix = '$suffix', job_status = '$job_status', block = '$block', lot = '$lot', street = '$street', subd_purok = '$subd_purok', birthplace = '$birthplace', birthday = '$birthday',
        civil_status = '$civil_status', citizenship = '$citizenship', email = '$email', religion = '$religion', height = '$height', weight = '$weight', blood_type = '$blood_type', voters_id = '$voters_id',
        presinct_no = '$presinct_no', contact_number = '$contact_number', bussiness_name = '$bussiness_name', bussiness_permit = '$bussiness_permit', purok_id = '$purok_id', household_id = '$household_id', monthly_income = '$monthly_income', city = '$city', 
        province = '$province', occupation = '$occupation', disabilities = '$disabilities', emergency_contacts = '$emergency_contacts',
         age = '$age', gender = '$gender' WHERE id = '$id'";

        if($crud->execute($sql)){
            $_SESSION['message'] = 'Member updated successfully';
        } else{
            $_SESSION['message'] = 'Cannot update member';
        }
        
        header('location: index.php');
    }
}

// Check if delete action is requested
if(isset($_GET['delete']) && isset($_GET['id'])){
    // Getting the id
    $id = $_GET['id'];
     
    // Delete data
    $sql = "DELETE FROM tbl_residence WHERE id = '$id'";

    if($crud->execute($sql)){
        $_SESSION['message'] = 'Member deleted successfully';
    } else{
        $_SESSION['message'] = 'Cannot delete member';
    }
        
    header('location: index.php');
}
?>
