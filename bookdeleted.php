<?php
session_start();
if(isset($_SESSION['user_id'])&&isset($_SESSION['user_email'])){
include "func-validation.php";
include "func-book.php";
   
    $id =$_POST['id'];
    $file = explode("\n", file_get_contents("books.txt"));

    #$contents = file_get_contents("books.txt");
   # $contents = str_replace($line, "", $contents);
    
     $lines = file("books.txt");

    // Remove the specified line
    if (isset($lines[$id])) {
        unset($lines[$id]);
    }

    // Write the remaining lines to a new file
    file_put_contents("books.txt", implode("", $lines));
    
    $sm="Book deleted successfully.";
    header("Location: admin.php?success=$sm");

}else{
  header("Location: login.php");
  exit;
}