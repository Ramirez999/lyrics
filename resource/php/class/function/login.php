<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/voting_system/resource/php/class/db/config.php';
class login extends config{
 public function __construct($username=null,$password=null){
   $this->username = $username;
   $this->password = $password;

 }
 public function login(){
   $config = new config;
   $con = $config->Connect();
   if (isset($_POST['username'])) {
       $username = $this->username;
       $password = $this->password;
       $sql = "SELECT * FROM `users` WHERE `username` = ?";
       $data=$con->prepare($sql);
       $data->execute([$username]);
       $rows =$data-> fetchAll();
           foreach ($rows as $row) {
              $id =  $row->id;
              $passWord =  $row->password;
              $userName =  $row->username;
              $accounttype =  $row->account_type;
             }
             if ($password == $passWord && $username == $userName) {
               if($accounttype == 'admin'){
                 $_SESSION['username'] = $username;
                  $_SESSION['id'] = $id;
                   $_SESSION['account_type'] = $accounttype;
                   header('location: admin_homepage.php');
               }else{
                 $_SESSION['username'] = $username;
                  $_SESSION['id'] = $id;
                   $_SESSION['account_type'] = $accounttype;
                   header('location: user_homepage.php');
               }

             }
   }
 }
}
 ?>
