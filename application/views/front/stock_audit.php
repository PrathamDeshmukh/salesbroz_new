

    <!--main panel-->
    <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h2 class="font-weight-bold">Stocks Audit</h2><br>
                  <div class="row">
                    <div class="col-md-7 mb-4 stretch-card transparent">
                      <input type="text" class="form-control p-2" placeholder="Search for products, brands and more" value="" >
                    </div>
    
                    <div class="col-md-5 mb-4 justify-content-end stretch-card transparent ">
                      
                      <button type="button" class="btn btn-primary float-end">+ Create Audit</button>
                    </div>
                  </div>
                  <button type=" button "  id="stock-btn" class="btn btn-primary ">Stocks</button>
                  <button type="button"  id="adjusted-btn" class="btn btn-primary active ">Adjusted</button>
              
                </div>
               
              </div>
              
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-12 mb-4 mb-xl-0">
                <div id="stock-section">
                    <div class="card">
                    <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                    
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>imei</th>
                          <th>Purchase Price</th>
                          <th>Sell In Date</th>
                          <th>Move to </th>
                          
                        </tr>
                      </thead>
  
                      <tbody>
                      <?php $StockAuditStock = getAllRow('StockAuditStock');
                                                               if (!empty($StockAuditStock)) {
                                                      foreach ($StockAuditStock as $StockAuditStock_info) {
                                                                   ?>
                        <tr>
                          <td><?=$StockAuditStock_info['name']?></td>
                          <td><?=$StockAuditStock_info['imei']?></td>
                          <td><?=$StockAuditStock_info['p_price']?></td>
                          <td><?=$StockAuditStock_info['sell_date']?></td>
                          <td>
                          <button class="btn btn-outline-primary">move</button>
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
                </div> </div>
               
              </div>
            </div>
          </div>
<!--------------------------------------------------------------------------->
          <div class="row">
            <div class="col-md-12 grid-margin">
              
              <div class="row">
                <div class="col-12 col-xl-12 mb-4 mb-xl-0">
                <div id="adjusted-section" style="display: none;">                    
                    <div class="card">
                    <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                    
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>imei</th>
                          <th>Purchase Price</th>
                          <th>Sell In Date</th>
                          <th>Move to </th>
                          
                        </tr>
                      </thead>
                      <tbody>
                      <?php $StockAuditAdjust = getAllRow('StockAuditAdjust');
                                                               if (!empty($StockAuditAdjust)) {
                                                      foreach ($StockAuditAdjust as $StockAuditAdjust_info) {
                                                                   ?>
                        <tr>
                          <td><?=$StockAuditAdjust_info['name']?></td>
                          <td><?=$StockAuditAdjust_info['imei']?></td>
                          <td><?=$StockAuditAdjust_info['p_price']?></td>
                          <td><?=$StockAuditAdjust_info['sell_date']?></td>
                          <td>
                          <button class="btn btn-outline-primary">move</button>
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
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  
    <script>
        document.getElementById('stock-btn').addEventListener('click', function() {
            document.getElementById('stock-section').style.display = 'block';
            document.getElementById('adjusted-section').style.display = 'none';
            document.getElementById('stock-btn').classList.add('active');
            document.getElementById('adjusted-btn').classList.remove('active');
        });

        document.getElementById('adjusted-btn').addEventListener('click', function() {
            document.getElementById('stock-section').style.display = 'none';
            document.getElementById('adjusted-section').style.display = 'block';
            document.getElementById('stock-btn').classList.remove('active');
            document.getElementById('adjusted-btn').classList.add('active');
        });
    </script>
</body>






        </div>