<?php

if(isset($_POST['submit'])){
    $icon = $_POST['icon'];
    $ServicesTitle = $_POST['ServicesTitle'];
    $ServicesDesc = $_POST['ServicesDesc'];
    $date = date("d/m/y");
    require "../../inc/env.php";

    $query = "INSERT INTO services( icon, title, details, time) VALUES ('$icon','$ServicesTitle','$ServicesDesc','$date')";
   
    $insert = mysqli_query($conn,$query);
    if($insert){
        header("location: ../AllServices");
    }
    
    
}