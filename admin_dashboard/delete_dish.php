<?php
$conn = mysqli_connect('localhost','root','');
 $db = mysqli_select_db($conn,'at_foods');
 
 $dishid = $_REQUEST['dishes_id'];

$query = "select * from dishes where dishes_id='$dishid'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
$dishimg = $row['dishes_img'];
unlink('myfile/'.$dishimg);

$query= "delete from dishes where dishes_id='$dishid'";
mysqli_query($conn, $query);
header('location:add_dish.php');

?>