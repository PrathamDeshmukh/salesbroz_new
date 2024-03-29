<!DOCTYPE html>
<html lang="en">
<head>
<?php include('head.php');?>
</head>
<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
      
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="https://demo.bootstrapdash.com/skydash/themes/assets/images/logo.svg" alt="logo">
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form  action="#" method="post" class="pt-3">
                <div class="form-group">
                  <input type="text" name="phone"class="form-control form-control-lg" id="exampleInputEmail1"
                    placeholder="Contact Number">
                </div>
                <div class="form-group">
                  <input type="text" name="username"class="form-control form-control-lg" id="exampleInputEmail1"
                    placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" name="password"class="form-control form-control-lg" id="exampleInputPassword1"
                    placeholder="Password">
                </div>
                <div class="mt-3 d-grid gap-2">
                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Log In</button>
                  <!-- <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                    href="../../index-2.html">SIGN
                    IN</a> -->
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
              
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="<?php base_url()?>signup" class="text-primary">Create</a>
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

 
<!--Back to top Start-->
<div id="back-to-top">
    <a class="top" id="#top" href="#"> <i class="ion-ios-arrow-up"></i> </a>
</div>
<!--Back to top End-->

<?php include("script.php");?>
  
</body>
</html>