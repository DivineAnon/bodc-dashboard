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
              <form id="editActivityForm" method="POST" class="form-inline">
                <input type="hidden" id="id_activity" name="id" value="<?= $daily_activity['activity']['id']; ?>">
                <div class="col-12 col-md-2 col-sm-12">
                  <p style="color: #000000;margin-top:10px;">Nomor Unit
                  </p>
                </div>
                <div class="col-12 col-md-10 col-sm-12">
                  <input type="text" class="form-control" id="nomor_unit" name="nomor_unit" value="<?= $daily_activity['activity']['no_unit']; ?>" placeholder="Nomor Unit" required readonly>
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
                  <select class="select2" id="drpKodeMaterial" name="material" style="width: 100%; margin-top: 10px;" required>
                    <option disabled selected>Pilih</option>
                  <?php
                    foreach ($materials as $material) {
                      $selected = "";
                      if ($material['id'] == $daily_activity['activity']['id_material']) {
                        $selected = "selected";
                      }
                      echo "<option value='". $material['id'] ."' ". $selected .">". $material['kode'] ."</option>";
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
                        style="width: 75%; margin-top: 10px;" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
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
                        style="width: 75%; margin-top: 10px;" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
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
                        style="width: 75%; margin-top: 10px;" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
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
                        style="width: 75%; margin-top: 10px;" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
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
                        style="width: 75%; margin-top: 10px;" value="<?= $daily_activity['activity']['jm_opt_awal'] == NULL ? '' : date('H:i', strtotime($daily_activity['activity']['jm_opt_awal'])); ?>" required>
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
                  <p style="color: #000000;">Fuel
                  </p>
                </div>
                <div class="col-12 col-md-10 col-sm-12">
                  <input type="text" class="form-control" id="fuel" name="fuel" placeholder="Fuel"
                    style="margin-top: 10px;" value="<?= $daily_activity['activity']['fuel']; ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                </div>
                <div class="col-12 col-md-2 col-sm-12">
                  <p style="color: #000000;">Rata-rata
                  </p>
                </div>
                <div class="col-12 col-md-10 col-sm-12">
                  <input type="text" class="form-control" id="rata_rata" name="rata_rata" placeholder="Rata-rata" value="<?= $daily_activity['activity']['rata_rata']; ?>" 
                    style="margin-top: 10px;" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                </div>
                <!-- <div class="col-12 col-md-2 col-sm-12">
                  <p style="color: #000000;">Stanby Code
                  </p>
                </div> -->
                <!-- <div class="col-12 col-md-4 col-sm-12">
                  <select data-plugin="selectpicker" id="drpStanbyCode" name="stanby_code" style="width: 75%; margin-top: 10px;" required>
                  <?php
                    foreach ($stanby_data as $s) {
                      $selected = "";
                      if ($s['id'] == $daily_activity['stanby_code']) {
                        $selected = "selected";
                      }
                      echo "<option value='". $s['id'] ."' ". $selected .">". $s['kode'] ."</option>";
                    }
                  ?>
                  </select>
                </div> -->
                <div class="col-12 col-md-6 col-sm-12">
                  <button type="submit" class="btn btn-raised btn-primary btn-block waves-effect waves-classic"
                    style="width: 30%; margin-top: 10px;">
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
                    <p>Nomor Unit : <?= $daily_activity['activity']['no_unit']; ?></p>
                  </div>
                  <div class="col-12 col-md-6 col-sm-12">
                    <div class="row">
                      <div class="col-12 col-md-4 col-sm-12">
                        <p style="margin-top: 5px;">Loader</p>
                      </div>
                      <div class="col-12 col-md-8 col-sm-12">
                        <select class="select2" id="drpLoader" name="loader" style="width: 75%; margin-top: 10px;">
                          <option disabled selected>Pilih</option>
                        <?php
                          foreach ($loaders as $loader) {
                            $selected = "";
                            if ($loader['id'] == $daily_activity['unit_status']['id_loader']) {
                              $selected = "selected";
                            }
                            echo "<option value='". $loader['id'] ."' ". $selected .">". $loader['nama'] ."</option>";
                          }
                        ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-sm-12">
                    <p>Kode Proses : <span id="unit_kode_proses"><?= $daily_activity['unit_status']['kode_proses']; ?></span></p>
                  </div>
                  <div class="col-12 col-md-6 col-sm-12">
                    <div class="row">
                      <div class="col-12 col-md-4 col-sm-12">
                        <p style="margin-top: 25px;">Loading Point</p>
                      </div>
                      <div class="col-12 col-md-8 col-sm-12 mt-10">
                        <input type="text" class="form-control" id="loading_point" name="loading_point" placeholder="Loading Point" value="<?= $daily_activity['unit_status']['loading_point']; ?>" 
                          style="margin-top: 10px;">
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-sm-12">
                    <p>Kode Material : <span id="unit_kode_material"><?= $daily_activity['unit_status']['kode_material']; ?></span></p>
                  </div>
                  <div class="col-12 col-md-6 col-sm-12">
                    <div class="row">
                      <div class="col-12 col-md-4 col-sm-12">
                        <p style="margin-top: 25px;">Dumping Area</p>
                      </div>
                      <div class="col-12 col-md-8 col-sm-12 mt-10">
                        <input type="text" class="form-control" id="dumping_area" name="dumping_area" placeholder="Dumping Area"
                          style="margin-top: 10px;" value="<?= $daily_activity['unit_status']['dumping_area']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-sm-12">
                    <p>Kode Aktivitas : <span id="unit_kode_aktivitas"><?= $daily_activity['unit_status']['kode_aktifitas']; ?></span></p>
                  </div>
                  <div class="col-12 col-md-6 col-sm-12">
                    <div class="row">
                      <div class="col-12 col-md-4 col-sm-12">
                        <p style="margin-top: 25px;">Jarak (KM)</p>
                      </div>
                      <div class="col-12 col-md-8 col-sm-12 mt-10">
                        <input type="text" class="form-control" id="jarak" name="jarak" placeholder="Jarak (KM)" style="margin-top: 10px;" value="<?= $daily_activity['unit_status']['jarak']; ?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6 col-sm-12 mt-10">

                  </div>
                  <div class="col-12 col-md-12 col-sm-12">
                    <div class="row">
                      <div class="col-12 col-md-2 col-sm-12">
                        <p style="margin-top: 15px;">Total Ritasi</p>
                      </div>
                      <div class="col-12 col-md-2 col-sm-12">
                        <input type="text" class="form-control" name="ritasi" id="ritasi" placeholder="Total Ritasi" value="<?= ($daily_activity['unit_status']['total_ritasi'] != NULL) ? $daily_activity['unit_status']['total_ritasi'] : ''; ?>" style="margin-top: 10px;" readonly>
                      </div>
                      <div class="col-12 col-md-8 col-sm-12">
                        <a href="<?= base_url('imputer/daily-activity/'.$daily_activity['activity']['no_unit'].'/ritasi'); ?>" class="btn btn-raised btn-primary btn-block waves-effect waves-classic" style="width: 30%; margin-top: 10px; margin-left: 100px;" id="btn_add_ritasi">
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
                        <input type="text" class="form-control" id="total_ton" name="total_ton" placeholder="Total Ton" value="<?= $daily_activity['activity']['total_ton']; ?>" style="margin-top: 10px;" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-12 col-sm-12 mt-20">
                    <button type="submit" class="btn btn-raised btn-primary btn-block waves-effect waves-classic"
                      style="width: 70%;">
                      Save Loading Point
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- <div class="col-12 col-md-12 col-sm-12 mt-15"> -->
            <!-- Panel Basic -->
            <div class="panel" style="margin-left: 50px;">
              <header class="panel-heading text-center">
                <div class="panel-actions">
                  <button type="button" class="btn" style="background:#0267ca; color: #fff; width: 5rem;" data-toggle="modal" data-target="#datastanby">Add</button>
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
                      <th>Breakdown</th>
                      <th>Create Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody id="stanby_status_container">
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
                      <td><?= $s['breakdown']; ?></td>
                      <td><?= $s['create_date']; ?></td>
                      <td>
                        <a href="#" class="button mr-10" data-toggle="modal" data-target="#editModal<?= $s['id']; ?>" style="text-decoration: none;">
                          <i class="icon md-edit"></i>
                        </a>
                        <a href="<?= base_url('imputer/delete_stanby/'. $s['id'].'/'.$daily_activity['activity']['no_unit']); ?>" class="button delete-btn">
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
                            <div class="modal-body">
                              <div class="col-12 col-md-12 col-sm-12">
                                <div class="row">
                                  <div class="col-12 col-md-2 col-sm-12">
                                    <p style="color: #000000;margin-top: 10px;">Stanby
                                    </p>
                                  </div>
                                  <div class="col-12 col-md-10 col-sm-12">
                                    <input type="text" class="form-control" name="stanby_id" placeholder="Total KM"
                                      style="margin-top: 10px;" value="<?= $s['id']; ?>" readonly>
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
                              <div class="col-12 col-md-12 col-sm-12" style="margin-top: 8px;">
                                <div class="row">
                                  <div class="col-12 col-md-2 col-sm-12">
                                    <p style="color: #000000; margin-top: 10px;">Breakdown
                                    </p>
                                  </div>
                                  <div class="col-12 col-md-10 col-sm-12">
                                    <select class="select2 form-control" name="breakdown">
                                      <option disabled selected>Pilih</option>
                                      <option value="SCM" <?php if ($s['breakdown'] == 'SCM') echo 'selected'; ?>>SCM</option>
                                      <option value="USM" <?php if ($s['breakdown'] == 'USM') echo 'selected'; ?>>USM</option>
                                      <option value="TRM" <?php if ($s['breakdown'] == 'TRM') echo 'selected'; ?>>TRM</option>
                                      <option value="ICM" <?php if ($s['breakdown'] == 'ICM') echo 'selected'; ?>>ICM</option>
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
                      <div class="col-12 col-md-12 col-sm-12" style="margin-top: 8px;">
                        <div class="row">
                          <div class="col-12 col-md-2 col-sm-12">
                            <p style="color: #000000; margin-top: 10px;">Breakdown
                            </p>
                          </div>
                          <div class="col-12 col-md-10 col-sm-12">
                            <select class="select2" id="addStandbyDrpBreakdown" name="breakdown">
                              <option disabled selected>Pilih</option>
                              <option value="SCM">SCM</option>
                              <option value="USM">USM</option>
                              <option value="TRM">TRM</option>
                              <option value="ICM">ICM</option>
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
            </div>

          <!-- </div> -->
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

  <script>
    $(document).ready(function() {
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
              icon: 'danger',
              title: 'Gagal',
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

      $('#hm_akhir').keyup(function() {
        var hm_awal = $('#hm_awal').val();
        var hm_akhir = $('#hm_akhir').val();

        if (hm_awal != '' && hm_akhir != '') {
          var total = parseInt(hm_akhir) - parseInt(hm_awal);
          $('#total_hm').val(total);  
        }

        if (hm_awal == '' || hm_akhir == '') {
          $('#total_hm').val('');
        }
      });

      $('#km_akhir').keyup(function() {
        var km_awal = $('#km_awal').val();
        var km_akhir = $('#km_akhir').val();

        if (km_awal != '' && km_akhir != '') {
          var total = parseInt(km_akhir) - parseInt(km_awal);
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
          timer: 2000
        })
      }

      function alert_fail() {
        swal({
          icon: 'danger',
          title: 'Gagal',
          showConfirmButton: false,
          timer: 2000
        })
      }





      // UPDATE ACTIVITY
      $('#editActivityForm').on('submit', function(e) {
        e.preventDefault();
        var id = $('#id_activity').val();
        var nomor_unit = $('#nomor_unit').val();
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

        $.post('<?= base_url("imputer/update_activity"); ?>', { 
          id: id,
          nomor_unit: nomor_unit,
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
          standby_code: stanby_code,
        }, function (data) {
          if (data.success) {
            alert_success();
          } else {
            alert_fail();
          }
        });
      });


      // UPDATE UNIT STATUS
      $('#unitStatusForm').on('submit', function(e) {
        e.preventDefault();
        var nomor_unit = $('#nomor_unit').val();
        var loader = $('#drpLoader').val();
        var loading_point = $('#loading_point').val();
        var dumping_area = $('#dumping_area').val();
        var jarak = $('#jarak').val();
        var total_ton = $('#total_ton').val();

        $.post('<?= base_url("imputer/update_unit_status"); ?>', { 
          no_unit: nomor_unit,
          loader: loader,
          loading_point: loading_point,
          dumping_area: dumping_area,
          jarak: jarak,
          total_ton: total_ton
        }, function (data) {
          if (data.success) {
            alert_success();
          } else {
            alert_fail();
          }
        });
      });


      // ADD STANDBY STATUS
      $('#addStanbyStatusForm').on('submit', function(e) {
        e.preventDefault();
        $('#datastanby').modal('hide');
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
        var breakdown = $('#addStandbyDrpBreakdown').val();

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
          breakdown: breakdown,
        }, function (data) {
          if (data.success) {
            alert_success();
            setTimeout(function(){
              window.location.href = "<?= base_url('imputer/edit-daily-activity/'. $daily_activity['activity']['no_unit']); ?>";
            }, 1200);
          } else {
            alert_fail();
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