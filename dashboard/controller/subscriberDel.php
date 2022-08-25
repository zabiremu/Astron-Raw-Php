<?php

include "../../inc/env.php";
$id = $_GET['id'];
$delete = "DELETE FROM subscribe WHERE id = '$id'";
$query = mysqli_query($conn,$delete);
if($query){
    header("location: ../Subscribe");
}