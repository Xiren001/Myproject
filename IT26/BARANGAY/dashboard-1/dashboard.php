
<?php
require 'C:\xampp\htdocs\Myproject\IT26\BARANGAY\landing_page\function.php';

$select = new Select();

if(!empty($_SESSION["id"])){
  $user = $select->selectUserById($_SESSION["id"]);
}
else{
  header("Location: C:\xampp\htdocs\Myproject\IT26\BARANGAY\landing_page\barangay.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Menu</title>
    <link rel="stylesheet" href="dashboard.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
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
                    <a href="logout.php"><h6>MYKO XIREN</h6></a>
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
                    <li class="list-item active">
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
                    <li class="list-item">
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
        <div class="content">
            <div class="contents-div">
                <div class="dashboard-content">
                    <p>POPULATION</p>
                </div>
                <div class="dashboard-content">
                    <p>MALE</p>
                </div>
                <div class="dashboard-content">
                    <p>FEMALE</p>
                </div>
                <div class="dashboard-content">
                    <p>VOTERS</p>
                </div>
                <div class="dashboard-content">
                    <p>NON-VOTERS</p>
                </div>
                <div class="dashboard-content">
                    <p>PRECINT</p>
                </div>
                <div class="dashboard-content">
                    <p>PUROK</p>
                </div>
                <div class="dashboard-content">
                    <p>BLOTTER</p>
                </div>
                <div class="dashboard-content">
                    <p>REVENUE</p>
                </div>
            </div>
        </div>
    </div>
    <script src="dashboard.js"></script>
</body>
</html>

