<?php
session_start();
if(!isset($_GET['key'])|| empty($_GET['key'])){
  header("Location: index.php");
  exit;
}
$key = $_GET['key'];
include "func-book.php";
$book = search_books($key);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="https://i.ibb.co/vQDp72t/Iiit-una-logo.png" type="image/x-icon">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search Result(s)</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

  <link rel="stylesheet" href= "style.css">
</head>

  
<body>
<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
     <a class="navbar-brand" href="index.php">
      <img src="https://i.ibb.co/vQDp72t/Iiit-una-logo.png" alt="Bootstrap" width="70" height="70">
    </a>
    <a class="navbar-brand" href="index.php">E-Lib: IIIT UNA</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Request a book</a>
        </li>
        <li class="nav-item">
          <?php if(isset($_SESSION['user_id'])){?>
          <a class="nav-link" href="admin.php">Admin</a>
          <?php }else{?>
         <a class="nav-link" href="login.php">Login</a>
          <?php }?>
        </li>
      </ul>
      <form action="search.php" method="get" class="d-flex" role="search">
        <input class="form-control me-2" name="key" type="search" placeholder="Search book" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    </nav><br>
    Search result(s) for <b><?=$key?></b>

    <div class="d-flex pt-3">
      <?php if(count($book)==0){?>
         <div class="alert alert-warning text text-center p-5 pdf-list" role="alert">
          <img src="empty.jpg" width="100">  
           <br> <b>"<?=$key?>"</b> not found! You can use the request a book form.
      </div>
        
        <?php }else{?>
             <div class="container p-3 mx-auto">
             <div class="container justify-content-center">
               
           <?php for ($x = 0; $x < count($book); $x++) { ?>
               
              <div class="card mb-3" style="width:80%">
                <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?=$book[$x][4]?>" class="img-fluid rounded-start" alt="Card Image">
                </div>
                   <div class="col-md-8" >
                    <div class="card-body">
                        <h5 class="card-title"><?=$book[$x][0]?></h5>
               <p class="card-text"><br><i><b>By: </b><?=$book[$x][1]?></i><br><i><b>Category: </b><?=$book[$x][3]?></b></i><br><?=$book[$x][2]?>
             </p>
                      <a href="<?=$book[$x][5]?>" class="btn btn-success">Open</a>
                    </div>
                </div>
              </div>
               </div>
             
            <?php }?>
                    <?php }?>
         

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
          
    </div>
  </div>
</body>
</html>