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
<!-- Database connection -->
<?php include('../partials/_dbconnect.php'); ?>
<!-- Listing Records -->
<div class="contact-box">
        <form action="del_check.php" method="post">
            <div>
                <?php
        $conn = mysqli_connect('localhost','root','');
        $db = mysqli_select_db($conn,'at_foods');
        $query = "select * from dish_cart";
        $query_run = mysqli_query($conn, $query);
        ?>
                <h1 class="center center-text">Data Records</h1>
                <table align="center" cellpadding="0" cellspacing="0" border="2">
                    <thead>
                        <tr>
                            <!-- <th><button type="submit" name="del_mul_data">Delete</button></th> -->
                            <th>Serial No#</th>
                            <th>Dish Name</th>
                            <th>Dish Price</th>
                            <th>Dish Image</th>
                            <th>Quantity</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                if(mysqli_num_rows($query_run) > 0){
                    while($row = mysqli_fetch_array($query_run)){
                ?>
                        <tr>
                            <!-- <td>
                                <input type="checkbox" name="del_chk[]" value="<?php echo $row['Serial_No']; ?>">
                            </td> -->
                            <td><?php echo $row['Serial_No']; ?></td>
                            <td><?php echo $row['dish_name']; ?></td>
                            <td><?php echo $row['dish_price']; ?></td>
                            <td><img src="myfile/<?php echo $row['dish_img']; ?>" alt="Image not Uploaded" width="100"
                                    height="100"></td>
                            <td><?php echo $row['quantity']; ?></td>
                            <td><a onClick="return confirm('Are you Sure')"
                                    href="delete_order.php?Serial_No=<?php echo $row['Serial_No']?>">Delete</a>
                                <!-- &nbsp;&nbsp;<a href="update_dish.php?Serial_No=<?php echo $row['Serial_No']?>">Edit</a> -->
                            </td>
                        </tr>
                        <?php
                    }
                }
                ?>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
