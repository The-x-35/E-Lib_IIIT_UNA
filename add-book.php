<?php
session_start();
if(isset($_SESSION['user_id'])&&isset($_SESSION['user_email'])){
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="https://i.ibb.co/vQDp72t/Iiit-una-logo.png" type="image/x-icon">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add new book</title>
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
    <a class="navbar-brand" href="admin.php">E-Lib: IIIT UNA Admin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="add-book.php">Add new book</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php"></a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    </nav>
 <div class="d-flex justify-content-center align-items-center"  style="min-height: 20vh;">
    <form class="shadow p-4 rounded mt-5" style="width: 75%; max-width: 75rem;" method="post" action="bookadded.php">
    <h1 class="text-center display-4 ">Add new book</h1>
  <?php if(isset($_GET['error'])) { ?>
      <div class="alert alert-danger" role="alert">
       <?php echo htmlspecialchars($_GET['error']) ?>
</div>
<?php } ?>
      <?php if(isset($_GET['success'])) { ?>
      <div class="alert alert-success" role="alert">
       <?php echo htmlspecialchars($_GET['success']) ?>
</div>
<?php } ?>
  <div class="mb-3">
    <label class="form-label">Book Title</label>
    <input type="text" class="form-control" name="title">
  </div>
   <div class="mb-3">
    <label class="form-label">Author Name</label>
    <input type="text" class="form-control" name="author">
  </div>
      <div class="mb-3">
    <label class="form-label">Description</label>
    <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
    <div class="mb-3">
    <label class="form-label">Category</label>
    <input type="text" class="form-control" name="cat">
  </div>
    <div class="mb-3">
    <label class="form-label">Cover Page link</label>
    <input type="text" class="form-control" name="cp">
  </div>
      <div class="mb-3">
    <label class="form-label">Book link</label>
    <input type="text" class="form-control" name="bl">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>

  </div>
</body>
</html>
<?php
}else{
  header("Location: login.php");
  exit;
}?>