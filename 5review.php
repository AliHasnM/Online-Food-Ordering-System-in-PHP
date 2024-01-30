<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AT FOODS -- Review</title>
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
    <!-- review section starts  -->
    <section class="review" id="review">
        <h3 class="sub-heading"> customer's review </h3>
        <h1 class="heading"> what they say </h1>
        <div class="swiper-container review-slider">
            <div class="swiper-wrapper">
                <?php
        $sql = "SELECT * FROM `feedback`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            // show the data on screen 
            $fbname = $row['fb_name'];
            $fbdesc = $row['fb_desc'];
            $fbimg = $row['fb_img'];
            echo '<div class="swiper-slide slide">
            <i class="fas fa-quote-right"></i>
            <div class="user">
                <img src="admin_dashboard/myfile/'. $fbimg .'" alt="Image not Uploaded" width="250" height="200">
                <div class="user-info">
                    <h3>'. $fbname .'</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
                </div>
                    <p>'. $fbdesc .'</p>
                </div>';
                }
                ?>
            </div>
            <div>
                <a href="feedback.php" class="btn review_btn">feedback</a>
            </div>
        </div>
    </section>
    <!-- review section ends -->
    <!-- Footer file include -->
    <?php include 'partials/_footer.php';?>
</body>

</html>