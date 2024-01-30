<?php
$login=false;
$showerr=false;
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $conn = mysqli_connect('localhost', 'root', '', 'at_foods');
    $adminuser = $_POST['Username'];
    $password = $_POST['Password'];
    $sql= "Select * from admin where admin='$adminuser' AND password='$password'";
    $result=mysqli_query($conn, $sql);
    $num= mysqli_num_rows($result);
    if($num==1){
       session_start();
       $_SESSION['loggedin']=true;
       $_SESSION['Username']=$adminuser;
       header("location: admin_dashboard.php");
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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Admin | Login</title>
</head>
<body>
    <!-- Database connection -->
    <?php include('../partials/_dbconnect.php'); ?>
     <a href="" target="_blank"></a>
     <section>
     <div class="signup-form">
    <h2>Admin Login</h2>
    <form action="admin.php" method="post">
        <input type="username" class="input-box" name="Username" placeholder="User Name" required>
        <input type="password" class="input-box" name="Password" id="Password" placeholder="Your Password" required><div>
    </div>
       <div><input type="checkbox" onclick="funshowpass()">Show Password</div> 
        <button type="Submit" class="">Login</button>
        <!-- <a href="#">Lost Password?</a> -->
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