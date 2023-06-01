<html lang="en">
<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap 5 CSS-->
        <link rel="stylesheet" href="./bs/bootstrap.bundle.min.js">
    
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
          rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" 
        crossorigin="anonymous">

        <!-- font-awsome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Custom CSS -->
        <link rel="stylesheet" href="./CSS/Style_for_project.css">

        <title>2nd Hand Book Store</title>
    </head>
    
    <body>
      <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top px-100" style="background-color: #429c36;">
            <div class="container">
              <a class="navbar-brand" href="./index.php"><span class="text-warning">Book</span>Hub</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <?php 
                    session_start();
                    if(isset($_SESSION['email'])){
              ?>
              <form class="ms-5 w-25" >
              <div class="input-group">
                <input type="text" class="form-control seach-box" placeholder="Search Product" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <button type="submit" class="input-group-text" id="basic-addon2"><i class="fas fa-search"></i></button>
              </div>
              </form>
              <?php
                    }
              ?> 
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                  </li>
                  <?php
                    if(isset($_SESSION['email'])){?>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="products.php">Products</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Categories
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                              <?php
                              require_once 'dbconfig.php';
                                    $qry = "select * from category order by category";
                                    $res = mysqli_query($con, $qry);
                                    while($data = mysqli_fetch_assoc($res)){
                                      ?>
                                      <!-- <li><a class="dropdown-item" href="product_category.php?cat=<?php echo $data['category']; ?>"><?php echo $data['category']; ?></a></li> -->
                                      <li><a class="dropdown-item" href="products.php?cat=<?php echo $data['category']; ?>"><?php echo $data['category']; ?></a></li>
                                          
                                      <?php
                                  }
                              ?>
                            </ul>
                    </li>
                    
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="cart.php">Cart</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="order.php">Orders</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link active" aria-current="page" href="logout.php"><i class="fas fa-sign-out-alt"></i>Log Out</a>
                    </li>
                  <?php
                }else{
                  ?>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="Log_in.php">Log in</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="Registration.php">New user?</a>
                  </li>
                  <?php
                    }
                  ?>
                </ul>  
              </div>
            </div>
        </nav>
  </header>                    