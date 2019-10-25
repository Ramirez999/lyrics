<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/voting_system/resource/php/class/db/config.php';
class vote extends config{
public function __construct($president=null,$vicepresident=null,$secretary=null,$treasurer=null,$auditor=null){
    $this->president = $president;
    $this->vicepresident = $vicepresident;
    $this->secretary = $secretary;
    $this->treasurer = $treasurer;
    $this->auditor = $auditor;
    }
    public function checkpres(){
      $president = $this->president;
        $config = new config;
        $con = $config->Connect();
        $sql = "SELECT * FROM `candidates` WHERE `id` = '$president' ";
        $data = $con->prepare($sql);
        $data->execute();
        $rows = $data->fetchAll();
          foreach ($rows as $row) {
              $presscore =  $row->score;
      }
      $presscore++;
      $sql1 = "UPDATE `candidates` SET `score`='$presscore' WHERE `id` = '$president'";
      $data1 = $con->prepare($sql1);
      $data1->execute();

      }
      public function checkvice(){
          $vicepresident = $this->vicepresident;
          $config = new config;
          $con = $config->Connect();
          $sql = "SELECT * FROM `candidates` WHERE `id` = '$vicepresident' ";
          $data = $con->prepare($sql);
          $data->execute();
          $rows = $data->fetchAll();
            foreach ($rows as $row) {
                $vicescore =  $row->score;
        }
        $vicescore++;
        $sql1 = "UPDATE `candidates` SET `score`='$vicescore' WHERE `id` = '$vicepresident'";
        $data1 = $con->prepare($sql1);
        $data1->execute();

        }
        public function checksec(){
            $secretary = $this->secretary;
            $config = new config;
            $con = $config->Connect();
            $sql = "SELECT * FROM `candidates` WHERE `id` = '$secretary' ";
            $data = $con->prepare($sql);
            $data->execute();
            $rows = $data->fetchAll();
              foreach ($rows as $row) {
                  $secscore =  $row->score;
          }
          $secscore++;
          $sql1 = "UPDATE `candidates` SET `score`='$secscore' WHERE `id` = '$secretary'";
          $data1 = $con->prepare($sql1);
          $data1->execute();

          }
          public function checktre(){
              $treasurer = $this->treasurer;
              $config = new config;
              $con = $config->Connect();
              $sql = "SELECT * FROM `candidates` WHERE `id` = '$treasurer' ";
              $data = $con->prepare($sql);
              $data->execute();
              $rows = $data->fetchAll();
                foreach ($rows as $row) {
                    $tresscore =  $row->score;
            }
            $tresscore++;
            $sql1 = "UPDATE `candidates` SET `score`='$tresscore' WHERE `id` = '$treasurer'";
            $data1 = $con->prepare($sql1);
            $data1->execute();

            }
            public function checkaud(){
                $auditor = $this->auditor;
                $config = new config;
                $con = $config->Connect();
                $sql = "SELECT * FROM `candidates` WHERE `id` = '$auditor' ";
                $data = $con->prepare($sql);
                $data->execute();
                $rows = $data->fetchAll();
                  foreach ($rows as $row) {
                      $audscore =  $row->score;
              }
              $audscore++;
              $sql1 = "UPDATE `candidates` SET `score`='$audscore' WHERE `id` = '$auditor'";
              $data1 = $con->prepare($sql1);
              $data1->execute();

              }
              public function votedone(){
                  $config = new config;
                  $con = $config->Connect();
                  $id = $_SESSION['id'];
                  $sql = "UPDATE `users` SET `status`='DONE' WHERE `id` = '$id'";
                  $data = $con->prepare($sql);
                  $data->execute();
                   header('location: user_homepage.php');
                }

  }
 ?>
