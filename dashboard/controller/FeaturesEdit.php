<?php
session_start();
if(isset($_POST['submit'])){
    // data Base Connection
    include_once "../../inc/env.php";
    $id = $_POST['id'];
    $img = $_FILES['img'];
    $title = $_POST['title'];
    $title1 = $_POST['title1'];
    $list = $_POST['list'];
    $icon = $_POST['icon'];
    // image validation
    if($img){
        $imgName = $img['name'];
        $imgNameExplode = explode('.',$imgName);
        $extension = end($imgNameExplode);
        $uniqid = uniqid("features_edit_"). '.' .$extension;
        $NewImageLoction = move_uploaded_file($img['tmp_name'], '../../uploads/' . $uniqid);
        $_SESSION['editImg'] = $NewImageLoction;
        $update = "UPDATE addfeatures SET img='$uniqid',subHeading='$title',subHeading1='$title1',list='$list',icon='$icon' WHERE id = '$id'";
        $query = mysqli_query($conn, $update);
        header("Location: ../AllFeatures.php");
    }

}
