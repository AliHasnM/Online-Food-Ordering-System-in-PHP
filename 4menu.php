<?php
// Database connection file include
include 'partials/_dbconnect.php';
if(isset($_POST['add_to_cart'])){

    $dish_name = $_POST['category_name'];
    $dish_price = $_POST['category_price'];
    $dish_image = $_POST['category_img'];
    $dish_quantity = 1;

    $select_cart = mysqli_query($conn, "SELECT * FROM `menu_cart` WHERE dish_name = '$dish_name'");
 
    if(mysqli_num_rows($select_cart) > 0){
       $message[] = 'Dish already added to cart';
    }else{
       $insert_dish = mysqli_query($conn, "INSERT INTO `menu_cart`(dish_name, dish_price, dish_img, quantity) VALUES('$dish_name', '$dish_price', '$dish_image', '$dish_quantity')");
       $message[] = 'Dish added to cart succesfully';
    }
 
 }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AT FOODS -- Menu</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dish.css">
    <!-- <link rel="stylesheet" href="css/style1.css"> -->
</head>

<body>
    <!-- Database connection file include -->
    <?php include 'partials/_dbconnect.php';?>
    <!-- Header file include -->
    <?php include 'partials/_header.php';?>
    <?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>
    <div class="container">

        <section class="dishes">

            <h1 class="heading">latest Dishes</h1>

            <div class="box-container">

                <?php
      
      $select_dishes = mysqli_query($conn, "SELECT * FROM `menu`");
      if(mysqli_num_rows($select_dishes) > 0){
         while($fetch_dish = mysqli_fetch_assoc($select_dishes)){
            // show the data on screen 
            // $dname = $fetch_dish['category_name'];
            // $dprice = $fetch_dish['category_price'];
            // $dimg = $fetch_dish['category_img'];
      ?>

                <form action="" method="post">
                    <div class="box">
                        <img src="admin_dashboard/myfile/<?php echo $fetch_dish['category_img']; ?>" alt="">
                        <h3><?php echo $fetch_dish['category_name']; ?></h3>
                        <div class="price">$<?php echo $fetch_dish['category_price']; ?>/-</div>
                        <input type="hidden" name="category_name" value="<?php echo $fetch_dish['category_name']; ?>">
                        <input type="hidden" name="category_price" value="<?php echo $fetch_dish['category_price']; ?>">
                        <input type="hidden" name="category_img" value="<?php echo $fetch_dish['category_img']; ?>">
                        <input type="submit" class="btn" value="add to cart" name="add_to_cart">
                    </div>
                </form>

                <?php
         };
      };
      ?>

            </div>

        </section>

    </div>

    <!-- custom js file link  -->
    <script src="js/script.js"></script>
    <!-- Footer file include -->
    <?php include 'partials/_footer.php';?>
</body>

</html>