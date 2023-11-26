<?php
session_start();
include "func-book.php";
$book = get_all_books();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="https://i.ibb.co/vQDp72t/Iiit-una-logo.png" type="image/x-icon">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href= "style.css">

  <title>About</title>
  
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
          <a class="nav-link active" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="rab.php">Request a book</a>
        </li>
        <li class="nav-item">
          <?php if(isset($_SESSION['user_id'])){?>
          <a class="nav-link" href="admin.php">Admin</a>
          <?php }else{?>
         <a class="nav-link" href="login.php">Admin Login</a>
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
    </nav>
       <div class="d-flex justify-content-center align-items-center pt-3 custom-container"  style="min-height: 20vh;">
    <form class="p-5 rounded shadow custom-form" style="width: 100% min-width=670px" method="POST">
      <div class="d-grid gap-2">
    <button type="button" class="btn btn-primary btn-lg text-center">ABOUT IIIT UNA</button> 
        <p class="text-justify">
                IIIT Una is one of the 20 IIITs being setup, funded and managed by the Ministry of Education, Govt. of India under the Public Private Partnership (PPP) model. The partners setting up IIIT Una are the Ministry of Education, Govt. of India, the Govt. of Himachal Pradesh, HP Power Corporation Limited and HP Transmission Corporation Limited. Admissions to the undergraduate programmes in the Institute are made through the Joint Entrance Examination (JEE).<br>

At present, IIIT Una operates from its permanent campus at Saloh, Una. The campus is fully furnished and working full fledged from its permanent campus.
            </p>
        <!-- <button type="button" class="btn btn-info btn-lg text-center">About Us</button>
        <div class="container mt-4">
        <div class="row ">
            <div class="col-lg-4 col-md-6 p-3">
                <div class="card">
                    <img src="https://i.ibb.co/f2T1kfp/IMG-20230725-WA0001.jpg" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title">Arpit Singh Bhatia</h5>
               <p class="card-text"> <br><i><b>Team name: Code faad dunga</i></b>
             </p>
                      <a href="https://www.linkedin.com/in/arpit-singh-bhatia-6abb36230" class="btn btn-primary">Linkedin</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 p-3">
                <div class="card">
                    <img src="https://i.ibb.co/qFcB6kn/Whats-App-Image-2023-09-27-at-10-54-58-PM.jpg" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title">Nikhil Arora</h5>
               <p class="card-text"> <br><i><b>Team name: Code faad dunga</i></b>
             </p>
                      <a href="https://www.linkedin.com/in/nikhil-arora-9642b4258" class="btn btn-primary">Linkedin</a>
                    </div>
                </div>
            </div>
         
        </div>
    </div> -->
               </form>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     </div>
      
    </div>
  </div>
</body>
</html>