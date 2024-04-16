

    <!--main panel-->
    <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0"> <h4>Scan/Enter IMEI's to track</h4>
                  
                  <div class="col-md-12 grid-margin">
                  <input type="text" class="form-control p-2" placeholder="Enter Imeis to Scan" value="" >  
                  </div>
                  <button type=" button "  id="all-btn" class="btn btn-primary ">All</button>
                  <button type="button"  id="activated-btn" class="btn btn-primary active ">Activated</button>
                  <button type="button"  id="in-btn" class="btn btn-primary active ">Sell In</button>
                  <button type="button"  id="out-btn" class="btn btn-primary active ">Sell Out</button>
                </div>
               
              </div>
              
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin">
            <?php if ($msg = $this->session->flashdata('msg')):
                                  $msg_class = $this->session->flashdata('msg_class') ?>
                                  <div class="row">
                                <div class="col-lg-6" >
                                   <div class="alert  <?= $msg_class; ?>"style="width: 460px;"><?= $msg; ?></div>
                               </div>
                                     </div>
                                       <?php
                                        $this->session->unset_userdata('msg');
                                       endif; ?>
					
					
              
              <div class="row">
                <div class="col-12 col-xl-12 mb-4 mb-xl-0">
                <div id="all-section">
<!--first------------------------------------------------- -->
                    <div class="card">
                <div class="card-body">
                <div class="row">
                             <div class="col-md-6 mb-4 stretch-card transparent">
                                <h2 class="font-weight-bold">IMEI:00000000000111</h2>
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
                </div> </div>
               
              </div>
            </div>
          </div>
  <!------Second---------------------------------------------->                           
          <div class="row">
            <div class="col-md-12 grid-margin">
              
              <div class="row">
                <div class="col-12 col-xl-12 mb-4 mb-xl-0">
                <div id="activated-section" style="display: none;">
                    <div class="row">
            <div class="col-md-12 grid-margin">
                    
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
            <div class="row">
            <div class="col-md-12 grid-margin">
                    
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
          </div>        
          </div>
<!-- third ---------------------------------------------------------->
          <div class="row">
            <div class="col-md-12 grid-margin">
              
              <div class="row">
                <div class="col-12 col-xl-12 mb-4 mb-xl-0">
                <div id="in-section" style="display: none;">
                    <div class="row">
            <div class="col-md-12 grid-margin">
                    
                    <div class="card">
                <div class="card-body">
                <div class="row">
                             <div class="col-md-6 mb-4 stretch-card transparent">
                                <h2 class="font-weight-bold">IMEI:222222222</h2>
                             </div>
                             <div class="col-md-6 mb-4 justify-content-end  ">
                                <button type="button" class="btn btn-primary">Move to Sell Out</button>
                            </div>
                        </div>
                         <p>Activity for IMEI:2222222222</p>
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
            <div class="row">
            <div class="col-md-12 grid-margin">
                    
                    <div class="card">
                <div class="card-body">
                <div class="row">
                             <div class="col-md-6 mb-4 stretch-card transparent">
                                <h2 class="font-weight-bold">IMEI:88888888</h2>
                             </div>
                             <div class="col-md-6 mb-4 justify-content-end  ">
                                <button type="button" class="btn btn-primary">Move to Sell Out</button>
                            </div>
                        </div>
                         <p>Activity for IMEI:888888888</p>
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
          </div>
          </div>
<!--four  ------------------------------------------------->
          <div class="row">
            <div class="col-md-12 grid-margin">
              
              <div class="row">
                <div class="col-12 col-xl-12 mb-4 mb-xl-0">
                <div id="out-section" style="display: none;">
                    <div class="row">
            <div class="col-md-12 grid-margin">
                    
                    <div class="card">
                <div class="card-body">
                <div class="row">
                             <div class="col-md-6 mb-4 stretch-card transparent">
                                <h2 class="font-weight-bold">IMEI:584884515</h2>
                             </div>
                             <div class="col-md-6 mb-4 justify-content-end  ">
                                <button type="button" class="btn btn-primary">Move to Sell Out</button>
                            </div>
                        </div>
                         <p>Activity for IMEI:548551548412154</p>
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
            <div class="row">
            <div class="col-md-12 grid-margin">
                    
                    <div class="card">
                <div class="card-body">
                <div class="row">
                             <div class="col-md-6 mb-4 stretch-card transparent">
                                <h2 class="font-weight-bold">IMEI:49787841548</h2>
                             </div>
                             <div class="col-md-6 mb-4 justify-content-end  ">
                                <button type="button" class="btn btn-primary">Move to Sell Out</button>
                            </div>
                        </div>
                         <p>Activity for IMEI:15496658484</p>
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
          </div>
        </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
   <script>
        document.getElementById('all-btn').addEventListener('click', function() {
            document.getElementById('all-section').style.display = 'block';
            document.getElementById('activated-section').style.display = 'none';
            document.getElementById('in-section').style.display = 'none';
            document.getElementById('out-section').style.display = 'none';
            document.getElementById('all-btn').classList.add('active');
            document.getElementById('activated-btn').classList.remove('active');
            document.getElementById('in-btn').classList.remove('active');
            document.getElementById('out-btn').classList.remove('active');
        });

        document.getElementById('activated-btn').addEventListener('click', function() {
            document.getElementById('activated-section').style.display = 'block';
            document.getElementById('all-section').style.display = 'none';
            document.getElementById('in-section').style.display = 'none';
            document.getElementById('out-section').style.display = 'none';
            document.getElementById('activated-btn').classList.add('active');
            document.getElementById('all-btn').classList.remove('active');
            document.getElementById('in-btn').classList.remove('active');
            document.getElementById('out-btn').classList.remove('active');
        });

        document.getElementById('in-btn').addEventListener('click', function() {
            document.getElementById('in-section').style.display = 'block';
            document.getElementById('all-section').style.display = 'none';
            document.getElementById('activated-section').style.display = 'none';
            document.getElementById('out-section').style.display = 'none';
            document.getElementById('in-btn').classList.add('active');
            document.getElementById('all-btn').classList.remove('active');
            document.getElementById('activated-btn').classList.remove('active');
            document.getElementById('out-btn').classList.remove('active');
        });

        document.getElementById('out-btn').addEventListener('click', function() {
            document.getElementById('out-section').style.display = 'block';
            document.getElementById('all-section').style.display = 'none';
            document.getElementById('activated-section').style.display = 'none';
            document.getElementById('in-section').style.display = 'none';
            document.getElementById('out-btn').classList.add('active');
            document.getElementById('all-btn').classList.remove('active');
            document.getElementById('activated-btn').classList.remove('active');
            document.getElementById('in-btn').classList.remove('active');
        });
    </script>
</body>






        </div>