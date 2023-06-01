<?php
  include_once 'navbar.php';
  require_once '../dbconfig.php';
?>
<div class="container mt-5">
  <div class="text-end my-2">
    <a href="product_add.php" class="btn btn-primary"><i class="fas fa-plus"></i> ADD</a>
  </div>
  <div class="row">
    <div class="col">
      <div class="d-flex flex-wrap">
        <?php
            $qry = "SELECT * FROM products";
            $res = mysqli_query($con, $qry);
            while($data = mysqli_fetch_assoc($res)){
              ?>
                  <div class="card product-card m-3">
                    <div class="card-body">
                      <img src="../images/products/<?php echo $data['image'] ?>" alt="" class="card-image" height="150" width="120">
                      <h6><?php echo $data['name'] ?></h6>
                      <i class="fas fa-rupee-sign"></i> <?php echo $data['price'] ?> <br>
                      <div class="mt-2">
                        <a href="product_update.php?id=<?php echo $data['id']; ?>" class="btn  btn-sm btn-primary w-100">Details</a>
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