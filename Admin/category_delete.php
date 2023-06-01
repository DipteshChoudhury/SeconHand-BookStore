<?php
    if(isset($_GET['cid'])){
        require_once "../dbconfig.php";

        $id = $_GET['cid'];
        // echo $id;
        $qry = "DELETE FROM category WHERE id=$id";
        
        if(mysqli_query($con, $qry)){
            header("location: categories.php");
        } else {
            ?>  
                <script>
                    alert("Something went wrong");
                    window.location = 'categories.php';
                </script>
            <?php
        }
    }

?>