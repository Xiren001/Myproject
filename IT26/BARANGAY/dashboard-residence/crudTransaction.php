<?php
// Start session
session_start();

// Including the database connection file
include_once('Crud.php');

// Initialize Crud object
$crud = new Crud();

// Check if form is submitted for adding member
if(isset($_POST['add'])) {    
    $image = $crud->escape_string($_POST['image']);
    $firstname = $crud->escape_string($_POST['firstname']);
    $middlename = $crud->escape_string($_POST['middlename']);
    $lastname = $crud->escape_string($_POST['lastname']);
    $address = $crud->escape_string($_POST['address']);
    $suffix = $crud->escape_string($_POST['suffix']);
    $job_status = $crud->escape_string($_POST['job_status']);
    $block = $crud->escape_string($_POST['block']);
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
    $blood_type = $crud->escape_string($_POST['blood_type']);
    $voters_id = $crud->escape_string($_POST['voters_id']);
    $presinct_no = $crud->escape_string($_POST['presinct_no']);
    $contact_number = $crud->escape_string($_POST['contact_number']);
    $household_id = $crud->escape_string($_POST['household_id']);
    $occupation = $crud->escape_string($_POST['occupation']);
    $disabilities = $crud->escape_string($_POST['disabilities']);
    $emergency_contacts = $crud->escape_string($_POST['emergency_contacts']);
       
    // Insert data to database
    $sql = "INSERT INTO tbl_residence (image, firstname, middlename, lastname, address, suffix, job_status, block, street, subd_purok, birthplace, birthday, age, gender, civil_status, citizenship, email, religion, blood_type, voters_id, presinct_no, contact_number, household_id, occupation, disabilities, emergency_contacts) 
            VALUES ('$image', '$firstname','$middlename','$lastname','$address','$suffix', '$job_status', '$block', '$street', '$subd_purok', '$birthplace', '$birthday', '$age', '$gender', '$civil_status', '$citizenship', '$email', '$religion', '$blood_type', '$voters_id', '$presinct_no', '$contact_number', '$household_id', '$occupation', '$disabilities', '$emergency_contacts')";

    if($crud->execute($sql)){
        $_SESSION['message'] = 'Member added successfully';
    } else{
        $_SESSION['message'] = 'Cannot add member';
    }
    header('location: Cdashboard.php');
}
if(isset($_POST['addPersonel'])) {    
    $fullname = $crud->escape_string($_POST['fullname']);
    $position = $crud->escape_string($_POST['position']);
    $department = $crud->escape_string($_POST['department']);
    $termstart = $crud->escape_string($_POST['termstart']);
    $termend = $crud->escape_string($_POST['termend']);
    $status = $crud->escape_string($_POST['status']);

    // Insert data to database
    $sql = "INSERT INTO brngy_personel (fullname, position, department, termstart, termend, status) 
            VALUES ('$fullname', '$position','$department','$termstart','$termend','$status')";

    if($crud->execute($sql)){
        $_SESSION['message'] = 'Personel added successfully';
    } else{
        $_SESSION['message'] = 'Cannot add Personel';
    }
        
    header('location: CdashboardPersonel.php');
}


