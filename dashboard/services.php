<?php
include "./inc/Header.php";
include_once "./inc/SideMenu.php";
?>
<!--  header section start-->
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Services</h1>
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
            <h2 style="font-size:24px; padding: 20px 10px 10px 18px">Services</h2>
        </div>
        <div class="card-body">
            <form action="./controller/services_type.php" id="files" method="POST">
                <input type="text" name="icon" class="form-control iconpicker" placeholder="Icon Picker" aria-label="Icone Picker" aria-describedby="basic-addon1">
                <input type="text" name="ServicesTitle" placeholder="Services Title" class="my-1 form-control">
                <textarea type="text" name="ServicesDesc" placeholder="Services Descripition" class="my-2 form-control" rows="10" cols="100"></textarea>
                <button class="btn btn-primary my-2" name="submit">Submit</button>
            </form>
        </div>
    </div>
</main>
<!--  banner section end  -->


<?php
require_once "./inc/footer.php";
?>