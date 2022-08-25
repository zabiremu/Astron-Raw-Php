<?php
//delete data form database/
session_start();


$editImage = "../../uploads/" .$_SESSION['editImg'];
// var_dump($editImage);
// exit();
if(file_exists($editImage)){
    unlink($editImage);
}

include_once "../../inc/env.php";
$id = $_GET['id'];
$image = $_GET['img'];
$oldImage = "../../uploads/" .$image;
if($image){
    unlink($oldImage);
}
$query = "DELETE FROM addfeatures WHERE id='$id'";
$delete = mysqli_query($conn,$query);

if($delete){
    header("location: ../AllFeatures");
}