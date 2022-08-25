<?php

include_once "../../inc/env.php";
$id = $_GET['id'];
$active = $_GET['active'];

if($active == 1){
    $query = "UPDATE addfeatures SET active= 0 WHERE id= '$id'";
    $deActive = mysqli_query($conn,$query);
    header("location: ../AllFeatures");
    
}else{
    $query = "UPDATE addfeatures SET active= 1 WHERE id= '$id'";
    $Active = mysqli_query($conn,$query);
    header("location: ../AllFeatures");
}