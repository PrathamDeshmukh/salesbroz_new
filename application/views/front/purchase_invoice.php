




    <!--main panel-->
    <div class="main-panel">
        <div class="content-wrapper">
        <div class="row">
          <div class="col-md-12 grid-margin transparent">
              <div class="row">
                <div class="col-md-5 mb-4  transparent">
                  <h2 class="font-weight-bold">All Purchase Invoices</h2>
                </div>
                

                <div class="col-md-7 mb-2  transparent">
                <div class="row">
                    <div class="col-md-6 mb-4 stretch-card transparent">
                    <input  type="text" class="form-control p-2" name="tags" id="tags" value="Arvind" />
                    </div>
                    <div class="col-md-2 mb-4 stretch-card transparent">
                    <button type="button" class="btn btn-primary float-end">Filter</button>
                    </div>
                    <div class="col-md-2 mb-4 stretch-card transparent">
                      <button type="button" class="btn btn-primary float-end">Download</button>
                    </div>
                  </div>
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
           
            <div class="col-md-12 grid-margin transparent">
              <div class="card ">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6 mb-4 stretch-card transparent">
                      <input type="text" class="form-control p-2" placeholder="Search invoice by Number, Distributor and more" value="" >
                    </div>
                    <div class="col-md-3 mb-4 stretch-card transparent">
                      <button type="button" class="btn btn-link btn-fw">Pending Payment Invoices</button>
                     
                    </div>
                    <div class="col-md-3 mb-4 stretch-card transparent">
                      
                      <button type="button" class="btn btn-link btn-fw">+ New Purchase Invoices</button>
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
                        <th>Date</th>
                          <th>Bill No.</th>
                          <th>Vendor<br>Name</th>
                          <th>Vendor<br>Phone</th>
                          <th>Paid</th>
                          <th>Amount</th>
                          <th>Pending<br>Amount</th>
                          <th>Payment<br>Mode</th>
                          <th>Payments</th>
                          <th>Products</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $vendor = getAllRow('vendor');
                                                               if (!empty($vendor)) {
                                                      foreach ($vendor as $vendor_info) {
                                                                   ?>
                        <tr>
                          <td><?=$vendor_info['date']?></td>
                          <td><?=$vendor_info['bill_no']?></td>
                          
                          <td><?=$vendor_info['v_name']?></td>
                          <td><?=$vendor_info['v_phone']?></td>
                          <td><?=$vendor_info['paid']?></td>
                          <td><?=$vendor_info['v_amount']?></td>
                          <td> <?=$vendor_info['pending_amount']?></td>
                          <td><?=$vendor_info['pay_mode']?></td>
                          <td>
                          <button class="btn btn-outline-primary">ViewUpdate<br>Payments</button>
                          </td>
                          <td>
                            <button class="btn btn-outline-primary">View Products</button>
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

