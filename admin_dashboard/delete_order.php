<?php
$conn = mysqli_connect('localhost','root','');
 $db = mysqli_select_db($conn,'at_foods');
 
 $fbid = $_REQUEST['Serial_No'];

$query = "select * from dish_cart where Serial_No='$fbid'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
$fbimg = $row['dish_img'];
unlink('myfile/'.$fbimg);

$query= "delete from dish_cart where Serial_No='$fbid'";
mysqli_query($conn, $query);
header('location:see_order.php');

?>