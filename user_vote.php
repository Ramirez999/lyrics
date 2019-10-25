<?php
session_start();
  require_once $_SERVER['DOCUMENT_ROOT'].'/voting_system/resource/php/class/function/votestatus.php';
  $votestatus = new votestatus();
  $votestatus ->  checkstat();
  require_once $_SERVER['DOCUMENT_ROOT'].'/voting_system/resource/php/class/function/checkaccount.php';
  $checkaccount = new checkaccount();
  $checkaccount ->  checkuser();
  require_once $_SERVER['DOCUMENT_ROOT'].'/voting_system/resource/php/class/function/view.php';
  $view = new view;
  // var_dump($_POST['president']);
  if (isset($_POST['submit'])) {
    require_once $_SERVER['DOCUMENT_ROOT'].'/voting_system/resource/php/class/function/vote.php';
    $vote = new vote($_POST['president'],$_POST['vicepresident'],$_POST['secretary'],$_POST['treasurer'],$_POST['auditor']);
    $vote->checkpres();
    $vote->checkvice();
    $vote->checksec();
    $vote->checktre();
    $vote->checkaud();
    $vote->votedone();
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-dark bg-white shadow-sm slide-in-left">

      <img src="resource\img\brand.png" height="70" class="d-inline-block align-top"
        alt="mdb logo"><h3 class="ib">
    </a>

  </nav>
  <form class="" action="" method="post">
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="pres py-5">
           <div class='container-fluid pt-4'>
           <div class='row justify-content-center'>
              <div class='col-md-6'>
               <div class='card zoom' style='box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
              -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
              -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>
               <div class='card-header text-white bg-white'><h2 style='color:#d75093'>President</h2></div>
               <div class='card-body'>
                 <div class='col-md-12'>
     </div>
     </div>
        <?php   $view -> viewp(); ?>
         </div>
         <div class="row mt-4">
           <div class="col">

             <a  href="#demo" data-slide="prev" class="btn btn-primary btn-lg btn-block" > Back</a>
           </div>
           <div class="col">

         <a  href="#demo" data-slide="next" class="btn btn-primary btn-lg btn-block" > Next</a>
       </div>
       </div>

       </div>
       </div>
       </div>
       </div>
    </div>
    <div class="carousel-item">
      <div class="vpres py-5">
         <div class='container-fluid pt-4'>
 <div class='row justify-content-center'>
  <div class='col-md-6'>
 <div class='card zoom' style='box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>
 <div class='card-header text-white bg-white'><h2 style='color:#d75093'>Vice-President</h2></div>
 <div class='card-body'>
 <div class='col-md-12'>

     </div>
     </div>
<?php     $view -> viewvp(); ?>
 </div>
 <div class="row mt-4">
   <div class="col">

     <a  href="#demo" data-slide="prev" class="btn btn-primary btn-lg btn-block" > Back</a>
   </div>
   <div class="col">

 <a  href="#demo" data-slide="next" class="btn btn-primary btn-lg btn-block" > Next</a>
</div>
</div>
 </div>
 </div>
 </div>
 </div>
    </div>
    <div class="carousel-item">
      <div class="sec py-5">
         <div class='container-fluid pt-4'>
      <div class='row justify-content-center'>
      <div class='col-md-6'>
      <div class='card zoom' style='box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>
      <div class='card-header text-white bg-white'><h2 style='color:#d75093'>Secretary</h2></div>
      <div class='card-body'>
      <div class='col-md-12'>

      </div>
      </div>
      <?php    $view -> views(); ?>
      </div>
      <div class="row mt-4">
        <div class="col">

          <a  href="#demo" data-slide="prev" class="btn btn-primary btn-lg btn-block" > Back</a>
        </div>
        <div class="col">

      <a  href="#demo" data-slide="next" class="btn btn-primary btn-lg btn-block" > Next</a>
    </div>
    </div>
      </div>
      </div>
      </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="tre py-5">
         <div class='container-fluid pt-4'>
 <div class='row justify-content-center'>
  <div class='col-md-6'>
 <div class='card zoom' style='box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>
 <div class='card-header text-white bg-white'><h2 style='color:#d75093'>Treasurer</h2></div>
 <div class='card-body'>
 <div class='col-md-12'>

     </div>
     </div>
<?php   $view -> viewt();?>
 </div>
 <div class="row mt-4">
   <div class="col">

     <a  href="#demo" data-slide="prev" class="btn btn-primary btn-lg btn-block" > Back</a>
   </div>
   <div class="col">

 <a  href="#demo" data-slide="next" class="btn btn-primary btn-lg btn-block" > Next</a>
</div>
</div>
 </div>
 </div>
 </div>
 </div>
    </div>
    <div class="carousel-item">
      <div class="aud py-5">
         <div class='container-fluid pt-4'>
 <div class='row justify-content-center'>
  <div class='col-md-6'>
 <div class='card zoom' style='box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>
 <div class='card-header text-white bg-white'><h2 style='color:#d75093'>Auditor</h2></div>
 <div class='card-body'>
 <div class='col-md-12'>

     </div>
     </div>
<?php  $view -> viewa(); ?>
 </div>
 <div class="row mt-4">
   <div class="col">
     <a  href="#demo" data-slide="prev" class="btn btn-primary btn-lg btn-block" > Back</a>
   </div>
   <div class="col">
     <button type="submit"  name="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
   </div>
 </div>
 </div>
 </div>
 </div>
 </div>
    </div>
  </div>
</div>
     </div>
   </form>
</body>
</html>
