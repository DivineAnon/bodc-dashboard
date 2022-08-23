<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<?php

date_default_timezone_set('Asia/Jakarta');

?>
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
 <style>
    input:focus, textarea:focus, .select2-container *:focus {
        border: 2px solid blue;
    }
  </style>


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
              if($this->session->id_role == '4'){
              ?>
                <a href="<?php echo base_url().'radio/hourly_report';?>" class="nav-link waves-effect waves-light waves-round">
                  <i class="icon md-arrow-left" style="font-size: 20px;">&nbsp;Back</i>
                </a>
              <?php  
              }else{
              ?>
                <a href="<?php echo base_url().'Validator/hourly_report';?>" class="nav-link waves-effect waves-light waves-round">
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
                  aria-hidden="true"></i> </i> <?php echo $this->session->name;?></a>
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
        <a class="animsition-link" href="<?= base_url('radio'); ?>">
          <i class="site-menu-icon icon md-home" style="font-size: 20px" aria-hidden="true"></i>
          <span class="site-menu-title">Dashboard</span>
        </a>
      </li>
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
      <div class="panel" style="margin-left: 30px;">
        <div class="panel-body">
          <div class="card-block">      
           <form id="form_hourly_report" class="form-inline">
              <div class="col-lg-4 col-md-6 col-sm-12">
               <p style="margin-top: 1rem;">Nomor Unit</p>
              </div>
              <div class="col-lg-8 col-md-6 col-sm-12">
                  <input type="hidden" name="id" id="id_hourly_radio" value="">
                  <input type="text" class="form-control" name="no_unit" id="no_unit" value="<?php echo $no_unit;?>" readonly style="width: 100% !important;">
              </div>

              <div class="col-lg-4 col-md-6 col-sm-12">
               <p style="margin-top: 1rem;">Date Activity</p>
              </div>
              <div class="col-lg-8 col-md-6 col-sm-12">
                  <input type="date" class="form-control" name="tgl_aktifitas" id="tgl_aktifitas" style="width: 100% !important;" required>
              </div>

              <div class="col-lg-4 col-md-6 col-sm-12">
                <p style="margin-top: 1rem;">Type Unit</p>
              </div>
              <div class="col-lg-8 col-md-6 col-sm-12">
                <select name="type_unit" id="type_unit" class="select2" required style="width: 100%;">
                  <!-- <option value="" disabled selected class="type_unit">Select type unit</option> -->
                  <?php
                    if(!empty($type_unit['id'])){
                      for ($i=0; $i < count($type_unit['id']); $i++) { 
                        $id = $type_unit['id'][$i];
                        $nama = $type_unit['nama'][$i];
                      
                          if($id == '1'){
                          ?>
                            <option value="<?php echo $id;?>" class="type_unit" selected><?php echo $nama;?></option>

                          <?php  
                          }else{
                          ?>
                          <?php
                          }
                      ?>

                      <?php
                      }
                    }
                  ?>
                </select>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
               <p style="margin-top: 1rem;">Block</p>
              </div>
              <div class="col-lg-8 col-md-6 col-sm-12">
                <select name="block" class="form-control select2" id="block" required style="width: 100%;">
                  <option value="" disabled selected class="block">Select block</option>
                  <?php
                    if(!empty($block['id'])){
                      for ($i=0; $i < count($block['id']); $i++) { 
                        $id = $block['id'][$i];
                        $nama = $block['nama'][$i];
                      ?>
                        <option value="<?php echo $id;?>" class="block"><?php echo $nama;?></option>
                      <?php
                      }
                    }
                  ?>
                </select>
              </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
             <p style="margin-top: 1rem;">Operator</p>
            </div>
            <div class="col-lg-8 col-md-6 col-sm-12">
              <select name="operator" class="form-control select2" id="operator" required style="width: 100%;">
                  <option value="" disabled selected class="operator">Select operator</option>
                  <?php
                    if(!empty($operator['id'])){
                      for ($i=0; $i < count($operator['id']); $i++) { 
                        $id = $operator['id'][$i];
                        $nama = $operator['nama'][$i];
                      ?>
                        <option value="<?php echo $id;?>" class="operator"><?php echo $nama;?></option>
                      <?php
                      }
                    }
                  ?>
                </select>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
              <p style="margin-top: 1rem;">DT</p>
            </div>
              <div class="col-lg-8 col-md-6 col-sm-12">
                  <select name="dt_ton" class="form-control select2" id="dt_ton" required style="width: 100%;">
                    <option value="" disabled selected class="dt_ton">Select dt</option>
                    <?php
                      if(!empty($dt_ton['id'])){
                        for ($i=0; $i < count($dt_ton['id']); $i++) { 
                          $id = $dt_ton['id'][$i];
                          $nama = $dt_ton['nama'][$i];
                        ?>
                          <option value="<?php echo $id;?>" class="dt_ton"><?php echo $nama;?></option>
                        <?php
                        }
                      }
                    ?>
                  </select>
              </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
              <p style="margin-top: 1rem;">Jarak</p>
            </div>
              <div class="col-lg-8 col-md-6 col-sm-12">
                  <input type="number" min="0" class="form-control" name="jarak" id="jarak" value="0" autocomplete="off" required style="width: 100%;">
              </div>
              <div class="col-lg-1 col-md-12 col-sm-12">
                <p style="margin-top: 1rem;">n/Rit Time</p>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <p style="margin-top: 1rem;">Material</p>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <p style="margin-top: 1rem;">n/Rit</p>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <p style="margin-top: 1rem;">Work</p>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <p style="margin-top: 1rem;">Remark Delay</p>
              </div>
              <div class="col-lg-3 col-md-12 col-sm-12">
                <p style="margin-top: 1rem;">Problem Productivity</p>
              </div>
              
              <div class="col-lg-1 col-md-12 col-sm-12">
                <p style="margin-top: 1rem;"><?php echo '06:00';?></p>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="material" class="form-control select2" id="mat_1" style="width:100% !important;">
                    <option value="" disabled selected class="mat_1">Select material</option>
                    <?php
                      if(!empty($material['id'])){
                        for ($i=0; $i < count($material['id']); $i++) { 
                          $id = $material['id'][$i];
                          $kode = $material['kode'][$i];
                        ?>
                          <option value="<?php echo $id;?>" class="mat_1"><?php echo $kode;?></option>
                        <?php
                        }
                      }
                    ?>
                  </select>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="number" class="form-control" name="n_rit" id="total_1" min="0" autocomplete="off" value="0" required style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="time" class="form-control" name="work_1" id="work_1" autocomplete="off" style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="remark" class="form-control select2" id="remark_1" style="width:100% !important;">
                  <option value="" disabled selected class="remark_1">Select remark</option>
                  <?php
                    if(!empty($standby_code['id'])){
                      for ($i=0; $i < count($standby_code['id']); $i++) { 
                        $id = $standby_code['id'][$i];
                        $nama = $standby_code['nama'][$i];
                      ?>
                        <option value="<?php echo $id;?>" class="remark_1"><?php echo $nama;?></option>
                      <?php
                      }
                    }
                  ?>
                </select>
              </div>
              <div class="col-lg-3 col-md-12 col-sm-12">
                <input type="text" class="form-control" name="problem_1" id="problem_1" autocomplete="off" style="width:100% !important;">
              </div>

              <div class="col-lg-1 col-md-12 col-sm-12">
                <p style="margin-top: 1rem;"><?php echo '07:00';?></p>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="material" class="form-control select2" id="mat_2" style="width:100% !important;">
                    <option value="" disabled selected class="mat_2">Select material</option>
                    <?php
                      if(!empty($material['id'])){
                        for ($i=0; $i < count($material['id']); $i++) { 
                          $id = $material['id'][$i];
                          $kode = $material['kode'][$i];
                        ?>
                          <option value="<?php echo $id;?>" class="mat_2"><?php echo $kode;?></option>
                        <?php
                        }
                      }
                    ?>
                  </select>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="number" class="form-control" name="n_rit" id="total_2" min="0" autocomplete="off" value="0" required style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="time" class="form-control" name="work_1" id="work_2" autocomplete="off" style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="remark" class="form-control select2" id="remark_2" style="width:100% !important;">
                  <option value="" disabled selected class="remark_2">Select remark</option>
                  <?php
                    if(!empty($standby_code['id'])){
                      for ($i=0; $i < count($standby_code['id']); $i++) { 
                        $id = $standby_code['id'][$i];
                        $nama = $standby_code['nama'][$i];
                      ?>
                        <option value="<?php echo $id;?>" class="remark_2"><?php echo $nama;?></option>
                      <?php
                      }
                    }
                  ?>
                </select>
              </div>
              <div class="col-lg-3 col-md-12 col-sm-12">
                <input type="text" class="form-control" name="problem_2" id="problem_2" autocomplete="off" style="width:100% !important;">
              </div>

              <div class="col-lg-1 col-md-12 col-sm-12">
                <p style="margin-top: 1rem;"><?php echo '08:00';?></p>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="material" class="form-control select2" id="mat_3" style="width:100% !important;">
                    <option value="" disabled selected class="mat_3">Select material</option>
                    <?php
                      if(!empty($material['id'])){
                        for ($i=0; $i < count($material['id']); $i++) { 
                          $id = $material['id'][$i];
                          $kode = $material['kode'][$i];
                        ?>
                          <option value="<?php echo $id;?>" class="mat_3"><?php echo $kode;?></option>
                        <?php
                        }
                      }
                    ?>
                  </select>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="number" class="form-control" name="n_rit" id="total_3" min="0" autocomplete="off" value="0" required style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="time" class="form-control" name="work_3" id="work_3" autocomplete="off" style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="remark" class="form-control select2" id="remark_3" style="width:100% !important;">
                  <option value="" disabled selected class="remark_3">Select remark</option>
                  <?php
                    if(!empty($standby_code['id'])){
                      for ($i=0; $i < count($standby_code['id']); $i++) { 
                        $id = $standby_code['id'][$i];
                        $nama = $standby_code['nama'][$i];
                      ?>
                        <option value="<?php echo $id;?>" class="remark_3"><?php echo $nama;?></option>
                      <?php
                      }
                    }
                  ?>
                </select>
              </div>
              <div class="col-lg-3 col-md-12 col-sm-12">
                <input type="text" class="form-control" name="problem_3" id="problem_3" autocomplete="off" style="width:100% !important;">
              </div>

              <div class="col-lg-1 col-md-12 col-sm-12">
                <p style="margin-top: 1rem;"><?php echo '09:00';?></p>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="material" class="form-control select2" id="mat_4" style="width:100% !important;">
                    <option value="" disabled selected class="mat_4">Select material</option>
                    <?php
                      if(!empty($material['id'])){
                        for ($i=0; $i < count($material['id']); $i++) { 
                          $id = $material['id'][$i];
                          $kode = $material['kode'][$i];
                        ?>
                          <option value="<?php echo $id;?>" class="mat_4"><?php echo $kode;?></option>
                        <?php
                        }
                      }
                    ?>
                  </select>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="number" class="form-control" name="n_rit" id="total_4" min="0" autocomplete="off" value="0" required style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="time" class="form-control" name="work_4" id="work_4" autocomplete="off" style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="remark" class="form-control select2" id="remark_4" style="width:100% !important;">
                  <option value="" disabled selected class="remark_4">Select remark</option>
                  <?php
                    if(!empty($standby_code['id'])){
                      for ($i=0; $i < count($standby_code['id']); $i++) { 
                        $id = $standby_code['id'][$i];
                        $nama = $standby_code['nama'][$i];
                      ?>
                        <option value="<?php echo $id;?>" class="remark_4"><?php echo $nama;?></option>
                      <?php
                      }
                    }
                  ?>
                </select>
              </div>
              <div class="col-lg-3 col-md-12 col-sm-12">
                <input type="text" class="form-control" name="problem_4" id="problem_4" autocomplete="off" style="width:100% !important;">
              </div>

              <div class="col-lg-1 col-md-12 col-sm-12">
                <p style="margin-top: 1rem;"><?php echo '10:00';?></p>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="material" class="form-control select2" id="mat_5" style="width:100% !important;">
                    <option value="" disabled selected class="mat_5">Select material</option>
                    <?php
                      if(!empty($material['id'])){
                        for ($i=0; $i < count($material['id']); $i++) { 
                          $id = $material['id'][$i];
                          $kode = $material['kode'][$i];
                        ?>
                          <option value="<?php echo $id;?>" class="mat_5"><?php echo $kode;?></option>
                        <?php
                        }
                      }
                    ?>
                  </select>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="number" class="form-control" name="n_rit" id="total_5" min="0" autocomplete="off" value="0" required style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="time" class="form-control" name="work_5" id="work_5" autocomplete="off" style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="remark" class="form-control select2" id="remark_5" style="width:100% !important;">
                  <option value="" disabled selected class="remark_5">Select remark</option>
                  <?php
                    if(!empty($standby_code['id'])){
                      for ($i=0; $i < count($standby_code['id']); $i++) { 
                        $id = $standby_code['id'][$i];
                        $nama = $standby_code['nama'][$i];
                      ?>
                        <option value="<?php echo $id;?>" class="remark_5"><?php echo $nama;?></option>
                      <?php
                      }
                    }
                  ?>
                </select>
              </div>
              <div class="col-lg-3 col-md-12 col-sm-12">
                <input type="text" class="form-control" name="problem_5" id="problem_5" autocomplete="off" style="width:100% !important;">
              </div>


              <div class="col-lg-1 col-md-12 col-sm-12">
                <p style="margin-top: 1rem;"><?php echo '11:00';?></p>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="material" class="form-control select2" id="mat_6" style="width:100% !important;">
                    <option value="" disabled selected class="mat_6">Select material</option>
                    <?php
                      if(!empty($material['id'])){
                        for ($i=0; $i < count($material['id']); $i++) { 
                          $id = $material['id'][$i];
                          $kode = $material['kode'][$i];
                        ?>
                          <option value="<?php echo $id;?>" class="mat_6"><?php echo $kode;?></option>
                        <?php
                        }
                      }
                    ?>
                  </select>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="number" class="form-control" name="n_rit" id="total_6" min="0" autocomplete="off" value="0" required style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="time" class="form-control" name="work_6" id="work_6" autocomplete="off" style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="remark" class="form-control select2" id="remark_6" style="width:100% !important;">
                  <option value="" disabled selected class="remark_6">Select remark</option>
                  <?php
                    if(!empty($standby_code['id'])){
                      for ($i=0; $i < count($standby_code['id']); $i++) { 
                        $id = $standby_code['id'][$i];
                        $nama = $standby_code['nama'][$i];
                      ?>
                        <option value="<?php echo $id;?>" class="remark_6"><?php echo $nama;?></option>
                      <?php
                      }
                    }
                  ?>
                </select>
              </div>
              <div class="col-lg-3 col-md-12 col-sm-12">
                <input type="text" class="form-control" name="problem_6" id="problem_6" autocomplete="off" style="width:100% !important;">
              </div>

              <div class="col-lg-1 col-md-12 col-sm-12">
                <p style="margin-top: 1rem;"><?php echo '12:00';?></p>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="material" class="form-control select2" id="mat_7" style="width:100% !important;">
                    <option value="" disabled selected class="mat_7">Select material</option>
                    <?php
                      if(!empty($material['id'])){
                        for ($i=0; $i < count($material['id']); $i++) { 
                          $id = $material['id'][$i];
                          $kode = $material['kode'][$i];
                        ?>
                          <option value="<?php echo $id;?>" class="mat_7"><?php echo $kode;?></option>
                        <?php
                        }
                      }
                    ?>
                  </select>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="number" class="form-control" name="n_rit" id="total_7" min="0" autocomplete="off" value="0" required style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="time" class="form-control" name="work_7" id="work_7" autocomplete="off" style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="remark" class="form-control select2" id="remark_7" style="width:100% !important;">
                  <option value="" disabled selected class="remark_7">Select remark</option>
                  <?php
                    if(!empty($standby_code['id'])){
                      for ($i=0; $i < count($standby_code['id']); $i++) { 
                        $id = $standby_code['id'][$i];
                        $nama = $standby_code['nama'][$i];
                      ?>
                        <option value="<?php echo $id;?>" class="remark_7"><?php echo $nama;?></option>
                      <?php
                      }
                    }
                  ?>
                </select>
              </div>
              <div class="col-lg-3 col-md-12 col-sm-12">
                <input type="text" class="form-control" name="problem_7" id="problem_7" autocomplete="off" style="width:100% !important;">
              </div>

              <div class="col-lg-1 col-md-12 col-sm-12">
                <p style="margin-top: 1rem;"><?php echo '13:00';?></p>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="material" class="form-control select2" id="mat_8" style="width:100% !important;">
                    <option value="" disabled selected class="mat_8">Select material</option>
                    <?php
                      if(!empty($material['id'])){
                        for ($i=0; $i < count($material['id']); $i++) { 
                          $id = $material['id'][$i];
                          $kode = $material['kode'][$i];
                        ?>
                          <option value="<?php echo $id;?>" class="mat_8"><?php echo $kode;?></option>
                        <?php
                        }
                      }
                    ?>
                  </select>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="number" class="form-control" name="n_rit" id="total_8" min="0" autocomplete="off" value="0" required style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="time" class="form-control" name="work_8" id="work_8" autocomplete="off" style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="remark" class="form-control select2" id="remark_8" style="width:100% !important;">
                  <option value="" disabled selected class="remark_8">Select remark</option>
                  <?php
                    if(!empty($standby_code['id'])){
                      for ($i=0; $i < count($standby_code['id']); $i++) { 
                        $id = $standby_code['id'][$i];
                        $nama = $standby_code['nama'][$i];
                      ?>
                        <option value="<?php echo $id;?>" class="remark_8"><?php echo $nama;?></option>
                      <?php
                      }
                    }
                  ?>
                </select>
              </div>
              <div class="col-lg-3 col-md-12 col-sm-12">
                <input type="text" class="form-control" name="problem_8" id="problem_8" autocomplete="off" style="width:100% !important;">
              </div>

              <div class="col-lg-1 col-md-12 col-sm-12">
                <p style="margin-top: 1rem;"><?php echo '14:00';?></p>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="material" class="form-control select2" id="mat_9" style="width:100% !important;">
                    <option value="" disabled selected class="mat_9">Select material</option>
                    <?php
                      if(!empty($material['id'])){
                        for ($i=0; $i < count($material['id']); $i++) { 
                          $id = $material['id'][$i];
                          $kode = $material['kode'][$i];
                        ?>
                          <option value="<?php echo $id;?>" class="mat_9"><?php echo $kode;?></option>
                        <?php
                        }
                      }
                    ?>
                  </select>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="number" class="form-control" name="n_rit" id="total_9" min="0" autocomplete="off" value="0" required style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="time" class="form-control" name="work_9" id="work_9" autocomplete="off" style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="remark" class="form-control select2" id="remark_9" style="width:100% !important;">
                  <option value="" disabled selected class="remark_9">Select remark</option>
                  <?php
                    if(!empty($standby_code['id'])){
                      for ($i=0; $i < count($standby_code['id']); $i++) { 
                        $id = $standby_code['id'][$i];
                        $nama = $standby_code['nama'][$i];
                      ?>
                        <option value="<?php echo $id;?>" class="remark_9"><?php echo $nama;?></option>
                      <?php
                      }
                    }
                  ?>
                </select>
              </div>
              <div class="col-lg-3 col-md-12 col-sm-12">
                <input type="text" class="form-control" name="problem_9" id="problem_9" autocomplete="off" style="width:100% !important;">
              </div>

              <div class="col-lg-1 col-md-12 col-sm-12">
                <p style="margin-top: 1rem;"><?php echo '15:00';?></p>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="material" class="form-control select2" id="mat_10" style="width:100% !important;">
                    <option value="" disabled selected class="mat_10">Select material</option>
                    <?php
                      if(!empty($material['id'])){
                        for ($i=0; $i < count($material['id']); $i++) { 
                          $id = $material['id'][$i];
                          $kode = $material['kode'][$i];
                        ?>
                          <option value="<?php echo $id;?>" class="mat_10"><?php echo $kode;?></option>
                        <?php
                        }
                      }
                    ?>
                  </select>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="number" class="form-control" name="n_rit" id="total_10" min="0" autocomplete="off" value="0" required style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="time" class="form-control" name="work_10" id="work_10" autocomplete="off" style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="remark" class="form-control select2" id="remark_10" style="width:100% !important;">
                  <option value="" disabled selected class="remark_10">Select remark</option>
                  <?php
                    if(!empty($standby_code['id'])){
                      for ($i=0; $i < count($standby_code['id']); $i++) { 
                        $id = $standby_code['id'][$i];
                        $nama = $standby_code['nama'][$i];
                      ?>
                        <option value="<?php echo $id;?>" class="remark_10"><?php echo $nama;?></option>
                      <?php
                      }
                    }
                  ?>
                </select>
              </div>
              <div class="col-lg-3 col-md-12 col-sm-12">
                <input type="text" class="form-control" name="problem_10" id="problem_10" autocomplete="off" style="width:100% !important;">
              </div>

              <div class="col-lg-1 col-md-12 col-sm-12">
                <p style="margin-top: 1rem;"><?php echo '16:00';?></p>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="material" class="form-control select2" id="mat_11" style="width:100% !important;">
                    <option value="" disabled selected class="mat_11">Select material</option>
                    <?php
                      if(!empty($material['id'])){
                        for ($i=0; $i < count($material['id']); $i++) { 
                          $id = $material['id'][$i];
                          $kode = $material['kode'][$i];
                        ?>
                          <option value="<?php echo $id;?>" class="mat_11"><?php echo $kode;?></option>
                        <?php
                        }
                      }
                    ?>
                  </select>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="number" class="form-control" name="n_rit" id="total_11" min="0" autocomplete="off" value="0" required style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="time" class="form-control" name="work_11" id="work_11" autocomplete="off" style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="remark" class="form-control select2" id="remark_11" style="width:100% !important;">
                  <option value="" disabled selected class="remark_11">Select remark</option>
                  <?php
                    if(!empty($standby_code['id'])){
                      for ($i=0; $i < count($standby_code['id']); $i++) { 
                        $id = $standby_code['id'][$i];
                        $nama = $standby_code['nama'][$i];
                      ?>
                        <option value="<?php echo $id;?>" class="remark_11"><?php echo $nama;?></option>
                      <?php
                      }
                    }
                  ?>
                </select>
              </div>
              <div class="col-lg-3 col-md-12 col-sm-12">
                <input type="text" class="form-control" name="problem_11" id="problem_11" autocomplete="off" style="width:100% !important;">
              </div>

              <div class="col-lg-1 col-md-12 col-sm-12">
                <p style="margin-top: 1rem;"><?php echo '17:00';?></p>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="material" class="form-control select2" id="mat_12" style="width:100% !important;">
                    <option value="" disabled selected class="mat_12">Select material</option>
                    <?php
                      if(!empty($material['id'])){
                        for ($i=0; $i < count($material['id']); $i++) { 
                          $id = $material['id'][$i];
                          $kode = $material['kode'][$i];
                        ?>
                          <option value="<?php echo $id;?>" class="mat_12"><?php echo $kode;?></option>
                        <?php
                        }
                      }
                    ?>
                  </select>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="number" class="form-control" name="n_rit" id="total_12" min="0" autocomplete="off" value="0" required style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="time" class="form-control" name="work_12" id="work_12" autocomplete="off" style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="remark" class="form-control select2" id="remark_12" style="width:100% !important;">
                  <option value="" disabled selected class="remark_12">Select remark</option>
                  <?php
                    if(!empty($standby_code['id'])){
                      for ($i=0; $i < count($standby_code['id']); $i++) { 
                        $id = $standby_code['id'][$i];
                        $nama = $standby_code['nama'][$i];
                      ?>
                        <option value="<?php echo $id;?>" class="remark_12"><?php echo $nama;?></option>
                      <?php
                      }
                    }
                  ?>
                </select>
              </div>
              <div class="col-lg-3 col-md-12 col-sm-12">
                <input type="text" class="form-control" name="problem_12" id="problem_12" autocomplete="off" style="width:100% !important;">
              </div>

              <div class="col-lg-1 col-md-12 col-sm-12">
                <p style="margin-top: 1rem;"><?php echo '18:00';?></p>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="material" class="form-control select2" id="mat_13" style="width:100% !important;">
                    <option value="" disabled selected class="mat_13">Select material</option>
                    <?php
                      if(!empty($material['id'])){
                        for ($i=0; $i < count($material['id']); $i++) { 
                          $id = $material['id'][$i];
                          $kode = $material['kode'][$i];
                        ?>
                          <option value="<?php echo $id;?>" class="mat_13"><?php echo $kode;?></option>
                        <?php
                        }
                      }
                    ?>
                  </select>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="number" class="form-control" name="n_rit" id="total_13" min="0" autocomplete="off" value="0" required style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="time" class="form-control" name="work_13" id="work_13" autocomplete="off" style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="remark" class="form-control select2" id="remark_13" style="width:100% !important;">
                  <option value="" disabled selected class="remark_13">Select remark</option>
                  <?php
                    if(!empty($standby_code['id'])){
                      for ($i=0; $i < count($standby_code['id']); $i++) { 
                        $id = $standby_code['id'][$i];
                        $nama = $standby_code['nama'][$i];
                      ?>
                        <option value="<?php echo $id;?>" class="remark_13"><?php echo $nama;?></option>
                      <?php
                      }
                    }
                  ?>
                </select>
              </div>
              <div class="col-lg-3 col-md-12 col-sm-12">
                <input type="text" class="form-control" name="problem_13" id="problem_13" autocomplete="off" style="width:100% !important;">
              </div>

              <div class="col-lg-1 col-md-12 col-sm-12">
                <p style="margin-top: 1rem;"><?php echo '19:00';?></p>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="material" class="form-control select2" id="mat_14" style="width:100% !important;">
                    <option value="" disabled selected class="mat_14">Select material</option>
                    <?php
                      if(!empty($material['id'])){
                        for ($i=0; $i < count($material['id']); $i++) { 
                          $id = $material['id'][$i];
                          $kode = $material['kode'][$i];
                        ?>
                          <option value="<?php echo $id;?>" class="mat_14"><?php echo $kode;?></option>
                        <?php
                        }
                      }
                    ?>
                  </select>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="number" class="form-control" name="n_rit" id="total_14" min="0" autocomplete="off" value="0" required style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="time" class="form-control" name="work_14" id="work_14" autocomplete="off" style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="remark" class="form-control select2" id="remark_14" style="width:100% !important;">
                  <option value="" disabled selected class="remark_14">Select remark</option>
                  <?php
                    if(!empty($standby_code['id'])){
                      for ($i=0; $i < count($standby_code['id']); $i++) { 
                        $id = $standby_code['id'][$i];
                        $nama = $standby_code['nama'][$i];
                      ?>
                        <option value="<?php echo $id;?>" class="remark_14"><?php echo $nama;?></option>
                      <?php
                      }
                    }
                  ?>
                </select>
              </div>
              <div class="col-lg-3 col-md-12 col-sm-12">
                <input type="text" class="form-control" name="problem_14" id="problem_14" autocomplete="off" style="width:100% !important;">
              </div>

              <div class="col-lg-1 col-md-12 col-sm-12">
                <p style="margin-top: 1rem;"><?php echo '20:00';?></p>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="material" class="form-control select2" id="mat_15" style="width:100% !important;">
                    <option value="" disabled selected class="mat_15">Select material</option>
                    <?php
                      if(!empty($material['id'])){
                        for ($i=0; $i < count($material['id']); $i++) { 
                          $id = $material['id'][$i];
                          $kode = $material['kode'][$i];
                        ?>
                          <option value="<?php echo $id;?>" class="mat_15"><?php echo $kode;?></option>
                        <?php
                        }
                      }
                    ?>
                  </select>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="number" class="form-control" name="n_rit" id="total_15" min="0" autocomplete="off" value="0" required style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="time" class="form-control" name="work_15" id="work_15" autocomplete="off" style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="remark" class="form-control select2" id="remark_15" style="width:100% !important;">
                  <option value="" disabled selected class="remark_15">Select remark</option>
                  <?php
                    if(!empty($standby_code['id'])){
                      for ($i=0; $i < count($standby_code['id']); $i++) { 
                        $id = $standby_code['id'][$i];
                        $nama = $standby_code['nama'][$i];
                      ?>
                        <option value="<?php echo $id;?>" class="remark_15"><?php echo $nama;?></option>
                      <?php
                      }
                    }
                  ?>
                </select>
              </div>
              <div class="col-lg-3 col-md-12 col-sm-12">
                <input type="text" class="form-control" name="problem_15" id="problem_15" autocomplete="off" style="width:100% !important;">
              </div>

              <div class="col-lg-1 col-md-12 col-sm-12">
                <p style="margin-top: 1rem;"><?php echo '21:00';?></p>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="material" class="form-control select2" id="mat_16" style="width:100% !important;">
                    <option value="" disabled selected class="mat_16">Select material</option>
                    <?php
                      if(!empty($material['id'])){
                        for ($i=0; $i < count($material['id']); $i++) { 
                          $id = $material['id'][$i];
                          $kode = $material['kode'][$i];
                        ?>
                          <option value="<?php echo $id;?>" class="mat_16"><?php echo $kode;?></option>
                        <?php
                        }
                      }
                    ?>
                  </select>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="number" class="form-control" name="n_rit" id="total_16" min="0" autocomplete="off" value="0" required style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="time" class="form-control" name="work_16" id="work_16" autocomplete="off" style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="remark" class="form-control select2" id="remark_16" style="width:100% !important;">
                  <option value="" disabled selected class="remark_16">Select remark</option>
                  <?php
                    if(!empty($standby_code['id'])){
                      for ($i=0; $i < count($standby_code['id']); $i++) { 
                        $id = $standby_code['id'][$i];
                        $nama = $standby_code['nama'][$i];
                      ?>
                        <option value="<?php echo $id;?>" class="remark_16"><?php echo $nama;?></option>
                      <?php
                      }
                    }
                  ?>
                </select>
              </div>
              <div class="col-lg-3 col-md-12 col-sm-12">
                <input type="text" class="form-control" name="problem_16" id="problem_16" autocomplete="off" style="width:100% !important;">
              </div>

              <div class="col-lg-1 col-md-12 col-sm-12">
                <p style="margin-top: 1rem;"><?php echo '22:00';?></p>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="material" class="form-control select2" id="mat_17" style="width:100% !important;">
                    <option value="" disabled selected class="mat_17">Select material</option>
                    <?php
                      if(!empty($material['id'])){
                        for ($i=0; $i < count($material['id']); $i++) { 
                          $id = $material['id'][$i];
                          $kode = $material['kode'][$i];
                        ?>
                          <option value="<?php echo $id;?>" class="mat_17"><?php echo $kode;?></option>
                        <?php
                        }
                      }
                    ?>
                  </select>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="number" class="form-control" name="n_rit" id="total_17" min="0" autocomplete="off" value="0" required style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="time" class="form-control" name="work_17" id="work_17" autocomplete="off" style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="remark" class="form-control select2" id="remark_17" style="width:100% !important;">
                  <option value="" disabled selected class="remark_17">Select remark</option>
                  <?php
                    if(!empty($standby_code['id'])){
                      for ($i=0; $i < count($standby_code['id']); $i++) { 
                        $id = $standby_code['id'][$i];
                        $nama = $standby_code['nama'][$i];
                      ?>
                        <option value="<?php echo $id;?>" class="remark_17"><?php echo $nama;?></option>
                      <?php
                      }
                    }
                  ?>
                </select>
              </div>
              <div class="col-lg-3 col-md-12 col-sm-12">
                <input type="text" class="form-control" name="problem_17" id="problem_17" autocomplete="off" style="width:100% !important;">
              </div>

              <div class="col-lg-1 col-md-12 col-sm-12">
                <p style="margin-top: 1rem;"><?php echo '23:00';?></p>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="material" class="form-control select2" id="mat_18" style="width:100% !important;">
                    <option value="" disabled selected class="mat_18">Select material</option>
                    <?php
                      if(!empty($material['id'])){
                        for ($i=0; $i < count($material['id']); $i++) { 
                          $id = $material['id'][$i];
                          $kode = $material['kode'][$i];
                        ?>
                          <option value="<?php echo $id;?>" class="mat_18"><?php echo $kode;?></option>
                        <?php
                        }
                      }
                    ?>
                  </select>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="number" class="form-control" name="n_rit" id="total_18" min="0" autocomplete="off" value="0" required style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="time" class="form-control" name="work_18" id="work_18" autocomplete="off" style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="remark" class="form-control select2" id="remark_18" style="width:100% !important;">
                  <option value="" disabled selected class="remark_18">Select remark</option>
                  <?php
                    if(!empty($standby_code['id'])){
                      for ($i=0; $i < count($standby_code['id']); $i++) { 
                        $id = $standby_code['id'][$i];
                        $nama = $standby_code['nama'][$i];
                      ?>
                        <option value="<?php echo $id;?>" class="remark_18"><?php echo $nama;?></option>
                      <?php
                      }
                    }
                  ?>
                </select>
              </div>
              <div class="col-lg-3 col-md-12 col-sm-12">
                <input type="text" class="form-control" name="problem_18" id="problem_18" autocomplete="off" style="width:100% !important;">
              </div>

              <div class="col-lg-1 col-md-12 col-sm-12">
                <p style="margin-top: 1rem;"><?php echo '00:00';?></p>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="material" class="form-control select2" id="mat_19" style="width:100% !important;">
                    <option value="" disabled selected class="mat_19">Select material</option>
                    <?php
                      if(!empty($material['id'])){
                        for ($i=0; $i < count($material['id']); $i++) { 
                          $id = $material['id'][$i];
                          $kode = $material['kode'][$i];
                        ?>
                          <option value="<?php echo $id;?>" class="mat_19"><?php echo $kode;?></option>
                        <?php
                        }
                      }
                    ?>
                  </select>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="number" class="form-control" name="n_rit" id="total_19" min="0" autocomplete="off" value="0" required style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="time" class="form-control" name="work_19" id="work_19" autocomplete="off" style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="remark" class="form-control select2" id="remark_19" style="width:100% !important;">
                  <option value="" disabled selected class="remark_19">Select remark</option>
                  <?php
                    if(!empty($standby_code['id'])){
                      for ($i=0; $i < count($standby_code['id']); $i++) { 
                        $id = $standby_code['id'][$i];
                        $nama = $standby_code['nama'][$i];
                      ?>
                        <option value="<?php echo $id;?>" class="remark_19"><?php echo $nama;?></option>
                      <?php
                      }
                    }
                  ?>
                </select>
              </div>
              <div class="col-lg-3 col-md-12 col-sm-12">
                <input type="text" class="form-control" name="problem_19" id="problem_19" autocomplete="off" style="width:100% !important;">
              </div>

              <div class="col-lg-1 col-md-12 col-sm-12">
                <p style="margin-top: 1rem;"><?php echo '01:00';?></p>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="material" class="form-control select2" id="mat_20" style="width:100% !important;">
                    <option value="" disabled selected class="mat_20">Select material</option>
                    <?php
                      if(!empty($material['id'])){
                        for ($i=0; $i < count($material['id']); $i++) { 
                          $id = $material['id'][$i];
                          $kode = $material['kode'][$i];
                        ?>
                          <option value="<?php echo $id;?>" class="mat_20"><?php echo $kode;?></option>
                        <?php
                        }
                      }
                    ?>
                  </select>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="number" class="form-control" name="n_rit" id="total_20" min="0" autocomplete="off" value="0" required style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="time" class="form-control" name="work_20" id="work_20" autocomplete="off" style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="remark" class="form-control select2" id="remark_20" style="width:100% !important;">
                  <option value="" disabled selected class="remark_20">Select remark</option>
                  <?php
                    if(!empty($standby_code['id'])){
                      for ($i=0; $i < count($standby_code['id']); $i++) { 
                        $id = $standby_code['id'][$i];
                        $nama = $standby_code['nama'][$i];
                      ?>
                        <option value="<?php echo $id;?>" class="remark_20"><?php echo $nama;?></option>
                      <?php
                      }
                    }
                  ?>
                </select>
              </div>
              <div class="col-lg-3 col-md-12 col-sm-12">
                <input type="text" class="form-control" name="problem_20" id="problem_20" autocomplete="off" style="width:100% !important;">
              </div>

              <div class="col-lg-1 col-md-12 col-sm-12">
                <p style="margin-top: 1rem;"><?php echo '02:00';?></p>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="material" class="form-control select2" id="mat_21" style="width:100% !important;">
                    <option value="" disabled selected class="mat_21">Select material</option>
                    <?php
                      if(!empty($material['id'])){
                        for ($i=0; $i < count($material['id']); $i++) { 
                          $id = $material['id'][$i];
                          $kode = $material['kode'][$i];
                        ?>
                          <option value="<?php echo $id;?>" class="mat_21"><?php echo $kode;?></option>
                        <?php
                        }
                      }
                    ?>
                  </select>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="number" class="form-control" name="n_rit" id="total_21" min="0" autocomplete="off" value="0" required style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="time" class="form-control" name="work_21" id="work_21" autocomplete="off" style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="remark" class="form-control select2" id="remark_21" style="width:100% !important;">
                  <option value="" disabled selected class="remark_21">Select remark</option>
                  <?php
                    if(!empty($standby_code['id'])){
                      for ($i=0; $i < count($standby_code['id']); $i++) { 
                        $id = $standby_code['id'][$i];
                        $nama = $standby_code['nama'][$i];
                      ?>
                        <option value="<?php echo $id;?>" class="remark_21"><?php echo $nama;?></option>
                      <?php
                      }
                    }
                  ?>
                </select>
              </div>
              <div class="col-lg-3 col-md-12 col-sm-12">
                <input type="text" class="form-control" name="problem_21" id="problem_21" autocomplete="off" style="width:100% !important;">
              </div>

              <div class="col-lg-1 col-md-12 col-sm-12">
                <p style="margin-top: 1rem;"><?php echo '03:00';?></p>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="material" class="form-control select2" id="mat_22" style="width:100% !important;">
                    <option value="" disabled selected class="mat_22">Select material</option>
                    <?php
                      if(!empty($material['id'])){
                        for ($i=0; $i < count($material['id']); $i++) { 
                          $id = $material['id'][$i];
                          $kode = $material['kode'][$i];
                        ?>
                          <option value="<?php echo $id;?>" class="mat_22"><?php echo $kode;?></option>
                        <?php
                        }
                      }
                    ?>
                  </select>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="number" class="form-control" name="n_rit" id="total_22" min="0" autocomplete="off" value="0" required style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="time" class="form-control" name="work_22" id="work_22" autocomplete="off" style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="remark" class="form-control select2" id="remark_22" style="width:100% !important;">
                  <option value="" disabled selected class="remark_22">Select remark</option>
                  <?php
                    if(!empty($standby_code['id'])){
                      for ($i=0; $i < count($standby_code['id']); $i++) { 
                        $id = $standby_code['id'][$i];
                        $nama = $standby_code['nama'][$i];
                      ?>
                        <option value="<?php echo $id;?>" class="remark_22"><?php echo $nama;?></option>
                      <?php
                      }
                    }
                  ?>
                </select>
              </div>
              <div class="col-lg-3 col-md-12 col-sm-12">
                <input type="text" class="form-control" name="problem_22" id="problem_22" autocomplete="off" style="width:100% !important;">
              </div>

              <div class="col-lg-1 col-md-12 col-sm-12">
                <p style="margin-top: 1rem;"><?php echo '04:00';?></p>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="material" class="form-control select2" id="mat_23" style="width:100% !important;">
                    <option value="" disabled selected class="mat_23">Select material</option>
                    <?php
                      if(!empty($material['id'])){
                        for ($i=0; $i < count($material['id']); $i++) { 
                          $id = $material['id'][$i];
                          $kode = $material['kode'][$i];
                        ?>
                          <option value="<?php echo $id;?>" class="mat_23"><?php echo $kode;?></option>
                        <?php
                        }
                      }
                    ?>
                  </select>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="number" class="form-control" name="n_rit" id="total_23" min="0" autocomplete="off" value="0" required style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="time" class="form-control" name="work_23" id="work_23" autocomplete="off" style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="remark" class="form-control select2" id="remark_23" style="width:100% !important;">
                  <option value="" disabled selected class="remark_23">Select remark</option>
                  <?php
                    if(!empty($standby_code['id'])){
                      for ($i=0; $i < count($standby_code['id']); $i++) { 
                        $id = $standby_code['id'][$i];
                        $nama = $standby_code['nama'][$i];
                      ?>
                        <option value="<?php echo $id;?>" class="remark_23"><?php echo $nama;?></option>
                      <?php
                      }
                    }
                  ?>
                </select>
              </div>
              <div class="col-lg-3 col-md-12 col-sm-12">
                <input type="text" class="form-control" name="problem_23" id="problem_23" autocomplete="off" style="width:100% !important;">
              </div>

              <div class="col-lg-1 col-md-12 col-sm-12">
                <p style="margin-top: 1rem;"><?php echo '05:00';?></p>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="material" class="form-control select2" id="mat_24" style="width:100% !important;">
                    <option value="" disabled selected class="mat_24">Select material</option>
                    <?php
                      if(!empty($material['id'])){
                        for ($i=0; $i < count($material['id']); $i++) { 
                          $id = $material['id'][$i];
                          $kode = $material['kode'][$i];
                        ?>
                          <option value="<?php echo $id;?>" class="mat_24"><?php echo $kode;?></option>
                        <?php
                        }
                      }
                    ?>
                  </select>
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="number" class="form-control" name="n_rit" id="total_24" min="0" autocomplete="off" value="0" required style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <input type="time" class="form-control" name="work_24" id="work_24" autocomplete="off" style="width:100% !important;">
              </div>
              <div class="col-lg-2 col-md-12 col-sm-12">
                <select name="remark" class="form-control select2" id="remark_24" style="width:100% !important;">
                  <option value="" disabled selected class="remark_24">Select remark</option>
                  <?php
                    if(!empty($standby_code['id'])){
                      for ($i=0; $i < count($standby_code['id']); $i++) { 
                        $id = $standby_code['id'][$i];
                        $nama = $standby_code['nama'][$i];
                      ?>
                        <option value="<?php echo $id;?>" class="remark_24"><?php echo $nama;?></option>
                      <?php
                      }
                    }
                  ?>
                </select>
              </div>
              <div class="col-lg-3 col-md-12 col-sm-12">
                <input type="text" class="form-control" name="problem_24" id="problem_24" autocomplete="off" style="width:100% !important;">
              </div>
              
            <div class="col-lg-12 col-md-12 col-sm-12">
             <div class="row">
              <div class="col-lg-4 col-md-6 col-sm-12">
                <!-- <button class="btn btn-danger" id="close_hourly_radio" onclick="close_data_radio()" style="display: none;">Close Data Radio</button> -->
                <button class="btn btn-success" type="submit" id="send_hourly_radio">Add Data Radio</button>
                
                <a href="<?php echo base_url().'Validator/hourly_report/';?>" class="btn btn-danger" id="close_hourly_radio" style="display: none;">
                  Close Data Radio
                </a>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                <!-- <button class="btn btn-success" id="confirm_hourly_radio" style="display: none;">Confirm Data Radio</button> -->
                <button class="btn btn-warning" type="submit" id="edit_hourly_radio" style="display: none;">Edit Data Radio</button>

                <h5 style="color: #1572E8; display: none;" id="msgWaiting">Waiting Process...</h5>
              </div>
              <?php
                if($this->session->id_role !== '4'){
              ?>
                <!-- <div class="col-lg-4 col-md-6 col-sm-12">
                  <button class="btn btn-success" id="confirm_hourly_radio" style="display: none;">Confirm Data Radio</button>
                </div> -->
              <?php    
                }
              ?>
            
             </div>
            </div>
            </form>          
          </div>
          <div class="card-block">
            <header class="panel-heading text-center">
              <div class="panel-actions"></div>
              <h1 class="panel-title" style="background:#0267ca; color: #fff; font-size: large; text-align: left;">Last Update Radio Data No Unit <?php echo $no_unit;?></h1>
            </header>
            
              <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
               <thead>
                <tr>
                  <th>Date Activity</th>
                  <th>No Unit</th>
                  <th>DT</th>
                  <th>Operator</th>
                  <!-- <th>Status</th> -->
                  <th>Action</th>
                </tr>
               </thead>
               <tbody>
                <?php
                  if(!empty($hourly_detail['type_unit'])){
                    for ($i=0; $i < count($hourly_detail['type_unit']); $i++) {  
                      $id = $hourly_detail['id'][$i];
                      $type_unit = $hourly_detail['type_unit'][$i];
                      $block = $hourly_detail['block'][$i];
                      $dt_ton = $hourly_detail['dt_ton'][$i];
                      $date = $hourly_detail['date'][$i];
                      $no_unit = $hourly_detail['no_unit'][$i];
                      $work = $hourly_detail['work'][$i];
                      $remark = $hourly_detail['remark'][$i];
                      $problem = $hourly_detail['problem'][$i];
                      $operator = $hourly_detail['operator'][$i];
                      $status = $hourly_detail['status'][$i];
                ?>
                <tr>
                  <td><?php echo $date;?></td>
                  <td><?php echo $no_unit;?></td>
                  <td><?php echo $dt_ton;?></td>
                  <td><?php echo $operator;?></td>
                  <!-- <td><?php echo $status;?></td> -->
                  <?php
                    if($status === 'UPLOAD'){
                  ?>
                  <td>
                    <a href="#" class="button mr-10" onclick="hourly_detail('<?php echo $id;?>')" style="font-size:large; text-decoration:none !important;">
                      <i class="icon md-settings"></i>
                    </a>
                    <!-- <a href="<?php echo base_url().'Validator/delete_data_radio/'.$id.'/'.$no_unit;?>" class="button delete-btn">
                      <i class="icon md-delete"></i>
                    </a> -->
                  </td>
                  <?php
                    }else{
                  ?>
                  <td>
                    <a href="#" class="button mr-10" onclick="hourly_detail('<?php echo $id;?>')" style="font-size:large; text-decoration:none !important;">
                      <i class="icon md-settings"></i>
                    </a>
                  </td>  
                  <?php    
                    }
                  ?>
                </tr>
                <?php
                    }
                  }
                ?>
               </tbody>
              </table>
            </div>
          </div>
        </div>
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
    $('.select2').select2();
      const flashData = $('.flash-data').data('flashdata');
      hourly_detail('<?php echo $id2;?>')
      if (flashData) {
          var title;
          var msg;
          var date = '<?php echo date('d F Y');?>';

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
          } else if (flashData == 'failed data same') {
              // title = 'Data unit date activity '+date+' is already in database';
              msg = 'Data unit date activity '+date+' is already in exist';
          }

          if (title == null && msg == null) {
              swal({
                icon: 'success',
                title: 'Success',
                showConfirmButton: false,
                timer: 5000
              });    
          } else {
              swal({
              icon: 'error',
              title: msg,
              showConfirmButton: false,
              timer: 5000
            })
          }
      }
  });

  $('#confirm_hourly_radio').on('click', function(e){
    e.preventDefault();
    var id_hourly_radio = $('#id_hourly_radio').val();
    var no_unit = $('#no_unit').val();
    $.ajax({
      type: "POST",
        url: '<?php echo base_url().'Radio/confirm_data_radio';?>',
        dataType: 'json',
        data:{
          no_unit: no_unit,
          id_hourly_radio: id_hourly_radio,
        }, 
        success: function(response){
          if(response.response === 'success'){
            location.href ="<?php echo base_url().'Validator/hourly_report/';?>";
            // $('#closePage').show(200);
            // $('#sendForm').show(200);
            // $('#msgWaiting').hide(200);
          }
        }
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

  function hourly_detail(id){
    $.ajax({
      type: "GET",
      url: '<?php echo base_url().'Radio/get_data_radio_detail/';?>'+id,
      dataType: 'json',
      success: function(response){
          console.log(response)
          $('#send_hourly_radio').hide(200);
          $('#close_hourly_radio').show(200);
          var id_hourly_radio = $('#id_hourly_radio').val(response[0].id);
          var tgl_aktifitas = $('#tgl_aktifitas').val(response[0].tgl_aktifitas);
          $('#tgl_aktifitas').attr('readonly', true);
          var no_unit = $('#no_unit').val(response[0].no_unit);
          // var type_unit = $('#type_unit').val(response[0].id_type_unit);
          var type_unit = response[0].id_type_unit;
          // var block = $('#block').val(response[0].id_block);
          var block = response[0].id_block;
          var work = $('#work').val(response[0].work);
          // var remark = $('#remark').val(response[0].remark);
          var remark = response[0].remark;
          var problem = $('#problem').val(response[0].problem);
          // var operator = $('#operator').val(response[0].operator);
          var operator = response[0].operator;
          // var dt_ton = $('#dt_ton').val(response[0].id_dt_ton);
          var dt_ton = response[0].id_dt_ton;
          var jarak = $('#jarak').val(response[0].jarak);
          var n_rit = $('#n_rit').val(response[0].n_rit);
          var n_rit_time = $('#n_rit_time').val(response[0].n_rit_time);
          var material = $('#material').val(response[0].mat);

          $.ajax({
              url:"<?php echo base_url().'Radio/get_type_unit_json'?>",
              method: 'post',
              dataType: 'json',
              success: function(response){
                $('.type_unit').remove();
                  $.each(response,function(index,data){
                    if(type_unit == data['id']){
                      $('#type_unit').append('<option class="type_unit" value="'+data['id']+'" selected>'+data['nama']+'</option>');
                    }
                    // else{
                    //   $('#type_unit').append('<option class="type_unit" value="'+data['id']+'">'+data['nama']+'</option>'); 
                    // }
                  });   
              }
          });

          $.ajax({
              url:"<?php echo base_url().'Radio/get_block_json'?>",
              method: 'post',
              dataType: 'json',
              success: function(response){
                $('.block').remove();
                  $.each(response,function(index,data){
                    if(block == data['id']){
                      $('#block').append('<option class="block" value="'+data['id']+'" selected>'+data['nama']+'</option>');
                    }else{
                      $('#block').append('<option class="block" value="'+data['id']+'">'+data['nama']+'</option>'); 
                    }
                  });   
              }
          });

          $.ajax({
              url:"<?php echo base_url().'Radio/get_remark_json'?>",
              method: 'post',
              dataType: 'json',
              success: function(response){
                $('.remark').remove();
                  $.each(response,function(index,data){
                    if(remark == data['id']){
                      $('#remark').append('<option class="remark" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                    }else{
                      $('#remark').append('<option class="remark" value="'+data['id']+'">'+data['kode']+'</option>'); 
                    }
                  });   
              }
          });

          $.ajax({
              url:"<?php echo base_url().'Radio/get_operator_json'?>",
              method: 'post',
              dataType: 'json',
              success: function(response){
                $('.operator').remove();
                  $.each(response,function(index,data){
                    if(operator == data['id']){
                      $('#operator').append('<option class="operator" value="'+data['id']+'" selected>'+data['first_name']+' '+data['last_name']+'</option>');
                    }else{
                      $('#operator').append('<option class="operator" value="'+data['id']+'">'+data['first_name']+' '+data['last_name']+'</option>'); 
                    }
                  });   
              }
          });

          $.ajax({
              url:"<?php echo base_url().'Radio/get_dt_json'?>",
              method: 'post',
              dataType: 'json',
              success: function(response){
                $('.dt_ton').remove();
                  $.each(response,function(index,data){
                    if(dt_ton == data['id']){
                      $('#dt_ton').append('<option class="dt_ton" value="'+data['id']+'" selected>'+data['nama']+'</option>');
                    }else{
                      $('#dt_ton').append('<option class="dt_ton" value="'+data['id']+'">'+data['nama']+'</option>'); 
                    }
                  });   
              }
          });

          $.ajax({
              url:"<?php echo base_url().'Radio/get_ritasi_json_detail/'?>"+response[0].no_unit+'/'+response[0].tgl_aktifitas,
              method: 'post',
              dataType: 'json',
              success: function(response){
                  console.log(response);
                  var mat_1 = response[0].mat_1;
                  var mat_2 = response[0].mat_2;
                  var mat_3 = response[0].mat_3;
                  var mat_4 = response[0].mat_4;   
                  var mat_5 = response[0].mat_5;
                  var mat_6 = response[0].mat_6;
                  var mat_7 = response[0].mat_7;
                  var mat_8 = response[0].mat_8;
                  var mat_9 = response[0].mat_9;
                  var mat_10 = response[0].mat_10;
                  var mat_11 = response[0].mat_11;
                  var mat_12 = response[0].mat_12;
                  var mat_13 = response[0].mat_13;
                  var mat_14 = response[0].mat_14;
                  var mat_15 = response[0].mat_15;
                  var mat_16 = response[0].mat_16;
                  var mat_17 = response[0].mat_17;
                  var mat_18 = response[0].mat_18;
                  var mat_19 = response[0].mat_19;
                  var mat_20 = response[0].mat_20;
                  var mat_21 = response[0].mat_21;
                  var mat_22 = response[0].mat_22;
                  var mat_23 = response[0].mat_23;
                  var mat_24 = response[0].mat_24;

                  $.ajax({
                      url:"<?php echo base_url().'Radio/get_material_json'?>",
                      method: 'post',
                      dataType: 'json',
                      success: function(response){

                        if(mat_1 != '0'){
                            $('.mat_1').remove();
                            $.each(response,function(index,data){
                              if(mat_1 == data['id']){
                                $('#mat_1').append('<option class="mat_1" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                              }else{
                                $('#mat_1').append('<option class="mat_1" value="'+data['id']+'">'+data['kode']+'</option>'); 
                              }
                            });
                        }
                        
                        if(mat_2 != '0'){
                          $('.mat_2').remove();
                          $.each(response,function(index,data){
                            if(mat_2 == data['id']){
                              $('#mat_2').append('<option class="mat_2" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#mat_2').append('<option class="mat_2" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });
                        }

                        if(mat_3 != '0'){
                          $('.mat_3').remove();
                          $.each(response,function(index,data){
                            if(mat_3 == data['id']){
                              $('#mat_3').append('<option class="mat_3" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#mat_3').append('<option class="mat_3" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });
                        }

                        if(mat_4 != '0'){
                          $('.mat_4').remove();
                          $.each(response,function(index,data){
                            if(mat_4 == data['id']){
                              $('#mat_4').append('<option class="mat_4" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#mat_4').append('<option class="mat_4" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });    
                        }

                        if(mat_5 != '0'){
                          $('.mat_5').remove();
                          $.each(response,function(index,data){
                            if(mat_5 == data['id']){
                              $('#mat_5').append('<option class="mat_5" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#mat_5').append('<option class="mat_5" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });
                        }

                        if(mat_6 != '0'){
                          $('.mat_6').remove();
                          $.each(response,function(index,data){
                            if(mat_6 == data['id']){
                              $('#mat_6').append('<option class="mat_6" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#mat_6').append('<option class="mat_6" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });
                        }

                        if(mat_7 != '0'){
                          $('.mat_7').remove();
                          $.each(response,function(index,data){
                            if(mat_7 == data['id']){
                              $('#mat_7').append('<option class="mat_7" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#mat_7').append('<option class="mat_7" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });
                        }

                        if(mat_8 != '0'){
                          $('.mat_8').remove();
                          $.each(response,function(index,data){
                            if(mat_8 == data['id']){
                              $('#mat_8').append('<option class="mat_8" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#mat_8').append('<option class="mat_8" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });  
                        }

                        if(mat_9 != '0'){
                          $('.mat_9').remove();
                          $.each(response,function(index,data){
                            if(mat_9 == data['id']){
                              $('#mat_9').append('<option class="mat_9" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#mat_9').append('<option class="mat_9" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });  
                        }
                
                        if(mat_10 != '0'){
                          $('.mat_10').remove();
                          $.each(response,function(index,data){
                            if(mat_10 == data['id']){
                              $('#mat_10').append('<option class="mat_10" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#mat_10').append('<option class="mat_10" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });    
                        }                        
                        
                        if(mat_11 != '0'){
                          $('.mat_11').remove();
                          $.each(response,function(index,data){
                            if(mat_11 == data['id']){
                              $('#mat_11').append('<option class="mat_11" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#mat_11').append('<option class="mat_11" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });
                        }

                        if(mat_12 != '0'){
                          $('.mat_12').remove();
                          $.each(response,function(index,data){
                            if(mat_12 == data['id']){
                              $('#mat_12').append('<option class="mat_12" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#mat_12').append('<option class="mat_12" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });  
                        }

                        if(mat_13 != '0'){
                          $('.mat_13').remove();
                          $.each(response,function(index,data){
                            if(mat_13 == data['id']){
                              $('#mat_13').append('<option class="mat_13" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#mat_13').append('<option class="mat_13" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });
                        }

                        if(mat_14 != '0'){
                          $('.mat_14').remove();
                          $.each(response,function(index,data){
                            if(mat_14 == data['id']){
                              $('#mat_14').append('<option class="mat_14" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#mat_14').append('<option class="mat_14" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });
                        }

                        if(mat_15 != '0'){
                          $('.mat_15').remove();
                          $.each(response,function(index,data){
                            if(mat_15 == data['id']){
                              $('#mat_15').append('<option class="mat_15" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#mat_15').append('<option class="mat_15" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });
                        }

                        if(mat_16 != '0'){
                          $('.mat_16').remove();
                          $.each(response,function(index,data){
                            if(mat_16 == data['id']){
                              $('#mat_16').append('<option class="mat_16" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#mat_16').append('<option class="mat_16" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });
                        }

                        if(mat_17 != '0'){
                          $('.mat_17').remove();
                          $.each(response,function(index,data){
                            if(mat_17 == data['id']){
                              $('#mat_17').append('<option class="mat_17" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#mat_17').append('<option class="mat_17" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });
                        }

                        if(mat_18 != '0'){
                          $('.mat_18').remove();
                          $.each(response,function(index,data){
                            if(mat_18 == data['id']){
                              $('#mat_18').append('<option class="mat_18" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#mat_18').append('<option class="mat_18" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });
                        }

                        if(mat_19 != '0'){
                          $('.mat_19').remove();
                          $.each(response,function(index,data){
                            if(mat_19 == data['id']){
                              $('#mat_19').append('<option class="mat_19" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#mat_19').append('<option class="mat_19" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });
                        }

                        if(mat_20 != '0'){
                          $('.mat_20').remove();
                          $.each(response,function(index,data){
                            if(mat_20 == data['id']){
                              $('#mat_20').append('<option class="mat_20" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#mat_20').append('<option class="mat_20" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });
                        }

                        if(mat_21 != '0'){
                          $('.mat_21').remove();
                          $.each(response,function(index,data){
                            if(mat_21 == data['id']){
                              $('#mat_21').append('<option class="mat_21" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#mat_21').append('<option class="mat_21" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });
                        }

                        if(mat_22 != '0'){
                          $('.mat_22').remove();
                          $.each(response,function(index,data){
                            if(mat_22 == data['id']){
                              $('#mat_22').append('<option class="mat_22" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#mat_22').append('<option class="mat_22" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });
                        }

                        if(mat_23 != '0'){
                          $('.mat_23').remove();
                          $.each(response,function(index,data){
                            if(mat_23 == data['id']){
                              $('#mat_23').append('<option class="mat_23" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#mat_23').append('<option class="mat_23" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });
                        }

                        if(mat_24 != '0'){
                          $('.mat_24').remove();
                          $.each(response,function(index,data){
                            if(mat_24 == data['id']){
                              $('#mat_24').append('<option class="mat_24" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#mat_24').append('<option class="mat_24" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });
                        }   
                      }
                  });
                  
                  if(response[0].total_1){
                    $('#total_1').val(response[0].total_1);
                  }
                  if(response[0].total_2){
                    $('#total_2').val(response[0].total_2);
                  }
                  if(response[0].total_3){
                    $('#total_3').val(response[0].total_3);
                  }
                  if(response[0].total_4){
                    $('#total_4').val(response[0].total_4);
                  }
                  if(response[0].total_5){
                    $('#total_5').val(response[0].total_5);
                  }
                  if(response[0].total_6){
                    $('#total_6').val(response[0].total_6);
                  }
                  if(response[0].total_7){
                    $('#total_7').val(response[0].total_7);
                  }
                  if(response[0].total_8){
                    $('#total_8').val(response[0].total_8);
                  }
                  if(response[0].total_9){
                    $('#total_9').val(response[0].total_9);
                  }
                  if(response[0].total_10){
                    $('#total_10').val(response[0].total_10);
                  }
                  if(response[0].total_11){
                    $('#total_11').val(response[0].total_11);
                  }
                  if(response[0].total_12){
                    $('#total_12').val(response[0].total_12);
                  }
                  if(response[0].total_13){
                    $('#total_13').val(response[0].total_13);
                  }
                  if(response[0].total_14){
                    $('#total_14').val(response[0].total_14);
                  }
                  if(response[0].total_15){
                    $('#total_15').val(response[0].total_15);
                  }
                  if(response[0].total_16){
                    $('#total_16').val(response[0].total_16);
                  }
                  if(response[0].total_17){
                    $('#total_17').val(response[0].total_17);
                  }
                  if(response[0].total_18){
                    $('#total_18').val(response[0].total_18);
                  }
                  if(response[0].total_19){
                    $('#total_19').val(response[0].total_19);
                  }
                  if(response[0].total_20){
                    $('#total_20').val(response[0].total_20);
                  }
                  if(response[0].total_21){
                    $('#total_21').val(response[0].total_21);
                  }
                  if(response[0].total_22){
                    $('#total_22').val(response[0].total_22);
                  }
                  if(response[0].total_23){
                    $('#total_23').val(response[0].total_23);
                  }
                  if(response[0].total_24){
                    $('#total_24').val(response[0].total_24);
                  }

                  if(response[0].work_1){
                    $('#work_1').val(response[0].work_1);
                  }
                  if(response[0].work_2){
                    $('#work_2').val(response[0].work_2);
                  }
                  if(response[0].work_3){
                    $('#work_3').val(response[0].work_3);
                  }
                  if(response[0].work_4){
                    $('#work_4').val(response[0].work_4);
                  }
                  if(response[0].work_5){
                    $('#work_5').val(response[0].work_5);
                  }
                  if(response[0].work_6){
                    $('#work_6').val(response[0].work_6);
                  }
                  if(response[0].work_7){
                    $('#work_7').val(response[0].work_7);
                  }
                  if(response[0].work_8){
                    $('#work_8').val(response[0].work_8);
                  }
                  if(response[0].work_9){
                    $('#work_9').val(response[0].work_9);
                  }
                  if(response[0].work_10){
                    $('#work_10').val(response[0].work_10);
                  }
                  if(response[0].work_11){
                    $('#work_11').val(response[0].work_11);
                  }
                  if(response[0].work_12){
                    $('#work_12').val(response[0].work_12);
                  }
                  if(response[0].work_13){
                    $('#work_13').val(response[0].work_13);
                  }
                  if(response[0].work_14){
                    $('#work_14').val(response[0].work_14);
                  }
                  if(response[0].work_15){
                    $('#work_15').val(response[0].work_15);
                  }
                  if(response[0].work_16){
                    $('#work_16').val(response[0].work_16);
                  }
                  if(response[0].work_17){
                    $('#work_17').val(response[0].work_17);
                  }
                  if(response[0].work_18){
                    $('#work_18').val(response[0].work_18);
                  }
                  if(response[0].work_19){
                    $('#work_19').val(response[0].work_19);
                  }
                  if(response[0].work_20){
                    $('#work_20').val(response[0].work_20);
                  }
                  if(response[0].work_21){
                    $('#work_21').val(response[0].work_21);
                  }
                  if(response[0].work_22){
                    $('#work_22').val(response[0].work_22);
                  }
                  if(response[0].work_23){
                    $('#work_23').val(response[0].work_23);
                  }
                  if(response[0].work_24){
                    $('#work_24').val(response[0].work_24);
                  }

                  var remark_1 = response[0].remark_1;
                  var remark_2 = response[0].remark_2;
                  var remark_3 = response[0].remark_3;
                  var remark_4 = response[0].remark_4;   
                  var remark_5 = response[0].remark_5;
                  var remark_6 = response[0].remark_6;
                  var remark_7 = response[0].remark_7;
                  var remark_8 = response[0].remark_8;
                  var remark_9 = response[0].remark_9;
                  var remark_10 = response[0].remark_10;
                  var remark_11 = response[0].remark_11;
                  var remark_12 = response[0].remark_12;
                  var remark_13 = response[0].remark_13;
                  var remark_14 = response[0].remark_14;
                  var remark_15 = response[0].remark_15;
                  var remark_16 = response[0].remark_16;
                  var remark_17 = response[0].remark_17;
                  var remark_18 = response[0].remark_18;
                  var remark_19 = response[0].remark_19;
                  var remark_20 = response[0].remark_20;
                  var remark_21 = response[0].remark_21;
                  var remark_22 = response[0].remark_22;
                  var remark_23 = response[0].remark_23;
                  var remark_24 = response[0].remark_24;
                  $.ajax({
                      url:"<?php echo base_url().'Radio/get_remark_json'?>",
                      method: 'post',
                      dataType: 'json',
                      success: function(response){

                        if(remark_1 != '0'){
                            $('.remark_1').remove();
                            $.each(response,function(index,data){
                              if(remark_1 == data['id']){
                                $('#remark_1').append('<option class="remark_1" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                              }else{
                                $('#remark_1').append('<option class="remark_1" value="'+data['id']+'">'+data['kode']+'</option>'); 
                              }
                            });
                        }
                        
                        if(remark_2 != '0'){
                          $('.remark_2').remove();
                          $.each(response,function(index,data){
                            if(remark_2 == data['id']){
                              $('#remark_2').append('<option class="remark_2" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#remark_2').append('<option class="remark_2" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });
                        }

                        if(remark_3 != '0'){
                          $('.remark_3').remove();
                          $.each(response,function(index,data){
                            if(remark_3 == data['id']){
                              $('#remark_3').append('<option class="remark_3" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#remark_3').append('<option class="remark_3" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });
                        }

                        if(remark_4 != '0'){
                          $('.remark_4').remove();
                          $.each(response,function(index,data){
                            if(remark_4 == data['id']){
                              $('#remark_4').append('<option class="remark_4" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#remark_4').append('<option class="remark_4" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });    
                        }

                        if(remark_5 != '0'){
                          $('.remark_5').remove();
                          $.each(response,function(index,data){
                            if(remark_5 == data['id']){
                              $('#remark_5').append('<option class="remark_5" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#remark_5').append('<option class="remark_5" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });
                        }

                        if(remark_6 != '0'){
                          $('.remark_6').remove();
                          $.each(response,function(index,data){
                            if(remark_6 == data['id']){
                              $('#remark_6').append('<option class="remark_6" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#remark_6').append('<option class="remark_6" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });
                        }

                        if(remark_7 != '0'){
                          $('.remark_7').remove();
                          $.each(response,function(index,data){
                            if(remark_7 == data['id']){
                              $('#remark_7').append('<option class="remark_7" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#remark_7').append('<option class="remark_7" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });
                        }

                        if(remark_8 != '0'){
                          $('.remark_8').remove();
                          $.each(response,function(index,data){
                            if(remark_8 == data['id']){
                              $('#remark_8').append('<option class="remark_8" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#remark_8').append('<option class="remark_8" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });  
                        }

                        if(remark_9 != '0'){
                          $('.remark_9').remove();
                          $.each(response,function(index,data){
                            if(remark_9 == data['id']){
                              $('#remark_9').append('<option class="remark_9" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#remark_9').append('<option class="remark_9" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });  
                        }
                
                        if(remark_10 != '0'){
                          $('.remark_10').remove();
                          $.each(response,function(index,data){
                            if(remark_10 == data['id']){
                              $('#remark_10').append('<option class="remark_10" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#remark_10').append('<option class="remark_10" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });    
                        }                        
                        
                        if(remark_11 != '0'){
                          $('.remark_11').remove();
                          $.each(response,function(index,data){
                            if(remark_11 == data['id']){
                              $('#remark_11').append('<option class="remark_11" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#remark_11').append('<option class="remark_11" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });
                        }

                        if(remark_12 != '0'){
                          $('.remark_12').remove();
                          $.each(response,function(index,data){
                            if(remark_12 == data['id']){
                              $('#remark_12').append('<option class="remark_12" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#remark_12').append('<option class="remark_12" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });  
                        }

                        if(remark_13 != '0'){
                          $('.remark_13').remove();
                          $.each(response,function(index,data){
                            if(remark_13 == data['id']){
                              $('#remark_13').append('<option class="remark_13" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#remark_13').append('<option class="remark_13" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });
                        }

                        if(remark_14 != '0'){
                          $('.remark_14').remove();
                          $.each(response,function(index,data){
                            if(remark_14 == data['id']){
                              $('#remark_14').append('<option class="remark_14" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#remark_14').append('<option class="remark_14" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });
                        }
                        
                        if(remark_15 != '0'){
                          $('.remark_15').remove();
                          $.each(response,function(index,data){
                            if(remark_15 == data['id']){
                              $('#remark_15').append('<option class="remark_15" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#remark_15').append('<option class="remark_15" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });
                        }

                        if(remark_16 != '0'){
                          $('.remark_16').remove();
                          $.each(response,function(index,data){
                            if(remark_16 == data['id']){
                              $('#remark_16').append('<option class="remark_16" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#remark_16').append('<option class="remark_16" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });
                        }

                        if(remark_17 != '0'){
                          $('.remark_17').remove();
                          $.each(response,function(index,data){
                            if(remark_17 == data['id']){
                              $('#remark_17').append('<option class="remark_17" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#remark_17').append('<option class="remark_17" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });
                        }

                        if(remark_18 != '0'){
                          $('.remark_18').remove();
                          $.each(response,function(index,data){
                            if(remark_18 == data['id']){
                              $('#remark_18').append('<option class="remark_18" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#remark_18').append('<option class="remark_18" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });
                        }

                        if(remark_19 != '0'){
                          $('.remark_19').remove();
                          $.each(response,function(index,data){
                            if(remark_19 == data['id']){
                              $('#remark_19').append('<option class="remark_19" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#remark_19').append('<option class="remark_19" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });
                        }

                        if(remark_20 != '0'){
                          $('.remark_20').remove();
                          $.each(response,function(index,data){
                            if(remark_20 == data['id']){
                              $('#remark_20').append('<option class="remark_20" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#remark_20').append('<option class="remark_20" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });
                        }

                        if(remark_21 != '0'){
                          $('.remark_21').remove();
                          $.each(response,function(index,data){
                            if(remark_21 == data['id']){
                              $('#remark_21').append('<option class="remark_21" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#remark_21').append('<option class="remark_21" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });
                        }

                        if(remark_22 != '0'){
                          $('.remark_22').remove();
                          $.each(response,function(index,data){
                            if(remark_22 == data['id']){
                              $('#remark_22').append('<option class="remark_22" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#remark_22').append('<option class="remark_22" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });
                        }

                        if(remark_23 != '0'){
                          $('.remark_23').remove();
                          $.each(response,function(index,data){
                            if(remark_23 == data['id']){
                              $('#remark_23').append('<option class="remark_23" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#remark_23').append('<option class="remark_23" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });
                        }

                        if(remark_24 != '0'){
                          $('.remark_24').remove();
                          $.each(response,function(index,data){
                            if(remark_24 == data['id']){
                              $('#remark_24').append('<option class="remark_24" value="'+data['id']+'" selected>'+data['kode']+'</option>');
                            }else{
                              $('#remark_24').append('<option class="remark_24" value="'+data['id']+'">'+data['kode']+'</option>'); 
                            }
                          });
                        }
                           
                      }
                  });

                  if(response[0].problem_1){
                    $('#problem_1').val(response[0].problem_1);
                  }
                  if(response[0].problem_2){
                    $('#problem_2').val(response[0].problem_2);
                  }
                  if(response[0].problem_3){
                    $('#problem_3').val(response[0].problem_3);
                  }
                  if(response[0].problem_4){
                    $('#problem_4').val(response[0].problem_4);
                  }
                  if(response[0].problem_5){
                    $('#problem_5').val(response[0].problem_5);
                  }
                  if(response[0].problem_6){
                    $('#problem_6').val(response[0].problem_6);
                  }
                  if(response[0].problem_7){
                    $('#problem_7').val(response[0].problem_7);
                  }
                  if(response[0].problem_8){
                    $('#problem_8').val(response[0].problem_8);
                  }
                  if(response[0].problem_9){
                    $('#problem_9').val(response[0].problem_9);
                  }
                  if(response[0].problem_10){
                    $('#problem_10').val(response[0].problem_10);
                  }
                  if(response[0].problem_11){
                    $('#problem_11').val(response[0].problem_11);
                  }
                  if(response[0].problem_12){
                    $('#problem_12').val(response[0].problem_12);
                  }
                  if(response[0].problem_13){
                    $('#problem_13').val(response[0].problem_13);
                  }
                  if(response[0].problem_14){
                    $('#problem_14').val(response[0].problem_14);
                  }
                  if(response[0].problem_15){
                    $('#problem_15').val(response[0].problem_15);
                  }
                  if(response[0].problem_16){
                    $('#problem_16').val(response[0].problem_16);
                  }
                  if(response[0].problem_17){
                    $('#problem_17').val(response[0].problem_17);
                  }
                  if(response[0].problem_18){
                    $('#problem_18').val(response[0].problem_18);
                  }
                  if(response[0].problem_19){
                    $('#problem_19').val(response[0].problem_19);
                  }
                  if(response[0].problem_20){
                    $('#problem_20').val(response[0].problem_20);
                  }
                  if(response[0].problem_21){
                    $('#problem_21').val(response[0].problem_21);
                  }
                  if(response[0].problem_21){
                    $('#problem_21').val(response[0].problem_21);
                  }
                  if(response[0].problem_22){
                    $('#problem_22').val(response[0].problem_22);
                  }
                  if(response[0].problem_23){
                    $('#problem_23').val(response[0].problem_23);
                  }
                  if(response[0].problem_13){
                    $('#problem_24').val(response[0].problem_24);
                  }


                  // $('#total_1').val(response[0].total_1);
                  // $('#total_2').val(response[0].total_2);
                  // $('#total_3').val(response[0].total_3);
                  // $('#total_4').val(response[0].total_4);
                  // $('#total_5').val(response[0].total_5);
                  // $('#total_6').val(response[0].total_6);
                  // $('#total_7').val(response[0].total_7);
                  // $('#total_8').val(response[0].total_8);
                  // $('#total_9').val(response[0].total_9);
                  // $('#total_10').val(response[0].total_10);
                  // $('#total_11').val(response[0].total_11);
                  // $('#total_12').val(response[0].total_12);
                  // $('#total_13').val(response[0].total_13);
              }
          });

          if(response[0].status == 'UPLOAD'){
            $('#edit_hourly_radio').show(200);
            <?php
              if($this->session->id_role == '2'){
                ?>
                $('#confirm_hourly_radio').show(200);
                <?php
              }
            ?>
            
          }else{
            $('#edit_hourly_radio').hide(200);
            $('#confirm_hourly_radio').hide(200);
          }
      },
    });
  }

  $("#form_hourly_report").submit(function(e) {
      e.preventDefault(); // avoid to execute the actual submit of the form.
      var id_hourly_radio = $('#id_hourly_radio').val();
      var tgl_aktifitas = $('#tgl_aktifitas').val();
      var no_unit = $('#no_unit').val();
      var type_unit = $('#type_unit').val();
      var block = $('#block').val();
      var operator = $('#operator').val();
      var dt_ton = $('#dt_ton').val();
      var jarak = $('#jarak').val();
      
      // var time_1 = $('#time_1').val();
      var mat_1 = $('#mat_1').val();
      var total_1 = $('#total_1').val();
      var work_1 = $('#work_1').val();
      var remark_1 = $('#remark_1').val();
      var problem_1 = $('#problem_1').val();

      // var time_2 = $('#time_2').val();
      var mat_2 = $('#mat_2').val();
      var total_2 = $('#total_2').val();
      var work_2 = $('#work_2').val();
      var remark_2 = $('#remark_2').val();
      var problem_2 = $('#problem_2').val();

      // var time_3 = $('#time_3').val();
      var mat_3 = $('#mat_3').val();
      var total_3 = $('#total_3').val();
      var work_3 = $('#work_3').val();
      var remark_3 = $('#remark_3').val();
      var problem_3 = $('#problem_3').val();

      // var time_4 = $('#time_4').val();
      var mat_4 = $('#mat_4').val();
      var total_4 = $('#total_4').val();
      var work_4 = $('#work_4').val();
      var remark_4 = $('#remark_4').val();
      var problem_4 = $('#problem_4').val();

      // var time_5 = $('#time_5').val();
      var mat_5 = $('#mat_5').val();
      var total_5 = $('#total_5').val();
      var work_5 = $('#work_5').val();
      var remark_5 = $('#remark_5').val();
      var problem_5 = $('#problem_5').val();

      // var time_6 = $('#time_6').val();
      var mat_6 = $('#mat_6').val();
      var total_6 = $('#total_6').val();
      var work_6 = $('#work_6').val();
      var remark_6 = $('#remark_6').val();
      var problem_6 = $('#problem_6').val();

      // var time_7 = $('#time_7').val();
      var mat_7 = $('#mat_7').val();
      var total_7 = $('#total_7').val();
      var work_7 = $('#work_7').val();
      var remark_7 = $('#remark_7').val();
      var problem_7 = $('#problem_7').val();

      // var time_8 = $('#time_8').val();
      var mat_8 = $('#mat_8').val();
      var total_8 = $('#total_8').val();
      var work_8 = $('#work_8').val();
      var remark_8 = $('#remark_8').val();
      var problem_8 = $('#problem_8').val();

      // var time_9 = $('#time_9').val();
      var mat_9 = $('#mat_9').val();
      var total_9 = $('#total_9').val();
      var work_9 = $('#work_9').val();
      var remark_9 = $('#remark_9').val();
      var problem_9 = $('#problem_9').val();

      // var time_10 = $('#time_10').val();
      var mat_10 = $('#mat_10').val();
      var total_10 = $('#total_10').val();
      var work_10 = $('#work_10').val();
      var remark_10 = $('#remark_10').val();
      var problem_10 = $('#problem_10').val();

      // var time_11 = $('#time_11').val();
      var mat_11 = $('#mat_11').val();
      var total_11 = $('#total_11').val();
      var work_11 = $('#work_11').val();
      var remark_11 = $('#remark_11').val();
      var problem_11 = $('#problem_11').val();

      // var time_12 = $('#time_12').val();
      var mat_12 = $('#mat_12').val();
      var total_12 = $('#total_12').val();
      var work_12 = $('#work_12').val();
      var remark_12 = $('#remark_12').val();
      var problem_12 = $('#problem_12').val();

      // var time_13 = $('#time_13').val();
      var mat_13 = $('#mat_13').val();
      var total_13 = $('#total_13').val();
      var work_13 = $('#work_13').val();
      var remark_13 = $('#remark_13').val();
      var problem_13 = $('#problem_13').val();

      // var time_14 = $('#time_14').val();
      var mat_14 = $('#mat_14').val();
      var total_14 = $('#total_14').val();
      var work_14 = $('#work_14').val();
      var remark_14 = $('#remark_14').val();
      var problem_14 = $('#problem_14').val();

      // var time_15 = $('#time_15').val();
      var mat_15 = $('#mat_15').val();
      var total_15 = $('#total_15').val();
      var work_15 = $('#work_15').val();
      var remark_15 = $('#remark_15').val();
      var problem_15 = $('#problem_15').val();

      var time_16 = $('#time_16').val();
      var mat_16 = $('#mat_16').val();
      var total_16 = $('#total_16').val();
      var work_16 = $('#work_16').val();
      var remark_16 = $('#remark_16').val();
      var problem_16 = $('#problem_16').val();

      var time_17 = $('#time_17').val();
      var mat_17 = $('#mat_17').val();
      var total_17 = $('#total_17').val();
      var work_17 = $('#work_17').val();
      var remark_17 = $('#remark_17').val();
      var problem_17 = $('#problem_17').val();

      var time_18 = $('#time_18').val();
      var mat_18 = $('#mat_18').val();
      var total_18 = $('#total_18').val();
      var work_18 = $('#work_18').val();
      var remark_18 = $('#remark_18').val();
      var problem_18 = $('#problem_18').val();

      var time_19 = $('#time_19').val();
      var mat_19 = $('#mat_19').val();
      var total_19 = $('#total_19').val();
      var work_19 = $('#work_19').val();
      var remark_19 = $('#remark_19').val();
      var problem_19 = $('#problem_19').val();

      var time_20 = $('#time_20').val();
      var mat_20 = $('#mat_20').val();
      var total_20 = $('#total_20').val();
      var work_20 = $('#work_20').val();
      var remark_20 = $('#remark_20').val();
      var problem_20 = $('#problem_20').val();

      var time_21 = $('#time_21').val();
      var mat_21 = $('#mat_21').val();
      var total_21 = $('#total_21').val();
      var work_21 = $('#work_21').val();
      var remark_21 = $('#remark_21').val();
      var problem_21 = $('#problem_21').val();

      var time_22 = $('#time_22').val();
      var mat_22 = $('#mat_22').val();
      var total_22 = $('#total_22').val();
      var work_22 = $('#work_22').val();
      var remark_22 = $('#remark_22').val();
      var problem_22 = $('#problem_22').val();
      
      var time_23 = $('#time_23').val();
      var mat_23 = $('#mat_23').val();
      var total_23 = $('#total_23').val();
      var work_23 = $('#work_23').val();
      var remark_23 = $('#remark_23').val();
      var problem_23 = $('#problem_23').val();

      var time_24 = $('#time_24').val();
      var mat_24 = $('#mat_24').val();
      var total_24 = $('#total_24').val();
      var work_24 = $('#work_24').val();
      var remark_24 = $('#remark_24').val();
      var problem_24 = $('#problem_24').val();

      $('#send_hourly_radio').hide(200);
      $('#edit_hourly_radio').hide(200);
      $('#close_hourly_radio').hide(200);
      $('#msgWaiting').show(200);

      if(id_hourly_radio === ''){
        $.ajax({
          type: "POST",
            url: '<?php echo base_url().'Validator/create_data_radio';?>',
            dataType: 'json',
            data:{
              no_unit: no_unit,
              tgl_aktifitas: tgl_aktifitas,
              type_unit: type_unit,
              block: block,
              work: work,
              remark: remark,
              problem: problem,
              operator: operator,
              dt_ton: dt_ton,
              jarak:jarak,
              time_1: time_1,
              mat_1: mat_1,
              total_1: total_1,
              time_2: time_2,
              mat_2: mat_2,
              total_2: total_2,
              time_3: time_3,
              mat_3: mat_3,
              total_3: total_3,
              time_4: time_4,
              mat_4: mat_4,
              total_4: total_4,
              time_5: time_5,
              mat_5: mat_5,
              total_5: total_5,
              time_6: time_6,
              mat_6: mat_6,
              total_6: total_6,
              time_7: time_7,
              mat_7: mat_7,
              total_7: total_7,
              time_8: time_8,
              mat_8: mat_8,
              total_8: total_8,
              time_9: time_9,
              mat_9: mat_9,
              total_9: total_9,
              time_10: time_10,
              mat_10: mat_10,
              total_10: total_10,
              time_11: time_11,
              mat_11: mat_11,
              total_11: total_11,
              time_12: time_12,
              mat_12: mat_12,
              total_12: total_12,
              time_13: time_13,
              mat_13: mat_13,
              total_13: total_13,
              time_14: time_14,
              mat_14: mat_14,
              total_14: total_14,
              time_15: time_15,
              mat_15: mat_15,
              total_15: total_15,
              time_16: time_16,
              mat_16: mat_16,
              total_16: total_16,
              time_17: time_17,
              mat_17: mat_17,
              total_17: total_17,
              time_18: time_18,
              mat_18: mat_18,
              total_18: total_18,
              time_19: time_19,
              mat_19: mat_19,
              total_19: total_19,
              time_20: time_20,
              mat_20: mat_20,
              total_20: total_20,
              time_21: time_21,
              mat_21: mat_21,
              total_21: total_21,
              time_22: time_22,
              mat_22: mat_22,
              total_22: total_22,
              time_23: time_23,
              mat_23: mat_23,
              total_23: total_23,
              time_24: time_24,
              mat_24: mat_24,
              total_24: total_24,

            }, 
            success: function(response){
              if(response.response === 'success'){
                location.href ="<?php echo base_url().'Validator/update_data_radio/';?>"+no_unit;
                // $('#closePage').show(200);
                // $('#sendForm').show(200);
                // $('#msgWaiting').hide(200);
              }else if(response.response === 'failed'){
                location.href ="<?php echo base_url().'Validator/update_data_radio/';?>"+no_unit;
              }
            }
      });  
      }else if(id_hourly_radio !== ''){
        $.ajax({
          type: "POST",
            url: '<?php echo base_url().'Validator/edit_data_radio';?>',
            dataType: 'json',
            data:{
              no_unit: no_unit,
              type_unit: type_unit,
              block: block,
              operator: operator,
              dt_ton: dt_ton,
              jarak:jarak,
              // time_1: time_1,
              mat_1: mat_1,
              total_1: total_1,
              work_1: work_1,
              remark_1: remark_1,
              problem_1: problem_1,
              // time_2: time_2,
              mat_2: mat_2,
              total_2: total_2,
              work_2: work_2,
              remark_2: remark_2,
              problem_2: problem_2,
              // time_3: time_3,
              mat_3: mat_3,
              total_3: total_3,
              work_3: work_3,
              remark_3: remark_3,
              problem_3: problem_3,
              // time_4: time_4,
              mat_4: mat_4,
              total_4: total_4,
              work_4: work_4,
              remark_4: remark_4,
              problem_4: problem_4,
              // time_5: time_5,
              mat_5: mat_5,
              total_5: total_5,
              work_5: work_5,
              remark_5: remark_5,
              problem_5: problem_5,
              // time_6: time_6,
              mat_6: mat_6,
              total_6: total_6,
              work_6: work_6,
              remark_6: remark_6,
              problem_6: problem_6,
              // time_7: time_7,
              mat_7: mat_7,
              total_7: total_7,
              work_7: work_7,
              remark_7: remark_7,
              problem_7: problem_7,
              // time_8: time_8,
              mat_8: mat_8,
              total_8: total_8,
              work_8: work_8,
              remark_8: remark_8,
              problem_8: problem_8,
              // time_9: time_9,
              mat_9: mat_9,
              total_9: total_9,
              work_9: work_9,
              remark_9: remark_9,
              problem_9: problem_9,
              // time_10: time_10,
              mat_10: mat_10,
              total_10: total_10,
              work_10: work_10,
              remark_10: remark_10,
              problem_10: problem_10,
              // time_11: time_11,
              mat_11: mat_11,
              total_11: total_11,
              work_11: work_11,
              remark_11: remark_11,
              problem_11: problem_11,
              // time_12: time_12,
              mat_12: mat_12,
              total_12: total_12,
              work_12: work_12,
              remark_12: remark_12,
              problem_12: problem_12,
              // time_13: time_13,
              mat_13: mat_13,
              total_13: total_13,
              work_13: work_13,
              remark_13: remark_13,
              problem_13: problem_13,
              // time_14: time_14,
              mat_14: mat_14,
              total_14: total_14,
              work_14: work_14,
              remark_14: remark_14,
              problem_14: problem_14,
              // time_15: time_15,
              mat_15: mat_15,
              total_15: total_15,
              work_15: work_15,
              remark_15: remark_15,
              problem_15: problem_15,
              // time_16: time_16,
              mat_16: mat_16,
              total_16: total_16,
              work_16: work_16,
              remark_16: remark_16,
              problem_16: problem_16,
              // time_17: time_17,
              mat_17: mat_17,
              total_17: total_17,
              work_17: work_17,
              remark_17: remark_17,
              problem_17: problem_17,
              // time_18: time_18,
              mat_18: mat_18,
              total_18: total_18,
              work_18: work_18,
              remark_18: remark_18,
              problem_18: problem_18,
              // time_19: time_19,
              mat_19: mat_19,
              total_19: total_19,
              work_19: work_19,
              remark_19: remark_19,
              problem_19: problem_19,
              // time_20: time_20,
              mat_20: mat_20,
              total_20: total_20,
              work_20: work_20,
              remark_20: remark_20,
              problem_20: problem_20,
              // time_21: time_21,
              mat_21: mat_21,
              total_21: total_21,
              work_21: work_21,
              remark_21: remark_21,
              problem_21: problem_21,
              // time_22: time_22,
              mat_22: mat_22,
              total_22: total_22,
              work_22: work_22,
              remark_22: remark_22,
              problem_22: problem_22,
              // time_23: time_23,
              mat_23: mat_23,
              total_23: total_23,
              work_23: work_23,
              remark_23: remark_23,
              problem_23: problem_23,
              // time_24: time_24,
              mat_24: mat_24,
              total_24: total_24,
              work_24: work_24,
              remark_24: remark_24,
              problem_24: problem_24,
              id_hourly_radio: id_hourly_radio,
              tgl_aktifitas:tgl_aktifitas,
            }, 
            success: function(response){
              if(response.response === 'success'){
                location.href ="<?php echo base_url().'Validator/hourly_report/';?>";
                // $('#closePage').show(200);
                // $('#sendForm').show(200);
                // $('#msgWaiting').hide(200);
              }
            }
      });
      }
      
  });
</script>

</html>