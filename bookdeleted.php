<?php
session_start();
if(isset($_SESSION['user_id'])&&isset($_SESSION['user_email'])){
include "func-validation.php";
include "func-book.php";
   
   $id =$_POST['id'];
    $file = explode("\n", file_get_contents("books.txt"));
    $line = $file[$id];
    $contents = file_get_contents("books.txt");
    $contents = str_replace($line, "", $contents);
   
    file_put_contents("books.txt", $contents);

    $sm="Book deleted successfully.";
    header("Location: admin.php?success=$sm");

}else{
  header("Location: login.php");
  exit;
}