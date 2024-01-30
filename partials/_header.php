<?php
$filename=basename($_SERVER['PHP_SELF']);
?>
<!-- header section starts      -->

<header>

    <a href="#" class="logo"><i class="fas fa-utensils"></i>AT Foods</a>

    <nav class="navbar">
        <a href="1home.php" <?php if($filename=='1home.php' || $filename==''){ ?>class="active" <?php }?>>Home</a>
        <a href="3dishes.php" <?php if($filename=='3dishes.php'){ ?>class="active" <?php }?>>Dishes</a>
        <a href="2about.php" <?php if($filename=='2about.php'){ ?>class="active" <?php }?>>About</a>
        <!-- <a href="4menu.php">Menu</a> -->
        <a href="5review.php" <?php if($filename=='5review.php'){ ?>class="active" <?php }?>>Review</a>
        <a href="8contact.php" <?php if($filename=='8contact.php'){ ?>class="active" <?php }?>>Contact</a>
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <i class="fas fa-search" id="search-icon"></i>
        <a href="#" class="fas fa-heart"></a>
        <a href="6cart.php" class="fas fa-shopping-cart"></a>
        <!-- <a href="login_system/login.php" class="fas fa-user"></a> -->
    </div>
    <div class="dropdown">
        <a href="#" class="dropbtn fas fa-user"></a>
        <div class="dropdown-content">
            <a href="admin_dashboard/admin.php" class="fas fa-user">Admin</a>
            <a href="user_dashboard/user_login.php" class="fas fa-user">User</a>
        </div>
    </div>
</header>

<!-- header section ends-->

<!-- search form  -->
<form action="" id="search-form">
    <input type="search" placeholder="search here..." name="" id="search-box">
    <label for="search-box" class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>