<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/voting_system/resource/php/class/function/votestatus.php';
$votestatus = new votestatus();
require_once $_SERVER['DOCUMENT_ROOT'].'/voting_system/resource/php/class/function/checkaccount.php';
$checkaccount = new checkaccount();
$checkaccount ->  checkuser();
if (isset($_POST['logout'])) {
  require_once $_SERVER['DOCUMENT_ROOT'].'/voting_system/resource/php/class/function/logout.php';
$logout = new logout();
$logout -> logouts();
}
 ?>
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
  <nav class="navbar navbar-dark bg-white shadow-sm slide-in-left">

      <img src="resource\img\logo.png" height="70" class="d-inline-block align-top"
        alt="mdb logo"><h3 class="ib">
    </a>
    <div class="d-flex align-items-end flex-column" >


      <form action="" method="post"class="d-flex align-items-end flex-column" >
        <button type="submit" name="logout" class="btn btn-secondary btn-lg btn-block">Logout</button>
      </form>

    </div>
  </nav>
<div class="jumbotron mb-0"style="background-image: url('resource\img\logo.jpg'); background-size: 100%;">


  <div class="body">
  <div class="container mt-5 puff-in-center">
      <div class="card-body" style="max-width: 100rem;height:31.4rem;">
        <div class="card text-white bg-secondary  my-3" style=" margin-left: 10rem;max-width: 50rem;height:60vh;">

          <div class="card-body">
            <h5 class="card-title mb-5" style="width:50%;">User Functions</h5></br>
              <h5 class="text-center  mt-4 py-4">
                <?php $votestatus->checkhome(); ?>
              </h5>
              <button style='width:50%;' type="submit" onclick="window.location.href = 'user_changepass.php'" name="" class="btn btn-primary btn-lg btn-block  mx-auto">Change Password</button>
                </div>
              </div>
            </div>
          </div>
        </div>
  </div>
  <footer id="sticky-footer" class="py-1 mt--2 bg-dark text-white-50  slide-in-right">
    <div class="container text-center">
      <div class="row">
        <div class="col col-sm-5 text-left">
          <small>Made by Ludwig Cartel, Duane Corea, Robin Santos, Ralph Ramirez</small>
        </div>
      </div>
    </div>
  </footer>
    <script src="vendor/js/jquery.js"></script>
    <script src="vendor/js/popper.js"></script>
    <script src="vendor/js/bootstrap.min.js"></script>
    <script src="vendor/js/bootstrap-select.min.js"></script>
    <a href="user_vote">Vote</a></br>
    <a href="user_changepass">Change Password</a></br>
    <form action="" method="post">
      <input type="submit" name="logout" value="logout">
    </form>
</body>
</html>
