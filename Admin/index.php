<?php
  include_once 'navbar.php';
  if(isset($_POST['login'])){
    require_once '../dbconfig.php';
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $qry = "SELECT * FROM admin WHERE email='$email' AND password='$password'";

    $res = mysqli_query($con, $qry);

    if(mysqli_num_rows($res)>0){
      session_start();
      $_SESSION['email'] = $email;
      header('location:dashboard.php');
    } else {
      ?>
        <script>
          alert("Invalid Username or Password");
        </script>
      <?Php
    }


  }
?>

<section id="signin">
<div class="Login-image">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto my-5">
        <div class="card mt-5 ">
          <div class="card-header">
            <h2 class="dispaly-3">Administrative Login</h2>
          </div>
          <div class="card-body">
              <form action="#" method="post" onsubmit="return login_validate();">
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                    <input type="email" class="form-control" placeholder="acbc@abc.com" name="email" id="email">
                  </div>
                  <label id="email_error" class="form-label text-danger"></label>
                <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                    <input type="password" class="form-control" placeholder="***********" name="password" id="password">
                  </div>
                  <label id="password_error" class="form-label text-danger"></label>
                <input  id="log_in" type="submit" value="Login" name="login" class="btn btn-primary form-control" >
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<script src="js/admin_validator.js"></script>
<?php
    include_once 'footer.php';
?>