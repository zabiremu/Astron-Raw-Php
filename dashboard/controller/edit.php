<?php

if(isset($_POST['submit'])){
    include_once "../../inc/env.php";
    $icon = $_POST['icon'];
    $title = $_POST['title'];
    $details = $_POST['details'];
    $date = date("d/m/y");
    $id= $_POST['id'];

    $query = "UPDATE services SET icon='$icon',title='$title',details='$details',time='$date' WHERE id= '$id'";
    $update = mysqli_query($conn,$query);
    if($update){
        header("location: ../AllServices");
    }
}

?>