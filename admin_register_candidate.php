<?php
session_start();
$id = $_SESSION['id'];
$username = $_SESSION['username'];
$account_type = $_SESSION['account_type'];
  if (isset($account_type)) {
    if($account_type == 'admin'){
    }else {
      header('location: user_hompage.php');
    }
}else {
  header('location: index.php');
}
    if (isset($_POST['register'])) {
      require_once $_SERVER['DOCUMENT_ROOT'].'/voting_system/resource/php/class/function/register.php';
      $register = new register($_POST['fullname'],$_POST['position']);
      $register -> registercandidate();
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Voting System</title>
  <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap.min.css">
    <link href="resource/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap-select.min.css">
  </head>
  <body class="text-center">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="admin_homepage">
        <img src="resource/img/brand.png" width="40" height="30" class="d-inline-block align-top" alt="">
        Home
      </a>
    </nav>
    <div class="wrapper">
      <h1>Add Candidate</h1>
      <form class="form-signin" action="" method="post">
        <div class="usercon">
          <input type="text" class="form-control" name="fullname" placeholder="Candidate Name"/>
        </div>
        <div class="passcon">
          <select class="form-control" name="position">
            <option value="President">President</option>
            <option value="Vice-President">Vice-President</option>
            <option value="Secretary">Secretary</option>
            <option value="Treasurer">Treasurer</option>
            <option value="Auditor">Auditor</option>
          </select>
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
