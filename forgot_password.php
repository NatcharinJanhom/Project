<!DOCTYPE html>
<html lang="en">
  <head>
  <?php include('head.php'); ?>    
  </head>
  <style>
     .form-control
    {
      height: 44px;
      border: 1px solid #ccc;
    }
    .auth.register-bg-1 {
    background: url(pic/bg.jpg);
    background-size: cover;
}

  </style>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <h2 class="text-center mb-4">Forgot Password</h2>
              <div class="auto-form-wrapper">
                <form action="new_password.php">
                  <div class="form-group">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Email">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-email"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary submit-btn btn-block">Send to Email</button>
                  </div>
                  <div class="text-block text-center my-3">
                    <span class="text-small font-weight-semibold">I remember.</span>
                    <a href="index.php" class="text-black text-small">Login now</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
  </body>
</html>
