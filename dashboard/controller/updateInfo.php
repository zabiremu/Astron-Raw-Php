<?php

session_start();
include_once("../../inc/env.php");
if (isset($_POST['submit'])) {
    $id = $_SESSION['auth']['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $files = $_FILES['file'];
    if(isset($files)){
        $query = "UPDATE registrar SET name='$name',email='$email' WHERE id='$id'";
        $update = mysqli_query($conn, $query);
        if($update){
            $_SESSION['auth']['name'] = $name;
            $_SESSION['auth']['email'] = $email;
            header("Location: ../profile.php");
        }
    }
    // image update 
    if (empty($files['name'])) {
        echo "";
    } else {
        // choose image extension
        $imgName = $files['name'];
        $imgArray = explode('.', $imgName);
        $extension = end($imgArray);
        $newImgName = uniqid("user") . "." . $extension;
        move_uploaded_file($files['tmp_name'], "../../uploads/" . $newImgName);
        $oldImgName = "../../uploads/" . $_SESSION['auth']['files'];
        if (file_exists($oldImgName)) {
            unlink($oldImgName);
        }
        $query = "UPDATE registrar SET name='$name',email='$email',files='$newImgName' WHERE id='$id'";
        $update = mysqli_query($conn, $query);
        if($update){
            $_SESSION['auth']['name'] = $name;
            $_SESSION['auth']['email'] = $email;
            $_SESSION['auth']['files'] = $newImgName;
            header("Location: ../profile.php");
        }
    }
}
