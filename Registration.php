<?php
  include_once 'navbar.php';
?>

<section id="signup">
  <div class="registration-image">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto mb-5 mt-5">
        <div class="card mt-5 ">
          <div class="card-header">
            <font align="center"><h1 class="dispaly-3">Create Your Account</h1></font>
          </div>
          <div class="card-body">
              <form action="Registrationdb.php" method="post" onsubmit=" return validate_user()">
                <div class="">
                  <label for="name" class="form-label">Name</label>
                  <input type="name" class="form-control" id="name" name="name">
                  <label id="name_error" class="form-label text-danger"></label>
                </div>
                <div class="">
                  <label for="mobile" class="form-label">Mobile</label>
                  <input type="mobile" class="form-control" id="mobile" mobile="mobile">
                  <label id="mobile_error" class="form-label text-danger"></label>
                </div>
                <div class="">
                  <label for="email" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="email" name="email"> 
                  <label id="email_error" class="form-label text-danger"></label>
                </div>
                <div class="">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" id="password" name="password">
                  <label id="password_error" class="form-label text-danger"></label>
                </div>
                <div class="">
                  <label for="password2" class="form-label">Confirm Password</label>
                  <input type="password" class="form-control" id="password2" name="password2">
                  <label id="password2_error" class="form-label text-danger"></label>
                </div>
               
                <input type="submit" value="Create Account" name="login" class="btn btn-primary form-control">
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

<Script src="form_validation.js"></Script>

<?php
    include_once 'footer.php';
?>