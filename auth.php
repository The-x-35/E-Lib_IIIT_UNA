<?php
session_start();
include "func-validation.php";
if(isset($_POST['email'])&&isset($_POST['password'])){
   $email = $_POST['email'];
   $password = $_POST['password'];

   $text = "Email";
   $location = "login.php";
   $ms = "error";
   is_empty($email,$text,$location,$ms,"");

   $text = "Password";
   $location = "login.php";
   $ms = "error";
   is_empty($password,$text,$location,$ms,"");

   if($email=="lib_admin@iiitu.ac.in"&&$password=="password"){
      $_SESSION['user_id']="Admin";
      $_SESSION['user_email']="lib_admin@iiitu.ac.in";
      header("Location: admin.php");
       }
   else{
     $em= "Incorrect Email or Password.";
     header("Location: login.php?error=$em");
   }
}else{
  header("Location: login.php");
}