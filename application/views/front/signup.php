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
                                   <div class="alert  <?= $msg_class; ?>"style="width: 310px;"><?= $msg; ?></div>
                               </div>
                                     </div>
                                       <?php
                                        $this->session->unset_userdata('msg');
                                       endif; ?>
              <div class="brand-logo">
                
                <h1><b>SalesBroz..</b></h1>
              </div>
              
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form action="<?php echo base_url() ?>Welcome/registration"  method="post"class="pt-3">
                <div class="form-group">
                  <input type="text" name="username"class="form-control form-control-lg" id="exampleInputUsername1"
                    placeholder="Username"required>
                </div>
                <div class="form-group">
                  <input type="text" name="phone"class="form-control form-control-lg" id="exampleInputUsername1"
                    placeholder="Contact Number"required>
                </div>
                
                
                <div class="form-group">
                  <input type="password" name="password"class="form-control form-control-lg" id="exampleInputPassword1"
                    placeholder="Password"required>
                </div>
                <div class="form-group">
                  <input type="password" name="c_pass"class="form-control form-control-lg" id="exampleInputPassword1"
                    placeholder="Confirm Password"required>
                </div>
                <div class="mb-4">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      I agree to all Terms & Conditions
                    </label>
                  </div>
                </div>
                <div class="mt-3 d-grid gap-2">
                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN UP</button>
                
                 
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="<?php base_url()?>welcome" class="text-primary">Login</a>
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