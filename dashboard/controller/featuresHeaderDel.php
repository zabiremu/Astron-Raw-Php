<?php
$id = $_GET['id'];
include_once"../../inc/env.php";
$query = "DELETE FROM featuresheader WHERE id = '$id'";
$delete = mysqli_query($conn,$query);
if($delete){
    header("location: ../AllFeatures");
}