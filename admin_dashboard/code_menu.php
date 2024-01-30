<?php
$conn=mysqli_connect('localhost','root','','at_foods');

$cname = $_POST['category_name'];
$cdesc = $_POST['category_desc'];
$cprice = $_POST['category_price'];
$imagefile = $_FILES['category_img']['name'];
move_uploaded_file($_FILES['category_img']['tmp_name'],'myfile/'.$imagefile);

$query = "insert into menu (category_name,category_desc,category_price,category_img) values ('$cname','$cdesc','$cprice','$imagefile')";
mysqli_query($conn, $query);
header('location:add_menu.php');

?>