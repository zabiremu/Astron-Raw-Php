<?php
session_start();
//delete data form database/

include_once "../../inc/env.php";
$id = $_GET['id'];
$image = $_GET['img'];
$oldImage = "../../uploads/" .$image;
if($image){
    unlink($oldImage);
}
$query = "DELETE FROM about WHERE id='$id'";
$delete = mysqli_query($conn,$query);

if($delete){
    header("location: ../AllAbout");
}

