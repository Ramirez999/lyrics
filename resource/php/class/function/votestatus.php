<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/voting_system/resource/php/class/db/config.php';
class votestatus extends config{

  public function checkstat(){
      $config = new config;
      $con = $config->Connect();
      $id = $_SESSION['id'];
      $sql = "SELECT * FROM `users` WHERE `id` = '$id' ";
      $data = $con->prepare($sql);
      $data->execute();
      $rows = $data->fetchAll();
        foreach ($rows as $row) {
            $status=  $row->status;
          }
          if($status == 'DONE'){
             header('location: user_homepage.php');
          }

    }
    public function checkhome(){
        $config = new config;
        $con = $config->Connect();
        $id = $_SESSION['id'];
        $sql = "SELECT * FROM `users` WHERE `id` = '$id' ";
        $data = $con->prepare($sql);
        $data->execute();
        $rows = $data->fetchAll();
          foreach ($rows as $row) {
              $status=  $row->status;
            }
            if($status == 'DONE'){
               echo "You Have Voted Successfully. ";
            }else {
              echo  " <a style='width:50%;' href='user_vote' class='btn btn-primary btn-lg btn-block mx-auto'>Vote</a>";
            }

      }


}
 ?>
