<?php
session_start();
if(isset($_SESSION['user_id'])&&isset($_SESSION['user_email'])){
include "func-validation.php";
include "func-book.php";
if(isset($_POST['title'])&&isset($_POST['author'])&&isset($_POST['desc'])){
   $title = $_POST['title'];
   $author = $_POST['author'];
   $desc = $_POST['desc'];

   $text = "Book Title";
   $location = "rab.php";
   $ms = "error";
   is_empty($title,$text,$location,$ms,"");

   $text = "Author Name";
   $location = "rab.php";
   $ms = "error";
   is_empty($author,$text,$location,$ms,"");

   $text = "Remarks";
   $location = "rab.php";
   $ms = "error";
   is_empty($desc,$text,$location,$ms,"");
  
   $text="";
   if(!is_empty($title,$text,$location,$ms,"")&&!is_empty($author,$text,$location,$ms,"")&&!is_empty($desc,$text,$location,$ms,"")){
    $entry= "Book Title: ".$title."\nAuthor Name: ".$author."\nRemarks: ".$desc."\n\n";
    file_put_contents("requests.txt",$entry,FILE_APPEND);
    $sm="Book requested successfully.";
    header("Location: rab.php?success=$sm");
    
   }

}else{
  
}
  
}else{
  header("Location: login.php");
  exit;
}