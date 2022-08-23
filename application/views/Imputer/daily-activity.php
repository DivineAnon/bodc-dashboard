<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
  <meta name="description" content="bootstrap material admin template" />
  <meta name="author" content="" />

  <title>BODC CYBER APPS | IMPUTER</title>

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
          <?php
              if($this->session->id_role == '3'){
              ?>
                <a href="<?= base_url('imputer/daily-report') ?>" class="nav-link waves-effect waves-light waves-round">
                  <i class="icon md-arrow-left" style="font-size: 20px;">&nbsp;Back</i>
                </a>
              <?php  
              }else{
              ?>
                <a href="<?php echo base_url().'Validator/daily_report';?>" class="nav-link waves-effect waves-light waves-round">
                  <i class="icon md-arrow-left" style="font-size: 20px;">&nbsp;Back</i>
                </a>
              <?php  
              }
            ?>
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
        <a class="animsition-link" href="<?= base_url('imputer'); ?>">
          <i class="site-menu-icon icon md-home" style="font-size: 20px" aria-hidden="true"></i>
          <span class="site-menu-title">All Data Report</span>
        </a>
      </li> -->
      <li class="site-menu-item has-sub">
        <a href="<?= base_url('imputer/daily-report'); ?>" id="status-unit">
          <i class="site-menu-icon icon md-chart" style="font-size: 20px" aria-hidden="true"></i>
          <span class="site-menu-title">Unit Status</span>
        </a>
      </li>
    </ul>
  </div>

  <!-- Page -->
  <div class="page">
    <div class="page-content container-fluid">
      <div class="container">
        <div class="row">
          <div class="card" style="color: #000000; margin-left: 50px; margin-top: 20px !important">
            <div class="card-block">
              <form id="activityForm" method="POST" class="form-inline">
                <input type="hidden" id="id" value="<?= $daily_activity['activity']['id']; ?>">
                <div class="col-12 col-md-2 col-sm-12">
                  <p style="color: #000000;margin-top:10px;">CN Unit
                  </p>
                </div>
                <div class="col-12 col-md-10 col-sm-12">
                  <input type="hidden" class="form-control" id="nomor_unit" name="nomor_unit" value="<?= $nomor_unit[0]['no_unit']; ?>" placeholder="CN Unit" required readonly>
                  <input type="text" class="form-control" id="no_unit" name="no_unit" value="<?= $nomor_unit[0]['no_unit']; ?>" placeholder="CN Unit" required readonly>
                </div>
                <div class="col-12 col-md-2 col-sm-12">
                  <p style="color: #000000;margin-top:10px;">Tanggal Aktivitas
                  </p>
                </div>
                <div class="col-12 col-md-10 col-sm-12">
                  <?php
                    if ($hourly_radio['tgl_aktifitas'] != NULL) {
                  ?>
                  <input type="date" class="form-control" id="tgl_aktifitas" name="tgl_aktifitas" value="<?= $hourly_radio['tgl_aktifitas']; ?>" readonly required>
                  <?php    
                    } else {
                      if ($daily_activity['activity']['tgl_aktifitas'] != NULL) {
                        $tanggal = $daily_activity['activity']['tgl_aktifitas'];
                      } else {
                        $tanggal = $tgl_aktifitas;
                      }
                  ?>
                  <input type="date" class="form-control" id="tgl_aktifitas" name="tgl_aktifitas" placeholder="CN Unit" value="<?= $tanggal; ?>" readonly required>
                  <?php
                    }
                  ?>
                </div>
                <div class="col-12 col-md-2 col-sm-12">
                  <p style="color: #000000;margin-top:10px;">Nama Operator
                  </p>
                </div>
                <div class="col-12 col-md-10 col-sm-12">
                  <select class="select2" id="operator" name="operator" style="width: 100%; margin-top: 10px;" required>
                    <option selected disabled>Pilih</option>
                  <?php
                  foreach ($operators as $operator) {
                    $selected = "";
                    if ($operator['id'] == $daily_activity['activity']['id_operator']) {
                      $selected = "selected";
                    }
                    if ($hourly_radio['operator'] != NULL && $operator['id'] == $hourly_radio['operator']) {
                      $selected = "selected";
                    }
                    echo "<option value='". $operator['id'] ."' ". $selected .">". $operator['first_name'] . " " . $operator['last_name'] ."</option>";
                  }
                  ?>
                  </select>
                </div>
                <!-- <div class="col-12 col-md-2 col-sm-12">
                  <p style="color: #000000;margin-top:10px;">NRP
                  </p>
                </div>
                <div class="col-12 col-md-10 col-sm-12">
                  <input type="text" class="form-control" name="nrp" placeholder="NRP" id="nrp" readonly>
                </div> -->
                <div class="col-12 col-md-2 col-sm-12">
                  <p style="color: #000000;margin-top: 10px;">Kode Proses
                  </p>
                </div>
                <div class="col-12 col-md-10 col-sm-12">
                  <select class="select2" id="drpKodeProses" name="proses" style="width: 100%; margin-top: 10px;" required>
                    <option disabled selected>Pilih</option>
                  <?php
                    foreach ($processes as $process) {
                      $selected = "";
                      if ($process['id'] == $daily_activity['activity']['id_proses']) {
                        $selected = "selected";
                      }
                      echo "<option value='". $process['id'] ."' ". $selected .">". $process['kode'] ."</option>";
                    }
                  ?>
                  </select>
                </div>
                <!-- <div class="col-12 col-md-2 col-sm-12">
                  <p style="color: #000000;margin-top: 10px;">Kode Material
                  </p>
                </div>
                <div class="col-12 col-md-10 col-sm-12">
                  <select data-plugin="selectpicker" id="drpKodeMaterial" name="material" style="width: 75%; margin-top: 10px;" required>
                    <option disabled selected>Pilih</option>
                  <?php
                    foreach ($materials as $material) {
                      echo "<option value='". $material['id'] ."'>". $material['kode'] ."</option>";
                    }
                  ?>
                  </select>
                </div> -->
                <div class="col-12 col-md-2 col-sm-12">
                  <p style="color: #000000;margin-top: 10px;">Kode Aktivitas
                  </p>
                </div>
                <div class="col-12 col-md-10 col-sm-12">
                  <select class="select2" id="drpKodeAktivitas" name="aktivitas" style="width: 100%; margin-top: 10px;" required>
                    <option disabled selected>Pilih</option>
                  <?php
                    foreach ($activities as $activity) {
                      $selected = "";
                      if ($activity['id'] == $daily_activity['activity']['id_aktifitas']) {
                        $selected = "selected";
                      }
                      echo "<option value='". $activity['id'] ."' ". $selected .">". $activity['kode'] ."</option>";
                    }
                  ?>
                  </select>
                </div>
                <div class="col-12 col-md-4 col-sm-12">
                  <div class="row">
                    <div class="col-12 col-md-4 col-sm-12">
                      <p style="color: #000000;margin-top: 10px;">HM Awal
                      </p>
                    </div>
                    <div class="col-12 col-md-8 col-sm-12">
                      <input type="text" class="form-control" id="hm_awal" name="hm_awal" placeholder="HM Awal" value="<?= $daily_activity['activity']['hm_awal']; ?>" 
                        style="width: 75%; margin-top: 10px;" required>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-4 col-sm-12">
                  <div class="row">
                    <div class="col-12 col-md-4 col-sm-12">
                      <p style="color: #000000;margin-top: 10px;">HM Akhir
                      </p>
                    </div>
                    <div class="col-12 col-md-8 col-sm-12">
                      <input type="text" class="form-control" id="hm_akhir" name="hm_akhir" placeholder="HM Akhir" value="<?= $daily_activity['activity']['hm_akhir']; ?>" 
                        style="width: 75%; margin-top: 10px;" required>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-4 col-sm-12">
                  <div class="row">
                    <div class="col-12 col-md-4 col-sm-12">
                      <p style="color: #000000;margin-top: 10px;">Total HM
                      </p>
                    </div>
                    <div class="col-12 col-md-8 col-sm-12">
                      <input type="text" class="form-control" id="total_hm" name="html_total" placeholder="Total HM" value="<?= $daily_activity['activity']['total_hm']; ?>" 
                        style="width: 75%; margin-top: 10px;" readonly>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-4 col-sm-12">
                  <div class="row">
                    <div class="col-12 col-md-4 col-sm-12">
                      <p style="color: #000000;margin-top: 10px;">KM Awal
                      </p>
                    </div>
                    <div class="col-12 col-md-8 col-sm-12">
                      <input type="text" class="form-control" id="km_awal" name="km_awal" placeholder="KM Awal" value="<?= $daily_activity['activity']['km_awal']; ?>" 
                        style="width: 75%; margin-top: 10px;" required>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-4 col-sm-12">
                  <div class="row">
                    <div class="col-12 col-md-4 col-sm-12">
                      <p style="color: #000000;margin-top: 10px;">KM Akhir
                      </p>
                    </div>
                    <div class="col-12 col-md-8 col-sm-12">
                      <input type="text" class="form-control" id="km_akhir" name="km_akhir" placeholder="KM Akhir" value="<?= $daily_activity['activity']['km_akhir']; ?>" 
                        style="width: 75%; margin-top: 10px;" required>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-4 col-sm-12">
                  <div class="row">
                    <div class="col-12 col-md-4 col-sm-12">
                      <p style="color: #000000;margin-top: 10px;">Total KM
                      </p>
                    </div>
                    <div class="col-12 col-md-8 col-sm-12">
                      <input type="text" class="form-control" id="total_km" name="total_km" placeholder="Total KM" value="<?= $daily_activity['activity']['total_km']; ?>" 
                        style="width: 75%; margin-top: 10px;" readonly>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-4 col-sm-12">
                  <div class="row">
                    <div class="col-12 col-md-4 col-sm-12">
                      <p style="color: #000000;margin-top: 10px;">Jam Awal
                      </p>
                    </div>
                    <div class="col-12 col-md-8 col-sm-12">
                      <input type="time" class="form-control" name="jam_awal" id="jam_awal" autocomplete="off" 
                        style="width: 75%; margin-top: 10px;" value="<?= ($daily_activity['activity']['jm_opt_awal'] == NULL) ? '' : date('H:i', strtotime($daily_activity['activity']['jm_opt_awal'])); ?>" required>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-4 col-sm-12">
                  <div class="row">
                    <div class="col-12 col-md-4 col-sm-12">
                      <p style="color: #000000;margin-top: 10px;">Jam Akhir
                      </p>
                    </div>
                    <div class="col-12 col-md-8 col-sm-12">
                      <input type="time" class="form-control" name="jam_akhir" id="jam_akhir" autocomplete="off" 
                        style="width: 75%; margin-top: 10px;" value="<?= $daily_activity['activity']['jm_opt_akhir'] == NULL ? '' : date('H:i', strtotime($daily_activity['activity']['jm_opt_akhir'])); ?>" required>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-4 col-sm-12">
                  <div class="row">
                    <div class="col-12 col-md-4 col-sm-12">
                      <p style="color: #000000;margin-top: 10px;">Total Jam
                      </p>
                    </div>
                    <div class="col-12 col-md-8 col-sm-12">
                      <input type="text" class="form-control" name="total_jam" id="total_jam" placeholder="Total Jam" value="<?= $daily_activity['activity']['total_jm_opt']; ?>" 
                        style="width: 75%; margin-top: 10px;" readonly>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-2 col-sm-12">
                  <p style="color: #000000; margin-top: 15px;">Fuel
                  </p>
                </div>
                <div class="col-12 col-md-10 col-sm-12">
                  <input type="text" class="form-control" id="fuel" name="fuel" placeholder="Fuel" value="<?= $daily_activity['activity']['fuel']; ?>" 
                    style="margin-top: 10px;">
                </div>
                <div class="col-12 col-md-2 col-sm-12">
                  <p style="color: #000000; margin-top: 15px;">Kec. Rata-rata
                  </p>
                </div>
                <div class="col-12 col-md-10 col-sm-12">
                  <input type="text" class="form-control" id="rata_rata" name="rata_rata" placeholder="Kec. Rata-rata" value="<?= $daily_activity['activity']['rata_rata']; ?>" 
                    style="margin-top: 10px;">
                </div>
                <!-- <div class="col-12 col-md-2 col-sm-12">
                  <p style="color: #000000;">Stanby Code
                  </p>
                </div>
                <div class="col-12 col-md-4 col-sm-12">
                  <select data-plugin="selectpicker" id="drpStanbyCode" name="stanby_code" style="width: 75%; margin-top: 10px;" required>
                  <?php
                    foreach ($stanby_data as $s) {
                      echo "<option value='". $s['id'] ."'>". $s['kode'] ."</option>";
                    }
                  ?>
                  </select>
                </div> -->
                <div class="col-12 col-md-6 col-sm-12">
                  <button type="submit" class="btn btn-raised btn-primary btn-block waves-effect waves-classic" style="width: 30%; margin-top: 10px;">
                    Save
                  </button>
                </div>
              </form>
            </div>
          </div>
          <div class="panel" style="margin-left: 50px;">
            <header class="panel-heading text-center">
              <div class="panel-actions"></div>
              <h1 class="panel-title" style="background:#0267ca; color: #fff; font-size: large; text-align: left;">
                Unit
                Status</h1>
            </header>
            <div class="card" style="color: #000000; margin-left: 50px;">
              <div class="card-block">
                <form id="unitStatusForm" class="form-inline">
                  <div class="col-12 col-md-6 col-sm-12">
                    <p>CN Unit : <?= $nomor_unit[0]['no_unit']; ?></p>
                  </div>
                  <div class="col-12 col-md-6 col-sm-12">
                    <div class="row">
                      <div class="col-12 col-md-4 col-sm-12">
                        <p style="margin-top: 0.5rem;">Unit Type</p>
                      </div>
                      <div class="col-12 col-md-8 col-sm-12">
                        <select class="select2" id="drpLoader" name="loader" style="width: 50%; margin-top: 0;" required>
                        <?php
                          foreach ($unit_types as $unit_type) {
//                            $selected = "";
//                            if ($daily_activity['unit_status']['id_loader'] != NULL) {
//                              if ($unit_type['id'] == $daily_activity['unit_status']['id_loader']) {
//                                $selected = "selected";
//                              }
//                            } else {
//                              if ($unit_type['id'] == $hourly_radio['id_type_unit'] || $hourly_radio['id_type_unit'] == '1') {
//                                $selected = "selected";
//                              }
//                              if ($hourly_radio['id_type_unit'] == NULL && $unit_type['id'] == 2) {
//                                $selected = "selected";
//                              }
//                            }
//                            echo "<option value='". $unit_type['id'] ."' ". $selected .">". $unit_type['nama'] ."</option>";
                              if($unit_type['id'] == $nomor_unit[0]['type_unit']){
                                  $selected = 'selected';
                                  echo "<option value='". $unit_type['id'] ."' ". $selected .">". $unit_type['nama'] ."</option>";
                              }

                          }
                        ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-sm-12">
                    <p>Kode Proses : <span id="unit_kode_proses">-</span></p>
                  </div>
                  <div class="col-12 col-md-6 col-sm-12">
                    <div class="row">
                      <div class="col-12 col-md-4 col-sm-12">
                        <p style="margin-top: 1rem;">Loading Point</p>
                      </div>
                      <div class="col-12 col-md-8 col-sm-12 mt-10">
                        <select class="select2" id="loading_point" name="loading_point" style="width: 50%; margin-top: 0;" required>
                        <?php
                          if ($daily_activity['unit_status']['loading_point'] != null) {
                            $loading_point2 = $daily_activity['unit_status']['loading_point'];
                          } else {
                            $loading_point2 = $hourly_radio['id_dt_ton'];
                          }

                          foreach ($loading_point as $ld) {
                            $selected = "";
                            if ($ld['id'] == $loading_point2) {
                              $selected = "selected";
                            }
                            echo "<option value='". $ld['id'] ."' ". $selected .">". $ld['nama'] ."</option>";
                          }
                        ?>
                        </select>
                        <!-- <input type="text" class="form-control" id="loading_point" name="loading_point" placeholder="Loading Point" value="<?= $loading_point; ?>" style="margin-top: 10px;" required> -->
                      </div>
                    </div>
                  </div>
                  <!-- <div class="col-12 col-md-6 col-sm-12">
                    <p>Kode Material : <span id="unit_kode_material">-</span></p>
                  </div> -->
                  <div class="col-12 col-md-6 col-sm-12">
                    <p>Kode Aktivitas : <span id="unit_kode_aktivitas">-</span></p>
                  </div>
                  <div class="col-12 col-md-6 col-sm-12">
                    <div class="row">
                      <div class="col-12 col-md-4 col-sm-12">
                        <p style="margin-top: 1rem;">Dumping Area</p>
                      </div>
                      <div class="col-12 col-md-8 col-sm-12 mt-10">
                        <select class="select2" id="dumping_area" name="dumping_area" style="width: 50%; margin-top: 0;" required>
                        <?php
                          if ($daily_activity['unit_status']['dumping_area'] != null) {
                            $dumping_area = $daily_activity['unit_status']['dumping_area'];
                          } else {
                            $dumping_area = $hourly_radio['id_block'];
                          }


                          foreach ($blocks as $block) {
                            $selected = "";
                            if ($block['id'] == $dumping_area) {
                              $selected = "selected";
                            }
                            echo "<option value='". $block['id'] ."' ". $selected .">". $block['nama'] ."</option>";
                          }
                        ?>
                        </select>
                        <!-- <input type="text" class="form-control" id="dumping_area" name="dumping_area" placeholder="Dumping Area" value="<?= $dumping_area; ?>" style="margin-top: 10px;" required> -->
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-sm-12"></div>
                  <div class="col-12 col-md-6 col-sm-12">
                    <div class="row">
                      <div class="col-12 col-md-4 col-sm-12">
                        <p style="margin-top: 1rem;">Jarak (KM)</p>
                      </div>
                      <div class="col-12 col-md-8 col-sm-12 mt-10">
                        <?php
                          if ($daily_activity['unit_status']['jarak'] != null) {
                            $jarak = $daily_activity['unit_status']['jarak'];
                          } else {
                            $jarak = $hourly_radio['jarak'];
                          }
                        ?>
                        <input type="text" class="form-control" id="jarak" name="jarak" placeholder="Jarak (KM)" value="<?= $jarak; ?>" style="margin-top: 0;">
                      </div>
                    </div>
                  </div>
                  
                  <div class="col-12 col-md-6 col-sm-12"></div>
                  <div class="col-12 col-md-6 col-sm-12">
                    <div class="row">
                      <div class="col-12 col-md-4 col-sm-12">
                        <p style="margin-top: 1rem;">Truck Size</p>
                      </div>
                      <div class="col-12 col-md-8 col-sm-12 mt-10">
                        <select class="select2" id="truck_size" name="truck_size" style="width: 50%; margin-top: 0;" required>
                          <?php
                            if ($daily_activity['unit_status']['truck_size'] != null) {
                              $truck_size = $daily_activity['unit_status']['truck_size'];
                            } else {
                              $truck_size = $hourly_radio['id_dt_ton'];
                            }

                            foreach ($dt_ton as $dt) {
                              $selected = "";
                              if ($dt['id'] == $truck_size) {
                                $selected = "selected";
                              }
                              echo "<option value='". $dt['id'] ."' ". $selected .">". $dt['nama'] ."</option>";
                            }
                          ?>
                        </select>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-sm-12 mt-10">

                  </div>
                  <div class="col-12 col-md-12 col-sm-12">
                    <div class="row">
                      <div class="col-12 col-md-2 col-sm-12">
                        <p style="margin-top: 1rem;">Total Ritasi</p>
                      </div>
                      <div class="col-12 col-md-2 col-sm-12">
                        <?php
                          if ($ritasi['total_utama'] == NULL) {
                            $total_ritasi = 0;
                          } else {
                            $total_ritasi = $ritasi['total_utama'];
                          }
                        ?>
                        <input type="text" class="form-control" name="ritasi" id="ritasi" placeholder="Total Ritasi" value="<?= $total_ritasi; ?>" style="margin-top: 10px;" readonly>
                      </div>
                      <div class="col-12 col-md-8 col-sm-12">
                        <!-- <a href="<?= base_url('imputer/daily-activity/'.$no_unit.'/ritasi'); ?>" class="btn btn-raised btn-primary btn-block waves-effect waves-classic" style="width: 30%; margin-top: 10px; margin-left: 100px;" id="btn_add_ritasi" onclick="check()"> -->
                        <a href="#" class="btn btn-raised btn-primary btn-block waves-effect waves-classic" style="width: 30%; margin-top: 10px; margin-left: 100px;" id="btn_add_ritasi">  
                          Add Ritasi
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-12 col-sm-12">
                    <div class="row">
                      <div class="col-12 col-md-2 col-sm-12">
                        <p style="margin-top: 25px;">Total Ton</p>
                      </div>
                      <div class="col-12 col-md-8 col-sm-12 mt-10">
                        <?php
                          if ($total_ton != null) {
                            $ton = $total_ton;
                          } else {
                            $ton = $daily_activity['activity']['total_ton'];
                          }
                        ?>
                        <input type="text" class="form-control" id="total_ton" name="total_ton" placeholder="Total Ton" value="<?= $ton; ?>" style="margin-top: 10px;" readonly>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-12 col-sm-12">
                    <div class="row">
                      <div class="col-12 col-md-2 col-sm-12">
                        <p style="margin-top: 25px;">Notes</p>
                      </div>
                      <div class="col-12 col-md-8 col-sm-12 mt-10">
                        <textarea class="form-control" id="notes" name="notes" rows="5" style="width: 100%; margin-top: 10px;"><?= $daily_activity['activity']['notes']; ?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-12 col-sm-12 mt-20">
                    <button type="submit" class="btn btn-raised btn-primary btn-block waves-effect waves-classic" style="width: 70%;">
                      Add Loading Point
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-12 col-sm-12 mt-15">
            <!-- Panel Basic -->
            <div class="panel" style="margin-left: 30px;">
              <header class="panel-heading text-center">
                <div class="panel-actions">
                  <button type="button" id="btn_add_standby" class="btn" style="background:#0267ca; color: #fff; width: 5rem;">
                    Add
                  </button>
                </div>
                <h1 class="panel-title" style="background:#0267ca; color: #fff; font-size: large; text-align: left;">
                  Standby
                  Status</h1>
              </header>
              <div class="panel-body mt-10">
                <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                  <thead>
                    <tr>
                      <th>Standby</th>
                      <th>Start Time (1)</th>
                      <th>Start Time (2)</th>
                      <th>Start Time (3)</th>
                      <th>Start Time (4)</th>
                      <th>End Time (1)</th>
                      <th>End Time (2)</th>
                      <th>End Time (3)</th>
                      <th>End Time (4)</th>
                      <th>Keterangan</th>
                      <!-- <th>Breakdown</th> -->
                      <th>Create Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      foreach ($stanby as $s) {
                    ?>

                    <tr>
                      <td><?= $s['Standby']; ?></td>
                      <td><?= $s['start_time_1']; ?></td>
                      <td><?= $s['start_time_2']; ?></td>
                      <td><?= $s['start_time_3']; ?></td>
                      <td><?= $s['start_time_4']; ?></td>
                      <td><?= $s['end_time_1']; ?></td>
                      <td><?= $s['end_time_2']; ?></td>
                      <td><?= $s['end_time_3']; ?></td>
                      <td><?= $s['end_time_4']; ?></td>
                      <td><?= $s['keterangan']; ?></td>
                      <!-- <td><?= $s['breakdown']; ?></td> -->
                      <td><?= $s['create_date']; ?></td>
                      <td>
                        <a href="#" class="button mr-10" data-toggle="modal" data-target="#editModal<?= $s['id']; ?>" style="font-size:large; text-decoration:none !important;">
                          <i class="icon md-edit"></i>
                        </a>
                        <a href="<?= base_url('imputer/delete_stanby/'. $s['id'].'/'.$no_unit.'/'.$tgl_aktifitas); ?>" class="button delete-btn" style="font-size:large; text-decoration:none !important;">
                          <i class="icon md-delete"></i>
                        </a>
                      </td>
                    </tr>

                    <!-- Modal -->
                    <div class="modal fade" id="editModal<?= $s['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Standby Status</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="<?= base_url('imputer/update_stanby') ?>" method="POST">
                            <input type="hidden" name="no_unit" value="<?= $daily_activity['activity']['no_unit']; ?>">
                            <input type="hidden" name="tgl_aktifitas" value="<?= $daily_activity['activity']['tgl_aktifitas']; ?>">
                            <input type="hidden" class="form-control" name="stanby_id" value="<?= $s['id']; ?>">
                            <div class="modal-body">
                              <div class="col-12 col-md-12 col-sm-12">
                                <div class="row">
                                  <div class="col-12 col-md-2 col-sm-12">
                                    <p style="color: #000000;margin-top: 10px;">Standby Code
                                    </p>
                                  </div>
                                  <div class="col-12 col-md-10 col-sm-12">
                                    <select class="select2" name="standby_code" style="width: 100%; margin-top: 10px;">
                                    <?php
                                      foreach ($stanby_data as $sd) {
                                        $selected = '';
                                        if ($sd['id'] == $s['id_stanby']) {
                                          $selected = 'selected';
                                        }
                                        echo "<option value='". $sd['id'] ."' ". $selected .">". $sd['kode'] ."</option>";
                                      }
                                    ?>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-6 col-md-6 col-sm-12">
                                  <div class="row">
                                    <div class="col-12 col-md-4 col-sm-12">
                                      <p style="color: #000000;margin-top: 15px;">Start Time (1)
                                      </p>
                                    </div>
                                    <div class="col-12 col-md-8 col-sm-12">
                                      <input type="time" class="form-control" style="margin-top: 10px;" name="start_time_1" value="<?= ($s['start_time_1'] == NULL) ? '00:00' : date('H:i', strtotime($s['start_time_1'])); ?>">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-6 col-md-6 col-sm-12">
                                  <div class="row">
                                    <div class="col-12 col-md-4 col-sm-12">
                                      <p style="color: #000000;margin-top: 15px;">End Time (1)
                                      </p>
                                    </div>
                                    <div class="col-12 col-md-8 col-sm-12">
                                      <input type="time" class="form-control" style="margin-top: 10px;" name="end_time_1" value="<?= ($s['end_time_1'] == NULL) ? '00:00' : date('H:i', strtotime($s['end_time_1'])); ?>">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-6 col-md-6 col-sm-12">
                                  <div class="row">
                                    <div class="col-12 col-md-4 col-sm-12">
                                      <p style="color: #000000;margin-top: 15px;">Start Time (2)
                                      </p>
                                    </div>
                                    <div class="col-12 col-md-8 col-sm-12">
                                      <input type="time" class="form-control" style="margin-top: 10px;" name="start_time_2" value="<?= ($s['start_time_2'] == NULL) ? '00:00' : date('H:i', strtotime($s['start_time_2'])); ?>">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-6 col-md-6 col-sm-12">
                                  <div class="row">
                                    <div class="col-12 col-md-4 col-sm-12">
                                      <p style="color: #000000;margin-top: 15px;">End Time (2)
                                      </p>
                                    </div>
                                    <div class="col-12 col-md-8 col-sm-12">
                                    <input type="time" class="form-control" style="margin-top: 10px;" name="end_time_2" value="<?= ($s['end_time_2'] == NULL) ? '00:00' : date('H:i', strtotime($s['end_time_2'])); ?>">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-6 col-md-6 col-sm-12">
                                  <div class="row">
                                    <div class="col-12 col-md-4 col-sm-12">
                                      <p style="color: #000000;margin-top: 15px;">Start Time (3)
                                      </p>
                                    </div>
                                    <div class="col-12 col-md-8 col-sm-12">
                                    <input type="time" class="form-control" style="margin-top: 10px;" name="start_time_3" value="<?= ($s['start_time_3'] == NULL) ? '00:00' : date('H:i', strtotime($s['start_time_3'])); ?>">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-6 col-md-6 col-sm-12">
                                  <div class="row">
                                    <div class="col-12 col-md-4 col-sm-12">
                                      <p style="color: #000000;margin-top: 15px;">End Time (3)
                                      </p>
                                    </div>
                                    <div class="col-12 col-md-8 col-sm-12">
                                    <input type="time" class="form-control" style="margin-top: 10px;" name="end_time_3" value="<?= ($s['end_time_3'] == NULL) ? '00:00' : date('H:i', strtotime($s['end_time_3'])); ?>">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-6 col-md-6 col-sm-6">
                                  <div class="row">
                                    <div class="col-12 col-md-4 col-sm-12">
                                      <p style="color: #000000;margin-top: 15px;">Start Time (4)
                                      </p>
                                    </div>
                                    <div class="col-12 col-md-8 col-sm-12">
                                      
                                    <input type="time" class="form-control" style="margin-top: 10px;" name="start_time_4" value="<?= ($s['start_time_4'] == NULL) ? '00:00' : date('H:i', strtotime($s['start_time_4'])); ?>">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-6 col-md-6 col-sm-12">
                                  <div class="row">
                                    <div class="col-12 col-md-4 col-sm-12">
                                      <p style="color: #000000;margin-top: 15px;">End Time (4)
                                      </p>
                                    </div>
                                    <div class="col-12 col-md-8 col-sm-12">
                                    <input type="time" class="form-control" style="margin-top: 10px;" name="end_time_4" value="<?= ($s['end_time_4'] == NULL) ? '00:00' : date('H:i', strtotime($s['end_time_4'])); ?>">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-12 col-md-12 col-sm-12">
                                <div class="row">
                                  <div class="col-12 col-md-2 col-sm-12">
                                    <p style="color: #000000;margin-top: 10px;">Keterangan
                                    </p>
                                  </div>
                                  <div class="col-12 col-md-10 col-sm-12">
                                    <input type="text" class="form-control" name="keterangan" placeholder="Keterangan" value="<?= $s['keterangan']; ?>"
                                      style="margin-top: 10px;">
                                  </div>
                                </div>
                              </div>
                              <!-- <div class="col-12 col-md-12 col-sm-12" style="margin-top: 8px;">
                                <div class="row">
                                  <div class="col-12 col-md-2 col-sm-12">
                                    <p style="color: #000000; margin-top: 10px;">Breakdown
                                    </p>
                                  </div>
                                  <div class="col-12 col-md-10 col-sm-12">
                                    <select class="select2 form-control" name="breakdown" required>
                                      <option disabled selected>Pilih</option>
                                      <option value="SCM" <?php if ($s['breakdown'] == 'SCM') echo 'selected'; ?>>SCM</option>
                                      <option value="USM" <?php if ($s['breakdown'] == 'USM') echo 'selected'; ?>>USM</option>
                                      <option value="TRM" <?php if ($s['breakdown'] == 'TRM') echo 'selected'; ?>>TRM</option>
                                      <option value="ICM" <?php if ($s['breakdown'] == 'ICM') echo 'selected'; ?>>ICM</option>
                                    </select>
                                  </div>
                                </div>
                              </div> -->
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>

                    <?php
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- End Panel Basic -->

            <!-- Modal -->
            <div class="modal fade" id="datastanby" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Standby Status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <!-- <form action="<?= base_url('imputer/save_stanby'); ?>" method="POST"> -->
                  <form id="addStanbyStatusForm" method="POST">
                    <input type="hidden" value="<?= $daily_activity['activity']['id']; ?>" id="addStandbyIdActivity" name="activity">
                    <div class="modal-body">
                      <div class="col-12 col-md-12 col-sm-12">
                        <div class="row">
                          <div class="col-12 col-md-2 col-sm-12">
                            <p style="color: #000000;margin-top: 10px;">Standby Code
                            </p>
                          </div>
                          <div class="col-12 col-md-10 col-sm-12">
                            <select class="select2" id="addStandbyDrpStanbyCode" name="stanby_code" style="width: 100%; margin-top: 10px;">
                            <?php
                              foreach ($stanby_data as $s) {
                                echo "<option value='". $s['id'] ."'>". $s['kode'] ."</option>";
                              }
                            ?>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-md-6 col-sm-12">
                          <div class="row">
                            <div class="col-12 col-md-4 col-sm-12">
                              <p style="color: #000000;margin-top: 15px;">Start Time (1)
                              </p>
                            </div>
                            <div class="col-12 col-md-8 col-sm-12">
                              <input type="time" class="form-control" id="add_start_1" style="margin-top: 10px;" name="start_time_1">
                            </div>
                          </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-12">
                          <div class="row">
                            <div class="col-12 col-md-4 col-sm-12">
                              <p style="color: #000000;margin-top: 15px;">End Time (1)
                              </p>
                            </div>
                            <div class="col-12 col-md-8 col-sm-12">
                              <input type="time" class="form-control" id="add_end_1" style="margin-top: 10px;" name="end_time_1">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-md-6 col-sm-12">
                          <div class="row">
                            <div class="col-12 col-md-4 col-sm-12">
                              <p style="color: #000000;margin-top: 15px;">Start Time (2)
                              </p>
                            </div>
                            <div class="col-12 col-md-8 col-sm-12">
                              <input type="time" class="form-control" id="add_start_2" style="margin-top: 10px;" name="start_time_2">
                            </div>
                          </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-12">
                          <div class="row">
                            <div class="col-12 col-md-4 col-sm-12">
                              <p style="color: #000000;margin-top: 15px;">End Time (2)
                              </p>
                            </div>
                            <div class="col-12 col-md-8 col-sm-12">
                            <input type="time" class="form-control" id="add_end_2" style="margin-top: 10px;" name="end_time_2">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-md-6 col-sm-12">
                          <div class="row">
                            <div class="col-12 col-md-4 col-sm-12">
                              <p style="color: #000000;margin-top: 15px;">Start Time (3)
                              </p>
                            </div>
                            <div class="col-12 col-md-8 col-sm-12">
                            <input type="time" class="form-control" id="add_start_3" style="margin-top: 10px;" name="start_time_3">
                            </div>
                          </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-12">
                          <div class="row">
                            <div class="col-12 col-md-4 col-sm-12">
                              <p style="color: #000000;margin-top: 15px;">End Time (3)
                              </p>
                            </div>
                            <div class="col-12 col-md-8 col-sm-12">
                            <input type="time" class="form-control" id="add_end_3" style="margin-top: 10px;" name="end_time_3">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-md-6 col-sm-6">
                          <div class="row">
                            <div class="col-12 col-md-4 col-sm-12">
                              <p style="color: #000000;margin-top: 15px;">Start Time (4)
                              </p>
                            </div>
                            <div class="col-12 col-md-8 col-sm-12">
                              
                            <input type="time" class="form-control" id="add_start_4" style="margin-top: 10px;" name="start_time_4">
                            </div>
                          </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-12">
                          <div class="row">
                            <div class="col-12 col-md-4 col-sm-12">
                              <p style="color: #000000;margin-top: 15px;">End Time (4)
                              </p>
                            </div>
                            <div class="col-12 col-md-8 col-sm-12">
                            <input type="time" class="form-control" id="add_end_4" style="margin-top: 10px;" name="end_time_4">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-12 col-sm-12">
                        <div class="row">
                          <div class="col-12 col-md-2 col-sm-12">
                            <p style="color: #000000;margin-top: 15px;">Keterangan
                            </p>
                          </div>
                          <div class="col-12 col-md-10 col-sm-12">
                            <input type="text" class="form-control" id="add_keterangan" name="keterangan" placeholder="Keterangan" style="margin-top: 10px;">
                          </div>
                        </div>
                      </div>
                      <!-- <div class="col-12 col-md-12 col-sm-12" style="margin-top: 8px;">
                        <div class="row">
                          <div class="col-12 col-md-2 col-sm-12">
                            <p style="color: #000000; margin-top: 10px;">Breakdown
                            </p>
                          </div>
                          <div class="col-12 col-md-10 col-sm-12">
                            <select class="select2" id="addStandbyDrpBreakdown" name="breakdown" required>
                              <option disabled selected>Pilih</option>
                              <option value="SCM">SCM</option>
                              <option value="USM">USM</option>
                              <option value="TRM">TRM</option>
                              <option value="ICM">ICM</option>
                            </select>
                          </div>
                        </div>
                      </div> -->
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <!-- Modal -->
            <!-- <div class="modal fade" id="datastanby" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Standby Status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="<?= base_url('imputer/save_stanby'); ?>" method="POST">
                    <input type="hidden" value="<?= $daily_activity['activity']['id']; ?>" name="activity">
                    <div class="modal-body">
                      <div class="col-12 col-md-12 col-sm-12">
                        <div class="row">
                          <div class="col-12 col-md-4 col-sm-12">
                            <p style="color: #000000;margin-top: 10px;">Standby Code
                            </p>
                          </div>
                          <div class="col-12 col-md-8 col-sm-12">
                            <select data-plugin="selectpicker" name="stanby_code" style="width: 75%; margin-top: 10px;">
                            <?php
                              foreach ($stanby_data as $s) {
                                echo "<option value='". $s['id'] ."'>". $s['kode'] ."</option>";
                              }
                            ?>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                  </form>
                </div>
              </div>
            </div> -->

          </div>
          <div class="col-12 col-md-12 col-sm-12 mt-15">
            <!-- Panel Basic -->
            <div class="panel" style="margin-left: 30px;">
              <header class="panel-heading text-center">
                <div class="panel-actions">
                  <button type="button" id="btn_add_breakdown" class="btn" style="background:#0267ca; color: #fff; width: 5rem;">
                    Add
                  </button>
                </div>
                <h1 class="panel-title" style="background:#0267ca; color: #fff; font-size: large; text-align: left;">Breakdown Status</h1>
              </header>
              <div class="panel-body mt-10">
                <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                  <thead>
                    <tr>
                      <th>Breakdown</th>
                      <th>Start Time (1)</th>
                      <th>Start Time (2)</th>
                      <th>Start Time (3)</th>
                      <th>Start Time (4)</th>
                      <th>End Time (1)</th>
                      <th>End Time (2)</th>
                      <th>End Time (3)</th>
                      <th>End Time (4)</th>
                      <th>Keterangan</th>
                      <th>Create Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      foreach ($breakdown as $b) {
                    ?>

                    <tr>
                      <td><?= $b['breakdown_status']; ?></td>
                      <td><?= $b['start_time_1']; ?></td>
                      <td><?= $b['start_time_2']; ?></td>
                      <td><?= $b['start_time_3']; ?></td>
                      <td><?= $b['start_time_4']; ?></td>
                      <td><?= $b['end_time_1']; ?></td>
                      <td><?= $b['end_time_2']; ?></td>
                      <td><?= $b['end_time_3']; ?></td>
                      <td><?= $b['end_time_4']; ?></td>
                      <td><?= $b['keterangan']; ?></td>
                      <!-- <td><?= $s['breakdown']; ?></td> -->
                      <td><?= $b['create_date']; ?></td>
                      <td>
                        <a href="#" class="button mr-10" data-toggle="modal" data-target="#editBreakdownModal<?= $b['id']; ?>" style="font-size:large; text-decoration:none !important;">
                          <i class="icon md-edit"></i>
                        </a>
                        <a href="<?= base_url('imputer/delete_breakdown/'. $b['id'].'/'.$no_unit.'/'.$tgl_aktifitas); ?>" class="button delete-btn" style="font-size:large; text-decoration:none !important;">
                          <i class="icon md-delete"></i>
                        </a>
                      </td>
                    </tr>

                    <!-- Modal -->
                    <div class="modal fade" id="editBreakdownModal<?= $b['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Edit Breakdown Status</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <form action="<?= base_url('imputer/update_breakdown') ?>" method="POST">
                            <input type="hidden" name="no_unit" value="<?= $daily_activity['activity']['no_unit']; ?>">
                            <input type="hidden" name="tgl_aktifitas" value="<?= $daily_activity['activity']['tgl_aktifitas']; ?>">
                            <input type="hidden" class="form-control" name="breakdown_id" value="<?= $b['id']; ?>">
                            <div class="modal-body">
                              <div class="col-12 col-md-12 col-sm-12">
                                <div class="row">
                                  <div class="col-12 col-md-2 col-sm-12">
                                    <p style="color: #000000;margin-top: 10px;">Breakdown Status
                                    </p>
                                  </div>
                                  <div class="col-12 col-md-10 col-sm-12">
                                    <select class="select2" name="breakdown_status" required>
                                      <option disabled selected>Pilih</option>
                                      <option value="SCM" <?php if ($b['breakdown_status'] == 'SCM') echo 'selected'; ?>>SCM</option>
                                      <option value="USM" <?php if ($b['breakdown_status'] == 'USM') echo 'selected'; ?>>USM</option>
                                      <option value="TRM" <?php if ($b['breakdown_status'] == 'TRM') echo 'selected'; ?>>TRM</option>
                                      <option value="ICM" <?php if ($b['breakdown_status'] == 'ICM') echo 'selected'; ?>>ICM</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-6 col-md-6 col-sm-12">
                                  <div class="row">
                                    <div class="col-12 col-md-4 col-sm-12">
                                      <p style="color: #000000;margin-top: 15px;">Start Time (1)
                                      </p>
                                    </div>
                                    <div class="col-12 col-md-8 col-sm-12">
                                      <input type="time" class="form-control" style="margin-top: 10px;" name="start_time_1" value="<?= ($b['start_time_1'] == NULL) ? '00:00' : date('H:i', strtotime($b['start_time_1'])); ?>">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-6 col-md-6 col-sm-12">
                                  <div class="row">
                                    <div class="col-12 col-md-4 col-sm-12">
                                      <p style="color: #000000;margin-top: 15px;">End Time (1)
                                      </p>
                                    </div>
                                    <div class="col-12 col-md-8 col-sm-12">
                                      <input type="time" class="form-control" style="margin-top: 10px;" name="end_time_1" value="<?= ($b['end_time_1'] == NULL) ? '00:00' : date('H:i', strtotime($b['end_time_1'])); ?>">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-6 col-md-6 col-sm-12">
                                  <div class="row">
                                    <div class="col-12 col-md-4 col-sm-12">
                                      <p style="color: #000000;margin-top: 15px;">Start Time (2)
                                      </p>
                                    </div>
                                    <div class="col-12 col-md-8 col-sm-12">
                                      <input type="time" class="form-control" style="margin-top: 10px;" name="start_time_2" value="<?= ($b['start_time_2'] == NULL) ? '00:00' : date('H:i', strtotime($b['start_time_2'])); ?>">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-6 col-md-6 col-sm-12">
                                  <div class="row">
                                    <div class="col-12 col-md-4 col-sm-12">
                                      <p style="color: #000000;margin-top: 15px;">End Time (2)
                                      </p>
                                    </div>
                                    <div class="col-12 col-md-8 col-sm-12">
                                    <input type="time" class="form-control" style="margin-top: 10px;" name="end_time_2" value="<?= ($b['end_time_2'] == NULL) ? '00:00' : date('H:i', strtotime($b['end_time_2'])); ?>">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-6 col-md-6 col-sm-12">
                                  <div class="row">
                                    <div class="col-12 col-md-4 col-sm-12">
                                      <p style="color: #000000;margin-top: 15px;">Start Time (3)
                                      </p>
                                    </div>
                                    <div class="col-12 col-md-8 col-sm-12">
                                    <input type="time" class="form-control" style="margin-top: 10px;" name="start_time_3" value="<?= ($b['start_time_3'] == NULL) ? '00:00' : date('H:i', strtotime($b['start_time_3'])); ?>">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-6 col-md-6 col-sm-12">
                                  <div class="row">
                                    <div class="col-12 col-md-4 col-sm-12">
                                      <p style="color: #000000;margin-top: 15px;">End Time (3)
                                      </p>
                                    </div>
                                    <div class="col-12 col-md-8 col-sm-12">
                                    <input type="time" class="form-control" style="margin-top: 10px;" name="end_time_3" value="<?= ($b['end_time_3'] == NULL) ? '00:00' : date('H:i', strtotime($b['end_time_3'])); ?>">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-6 col-md-6 col-sm-6">
                                  <div class="row">
                                    <div class="col-12 col-md-4 col-sm-12">
                                      <p style="color: #000000;margin-top: 15px;">Start Time (4)
                                      </p>
                                    </div>
                                    <div class="col-12 col-md-8 col-sm-12">
                                      
                                    <input type="time" class="form-control" style="margin-top: 10px;" name="start_time_4" value="<?= ($b['start_time_4'] == NULL) ? '00:00' : date('H:i', strtotime($b['start_time_4'])); ?>">
                                    </div>
                                  </div>
                                </div>
                                <div class="col-6 col-md-6 col-sm-12">
                                  <div class="row">
                                    <div class="col-12 col-md-4 col-sm-12">
                                      <p style="color: #000000;margin-top: 15px;">End Time (4)
                                      </p>
                                    </div>
                                    <div class="col-12 col-md-8 col-sm-12">
                                    <input type="time" class="form-control" style="margin-top: 10px;" name="end_time_4" value="<?= ($b['end_time_4'] == NULL) ? '00:00' : date('H:i', strtotime($b['end_time_4'])); ?>">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="col-12 col-md-12 col-sm-12">
                                <div class="row">
                                  <div class="col-12 col-md-2 col-sm-12">
                                    <p style="color: #000000;margin-top: 10px;">Keterangan
                                    </p>
                                  </div>
                                  <div class="col-12 col-md-10 col-sm-12">
                                    <input type="text" class="form-control" name="keterangan" placeholder="Keterangan" value="<?= $b['keterangan']; ?>"
                                      style="margin-top: 10px;">
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>

                    <?php
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- End Panel Basic -->

            <!-- Modal -->
            <div class="modal fade" id="databreakdown" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Breakdown Status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <!-- <form action="<?= base_url('imputer/save_stanby'); ?>" method="POST"> -->
                  <form id="addBreakdownStatusForm" method="POST">
                    <input type="hidden" value="<?= $daily_activity['activity']['id']; ?>" id="addBreakdownIdActivity" name="activity">
                    <div class="modal-body">
                      <div class="col-12 col-md-12 col-sm-12" style="margin-top: 8px;">
                        <div class="row">
                          <div class="col-12 col-md-2 col-sm-12">
                            <p style="color: #000000; margin-top: 10px;">Breakdown Status</p>
                          </div>
                          <div class="col-12 col-md-10 col-sm-12">
                            <select class="select2" id="addBreakdownDrpStatus" name="breakdown" required>
                              <option disabled selected>Pilih</option>
                              <option value="SCM">SCM</option>
                              <option value="USM">USM</option>
                              <option value="TRM">TRM</option>
                              <option value="ICM">ICM</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-md-6 col-sm-12">
                          <div class="row">
                            <div class="col-12 col-md-4 col-sm-12">
                              <p style="color: #000000;margin-top: 15px;">Start Time (1)
                              </p>
                            </div>
                            <div class="col-12 col-md-8 col-sm-12">
                              <input type="time" class="form-control" id="bd_add_start_1" style="margin-top: 10px;" name="start_time_1">
                            </div>
                          </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-12">
                          <div class="row">
                            <div class="col-12 col-md-4 col-sm-12">
                              <p style="color: #000000;margin-top: 15px;">End Time (1)
                              </p>
                            </div>
                            <div class="col-12 col-md-8 col-sm-12">
                              <input type="time" class="form-control" id="bd_add_end_1" style="margin-top: 10px;" name="end_time_1">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-md-6 col-sm-12">
                          <div class="row">
                            <div class="col-12 col-md-4 col-sm-12">
                              <p style="color: #000000;margin-top: 15px;">Start Time (2)
                              </p>
                            </div>
                            <div class="col-12 col-md-8 col-sm-12">
                              <input type="time" class="form-control" id="bd_add_start_2" style="margin-top: 10px;" name="start_time_2">
                            </div>
                          </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-12">
                          <div class="row">
                            <div class="col-12 col-md-4 col-sm-12">
                              <p style="color: #000000;margin-top: 15px;">End Time (2)
                              </p>
                            </div>
                            <div class="col-12 col-md-8 col-sm-12">
                            <input type="time" class="form-control" id="bd_add_end_2" style="margin-top: 10px;" name="end_time_2">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-md-6 col-sm-12">
                          <div class="row">
                            <div class="col-12 col-md-4 col-sm-12">
                              <p style="color: #000000;margin-top: 15px;">Start Time (3)
                              </p>
                            </div>
                            <div class="col-12 col-md-8 col-sm-12">
                            <input type="time" class="form-control" id="bd_add_start_3" style="margin-top: 10px;" name="start_time_3">
                            </div>
                          </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-12">
                          <div class="row">
                            <div class="col-12 col-md-4 col-sm-12">
                              <p style="color: #000000;margin-top: 15px;">End Time (3)
                              </p>
                            </div>
                            <div class="col-12 col-md-8 col-sm-12">
                            <input type="time" class="form-control" id="bd_add_end_3" style="margin-top: 10px;" name="end_time_3">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6 col-md-6 col-sm-6">
                          <div class="row">
                            <div class="col-12 col-md-4 col-sm-12">
                              <p style="color: #000000;margin-top: 15px;">Start Time (4)
                              </p>
                            </div>
                            <div class="col-12 col-md-8 col-sm-12">
                              
                            <input type="time" class="form-control" id="bd_add_start_4" style="margin-top: 10px;" name="start_time_4">
                            </div>
                          </div>
                        </div>
                        <div class="col-6 col-md-6 col-sm-12">
                          <div class="row">
                            <div class="col-12 col-md-4 col-sm-12">
                              <p style="color: #000000;margin-top: 15px;">End Time (4)
                              </p>
                            </div>
                            <div class="col-12 col-md-8 col-sm-12">
                            <input type="time" class="form-control" id="bd_add_end_4" style="margin-top: 10px;" name="end_time_4">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-md-12 col-sm-12">
                        <div class="row">
                          <div class="col-12 col-md-2 col-sm-12">
                            <p style="color: #000000;margin-top: 15px;">Keterangan
                            </p>
                          </div>
                          <div class="col-12 col-md-10 col-sm-12">
                            <input type="text" class="form-control" id="bd_add_keterangan" name="keterangan" placeholder="Keterangan" style="margin-top: 10px;">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <!-- Modal -->
            <!-- <div class="modal fade" id="datastanby" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Standby Status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <form action="<?= base_url('imputer/save_stanby'); ?>" method="POST">
                    <input type="hidden" value="<?= $daily_activity['activity']['id']; ?>" name="activity">
                    <div class="modal-body">
                      <div class="col-12 col-md-12 col-sm-12">
                        <div class="row">
                          <div class="col-12 col-md-4 col-sm-12">
                            <p style="color: #000000;margin-top: 10px;">Standby Code
                            </p>
                          </div>
                          <div class="col-12 col-md-8 col-sm-12">
                            <select data-plugin="selectpicker" name="stanby_code" style="width: 75%; margin-top: 10px;">
                            <?php
                              foreach ($stanby_data as $s) {
                                echo "<option value='". $s['id'] ."'>". $s['kode'] ."</option>";
                              }
                            ?>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                  </form>
                </div>
              </div>
            </div> -->

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
  <!-- <script src="<?= base_url(); ?>assets/global/js/Plugin/bootstrap-sweetalert.js"></script> -->
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.4/moment.js"></script>                            
  <script>
    $(document).ready(function() {

      var textKodeProses = $('#drpKodeProses option:selected').text();
      $('#unit_kode_proses').text(textKodeProses == 'Pilih' ? '-' : textKodeProses);

      var textKodeAktivitas = $('#drpKodeAktivitas option:selected').text();
      $('#unit_kode_aktivitas').text(textKodeAktivitas == 'Pilih' ? '-' : textKodeAktivitas);

      $('#btn_add_ritasi').on('click', function(e) {
        var id_activity = $('#id').val();
        var tgl = $('#tgl_aktifitas').val();
        if (id_activity == null || id_activity == '') {
          e.preventDefault();
          swal({
            icon: 'warning',
            title: 'Please create activity first',
            showConfirmButton: false,
          });
          $("html, body").animate({ scrollTop: 0 }, "slow");
        } else {
          $('#btn_add_ritasi').attr('href', '<?= base_url('imputer/daily-activity/'.$no_unit.'/ritasi/'); ?>' + tgl);
        }
      });

      $('#btn_add_standby').on('click', function() {
        var id_activity = $('#id').val();
        if (id_activity == null || id_activity == '') {
          swal({
            icon: 'warning',
            title: 'Please create activity first',
            showConfirmButton: false,
          });
          $("html, body").animate({ scrollTop: 0 }, "slow");
        } else {
          $('#btn_add_standby').attr('data-toggle', 'modal');
          $('#btn_add_standby').attr('data-target', '#datastanby');
        }
      });

      $('#btn_add_breakdown').on('click', function() {
        var id_activity = $('#id').val();
        if (id_activity == null || id_activity == '') {
          swal({
            icon: 'warning',
            title: 'Please create activity first',
            showConfirmButton: false,
          });
          $("html, body").animate({ scrollTop: 0 }, "slow");
        } else {
          $('#btn_add_breakdown').attr('data-toggle', 'modal');
          $('#btn_add_breakdown').attr('data-target', '#databreakdown');
        }
      });

      $('.select2').select2();
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
          } else if (flashData == 'upload failed') {
              title = 'Oops! Something went wrong';
              msg = 'Failed to upload file';
          } else if (flashData == 'delete failed') {
              title = 'Oops! Something went wrong';
              msg = 'Failed to delete data';
          } else if (flashData == 'invalid time') {
              title = 'Oops! Something went wrong';
              msg = 'End time must be greater than start time';
          }

          if (title == null && msg == null) {
              swal({
                icon: 'success',
                title: 'Success',
                showConfirmButton: false,
                timer: 2000
              });    
          } else {
              swal({
              icon: 'warning',
              title: msg,
              showConfirmButton: false,
              timer: 2000
            })
          }
      }

      $('#operator').on('change', function() {
        id_operator = $(this).val();
        $.get('http://localhost/bodc/api/operator/get_nrp/'+id_operator, function(res) {
          $('#nrp').val(res);
        })
      });

      $('#drpKodeProses').on('change', function() {
        var text = $('#drpKodeProses option:selected').text();
        $('#unit_kode_proses').text(text);
      });

      $('#drpKodeMaterial').on('change', function() {
        var text = $('#drpKodeMaterial option:selected').text();
        $('#unit_kode_material').text(text);
      });

      $('#drpKodeAktivitas').on('change', function() {
        var text = $('#drpKodeAktivitas option:selected').text();
        $('#unit_kode_aktivitas').text(text);
      });

      $('#hm_akhir').on('keyup change', function() {
        var hm_awal = $('#hm_awal').val();
        var hm_akhir = $('#hm_akhir').val();

        if (hm_awal != '' && hm_akhir != '') {
          var total = parseFloat(hm_akhir) - parseFloat(hm_awal);
          $('#total_hm').val(total);  
        }

        if (hm_awal == '' || hm_akhir == '') {
          $('#total_hm').val('');
        }
      });

      $('#km_akhir').on('keyup change', function() {
        var km_awal = $('#km_awal').val();
        var km_akhir = $('#km_akhir').val();

        if (km_awal != '' && km_akhir != '') {
          var total = parseFloat(km_akhir) - parseFloat(km_awal);
          $('#total_km').val(total);
        }

        if (km_awal == '' || km_akhir == '') {
          $('#total_km').val('');
        }
      });

      $('#jam_akhir').change(function() {
        var jam_awal = $('#jam_awal').val();
        var jam_akhir = $('#jam_akhir').val();

        $.post('<?= base_url('Imputer/get_total_jam') ?>', {
          jam_awal: jam_awal,
          jam_akhir: jam_akhir
        }, function(res) {
          $('#total_jam').val(res);
        });
      });

      function alert_success() {
        swal({
          icon: 'success',
          title: 'Sukses',
          showConfirmButton: false,
          timer: 4000
        })
      }

      function alert_fail(message = 'Gagal') {
        swal({
          icon: 'warning',
          title: message,
          showConfirmButton: false,
          timer: 4000
        })
      }





      // SUBMIT ACTIVITY
      $('#activityForm').on('submit', function(e) {
        e.preventDefault();
        var id = $('#id').val();
        var nomor_unit = $('#nomor_unit').val();
        var tgl_aktifitas = $('#tgl_aktifitas').val();
        var operator = $('#operator').val();
        var kode_proses = $('#drpKodeProses').val();
        var kode_material = $('#drpKodeMaterial').val();
        var kode_aktivitas = $('#drpKodeAktivitas').val();
        var hm_awal = $('#hm_awal').val();
        var hm_akhir = $('#hm_akhir').val();
        var total_hm = $('#total_hm').val();
        var km_awal = $('#km_awal').val();
        var km_akhir = $('#km_akhir').val();
        var total_km = $('#total_km').val();
        var jam_awal = $('#jam_awal').val();
        var jam_akhir = $('#jam_akhir').val();
        var total_jam = $('#total_jam').val();
        var fuel = $('#fuel').val();
        var rata_rata = $('#rata_rata').val();
        var stanby_code = $('#drpStanbyCode').val();
        if(moment(jam_awal,'hh:mm a') > moment(jam_akhir,'hh:mm a')){
          alert_fail('Failed, Because End Time must be greater Start Time ')
        }else{
          
        $.post('<?= base_url("imputer/save_activity"); ?>', { 
          id: id,
          nomor_unit: nomor_unit,
          tgl_aktifitas: tgl_aktifitas,
          operator: operator,
          proses: kode_proses,
          material: kode_material,
          aktivitas: kode_aktivitas,
          hm_awal: hm_awal,
          hm_akhir: hm_akhir,
          km_awal: km_awal,
          km_akhir: km_akhir,
          jam_awal: jam_awal,
          jam_akhir: jam_akhir,
          fuel: fuel,
          rata_rata: rata_rata,
        }, function (data) {
          if (data.success) {
            alert_success();

            $('#id').val(data.data);
            $('#addStandbyIdActivity').val(data.data);
            $('#addBreakdownIdActivity').val(data.data);

            var tgl = $('#tgl_aktifitas').val();
            $('#btn_add_ritasi').attr('href', '<?= base_url('imputer/daily-activity/'.$no_unit.'/ritasi/'); ?>' + tgl);

            $('#btn_add_standby').attr('data-toggle', 'modal');
            $('#btn_add_standby').attr('data-target', '#datastanby');
          } else {
            alert_fail();
          }
          console.log(data);
        });
        }
      });

      // SAVE UNIT STATUS
      $('#unitStatusForm').on('submit', function(e) {
        e.preventDefault();

        var id_activity = $('#id').val();
        if (id_activity == null || id_activity == '') {
          swal({
            icon: 'warning',
            title: 'Please create activity first',
            showConfirmButton: false,
          });
          $("html, body").animate({ scrollTop: 0 }, "slow");
        } else {
          var nomor_unit = $('#nomor_unit').val();
          var tgl_aktifitas = $('#tgl_aktifitas').val();
          var kode_proses = $('#drpKodeProses').val();
          var kode_aktivitas = $('#drpKodeAktivitas').val();
          var loader = $('#drpLoader').val();
          var loading_point = $('#loading_point').val();
          var dumping_area = $('#dumping_area').val();
          var jarak = $('#jarak').val();
          var truck_size = $('#truck_size').val();
          var total_ton = $('#total_ton').val();
          var total_ritasi = $('#ritasi').val();
          var notes = $('#notes').val();

          $.post('<?= base_url("imputer/save_unit_status"); ?>', { 
            no_unit: nomor_unit,
            tgl_aktifitas: tgl_aktifitas,
            kode_proses: kode_proses,
            kode_aktivitas: kode_aktivitas,
            loader: loader,
            loading_point: loading_point,
            dumping_area: dumping_area,
            jarak: jarak,
            truck_size: truck_size,
            total_ton: total_ton,
            notes: notes,
            total_ritasi: total_ritasi
          }, function (data) {
            if (data.success) {
              alert_success();
            } else {
              alert_fail();
            }
          });
        }
      });

      // ADD STANDBY STATUS
      $('#addStanbyStatusForm').on('submit', function(e) {
        e.preventDefault();
        // $('#datastanby').modal('hide');
        var id_activity = $('#addStandbyIdActivity').val();
        var stanby_code = $('#addStandbyDrpStanbyCode').val();
        var start_time_1 = $('#add_start_1').val();
        var start_time_2 = $('#add_start_2').val();
        var start_time_3 = $('#add_start_3').val();
        var start_time_4 = $('#add_start_4').val();
        var end_time_1 = $('#add_end_1').val();
        var end_time_2 = $('#add_end_2').val();
        var end_time_3 = $('#add_end_3').val();
        var end_time_4 = $('#add_end_4').val();
        var keterangan = $('#add_keterangan').val();
        // var breakdown = $('#addStandbyDrpBreakdown').val();

        $.post('<?= base_url("imputer/save_stanby"); ?>', { 
          activity: id_activity,
          stanby_code: stanby_code,
          start_time_1: start_time_1,
          start_time_2: start_time_2,
          start_time_3: start_time_3,
          start_time_4: start_time_4,
          end_time_1: end_time_1,
          end_time_2: end_time_2,
          end_time_3: end_time_3,
          end_time_4: end_time_4,
          keterangan: keterangan,
          // breakdown: breakdown,
        }, function (data) {
          if (data.success) {
            $('#datastanby').modal('hide');
            alert_success();
            var no_unit = $('#nomor_unit').val();
            var tgl_aktifitas = $('#tgl_aktifitas').val();
            setTimeout(function(){
              window.location.href = "<?= base_url('imputer/daily-activity/'); ?>" + no_unit + "/" + tgl_aktifitas;
            }, 1500);
          } else {
            alert_fail(data.message);
          }
        });
      });

      // ADD STANDBY STATUS
      $('#addBreakdownStatusForm').on('submit', function(e) {
        e.preventDefault();
        
        var id_activity = $('#addBreakdownIdActivity').val();
        var breakdown_status = $('#addBreakdownDrpStatus').val();
        var start_time_1 = $('#bd_add_start_1').val();
        var start_time_2 = $('#bd_add_start_2').val();
        var start_time_3 = $('#bd_add_start_3').val();
        var start_time_4 = $('#bd_add_start_4').val();
        var end_time_1 = $('#bd_add_end_1').val();
        var end_time_2 = $('#bd_add_end_2').val();
        var end_time_3 = $('#bd_add_end_3').val();
        var end_time_4 = $('#bd_add_end_4').val();
        var keterangan = $('#bd_add_keterangan').val();

        $.post('<?= base_url("imputer/save_breakdown"); ?>', { 
          activity: id_activity,
          breakdown_status: breakdown_status,
          start_time_1: start_time_1,
          start_time_2: start_time_2,
          start_time_3: start_time_3,
          start_time_4: start_time_4,
          end_time_1: end_time_1,
          end_time_2: end_time_2,
          end_time_3: end_time_3,
          end_time_4: end_time_4,
          keterangan: keterangan,
        }, function (data) {
          if (data.success) {
            $('#databreakdown').modal('hide');
            alert_success();
            var no_unit = $('#nomor_unit').val();
            var tgl_aktifitas = $('#tgl_aktifitas').val();
            setTimeout(function(){
              window.location.href = "<?= base_url('imputer/daily-activity/'); ?>" + no_unit + "/" + tgl_aktifitas;
            }, 1500);
          } else {
            alert_fail(data.message);
          }
        });
      });

    });

    $('.delete-btn').on('click', function(e){
      e.preventDefault();
      const href = $(this).attr('href');
      swal({
          title: 'Are You Sure?',
          text: "You will not be able to restore this data",
          type: 'warning',
          buttons:{
            confirm: {
              text : 'Yes, Delete!',
              className : 'btn btn-success'
            },
            cancel: {
              text : 'No',
              visible: true,
              className: 'btn btn-danger'
            }
          }
      }).then((Delete) => {
          if (Delete) {
            document.location.href = href;  
          }else {
            swal.close();
          }
        });
    });
  </script>
</body>

</html>