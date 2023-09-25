<?php
session_start();
if(isset($_SESSION['user_id'])&&isset($_SESSION['user_email'])){
include "func-validation.php";
if(isset($_POST['title'])&&isset($_POST['author'])&&isset($_POST['desc'])&&isset($_POST['cat'])){
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

}else{
  header("Location: add-book.php");
}
  
}else{
  header("Location: login.php");
  exit;
}