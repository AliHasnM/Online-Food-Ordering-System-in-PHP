<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AT FOODS -- About Us</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Database connection file include -->
    <?php include 'partials/_dbconnect.php';?>
    <!-- Header file include -->
    <?php include 'partials/_header.php';?>
    <!-- about section starts  -->
    <section class="about" id="about">
        <h3 class="sub-heading"> about us </h3>
        <h1 class="heading"> why choose us? </h1>
        <div class="row">
            <div class="content">
                <h3>best food in the country</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, sequi corrupti corporis quaerat
                    voluptatem ipsam neque labore modi autem, saepe numquam quod reprehenderit rem? Tempora aut soluta
                    odio corporis nihil!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, nemo. Sit porro illo eos cumque
                    deleniti iste alias, eum natus.</p>
                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-shipping-fast"></i>
                        <span>free delivery</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-dollar-sign"></i>
                        <span>easy payments</span>
                    </div>
                    <div class="icons">
                        <i class="fas fa-headset"></i>
                        <span>24/7 service</span>
                    </div>
                </div>
                <a href="#" class="btn">learn more</a>
            </div>
            <div class="image">
                <img src="images/home-img-1.png" alt="">
            </div>
        </div>
    </section>
    <!-- about section ends -->
    <!-- Footer file include -->
    <?php include 'partials/_footer.php';?>
</body>

</html>