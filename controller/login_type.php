<?php
session_start();

if (isset($_POST["submit"])) {
   include '../inc/env.php';
   $userEmail = $_POST["email"];
   $password = $_POST["password"];
   $enc = sha1($password);
   if (empty($userEmail)) {
      $_SESSION['error_email'] = "error email";
      header("Location: ../Login.php");
   } elseif (empty($password)) {
      $_SESSION['error_password'] = "error password";
      header("Location: ../Login.php");
   } else {

      $query = "SELECT email FROM registrar WHERE email = '$userEmail'";
      $fetch = mysqli_query($conn, $query);
      if ($fetch->num_rows > 0) {
         $querye = "SELECT * from registrar WHERE email = '$userEmail' && password = '$enc'";
         $user = mysqli_query($conn,$querye);
         if($user->num_rows > 0){
            $auth = mysqli_fetch_assoc($user);
            $_SESSION['auth'] = $auth;
            $_SESSION['isLogin'] = true;
            header("location: ../dashboard/index.php");
         }else{
            header("location: ../Login.php");
         }
      } else {
         header("location: ../Login.php");
      }
   }
}
