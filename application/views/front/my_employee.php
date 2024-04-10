




    <!--main panel-->
    <div class="main-panel">
        <div class="content-wrapper">
        <div class="row">
          <div class="col-md-12 grid-margin transparent">
              <div class="row">
                <div class="col-md-5 mb-4  transparent">
                  <h2 class="font-weight-bold">All Employees</h2>
                </div>
                

                <div class="col-md-7 mb-2 ml-2 transparent">
               
                  <!-- <input  type="text" class="form-control" name="tags" id="tags" value="Arvind" />
                </div>
                <div class="col-md-2 mb-1  justify-content-end transparent">
                  <button type="button" class="btn btn-primary float-end">Filter</button>
                </div>
                <div class="col-md-2 mb-1 justify-content-end transparent">
                  <button type="button" class="btn btn-primary float-end">Download</button> -->
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
                          <th>Age</th>
                          <th>Date of Birth</th>
                          <th>Address</th>
                         
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
                          <td><?=$employee_info['e_age']?></td>
                          <td><?=$employee_info['e_dob']?></td>
                          <td><?=$employee_info['e_address']?></td>
                        
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

