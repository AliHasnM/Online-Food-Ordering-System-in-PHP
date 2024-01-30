<?php

$conn=mysqli_connect('localhost','root','','at_foods');

$fbname = $_POST['fb_name'];
$fbprice = $_POST['fb_desc'];
$imagefile = $_FILES['fb_img']['name'];
move_uploaded_file($_FILES['fb_img']['tmp_name'],'admin_dashboard/myfile/'.$imagefile);

$query = "insert into feedback (fb_name,fb_desc,fb_img) values ('$fbname','$fbprice','$imagefile')";
mysqli_query($conn, $query);
header('location:5review.php');
?>