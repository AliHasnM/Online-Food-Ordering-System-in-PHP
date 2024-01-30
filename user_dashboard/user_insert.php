<?php
$con=mysqli_connect('localhost','root','','at_foods');
echo $name=$_POST['name'];
echo $email=$_POST['email'];
echo $username=$_POST['username'];
echo $password=$_POST['password'];
$q="insert into users (name,email,username,password) values ('$name','$email','$username','$password')";
echo mysqli_query($con,$q);

 header('location:user_login.php');

?>