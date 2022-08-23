<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
  <meta name="description" content="bootstrap material admin template" />
  <meta name="author" content="" />

  <title>BODC CYBER APPS | ADMIN</title>

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/css/bootstrap-extend.min.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/mmenu/assets/css/site.min.css" />

  <!-- Plugins -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/animsition/animsition.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/asscrollable/asScrollable.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/switchery/switchery.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/intro-js/introjs.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/slidepanel/slidePanel.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/jquery-mmenu/jquery-mmenu.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/flag-icon-css/flag-icon.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/waves/waves.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/chartist/chartist.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/jvectormap/jquery-jvectormap.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/mmenu/assets/examples/css/dashboard/v1.css" />

  <!-- Fonts -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/fonts/material-design/material-design.min.css" />
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/fonts/brand-icons/brand-icons.min.css" />
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic" />

  <!-- Scripts -->
  <script src="<?= base_url(); ?>assets/global/vendor/breakpoints/breakpoints.js"></script>
  <script>
    Breakpoints();
  </script>
</head>

<body class="animsition site-navbar-small dashboard">
  <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided"
        data-toggle="menubar">
        <span class="sr-only">Toggle navigation</span>
        <span class="hamburger-bar"></span>
      </button>
      <button type="button" class="navbar-toggler collapsed" data-target="#site-navbar-collapse" data-toggle="collapse">
        <i class="icon md-more" aria-hidden="true"></i>
      </button>
      <div class="navbar-brand navbar-brand-center site-gridmenu-toggle" data-toggle="gridmenu">
        <img class="navbar-brand-logo" src="assets/mmenu/assets/images/logo.png" title="Remark" />
        <span class="navbar-brand-text hidden-xs-down">BODC APPS</span>
      </div>
    </div>

    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">
          <li class="nav-item hidden-float" id="toggleMenubar">
            <a class="nav-link" data-toggle="menubar" href="#" role="button">
              <i class="icon hamburger hamburger-arrow-left">
                <span class="sr-only">Toggle menubar</span>
                <span class="hamburger-bar"></span>
              </i>
            </a>
          </li>
          <li class="nav-item hidden-sm-down" id="toggleFullscreen">
            <a class="nav-link icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
              <span class="sr-only">Toggle fullscreen</span>
            </a>
          </li>
        </ul>
        <!-- End Navbar Toolbar -->
        <!-- Navbar Toolbar Right -->
        <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
          <li class="nav-item dropdown">
            <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false"
              data-animation="scale-up" role="button">
              <span class="avatar avatar-online">
                <img src="<?= base_url(); ?>assets/global/portraits/5.jpg" alt="..." />
                <i></i>
              </span>
            </a>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon md-account"
                  aria-hidden="true"></i> <?php echo $this->session->name;?></a>
              <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon md-accounts-list"
                  aria-hidden="true"></i> <?php echo $this->session->username;?></a>
              <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon md-calendar"
                  aria-hidden="true"></i> <?php echo date('d-F-Y');?></a>
              <a class="dropdown-item" href="<?php echo base_url().'Auth/logout';?>" role="menuitem"><i class="icon md-power"
                  aria-hidden="true"></i> Logout</a>
            </div>
          </li>
        </ul>
        <!-- End Navbar Toolbar Right -->
      </div>
      <!-- End Navbar Collapse -->
    </div>
  </nav>
  <div class="site-menubar">
    <ul class="site-menu">
      <li class="site-menu-item">
        <a class="animsition-link" href="<?php echo base_url().'Admin/add_data_unit';?>">
          <i class="site-menu-icon icon md-home" style="font-size: 20px" aria-hidden="true"></i>
          <span class="site-menu-title">Add Data Unit</span>
        </a>
      </li>
      <li class="site-menu-item has-sub">
        <a href="<?php echo base_url().'Admin/user_management';?>">
          <i class="site-menu-icon icon md-chart" style="font-size: 20px" aria-hidden="true"></i>
          <span class="site-menu-title">User Management</span>
        </a>
      </li>
      <!-- <li class="site-menu-item has-sub">
        <a href="<?php echo base_url().'Admin/data_management';?>">
          <i class="site-menu-icon icon md-trending-up" style="font-size: 20px" aria-hidden="true"></i>
          <span class="site-menu-title">Data Management</span>
        </a> -->
      </li>
      <li class="site-menu-item has-sub">
        <a href="<?php echo base_url().'Admin2/plan_target';?>">
          <i class="site-menu-icon icon md-timer" style="font-size: 20px" aria-hidden="true"></i>
          <span class="site-menu-title">Plan / Target</span>
        </a>
      </li>
    </ul>
  </div>

  <!-- Page -->
  <div class="page">
    <div class="page-content container-fluid">
      <div class="row" data-plugin="matchHeight" data-by-row="true">
        <div class="col-xl-12 col-md-12 text-left mb-15">
          <h2 style="color:#9C3112; margin-left: 65px;"><b>BODC SYSTEM</b></h2>
          <h4 style="margin-left: 65px;"><b>SUPER ADMIN</b></h4>
        </div>
        <div class="container" style="padding-left: 13.0715rem; padding-right: 13.0715rem;">
          <div class="row">
            <div class="col-6 col-md-6 col-sm-12">
              <div class="card card-shadow" id="widgetLineareaTwo">
                <div class="card-block p-20 pt-10">
                  <div class="clearfix">
                    <div class="text-center">
                      <i class="md-home" style="font-size: 50px;"></i>
                    </div>
                    <div class="grey-800 py-10 text-center">
                      <h4><b>Add Data Unit</b></h4>
                      <p>Add Unit Data & Status</p>
                    </div>
                    <span class="float-right grey-700 font-size-30"></span>
                  </div>
                  <div class="text-center">
                    <a href="<?php echo base_url().'Admin/add_data_unit';?>" class="btn btn-raised btn-default btn-block waves-effect waves-classic">
                      <h5>Add</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-6 col-md-6 col-sm-12">
              <div class="card card-shadow" id="widgetLineareaTwo">
                <div class="card-block p-20 pt-10">
                  <div class="clearfix">
                    <div class="text-center">
                      <i class="md-chart" style="font-size: 50px;"></i>
                    </div>
                    <div class="grey-800 py-10 text-center">
                      <h4><b>User Management</b></h4>
                      <p>Add Admin & Dispacher</p>
                    </div>
                    <span class="float-right grey-700 font-size-30"></span>
                  </div>
                  <div class="text-center">
                    <a href="<?php echo base_url().'Admin/user_management';?>" class="btn btn-raised btn-default btn-block waves-effect waves-classic">
                      <h5>Manage</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-10 col-md-10 col-sm-12" style="max-width: 80.333333% !important; width: 10rem">
              <div class="card card-shadow" id="widgetLineareaTwo">
                <div class="card-block p-20 pt-10">
                  <div class="clearfix">
                    <div class="text-center">
                      <i class="md-timer" style="font-size: 50px;"></i>
                    </div>
                    <div class="grey-800 py-10 text-center">
                      <h4><b>Plan / Target</b></h4>
                      <p>Add Plan / Target</p>
                    </div>
                    <span class="float-right grey-700 font-size-30"></span>
                  </div>
                  <div class="text-center">
                    <a href="<?php echo base_url().'Admin2/plan_target';?>" class="btn btn-raised btn-default btn-block waves-effect waves-classic">
                      <h5>Add</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="col-6 col-md-6 col-sm-12">
              <div class="card card-shadow" id="widgetLineareaTwo">
                <div class="card-block p-20 pt-10">
                  <div class="clearfix">
                    <div class="text-center">
                      <i class="md-trending-up" style="font-size: 50px;"></i>
                    </div>
                    <div class="grey-800 py-10 text-center">
                      <h4><b>Data Management</b></h4>
                      <p>Manage All Data</p>
                    </div>
                    <span class="float-right grey-700 font-size-30"></span>
                  </div>
                  <div class="text-center">
                    <a href="<?php echo base_url().'Admin/data_management';?>" class="btn btn-raised btn-default btn-block waves-effect waves-classic">
                      <h5>Manage</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div> -->
          </div>

          <!-- <div class="row">
            <div class="col-10 col-md-10 col-sm-12" style="max-width: 80.333333% !important; width: 10rem">
              <div class="card card-shadow" id="widgetLineareaTwo">
                <div class="card-block p-20 pt-10">
                  <div class="clearfix">
                    <div class="text-center">
                      <i class="md-trending-up" style="font-size: 50px;"></i>
                    </div>
                    <div class="grey-800 py-10 text-center">
                      <h4><b>Data Management</b></h4>
                      <p>Manage All Data</p>
                    </div>
                    <span class="float-right grey-700 font-size-30"></span>
                  </div>
                  <div class="text-center">
                    <a href="<?php echo base_url().'Admin/data_management';?>" class="btn btn-raised btn-default btn-block waves-effect waves-classic">
                      <h5>Manage</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div> -->

        </div>
      </div>
    </div>
  </div>
  <!-- End Page -->
  <!-- Core  -->
  <script src="<?= base_url(); ?>assets/global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
  <script src="<?= base_url(); ?>assets/global/vendor/jquery/jquery.js"></script>
  <script src="<?= base_url(); ?>assets/global/vendor/popper-js/umd/popper.min.js"></script>
  <script src="<?= base_url(); ?>assets/global/vendor/bootstrap/bootstrap.js"></script>
  <script src="<?= base_url(); ?>assets/global/vendor/animsition/animsition.js"></script>
  <script src="<?= base_url(); ?>assets/global/vendor/mousewheel/jquery.mousewheel.js"></script>
  <script src="<?= base_url(); ?>assets/global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
  <script src="<?= base_url(); ?>assets/global/vendor/asscrollable/jquery-asScrollable.js"></script>
  <script src="<?= base_url(); ?>assets/global/vendor/waves/waves.js"></script>

  <!-- Plugins -->
  <script src="<?= base_url(); ?>assets/global/vendor/jquery-mmenu/jquery.mmenu.min.all.js"></script>
  <script src="<?= base_url(); ?>assets/global/vendor/switchery/switchery.js"></script>
  <script src="<?= base_url(); ?>assets/global/vendor/intro-js/intro.js"></script>
  <script src="<?= base_url(); ?>assets/global/vendor/screenfull/screenfull.js"></script>
  <script src="<?= base_url(); ?>assets/global/vendor/slidepanel/jquery-slidePanel.js"></script>
  <script src="<?= base_url(); ?>assets/global/vendor/chartist/chartist.min.js"></script>
  <script src="<?= base_url(); ?>assets/global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.js"></script>
  <script src="<?= base_url(); ?>assets/global/vendor/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="<?= base_url(); ?>assets/global/vendor/jvectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
  <script src="<?= base_url(); ?>assets/global/vendor/matchheight/jquery.matchHeight-min.js"></script>
  <script src="<?= base_url(); ?>assets/global/vendor/peity/jquery.peity.min.js"></script>

  <!-- Scripts -->
  <script src="<?= base_url(); ?>assets/global/js/Component.js"></script>
  <script src="<?= base_url(); ?>assets/global/js/Plugin.js"></script>
  <script src="<?= base_url(); ?>assets/global/js/Base.js"></script>
  <script src="<?= base_url(); ?>assets/global/js/Config.js"></script>

  <script src="<?= base_url(); ?>assets/mmenu/assets/js/Section/Menubar.js"></script>
  <script src="<?= base_url(); ?>assets/mmenu/assets/js/Section/Sidebar.js"></script>
  <script src="<?= base_url(); ?>assets/mmenu/assets/js/Section/PageAside.js"></script>
  <script src="<?= base_url(); ?>assets/mmenu/assets/js/Section/GridMenu.js"></script>

  <!-- Config -->
  <script src="<?= base_url(); ?>assets/global/js/config/colors.js"></script>
  <script src="<?= base_url(); ?>assets/mmenu/assets/js/config/tour.js"></script>

  <!-- Page -->
  <script src="<?= base_url(); ?>assets/mmenu/assets/js/Site.js"></script>
  <script src="<?= base_url(); ?>assets/global/js/Plugin/asscrollable.js"></script>
  <script src="<?= base_url(); ?>assets/global/js/Plugin/slidepanel.js"></script>
  <script src="<?= base_url(); ?>assets/global/js/Plugin/switchery.js"></script>
  <script src="<?= base_url(); ?>assets/global/js/Plugin/matchheight.js"></script>
  <script src="<?= base_url(); ?>assets/global/js/Plugin/jvectormap.js"></script>
  <script src="<?= base_url(); ?>assets/global/js/Plugin/peity.js"></script>

  <script src="<?= base_url(); ?>assets/mmenu/assets/examples/js/dashboard/v1.js"></script>
</body>

</html>