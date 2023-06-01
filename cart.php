<?PHP
  include_once 'navbar.php';
  require_once 'dbconfig.php';
?>
<div class="container">
    <div class="row my-5">
        <div class="col-8">
<?php
if(!isset($_SESSION['cart'])){
    echo "Cart is Empty";
    return;
}
?>


  <table>
    <tr border="2">
        <th scope="col">Book_Image</th>
        <th scope="col">Book_name</th>
        <th class="cart"scope="col">Quantity</th>
        <th class="cart"scope="col">Price</th>
        <th class="cart"scope="col text-danger">Discount</th>
        <th class="cart"scope="col">Final Price</th>
    </tr>
    <!--price calculation-->
    <?php
      $cart_items = $_SESSION['cart'];
      $total_price = 0;
      $total_disc = 0;
      foreach($cart_items as $id => $item){
        $item_price = $item['quantity'] * $item['price'];
        $total_price += $item_price ;
        $qry = "SELECT * FROM products WHERE id=$id";
        $res = mysqli_query($con,$qry);
        $data = mysqli_fetch_assoc($res);
        $item_disc = $item_price * (floatval($data['discount']) / 100);
        $total_disc += $item_disc ;
    ?>

    <tr>
        <td>
            <div class="col-md-2">
            <img id="cart_image" src="images/products/<?php echo $data['image'];  ?>" class="img-fluid rounded-start" alt="...">
          </div>
        </td>
        <td>
            <h5 class="card-title"> <?php echo $item['name'];  ?></h5>
        </td>
        <td>
            <p class="card-text"> <?php echo $item['quantity'];  ?></p>
        </td>
        <td>
            <p class="card-text"> <?php echo $item_price  ?></p>
        </td>
        <td>
            <p class="card-text text-danger"> <?php echo $item_disc;  ?></p>
        </td>
        <td>
            <p class="card-text"> <?php echo $item_price-$item_disc;  ?></p>
        </td>
      <?php
      }
      ?>    
    </tr>  
  </table>
  
</div>


</div>
<div class="col-4">
    <div class="card">
        <div class="card-body text-center">
          <table>
            <tr>
              <td><h4 class="h4">Total Price</h4></td>
              <td><h4>Rs/- <?php echo $total_price ?></h4></td>
            </tr>
            <tr>
              <td><h4 class="text-danger h4">Total Discount</h4></td>
              <td><h4 class="text-danger">Rs/- <?php echo $total_disc ?></h4></td>
            </tr>
            <tr>
              <td><h4 class="h4">Amount Payble</h4></td>
              <td><h4>Rs/- <?php echo $total_price-$total_disc ?></h4></td>
            </tr>
          </table>  
           <a href="check_out.php" class="btn btn-primary w-100">Check Out</a>
        </div>
    </div>
</div>
</div>
</div>

<?php
    include_once 'footer.php';
?>