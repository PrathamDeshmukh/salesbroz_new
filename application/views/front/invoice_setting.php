

    <!--main panel-->
    <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h2 class="font-weight-bold">Invoice Setting</h2><br>
                  <button type=" button "  id="product-btn" class="btn btn-primary ">Purchase Invoice Setting</button>
                  <button type="button"  id="sale-btn" class="btn btn-primary active ">Sales Invoice Setting</button>
              
                </div>
               
              </div>
              
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin">
            <?php if ($msg = $this->session->flashdata('msg')):
                                  $msg_class = $this->session->flashdata('msg_class') ?>
                                  <div class="row">
                                <div class="col-lg-6" >
                                   <div class="alert  <?= $msg_class; ?>"style="width: 460px;"><?= $msg; ?></div>
                               </div>
                                     </div>
                                       <?php
                                        $this->session->unset_userdata('msg');
                                       endif; ?>
					
					
              
              <div class="row">
                <div class="col-12 col-xl-12 mb-4 mb-xl-0">
                <div id="product-section">
                    <!-- Product table will be loaded here -->
                    <div class="card">
                <div class="card-body">
                
                  <form class="form-sample" action="<?php echo base_url() ?>Welcome/add_invoice" method="post"
                                enctype="multipart/form-data">
                  <h3 class="card-description"> Personal info</h3>
                     
                    <div class="row">
                      <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Series No:</label>
                        <input type="text" name="series_no" class="form-control form-control-sm" id="exampleInputUsername1" >
                        <p class="col-form-label"> is your latest invoice number as per your invoice records.</p>
                         
                      </div>
                       
                      </div>
                      <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Challan Serial:</label>
                        <input type="text" name="challan_no" class="form-control form-control-sm" id="exampleInputUsername1" >
                        </div>
                       
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Business Phone Number:</label>
                        <input type="text" name="phone" class="form-control form-control-sm" id="exampleInputUsername1" >
                        </div>
                    </div>
                      <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Business Email:</label>
                        <input type="email" name="email" class="form-control form-control-sm" id="exampleInputUsername1" >
                        </div>
                
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Your terms and condition. This will be visible on all invoices you generate</label>
                        <input type="text" name="terms_condition"class="form-control form-control-sm" id="exampleInputUsername1" >
                        </div>
                       
                      </div>
                     
                    </div>
                    <div class="row">
                      
                      <div class="col-md-12">
                        <div class="form-group row">
                             <div class="col-sm-4">
                            <div class="form-check">
                              <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                Send SMS invoice copy to Customer
                              </label>
                            </div>
                          </div>
                          
                        </div>
                        <div class="form-group row">
                          
                          <div class="col-sm-4">
                            <div class="form-check">
                              <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                Send SMS invoice copy to self
                              </label>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                    <h3 class="card-description"> Bank Details</h3>
                    
                    <div class="row">
                      <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Account Holder Name:</label>
                        <input type="text" name="account_holder_name" class="form-control form-control-sm" id="exampleInputUsername1" >
                      </div>
                     
                      </div>
                      <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Account No:</label>
                        <input type="text" name="account_no"  class="form-control form-control-sm" id="exampleInputUsername1" >
                      </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputUsername1">IFSC Code:</label>
                        <input type="text" name="ifsc_code"class="form-control form-control-sm" id="exampleInputUsername1" >
                      </div>
                      
                      </div>
                      <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Bank Name:</label>
                        <input type="text" name="Bank_name" class="form-control form-control-sm" id="exampleInputUsername1" >
                      </div>
                      
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Branch Name:</label>
                        <input type="text" name="Branch_name" class="form-control form-control-sm" id="exampleInputUsername1" >
                      </div>
                        
                      </div>
                      <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputUsername1">UIP Id:</label>
                        <input type="text" name="upi_id" class="form-control form-control-sm" id="exampleInputUsername1" >
                      </div>
                       
                      </div>
                      
                    </div>
                    <button type="submit" id="product-btn" class="submit-button btn btn-primary ">Purchase Invoice Setting</button>
                
                    
                   
                  </form>
                </div>
              </div>
                </div> </div>
               
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 grid-margin">
              
              <div class="row">
                <div class="col-12 col-xl-12 mb-4 mb-xl-0">
                <div id="sale-section" style="display: none;">
                    <!-- Sale table will be loaded here -->
                    
                    <div class="card">
                <div class="card-body">
                
                  <form class="form-sample" action="<?php echo base_url('welcome/addinvoice') ?>" method="post"
                                enctype="multipart/form-data">
                  <h3 class="card-description"> Personal info</h3>
                     
                    <div class="row">
                      <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Series No:</label>
                        <input type="text" class="form-control form-control-sm" id="exampleInputUsername1" >
                        <p class="col-form-label"> is your latest invoice number as per your invoice records.</p>
                         
                      </div>
                       
                      </div>
                      <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Challan Serial:</label>
                        <input type="text" class="form-control form-control-sm" id="exampleInputUsername1" >
                        </div>
                       
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Business Phone Number:</label>
                        <input type="text" class="form-control form-control-sm" id="exampleInputUsername1" >
                        </div>
                    </div>
                      <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Business Email:</label>
                        <input type="email" class="form-control form-control-sm" id="exampleInputUsername1" >
                        </div>
                
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Your terms and condition. This will be visible on all invoices you generate</label>
                        <input type="text" class="form-control form-control-sm" id="exampleInputUsername1" >
                        </div>
                       
                      </div>
                     
                    </div>
                    <div class="row">
                      
                      <div class="col-md-12">
                        <div class="form-group row">
                             <div class="col-sm-4">
                            <div class="form-check">
                              <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                Send SMS invoice copy to Customer
                              </label>
                            </div>
                          </div>
                          
                        </div>
                        <div class="form-group row">
                          
                          <div class="col-sm-4">
                            <div class="form-check">
                              <label class="form-check-label">
                              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                Send SMS invoice copy to self
                              </label>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                    <h3 class="card-description"> Bank Details</h3>
                    
                    <div class="row">
                      <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Account Holder Name:</label>
                        <input type="text" class="form-control form-control-sm" id="exampleInputUsername1" >
                      </div>
                     
                      </div>
                      <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Account No:</label>
                        <input type="text" class="form-control form-control-sm" id="exampleInputUsername1" >
                      </div>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputUsername1">IFSC Code:</label>
                        <input type="text" class="form-control form-control-sm" id="exampleInputUsername1" >
                      </div>
                      
                      </div>
                      <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Bank Name:</label>
                        <input type="text" class="form-control form-control-sm" id="exampleInputUsername1" >
                      </div>
                      
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Branch Name:</label>
                        <input type="text" class="form-control form-control-sm" id="exampleInputUsername1" >
                      </div>
                        
                      </div>
                      <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputUsername1">UIP Id:</label>
                        <input type="text" class="form-control form-control-sm" id="exampleInputUsername1" >
                      </div>
                       
                      </div>
                      
                    </div>
                    
                   
                  </form>
                </div>
              </div>
                </div>
               
              </div>
            </div>
          </div>
         
         
          </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('product-btn').addEventListener('click', function() {
            document.getElementById('product-section').style.display = 'block';
            document.getElementById('sale-section').style.display = 'none';
            document.getElementById('product-btn').classList.add('active');
            document.getElementById('sale-btn').classList.remove('active');
        });

        document.getElementById('sale-btn').addEventListener('click', function() {
            document.getElementById('product-section').style.display = 'none';
            document.getElementById('sale-section').style.display = 'block';
            document.getElementById('product-btn').classList.remove('active');
            document.getElementById('sale-btn').classList.add('active');
        });
    </script>
</body>






        </div>