 <!-- partial:partials/_navbar.html -->
 <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
    <a class="navbar-brand brand-logo me-5" href=""><img src="<?= base_url() ?>/assets/images/SalesBroz.png" class="me-2"
        alt="SalesBroz" /></a>
    <a class="navbar-brand brand-logo-mini" href=""><img src="<?= base_url() ?>/assets/images/SalesBroz1.png"
        alt="logoo" /></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="icon-menu"></span>
    </button>
    <ul class="navbar-nav mr-lg-2">
      <li class="nav-item nav-search d-none d-lg-block">
        <div class="input-group">
          <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
            <span class="input-group-text" id="search">
              <i class="icon-search"></i>
            </span>
          </div>
          <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search"
            aria-describedby="search">
        </div>
      </li>
    </ul>
    <ul class="navbar-nav navbar-nav-right">
      <li class="nav-item dropdown">
        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
          <i class="icon-bell mx-0"></i>
          <span class="count"></span>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
          aria-labelledby="notificationDropdown">
          <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-success">
                <i class="ti-info-alt mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject font-weight-normal">Application Error</h6>
              <p class="font-weight-light small-text mb-0 text-muted">
                Just now
              </p>
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-warning">
                <i class="ti-settings mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject font-weight-normal">Settings</h6>
              <p class="font-weight-light small-text mb-0 text-muted">
                Private message
              </p>
            </div>
          </a>
          <a class="dropdown-item preview-item">
            <div class="preview-thumbnail">
              <div class="preview-icon bg-info">
                <i class="ti-user mx-0"></i>
              </div>
            </div>
            <div class="preview-item-content">
              <h6 class="preview-subject font-weight-normal">New user registration</h6>
              <p class="font-weight-light small-text mb-0 text-muted">
                2 days ago
              </p>
            </div>
          </a>
        </div>
      </li>
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
          <img src="<?= base_url() ?>/assets/images/faces/face28.jpg" alt="profile" />
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a class="dropdown-item">
            <i class="ti-settings text-primary"></i>
            Settings
          </a>
          <a class="dropdown-item">
            <i class="ti-power-off text-primary"></i>
            Logout
          </a>
        </div>
      </li>
      <li class="nav-item nav-settings d-none d-lg-flex">
        <a class="nav-link" href="#">
          <i class="icon-ellipsis"></i>
        </a>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
      data-toggle="offcanvas">
      <span class="icon-menu"></span>
    </button>
  </div>
</nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
  <div id="settings-trigger"><i class="ti-settings"></i></div>
  <div id="theme-settings" class="settings-panel">
    <i class="settings-close ti-close"></i>
    <p class="settings-heading">SIDEBAR SKINS</p>
    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
      <div class="img-ss rounded-circle bg-light border me-3"></div>Light
    </div>
    <div class="sidebar-bg-options" id="sidebar-dark-theme">
      <div class="img-ss rounded-circle bg-dark border me-3"></div>Dark
    </div>
    <p class="settings-heading mt-2">HEADER SKINS</p>
    <div class="color-tiles mx-0 px-4">
      <div class="tiles success"></div>
      <div class="tiles warning"></div>
      <div class="tiles danger"></div>
      <div class="tiles light"></div>
      <div class="tiles info"></div>
      <div class="tiles dark"></div>
      <div class="tiles default"></div>
    </div>
  </div>
