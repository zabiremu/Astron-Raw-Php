<?php

if(isset($_POST['submit'])){
    include_once "../../inc/env.php";
    $bannerTitle = $_POST['BannerTitle'];
    $Bannerdesc = $_POST['Bannerdesc'];
    $BannerButtonName = $_POST['BannerButtonName'];
    $BannerButtonLink = $_POST['BannerButtonLink'];
    $id= $_POST['id'];

    $query = "UPDATE banner SET tittle='$bannerTitle',details='$Bannerdesc',ButtonName='$BannerButtonName',ButtonLink='$BannerButtonLink' WHERE id='$id'";
    $update = mysqli_query($conn, $query);
    header("location: ../BannerShow.php");
}
?>