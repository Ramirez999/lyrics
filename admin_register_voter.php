<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/voting_system/resource/php/class/function/checkaccount.php';
$checkaccount = new checkaccount();
$checkaccount ->  checkadmin();
    if (isset($_POST['register'])) {
      require_once $_SERVER['DOCUMENT_ROOT'].'/voting_system/resource/php/class/function/register.php';
      $register = new register($_POST['username'],$_POST['username'],$_POST['username'],$_POST['password'],$_POST['name']);
      $register -> registervoter();
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Voting System</title>
  <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap.min.css">
  <link href="resource/css/all2.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap-select.min.css">

  </head>
  <body class="text-center">
    <!-- Image and text -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="admin_homepage">
        <img src="resource/img/brand.png" width="40" height="30" class="d-inline-block align-top" alt="">
        Home
      </a>
    </nav>
      <div class="wrapper">
        <h1>Add User</h1>
        <form class="form-signin" action="" method="post">
          <div class="usercon">
            <input type="text" class="form-control" name="username" placeholder="Username"/>
          </div>
          <div class="namecon">
            <input type="text" class="form-control" name="name" placeholder="Name"/>
          </div>
          <div class="passcon">
            <input type="password" class="form-control" name="password" placeholder="Password"/>
          </div>
          <div class="btncon">
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="register">Submit</button>
          </div>
        </form>
    </div>
  </body>
    <script src="vendor/js/jquery.js"></script>
    <script src="vendor/js/popper.js"></script>
    <script src="vendor/js/bootstrap.min.js"></script>
    <script src="vendor/js/bootstrap-select.min.js"></script>
</body>
</html>
