<?php

include_once('./inc/Header.php');
include_once('./inc/SideMenu.php');

?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Profile</h1>
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

</main>

<div class="card col-lg-7 mx-auto my-5">
    <div>
        <h2 style="font-size:24px; padding: 20px 0 0 18px">Update Information</h2>
    </div>
    <div class="card-body">
        <form action="./controller/updateInfo.php" id="files" method="POST" enctype="multipart/form-data">
            <label for="file"><img src="<?= $path . 'uploads/' . $_SESSION['auth']['files'] ?>" class="mb-3" style="width:100px; d-block;cursor:pointer">
            </label>
            <input type="file" name="file" id="file" class="my-1 form-control">
            <label for="name" id="name" class="my-3">User Name</label>
            <input type="text" name="name" id="name" class="my-1 form-control" value="<?= $_SESSION['auth']['name'] ?>">
            <label for="email" class="my-3">Email</label>
            <input type="text" name="email" id="email" class="my-1 form-control" value="<?= $_SESSION['auth']['email'] ?>">
            <button class="btn btn-primary my-3" name="submit">Update</button>
        </form>
    </div>
</div>

<div class="card col-lg-7 mx-auto">
    <div>
        <h2 style="font-size:24px; padding: 20px 0 0 18px">Change Password</h2>
    </div>
    <div class="card-body">
        <form action="./controller/changePassword.php" method="POST">
            <label for="oldPass">Current Password</label>
            <input class="form-control my-3" type="password" placeholder="Current Password" name="oldPassword">
            <label for="newPass">New Password</label>
            <input class="form-control my-3" type="password" placeholder="New Password" name="newPassword">
            <label for="confirmPass">New Password</label>
            <input class="form-control my-3" type="password" placeholder="Confirm Password" name="confirmPass">
            <button class="btn btn-primary mt-1 mb-3" name="update">update</button>
        </form>
    </div>
</div>

<?php
include_once("./inc/Footer.php");
?>