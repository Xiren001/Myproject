<?php
//start session
session_start();

//crud with database connection
include_once('Crud.php');

$crud = new Crud();

//fetch data
$sql = "SELECT * FROM tbl_residence";
$result = $crud->read($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Menu</title>
    <link rel="stylesheet" href="Cdashboard.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container-div">
        <header class="header">
            <div class="acc">

                <div class="face">
                    <i class='bx bxs-face'></i>
                </div>
                <div>
                    <div>
                        <h6>MYKO XIREN</h6>
                    </div>
                </div>
            </div>
        </header>
        <div class="menu">
            <nav class="sidebar">
                <div class="logo-menu">
                    <h2 class="logo">Barangay</h2>
                    <i class='bx bx-menu toggle-btn'></i>
                </div>

                <ul class="nav-list">
                    <li class="list-item ">
                        <a href="/IT26/BARANGAY/dashboard-1/dashboard.html">
                            <i class='bx bx-grid-alt'></i>
                            <span class="link-name">Dashboard</span>
                        </a>
                    </li>
                    <hr>
                    <div class="men-p">
                        <p>MENU</p>
                    </div>
                    <li class="list-item">
                        <a href="#">
                            <i class='bx bx-user'></i>
                            <span class="link-name">Personel</span>
                        </a>
                    </li>
                    <li class="list-item active">
                        <a href="/IT26/BARANGAY/dashboard-2/Cdashboard.html">
                            <i class='bx bx-message-square-dots'></i>
                            <span class="link-name">Community Record</span>
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="#">
                            <i class='bx bx-certification'></i>
                            <span class="link-name">Brangay Certification</span>
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="#">
                            <i class='bx bx-receipt'></i>
                            <span class="link-name">Certificate of Indigency</span>
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="#">
                            <i class='bx bx-id-card'></i>
                            <span class="link-name">Business Clearance</span>
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="#">
                            <i class='bx bx-folder'></i>
                            <span class="link-name">Crime List</span>
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="#">
                            <i class='bx bx-tired'></i>
                            <span class="link-name">Diseasse List</span>
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="/IT26/BARANGAY/dashboard-3/dashboard.html">
                            <i class='bx bx-food-menu'></i>
                            <span class="link-name">Requested Document</span>
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="#">
                            <i class='bx bx-building-house'></i>
                            <span class="link-name">Household Record</span>
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="#">
                            <i class='bx bx-cog'></i>
                            <span class="link-name">Settings</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="invi-div">
        </div>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Community Record</h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="#add" class="btn btn-add" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add Resident</span></a>
                    </div>
                    <form action="" method="GET">
                        <div class="input-group mb-3">
                            <input type="search" name="search" id="search" autocomplete="off" class="form-control search" placeholder="Search" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
                        </div>
                    </form>

                </div>
            </div>

            <?php
            if (isset($_SESSION['message'])) {
            ?>
                <div class="alert alert-info text-center">
                    <?php echo $_SESSION['message']; ?>
                </div>
            <?php

                unset($_SESSION['message']);
            }

            ?>

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>
                            <span class="custom-checkbox">
                                <input type="checkbox" id="selectAll">
                                <label for="selectAll"></label>
                            </span>
                        </th>
                        <th>Firstname</th>
                        <th>middlename</th>
                        <th>Lastname</th>
                        <th>Purok</th>
                        <th>presinct_no</th>
                        <th style="text-align: center; padding-right:25px; ">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $con = mysqli_connect("localhost", "root", "", "barangay_profiling");

                    // Check if search query is set and not empty
                    if (isset($_GET['search']) && !empty($_GET['search'])) {
                        $filtervalues = $_GET['search'];
                        $query = "SELECT * FROM tbl_residence WHERE CONCAT(firstname,lastname,middlename,subd_purok,presinct_no) LIKE '%$filtervalues%' ";
                        $query_run = mysqli_query($con, $query);

                        if (mysqli_num_rows($query_run) > 0) {
                            foreach ($query_run as $items) {
                    ?>
                                <tr>
                                    <td>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                            <label for="checkbox1"></label>
                                        </span>
                                    </td>
                                    <td><?= $items['firstname']; ?></td>
                                    <td><?= $items['middlename']; ?></td>
                                    <td><?= $items['lastname']; ?></td>
                                    <td><?= $items['subd_purok']; ?></td>
                                    <td><?= $items['presinct_no']; ?></td>
                                    <td style="padding: 5px; display:flex; flex-direction:row; justify-content:center; align-items:center;">
                                        <a href="#edit<?= $row['id']; ?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>

                                        <a href="#delete<?= $row['id']; ?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>

                                        <a href="#view<?= $row['id']; ?>" class="view" data-toggle="modal"><i class='bx bxs-show' data-toggle="tooltip" title="view">&#xE872;</i></a>
                                    </td>
                                    <?php include('action_modal.php'); ?>
                                </tr>
                            <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="4">No Record Found</td>
                            </tr>
                        <?php
                        }
                    } else {
                        // If search query is empty, display all data from $result array
                        foreach ($result as $row) {
                        ?>
                            <tr>
                                <td>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                        <label for="checkbox1"></label>
                                    </span>
                                </td>
                                <td><?= $row['firstname']; ?></td>
                                <td><?= $row['middlename']; ?></td>
                                <td><?= $row['lastname']; ?></td>
                                <td><?= $row['subd_purok']; ?></td>
                                <td><?= $row['presinct_no']; ?></td>
                                <td style="padding: 5px; display:flex; flex-direction:row; justify-content:center; align-items:center;">
                                    <a href="#edit<?= $row['id']; ?>" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>

                                    <a href="#delete<?= $row['id']; ?>" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>

                                    <a href="#view<?= $row['id']; ?>" class="view" data-toggle="modal"><i class='bx bxs-show' data-toggle="tooltip" title="view">&#xE872;</i></a>
                                </td>
                                <?php include('action_modal.php'); ?>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>


            </table>
        </div>
    </div>
    <?php include('add_modal.php'); ?>
    <script src="Cdashboard.js"></script>
</body>

</html>