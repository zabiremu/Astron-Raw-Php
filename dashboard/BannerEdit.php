<?php
include "./inc/Header.php";
include_once "./inc/SideMenu.php";
include "../inc/env.php";
$id = $_GET['id'];
$query = "SELECT * FROM banner WHERE id='$id'";
$fetch = mysqli_query($conn,$query);
$collData = mysqli_fetch_assoc($fetch);
?>
<!--  header section start-->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Banner Edit</h1>
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
            <h2 style="font-size:24px; padding: 20px 10px 10px 18px">Banner Edit</h2>
        </div>
        <div class="card-body">
            <form action="./controller/BannerEdit.php" id="files" method="POST">
                <input type="hidden" name="id" value="<?=$collData['id']?>">
                <input type="text" name="BannerTitle" placeholder="Banner Title" id="BannerTitle" class="my-1 form-control" value="<?=$collData['tittle']?>">
                <textarea type="text" name="Bannerdesc" placeholder="Banner Descripition" id="Bannerdesc" class="my-2 form-control" rows="10" cols="100"><?=$collData['details']?></textarea>
                <input type="text" name="BannerButtonName" placeholder="Banner Button Name" id="BannerButtonName" class="my-2 form-control" value="<?=$collData['ButtonName']?>">
                <input type="text" name="BannerButtonLink" placeholder="Banner Button Link" id="BannerButtonLink" class="my-2 form-control" value="<?=$collData['ButtonLink']?>">
                <button class="btn btn-primary my-2" name="submit">Submit</button>
            </form>
        </div>
    </div>
</main>
<!--  banner section end  -->
<?php
require_once "./inc/footer.php";
?>