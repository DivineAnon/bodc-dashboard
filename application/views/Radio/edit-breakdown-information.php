<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
 <meta charset="utf-8" />
 <meta http-equiv="X-UA-Compatible" content="IE=edge" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
 <meta name="description" content="bootstrap material admin template" />
 <meta name="author" content="" />

 <title>BODC CYBER APPS | RADIO</title>
  
  <link rel="apple-touch-icon" href="<?= base_url(); ?>assets/mmenu/assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="<?= base_url(); ?>assets/mmenu/assets/images/favicon.ico">

 <!-- Stylesheets --> 
 <link rel="stylesheet" href="<?= base_url(); ?>assets/global/css/bootstrap.min.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/global/css/bootstrap-extend.min.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/mmenu/assets/css/site.min.css">

 <!-- Plugins -->
 <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/bootstrap-sweetalert/sweetalert.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/animsition/animsition.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/asscrollable/asScrollable.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/switchery/switchery.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/intro-js/introjs.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/slidepanel/slidePanel.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/jquery-mmenu/jquery-mmenu.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/flag-icon-css/flag-icon.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/waves/waves.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/select2/select2.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/bootstrap-tokenfield/bootstrap-tokenfield.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/bootstrap-select/bootstrap-select.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/icheck/icheck.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/switchery/switchery.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/asrange/asRange.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/ionrangeslider/ionrangeslider.min.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/asspinner/asSpinner.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/clockpicker/clockpicker.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/ascolorpicker/asColorPicker.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/bootstrap-touchspin/bootstrap-touchspin.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/jquery-labelauty/jquery-labelauty.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/bootstrap-datepicker/bootstrap-datepicker.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/bootstrap-maxlength/bootstrap-maxlength.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/timepicker/jquery-timepicker.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/jquery-strength/jquery-strength.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/multi-select/multi-select.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/typeahead-js/typeahead.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/mmenu/assets/examples/css/forms/advanced.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/datatables.net-bs4/dataTables.bootstrap4.css">
 <link rel="stylesheet"
  href="<?= base_url(); ?>assets/global/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.css">
 <link rel="stylesheet"
  href="<?= base_url(); ?>assets/global/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/mmenu/assets/examples/css/tables/datatable.css">


 <!-- Fonts -->
 <link rel="stylesheet" href="<?= base_url(); ?>assets/global/fonts/material-design/material-design.min.css">
 <link rel="stylesheet" href="<?= base_url(); ?>assets/global/fonts/brand-icons/brand-icons.min.css">
 <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:700,400,500,700italic'>

 <style>
    input:focus, textarea:focus, .select2-container *:focus {
        border: 2px solid blue;
    }
  </style>

 <!-- Scripts -->
 <script src="<?= base_url(); ?>assets/global/vendor/breakpoints/breakpoints.js"></script>
 <script>
  Breakpoints();
 </script>
</head>

