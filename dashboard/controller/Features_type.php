<?php

// features data upload in data base

if(isset($_POST['submit'])){
    // data base connection include
    include_once "../../inc/env.php";
    // $heading = $_POST['Features'];
    // $FeaturesTitle = $_POST['FeaturesTitle'];
    $img = $_FILES['img'];
    $subHeading = $_POST['subHeading'];
    $subHeading1 = $_POST['subHeading1'];
    $list = $_POST['list'];
    $icon = $_POST['icon'];
    // image upload
    if(isset($img)){
        $imgName = $img['name'];
        
        $imgExplode = explode('.',$imgName);
        $imgExntension = end($imgExplode);
        $imgNewName = uniqid("features") . '.' . $imgExntension;
        move_uploaded_file($img['tmp_name'], '../../uploads/' . $imgNewName);
        
        // data Base upload file

        $query = "INSERT INTO addfeatures(img, subHeading, subHeading1, list, icon) VALUES ('$imgNewName','$subHeading','$subHeading1','$list','$icon')";
        $insert = mysqli_query($conn, $query);
        if($insert){
            header("location: ../AllFeatures");
        }
    }
}