<?php
include 'partials/_dbconnect.php';

$cnam = $_REQUEST['name'];
$cemail = $_REQUEST['email'];
$cnumber = $_REQUEST['number'];
$cmessage = $_REQUEST['message'];

$query = "insert into contact (name,email,number,message) values ('$cnam','$cemail','$cnumber','$cmessage')";
mysqli_query($conn, $query);
header('location:8contact.php');
?>