<?php
session_start();

$conn=mysqli_connect('localhost','root','','at_foods');

// Update data
if(isset($_POST['update_upload'])){
    $did = $_POST['dishes_id'];
    $dname = $_POST['dishes_name'];
    $dprice = $_POST['dishes_price'];

    $imagefile = $_FILES['dishes_img']['name'];
    $imagefile_old = $_POST['dishes_img_old'];

    if($imagefile != ''){
        $update_img = $_FILES['dishes_img']['name'];
    }
    else{
        $update_img = $imagefile_old;
    }
    
    // condition 1
    if(file_exists("myfile/". $_FILES['dishes_img']['name'])){
        $update = $_FILES['dishes_img']['name'];
        $_SESSION['status'] = "Image already exists". $update;
        header("location:add_dish.php");
    }else{
        // Updating
        $query = "update dishes set dishes_name='$dname', dishes_price='$dprice', dishes_img='$update_img' where dishes_id='$did'";
        $query_run = mysqli_query($conn, $query);
        if($query_run){
            if($_FILES['dishes_img']['name'] != ''){
                move_uploaded_file($_FILES['dishes_img']['tmp_name'],'myfile/'.$_FILES['dishes_img']['name']);
                unlink('myfile/'.$imagefile_old);
            }
            $_SESSION['status'] = "Image updated successfully";
            header("location:add_dish.php");
        }
        else{
            $_SESSION['status'] = "Image updated not successfully";
            header("location:add_dish.php");
        }
    }

    // condition 2
    if($_FILES['dishes_img']['name'] != ''){
        if(file_exists("myfile/". $_FILES['dishes_img']['name'])){
            $update = $_FILES['dishes_img']['name'];
            $_SESSION['status'] = "Image already exists". $update;
            header("location:add_dish.php");
        }
    }
    else{
        // Updating
        $query = "update dishes set dishes_name='$dname', dishes_price='$dprice', dishes_img='$update_img' where dishes_id='$did'";
        $query_run = mysqli_query($conn, $query);
        if($query_run){
            if($_FILES['dishes_img']['name'] != ''){
                move_uploaded_file($_FILES['dishes_img']['tmp_name'],'myfile/'.$_FILES['dishes_img']['name']);
                unlink('myfile/'.$imagefile_old);
            }
            $_SESSION['status'] = "Image updated successfully";
            header("location:add_dish.php");
        }
        else{
            $_SESSION['status'] = "Image updated not successfully";
            header("location:add_dish.php");
        }
    }
}
?>