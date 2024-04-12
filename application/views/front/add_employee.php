

    <!--main panel-->
    <div class="main-panel">
        <div class="content-wrapper">
         
          <div class="row">
            <div class="col-md-12 grid-margin">
                    <!-- Product table will be loaded here -->
                    <div class="card">
                <div class="card-body">
                
                  <form class="form-sample" action="<?php echo base_url() ?>Welcome/add_employee_detail" method="post"
                                enctype="multipart/form-data">
                  <h3 class="card-description"> Add New Employee info</h3>
                     
                    <div class="row">
                      <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Employee Full Name:</label>
                        <input type="text" name="e_name" class="form-control form-control-sm" id="exampleInputUsername1" >
                         
                      </div>
                       
                      </div>
                      <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Contact Number:</label>
                        <input type="text" name="e_phone" class="form-control form-control-sm" id="exampleInputUsername1" >
                        </div>
                       
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Create Password:</label>
                        <input type="password" name="password" class="form-control form-control-sm" id="exampleInputUsername1" >
                        </div>
                    </div>
                      <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Confirm Password:</label>
                        <input type="password" name="c_pass" class="form-control form-control-sm" id="exampleInputUsername1" >
                        </div>
                
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Age:</label>
                        <input type="text" name="e_age" class="form-control form-control-sm" id="exampleInputUsername1" >
                        </div>
                    </div>
                      <div class="col-md-6">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Adhar Number:</label>
                        <input type="text" name="adhar_no" class="form-control form-control-sm" id="exampleInputUsername1" >
                        </div>
                
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Address:</label>
                        <input type="text" name="e_address"class="form-control form-control-sm" id="exampleInputUsername1" >
                        </div>
                       
                      </div>
                     
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                      
                        <div class="form-group">
                    <label for="exampleFormControlSelect1">Allow sales Permissions:</label>
                    <select name="sale_permission" class="form-control form-control-sm" id="exampleFormControlSelect1">
                      <option>Select</option>
                      <option>Yes</option>
                      <option>No</option>
                      
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect2">Allow Purchase Permissions:</label>
                    <select name="purchase_permission" class="form-control form-control-sm" id="exampleFormControlSelect2">
                    <option>Select</option>
                    <option >Yes</option>
                      <option >No</option>
                    </select>
                  </div>
                    </div>
                      
                    </div>
                 
                    
                   
                  

                    <button type="submit" id="product-btn" class="submit-button btn btn-primary ">Add </button>
                
                    
                   
                  </form>
                </div>
              </div>
                
            </div>
          </div>

        
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
 
</body>






        </div>