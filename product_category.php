<?php
  include_once 'navbar.php';
  require_once 'dbconfig.php';
  $cat = $_GET['cat'];
//   echo $cat;
?>
<div class="container">
  <div class="row">
    <div class="col">
      <div class="d-flex flex-wrap">
        <?php
            $qry = "SELECT * FROM products WHERE category='$cat'";
            $res = mysqli_query($con, $qry);
            while($data = mysqli_fetch_assoc($res)){
              ?>
                  <div class="card product-card m-3">
                    <div class="card-body">
                      <img src="images/products/<?php echo $data['image'] ?>" alt="" class="card-image" height="100" width="100">
                      <h6><?php echo $data['name'] ?></h6>
                      <i class="fas fa-rupee-sign"></i> <?php echo $data['price'] ?> <br>
                      <div class="mt-2">
                        <a href="product_details.php?id=<?php echo $data['id']; ?>" class="btn btn-sm btn-primary w-100">Details</a>
                      </div>
                    </div>
                  </div>
              <?php
            }
        ?>
      </div>
    </div>
  </div>
</div>

<?php
    include_once 'footer.php';
?>