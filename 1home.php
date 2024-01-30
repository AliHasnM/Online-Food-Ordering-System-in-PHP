<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AT FOODS</title>
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
    <!-- home section starts  -->
    <section class="home" id="home">
        <div class="swiper-container home-slider">
            <div class="swiper-slide slide">
                <div class="content">
                    <span>our special dish</span>
                    <h3>hot pizza</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit natus dolor cumque?</p>
                    <a href="#" class="btn">order now</a>
                </div>
                <div class="image">
                    <img src="images/home-img-3.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- home section ends -->
    <!-- Footer file include -->
    <?php include 'partials/_footer.php';?>
</body>

</html>