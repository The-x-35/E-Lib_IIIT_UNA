<?php
session_start();
if(isset($_SESSION['user_id'])&&isset($_SESSION['user_email'])){
include "func-validation.php";
include "func-book.php";
if(isset($_POST['title'])&&isset($_POST['author'])&&isset($_POST['desc'])&&isset($_POST['cat'])&&isset($_POST['cp'])&&isset($_POST['bl'])){
   $title = $_POST['title'];
   $author = $_POST['author'];
   $desc = $_POST['desc'];
   $cat = $_POST['cat'];
   $cp= $_POST['cp'];
   $bl = $_POST['bl'];

   $text = "Book Title";
   $location = "add-book.php";
   $ms = "error";
   is_empty($title,$text,$location,$ms,"");

   $text = "Author Name";
   $location = "add-book.php";
   $ms = "error";
   is_empty($author,$text,$location,$ms,"");

   $text = "Description";
   $location = "add-book.php";
   $ms = "error";
   is_empty($desc,$text,$location,$ms,"");

   $text = "Category";
   $location = "add-book.php";
   $ms = "error";
   is_empty($cat,$text,$location,$ms,"");

   $text = "Cover Page link";
   $location = "add-book.php";
   $ms = "error";
   is_empty($cp,$text,$location,$ms,"");

   $text = "Book link";
   $location = "add-book.php";
   $ms = "error";
   is_empty($bl,$text,$location,$ms,"");
  
   $text="";
   if(!is_empty($title,$text,$location,$ms,"")&&!is_empty($author,$text,$location,$ms,"")&&!is_empty($desc,$text,$location,$ms,"")&&!is_empty($cat,$text,$location,$ms,"")&&!is_empty($cp,$text,$location,$ms,"")&&!is_empty($bl,$text,$location,$ms,"")){
    $entry= $title."$?".$author."$?".$desc."$?".$cat."$?".$cp."$?".$bl."\n";
    file_put_contents("books.txt",$entry,FILE_APPEND);
    $sm="Book added successfully.";
    header("Location: add-book.php?success=$sm");
    
   }

}else{
  
}
  
}else{
  header("Location: login.php");
  exit;
}