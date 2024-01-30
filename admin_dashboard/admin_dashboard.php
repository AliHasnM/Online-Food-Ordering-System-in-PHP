<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: admin.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>AT FOODS || Admin Dashboard</title> 
</head>
<body class="admin-body">
    <!-- Database connection -->
    <?php include('../partials/_dbconnect.php'); ?>
    <nav>
        <div class="logo-name"><a href="index.php"><span class="logo_name">AT FOODS -- Admin</span></a>  
        </div>
        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="admin_dashboard.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dahsboard</span>
                </a></li>
                <li><a href="add_dish.php">
                    <i class="uil uil-shopping-basket"></i>
                    <span class="link-name">Add Dishes</span>
                </a></li>
                <li><a href="add_menu.php">
                    <i class="uil uil-store"></i>
                    <span class="link-name">Manage Menu</span>
                </a></li>
                <li><a href="see_order.php">
                    <i class="uil uil-box"></i>
                    <span class="link-name">See Order</span>
                </a></li>
                <!-- <li><a href="#">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Analytics</span>
                </a></li> -->
                <li><a href="see_review.php">
                    <i class="uil uil-feedback"></i>
                    <span class="link-name">Feedback</span>
                </a></li>
                <!-- <li><a href="#">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Comment</span>
                </a></li> -->
                <!-- <li><a href="#">
                    <i class="uil uil-file-graph"></i>
                    <span class="link-name">Reports</span>
                </a></li> -->
            </ul>
            
            <ul class="logout-mode">
                <li><a href="../1home.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
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
            <img src="img/user-icon.png" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-box"></i>
                        <span class="text">Total  Orders</span>
                        <span class="number">50,120</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-feedback"></i>
                        <span class="text">Feedback</span>
                        <span class="number">20,120</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-usd-circle"></i>
                        <span class="text">Total Revenue</span>
                        <span class="number">10,120$</span>
                    </div>
                </div>
            </div>

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent Orders</span>
                </div>
                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">Name</span>
                        <span class="data-list">Ali Hassan</span>
                        <span class="data-list">M Talal</span>
                    </div>
                    <div class="data email">
                        <span class="data-title">Email</span>
                        <span class="data-list">mughal20burewala@gmail.com</span>
                        <span class="data-list">talalch2511@gmail.com</span>
                    </div>
                    <div class="data joined">
                        <span class="data-title">Joined</span>
                        <span class="data-list">2023-01-13</span>
                        <span class="data-list">2023-01-13</span>
                    </div>
                    <div class="data type">
                        <span class="data-title">Type</span>
                        <span class="data-list">New</span>
                        <span class="data-list">New</span>
                    </div>
                    <div class="data status">
                        <span class="data-title">Status</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="script.js"></script>
</body>
</html>
