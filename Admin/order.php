<?php
  include_once 'navbar.php';
  require_once '../dbconfig.php';

?>



<div class="container_order">
    <?php
        $id=$_SESSION['email'];
        $qry = "SELECT * FROM orders";
        $res = mysqli_query($con,$qry);
        if(mysqli_num_rows($res) == 0){
            echo "Order is empty....";
            header('location:products.php');
        }
    ?>
    <table>
        <tr>
            <th style="padding-left:20px">Customer_id</th>
            <th style="padding-left:20px">Book Name</th>
            <th style="padding-left:5px">Quantity</th>
            <th style="padding-left:20px">Price</th>
            <th style="padding-left:20px">Discount Allowed</th>
            <th style="padding-left:60px">Delivery Address</th>
            <th style="padding-left:0px">Status</th>
        </tr>
        <?php 
            //$qry = "SELECT * FROM orders";
            $res = mysqli_query($con,$qry);
            while($data = mysqli_fetch_assoc($res)){
        ?>
        <tr>
            <td><?php echo $data['cid'];?></td>
            <td style="padding-left:20px"><?php echo $data['pname'];?></td>
            <td style="padding-left:20px"><?php echo $data['quantity'];?></td>
            <td style="padding-left:20px"><?php echo $data['actualprice'];?></td>
            <td style="padding-left:30px"><?php echo $data['discount'];?></td>
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