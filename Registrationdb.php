<?php
if(isset($_POST['login'])){

    require_once 'dbconfig.php';
    
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $qry = "SELECT * FROM customer WHERE email='$email' OR mobile=$mobile";

    $result = mysqli_query($con, $qry);

    if(mysqli_num_rows($result) > 0){ 
        // echo 'Mobile number or Email id is already used. Try with different one';
        ?>
            <script>
                    alert('Mobile number or Email id is already used. Try with different one');
                    window.location='Registration.php';
            </script>
        <?php
        return;
    }

    $qry = "INSERT INTO customer (name, mobile, email, password) VALUES('$name', $mobile, '$email', '$password')";

    if(mysqli_query($con,$qry)){
        ?>
            <script>
                    alert('Account is created. Login to continue');
                    window.location='Log_in.php';
            </script>
        <?php
    } else {
        echo 'Error '.mysqli_error($con);
    }

    mysqli_close($con);
}
?>