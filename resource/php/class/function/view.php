<?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/voting_system/resource/php/class/db/config.php';
  class view extends config{

    public function viewp(){
      $config = new config;
      $con = $config->Connect();
      $sql = "SELECT * FROM `candidates` WHERE `position` = 'President' ORDER BY name";
      $data = $con->prepare($sql);
      $data->execute();
      $rows = $data->fetchAll();
      foreach ($rows as $row) {
        $id = $row->id;
        $name = $row->name;
        $position = $row->position;
        $score = $row->score;
        echo "<div class='form-group row pl-5'>";
        echo "<div class='col-md-6'>";
        echo "<input type='radio' name='president' value='$id'> $name";
        echo "</div>";
        echo "</div>";
      }
    }
    public function viewvp(){
      $config = new config;
      $con = $config->Connect();
      $sql = "SELECT * FROM `candidates` WHERE `position` = 'Vice-President' ORDER BY name";
      $data = $con->prepare($sql);
      $data->execute();
      $rows = $data->fetchAll();
      foreach ($rows as $row) {
        $id = $row->id;
        $name = $row->name;
        $position = $row->position;
        $score = $row->score;
        echo "<div class='form-group row pl-5'>";
        echo "<div class='col-md-6'>";
        echo "<input type='radio' name='vicepresident' value='$id'> $name";
        echo "</div>";
        echo "</div>";
      }
    }
    public function views(){
      $config = new config;
      $con = $config->Connect();
      $sql = "SELECT * FROM `candidates` WHERE `position` = 'Secretary' ORDER BY name";
      $data = $con->prepare($sql);
      $data->execute();
      $rows = $data->fetchAll();
      foreach ($rows as $row) {
        $id = $row->id;
        $name = $row->name;
        $position = $row->position;
        $score = $row->score;
        echo "<div class='form-group row pl-5'>";
        echo "<div class='col-md-6'>";
        echo "<input type='radio' name='secretary' value='$id'> $name";
        echo "</div>";
        echo "</div>";
      }
    }
    public function viewt(){
      $config = new config;
      $con = $config->Connect();
      $sql = "SELECT * FROM `candidates` WHERE `position` = 'Treasurer' ORDER BY name";
      $data = $con->prepare($sql);
      $data->execute();
      $rows = $data->fetchAll();
      foreach ($rows as $row) {
        $id = $row->id;
        $name = $row->name;
        $position = $row->position;
        $score = $row->score;
        echo "<div class='form-group row pl-5'>";
        echo "<div class='col-md-6'>";
        echo "<input type='radio' name='treasurer' value='$id'> $name";
        echo "</div>";
        echo "</div>";
      }
    }
    public function viewa(){
      $config = new config;
      $con = $config->Connect();
      $sql = "SELECT * FROM `candidates` WHERE `position` = 'Auditor' ORDER BY name";
      $data = $con->prepare($sql);
      $data->execute();
      $rows = $data->fetchAll();
      foreach ($rows as $row) {
        $id = $row->id;
        $name = $row->name;
        $position = $row->position;
        $score = $row->score;
      echo "<div class='form-group row pl-5'>";
      echo "<div class='col-md-6'>";
      echo "<input type='radio' name='auditor' value='$id'> $name";
      echo "</div>";
      echo "</div>";

      }
    }
    public function viewusers(){
      $config = new config;
      $con = $config->Connect();
      $sql = "SELECT * FROM `users` ORDER BY `account_type` ";
      $data = $con->prepare($sql);
      $data->execute();
      $rows = $data->fetchAll();
      echo "<table class='table table-striped table-bordered table-sm table-hover table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl' style=width:100%>";
          echo '<tr>';
          echo '<td class="text-center" style= font-weight:bold;>ID</td><td class="text-center" style= font-weight:bold;>User Name</td><td class="text-center" style= font-weight:bold;>Password</td><td class="text-center" style= font-weight:bold;>Name</td><td class="text-center" style= font-weight:bold;>Voting Status</td><td class="text-center" style= font-weight:bold;>Account Type</td>';
          echo '</tr>';
          foreach ($rows as $row) {
            echo '<tr>';
              echo '<td class="text-center">'.$row ->id.'</td>';
              echo '<td class="text-center">'.$row ->username.'</td>';
              echo '<td class="text-center">'.$row ->password.'</td>';
              echo '<td class="text-center">'.$row ->name.'</td>';
              echo '<td class="text-center">'.$row ->status.'</td>';
              echo '<td class="text-center">'.$row ->account_type.'</br></td>';
                echo '</tr>';
            }
            echo '</table>';
      }


    public function viewscore(){
      $config = new config;
      $con = $config->Connect();
      $sql = "SELECT * FROM `candidates` ORDER BY `position` , `score`DESC";
      $data = $con->prepare($sql);
      $data->execute();
      $rows = $data->fetchAll();
      echo "<table class='table table-striped table-bordered table-sm table-hover table-responsive-sm table-responsive-md table-responsive-lg table-responsive-xl' style=width:100%>";
            echo '<tr>';
            echo '<td class="text-center" style= font-weight:bold;>ID</td><td class="text-center" style= font-weight:bold;>Full Name</td><td class="text-center" style= font-weight:bold;>Position</td><td class="text-center" style= font-weight:bold;>Score</td>';
            echo '</tr>';
            foreach ($rows as $row) {
              echo '<tr>';
                echo '<td class="text-center">'.$row ->id.'</td>';
                echo '<td class="text-center">'.$row ->name.'</td>';
                echo '<td class="text-center">'.$row ->position.'</td>';
                echo '<td class="text-center">'.$row ->score.'</td>';


                  echo '</tr>';
              }
              echo '</table>';
    }
}

 ?>