</div>
<!--div id="right-sidebar" class="settings-panel">
  <i class="settings-close ti-close"></i>
  <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab"
        aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab"
        aria-controls="chats-section">CHATS</a>
    </li>
  </ul>
  <div class="tab-content" id="setting-content">
    <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel"
      aria-labelledby="todo-section">
      <div class="add-items d-flex px-3 mb-0">
        <form class="form w-100">
          <div class="form-group d-flex">
            <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
            <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
          </div>
        </form>
      </div>
      <div class="list-wrapper px-3">
        <ul class="d-flex flex-column-reverse todo-list">
          <li>
            <div class="form-check">
              <label class="form-check-label">
                <input class="checkbox" type="checkbox">
                Team review meeting at 3.00 PM
              </label>
            </div>
            <i class="remove ti-close"></i>
          </li>
          <li>
            <div class="form-check">
              <label class="form-check-label">
                <input class="checkbox" type="checkbox">
                Prepare for presentation
              </label>
            </div>
            <i class="remove ti-close"></i>
          </li>
          <li>
            <div class="form-check">
              <label class="form-check-label">
                <input class="checkbox" type="checkbox">
                Resolve all the low priority tickets due today
              </label>
            </div>
            <i class="remove ti-close"></i>
          </li>
          <li class="completed">
            <div class="form-check">
              <label class="form-check-label">
                <input class="checkbox" type="checkbox" checked>
                Schedule meeting for next week
              </label>
            </div>
            <i class="remove ti-close"></i>
          </li>
          <li class="completed">
            <div class="form-check">
              <label class="form-check-label">
                <input class="checkbox" type="checkbox" checked>
                Project review
              </label>
            </div>
            <i class="remove ti-close"></i>
          </li>
        </ul>
      </div>
      <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
      <div class="events pt-4 px-3">
        <div class="wrapper d-flex mb-2">
          <i class="ti-control-record text-primary me-2"></i>
          <span>Feb 11 2018</span>
        </div>
        <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
        <p class="text-gray mb-0">build a js based app</p>
      </div>
      <div class="events pt-4 px-3">
        <div class="wrapper d-flex mb-2">
          <i class="ti-control-record text-primary me-2"></i>
          <span>Feb 7 2018</span>
        </div>
        <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
        <p class="text-gray mb-0 ">Call Sarah Graves</p>
      </div>
    </div-->
    <!-- To do section tab ends -->
    <!--div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
      <div class="d-flex align-items-center justify-content-between border-bottom">
        <p class="settings-heading border-top-0 mb-3 ps-3 pt-0 border-bottom-0 pb-0">Friends</p>
        <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See
          All</small>
      </div>
      <ul class="chat-list">
        <li class="list active">
          <div class="profile"><img src="../assets/images/faces/face1.jpg" alt="image"><span
              class="online"></span></div>
          <div class="info">
            <p>Thomas Douglas</p>
            <p>Available</p>
          </div>
          <small class="text-muted my-auto">19 min</small>
        </li>
        <li class="list">
          <div class="profile"><img src="../assets/images/faces/face2.jpg" alt="image"><span
              class="offline"></span></div>
          <div class="info">
            <div class="wrapper d-flex">
              <p>Catherine</p>
            </div>
            <p>Away</p>
          </div>
          <div class="badge badge-success badge-pill my-auto mx-2">4</div>
          <small class="text-muted my-auto">23 min</small>
        </li>
        <li class="list">
          <div class="profile"><img src="../assets/images/faces/face3.jpg" alt="image"><span
              class="online"></span></div>
          <div class="info">
            <p>Daniel Russell</p>
            <p>Available</p>
          </div>
          <small class="text-muted my-auto">14 min</small>
        </li>
        <li class="list">
          <div class="profile"><img src="../assets/images/faces/face4.jpg" alt="image"><span
              class="offline"></span></div>
          <div class="info">
            <p>James Richardson</p>
            <p>Away</p>
          </div>
          <small class="text-muted my-auto">2 min</small>
        </li>
        <li class="list">
          <div class="profile"><img src="../assets/images/faces/face5.jpg" alt="image"><span
              class="online"></span></div>
          <div class="info">
            <p>Madeline Kennedy</p>
            <p>Available</p>
          </div>
          <small class="text-muted my-auto">5 min</small>
        </li>
        <li class="list">
          <div class="profile"><img src="../assets/images/faces/face6.jpg" alt="image"><span
              class="online"></span></div>
          <div class="info">
            <p>Sarah Graves</p>
            <p>Available</p>
          </div>
          <small class="text-muted my-auto">47 min</small>
        </li>
      </ul>
    </div>
    
  </div>
</div-->
<!-- chat tab ends -->
<!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url();?>home">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="editors">
        <i class="icon-book menu-icon"></i>
        <span class="menu-title">Stocks Mgmt</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>my_stock">My Stocks</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>stock_audit">Stocks Audit</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>add_your_model">Add your Models</a></li>
        </ul>
      </div>
    </li>
   
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url();?>my_employee">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">My Employee</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url();?>my_sales">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">My Sales</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url();?>my_purchase">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">My Purchase</span>
      </a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false"
        aria-controls="form-elements">
        <i class="icon-align-right menu-icon"></i>
        <span class="menu-title">My Invoice</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="form-elements">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>invoice">Invoice Dashboard</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>sale_invoice">Sales invoice</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>purchase_invoice">Purchase Invoice</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>invoice_setting">Invoice Settings</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url();?>ledger">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Ledger</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url();?>IMEI_tracker">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">IMEI Tracker</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url();?>price_drops">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Price Drops</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
        <i class="icon-book menu-icon"></i>
        <span class="menu-title">My Returns</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="editors">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>sales_return">Sales Return</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>purchase_return">Purchase Retun</a></li>
        </ul>
      </div>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="editors">
        <i class="icon-book menu-icon"></i>
        <span class="menu-title">Customer Relation</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>my_customer">My Customers</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>my_distributor">My Distributors</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="editors">
        <i class="icon-book menu-icon"></i>
        <span class="menu-title">Schemes Mgmt</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-advanced">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>scheme_dashboard">Schemes Dashboard</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>add_your_scheme">Add Your Schemes</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>my_earnings">My Earnings</a></li>
          <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>my_retailer_types">My Retailer Types</a></li>
        </ul>
      </div>
    </li>
   
   
    
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url();?>welcome">
        <i class="icon-power menu-icon"></i>
        <span class="menu-title">Logout</span>
      </a>
    </li>
   
  </ul>
</nav>
      <!-- partial -->