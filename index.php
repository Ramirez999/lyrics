<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/voting_system/resource/php/class/function/login.php';
session_start();
if (isset($_POST['login'])) {
$login = new login($_POST['username'],$_POST['password']);
$login -> login();
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VOTE!</title>
  <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap.min.css">
  <link href="resource/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap-select.min.css">
</head>
  <body class="text-center">
      <div class="wrapper">
        <form class="form-signin" action="" method="post">
          <div class="img">
            <img src="resource/img/logojpg.png" alt="">
          </div>
          <div class="usercon">
            <input type="text" class="form-control" name="username" placeholder="Username"/>
          </div>
          <div class="passcon">
            <input type="password" class="form-control" name="password" placeholder="Password" />
          </div>
          <div class="btncon">
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>
          </div>
        </form>
    </div>
</body>
    <script src="vendor/js/jquery.js"></script>
    <script src="vendor/js/popper.js"></script>
    <script src="vendor/js/bootstrap.min.js"></script>
    <script src="vendor/js/bootstrap-select.min.js"></script>
</html>
