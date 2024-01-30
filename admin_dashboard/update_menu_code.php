<?php
session_start();
$conn=mysqli_connect('localhost','root','','at_foods');
// Update data
if(isset($_POST['cat_update_upload'])){
    $catid = $_POST['category_id'];
    $catname = $_POST['category_name'];
    $catdesc = $_POST['category_desc'];
    $catprice = $_POST['category_price'];

    $catimagefile = $_FILES['category_img']['name'];
    $catimagefile_old = $_POST['category_img_old'];

    if($catimagefile != ''){
        $catupdate_img = $_FILES['category_img']['name'];
    }
    else{
        $catupdate_img = $catimagefile_old;
    }

    // condition 1
    if(file_exists("myfile/". $_FILES['category_img']['name'])){
        $update = $_FILES['category_img']['name'];
        $_SESSION['status'] = "Image already exists". $update;
        header("location:add_menu.php");
    }else{
        // Updating
        $query = "update menu set category_name='$catname', category_desc='$catdesc', category_price='$catprice', category_img='$catupdate_img' where category_id='$catid'";
        $query_run = mysqli_query($conn, $query);
        if($query_run){
            if($_FILES['category_img']['name'] != ''){
                move_uploaded_file($_FILES['category_img']['tmp_name'],'myfile/'.$_FILES['category_img']['name']);
                unlink('myfile/'.$catimagefile_old);
            }
            $_SESSION['status'] = "Image updated successfully";
            header("location:add_menu.php");
        }
        else{
            $_SESSION['status'] = "Image updated not successfully";
            header("location:add_menu.php");
        }
    }

    // condition 2
    if($_FILES['category_img']['name'] != ''){
        if(file_exists("myfile/". $_FILES['category_img']['name'])){
            $update = $_FILES['category_img']['name'];
            $_SESSION['status'] = "Image already exists". $update;
            header("location:add_menu.php");
        }
    }
    else{
        // Updating
        $query = "update menu set category_name='$catname', category_desc='$catdesc', category_price='$catprice', category_img='$catupdate_img' where category_id='$catid'";
        $query_run = mysqli_query($conn, $query);
        if($query_run){
            if($_FILES['category_img']['name'] != ''){
                move_uploaded_file($_FILES['category_img']['tmp_name'],'myfile/'.$_FILES['category_img']['name']);
                unlink('myfile/'.$catimagefile_old);
            }
            $_SESSION['status'] = "Image updated successfully";
            header("location:add_menu.php");
        }
        else{
            $_SESSION['status'] = "Image updated not successfully";
            header("location:add_menu.php");
        }
    }
}
?>