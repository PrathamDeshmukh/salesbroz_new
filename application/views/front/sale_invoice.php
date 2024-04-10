




    <!--main panel-->
    <div class="main-panel">
        <div class="content-wrapper">
        <div class="row">
          <div class="col-md-12 grid-margin transparent">
              <div class="row">
                <div class="col-md-5 mb-4  transparent">
                  <h2 class="font-weight-bold">All Sale Invoices</h2>
                </div>
                

                <div class="col-md-7 mb-2 ml-2 transparent">
                <div class="row">
                    <div class="col-md-6 mb-4  stretch-card transparent">
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
                      <input type="text" class="form-control p-2" placeholder="Search invoice by Number,Customer and more" value="" >
                    </div>
                    <div class="col-md-3 mb-4 stretch-card transparent">
                      <button type="button" class="btn btn-link btn-fw">Pending Payment Invoices</button>
                     
                    </div>
                    <div class="col-md-3 mb-4 stretch-card transparent">
                      
                      <!-- <button type="button" class="btn btn-link btn-fw">+ New Invoices</button> -->
                      <a class="btn btn-link btn-fw" href="<?php echo base_url();?>invoice_setting">+ New Invoices</a>
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
                          <th>Invoice No.</th>
                          <th>paid</th>
                          <th>Customer<br>Name</th>
                          <th>Customer<br>Phone</th>
                          <th>Amount</th>
                          <th>Pending<br>Amount</th>
                          <th>Payment<br>Mode</th>
                          <th>Payments</th>
                          <th>Products</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php $sale_invoice = getAllRow('sale_invoice');
                                                               if (!empty($sale_invoice)) {
                                                      foreach ($sale_invoice as $sale_invoice_info) {
                                                                   ?>
                        <tr>
                          <td><?=$sale_invoice_info['date']?></td>
                          <td><?=$sale_invoice_info['invoice_no']?></td>
                          <td><?=$sale_invoice_info['c_paid']?></td>
                          <td><?=$sale_invoice_info['c_name']?></td>
                          <td><?=$sale_invoice_info['c_phone']?></td>
                          <td><?=$sale_invoice_info['c_amount']?></td>
                          <td> <?=$sale_invoice_info['pending_amount']?></td>
                          <td><?=$sale_invoice_info['pay_mode']?></td>
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

