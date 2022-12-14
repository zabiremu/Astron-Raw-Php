<?php
include_once "./inc/Header.php";
include_once "./inc/SideMenu.php";
include_once "../inc/env.php";
$id = $_GET['id'];
echo $id;
$select = "SELECT * FROM about WHERE id='$id'";
$query = mysqli_query($conn,$select);
$fecth = mysqli_fetch_assoc($query);
?>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">About Edit</h1>
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
            <form action="./controller/AboutEdit.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" class="form-control" value="<?=$fecth['id']?>">
                <input type="file" name="img" class="form-control">
                <input type="text" name="anchor" class="form-control my-2" value="<?=$fecth['anchor']?>">
                <input type="text" class="form-control iconpicker" placeholder="Icon Picker" aria-label="Icone Picker" aria-describedby="basic-addon1" name="icon" value="<?=$fecth['icon']?>">
                <input type="text" class="form-control my-2 iconpicker" placeholder="Icon Picker 1" aria-label="Icone Picker" aria-describedby="basic-addon1" name="icon1" value="<?=$fecth['icon2']?>">
                <input type="text" name="title" placeholder="About Title" class="my-1 form-control" value="<?=$fecth['title']?>">
                <input type="text" name="title1" placeholder="About Title 1" class="my-1 form-control" value="<?=$fecth['title1']?>">
                <textarea type="text" name="details" placeholder="About Description" class="my-2 form-control" rows="10" cols="100"><?=$fecth['details']?></textarea>
                <textarea type="text" name="details1" placeholder="About Description" class="my-2 form-control" rows="10" cols="100"><?=$fecth['details1']?></textarea>
                <button class="btn btn-primary my-2" name="submit">Submit</button>
            </form>
        </div>
    </div>
</main>


<?php
include_once "./inc/footer.php"
?>