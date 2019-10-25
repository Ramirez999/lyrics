<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/voting_system/resource/php/class/db/config.php';
class logout extends config{
    public function logouts(){
      session_start();
      session_destroy();
      session_unset();
      unset($_SESSION['username']);
        unset($_SESSION['id']);
          unset($_SESSION['account_type']);
      header('location: index.php');
    }
  }

 ?>
