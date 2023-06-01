<?php
    if(isset($_GET['id'])){
        require_once '../dbconfig.php';
        $pid = $_GET['id'];
        $qry = "SELECT * FROM products WHERE id=$pid";
        $res = mysqli_query($con,$qry);
        if(mysqli_num_rows($res) <= 0){
            header('location:products.php');
        }
      } else {
        header('location:products.php');
      }

      $qry = "DELETE FROM products WHERE id=$pid";
      if(mysqli_query($con,$qry)>0){
        ?>  
            <script>
                alert('Product Deleted');
                window.location = 'products.php';
            </script>
        <?php
      } else {
        ?>  
            <script>
                alert('Something Wrong !!!');
                window.location = 'products.php';
            </script>
        <?php
      }
?>