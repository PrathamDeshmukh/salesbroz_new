




    <!--main panel-->
    <div class="main-panel">
        <div class="content-wrapper">
        <div class="row">
          <div class="col-md-12 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4  transparent">
                  <h2 class="font-weight-bold">My Distributors</h2>
                </div>
                <div class="col-md-6 mb-4 justify-content-end stretch-card transparent">
                      <button type="button" class="btn btn-primary ">Download</button>
                    </div>
                <div class="col-md-7 mb-2 ml-2 transparent">
                <div class="row">                      
                  </div>                 
                </div>
              </div>
            </div>          
          </div>
          <div class="row">
           
            <div class="col-md-12 grid-margin transparent">
              <div class="card ">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6 mb-4 stretch-card transparent">
                      <button type="button" class="btn btn-primary ">Add Distributor</button>
                    </div>
                    
                    <div class="col-md-6 mb-4 stretch-card transparent">
                    <input type="text" class="form-control p-2" placeholder="Search user" value="" >  
                    </div>
                  </div>
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
                          <th>Name</th>
                          <th>Contact Number</th>
                          <th>Type</th>
                          <th>City</th>
                          <th>Brand</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $customer = getAllRow('customer');
                                                               if (!empty($customer)) {
                                                      foreach ($customer as $customer_info) {
                                                                   ?>
                        <tr>
                        <td><?=$customer_info['name']?></td>
                          <td><?=$customer_info['phone']?></td>
                          <td><?=$customer_info['type']?></td>
                          <td><?=$customer_info['city']?></td>
                          <td><?=$customer_info['brand']?></td>
                     
                          
                          <td><a href="#"><i class="fa fa-edit"></i>
                          <button class="btn btn-primary">Action</button>
                          </td>
                        </tr>
                        <?php } 
                                                             } ?>
            
                        

                      </tbody>
                      
                    
                    </table><br>
                    
                    <nav>
                    <ul class="pagination flex-wrap">
                      <li class="page-item"><a class="page-link" href="#"><i class="ti-angle-left"></i></a></li>
                      <li class="page-item active"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">4</a></li>
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

