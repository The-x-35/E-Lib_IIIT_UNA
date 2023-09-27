<?php

$file = explode("\n", file_get_contents("books.txt"));

function get_all_books() {
   global $file;
  $books=array();
  for ($x = 0; $x < count($file); $x++) {
      if($file[$x]!=NULL){
       $entry=explode(',', $file[$x]);
       array_push($books,$entry);
      }
  }
   
     return $books;
}

function search_books($key) {
   global $file;
   $key_algo="%{$key}%";
  $books=array();
  for ($x = 0; $x < count($file); $x++) {
      if($file[$x]!=NULL){
       $entry=explode(',', $file[$x]);
       array_push($books,$entry);
      }
  }
   
     return $books;
}


