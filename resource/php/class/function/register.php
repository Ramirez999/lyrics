<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/voting_system/resource/php/class/db/config.php';
class register extends config{
    function __construct($fullname=null,$position=null,$username=null,$password=null,$name=null){
      $this->fullname = $fullname;
      $this->position = $position;
      $this->username = $username;
      $this->password = $password;
      $this->name = $name;
}

  public function registercandidate(){
      $config = new config;
      $con = $config ->Connect();
      $fullname = $this->fullname;
      $position = $this->position;
      $sql1 = "SELECT * FROM `candidates` WHERE `name` = ? ";
      $data1 = $con->prepare($sql1);
      $data1->execute([$fullname]);
      $rows = $data1->fetchAll();
        foreach ($rows as $row) {
          $Fullname = $row->name;
        }
        if (isset($Fullname)) {

        if($fullname == $Fullname){
          $message = "Candidate Already Existing";
          echo "<script type='text/javascript'>alert('$message');</script>";
        }else{

          $sql = "INSERT INTO `candidates`(`name`, `position`) VALUES (?,?)";
          $data = $con->prepare($sql);
          $data->execute([$fullname,$position]);
        }
      }else {
        $sql = "INSERT INTO `candidates`(`name`, `position`) VALUES (?,?)";
        $data = $con->prepare($sql);
        $data->execute([$fullname,$position]);
      }
}
public function registervoter(){
    $config = new config;
    $con = $config ->Connect();
    $username = $this->username;
    $password = $this->password;
    $name = $this->name;
    $sql1 = "SELECT * FROM `users` WHERE `username` = ?";
    $data1 = $con->prepare($sql1);
    $data1->execute([$username]);
    $rows = $data1->fetchAll();
      foreach ($rows as $row) {
        $Username = $row->username;
  }
    if (isset($Fullname)) {
      if($username == $Username){
        $message = "Username Taken";
        echo "<script type='text/javascript'>alert('$message');</script>";
      }else{
        $sql = "INSERT INTO `users`(`username`, `password`,`name`) VALUES (?,?,?)";
        $data = $con->prepare($sql);
        $data->execute([$username,$password,$name]);
      }
    }else {
      $sql = "INSERT INTO `users`(`username`, `password`,`name`) VALUES (?,?,?)";
      $data = $con->prepare($sql);
      $data->execute([$username,$password,$name]);
    }
  }
}
?>
