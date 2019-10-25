<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/voting_system/resource/php/class/db/config.php';
class changepass extends config{
  public function __construct($confirmpass=null,$newpass=null){
    $this->confirmpass = $confirmpass;
    $this->newpass = $newpass;

  }
    public function changepassword(){
        $config = new config;
        $con = $config->Connect();
        $uname = $_SESSION['username'];
        $confirmpass =$this->confirmpass;
        $sql = "SELECT * FROM `users` WHERE `username` = '$uname'  ";
        $data=$con->prepare($sql);
        $data->execute();
        $rows =$data-> fetchAll();
        foreach ($rows as $row) {
          $password =  $row->password;
          };
          if ($confirmpass == $password) {
            $newpass = $this->newpass;
            if ($confirmpass != $newpass) {
            $sql = "UPDATE `users` SET `password`='$newpass' WHERE `username` = '$uname' ";
            $data=$con->prepare($sql);
            $data->execute();
            $message = "Successfully Changed Password";
            echo "<script type='text/javascript'>alert('$message');</script>";
          }else {
            $message = "new password must be different";
            echo "<script type='text/javascript'>alert('$message');</script>";
          }
    }
  }
}
 ?>
