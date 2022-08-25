<?php

if(isset($_POST['submit'])){
    // data Base Connection
    include_once "../../inc/env.php";
    $id = $_POST['id'];
    $title = $_POST['title'];
    $title1 = $_POST['title1'];

        $update = "UPDATE featuresheader SET heading='$title',details='$title1' WHERE id = '$id'";
        $query = mysqli_query($conn, $update);
        if($query){
            header("location: ../AllFeatures");
        }
}
