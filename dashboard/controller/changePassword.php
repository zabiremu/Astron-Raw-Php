<?php
session_start();
include_once "../../inc/env.php";
if(isset($_POST['update'])){
    $id = $_SESSION['auth']['id'];
    $oldPassword = $_POST['oldPassword'];
    $encOldpassword = sha1($oldPassword);
    $newPassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPass'];
    $encPassword = sha1($newPassword);
    $currentPassword = $_SESSION["auth"]["password"];
    if($encOldpassword == $currentPassword){
        $query = "UPDATE registrar SET password='$encPassword' WHERE id='$id'";
        $update = mysqli_query($conn,$query);
        header("location: ../profile.php");
    }else{
        echo "everything is not ok";
    }
}