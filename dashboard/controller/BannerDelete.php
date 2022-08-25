<?php
include_once "../../inc/env.php";
$id = $_GET['id'];
$query = "DELETE FROM banner WHERE id='$id'";
$delete = mysqli_query($conn,$query);
header("Location: ../BannerShow.php");

?>