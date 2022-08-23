<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
  <meta name="description" content="bootstrap material admin template" />
  <meta name="author" content="" />

  <title>BODC CYBER APPS | VALIDATOR</title>

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/mmenu/assets/css/site.min.css">

  <!-- Plugins -->
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
  <link rel="stylesheet"
    href="<?= base_url(); ?>assets/global/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.css">
  <link rel="stylesheet"
    href="<?= base_url(); ?>assets/global/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.css">
  <link rel="stylesheet"
    href="<?= base_url(); ?>assets/global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/mmenu/assets/examples/css/tables/datatable.css">


  <!-- Fonts -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/fonts/material-design/material-design.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:700,400,500,700italic'>

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
        <img class="navbar-brand-logo" src="../../assets/mmenu/assets/images/logo.png" title="Remark" />
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
            <a href="<?php echo base_url().'Validator/daily_report';?>" class="nav-link waves-effect waves-light waves-round">
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
      <li class="site-menu-item active">
        <a class="animsition-link" href="index.html">
          <i class="site-menu-icon icon md-home" style="font-size: 20px" aria-hidden="true"></i>
          <span class="site-menu-title">All Data Report</span>
        </a>
      </li>
      <li class="site-menu-item has-sub">
        <a href="<?php echo base_url().'Validator/daily_report';?>">
          <i class="site-menu-icon icon md-chart" style="font-size: 20px" aria-hidden="true"></i>
          <span class="site-menu-title">Daily Report</span>
        </a>
      </li>
      <li class="site-menu-item has-sub">
        <a href="<?php echo base_url().'Validator/hourly_report';?>">
          <i class="site-menu-icon icon md-time" style="font-size: 20px" aria-hidden="true"></i>
          <span class="site-menu-title">Hourly Report</span>
        </a>
      </li>
    </ul>
  </div>
  <!-- Page -->
  <div class="page">
    <div class="page-content container-fluid">
      <div class="row">
          <div class="col-12 col-md-6 col-sm-12" style="margin-left: 180px; margin-top: 10px;">
            <div class="panel">
              <header class="panel-heading text-center">
                <div class="panel-actions"></div>
                <h1 class="panel-title" style="background:#0267ca; color: #fff; font-size: large; text-align: left;">
                  Unit
                  Status</h1>
              </header>
              <div class="card" style="color: #000000;">
                <div class="card-block"
                  style="padding: 0.429rem !important; display: flex; flex-flow: row wrap; align-items: center;">
                  <div class="col-12 col-md-6 col-sm-12">
                    <p>Nomor Unit : <?php echo $unit_status[0]['no_unit'];?></p>
                  </div>
                  <div class="col-12 col-md-6 col-sm-12">
                    <p>Loader : <?php echo $unit_status[0]['loader'];?></p>
                  </div>
                  <div class="col-12 col-md-6 col-sm-12">
                    <p>Kode Proses : <?php echo $unit_status[0]['name_proses'];?></p>
                  </div>
                  <div class="col-12 col-md-6 col-sm-12">
                    <p>Loading Point : <?php echo $unit_status[0]['loading_point'];?></p>
                  </div>
                  <div class="col-12 col-md-6 col-sm-12">
                    <p>Dumping Area : <?php echo $unit_status[0]['dumping_area'];?></p>
                  </div>
                  <div class="col-12 col-md-6 col-sm-12">
                    <p>Kode Aktivitas : <?php echo $unit_status[0]['name_aktifitas'];?></p>
                  </div>
                  <div class="col-12 col-md-12 col-sm-12">
                    <p>Jarak (KM) : <?php echo $unit_status[0]['jarak'];?></p>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 mt-15">
                    <h4>Total (BCM/TON) : <strong><?php echo $operator_information[0]['total_ton'];?></strong></h4>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 mt-15">
                    <h4>Total HM : <strong><?php echo $operator_information[0]['total_hm'];?></strong></h4>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 mt-15">
                    <h4>Total Ritasi : <strong><?php echo $operator_information[0]['total_ritasi'];?></strong></h4>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 mt-15">
                    <h4>Total KM : <strong><?php echo $operator_information[0]['total_km'];?></strong></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-sm-12" style="margin-top: 10px;">
            <div class="row">
              <div class="col-12 col-md-12 col-sm-12">
                <div class="panel">
                  <header class="panel-heading text-center">
                    <div class="panel-actions"></div>
                    <h1 class="panel-title"
                      style="background:#0267ca; color: #fff; font-size: large; text-align: left;">
                      Operator Information</h1>
                  </header>
                  <div class="card" style="color: #000000;">
                    <div class="card-block" style="display: flex; flex-flow: row wrap; align-items: center;">
                      <div class="col-lg-6 col-md-8 col-sm-12">
                        <p>Nama Operator : <strong><?php echo $operator_information[0]['first_name'].' '.$operator_information[0]['last_name'];?></strong></p>
                      </div>
                      <div class="col-lg-6 col-md-4 col-sm-12">
                        <p>Tanggal Aktivitas : <strong><?php echo $operator_information[0]['tgl_aktifitas'];?></strong></p>
                      </div>
                      <div class="col-lg-6 col-md-8 col-sm-12">
                        <p>NRP : <strong><?php echo $operator_information[0]['nrp'];?></strong></p>
                      </div>
                      <div class="col-lg-6 col-md-4 col-sm-12">
                        <p>Total Jam OPT : <strong><?php echo $operator_information[0]['total_jm_opt'];?></strong></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-12 col-sm-12">
                <div class="panel">
                  <header class="panel-heading text-center">
                    <div class="panel-actions"></div>
                    <h1 class="panel-title"
                      style="background:#0267ca; color: #fff; font-size: large; text-align: left;">
                      Imputer Information</h1>
                  </header>
                  <div class="card" style="color: #000000;">
                    <div class="card-block" style="display: flex; flex-flow: row wrap; align-items: center;">
                      <div class="col-lg-6 col-md-8 col-sm-12">
                        <p>Nama Imputer : <strong><?php echo $imputer_information[0]['name'];?></strong></p>
                      </div>
                      <div class="col-lg-6 col-md-4 col-sm-12">
                        <p>Tanggal Input : <strong><?php echo $imputer_information[0]['tgl_aktifitas'];?></strong></p>
                      </div>
                      <div class="col-lg-6 col-md-8 col-sm-12">
                        <p>NRP : <strong><?php echo $imputer_information[0]['nrp'];?></strong></p>
                      </div>
                      <div class="col-lg-6 col-md-4 col-sm-12">
                        <p>Jam Input : <strong><?php echo $imputer_information[0]['jm_opt_awal'];?></strong></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-10 col-sm-12 mt-15" style="margin-left: 152px;">
            <!-- Panel Basic -->
            <div class="panel" style="margin-left: 30px;">
              <header class="panel-heading text-center">
                <div class="panel-actions"></div>
                <h1 class="panel-title" style="background:#0267ca; color: #fff; font-size: large; text-align: left;">
                  Standby
                  Status</h1>
              </header>
              <div class="panel-body mt-10" style="background:#FAFAFA">
                <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                  <thead>
                    <tr>
                      <th>Standby</th>
                      <th>Waktu 1</th>
                      <th>Waktu 2</th>
                      <th>Waktu 3</th>
                      <th>Waktu 4</th>
                      <th>Keterangan</th>
                      <!-- <th>Breakdown</th> -->
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      if(!empty($standby_status['standby'])){
                        for ($i=0; $i < count($standby_status['standby']); $i++) { 
                          $standby = $standby_status['standby'][$i];
                          $time_1 = $standby_status['time_1'][$i];
                          $time_2 = $standby_status['time_2'][$i];
                          $time_3 = $standby_status['time_3'][$i];
                          $time_4 = $standby_status['time_4'][$i];
                          $ket = $standby_status['ket'][$i];
                          // $breakdown = $standby_status['breakdown'][$i];
                    ?>
                    <tr>
                      <td><?php echo $standby;?></td>
                      <td><?php echo $time_1;?></td>
                      <td><?php echo $time_2;?></td>
                      <td><?php echo $time_3;?></td>
                      <td><?php echo $time_4;?></td>
                      <td><?php echo $ket;?></td>
                      <!-- <td><?php echo $breakdown;?></td> -->
                    </tr>
                    <?php
                     }
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- End Panel Basic -->
          </div>
            <?php
              if($unit_status[0]['status'] !== 'VERIFIED'){
            ?>
            <div class="col-12 col-md-6 col-sm-12 mt-10 mb-20" style="margin-left: 188px;">
              <!-- <a href="<?php echo base_url().'imputer/daily-activity/'.$unit_status[0]['no_unit'].'/'.$unit_status[0]['tgl_aktifitas'];?>" class="btn btn-primary rounded-pill"
                style="display:flex; flex-direction:column;background-color: orange !important;">Edit</a> -->
              <a href="<?php echo base_url().'Validator/edit_activity_validator/'.$unit_status[0]['no_unit'].'/'.$unit_status[0]['tgl_aktifitas'];?>" class="btn btn-primary rounded-pill"
                style="display:flex; flex-direction:column;background-color: orange !important;">Edit</a>
            </div>
            <form action="<?php echo base_url().'Validator/confirm_unit_status/'.$unit_status[0]['no_unit'];?>" class="form-inline">
            <div class="col-12 col-md-6 col-sm-12 mt-10 mb-20">
              <input type="hidden" name="no_unit" value="<?php echo $unit_status[0]['no_unit'];?>">
              <button type="submit" class="btn btn-primary rounded-pill text-center"
                style="background-color: #0ACB40 !important; width: 580px !important;">Confirm</button>
            </div>
            </form>
            <?php
              }else{
            ?>
            <div class="col-12 col-md-6 col-sm-12 mt-10 mb-20" style="margin-left: 450px;">
              <a href="<?php echo base_url().'Validator/daily_report';?>" class="btn btn-primary rounded-pill"
                style="display:flex; flex-direction:column;background-color: red !important;">Close</a>
            </div>
            <?php
              }
            ?>
      </div>
    </div>
  </div>
  <!-- End Page -->
  <!-- Core  -->
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
      const flashData = $('.flash-data').data('flashdata');

      if (flashData) {
        var title;
        var msg;

        if (flashData == 'insert failed') {
            title = 'Oops! Something went wrong';
            msg = 'Failed to insert data';
        } else if (flashData == 'update failed') {
            title = 'Oops! Something went wrong';
            msg = 'Failed to update data';
        } else if (flashData == 'exist') {
            title = 'Oops! Something went wrong';
            msg = 'Failed to upload file';
        } else if (flashData == 'delete failed') {
            title = 'Oops! Something went wrong';
            msg = 'Failed to delete data';
        } else if( flashData == 'not exist loader'){
            title = 'Oops! Something went wrong';
            msg = 'failed get loader';
        }

        if (title == null && msg == null) {
            swal({
              icon: 'success',
              title: 'Success',
              showConfirmButton: false,
              timer: 2000
            });    
        }else if(flashData == 'not exist loader'){
            swal({
                icon: 'error',
                title: 'Data radio has not created',
                showConfirmButton: false,
                // timer: 2000
            })
        }else {
            swal({
            icon: 'error',
            title: 'Data has been already submitted',
            showConfirmButton: false,
            // timer: 2000
          })
        }
      }
    });
</script>
</html>
