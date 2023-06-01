<?php
  include_once 'navbar.php';
  include_once '../dbconfig.php';
  if(!isset($_SESSION['email'])){
    // ?>
    //     <script>
    //         alert("Login First");
    //         window.location = 'index.php';
    //     </script>
    // <?php
    header('location:index.php');
  }
?>

<h1 id="administrattive">Admin Panel</h1>

<h3 class="admin"style="display: inline-block">Welcome</h3> &#160;<h3 style="display: inline-block" id="email"> <?php  echo $_SESSION['email']; ?></h3>
<table>
  <tr>
    
    <th class="admin">NAME</th>
    <th class="admin">AVAILABLE</th>
  </tr>
  <tr>
    <?php
    $qry = "SELECT * FROM admin";
    $res = mysqli_query($con, $qry);
    ?>
    <th class="admin">Admin</th>
    <td class="admin"><?php echo mysqli_num_rows($res)?></td>
  </tr>
  <tr class="admin">
   <?php
    $qry = "SELECT * FROM customer";
    $res = mysqli_query($con, $qry);
    ?>
    <th class="admin">Customer</th>
    <td class="admin"><?php echo mysqli_num_rows($res)?></td>
  </tr>
  <tr>
    <?php
    $qry = "SELECT * FROM category";
    $res = mysqli_query($con, $qry);
    ?>
    <th class="admin"><a class="active" aria-current="page" href="categories.php">Categories</a></th>
    <td class="admin"><?php echo mysqli_num_rows($res)?></td>
  </tr>
  <tr>
    <?php
    $qry = "SELECT * FROM products";
    $res = mysqli_query($con, $qry);
    ?>
    <th class="admin"><a class="nav-link active" aria-current="page" href="products.php">Books</a></th>
    <td class="admin"><?php echo mysqli_num_rows($res)?></td>
  </tr>
  <tr>
    <?php
    $qry = "SELECT * FROM orders";
    $res = mysqli_query($con, $qry);
    ?>
    <th class="admin"><a class="active" aria-current="page" href="order.php">Orders</a></th>
    <td class="admin"><?php echo mysqli_num_rows($res)?></td>
  </tr>

</table>

<?php
    include_once "footer.php";
?>