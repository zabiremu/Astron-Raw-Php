<?php

if (isset($_POST['submit'])) {
    $icon = $_POST['icon'];
    $icon1 = $_POST['icon1'];
    $title = $_POST['title'];
    $title1 = $_POST['title1'];
    $details = $_POST['details'];
    $details1 = $_POST['details1'];
    $id = $_POST['id'];
    $img = $_FILES['img'];
    $anchor = $_POST['anchor'];
    require "../../inc/env.php";

    if (isset($img)) {
        $imageName = $img['name'];
        $imageNameExpolde = explode('.', $imageName);
        $imageExt = end($imageNameExpolde);
        $imageNewName = uniqid("about_Update") . '.' . $imageExt;
        move_uploaded_file($img['tmp_name'], "../../uploads/" . $imageNewName);

        $query = "UPDATE about SET img='$imageNewName',title='$title', title1= '$title1', details='$details', details1='$details1',icon='$icon', icon2='$icon1',anchor='$anchor' WHERE id = '$id'";
        $insert = mysqli_query($conn, $query);
        if ($insert) {
            header("location: ../AllAbout");
        }
    }
}
