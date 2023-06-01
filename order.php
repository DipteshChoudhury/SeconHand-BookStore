<?php
  include_once 'navbar.php';
  require_once 'dbconfig.php';
  if(!isset($_SESSION['email'])){
    // ?>
    //     <script>
    //         alert("Login First");
    //         window.location = 'index.php';
    //     </script>
    // <?php
    header('location:products.php');
  }
?>
<h1>Administrative Area</h1>

<h3>Welcome <?php echo $_SESSION['email']; ?></h3>

<div class="container">
    <?php
        $id=$_SESSION['email'];
        $qry = "SELECT * FROM orders WHERE cid='$id'";
        $res = mysqli_query($con,$qry);
        if(mysqli_num_rows($res) == 0){
            echo "Order is empty....";
            header('location:products.php');
        }
    ?>
    <table>
        <tr>
            <th>Book_Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Discount_Allowed</th>
            <th>Delivery_Address</th>
            <th>Status</th>
        </tr>
        <?php 
            //$qry = "SELECT * FROM orders";
            $res = mysqli_query($con,$qry);
            while($data = mysqli_fetch_assoc($res)){
        ?>
        <tr>
            <td><?php echo $data['pname'];?></td>
            <td><?php echo $data['quantity'];?></td>
            <td><?php echo $data['actualprice'];?></td>
            <td><?php echo $data['discount'];?></td>
            <td><?php echo $data['address'];?></td>
            <td>
            <?php if($data['status'] == 0){
                echo "Not Delevered";
            }else{
                echo "Delevered";
            }?>
            </td>
        </tr>
        <?php }?>
    </table>
    
    
</div>

<?php
    include_once "footer.php";
?>