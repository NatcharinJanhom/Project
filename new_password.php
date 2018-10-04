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
              <h2 class="text-center mb-4">Recover Password</h2>
              <div class="auto-form-wrapper">
                <form action="#">
                  <div class="form-group">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="New Password">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-key"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Confirm Password">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-key"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary submit-btn btn-block">Confirm</button>
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
