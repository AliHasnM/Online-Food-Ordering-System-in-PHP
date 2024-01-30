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
    <?php
    // Database connection 
    include('../partials/_dbconnect.php');

    $catid = $_GET['category_id'];
    // Select query 
    $query = "select * from menu where category_id='$catid'";
    $query_run = mysqli_query($conn, $query);
    if(mysqli_num_rows($query_run)>0){
        foreach ($query_run as $row) {
            ?>
    <!-- Form Design -->
    <div id="contact-box">
        <form action="update_menu_code.php" method="post" class="form" enctype="multipart/form-data">
            <h1 class="center">Update Menu</h1>
            <input type="hidden" name="category_id" value="<?php echo $row['category_id']; ?>">
            <div class="form-group">
                <label for="name">Dish Name</label>
                <input type="text" name="category_name" id="dishes_name" value="<?php echo $row['category_name']; ?>">
            </div>
            <div class="form-group">
                <label for="name">Dish Description</label>
                <input type="text" name="category_desc" id="dishes_name" value="<?php echo $row['category_desc']; ?>">
            </div>
            <div class="form-group">
                <label for="name">Dish Price</label>
                <input type="text" name="category_price" id="dishes_price"
                    value="<?php echo $row['category_price']; ?>">
            </div>
            <div class="form-group">
                <label for="name">Choose Dish Image</label>
                <input type="file" name="category_img" id="category_img">
                <input type="hidden" name="category_img_old" value="<?php echo $row['category_img']; ?>">
            </div>
            <img src="myfile/<?php echo $row['category_img']; ?>" alt="Image not Uploaded" width="100" height="100">
            <div class="form-group">
                <button type="submit" name="cat_update_upload">Submit</button>
            </div>
        </form>
    </div>
    <?php
        }
    }
    else{
        echo "No record avaiable";
    }
    ?>
    </section>
    <script src="script.js"></script>
</body>
</html>
