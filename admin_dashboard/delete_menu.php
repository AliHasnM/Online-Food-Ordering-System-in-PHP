<?php
$conn = mysqli_connect('localhost','root','');
 $db = mysqli_select_db($conn,'at_foods');
 
 $catid = $_REQUEST['category_id'];

$query = "select * from menu where category_id='$catid'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
$catimg = $row['category_img'];
unlink('myfile/'.$catimg);

$query= "delete from menu where category_id='$catid'";
mysqli_query($conn, $query);
header('location:add_menu.php');

?>