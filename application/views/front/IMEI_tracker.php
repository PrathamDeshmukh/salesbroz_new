

    <!--main panel-->
    <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
              <h4>Scan/Enter IMEI's to track</h4>
                  
                    <div class="col-md-12 grid-margin">
                    <input type="text" class="form-control p-2" placeholder="Enter Imeis to Scan" value="" >  
                    </div>
                
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <button type=" button "  id="all-btn" class="btn btn-primary ">All</button>
                  <button type="button"  id="activated-btn" class="btn btn-primary active ">Activated</button>
                  <button type="button"  id="sale-out-btn" class="btn btn-primary active ">Sell Out</button>
                  <button type="button"  id="sall-in-btn" class="btn btn-primary active ">Sell in</button>

                </div>
               
              </div>
              
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin">
                
              
            <div class="row">
                <div class="col-12 col-xl-12 mb-4 mb-xl-0">
                <div id="all-section">
                <div class="card">
                <div class="card-body">
     
                        <div class="row">
                             <div class="col-md-6 mb-4 stretch-card transparent">
                                <h2 class="font-weight-bold">IMEI:66666666666</h2>
                             </div>
                             <div class="col-md-6 mb-4 justify-content-end  ">
                                <button type="button" class="btn btn-primary">Move to Sell Out</button>
                            </div>
                        </div>
                         <p>Activity for IMEI:66666666666</p>
                         <div class="col-12 col-xl-12 mb-4 mb-xl-0">
                           Sell in<br>
                          Vivo Y11(3/32GB)was purchased on Sat, Jun 18, 2023.<br>
                           Purchase Invoice: N/A<br>
                            This product is there in your stocks for 639 Days<br>

                        </div>
                   
                       
                      </div>
                     </div>
                   </div>
                </div> 
            </div>
            
        </div>

    </div>
       
    <div class="row">
                <div class="col-12 col-xl-12 mb-4 mb-xl-0">
                <div id="all-section">
                <div class="card">
                <div class="card-body">
     
                        <div class="row">
                             <div class="col-md-6 mb-4 stretch-card transparent">
                                <h2 class="font-weight-bold">IMEI:444444444444</h2>
                             </div>
                             <div class="col-md-6 mb-4 justify-content-end  ">
                                <button type="button" class="btn btn-primary">Move to Sell Out</button>
                            </div>
                        </div>
                         <p>Activity for IMEI:444444444444</p>
                         <div class="col-12 col-xl-12 mb-4 mb-xl-0">
                           Sell in<br>
                          Vivo Y11(3/32GB)was purchased on Sat, Jun 18, 2023.<br>
                           Purchase Invoice: N/A<br>
                            This product is there in your stocks for 639 Days<br>

                        </div>
                   
                       
                      </div>
                     </div>
                   </div>
                </div> 
            </div>
            <!-- second page -->
            

            <!-- Third page -->
            

            <!-- Fourth page -->
 
    


         
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
 
    <script>
        document.getElementById('all-section-btn').addEventListener('click', function() {
            document.getElementById('all-section').style.display = 'block';
            document.getElementById('activated').style.display = 'none';
            document.getElementById('sale-in').style.display = 'none';
            document.getElementById('sale-out').style.display = 'none';
            document.getElementById('all-section-btn').classList.add('active');
            document.getElementById('activated').classList.remove('active');
            document.getElementById('sale-in-btn').classList.remove('active');
            document.getElementById('sale-out-btn').classList.remove('active');
        });

        document.getElementById('activated-btn').addEventListener('click', function() {
            document.getElementById('activated').style.display = 'block';
            document.getElementById('all-section').style.display = 'none';
            document.getElementById('sale-in').style.display = 'none';
            document.getElementById('sale-out').style.display = 'none';
            document.getElementById('activated-btn').classList.add('active');
            document.getElementById('all-section').classList.remove('active');
            document.getElementById('sale-in-btn').classList.remove('active');
            document.getElementById('sale-out-btn').classList.remove('active');
        });

        document.getElementById('sell-in-btn').addEventListener('click', function() {
            document.getElementById('sell-in').style.display = 'block';
            document.getElementById('activated').style.display = 'none';
            document.getElementById('all-section').style.display = 'none';
            document.getElementById('sale-out').style.display = 'none';
            document.getElementById('sell-in-btn').classList.add('active');
            document.getElementById('activated').classList.remove('active');
            document.getElementById('all-section-btn').classList.remove('active');
            document.getElementById('sale-out-btn').classList.remove('active');
        });

        document.getElementById('sell-out-btn').addEventListener('click', function() {
            document.getElementById('sell-out').style.display = 'block';
            document.getElementById('activated').style.display = 'none';
            document.getElementById('sale-in').style.display = 'none';
            document.getElementById('all-section').style.display = 'none';
            document.getElementById('sell-out-btn').classList.add('active');
            document.getElementById('activated').classList.remove('active');
            document.getElementById('sale-in-btn').classList.remove('active');
            document.getElementById('all-section-btn').classList.remove('active');
        });


    </script>
</body>






        </div>