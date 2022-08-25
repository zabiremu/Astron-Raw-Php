<?php
include_once "./inc/Header.php";
include_once "./inc/SideMenu.php";
include_once "../inc/env.php";
$id = $_GET['id'];
$select = "SELECT * FROM services WHERE id='$id'";
$query = mysqli_query($conn,$select);
$fecth = mysqli_fetch_assoc($query);
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Services Edit</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">
                    Share
                </button>
                <button type="button" class="btn btn-sm btn-outline-secondary">
                    Export
                </button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar" class="align-text-bottom"></span>
                This week
            </button>
        </div>
    </div>
    <!--  header section end  -->
    <!--  banner section start-->
    <div class="card col-lg-7 mx-auto my-5">
        <div class="bg-dark text-light">
            <h2 style="font-size:24px; padding: 20px 10px 10px 18px">Services Edit</h2>
        </div>
        <div class="card-body">
            <form action="./controller/edit.php" method="POST">
                <input type="hidden" name="id" class="form-control" value="<?=$fecth['id']?>">
                <input type="text" class="form-control iconpicker" placeholder="Icon Picker" aria-label="Icone Picker" aria-describedby="basic-addon1" name="icon" value="<?=$fecth['icon']?>">
                <input type="text" name="title" placeholder="Services Title" class="my-1 form-control" value="<?=$fecth['title']?>">
                <textarea type="text" name="details" placeholder="Services Description" class="my-2 form-control" rows="10" cols="100"><?=$fecth['details']?></textarea>
                <button class="btn btn-primary my-2" name="submit">Submit</button>
            </form>
        </div>
    </div>
</main>















<?php

include_once "./inc/Footer.php"
?>