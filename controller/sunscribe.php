<?php

if($_POST['submit']){
    include_once "../inc/env.php";
    $email = $_POST['email'];
    $insert = "INSERT INTO subscribe(email) VALUES ('$email')";
    $query = mysqli_query($conn,$insert);
    if($query){
        header("location: ../index");
    }
}