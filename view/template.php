<?php
session_start();
session_regenerate_id();
$title = "dashboard";
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="author" content="Yoann Abran, Kévin Nguma, Warrenn Maunier">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  echo $title ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/3bd5358b64.js" crossorigin="anonymous"></script>
</head>
<body><?php
  if (isset($_SESSION['isAdmin'])) {
      echo "<p class='alert alert-secondary text-center p-0 m-0'>Welcome " . $_SESSION['authUser']. "</p>";

  }?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <?php

        if (isset($_SESSION['isAdmin'])){
          echo "<li class='nav-item'>
          <a class='nav-link' href='index.php?action=insertnew'>Ajouter un produit</a>
        </li>

       <li class='nav-item'>
          <a class='nav-link' href='index.php?action=register'>Ajouter un admin</a>
        </li>";
      }
         ?>
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=login">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?action=deco">Logout</a>
        </li>
      </ul>
    </div>
  </nav>
<?php echo $content ;?>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
