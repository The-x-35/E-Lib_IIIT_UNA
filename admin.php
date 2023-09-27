<?php
session_start();
if(isset($_SESSION['user_id'])&&isset($_SESSION['user_email'])){
  include "func-book.php";
  $book = get_all_books();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="https://i.ibb.co/vQDp72t/Iiit-una-logo.png" type="image/x-icon">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
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
          <a class="nav-link" href="add-book.php">Add new book</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php"></a>
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
    <h4>All Books</h4>
      <?php if(isset($_GET['success'])) { ?>
      <div class="alert alert-success" role="alert">
       <?php echo htmlspecialchars($_GET['success']) ?>
</div>
<?php } ?>
    <table class="table table-bordered shadow">
      <thread>
        <tr>
          <th>#</th>
          <th>Title</th>
          <th>Author</th>
          <th>Description</th>
          <th>Category</th>
          <th>Action</th>
        </tr>
      </thread>
      <tbody>
        <?php for ($x = 0; $x < count($book); $x++) { 
          if($book[$x]!= ""){?>
        <tr>
      <td><?=$x+1?></td>
      <td><div class="text-center"><img width="100" src =<?=$book[$x][4]?>></div>
          <a class="link d-block text-center" href=<?=$book[$x][5]?>><?=$book[$x][0]?></td>
      <td><?=$book[$x][1]?></td>
      <td><?=$book[$x][2]?></td>
      <td><?=$book[$x][3]?></td>
      <td>
        <a href="edit-book.php?id=<?=$x+1?>" class="btn btn-warning">Edit</a>
        <a href="delete-book.php?id=<?=$x+1?>" class="btn btn-danger">Delete</a>
      </td>
     </tr>
       <?php }}  ?>
    </tbody>
    </table>
  </div>
</body>
</html>
<?php
}else{
  header("Location: login.php");
  exit;
}?>