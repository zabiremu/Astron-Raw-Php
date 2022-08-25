<?php

// features data upload in data base

if (isset($_POST['submit'])) {
    // data base connection include
    include_once "../../inc/env.php";
    $heading = $_POST['Features'];
    $FeaturesTitle = $_POST['FeaturesTitle'];

    // data Base upload file

    $query = "INSERT INTO featuresheader(heading, details) VALUES ('$heading','$FeaturesTitle')";
    $insert = mysqli_query($conn, $query);
    if($insert){
        header("location: ../AllFeatures");
    }

}
