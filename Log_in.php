<?php
  include_once 'navbar.php';

  if(isset($_POST['login'])){
    require_once 'dbconfig.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $qry = "SELECT * FROM customer WHERE email='$email' AND password='$password'";

    $result = mysqli_query($con, $qry);

    if(mysqli_num_rows($result) > 0){
      session_start();
      $_SESSION['email'] = $email;
      // $_SESSION['email'] = $email;
      header('location:index.php');  
    } else {
      ?>
            <script>
                    alert('Invalid Email or password');
                    window.location='Log_in.php';
            </script>
        <?php
    }
  }
?>

<section id="signin">
  <div class="login-image">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto my-5">
        <div class="card mt-5 ">
          <div class="card-header">
            <font align="center"><h1 class="dispaly-3">Login Here</h1></font>
          </div>
          <div class="card-body">
              <form action="Log_in.php" method="post" onsubmit=" return login_validate()">
                <div class="">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="abc@abc.com">
                  <label id="email_error" class="form-label text-danger"></label>
                </div>
                <div class="">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="*******">
                  <label id="password_error" class="form-label text-danger"></label>
                </div>
                <!-- <div class="text-center">
                    <button class="btn btn-danger w-25">Test</button>
                </div> -->
                <input type="submit" value="Login" name="login" class="btn btn-primary form-control">
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<Script src="js/form_validation.js"></Script>

<?php
    include_once 'footer.php';
?>