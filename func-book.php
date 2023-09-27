<?php

$file = explode("\n", file_get_contents("books.txt"));

function get_all_books() {
   global $file;
  $books=array();
  for ($x = 0; $x < count($file)-1; $x++) {
     
       $entry=explode('$?', $file[$x]);
       array_push($books,$entry);
      
  }
   
     return $books;
}

function search_books($key) {
    $resultArray = array();
    $array = get_all_books();

    foreach ($array as $row) {
        // Check if the search string is present in the row (case-insensitive)
        $found = false;
        foreach ($row as $value) {
            if (stripos($value, $key)!== false) {
                $found = true;
                break;
            }
        }

        // Check if the row is not already in the result array
        if ($found && !in_array($row, $resultArray)) {
            // Add the row to the result array
            $resultArray[] = $row;
        }
    }

    return $resultArray;
}




