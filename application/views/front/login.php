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
            <?php if ($msg = $this->session->flashdata('msg')):
                                  $msg_class = $this->session->flashdata('msg_class') ?>
                                  <div class="row">
                                <div class="col-lg-6" >
                                   <div class="alert  <?= $msg_class; ?>"style="width: 300px;"><?= $msg; ?></div>
                               </div>
                                     </div>
                                       <?php
                                        $this->session->unset_userdata('msg');
                                       endif; ?>
              <div class="brand-logo">
                <h1><b>SalesBroz..</b></h1>
              </div>
              <h4>Hello! let's get started</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form  action="<?php echo base_url('welcome/adminlogin'); ?>" method="post" class="pt-3">
                <div class="form-group">
                  <input type="text" name="phone"class="form-control form-control-lg" id="exampleInputEmail1"
                    placeholder="Contact Number" required>
                </div>
                <div class="form-group">
                  <input type="text" name="username"class="form-control form-control-lg" id="exampleInputEmail1"
                    placeholder="Username"required>
                </div>
                <div class="form-group">
                  <input type="password" name="password"class="form-control form-control-lg" id="exampleInputPassword1"
                    placeholder="Password"required>
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