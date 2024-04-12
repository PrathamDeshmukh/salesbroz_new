




    <!--main panel-->
    <div class="main-panel">
        <div class="content-wrapper">
        <div class="row">
          <div class="col-md-12 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4  transparent">
                  <h2 class="font-weight-bold">All Employees</h2>
                </div>
                <div class="col-md-6 mb-4  transparent">
                <!-- <button type="button" class="btn btn-primary float-end">Add Employee</button> -->
                <a class="btn btn-primary float-end" href="<?php echo base_url();?>add_employee">Add Employee</span></a>
               
                </div>

               
              </div>
            </div>
            
          </div>
         
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                    
                      <thead>
                        <tr>
                          <th>Employee ID</th>
                          <th>Name</th>
                          <th>Contact</th>
                          <th>Password</th>
                          <th>Age</th>
                          <th>Adhar Number</th>
                          <th>Address</th>
                          <th>Sale <br>Permission</th>
                          <th>Purchases <br> Permission</th>
                          <th>Create At</th>
                          <th>Update At</th>
                          <th>Sale Action</th>
                          <th>Purchase Action</th>
                         
                        </tr>
                      </thead>
                      <tbody>
                      <?php $employee = getAllRow('employee');
                                                               if (!empty($employee)) {
                                                      foreach ($employee as $employee_info) {
                                                                   ?>
                        <tr>
                          <td><?=$employee_info['id']?></td>
                          <td><?=$employee_info['e_name']?></td>
                          <td><?=$employee_info['e_phone']?></td>
                          <td><?=$employee_info['password']?></td>
                          <td><?=$employee_info['e_age']?></td>
                          <td><?=$employee_info['adhar_no']?></td>
                          
                          <td><?=$employee_info['e_address']?></td>
                          <td><?=$employee_info['sale_permission']?></td>
                          <td><?=$employee_info['purchase_permission']?></td>
                          <td><?=$employee_info['create_at']?></td>
                          <td><?=$employee_info['update_at']?></td>
                          <td><a class="btn btn-primary float-end" href="<?php echo base_url();?>add_employee">Sale Allow</span></a>
                          
                        </td>
                        <td><a class="btn btn-primary float-end" href="<?php echo base_url();?>add_employee">Purchase Allow</span></a>
                          
                        </td>
                        
                        </tr>
                        <?php } 
                                                             } ?>
                        
                      </tbody>
                      
                    
                    </table>
                    
                    <nav>
                    <ul class="pagination flex-wrap">
                      <li class="page-item"><a class="page-link" href="#"><i class="ti-angle-left"></i></a></li>
                      <li class="page-item active"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                     
                      <li class="page-item"><a class="page-link" href="#"><i class="ti-angle-right"></i></a></li>
                    </ul>
                  </nav>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
</div>
</div>
</div>
</div>

