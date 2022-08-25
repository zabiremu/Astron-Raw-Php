<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mordena</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .btn-primary {
            color: #fff;
            background-color: #254D64 !important;
            border-color: #254D64 !important;
        }

        .btn-warning {
            color: #fff !important;
            background-color: #0D2735 !important;
            border-color: #0D2735 !important;
        }
    </style>
</head>

<body>

    <section class="login_From vh-100">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-lg-6 card pt-3">
                    <div class="card-body">
                        <p class="card-header">Please Sign Up</p>
                        <form enctype="multipart/form-data" action="./controller/registration_type.php" method="POST">
                            <input class="form-control my-3" type="text" name="User-Name" placeholder="User-Name">
                            <span class="text-danger pb-3">
                                <?php
                                if (isset($_SESSION["error-userName"])) {
                                    echo  $_SESSION["error-userName"];
                                }
                                ?>
                            </span>
                            <input class="form-control my-3" type="text" name="email" placeholder="email address">
                            <span class="text-danger pb-3">
                                <?php
                                if (isset($_SESSION["error-email"])) {
                                    echo  $_SESSION["error-email"];
                                }  
                                ?>
                            </span>
                            <input class="form-control my-3" type="text" name="password" placeholder="password">
                            <span class="text-danger">
                                <?php
                                if (isset($_SESSION["error-password"])) {
                                    echo $_SESSION["error-password"];
                                }elseif(isset($_SESSION["strong-password"])){
                                    echo $_SESSION["strong-password"];
                                } 
                                ?>
                            </span>
                            <input class="form-control my-3" type="text" name="Confirm-password" placeholder="Confirm-password">
                            <span class="text-danger">
                                <?php
                                if (isset($_SESSION["error-ConfirmPassword"])) {
                                    echo $_SESSION["error-ConfirmPassword"];
                                }
                                ?>
                            </span>
                            <input class="form-control my-3" type="number" name="Number" placeholder="Phone Number">
                            <span class="text-danger">
                                <?php
                                if (isset($_SESSION["error-Date"])) {
                                    echo  $_SESSION["error-Date"];
                                }
                                ?>
                            </span>
                            <input class="form-control my-3" type="Date" name="Date" placeholder="Date">
                            <span class="text-danger">
                            <?php
                                if (isset($_SESSION["error-Date"])) {
                                    echo $_SESSION["error-Date"];
                                }
                                ?>
                            </span>
                            <input class="form-control my-3" type="file" name="files" placeholder="files">
                            <span class="text-danger">
                                <?php
                                if (isset($_SESSION["error-files"])) {
                                    echo  $_SESSION["error-files"]; 
                                }   
                                ?>
                            </span>
                            <button type="submit" class="btn btn-primary form-control" name="submit">Sign Up</button>
                            <a href="./Login.php" class="form-control my-3 btn btn-warning">Login In</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

<?php
session_unset()
?>