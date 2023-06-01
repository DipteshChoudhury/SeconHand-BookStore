<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>2nd Hand Book Store</title>
<!-- Bootstrap 5 CSS-->
<link rel="stylesheet" href="./bs/bootstrap.bundle.min.js">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
      rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
    crossorigin="anonymous">

    <!-- font-awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./Style_for_project.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top px-100">
      <div class="container-fluid">
      <a class="navbar-brand" href="./dashboard.php"><span class="text-warning">Book</span>Hub</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <?php
        session_start();
        if (isset($_SESSION['email'])) {
        ?>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
                </li>  
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="categories.php">Categories</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="products.php">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="order.php">Orders</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../logout.php">Logout</a>
              </li>
            </ul>
          </div>
        <?php
        }
        ?>

      </div>
    </nav>
  </header>