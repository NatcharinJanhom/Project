<!DOCTYPE html>
<html lang="en">
  <head>
  	<?php include('head.php'); ?>
  </head>
  <style>
    .form-control
    {
      height: 44px;
    }
    .auth.auth-bg-1 {
    background: url(pic/bg.jpg);
    background-size: cover;
    }
  </style>
 <body>
 <?php
 if(isset($_SESSION['member'])){
        if($_SESSION['member']['permission'] === 'admin')
        {
          header( "location: admindetal_asree.php" ); 			
        }
        else if($_SESSION["member"]['permission'] === 'member')
        {
          header( "location: userpage.php" ); 
        }
        
    }
?>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
          <div class="row w-100">
            <div class="col-lg-4 mx-auto">
              <div class="auto-form-wrapper">
                

                <form  method="post" id="login" action="check_login.php">
                  <div class="form-group">
                    <label class="label">Username</label>
                    <div class="input-group">
                      <input type="text" name="username" class="form-control" placeholder="Username">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="fa fa-user"></i>
                        </span>
                      </div>
                    </div>
            
                  </div>
                  <div class="form-group">
                    <label class="label">Password</label>
                    <div class="input-group">
                      <input type="password" name="password" class="form-control" placeholder="*********">
                      <div class="input-group-append">
                        <span class="input-group-text">
                          <i class="mdi mdi-key"></i>
                        </span>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary submit-btn btn-block">Login</button>
                  </div>

                  <div class="form-group d-flex justify-content-between">
                    <div class="form-check form-check-flat mt-0">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" checked> Keep me signed in </label>
                    </div>
                    <a href="forgot_password.php" class="text-small forgot-password text-black">Forgot Password</a>
                  </div>
                  <div class="text-block text-center my-3">
                    <span class="text-small font-weight-semibold">Not a member ?</span>
                    <a href="register.php" class="text-black text-small">Create new account</a>
                  </div>
                </form>


              </div>
              <ul class="auth-footer">
               
              </ul>
              <p class="footer-text text-center"></p>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
  
  </body>

</html>
<!--
<script>
      $(document).ready(function(){
        $(".submit-btn").click(function(){
          user= $("input[name='username']").val();
          pass= $("input[name='password']").val();
          if(user =='admin' && pass =='admin')
          {
            $("#login").attr("action", "admindetal_asree.php");
          }
          else
          {
            $("#login").attr("action", "userpage.php");
          }
          $("#login").submit();
        });
      });
  </script>
  -->