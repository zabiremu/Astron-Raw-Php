<?php

$id = $_GET['id'];
include_once"../../inc/env.php";
$query = "DELETE FROM services WHERE id = '$id'";
$delete = mysqli_query($conn,$query);
if($delete){
    header("location: ../AllServices");
}