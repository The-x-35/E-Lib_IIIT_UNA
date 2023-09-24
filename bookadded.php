<?php
session_start();
if(isset($_SESSION['user_id'])&&isset($_SESSION['user_email'])){

  if(isset($_POST['title'])){
    
  }else{
    header("Location: login.php");
    exit;
  }
  
}else{
  header("Location: login.php");
  exit;
}