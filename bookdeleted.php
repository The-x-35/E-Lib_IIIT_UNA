<?php
session_start();
if(isset($_SESSION['user_id'])&&isset($_SESSION['user_email'])){
include "func-validation.php";
include "func-book.php";
   
    $id =$_POST['id'];
    $file = explode("\n", file_get_contents("books.txt"));

    #$contents = file_get_contents("books.txt");
   # $contents = str_replace($line, "", $contents);
    
     $contents=array();
      $c=0;
     for ($x = 0; $x < count($file); $x++) {
        if($x!=$id){
          $contents[$c++]=$file[$x]."\n";
        }
     }
    file_put_contents("books.txt", $contents);
    $sm="Book deleted successfully.";
    header("Location: admin.php?success=$sm");

}else{
  header("Location: login.php");
  exit;
}