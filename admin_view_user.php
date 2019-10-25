<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Voting System</title>
  <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap.min.css">
  <link href="vendor/css/all.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css"  href="vendor/css/bootstrap-select.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <h1 class="navbar-brand text-white pt-3" style="margin-left:45%;">VIEW SCORES</h1>
  <img src="resource/img/logo2.png"  style="width:20%;height:200%;position:absolute;padding-top:15px;">
    <form class="form-inline my-2 my-lg-0 ml-auto">
      <a href="admin_homepage" class="btn btn-primary my-2 my-sm-0">Back</a>
    </form>
</nav>
<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/voting_system/resource/php/class/function/checkaccount.php';
$checkaccount = new checkaccount();
$checkaccount ->  checkadmin();
require_once $_SERVER['DOCUMENT_ROOT'].'/voting_system/resource/php/class/function/view.php';
$view = new view;
$view -> viewusers();
?>
</body>
    <script src="vendor/js/jquery.js"></script>
    <script src="vendor/js/popper.js"></script>
    <script src="vendor/js/bootstrap.min.js"></script>
    <script src="vendor/js/bootstrap-select.min.js"></script>
</body>
</html>
