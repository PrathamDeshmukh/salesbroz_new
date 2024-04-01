<div class="content-wrapper">
    <div class="row">
<div style="display: flex; gap: 30px;">
    <h2>All Purchase Invoices</h2>
    <input name="tags" id="tags" value="Arvind" style="height: 35px; width: 500px; margin-top: 3px;"/>
    <button type="button" class="btn btn-primary float-end">Filters</button>
    <button type="button" class="btn btn-primary float-end">Download</button>
</div>
</div>
<div class="main-panel">
        <div class="content-wrapper">
          <div class="card" style="position: absolute;">
            <div class="card-body">
                <div class="content-wrapper" style="display: flex; gap: 30px;">
              <input type="text" class="form-control" placeholder="Search invoice by Number,Distributor and more" value="" style="height: 15px; width: 500px;">   
              <button type="button" class="btn btn-link btn-fw">Pending Payment Invoices</button>
              <button type="button" class="btn btn-link btn-fw">+ New Purchase Invoice</button>   
                </div>                   
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
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
                    </table>
                    <button type="button" class="btn btn-link btn-fw">+ Click here to add</button>   
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


