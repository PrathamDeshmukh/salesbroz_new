<div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin transparent">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6 mb-4 stretch-card transparent">
                    <input  type="text" class="form-control p-2" name="tags" id="tags" value="" />
                    </div>
                    
                  </div>
                  <div class="row">
                  <div class="col-12">
                    <div class="popover-static-demo">                   
                    <div class="popover bs-popover-bottom bs-popover-bottom-demo popover-info">
                      <div class="arrow"></div>
                      <h3 class="popover-header">Mobiles</h3>
                      <div class="popover-body">
                        <p>Total Count  :  12</p><br>
                        <p>Total Value  :  456</p>
                      </div>
                    </div>
                    <div class="popover bs-popover-bottom bs-popover-bottom-demo popover-warning">
                      <div class="arrow"></div>
                      <h3 class="popover-header">Accessories</h3>
                      <div class="popover-body">
                      <p>Total Count  :  12</p><br>
                      <p>Total Value  :  456</p>
                      </div>
                    </div>
                    <div class="popover bs-popover-bottom bs-popover-bottom-demo popover-primary">
                      <div class="arrow"></div>
                      <h3 class="popover-header">Overall</h3>
                      <div class="popover-body">
                      <p>Total Count  :  12</p><br>
                      <p>Total Value  :  456</p>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    </div>
               
            </div>
                    
                  </div>
                  
               
                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-md-12 grid-margin transparent">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6 mb-4 stretch-card transparent">
                      <input type="text" class="form-control p-2" placeholder="Filter By Brands" value="" >
                    </div>
                    <div class="col-md-6 mb-4 justify-content-end stretch-card transparent ">
                    <nav>
                    <ul class="pagination flex-wrap">
                      <li class="page-item "><a class="page-link" href="#">2024</a></li>
                      <li class="page-item active"><a class="page-link" href="#">March</a></li>
                      <li class="page-item"><a class="page-link" href="#">This Week</a></li>
                      <li class="page-item"><a class="page-link" href="#">Today</a></li>
                    </ul>
                  </nav>
                    </div><div class="row">
                    <div class="col-md-6 mb-4 stretch-card transparent">
                    <h6>Showing Sales Data (ARVIND)</h6>
                    </div>
                    <div class="col-md-6 mb-4 justify-content-end stretch-card transparent ">
                    <button type="button" class="btn btn-primary float-end">Export to Excel</button>
                    </div>
                    <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Brand</th>
                          <th>Total Value</th>
                          <th>Total Count</th>
                          <th>See more</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $MySale = getAllRow('MySale');
                                                               if (!empty($MySale)) {
                                                      foreach ($MySale as $MySale_info) {
                                                                   ?>
                        <tr>
                          <td><?=$MySale_info['brand']?></td>
                          <td><?=$MySale_info['total_value']?></td>
                          <td><?=$MySale_info['total_count']?></td>
                          <td>
                          <button class="btn btn-outline-primary">see more</button>
                          </td>
                
                        </tr>
                        <?php } 
                                                             } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

                    
                  </div>
                  
                    <div class="clearfix"></div>
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
        
            