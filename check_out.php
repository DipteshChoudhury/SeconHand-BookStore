<?PHP
include_once 'navbar.php';
require_once 'dbconfig.php';
if (isset($_POST['deliver'])) {
    $cid = $_SESSION['email'];
    $address = $_POST['address'] . ', ' . $_POST['district'] . ', ' . $_POST['state'] . ', ' . $_POST['pin'];
    $mobile = $_POST['mobile'];
    $cart_items = $_SESSION['cart'];
    $total_price = 0;
    foreach ($cart_items as $id => $item) {
        $pname = $item['name'];
        $quantity = $item['quantity'];
        $item_price = $item['quantity'] * $item['price'];
        $item_disc = $item_price * (floatval($item['discount']) / 100);
        $act_price = $item_price - $item_disc;
        $qry = "INSERT INTO orders VALUES(0,'$cid','$pname',$quantity,$item_price,$item_disc,$act_price,'$address','$mobile',0)";
        mysqli_query($con,$qry);
    }
    unset($_SESSION['cart']);
    echo("<script>window.location='products.php';</script>");
}
?>
<div class="container">
    <div class="row my-5">
        <div class="col-8">
            <div class="card my-3">
                <div class="card-header">
                    <h3>Order Summary</h3>
                </div>
                <div class="card-body">
                    <?php
                    $cart_items = $_SESSION['cart'];
                    $total_price = 0;
                    foreach ($cart_items as $id => $item) {
                        $item_price = $item['quantity'] * $item['price'];
                        $item_disc = $item_price * (floatval($item['discount']) / 100);
                        $act_price = $item_price - $item_disc;
                        $total_price += $act_price;
                        echo $item['name'] . ' x ' . $item['quantity'] . ' ';
                        ?><br><?php
                    }
                    echo '<h6>Amount Payable : Rs/-' . $total_price . '</h6>'
                    ?>
                </div>
            </div>
            <div class="card my-3">
                <div class="card-header">
                    <h3>Payment Type</h3>
                </div>
                <div class="card-body">
                    <input type="radio" name="" id="" checked>COD
                </div>
            </div>
            <div class="card my-3">
                <div class="card-header">
                    <h3>Delivery Address</h3>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="my-1">
                            <label for="address">Address</label>
                            <textarea class="form-control" name="address" required></textarea>
                        </div>
                        <div class="my-1">
                            <label for="district">District</label>
                            <input type="text" class="form-control" name="district" required>
                        </div>
                        <div class="my-1">
                            <label for="state">State</label>
                            <input type="text" class="form-control" name="state" required>
                        </div>
                        <div class="my-1">
                            <label for="pin">PIN</label>
                            <input type="text" class="form-control" name="pin" required>
                        </div>
                        <div class="my-1">
                            <label for="mobile">Mobile Number</label>
                            <input type="text" class="form-control" name="mobile" required>
                        </div>
                        <input type="submit" value="Deliver Here" name="deliver" class="btn btn-primary w-100 my-3">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>