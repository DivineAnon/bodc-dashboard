<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
  <meta name="description" content="bootstrap material admin template" />
  <meta name="author" content="" />

  <title>BODC CYBER APPS | ADMIN</title>

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
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/fonts/font-awesome/font-awesome.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/fonts/material-design/material-design.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>

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
            <a href="<?php echo base_url().'Admin';?>" class="nav-link waves-effect waves-light waves-round">
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
        </a>
      </li> -->
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
      </div>

      <!-- DATA UNIT -->
      <div class="page-content">
        <!-- Panel Basic -->
        <div class="panel" style="margin-left: 30px;">
          <header class="panel-heading text-center">
            <div class="panel-actions"></div>
            <h1 class="panel-title" style="background:#0267ca; color: #fff; font-size: large; text-align: left;">Data
              Unit</h1>
            <div class="panel-actions">
              <button type="button" class="btn" style="background:#0267ca; color: #fff; width: 5rem;"
                data-toggle="modal" data-target="#dataunit">+</button>
            </div>
          </header>
          <div class="panel-body">
            <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
              <thead>
                <tr>
                  <th>CN Unit</th>
                  <th>EGI</th>
                  <th>Type Unit</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  if(!empty($unit['id'])){
                    for ($i=0; $i < count($unit['id']); $i++) { 
                      $id = $unit['id'][$i];
                      $no_unit = $unit['no_unit'][$i];
                      $egi = $unit['egi'][$i];
                      $type_unit = $unit['type_unit'][$i];
                      $type = $unit['type'][$i];
                      $brand = $unit['brand'][$i];
                      $owner = $unit['owner'][$i];
                    
                ?>
                <tr>
                  <td><?php echo $no_unit;?></td>
                  <td><?php echo $egi;?></td>
                  <td><?php echo $type_unit;?></td>
                  <td>
                    <a href="#" class="button mr-10" onclick="unit_detail('<?php echo $id;?>')" style="font-size:large; text-decoration:none !important;">
                      <i class="icon md-settings"></i>
                    </a>
                    <a href="<?php echo base_url().'Admin/delete_unit/'.$id;?>" class="button delete-btn" style="font-size:large; text-decoration:none !important;">
                      <i class="icon md-delete"></i>
                    </a>
                  </td>
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
      <!-- DATA UNIT ENDS -->

      <!-- OPERATOR START -->
      <div class="page-content">
        <!-- Panel Basic -->
        <div class="panel" style="margin-left: 30px;">
          <header class="panel-heading text-center">
            <div class="panel-actions"></div>
            <h1 class="panel-title" style="background:#0267ca; color: #fff; font-size: large; text-align: left;">
              Operator</h1>
            <div class="panel-actions">
              <button type="button" class="btn" style="background:#0267ca; color: #fff; width: 5rem;"
                data-toggle="modal" data-target="#operator">+</button>
            </div>
          </header>
          <div class="panel-body">
            <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
              <thead>
                <tr>
                  <th>NRP</th>
                  <th>Nama</th>
                  <th>Unit Field</th>
                  <th>Create Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  if(!empty($operator['id'])){
                    for ($i=0; $i < count($operator['id']); $i++) { 
                      $id = $operator['id'][$i];
                      $nrp = $operator['nrp'][$i];
                      $name = $operator['first_name'][$i].' '.$operator['last_name'][$i];
                      $unit_field = $operator['unit_field'][$i];
                      $created_date = $operator['created_date'][$i];
                    
                ?>
                <tr>
                  <td><?php echo $nrp;?></td>
                  <td><?php echo $name;?></td>
                  <td><?php echo $unit_field;?></td>
                  <td><?php echo $created_date;?></td>
                  <td>
                    <a href="#" class="button mr-10" onclick="operator_detail('<?php echo $id;?>')" style="font-size:large; text-decoration:none !important;">
                      <i class="icon md-settings"></i>
                    </a>
                    <a href="<?php echo base_url().'Admin/delete_operator/'.$id;?>" class="button delete-btn" style="font-size:large; text-decoration:none !important;">
                      <i class="icon md-delete"></i>
                    </a>
                  </td>
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
      <!-- OPERATOR END -->

      <div class="row">
        <div class="col-lg-6">
          <!-- KODE PROSES START -->
          <div class="page-content">
            <!-- Panel Basic -->
            <div class="panel" style="margin-left: 30px;">
              <header class="panel-heading text-center">
                <div class="panel-actions"></div>
                <h1 class="panel-title" style="background:#0267ca; color: #fff; font-size: large; text-align: left;">
                  Kode Proses</h1>
                <div class="panel-actions">
                  <button type="button" class="btn" style="background:#0267ca; color: #fff; width: 5rem;"
                    data-toggle="modal" data-target="#kodeproses">+</button>
                </div>
              </header>
              <div class="panel-body">
                <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Proses</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      if(!empty($proses['id'])){
                        for ($i=0; $i < count($proses['id']); $i++) { 
                          $id = $proses['id'][$i];
                          $kode = $proses['kode'][$i];
                    ?>
                    <tr>
                      <td><?php echo $id;?></td>
                      <td><?php echo $kode;?></td>
                      <td>
                        <a href="#" class="button mr-10" onclick="kode_proses_detail('<?php echo $id;?>')" style="font-size:large; text-decoration:none !important;">
                          <i class="icon md-settings"></i>
                        </a>
                        <a href="<?php echo base_url().'Admin/delete_kode_proses/'.$id;?>" class="button delete-btn" style="font-size:large; text-decoration:none !important;">
                          <i class="icon md-delete"></i>
                        </a>
                      </td>
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
          <!-- KODE PROSES ENDS -->
        </div>
        <div class="col-lg-6">
          <!-- KODE AKTIVITAS START -->
          <div class="page-content">
            <!-- Panel Basic -->
            <div class="panel" style="margin-left: 30px;">
              <header class="panel-heading text-center">
                <div class="panel-actions"></div>
                <h1 class="panel-title" style="background:#0267ca; color: #fff; font-size: large; text-align: left;">
                  Kode Aktivitas</h1>
                <div class="panel-actions">
                  <button type="button" class="btn" style="background:#0267ca; color: #fff; width: 5rem;"
                    data-toggle="modal" data-target="#kodeaktivitas">+</button>
                </div>
              </header>
              <div class="panel-body">
                <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Aktivitas</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      if(!empty($aktivitas['id'])){
                        for ($i=0; $i < count($aktivitas['id']); $i++) { 
                          $id = $aktivitas['id'][$i];
                          $kode = $aktivitas['kode'][$i];
                    ?>
                    <tr>
                      <td><?php echo $id;?></td>
                      <td><?php echo $kode;?></td>
                      <td>
                        <a href="#" class="button mr-10" onclick="kode_aktivitas_detail('<?php echo $id;?>')" style="font-size:large; text-decoration:none !important;">
                          <i class="icon md-settings"></i>
                        </a>
                        <a href="<?php echo base_url().'Admin/delete_kode_aktivitas/'.$id;?>" class="button delete-btn" style="font-size:large; text-decoration:none !important;">
                          <i class="icon md-delete"></i>
                        </a>
                      </td>
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
          <!-- KODE AKTIVITAS ENDS -->
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <!-- KODE MATERIAL START -->
          <div class="page-content">
            <!-- Panel Basic -->
            <div class="panel" style="margin-left: 30px;">
              <header class="panel-heading text-center">
                <div class="panel-actions"></div>
                <h1 class="panel-title" style="background:#0267ca; color: #fff; font-size: large; text-align: left;">
                  Kode Material</h1>
                <div class="panel-actions">
                  <button type="button" class="btn" style="background:#0267ca; color: #fff; width: 5rem;"
                    data-toggle="modal" data-target="#kodematerial">+</button>
                </div>
              </header>
              <div class="panel-body">
                <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                  <thead>
                    <tr>
                      <th>Kode</th>
                      <th>Material</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      if(!empty($material['id'])){
                        for ($i=0; $i < count($material['id']); $i++) { 
                          $id = $material['id'][$i];
                          $kode = $material['kode'][$i];
                    ?>
                    <tr>
                      <td><?php echo $id;?></td>
                      <td><?php echo $kode;?></td>
                      <td>
                        <a href="#" class="button mr-10" onclick="kode_material_detail('<?php echo $id;?>')" style="font-size:large; text-decoration:none !important;">
                          <i class="icon md-settings"></i>
                        </a>
                        <a href="<?php echo base_url().'Admin/delete_kode_material/'.$id;?>" class="button delete-btn" style="font-size:large; text-decoration:none !important;">
                          <i class="icon md-delete"></i>
                        </a>
                      </td>
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
          <!-- KODE MATERIAL ENDS -->
        </div>
        <div class="col-lg-6">
          <!-- KODE STANDBY START -->
          <div class="page-content">
            <!-- Panel Basic -->
            <div class="panel" style="margin-left: 30px;">
              <header class="panel-heading text-center">
                <div class="panel-actions"></div>
                <h1 class="panel-title" style="background:#0267ca; color: #fff; font-size: large; text-align: left;">
                  Kode Standby</h1>
                <div class="panel-actions">
                  <button type="button" class="btn" style="background:#0267ca; color: #fff; width: 5rem;"
                    data-toggle="modal" data-target="#kodestandby">+</button>
                </div>
              </header>
              <div class="panel-body">
                <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                  <thead>
                    <tr>
                      <th>Kode</th>
                      <th>Standby</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      if(!empty($standby['id'])){
                        for ($i=0; $i < count($standby['id']); $i++) { 
                          $id = $standby['id'][$i];
                          $kode = $standby['kode'][$i];
                    ?>
                    <tr>
                      <td><?php echo $id;?></td>
                      <td><?php echo $kode;?></td>
                      <td>
                        <a href="#" class="button mr-10" onclick="kode_stanby_detail('<?php echo $id;?>')" style="font-size:large; text-decoration:none !important;">
                          <i class="icon md-settings"></i>
                        </a>
                        <a href="<?php echo base_url().'Admin/delete_kode_stanby/'.$id;?>" class="button delete-btn" style="font-size:large; text-decoration:none !important;">
                          <i class="icon md-delete"></i>
                        </a>
                      </td>
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
          <!-- KODE STANDBY ENDS -->
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <!-- KODE DT Ton START -->
          <div class="page-content">
            <!-- Panel Basic -->
            <div class="panel" style="margin-left: 30px;">
              <header class="panel-heading text-center">
                <div class="panel-actions"></div>
                <h1 class="panel-title" style="background:#0267ca; color: #fff; font-size: large; text-align: left;">
                  Data DT Ton</h1>
                <div class="panel-actions">
                  <button type="button" class="btn" style="background:#0267ca; color: #fff; width: 5rem;"
                    data-toggle="modal" data-target="#kodedtton">+</button>
                </div>
              </header>
              <div class="panel-body">
                <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>DT Ton</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      if(!empty($dt_ton['id'])){
                        for ($i=0; $i < count($dt_ton['id']); $i++) { 
                          $id = $dt_ton['id'][$i];
                          $nama = $dt_ton['nama'][$i];
                    ?>
                    <tr>
                      <td><?php echo $id;?></td>
                      <td><?php echo $nama;?></td>
                      <td>
                        <a href="#" class="button mr-10" onclick="kode_dt_ton_detail('<?php echo $id;?>')" style="font-size:large; text-decoration:none !important;">
                          <i class="icon md-settings"></i>
                        </a>
                        <a href="<?php echo base_url().'Admin/delete_kode_dt_ton/'.$id;?>" class="button delete-btn" style="font-size:large; text-decoration:none !important;">
                          <i class="icon md-delete"></i>
                        </a>
                      </td>
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
          <!-- KODE DT Ton ENDS -->
        </div>
        <div class="col-lg-6">
          <!-- KODE Block/PIT START -->
          <div class="page-content">
            <!-- Panel Basic -->
            <div class="panel" style="margin-left: 30px;">
              <header class="panel-heading text-center">
                <div class="panel-actions"></div>
                <h1 class="panel-title" style="background:#0267ca; color: #fff; font-size: large; text-align: left;">
                  Data Block/PIT</h1>
                <div class="panel-actions">
                  <button type="button" class="btn" style="background:#0267ca; color: #fff; width: 5rem;"
                    data-toggle="modal" data-target="#kodeblock">+</button>
                </div>
              </header>
              <div class="panel-body">
                <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Block/PIT</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      if(!empty($block['id'])){
                        for ($i=0; $i < count($block['id']); $i++) { 
                          $id = $block['id'][$i];
                          $nama = $block['nama'][$i];
                    ?>
                    <tr>
                      <td><?php echo $id;?></td>
                      <td><?php echo $nama;?></td>
                      <td>
                        <a href="#" class="button mr-10" onclick="kode_block_detail('<?php echo $id;?>')" style="font-size:large; text-decoration:none !important;">
                          <i class="icon md-settings"></i>
                        </a>
                        <a href="<?php echo base_url().'Admin/delete_kode_block/'.$id;?>" class="button delete-btn" style="font-size:large; text-decoration:none !important;">
                          <i class="icon md-delete"></i>
                        </a>
                      </td>
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
          <!-- KODE Block/PIT ENDS -->
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <!-- KODE Unit Type START -->
          <div class="page-content">
            <!-- Panel Basic -->
            <div class="panel" style="margin-left: 30px;">
              <header class="panel-heading text-center">
                <div class="panel-actions"></div>
                <h1 class="panel-title" style="background:#0267ca; color: #fff; font-size: large; text-align: left;">
                  Data Unit Type</h1>
                <div class="panel-actions">
                  <button type="button" class="btn" style="background:#0267ca; color: #fff; width: 5rem;"
                    data-toggle="modal" data-target="#kodeunittype">+</button>
                </div>
              </header>
              <div class="panel-body">
                <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Unit Type</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      if(!empty($unit_type['id'])){
                        for ($i=0; $i < count($unit_type['id']); $i++) { 
                          $id = $unit_type['id'][$i];
                          $nama = $unit_type['nama'][$i];
                    ?>
                    <tr>
                      <td><?php echo $id;?></td>
                      <td><?php echo $nama;?></td>
                      <td>
                        <a href="#" class="button mr-10" onclick="kode_unit_type_detail('<?php echo $id;?>')" style="font-size:large; text-decoration:none !important;">
                          <i class="icon md-settings"></i>
                        </a>
                        <a href="<?php echo base_url().'Admin/delete_kode_unit_type/'.$id;?>" class="button delete-btn" style="font-size:large; text-decoration:none !important;">
                          <i class="icon md-delete"></i>
                        </a>
                      </td>
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
          <!-- KODE Unit Type ENDS -->
        </div>
        <div class="col-lg-6">
          <!-- KODE Loading Point START -->
          <div class="page-content">
            <!-- Panel Basic -->
            <div class="panel" style="margin-left: 30px;">
              <header class="panel-heading text-center">
                <div class="panel-actions"></div>
                <h1 class="panel-title" style="background:#0267ca; color: #fff; font-size: large; text-align: left;">
                  Data Loading Point</h1>
                <div class="panel-actions">
                  <button type="button" class="btn" style="background:#0267ca; color: #fff; width: 5rem;"
                    data-toggle="modal" data-target="#kodeloadingpoint">+</button>
                </div>
              </header>
              <div class="panel-body">
                <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Loading Point</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      if(!empty($loading_point['id'])){
                        for ($i=0; $i < count($loading_point['id']); $i++) { 
                          $id = $loading_point['id'][$i];
                          $nama = $loading_point['nama'][$i];
                    ?>
                    <tr>
                      <td><?php echo $id;?></td>
                      <td><?php echo $nama;?></td>
                      <td>
                        <a href="#" class="button mr-10" onclick="kode_loading_point_detail('<?php echo $id;?>')" style="font-size:large; text-decoration:none !important;">
                          <i class="icon md-settings"></i>
                        </a>
                        <a href="<?php echo base_url().'Admin/delete_kode_loading_point/'.$id;?>" class="button delete-btn" style="font-size:large; text-decoration:none !important;">
                          <i class="icon md-delete"></i>
                        </a>
                      </td>
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
          <!-- KODE Block/PIT ENDS -->
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Data Unit -->
  <div class="modal fade" id="dataunit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background: #80808038;">
          <h5 class="modal-title" id="exampleModalLongTitle">Add Unit</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div style="text-align: center; font-size: 20px; color: red; display: none;" id="msg1"><p id="msg2"></p></div>
          <form id="create_unit">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>CN Unit :</label>
                  <input type="text" class="form-control" name="no_unit" id="no_unit" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>EGI:</label>
                  <input type="text" class="form-control" name="egi" id="egi" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Unit Type:</label>
                  <select name="unit_type" id="unit_type" class="form-control" required autocomplete="off">
                    <option value="" disabled selected>Select unit type</option>
                  <?php
                    if(!empty($unit_type['id'])){
                      for ($i=0; $i < count($unit_type['id']); $i++) { 
                        $id = $unit_type['id'][$i];
                        $nama = $unit_type['nama'][$i];
                  ?>

                  
                    <option value="<?php echo $id;?>"><?php echo $nama;?></option>
                  
                  <?php
                      }
                    }
                  ?>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Type:</label>
                  <input type="text" class="form-control" name="type" id="type" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Brand:</label>
                  <input type="text" class="form-control" name="brand" id="brand" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Owner:</label>
                  <input type="text" class="form-control" name="owner" id="owner" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <button type="submit" style="width: 100%;" class="btn btn-primary" id="send_unit">Save</button>
                <h5 style="color: #1572E8; display: none;" id="msgWaiting">Waiting Process...</h5>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Data Unit End -->

  <!-- Modal operator -->
  <div class="modal fade" id="operator" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background: #80808038;">
          <h5 class="modal-title" id="exampleModalLongTitle">Add Operator</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="create_operator">
            <div style="text-align: center; font-size: 20px; color: red; display: none;" id="msg3"><p id="msg4"></p></div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>NRP:</label>
                  <input type="text" class="form-control" name="nrp" id="nrp" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label>First Name:</label>
                  <input type="text" class="form-control" name="first_name" id="first_name" autocomplete="off" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label>Last Name:</label>
                  <input type="text" class="form-control" name="last_name" id="last_name" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Tempat Lahir:</label>
                  <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Tanggal Lahir:</label>
                  <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Unit Field:</label>
                  <select name="unit_field" id="unit_field" class="form-control" required autocomplete="off">
                    <option value="" disabled selected>Select unit field</option>
                    <?php
                      if(!empty($unit_field2['id'])){
                        for ($i=0; $i < count($unit_field2['id']); $i++) { 
                          $id = $unit_field2['id'][$i];
                          $nama = $unit_field2['name'][$i];
                    ?>
                      <option value="<?php echo $id;?>"><?php echo $nama;?></option>
                    
                    <?php
                        }
                      }
                    ?>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <button type="submit" style="width: 100%;" class="btn btn-primary" id="send_operator">Save</button>
                  <h5 style="color: #1572E8; display: none;" id="msgWaiting2">Waiting Process...</h5>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal operator End -->

  <!-- Modal kodeproses -->
  <div class="modal fade" id="kodeproses" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background: #80808038;">
          <h5 class="modal-title" id="exampleModalLongTitle">Add Kode Proses</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="create_kode_proses">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Kode:</label>
                  <input type="text" class="form-control" name="kode" id="kode" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <button type="submit" style="width: 100%;" class="btn btn-primary" id="send_kode_proses">Save</button>
                <h5 style="color: #1572E8; display: none;" id="msgWaiting3">Waiting Process...</h5>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal kodeproses End -->

  <!-- Modal kodeaktivitas -->
  <div class="modal fade" id="kodeaktivitas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background: #80808038;">
          <h5 class="modal-title" id="exampleModalLongTitle">Add Kode Aktivitas</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="create_kode_aktivitas">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Kode:</label>
                  <input type="text" class="form-control" name="kode" id="kode2" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <button type="submit" style="width: 100%;" class="btn btn-primary" id="send_kode_aktivitas">Save</button>
                <h5 style="color: #1572E8; display: none;" id="msgWaiting4">Waiting Process...</h5>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal kodeaktivitas End -->

  <!-- Modal kodematerial -->
  <div class="modal fade" id="kodematerial" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background: #80808038;">
          <h5 class="modal-title" id="exampleModalLongTitle">Add Kode Material</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="create_kode_material">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Kode:</label>
                  <input type="text" class="form-control" name="kode" id="kode3" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Qty:</label>
                  <input type="number" min="0" value="0" step="0.1" class="form-control" name="qty" id="qty" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <button type="submit" style="width: 100%;" class="btn btn-primary" id="send_kode_material">Save</button>
                <h5 style="color: #1572E8; display: none;" id="msgWaiting5">Waiting Process...</h5>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal kodematerial End -->

  <!-- Modal kodestandby -->
  <div class="modal fade" id="kodestandby" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background: #80808038;">
          <h5 class="modal-title" id="exampleModalLongTitle">Add Kode Standby</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="create_kode_stanby">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Kode:</label>
                  <input type="text" class="form-control" name="kode" id="kode4" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <button type="submit" style="width: 100%;" class="btn btn-primary" id="send_kode_stanby">Save</button>
                <h5 style="color: #1572E8; display: none;" id="msgWaiting6">Waiting Process...</h5>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal kodestandby End -->
  <!-- Modal dtton -->
  <div class="modal fade" id="kodedtton" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background: #80808038;">
          <h5 class="modal-title" id="exampleModalLongTitle">Add Data DT Ton</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="create_kode_dt_ton">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>DT Ton:</label>
                  <input type="text" class="form-control" name="kode" id="kode5" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <button type="submit" style="width: 100%;" class="btn btn-primary" id="send_kode_dt_ton">Save</button>
                <h5 style="color: #1572E8; display: none;" id="msgWaiting7">Waiting Process...</h5>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal kodedtton End -->
  <!-- Modal block -->
  <div class="modal fade" id="kodeblock" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background: #80808038;">
          <h5 class="modal-title" id="exampleModalLongTitle">Add Data Block/PIT</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="create_kode_block">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Block/PIT:</label>
                  <input type="text" class="form-control" name="kode" id="kode6" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <button type="submit" style="width: 100%;" class="btn btn-primary" id="send_kode_block">Save</button>
                <h5 style="color: #1572E8; display: none;" id="msgWaiting8">Waiting Process...</h5>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal kodeblock End -->
  <!-- Modal unit type -->
  <div class="modal fade" id="kodeunittype" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background: #80808038;">
          <h5 class="modal-title" id="exampleModalLongTitle">Add Data Unit Type</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="create_kode_unit_type">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Unit Type:</label>
                  <input type="text" class="form-control" name="kode" id="kode7" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <button type="submit" style="width: 100%;" class="btn btn-primary" id="send_kode_unit_type">Save</button>
                <h5 style="color: #1572E8; display: none;" id="msgWaiting9">Waiting Process...</h5>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal kodeunittype End -->
  <!-- Modal loading point -->
  <div class="modal fade" id="kodeloadingpoint" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background: #80808038;">
          <h5 class="modal-title" id="exampleModalLongTitle">Add Data Loading Point</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="create_kode_loading_point">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Loading Point:</label>
                  <input type="text" class="form-control" name="kode" id="kode8" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <button type="submit" style="width: 100%;" class="btn btn-primary" id="send_kode_loading_point">Save</button>
                <h5 style="color: #1572E8; display: none;" id="msgWaiting10">Waiting Process...</h5>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal kodeloadingpoint End -->
  <!-- End Page -->

  <!-- Core  -->
  <script src="<?= base_url(); ?>assets/global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
  <script src="<?= base_url(); ?>assets/global/vendor/asrange/jquery-asRange.min.js"></script>
  <script src="<?= base_url(); ?>assets/global/vendor/bootbox/bootbox.js"></script>

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
  <script src="<?= base_url(); ?>assets/global/js/Plugin/datatables.js"></script>

  <script src="<?= base_url(); ?>assets/mmenu/assets/examples/js/tables/datatable.js"></script>
  <script src="<?= base_url(); ?>assets/mmenu/assets/examples/js/uikit/icon.js"></script>
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
              icon: 'error',
              title: 'Failed',
              showConfirmButton: false,
              timer: 2000
            })
          }
      }
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

  $('#dataunit').on('hidden.bs.modal', function(e) {
    $(this).find('form').trigger('reset');
    $('#msg1').hide();
  });
  $('#operator').on('hidden.bs.modal', function(e) {
    $(this).find('form').trigger('reset');
    $('#msg3').hide();
  });
  $('#kodeproses').on('hidden.bs.modal', function(e) {
    $(this).find('form').trigger('reset');
  });
  $('#kodeaktivitas').on('hidden.bs.modal', function(e) {
    $(this).find('form').trigger('reset');
  });
  $('#kodematerial').on('hidden.bs.modal', function(e) {
    $(this).find('form').trigger('reset');
  });
  $('#kodestandby').on('hidden.bs.modal', function(e) {
    $(this).find('form').trigger('reset');
    
  });
  $('#kodedtton').on('hidden.bs.modal', function(e) {
    $(this).find('form').trigger('reset');
    
  });
  $('#kodeblock').on('hidden.bs.modal', function(e) {
    $(this).find('form').trigger('reset');
    
  });
  $('#kodeunittype').on('hidden.bs.modal', function(e) {
    $(this).find('form').trigger('reset');
    
  });
  $('#kodeloadingpoint').on('hidden.bs.modal', function(e) {
    $(this).find('form').trigger('reset');
    
  });
  
  $("#create_unit").submit(function(e) {
      e.preventDefault(); // avoid to execute the actual submit of the form.
      var no_unit = $('#no_unit').val();
      var egi = $('#egi').val();
      var unit_type = $('#unit_type').val();
      var type = $('#type').val();
      var brand = $('#brand').val();
      var owner = $('#owner').val();
      var msg = document.getElementById("msg2");

      console.log('no_unit '+no_unit);
      console.log('egi '+egi);
      console.log('unit_type '+unit_type);
      console.log('type '+type);
      console.log('brand '+brand);
      console.log('owner '+owner);
      
      $('#send_unit').hide(200);
      $('#msgWaiting').show(200);
      $.ajax({
          type: "POST",
            url: '<?php echo base_url().'Admin/create_unit';?>',
            dataType: 'json',
            data:{
              no_unit: no_unit,
              egi: egi,
              unit_type: unit_type,
              type: type,
              brand: brand,
              owner:owner,
            }, 
            success: function(response){
              console.log(response.response);
              if(response.response === "cn unit same"){
                $('#no_unit').val('');
                $('#send_unit').show(200);
                $('#msgWaiting').hide(200);
                msg.innerHTML = "CN Unit Be The Same In Database";
                $('#msg1').css('color', 'red');
                $('#msg1').show(200);
              }else if(response.response === 'success'){
                location.href ="<?php echo base_url().'Admin/add_data_unit';?>";
                // $('#closePage').show(200);
                // $('#sendForm').show(200);
                // $('#msgWaiting').hide(200);
              }
            }
      });
  });

  $("#create_operator").submit(function(e) {
      e.preventDefault(); // avoid to execute the actual submit of the form.
      var nrp = $('#nrp').val();
      var first_name = $('#first_name').val();
      var last_name = $('#last_name').val();
      var tempat_lahir = $('#tempat_lahir').val();
      var tgl_lahir = $('#tgl_lahir').val();
      var unit_field = $('#unit_field').val();
      var msg = document.getElementById("msg4");

      console.log('nrp '+nrp);
      console.log('first_name '+first_name);
      console.log('last_name '+last_name);
      console.log('tempat_lahir '+tempat_lahir);
      console.log('tgl_lahir '+tgl_lahir);
      console.log('unit_field '+unit_field);
      
      $('#send_operator').hide(200);
      $('#msgWaiting2').show(200);
      $.ajax({
          type: "POST",
            url: '<?php echo base_url().'Admin/create_operator';?>',
            dataType: 'json',
            data:{
              nrp: nrp,
              first_name: first_name,
              last_name: last_name,
              tempat_lahir: tempat_lahir,
              tgl_lahir: tgl_lahir,
              unit_field:unit_field,
            }, 
            success: function(response){
              console.log(response.response);
              if(response.response === "nrp same"){
                $('#nrp').val('');
                $('#send_operator').show(200);
                $('#msgWaiting2').hide(200);
                msg.innerHTML = "NRP Be The Same In Database";
                $('#msg3').css('color', 'red');
                $('#msg3').show(200);
              }else if(response.response === 'success'){
                location.href ="<?php echo base_url().'Admin/add_data_unit';?>";
                // $('#closePage').show(200);
                // $('#sendForm').show(200);
                // $('#msgWaiting').hide(200);
              }
            }
      });
  });

  $("#create_kode_proses").submit(function(e) {
      e.preventDefault(); // avoid to execute the actual submit of the form.
      var kode = $('#kode').val();
      var msg = document.getElementById("msg6");

      console.log('kode '+kode);
      
      $('#send_kode_proses').hide(200);
      $('#msgWaiting3').show(200);
      $.ajax({
          type: "POST",
            url: '<?php echo base_url().'Admin/create_kode_proses';?>',
            dataType: 'json',
            data:{
              kode: kode,
            }, 
            success: function(response){
              console.log(response.response);
              if(response.response === 'success'){
                location.href ="<?php echo base_url().'Admin/add_data_unit';?>";
                // $('#closePage').show(200);
                // $('#sendForm').show(200);
                // $('#msgWaiting').hide(200);
              }
            }
      });
  });

  $("#create_kode_aktivitas").submit(function(e) {
      e.preventDefault(); // avoid to execute the actual submit of the form.
      var kode = $('#kode2').val();
      // var msg = document.getElementById("msg6");

      console.log('kode '+kode);
      
      $('#send_kode_aktivitas').hide(200);
      $('#msgWaiting4').show(200);
      $.ajax({
          type: "POST",
            url: '<?php echo base_url().'Admin/create_kode_aktivitas';?>',
            dataType: 'json',
            data:{
              kode: kode,
            }, 
            success: function(response){
              console.log(response.response);
              if(response.response === 'success'){
                location.href ="<?php echo base_url().'Admin/add_data_unit';?>";
                // $('#closePage').show(200);
                // $('#sendForm').show(200);
                // $('#msgWaiting').hide(200);
              }
            }
      });
  });

  $("#create_kode_material").submit(function(e) {
      e.preventDefault(); // avoid to execute the actual submit of the form.
      var kode = $('#kode3').val();
      var qty = $('#qty').val();
      // var msg = document.getElementById("msg6");

      console.log('kode '+kode);
      
      $('#send_kode_material').hide(200);
      $('#msgWaiting5').show(200);
      $.ajax({
          type: "POST",
            url: '<?php echo base_url().'Admin/create_kode_material';?>',
            dataType: 'json',
            data:{
              kode: kode,
              qty:qty,
            }, 
            success: function(response){
              console.log(response.response);
              if(response.response === 'success'){
                location.href ="<?php echo base_url().'Admin/add_data_unit';?>";
                // $('#closePage').show(200);
                // $('#sendForm').show(200);
                // $('#msgWaiting').hide(200);
              }
            }
      });
  });

  $("#create_kode_stanby").submit(function(e) {
      e.preventDefault(); // avoid to execute the actual submit of the form.
      var kode = $('#kode4').val();
      // var msg = document.getElementById("msg6");

      console.log('kode '+kode);
      
      $('#send_kode_stanby').hide(200);
      $('#msgWaiting6').show(200);
      $.ajax({
          type: "POST",
            url: '<?php echo base_url().'Admin/create_kode_stanby';?>',
            dataType: 'json',
            data:{
              kode: kode,
            }, 
            success: function(response){
              console.log(response.response);
              if(response.response === 'success'){
                location.href ="<?php echo base_url().'Admin/add_data_unit';?>";
                // $('#closePage').show(200);
                // $('#sendForm').show(200);
                // $('#msgWaiting').hide(200);
              }
            }
      });
  });

  $("#create_kode_dt_ton").submit(function(e) {
      e.preventDefault(); // avoid to execute the actual submit of the form.
      var kode = $('#kode5').val();
      // var msg = document.getElementById("msg6");

      console.log('kode '+kode);
      
      $('#send_kode_dt_ton').hide(200);
      $('#msgWaiting7').show(200);
      $.ajax({
          type: "POST",
            url: '<?php echo base_url().'Admin/create_kode_dt_ton';?>',
            dataType: 'json',
            data:{
              kode: kode,
            }, 
            success: function(response){
              console.log(response.response);
              if(response.response === 'success'){
                location.href ="<?php echo base_url().'Admin/add_data_unit';?>";
                // $('#closePage').show(200);
                // $('#sendForm').show(200);
                // $('#msgWaiting').hide(200);
              }
            }
      });
  });

  $("#create_kode_block").submit(function(e) {
      e.preventDefault(); // avoid to execute the actual submit of the form.
      var kode = $('#kode6').val();
      // var msg = document.getElementById("msg6");

      console.log('kode '+kode);
      
      $('#send_kode_block').hide(200);
      $('#msgWaiting8').show(200);
      $.ajax({
          type: "POST",
            url: '<?php echo base_url().'Admin/create_kode_block';?>',
            dataType: 'json',
            data:{
              kode: kode,
            }, 
            success: function(response){
              console.log(response.response);
              if(response.response === 'success'){
                location.href ="<?php echo base_url().'Admin/add_data_unit';?>";
                // $('#closePage').show(200);
                // $('#sendForm').show(200);
                // $('#msgWaiting').hide(200);
              }
            }
      });
  });
  $("#create_kode_unit_type").submit(function(e) {
      e.preventDefault(); // avoid to execute the actual submit of the form.
      var kode = $('#kode7').val();
      // var msg = document.getElementById("msg6");

      console.log('kode '+kode);
      
      $('#send_kode_unit_type').hide(200);
      $('#msgWaiting9').show(200);
      $.ajax({
          type: "POST",
            url: '<?php echo base_url().'Admin/create_kode_unit_type';?>',
            dataType: 'json',
            data:{
              kode: kode,
            }, 
            success: function(response){
              console.log(response.response);
              if(response.response === 'success'){
                location.href ="<?php echo base_url().'Admin/add_data_unit';?>";
                // $('#closePage').show(200);
                // $('#sendForm').show(200);
                // $('#msgWaiting').hide(200);
              }
            }
      });
  });
  $("#create_kode_loading_point").submit(function(e) {
      e.preventDefault(); // avoid to execute the actual submit of the form.
      var kode = $('#kode8').val();
      // var msg = document.getElementById("msg6");

      console.log('kode '+kode);
      
      $('#send_kode_loading_point').hide(200);
      $('#msgWaiting10').show(200);
      $.ajax({
          type: "POST",
            url: '<?php echo base_url().'Admin/create_kode_loading_point';?>',
            dataType: 'json',
            data:{
              kode: kode,
            }, 
            success: function(response){
              console.log(response.response);
              if(response.response === 'success'){
                location.href ="<?php echo base_url().'Admin/add_data_unit';?>";
                // $('#closePage').show(200);
                // $('#sendForm').show(200);
                // $('#msgWaiting').hide(200);
              }
            }
      });
  });

  var id_type_unit;

  function get_type_unit(){
    $.ajax({
      type: "GET",
      url: '<?php echo base_url().'Admin/get_type_unit_detail';?>',
      dataType: 'json',
      success: function(response){
        $.each(response,function(index,data){
          if(id_type_unit == data['id']){
            $('#unit_type2').append('<option class="role" value="'+data['id']+'" selected>'+data['nama']+'</option>');
          }else{
            $('#unit_type2').append('<option class="role" value="'+data['id']+'">'+data['nama']+'</option>'); 
          }
        });   
      },
    });
  }
  function unit_detail(id){
    $.ajax({
      type: "GET",
      url: '<?php echo base_url().'Admin/get_unit_detail/';?>'+id,
      dataType: 'json',
      success: function(response){
          console.log(response)
          var id = response[0].id;
          id_type_unit = response[0].type_unit;
          var no_unit = response[0].no_unit;
          var egi = response[0].egi;
          var type = response[0].type;
          var brand = response[0].brand;
          var owner = response[0].owner;
          $('#id_unit').val(id);
          $('#no_unit2').val(no_unit);
          $('#egi2').val(egi);
          $('#type2').val(type);
          $('#brand2').val(brand);
          $('#owner2').val(owner);
          get_type_unit();
          $('#edit_unit2').modal("show");
      },
    });
  }

  var id_unit_field;

  function get_unit_field(){
    $.ajax({
      type: "GET",
      url: '<?php echo base_url().'Admin/get_unit_field_detail';?>',
      dataType: 'json',
      success: function(response){
        $.each(response,function(index,data){
          if(id_unit_field == data['id']){
            $('#unit_field2').append('<option class="role" value="'+data['id']+'" selected>'+data['name']+'</option>');
          }else{
            $('#unit_field2').append('<option class="role" value="'+data['id']+'">'+data['name']+'</option>'); 
          }
        });   
      },
    });
  }

  function operator_detail(id){
    $.ajax({
      type: "GET",
      url: '<?php echo base_url().'Admin/get_operator_detail/';?>'+id,
      dataType: 'json',
      success: function(response){
          console.log(response)
          var id = response[0].id;
          id_unit_field = response[0].unit_field;
          var nrp = response[0].nrp;
          var first_name = response[0].first_name;
          var last_name = response[0].last_name;
          var tempat_lahir = response[0].tempat_lahir;
          var tgl_lahir = response[0].tgl_lahir;
          $('#id_operator').val(id);
          $('#nrp2').val(nrp);
          $('#first_name2').val(first_name);
          $('#last_name2').val(last_name);
          $('#tempat_lahir2').val(tempat_lahir);
          $('#tgl_lahir2').val(tgl_lahir);
          get_unit_field();
          $('#edit_operator2').modal("show");
      },
    });
  }

  function kode_proses_detail(id){
    $.ajax({
      type: "GET",
      url: '<?php echo base_url().'Admin/get_kode_proses_detail/';?>'+id,
      dataType: 'json',
      success: function(response){
          console.log(response)
          var id = response[0].id;
          var kode = response[0].kode;
          $('#id_kode_proses').val(id);
          $('#kode_proses').val(kode);
          $('#edit_kode_proses2').modal("show");
      },
    });
  }

  function kode_aktivitas_detail(id){
    $.ajax({
      type: "GET",
      url: '<?php echo base_url().'Admin/get_kode_aktivitas_detail/';?>'+id,
      dataType: 'json',
      success: function(response){
          console.log(response)
          var id = response[0].id;
          var kode = response[0].kode;
          $('#id_kode_aktivitas').val(id);
          $('#kode_aktivitas').val(kode);
          $('#edit_kode_aktivitas2').modal("show");
      },
    });
  }

  function kode_material_detail(id){
    $.ajax({
      type: "GET",
      url: '<?php echo base_url().'Admin/get_kode_material_detail/';?>'+id,
      dataType: 'json',
      success: function(response){
          console.log(response)
          var id = response[0].id;
          var kode = response[0].kode;
          var qty = response[0].qty;
          $('#id_kode_material').val(id);
          $('#kode_material').val(kode);
          $('#qty2').val(qty);
          $('#edit_kode_material2').modal("show");
      },
    });
  }

  function kode_stanby_detail(id){
    $.ajax({
      type: "GET",
      url: '<?php echo base_url().'Admin/get_kode_stanby_detail/';?>'+id,
      dataType: 'json',
      success: function(response){
          console.log(response)
          var id = response[0].id;
          var kode = response[0].kode;
          $('#id_kode_stanby').val(id);
          $('#kode_stanby').val(kode);
          $('#edit_kode_stanby2').modal("show");
      },
    });
  }

  function kode_dt_ton_detail(id){
    $.ajax({
      type: "GET",
      url: '<?php echo base_url().'Admin/get_kode_dt_ton_detail/';?>'+id,
      dataType: 'json',
      success: function(response){
          console.log(response)
          var id = response[0].id;
          var kode = response[0].nama;
          $('#id_kode_dt_ton').val(id);
          $('#kode_dt_ton').val(kode);
          $('#edit_kode_dt_ton2').modal("show");
      },
    });
  }

  function kode_block_detail(id){
    $.ajax({
      type: "GET",
      url: '<?php echo base_url().'Admin/get_kode_block_detail/';?>'+id,
      dataType: 'json',
      success: function(response){
          console.log(response)
          var id = response[0].id;
          var kode = response[0].nama;
          $('#id_kode_block').val(id);
          $('#kode_block').val(kode);
          $('#edit_kode_block2').modal("show");
      },
    });
  }

  function kode_unit_type_detail(id){
    $.ajax({
      type: "GET",
      url: '<?php echo base_url().'Admin/get_kode_unit_type_detail/';?>'+id,
      dataType: 'json',
      success: function(response){
          console.log(response)
          var id = response[0].id;
          var kode = response[0].nama;
          $('#id_kode_unit_type').val(id);
          $('#kode_unit_type').val(kode);
          $('#edit_kode_unit_type2').modal("show");
      },
    });
  }
  function kode_loading_point_detail(id){
    $.ajax({
      type: "GET",
      url: '<?php echo base_url().'Admin/get_kode_loading_point_detail/';?>'+id,
      dataType: 'json',
      success: function(response){
          console.log(response)
          var id = response[0].id;
          var kode = response[0].nama;
          $('#id_kode_loading_point').val(id);
          $('#kode_loading_point').val(kode);
          $('#edit_kode_loading_point2').modal("show");
      },
    });
  }
</script>
  <!-- Modal Data Unit -->
  <div class="modal fade" id="edit_unit2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background: #80808038;">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Unit</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="update_unit">
            <div style="text-align: center; font-size: 20px; color: red; display: none;" id="msg7"><p id="msg8"></p></div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>CN Unit :</label>
                  <input type="hidden" name="id_unit" id="id_unit">
                  <input type="text" class="form-control" name="no_unit" id="no_unit2" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>EGI:</label>
                  <input type="text" class="form-control" name="egi" id="egi2" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Unit Type:</label>
                  <select name="unit_type" id="unit_type2" class="form-control" required autocomplete="off">
                    
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Type:</label>
                  <input type="text" class="form-control" name="type" id="type2" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Brand:</label>
                  <input type="text" class="form-control" name="brand" id="brand2" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Owner:</label>
                  <input type="text" class="form-control" name="owner" id="owner2" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <button type="submit" style="width: 100%;" class="btn btn-primary" id="send_unit2">Save</button>
                <h5 style="color: #1572E8; display: none;" id="msgWaiting7">Waiting Process...</h5>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Data Unit End -->
  <!-- Modal operator -->
  <div class="modal fade" id="edit_operator2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background: #80808038;">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Operator</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="update_operator">
            <div style="text-align: center; font-size: 20px; color: red; display: none;" id="msg9"><p id="msg10"></p></div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>NRP:</label>
                  <input type="hidden" name="id" id="id_operator">
                  <input type="text" class="form-control" name="nrp" id="nrp2" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label>First Name:</label>
                  <input type="text" class="form-control" name="first_name" id="first_name2" autocomplete="off" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label>Last Name:</label>
                  <input type="text" class="form-control" name="last_name" id="last_name2" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Tempat Lahir:</label>
                  <input type="text" class="form-control" name="tempat_lahir" id="tempat_lahir2" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Tanggal Lahir:</label>
                  <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir2" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Unit Field:</label>
                  <select name="unit_field" id="unit_field2" class="form-control" required autocomplete="off">
                    
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <button type="submit" style="width: 100%;" class="btn btn-primary" id="send_operator2">Save</button>
                  <h5 style="color: #1572E8; display: none;" id="msgWaiting8">Waiting Process...</h5>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal operator End -->

  <!-- Modal kodeproses -->
  <div class="modal fade" id="edit_kode_proses2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background: #80808038;">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Kode Proses</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="update_kode_proses">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Kode:</label>
                  <input type="hidden" name="id" id="id_kode_proses">
                  <input type="text" class="form-control" name="kode" id="kode_proses" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <button type="submit" style="width: 100%;" class="btn btn-primary" id="send_kode_proses2">Save</button>
                <h5 style="color: #1572E8; display: none;" id="msgWaiting9">Waiting Process...</h5>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal kodeproses End -->

  <!-- Modal kodeaktivitas -->
  <div class="modal fade" id="edit_kode_aktivitas2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background: #80808038;">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Kode Aktivitas</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="update_kode_aktivitas">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Kode:</label>
                  <input type="hidden" name="id" id="id_kode_aktivitas">
                  <input type="text" class="form-control" name="kode" id="kode_aktivitas" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <button type="submit" style="width: 100%;" class="btn btn-primary" id="send_kode_aktivitas2">Save</button>
                <h5 style="color: #1572E8; display: none;" id="msgWaiting10">Waiting Process...</h5>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal kodeaktivitas End -->

  <!-- Modal kodematerial -->
  <div class="modal fade" id="edit_kode_material2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background: #80808038;">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Kode Material</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="update_kode_material">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Kode:</label>
                  <input type="hidden" name="id" id="id_kode_material">
                  <input type="text" class="form-control" name="kode" id="kode_material" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Qty:</label>
                  <input type="number" min="0" value="0" step="0.1" class="form-control" name="qty" id="qty2" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <button type="submit" style="width: 100%;" class="btn btn-primary" id="send_kode_material2">Save</button>
                <h5 style="color: #1572E8; display: none;" id="msgWaiting11">Waiting Process...</h5>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal kodematerial End -->

  <!-- Modal kodestandby -->
  <div class="modal fade" id="edit_kode_stanby2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background: #80808038;">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Kode Standby</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="update_kode_stanby">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Kode:</label>
                  <input type="hidden" name="id" id="id_kode_stanby">
                  <input type="text" class="form-control" name="kode" id="kode_stanby" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <button type="submit" style="width: 100%;" class="btn btn-primary" id="send_kode_stanby2">Save</button>
                <h5 style="color: #1572E8; display: none;" id="msgWaiting12">Waiting Process...</h5>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal kodestandby End -->

  <!-- Modal dt_ton -->
  <div class="modal fade" id="edit_kode_dt_ton2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background: #80808038;">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Data DT Ton</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="update_kode_dt_ton">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>DT Ton:</label>
                  <input type="hidden" name="id" id="id_kode_dt_ton">
                  <input type="text" class="form-control" name="kode" id="kode_dt_ton" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <button type="submit" style="width: 100%;" class="btn btn-primary" id="send_kode_dt_ton2">Save</button>
                <h5 style="color: #1572E8; display: none;" id="msgWaiting13">Waiting Process...</h5>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal kodedtton End -->
  <!-- Modal block -->
  <div class="modal fade" id="edit_kode_block2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background: #80808038;">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Data Block/PIT</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="update_kode_block">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Block/PIT:</label>
                  <input type="hidden" name="id" id="id_kode_block">
                  <input type="text" class="form-control" name="kode" id="kode_block" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <button type="submit" style="width: 100%;" class="btn btn-primary" id="send_kode_block2">Save</button>
                <h5 style="color: #1572E8; display: none;" id="msgWaiting14">Waiting Process...</h5>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal kodeblock End -->
   <!-- Modal unit type -->
   <div class="modal fade" id="edit_kode_unit_type2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background: #80808038;">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Data Unit Type</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="update_kode_unit_type">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Unit Type:</label>
                  <input type="hidden" name="id" id="id_kode_unit_type">
                  <input type="text" class="form-control" name="kode" id="kode_unit_type" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <button type="submit" style="width: 100%;" class="btn btn-primary" id="send_kode_unit_type2">Save</button>
                <h5 style="color: #1572E8; display: none;" id="msgWaiting15">Waiting Process...</h5>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal kodeunittype End -->
  <!-- Modal loading point -->
  <div class="modal fade" id="edit_kode_loading_point2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background: #80808038;">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Data Loading Point</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="update_kode_loading_point">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Loading Point:</label>
                  <input type="hidden" name="id" id="id_kode_loading_point">
                  <input type="text" class="form-control" name="kode" id="kode_loading_point" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <button type="submit" style="width: 100%;" class="btn btn-primary" id="send_kode_loading_point2">Save</button>
                <h5 style="color: #1572E8; display: none;" id="msgWaiting16">Waiting Process...</h5>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal kodeunittype End -->
</html>
<script>
  $("#update_unit").submit(function(e) {
      e.preventDefault(); // avoid to execute the actual submit of the form.
      var id = $('#id_unit').val();
      var no_unit = $('#no_unit2').val();
      var egi = $('#egi2').val();
      var unit_type = $('#unit_type2').val();
      var type = $('#type2').val();
      var brand = $('#brand2').val();
      var owner = $('#owner2').val();
      var msg = document.getElementById("msg8");

      console.log('no_unit '+no_unit);
      console.log('egi '+egi);
      console.log('unit_type '+unit_type);
      console.log('type '+type);
      console.log('brand '+brand);
      console.log('owner '+owner);
      
      $('#send_unit2').hide(200);
      $('#msgWaiting7').show(200);
      $.ajax({
          type: "POST",
            url: '<?php echo base_url().'Admin/edit_unit';?>',
            dataType: 'json',
            data:{
              no_unit: no_unit,
              egi: egi,
              unit_type: unit_type,
              type: type,
              brand: brand,
              owner:owner,
              id, id
            }, 
            success: function(response){
              console.log(response.response);
              if(response.response === "cn unit same"){
                $('#no_unit').val('');
                $('#send_unit2').show(200);
                $('#msgWaiting7').hide(200);
                msg.innerHTML = "CN Unit Be The Same In Database";
                $('#msg7').css('color', 'red');
                $('#msg7').show(200);
              }else if(response.response === 'success'){
                location.href ="<?php echo base_url().'Admin/add_data_unit';?>";
                // $('#closePage').show(200);
                // $('#sendForm').show(200);
                // $('#msgWaiting').hide(200);
              }
            }
      });
  });

  $("#update_operator").submit(function(e) {
      e.preventDefault(); // avoid to execute the actual submit of the form.
      var id = $('#id_operator').val();
      var nrp = $('#nrp2').val();
      var first_name = $('#first_name2').val();
      var last_name = $('#last_name2').val();
      var tempat_lahir = $('#tempat_lahir2').val();
      var tgl_lahir = $('#tgl_lahir2').val();
      var unit_field = $('#unit_field2').val();
      var msg = document.getElementById("msg10");

      console.log('nrp '+nrp);
      console.log('first_name '+first_name);
      console.log('last_name '+last_name);
      console.log('tempat_lahir '+tempat_lahir);
      console.log('tgl_lahir '+tgl_lahir);
      console.log('unit_field '+unit_field);
      
      $('#send_operator2').hide(200);
      $('#msgWaiting8').show(200);
      $.ajax({
          type: "POST",
            url: '<?php echo base_url().'Admin/edit_operator';?>',
            dataType: 'json',
            data:{
              nrp: nrp,
              first_name: first_name,
              last_name: last_name,
              tempat_lahir: tempat_lahir,
              tgl_lahir: tgl_lahir,
              unit_field:unit_field,
              id:id
            }, 
            success: function(response){
              console.log(response.response);
              if(response.response === "nrp same"){
                $('#nrp').val('');
                $('#send_operator').show(200);
                $('#msgWaiting8').hide(200);
                msg.innerHTML = "NRP Be The Same In Database";
                $('#msg9').css('color', 'red');
                $('#msg9').show(200);
              }else if(response.response === 'success'){
                location.href ="<?php echo base_url().'Admin/add_data_unit';?>";
                // $('#closePage').show(200);
                // $('#sendForm').show(200);
                // $('#msgWaiting').hide(200);
              }
            }
      });
  });

  $("#update_kode_proses").submit(function(e) {
      e.preventDefault(); // avoid to execute the actual submit of the form.
      var id = $('#id_kode_proses').val();
      var kode = $('#kode_proses').val();
      
      console.log('kode '+kode);
      
      $('#send_kode_proses2').hide(200);
      $('#msgWaiting9').show(200);
      $.ajax({
          type: "POST",
            url: '<?php echo base_url().'Admin/edit_kode_proses';?>',
            dataType: 'json',
            data:{
              kode: kode,
              id: id,
            }, 
            success: function(response){
              console.log(response.response);
              if(response.response === 'success'){
                location.href ="<?php echo base_url().'Admin/add_data_unit';?>";
                // $('#closePage').show(200);
                // $('#sendForm').show(200);
                // $('#msgWaiting').hide(200);
              }
            }
      });
  });

  $("#update_kode_aktivitas").submit(function(e) {
      e.preventDefault(); // avoid to execute the actual submit of the form.
      var id = $('#id_kode_aktivitas').val();
      var kode = $('#kode_aktivitas').val();
      
      console.log('kode '+kode);
      
      $('#send_kode_aktivitas2').hide(200);
      $('#msgWaiting10').show(200);
      $.ajax({
          type: "POST",
            url: '<?php echo base_url().'Admin/edit_kode_aktivitas';?>',
            dataType: 'json',
            data:{
              kode: kode,
              id: id,
            }, 
            success: function(response){
              console.log(response.response);
              if(response.response === 'success'){
                location.href ="<?php echo base_url().'Admin/add_data_unit';?>";
                // $('#closePage').show(200);
                // $('#sendForm').show(200);
                // $('#msgWaiting').hide(200);
              }
            }
      });
  });

  $("#update_kode_material").submit(function(e) {
      e.preventDefault(); // avoid to execute the actual submit of the form.
      var id = $('#id_kode_material').val();
      var kode = $('#kode_material').val();
      var qty = $('#qty2').val();
      
      console.log('kode '+kode);
      
      $('#send_kode_material2').hide(200);
      $('#msgWaiting11').show(200);
      $.ajax({
          type: "POST",
            url: '<?php echo base_url().'Admin/edit_kode_material';?>',
            dataType: 'json',
            data:{
              kode: kode,
              qty:qty,
              id: id,
            }, 
            success: function(response){
              console.log(response.response);
              if(response.response === 'success'){
                location.href ="<?php echo base_url().'Admin/add_data_unit';?>";
                // $('#closePage').show(200);
                // $('#sendForm').show(200);
                // $('#msgWaiting').hide(200);
              }
            }
      });
  });

  $("#update_kode_stanby").submit(function(e) {
      e.preventDefault(); // avoid to execute the actual submit of the form.
      var id = $('#id_kode_stanby').val();
      var kode = $('#kode_stanby').val();
      
      console.log('kode '+kode);
      
      $('#send_kode_stanby2').hide(200);
      $('#msgWaiting12').show(200);
      $.ajax({
          type: "POST",
            url: '<?php echo base_url().'Admin/edit_kode_stanby';?>',
            dataType: 'json',
            data:{
              kode: kode,
              id: id,
            }, 
            success: function(response){
              console.log(response.response);
              if(response.response === 'success'){
                location.href ="<?php echo base_url().'Admin/add_data_unit';?>";
                // $('#closePage').show(200);
                // $('#sendForm').show(200);
                // $('#msgWaiting').hide(200);
              }
            }
      });
  });

  $("#update_kode_dt_ton").submit(function(e) {
      e.preventDefault(); // avoid to execute the actual submit of the form.
      var id = $('#id_kode_dt_ton').val();
      var kode = $('#kode_dt_ton').val();
      
      console.log('kode '+kode);
      
      $('#send_kode_dt_ton2').hide(200);
      $('#msgWaiting13').show(200);
      $.ajax({
          type: "POST",
            url: '<?php echo base_url().'Admin/edit_kode_dt_ton';?>',
            dataType: 'json',
            data:{
              kode: kode,
              id: id,
            }, 
            success: function(response){
              console.log(response.response);
              if(response.response === 'success'){
                location.href ="<?php echo base_url().'Admin/add_data_unit';?>";
                // $('#closePage').show(200);
                // $('#sendForm').show(200);
                // $('#msgWaiting').hide(200);
              }
            }
      });
  });
  $("#update_kode_block").submit(function(e) {
      e.preventDefault(); // avoid to execute the actual submit of the form.
      var id = $('#id_kode_block').val();
      var kode = $('#kode_block').val();
      
      console.log('kode '+kode);
      
      $('#send_kode_block2').hide(200);
      $('#msgWaiting14').show(200);
      $.ajax({
          type: "POST",
            url: '<?php echo base_url().'Admin/edit_kode_block';?>',
            dataType: 'json',
            data:{
              kode: kode,
              id: id,
            }, 
            success: function(response){
              console.log(response.response);
              if(response.response === 'success'){
                location.href ="<?php echo base_url().'Admin/add_data_unit';?>";
                // $('#closePage').show(200);
                // $('#sendForm').show(200);
                // $('#msgWaiting').hide(200);
              }
            }
      });
  });
  $("#update_kode_unit_type").submit(function(e) {
      e.preventDefault(); // avoid to execute the actual submit of the form.
      var id = $('#id_kode_unit_type').val();
      var kode = $('#kode_unit_type').val();
      
      console.log('kode '+kode);
      
      $('#send_kode_unit_type2').hide(200);
      $('#msgWaiting15').show(200);
      $.ajax({
          type: "POST",
            url: '<?php echo base_url().'Admin/edit_kode_unit_type';?>',
            dataType: 'json',
            data:{
              kode: kode,
              id: id,
            }, 
            success: function(response){
              console.log(response.response);
              if(response.response === 'success'){
                location.href ="<?php echo base_url().'Admin/add_data_unit';?>";
                // $('#closePage').show(200);
                // $('#sendForm').show(200);
                // $('#msgWaiting').hide(200);
              }
            }
      });
  });
  $("#update_kode_loading_point").submit(function(e) {
      e.preventDefault(); // avoid to execute the actual submit of the form.
      var id = $('#id_kode_loading_point').val();
      var kode = $('#kode_loading_point').val();
      
      console.log('kode '+kode);
      
      $('#send_kode_loading_point2').hide(200);
      $('#msgWaiting16').show(200);
      $.ajax({
          type: "POST",
            url: '<?php echo base_url().'Admin/edit_kode_loading_point';?>',
            dataType: 'json',
            data:{
              kode: kode,
              id: id,
            }, 
            success: function(response){
              console.log(response.response);
              if(response.response === 'success'){
                location.href ="<?php echo base_url().'Admin/add_data_unit';?>";
                // $('#closePage').show(200);
                // $('#sendForm').show(200);
                // $('#msgWaiting').hide(200);
              }
            }
      });
  });

  $('#edit_unit2').on('hidden.bs.modal', function(e) {
    $(this).find('form').trigger('reset');
    $('#msg7').hide(200);
  });

  $('#edit_operator2').on('hidden.bs.modal', function(e) {
    $(this).find('form').trigger('reset');
    $('#msg9').hide();
  });

  $('#edit_kode_proses2').on('hidden.bs.modal', function(e) {
    $(this).find('form').trigger('reset');
  });

  $('#edit_kode_aktivitas2').on('hidden.bs.modal', function(e) {
    $(this).find('form').trigger('reset');
  });

  $('#edit_kode_material2').on('hidden.bs.modal', function(e) {
    $(this).find('form').trigger('reset');
  });

  $('#edit_kode_stanby2').on('hidden.bs.modal', function(e) {
    $(this).find('form').trigger('reset');
  });
  $('#edit_kode_dt_ton2').on('hidden.bs.modal', function(e) {
    $(this).find('form').trigger('reset');
  });
  $('#edit_kode_block2').on('hidden.bs.modal', function(e) {
    $(this).find('form').trigger('reset');
  });
  $('#edit_kode_unit_type2').on('hidden.bs.modal', function(e) {
    $(this).find('form').trigger('reset');
  });
  $('#edit_kode_loading_point2').on('hidden.bs.modal', function(e) {
    $(this).find('form').trigger('reset');
  });
</script>