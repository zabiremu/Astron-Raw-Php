<?php
session_start();
if(isset($_SESSION['isLogin'])){
    header("Location: ./dashboard/index");
}
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
                        <p class="card-header">Please Login</p>
                        <form action="./controller/login_type.php" method="POST">
                            <input class="form-control my-3" type="text" name="email" placeholder="email address">
                            <span class="text-danger pb-3">
                                <?php
                                if (isset($_SESSION['error_email'])) {
                                    echo  $_SESSION['error_email'];
                                }
                                ?>
                            </span>
                            <input class="form-control my-3" type="text" name="password" placeholder="password">
                            <span class="text-danger">
                                <?php
                                if (isset($_SESSION['error_password'])) {
                                    echo $_SESSION['error_password'];
                                }
                                ?>
                            </span>
                            <button type="submit" class="btn btn-primary form-control" name="submit">Login</button>
                            <a href="./Registration.php" class="form-control my-3 btn btn-warning">Sign Up</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
<?php
unset($_SESSION['error_password']);
unset($_SESSION['error_email']);
?>