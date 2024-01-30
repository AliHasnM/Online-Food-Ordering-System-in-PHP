<?php
$conn = mysqli_connect('localhost','root','');
 $db = mysqli_select_db($conn,'at_foods');
 
 $fbid = $_REQUEST['fb_id'];

$query = "select * from feedback where fb_id='$fbid'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
$fbimg = $row['fb_img'];
unlink('myfile/'.$fbimg);

$query= "delete from feedback where fb_id='$fbid'";
mysqli_query($conn, $query);
header('location:see_review.php');

?>