<body class="animsition site-navbar-small dashboard">
  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
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
        <img class="navbar-brand-logo" src="<?= base_url(); ?>assets/mmenu/assets/images/logo.png" title="Remark" />
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
            <a href="<?= base_url('radio/breakdown') ?>" class="nav-link waves-effect waves-light waves-round">
              <i class="icon md-arrow-left" style="font-size: 20px;">&nbsp;Back</i>
            </a>
          </li>
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
      <!-- <li class="site-menu-item active">
        <a class="animsition-link" href="<?= base_url('radio'); ?>">
          <i class="site-menu-icon icon md-home" style="font-size: 20px" aria-hidden="true"></i>
          <span class="site-menu-title">Dashboard</span>
        </a>
      </li> -->
      <li class="site-menu-item has-sub">
        <a href="<?= base_url('radio/hourly_report'); ?>">
          <i class="site-menu-icon icon md-chart" style="font-size: 20px" aria-hidden="true"></i>
          <span class="site-menu-title">Hourly Report</span>
        </a>
      </li>
      <li class="site-menu-item has-sub">
        <a href="<?= base_url('radio/breakdown'); ?>">
          <i class="site-menu-icon icon md-trending-up" style="font-size: 20px" aria-hidden="true"></i>
          <span class="site-menu-title">Breakdown</span>
        </a>
      </li>
    </ul>
  </div>

 <!-- Page -->
 <div class="page">
  <div class="page-content container-fluid">
    <div class="page-content">
      <!-- Panel Basic -->
      <div class="panel" style="margin-left: 30px; margin-top: 30px !important;">
        <div class="panel-body">
          <div class="card-block">      
           <form action="<?= base_url('radio/update_breakdown'); ?>" method="POST" class="form-inline">
            <input type="hidden" name="id" value="<?= $breakdown['id']; ?>" required>
            <div class="col-lg-6 col-md-12 col-sm-12">
             <div class="row">
              <div class="col-lg-4 col-md-6 col-sm-12">
               <p style="margin-top: 10px;">Nomor Unit</p>
              </div>
              <div class="col-lg-8 col-md-6 col-sm-12">
                  <input type="hidden" class="form-control" name="no_unit" value="<?= $breakdown['no_unit']; ?>" style="width: 75%;" readonly>
                  <input type="text" class="form-control" name="nomor_unit" value="<?= $breakdown['Nomor_Unit']; ?>" style="width: 75%;" readonly>
              </div>
             </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                 <p style="margin-top: 10px;">Type Unit</p>
                </div>
                <div class="col-lg-8 col-md-6 col-sm-12">
                  <select name="type_unit" class="form-control select2" style="width: 75%;" required>
                    <option disabled selected>Pilih</option>
                    <?php
                      foreach ($unit_types as $u) {
                        $selected = '';
                        $readonly = '';
                        if ($isLoader) {
                          if ($u['id'] == '1') {
                            $selected = "selected";
                          } else {
                            $readonly = "disabled";
                          }
                        } else {
                          if ($u['id'] == '2') {
                            $selected = "selected";
                          } else {
                            $readonly = "disabled";
                          }
                        }
                    ?>

                    <option value="<?= $u['id']; ?>" <?= $selected . ' ' . $readonly; ?>>
                      <?= $u['nama']; ?>
                    </option>

                    <?php    
                      }
                    ?>
                    <!-- <?php
                      foreach ($unit_types as $u) {
                    ?>

                    <option value="<?= $u['id']; ?>" <?php if ($u['id'] == $breakdown['id_type_unit']) echo 'selected'; ?>><?= $u['nama']; ?></option>

                    <?php    
                      }
                    ?> -->
                  </select>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                 <p style="margin-top: 10px;">Lokasi</p>
                </div>
                <div class="col-lg-8 col-md-6 col-sm-12">
                  <input type="text" class="form-control" name="lokasi" value="<?= $breakdown['lokasi']; ?>" style="width: 75%;" required>
                  <!-- <select name="" class="form-control">
                    <option value="">Jalan Tengah</option>
                  </select> -->
                </div>
              </div>
            </div>
            <!-- <div class="col-lg-6 col-md-12 col-sm-12">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                 <p style="margin-top: 10px;">Type</p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                  <input type="text" class="form-control" name="type" value="<?= $breakdown['type']; ?>" required>
                </div>
              </div>
            </div> -->
            <div class="col-lg-6 col-md-12 col-sm-12">
             <div class="row">
              <div class="col-lg-4 col-md-6 col-sm-12">
               <p style="margin-top: 10px;">Tanggal</p>
              </div>
              <div class="col-lg-8 col-md-6 col-sm-12">
                  <input type="date" class="form-control" name="tanggal" value="<?= $breakdown['tgl_aktifitas']; ?>" required>
              </div>
             </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
             <div class="row">
              <div class="col-lg-4 col-md-6 col-sm-12">
               <p style="margin-top: 10px;">Start BD</p>
              </div>
              <div class="col-lg-8 col-md-6 col-sm-12">
                  <!-- <input type="Time" class="form-control" name="" value="04:40"> -->
                  <input type="time" class="form-control" name="start_bd" id="start_bd"  value="<?= date('H:i', strtotime($breakdown['start_bd'])); ?>" style="width: 75%;" required>
              </div>
             </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
             <div class="row">
              <div class="col-lg-4 col-md-6 col-sm-12">
               <p style="margin-top: 10px;">Breakdown Status</p>
              </div>
              <div class="col-lg-8 col-md-6 col-sm-12">
                  <select class="select2" name="standby_status" style="width: 75%;" required>
                    <option disabled selected>Pilih</option>
                    <option value="SCM" <?php if ($breakdown['standby_status'] == 'SCM') echo 'selected'; ?>>SCM</option>
                    <option value="USM" <?php if ($breakdown['standby_status'] == 'USM') echo 'selected'; ?>>USM</option>
                    <option value="TRM" <?php if ($breakdown['standby_status'] == 'TRM') echo 'selected'; ?>>TRM</option>
                    <option value="BCM" <?php if ($breakdown['standby_status'] == 'BCM') echo 'selected'; ?>>ICM</option>
                  </select>
              </div>
             </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
             <div class="row">
              <div class="col-lg-4 col-md-6 col-sm-12">
               <p style="margin-top: 10px;">RFU</p>
              </div>
              <div class="col-lg-8 col-md-6 col-sm-12">
                  <!-- <input type="time" class="form-control" name="" value="05:30"> -->
                  <input type="time" class="form-control" name="rfu" id="rfu" value="<?= date('H:i', strtotime($breakdown['rfu'])); ?>" style="width: 75%;" required>
              </div>
             </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                 <p style="margin-top: 10px;">Remark</p>
                </div>
                <div class="col-lg-8 col-md-6 col-sm-12">
                  <input type="text" class="form-control" name="remark" id="remark" value="<?= $breakdown['remark']; ?>" autocomplete="off" style="width: 75%;" required>
                  <!-- <select class="select2" name="remark" class="form-control" style="width: 100%" required>
                    <option disabled selected>Pilih</option>
                    <?php
                      foreach ($standby as $s) {
                    ?>

                    <option value="<?= $s['kode']; ?>" <?php if ($s['kode'] == $breakdown['remark']) echo 'selected'; ?>><?= $s['kode']; ?></option>

                    <?php    
                      }
                    ?>
                  </select> -->
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
             <div class="row">
              <div class="col-lg-4 col-md-6 col-sm-12">
               <p style="margin-top: 10px;">Lokasi RFU</p>
              </div>
              <div class="col-lg-8 col-md-6 col-sm-12">
                  <!-- <input type="time" class="form-control" name="" value="05:30"> -->
                  <input type="text" class="form-control" name="lokasi_rfu" id="lokasi_rfu" value="<?= $breakdown['lokasi_rfu']; ?>" autocomplete="off" style="width: 75%;" required>
              </div>
             </div>
            </div>
            <!-- <div class="col-lg-6 col-md-12 col-sm-12">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                 <p style="margin-top: 10px;">Jarak</p>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                  <input type="text" class="form-control" name="jarak" value="<?= $breakdown['jarak']; ?>" required>
                </div>
              </div>
            </div> -->
            <div class="col-12"></div>
            <div class="col-lg-6 col-md-12 col-sm-12">
             <div class="row">
              <div class="col-lg-4 col-md-6 col-sm-12">
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                <button class="btn btn-success">Save Changes</button>
              </div>
             </div>
            </div>
            </form>          
          </div>
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
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/jquery-mmenu/jquery.mmenu.min.all.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/switchery/switchery.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/intro-js/intro.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/screenfull/screenfull.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/slidepanel/jquery-slidePanel.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/select2/select2.full.min.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/bootstrap-tokenfield/bootstrap-tokenfield.min.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/bootstrap-select/bootstrap-select.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/icheck/icheck.min.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/switchery/switchery.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/asrange/jquery-asRange.min.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/ionrangeslider/ion.rangeSlider.min.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/asspinner/jquery-asSpinner.min.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/clockpicker/bootstrap-clockpicker.min.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/ascolor/jquery-asColor.min.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/asgradient/jquery-asGradient.min.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/ascolorpicker/jquery-asColorPicker.min.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/bootstrap-maxlength/bootstrap-maxlength.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/jquery-knob/jquery.knob.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/bootstrap-touchspin/bootstrap-touchspin.min.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/jquery-labelauty/jquery-labelauty.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/bootstrap-datepicker/bootstrap-datepicker.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/timepicker/jquery.timepicker.min.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/datepair/datepair.min.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/datepair/jquery.datepair.min.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/jquery-strength/password_strength.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/jquery-strength/jquery-strength.min.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/multi-select/jquery.multi-select.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/typeahead-js/bloodhound.min.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/typeahead-js/typeahead.jquery.min.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/jquery-placeholder/jquery.placeholder.js"></script>

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
   <script src="<?= base_url(); ?>assets/global/js/Plugin/select2.js"></script>
   <script src="<?= base_url(); ?>assets/global/js/Plugin/bootstrap-tokenfield.js"></script>
   <script src="<?= base_url(); ?>assets/global/js/Plugin/bootstrap-tagsinput.js"></script>
   <script src="<?= base_url(); ?>assets/global/js/Plugin/bootstrap-select.js"></script>
   <script src="<?= base_url(); ?>assets/global/js/Plugin/icheck.js"></script>
   <script src="<?= base_url(); ?>assets/global/js/Plugin/switchery.js"></script>
   <script src="<?= base_url(); ?>assets/global/js/Plugin/asrange.js"></script>
   <script src="<?= base_url(); ?>assets/global/js/Plugin/ionrangeslider.js"></script>
   <script src="<?= base_url(); ?>assets/global/js/Plugin/asspinner.js"></script>
   <script src="<?= base_url(); ?>assets/global/js/Plugin/clockpicker.js"></script>
   <script src="<?= base_url(); ?>assets/global/js/Plugin/ascolorpicker.js"></script>
   <script src="<?= base_url(); ?>assets/global/js/Plugin/bootstrap-maxlength.js"></script>
   <script src="<?= base_url(); ?>assets/global/js/Plugin/jquery-knob.js"></script>
   <script src="<?= base_url(); ?>assets/global/js/Plugin/bootstrap-touchspin.js"></script>
   <script src="<?= base_url(); ?>assets/global/js/Plugin/card.js"></script>
   <script src="<?= base_url(); ?>assets/global/js/Plugin/jquery-labelauty.js"></script>
   <script src="<?= base_url(); ?>assets/global/js/Plugin/bootstrap-datepicker.js"></script>
   <script src="<?= base_url(); ?>assets/global/js/Plugin/jt-timepicker.js"></script>
   <script src="<?= base_url(); ?>assets/global/js/Plugin/datepair.js"></script>
   <script src="<?= base_url(); ?>assets/global/js/Plugin/jquery-strength.js"></script>
   <script src="<?= base_url(); ?>assets/global/js/Plugin/multi-select.js"></script>
   <script src="<?= base_url(); ?>assets/global/js/Plugin/jquery-placeholder.js"></script>

   <script src="<?= base_url(); ?>assets/global/vendor/datatables.net/jquery.dataTables.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/datatables.net-bs4/dataTables.bootstrap4.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/datatables.net-fixedheader/dataTables.fixedHeader.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/datatables.net-fixedcolumns/dataTables.fixedColumns.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/datatables.net-rowgroup/dataTables.rowGroup.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/datatables.net-scroller/dataTables.scroller.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/datatables.net-responsive/dataTables.responsive.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/datatables.net-responsive-bs4/responsive.bootstrap4.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/datatables.net-buttons/dataTables.buttons.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/datatables.net-buttons/buttons.html5.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/datatables.net-buttons/buttons.flash.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/datatables.net-buttons/buttons.print.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/datatables.net-buttons/buttons.colVis.js"></script>
   <script src="<?= base_url(); ?>assets/global/vendor/datatables.net-buttons-bs4/buttons.bootstrap4.js"></script>
   <script src="<?= base_url(); ?>assets/mmenu/assets/examples/js/forms/advanced.js"></script>
   <script src="<?= base_url(); ?>assets/global/js/Plugin/datatables.js"></script>

   <script src="<?= base_url(); ?>assets/mmenu/assets/examples/js/tables/datatable.js"></script>
</body>

  <script>
    $(document).ready(function() {
      $('.select2').select2();
    })
  </script>

</html>