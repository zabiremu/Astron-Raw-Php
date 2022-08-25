<?php
session_start();
if(isset($_POST['submit'])){
    include_once "../../inc/env.php";
    $image = $_FILES['image'];
    $icon = $_POST['icon'];
    $icon1 = $_POST['icon1'];
    $aboutTitle = $_POST['AboutTitle'];
    $aboutTitl1 = $_POST['AboutTitle1'];
    $aboutDesc = $_POST['AboutDesc'];
    $aboutDesc1 = $_POST['AboutDesc1'];
    $anchor = $_POST['anchor'];
    // imahe auth
    if(isset($image)){
    $imageName = $image['name'];
    $imageNameExpolde = explode('.',$imageName);
    $imageExt = end($imageNameExpolde);
    $imageNewName = uniqid("about") . '.' . $imageExt;
    $_SESSION['img'] = move_uploaded_file($image['tmp_name'], "../../uploads/" . $imageNewName );

    $query = "INSERT INTO about(img, title, title1, details, details1, icon, icon2, anchor) VALUES ('$imageNewName','$aboutTitle', '$aboutTitl1', '$aboutDesc', '$aboutDesc1','$icon', '$icon1', '$anchor')";
    $insert = mysqli_query($conn, $query);
    if($insert){
        header("location: ../AllAbout");
    }
    }
}