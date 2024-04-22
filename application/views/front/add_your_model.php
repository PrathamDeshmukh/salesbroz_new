




    <!--main panel-->
    <div class="main-panel">
        <div class="content-wrapper">
        <div class="row">
          <div class="col-md-12 grid-margin transparent">
              <div class="row">
                <div class="col-md-5 mb-4  transparent">
                  <h2 class="font-weight-bold">My Products</h2>
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
          <div class="row">
           
            <div class="col-md-12 grid-margin transparent">
              <div class="card ">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6 mb-4 transparent">
                      <input type="text" class="form-control p-2" placeholder="Search for products, brands and more" value="" >
                    </div>
                    <div class="col-md-6 mb-4 transparent">
                      <a class="btn btn-primary float-end" href="<?php echo base_url();?>">+ New Products</a>
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
                          <th>Brand</th>
                          <th>Model</th>
                          <th>Colours</th>
                          <th>Dp₹</th>
                          <th>Mop₹</th>
                          <th>Mrp₹</th>
                          <th>setting</th>
                        </tr>
                      </thead>
                      <tbody>
                      <tbody>
                      <?php $AddYourModel = getAllRow('AddYourModel');
                                                               if (!empty($AddYourModel)) {
                                                      foreach ($AddYourModel as $AddYourModel_info) {
                                                                   ?>
                        <tr>
                          <td><?=$AddYourModel_info['brand']?></td>
                          <td><?=$AddYourModel_info['model']?></td>
                          <td><?=$AddYourModel_info['colour']?></td>
                          <td><?=$AddYourModel_info['dp']?></td>
                          <td><?=$AddYourModel_info['mop']?></td>
                          <td><?=$AddYourModel_info['mrp']?></td>
                          <td>
                          <button class="btn btn-outline-primary">View</button>
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

