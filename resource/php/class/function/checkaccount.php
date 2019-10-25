 <?php
  require_once $_SERVER['DOCUMENT_ROOT'].'/voting_system/resource/php/class/db/config.php';
  class checkaccount{
    public function checkadmin(){
      $id = $_SESSION['id'];
      $username = $_SESSION['username'];
      $account_type = $_SESSION['account_type'];
        if (isset($account_type)) {
          if($account_type == 'admin'){
          }else {
            header('location: user_homepage.php');
          }
      }else {
        header('location: index.php');
      }
    }
    public function checkuser(){
      $id = $_SESSION['id'];
      $username = $_SESSION['username'];
      $account_type = $_SESSION['account_type'];
      if (isset($account_type)) {
        if($account_type == 'user'){
        }else {
          header('location: admin_homepage.php');
        }
      }else {
        header('location: index.php');
      }
    }
  }
  ?>
