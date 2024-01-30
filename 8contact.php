<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AT FOODS -- Contact us</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Database connection file include -->
    <?php include 'partials/_dbconnect.php';?>
    <!-- Header file include -->
    <?php include 'partials/_header.php';?>
    <div class="container">

<section class="checkout-form">

   <h1 class="heading">contact us</h1>

   <form action="code_contact.php" method="post">
         <div class="inputBox1">
            <span>your name</span>
            <input type="text" placeholder="enter your name" name="name" required>
         </div>
         <div class="inputBox1">
            <span>your email</span>
            <input type="email" placeholder="enter your email" name="email" required>
         </div>
         <div class="inputBox1">
            <span>your number</span>
            <input type="number" placeholder="enter your number" name="number" required>
         </div>
         <div class="inputBox1">
            <span>message</span>
            <textarea placeholder="enter your message" id="" cols="30" rows="10" name="message" required></textarea>
         </div>
      <input type="submit" value="Submit" class="btn">
   </form>

</section>

</div>

<!-- custom js file link  -->
<script src="js/script.js"></script>
<!-- Footer file include -->
<?php include 'partials/_footer.php';?>
</body>

</html>