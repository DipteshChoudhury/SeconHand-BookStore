<?php
  include_once 'navbar.php';
  require_once 'dbconfig.php';
  if(isset($_POST['atc'])){
    $id = $_POST['pid'];
    $name = $_POST['pname'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $quantity = $_POST['quantity'];
    // echo " ".$id." ".$price." ".$quantity." ".$discount;
    if(isset($_SESSION['cart'])){
        $_SESSION['cart'] += [$id=>array('name'=>$name,'price'=>$price,'discount'=>$discount,'quantity'=>$quantity)];
    } else {
        $_SESSION['cart'] = array($id=>array('name'=>$name,'price'=>$price,'discount'=>$discount,'quantity'=>$quantity));
    }
    // var_dump($_SESSION['cart']);
    // header('location:cart.php');
    ?>
    <script>
        window.location = 'cart.php';
    </script>
    <?php
  }
  $pid = $_GET['id'];
//   echo $pid;
  $qry = "SELECT * FROM products WHERE id=$pid";
  $res = mysqli_query($con,$qry);
  $product = mysqli_fetch_assoc($res);
?>
<section>
<div class="container">
    <div class="row my-5">
        <div class="col-md-6">
            <img src="images/products/<?php echo $product['image']; ?>" alt="" class="img-fluid" height="250" width="250">
        </div>
        <div class="col-md-6">
            <h1 class="h1"><?php  echo $product['name'] ?></h1>
            <h3 class="h3">Author :-<?php  echo $product['author'] ?></h3>
            <h3 class="h3"><i class="fas fa-rupee-sign"></i> <?php  echo $product['price'] ?></h3>
            <h3 class="h3 text-danger"><?php  echo $product['discount'] ?>%  Discount</h3>
            <p class="text-lead"><?php  echo $product['description'] ?></p>
            <div class="">
                <?php
                    if($product['available']==0){
                        ?>
                            <p class="text-danger">Currently this product is out of stock.</p>
                        <?php 
                    } else {
                        ?>
                            <!-- <a href="#" class="btn btn-primary w-100">Add to Cart</a> -->
                            <form action="" method="POST">
                                <input type="hidden" name="pid" value="<?php echo $pid ?>">
                                <input type="hidden" name="pname" value="<?php echo $product['name'] ?>">
                                <input type="hidden" name="price" value="<?php echo $product['price'] ?>">
                                <input type="hidden" name="discount" value="<?php echo $product['discount'] ?>">
                                <div class="qty_form">
                                    <a id="dec" class="dec" onclick="decrement();">-</a>
                                    <input type="text" name="quantity" class="quantity" id="quantity" value="1" readonly>
                                    <a id="inc" class="inc" onclick="increment()">+</a>
                                </div>
                                <input type="submit" name="atc" value="Add to Cart" class="btn btn-primary  my-4">
                            </form>
                        <?php
                    }
                ?>
            </div>
        </div>
    </div>
</div>
</section>
<script src="js/quantity.js"></script>
<?php
    include_once 'footer.php';
?>