// Check if form is submitted for editing
if(isset($_POST['edit']) || isset($_POST['editPersonel'])) {
    if(isset($_POST['id'])) {
        $id = $crud->escape_string($_POST['id']); // Get id from hidden input

        // Determine which table to update based on the submitted form
        if(isset($_POST['edit'])) {
            // Editing member details
            $image = $crud->escape_string($_POST['image']);
            $firstname = $crud->escape_string($_POST['firstname']);
            $middlename = $crud->escape_string($_POST['middlename']);
            $lastname = $crud->escape_string($_POST['lastname']);
            $suffix = $crud->escape_string($_POST['suffix']);
            $job_status = $crud->escape_string($_POST['job_status']);
            $block = $crud->escape_string($_POST['block']);
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
            $blood_type = $crud->escape_string($_POST['blood_type']);
            $voters_id = $crud->escape_string($_POST['voters_id']);
            $presinct_no = $crud->escape_string($_POST['presinct_no']);
            $contact_number = $crud->escape_string($_POST['contact_number']);
            $household_id = $crud->escape_string($_POST['household_id']);
            $occupation = $crud->escape_string($_POST['occupation']);
            $disabilities = $crud->escape_string($_POST['disabilities']);
            $emergency_contacts = $crud->escape_string($_POST['emergency_contacts']);

            // Update member data
            $sql = "UPDATE tbl_residence SET 
                    image = '$image', 
                    firstname = '$firstname', 
                    middlename = '$middlename', 
                    lastname = '$lastname', 
                    suffix = '$suffix', 
                    job_status = '$job_status', 
                    block = '$block', 
                    street = '$street', 
                    subd_purok = '$subd_purok', 
                    birthplace = '$birthplace', 
                    birthday = '$birthday',
                    age = '$age', 
                    gender = '$gender', 
                    civil_status = '$civil_status', 
                    citizenship = '$citizenship', 
                    email = '$email', 
                    religion = '$religion', 
                    blood_type = '$blood_type', 
                    voters_id = '$voters_id',
                    presinct_no = '$presinct_no', 
                    contact_number = '$contact_number',  
                    household_id = '$household_id',
                    occupation = '$occupation', 
                    disabilities = '$disabilities', 
                    emergency_contacts = '$emergency_contacts'
                    WHERE id = '$id'";
            $success_message = 'Member updated successfully';
            $error_message = 'Cannot update member';
            $redirect_page = 'Cdashboard.php';
        } elseif(isset($_POST['editPersonel'])) {
            // Editing personnel details
            $fullname = $crud->escape_string($_POST['fullname']);
            $position = $crud->escape_string($_POST['position']);
            $department = $crud->escape_string($_POST['department']);
            $termstart = $crud->escape_string($_POST['termstart']);
            $termend = $crud->escape_string($_POST['termend']);
            $status = $crud->escape_string($_POST['status']);

            // Update personnel data
            $sql = "UPDATE brngy_personel SET 
                    fullname = '$fullname', 
                    position = '$position', 
                    department = '$department', 
                    termstart = '$termstart', 
                    termend = '$termend', 
                    status = '$status' 
                    WHERE id = '$id'";
            $success_message = 'Personnel updated successfully';
            $error_message = 'Cannot update Personnel';
            $redirect_page = 'CdashboardPersonel.php';
        } else {
            // Invalid edit request
            $_SESSION['message'] = 'Invalid edit request';
            header('location: error_page.php');
            exit;
        }

        // Execute the SQL query
        if($crud->execute($sql)) {
            $_SESSION['message'] = $success_message;
        } else {
            $_SESSION['message'] = $error_message;
        }

        // Redirect to the appropriate dashboard page
        header("location: $redirect_page");
        exit;
    }
}


// Check if delete action is requested and ID is provided
if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Determine which table to delete from based on the 'delete' parameter
    if(isset($_GET['delete'])) {
        $table = 'tbl_residence';
        $success_message = 'Member deleted successfully';
        $error_message = 'Cannot delete member';
        $redirect_page = 'Cdashboard.php';
    } elseif(isset($_GET['deletePersonel'])) {
        $table = 'brngy_personel';
        $success_message = 'Personel deleted successfully';
        $error_message = 'Cannot delete Personel';
        $redirect_page = 'CdashboardPersonel.php';
    } else {
        // Handle invalid delete request
        $_SESSION['message'] = 'Invalid delete request';
        header('location: error_page.php');
        exit;
    }

    // Delete data
    $sql = "DELETE FROM $table WHERE id = '$id'";

    if($crud->execute($sql)){
        $_SESSION['message'] = $success_message;
    } else{
        $_SESSION['message'] = $error_message;
    }

    // Redirect to appropriate dashboard page
    header("location: $redirect_page");
    exit;
}
?>


