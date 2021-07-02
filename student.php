<?php
require_once 'data/loginlayouthead.php';
?>

  <section class="testimonials bg-light">
    <div class="container">
      <div class="row">
        <div class="features-icons bg-light text-center col-lg-7"> 
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                <div class="features-icons-icon d-flex">
                <i class="icon-graduation m-auto text-primary"></i>
                </div>
                <h3>Welcome Student</h3>
                <p class="lead mb-0">You can login to your dashboard with your credentials!</p>
            </div>
        </div>

        <div class="col-lg-4 mb-lg-0">
          <div class="card card-signin mx-auto mb-lg-0 my-5">
            <div class="card-body">
              <h5 class="card-title text-center">Student Sign In</h5>
              <form class="form-signin" method="POST" action="data/stuloginback.php">
                  <div class="form-label-group">
                  <input type="email" id="inputEmail" class="form-control" name="stuuser" required autofocus>
                  <label for="inputEmail">User id</label>
                  </div>

                  <div class="form-label-group">
                  <input type="password" id="inputPassword" class="form-control" name="stupass" required>
                  <label for="inputPassword">Password</label>
                  </div>

                  <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" class="custom-control-input" id="rem" required>
                    <label class="custom-control-label" for="rem">I am not a Robot</label>
                  </div>

                  <button class="btn btn-lg btn-primary btn-block text-uppercase mb-3" name="stusub" type="submit">Sign in</button>
                  <div class="testimonial-item mx-auto mb-1 mb-lg-0">
                      <a class="font-weight-light" href="index.html">Forgot Password? Click here</p>
                  </div>
              </form>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

<?php
require_once 'data/loginlayoutfoot.php';
?>