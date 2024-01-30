<?php
$login=false;
$showerr=false;
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $conn = mysqli_connect('localhost', 'root', '', 'at_foods');
    $user = $_POST['username'];
    $password = $_POST['password'];
    $sql= "Select * from users where username='$user' AND password='$password'";
    $result=mysqli_query($conn, $sql);
    $num= mysqli_num_rows($result);
    if($num==1){
       session_start();
       $_SESSION['loggedin']=true;
       $_SESSION['username']=$user;
       $_SESSION['password']=$password;
       header("location:../7checkout.php");
    }else{
        $showerr="Invalid Username or Password!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admin_dashboard/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
    <title>Admin | Login</title>
</head>
<body>
     <a href="" target="_blank"></a>
     <section id="hero">
     <div class="signup-form">
     <h2>User Login</h2>
    <form action="user_login.php" method="post">
        <input type="username" class="input-box" name="username" placeholder="User Name" required>
        <input type="password" class="input-box" name="password" id="Password" placeholder="Your Password" required><div>
    </div>
       <div><input type="checkbox" onclick="funshowpass()">Show Password</div> 
        <button type="Submit">Login</button>
        <div class="c-lost-links">
            <a href="user_reg.php">Create Account</a>
            <!-- <a href="#">Lost Password?</a> -->
        </div>
        <a href="../1home.php"> ← Back To AT FOODS</a>
    </form>
</div>

    </section>
    <script>
    function funshowpass() {
    var x = document.getElementById("Password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
</script>
</body>
</html>