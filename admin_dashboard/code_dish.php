<?php

$conn=mysqli_connect('localhost','root','','at_foods');

$dname = $_POST['dishes_name'];
$dprice = $_POST['dishes_price'];
$imagefile = $_FILES['dishes_img']['name'];
move_uploaded_file($_FILES['dishes_img']['tmp_name'],'myfile/'.$imagefile);

$query = "insert into dishes (dishes_name,dishes_price,dishes_img) values ('$dname','$dprice','$imagefile')";
mysqli_query($conn, $query);
header('location:add_dish.php');
?>