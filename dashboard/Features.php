<?php
include "./inc/Header.php";
include_once "./inc/SideMenu.php";
?>
<!--  header section start-->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Features</h1>
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
            <h2 style="font-size:24px; padding: 20px 10px 10px 18px">Features Header</h2>
        </div>
        <div class="card-body">
            <form action="./controller/Features_header.php" method="POST">
                <input type="text" name="Features" placeholder="Features Heading" class="my-1 form-control">
                <input type="text" name="FeaturesTitle" placeholder="Features Title" class="my-2 form-control">
                <button class="btn btn-primary my-2" name="submit">Submit</button>
            </form>
        </div>
    </div>
    <div class="card col-lg-7 mx-auto my-5">
        <div class="bg-dark text-light">
            <h2 style="font-size:24px; padding: 20px 10px 10px 18px">Features</h2>
        </div>
        <div class="card-body">
            <form action="./controller/Features_type.php" method="POST" enctype="multipart/form-data">
                <input type="file" name="img" placeholder="Please select a image" class="my-2 form-control">
                <input type="text" name="subHeading" placeholder="Please entrt a sub heading" class="my-2 form-control">
                <input type="text" name="subHeading1" placeholder="Please entrt a sub heading 1" class="my-2 form-control">
                <input type="text" name="icon" class="form-control iconpicker" placeholder="Icon Picker" aria-label="Icone Picker" aria-describedby="basic-addon1">
                <textarea class="content" name="list"></textarea>
                <button class="btn btn-primary my-2" name="submit">Submit</button>
            </form>
        </div>
    </div>
</main>
<!--  banner section end  -->
<?php
require_once "./inc/footer.php";
?>