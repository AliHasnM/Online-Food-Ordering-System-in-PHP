<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../admin_dashboard/style.css">
    <title>AT FOODS -- Register</title>
</head>
<body>
     <a href="" target="_blank"></a>
     <div id="hero1">    
<div class="signup-form" autocomplete="off">
     <h2>Sign Up</h2>
    <form action="user_insert.php" method="post">
    <input type="text" class="input-box" name="name" placeholder="Your Name">
        <input type="username" class="input-box" name="username" placeholder="Username" required>
        <input type="email" class="input-box" name="email" placeholder="Your Email" required>
        <input type="password" id="pass" class="input-box" name="password" placeholder="Your Password" required>
        <input type="password" id="confirm_pass" class="input-box" name="password" placeholder="Your Confirm Password"  onkeyup="validate_password()" required>
        <span id="wrong_pass_alert"></span>
       <div>
       </div> 
        <button type="submit" id="register_user_btn" class="signup-btn" onclick="wrong_pass_alert()">Sign Up</button>
        <p>Already have an Account? <a href="user_login.php">Sign In</a></p>
    </form>
    
</div>
</div>
<script src="script.js"></script>
</body>
</html>