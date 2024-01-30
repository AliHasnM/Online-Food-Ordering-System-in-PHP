<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: user_login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admin_dashboard/style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>AT Foods | User Dashboard</title> 
</head>
<body class="admin-body">
    <nav>
        <div class="logo-name"><a href="index.php"><span class="logo_name">AT Foods</span></a>  
        </div>
        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="admin_dashboard.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-box"></i>
                    <span class="link-name">Recent Order</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-file-graph"></i>
                    <span class="link-name">Reports</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="#">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

               
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            <img src="../img/user-icon.png" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent Orders History</span>
                </div>
                <div class="activity-data">
                <div class="data status">
                        <span class="data-title">Order Id</span>
                    </div>
                    <div class="data names">
                        <span class="data-title">Name</span>
                    </div>
                    <div class="data email">
                        <span class="data-title">Email</span>
                    </div>
                    <div class="data joined">
                        <span class="data-title">Order Date</span>
                    </div>
                    <div class="data type">
                        <span class="data-title">Shipping Address</span> 
                    </div>

                </div>
            </div>
        </div>
    </section>
    <script src="../script.js"></script>
</body>
</html>
