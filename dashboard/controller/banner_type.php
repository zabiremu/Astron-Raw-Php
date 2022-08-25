<?php

if (isset($_POST['submit'])) {
    // form name select
    $bannerTitle = $_POST['BannerTitle'];
    $Bannerdesc = $_POST['Bannerdesc'];
    $BannerButtonName = $_POST['BannerButtonName'];
    $BannerButtonLink = $_POST['BannerButtonLink'];

    // uploadt data into the dataBase

    include_once "../../inc/env.php";

    $query = "INSERT INTO banner(tittle, details, ButtonName, ButtonLink) VALUES ('$bannerTitle','$Bannerdesc','$BannerButtonName','$BannerButtonLink')";
    $insert = mysqli_query($conn, $query);
    header("Location: ../BannerShow.php");
    
}
