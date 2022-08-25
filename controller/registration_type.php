<?php
session_start();
include "../inc/env.php";
if (isset($_POST['submit'])) {
    $userName = $_POST['User-Name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $ConfirmPassword = $_POST['Confirm-password'];
    $Number = $_POST['Number'];
    $Date = $_POST['Date'];
    $files = $_FILES['files'];
    $validPass = sha1($password);
    if (empty($userName)) {
        $_SESSION["error-userName"] = "Please enter the User Name";
        header('location: ../Registration.php');
    } else if (empty($email)) {
        $_SESSION["error-email"] = "Please enter the Email Address";
        header('location: ../Registration.php');
    } else if (empty($password)) {
        $_SESSION["error-password"] = "Please enter the Password";
        header('location: ../Registration.php');
    } else if (strlen($password) < 8) {
        $_SESSION["strong-password"] = "Please enter strong Password";
        header('location: ../Registration.php');
    } else if (empty($ConfirmPassword == $password)) {
        $_SESSION["error-ConfirmPassword"] = "Please enter Valid Password";
        header('location: ../Registration.php');
    } else if (empty($Date)) {
        $_SESSION["error-Date"] = "Please enter the Date";
        header('location: ../Registration.php');
    } else if (!$files['name']) {
        $_SESSION["error-files"] = "Please enter your files";
        header('location: ../Registration.php');
    }elseif($files['name']){
        $filesName = $files['name'];
        $ImagefilesName = explode('.',$filesName);
        $validName = end($ImagefilesName);
        if($validName != "png" && $validName != "jpeg" && $validName != "wbep" && $validName != "jpg" && $validName != "webp"){
            $_SESSION["error-files"] = "Please enter valid files";
            header('location: ../Registration.php');
        }else{
            $imageName = uniqid("user_") . '.' . $validName;
            move_uploaded_file($files['tmp_name'], '../uploads/' . $imageName);
            
            $query = "INSERT INTO registrar(name, email, password, number, time, files) VALUES ('$userName','$email','$validPass','$Number','$Date','$imageName')";
            $insert = mysqli_query($conn, $query); 
            if($insert){
                header("location: ../Login.php");
            }
        }     
    } else {
        echo "done";
    }
}


