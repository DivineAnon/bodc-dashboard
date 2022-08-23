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
        <a href="<?php echo base_url().'Admin/plan_target';?>">
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
          <h4 style="margin-left: 65px;"><b>SUPER <A></A>ADMIN</b></h4>
        </div>
      </div>

      <!-- DATA TABEL PLAN -->
      <div class="page-content">
        <!-- Panel Basic -->
        <div class="panel" style="margin-left: 30px;">
          <header class="panel-heading text-center">
            <div class="panel-actions"></div>
            <h1 class="panel-title" style="background:#0267ca; color: #fff; font-size: large; text-align: left;">Data
              Plan</h1>
            <div class="panel-actions">
              <button type="button" class="btn" style="background:#0267ca; color: #fff; width: 5rem;"
                data-toggle="modal" data-target="#dataplan">+</button>
            </div>
          </header>
          <div class="panel-body">
            <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
              <thead>
                <tr>
                  <th>Plan</th>
                  <th>Material</th>
                  <th>Type Unit</th>
                  <th>Month / Year</th>
                  <th>Target</th>
                  <th style="width: 350px">Notes</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  if(!empty($data_plan['id'])){
                    for ($i=0; $i < count($data_plan['id']); $i++) { 
                      $id = $data_plan['id'][$i];
                      $plan = $data_plan['plan'][$i];
                      $material = $data_plan['material'][$i];
                      $type_unit = $data_plan['type_unit'][$i];
                      $month = $data_plan['month'][$i];
                      $year = $data_plan['year'][$i];
                      $target = $data_plan['target'][$i];
                      $note = $data_plan['note'][$i];
                      if($material == ''){
                        $material = '-';
                      }
                      if($type_unit == ''){
                        $type_unit = '-';
                      }
                      if($month == '1'){
                        $month = 'January';
                      }
                      elseif($month == '2'){
                        $month = 'February';
                      }
                      elseif($month == '3'){
                        $month = 'March';
                      }
                      elseif($month == '4'){
                        $month = 'April';
                      }
                      elseif($month == '5'){
                        $month = 'May';
                      }
                      elseif($month == '6'){
                        $month = 'June';
                      }
                      elseif($month == '7'){
                        $month = 'July';
                      }
                      elseif($month == '8'){
                        $month = 'August';
                      }
                      elseif($month == '9'){
                        $month = 'September';
                      }
                      elseif($month == '10'){
                        $month = 'October';
                      }
                      elseif($month == '11'){
                        $month = 'November';
                      }
                      elseif($month == '12'){
                        $month = 'December';
                      }
                      if($plan == '1'){
                        $plan = 'Produksi';
                      }
                      elseif($plan == '2'){
                        $plan = 'PA';
                      }
                      elseif($plan == '3'){
                        $plan = 'UA';
                      }
                      elseif ($plan == '4'){
                        $plan = 'Productivity';
                      }
                      elseif ($plan == '5'){
                        $plan = 'Fuel Ratio';
                      }
                    
                ?>
                <tr>
                  <td><?php echo $plan;?></td>
                  <td><?php echo $material;?></td>
                  <td><?php echo $type_unit;?></td>
                  <td><?php echo $month;?> / <?php echo $year;?></td>
                  <td><?php echo $target;?></td>
                  <td><?php echo $note;?></td>
                  <td>
                    <a href="#" class="button mr-10" onclick="plan_detail('<?php echo $id;?>')" style="font-size:large; text-decoration:none !important;">
                      <i class="icon md-settings"></i>
                    </a>
                    <a href="<?php echo base_url().'Admin2/delete_plan/'.$id;?>" class="button delete-btn" style="font-size:large; text-decoration:none !important;">
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
      <!-- DATA TABEL PLAN ENDS -->
    </div>
  </div>

  <!-- Modal Add Data Plan -->
  <div class="modal fade" id="dataplan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background: #80808038;">
          <h5 class="modal-title" id="exampleModalLongTitle">Add Plan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div style="text-align: center; font-size: 20px; color: red; display: none;" id="msg1"><p id="msg2"></p></div>
          <form id="create_plan">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Plan:</label>
                  <select name="plan" id="plan" class="form-control" required autocomplete="off">
                    <option value="" disabled selected>Select plan</option>
                    <option value="1">Produksi</option>
                    <option value="2">PA</option>
                    <option value="3">UA</option>
                    <option value="4">Productivity</option>
                    <option value="5">Fuel Ratio</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row" id="input_mat" style="display: none;">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Material:</label>
                  <select name="material" id="material" class="form-control" autocomplete="off">
                    <option value="" disabled selected>Select material</option>
                  <?php
                    if(!empty($material2['id'])){
                      for ($i=0; $i < count($material2['id']); $i++) { 
                        $id = $material2['id'][$i];
                        $kode = $material2['kode'][$i];
                  ?>

                  
                    <option value="<?php echo $id;?>"><?php echo $kode;?></option>
                  
                  <?php
                      }
                    }else{
                      ?>
                      <option value="">ada</option>
                      <?php
                    }
                  ?>
                  </select>
                </div>
              </div>
            </div>
            <div class="row" id="input_unit_type" style="display: none;">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Unit Type:</label>
                  <select name="unit_type" id="unit_type" class="form-control" autocomplete="off">
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
            <?php
                $months = [
                    "January",
                    "February",
                    "March",
                    "April",
                    "May",
                    "June",
                    "July",
                    "August",
                    "September",
                    "October",
                    "November",
                    "December"
                ];
            ?>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label>Month:</label>
                  <select name="month" id="month" class="form-control" required>
                      <?php
                          $no = 1;
                          foreach ($months as $month) {
                              echo '<option value="'. $no .'">'. $month .'</option>';
                              $no++;
                          }
                      ?>
                  </select>
                </div>
              </div>              
              <div class="col-lg-6">
                <div class="form-group">
                  <label>Year:</label>
                  <select name="year" id="year" class="form-control" required>
                    <?php
                        for ($i = date('Y'); $i <= date('Y')+10; $i++) {
                            echo '<option value="'. $i .'">'. $i .'</option>';
                        }
                    ?>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Target:</label>
                  <input type="number" class="form-control" name="target" id="target" min="1" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Notes:</label>
                  <textarea class="form-control" name="note" id="note" cols="40" rows="6"></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <button type="submit" style="width: 100%;" class="btn btn-primary" id="send_plan">Save</button>
                <h5 style="color: #1572E8; display: none;" id="msgWaiting">Waiting Process...</h5>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Add Data Plan End -->
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

  $('#dataplan').on('hidden.bs.modal', function(e) {
    $(this).find('form').trigger('reset');
    $('#msg1').hide();
  });

  $('#plan').on('change', function() {
    if(this.value == '1'){
      $("#input_mat").show();
      $("#input_unit_type").hide();
      $('#material').prop('required',true);
      $('#unit_type').removeAttr('required');
    }else{
      $("#input_mat").hide();
      $("#input_unit_type").show();
      $('#unit_type').prop('required',true);
      $('#material').removeAttr('required');
    }
  });

  $("#create_plan").submit(function(e) {
      e.preventDefault(); // avoid to execute the actual submit of the form.
      var plan = $('#plan').val();
      var material = $('#material').val();
      var unit_type = $('#unit_type').val();
      var month = $('#month').val();
      var year = $('#year').val();
      var target = $('#target').val();
      var note = $('#note').val();
      var msg = document.getElementById("msg2");

      console.log('plan '+plan);
      console.log('material '+material);
      console.log('unit_type '+unit_type);
      console.log('month '+month);
      console.log('year '+year);
      console.log('target '+target);
      console.log('note '+note);
      
      $('#send_plan').hide(200);
      $('#msgWaiting').show(200);
      $.ajax({
          type: "POST",
            url: '<?php echo base_url().'Admin2/create_plan';?>',
            dataType: 'json',
            data:{
              plan: plan,
              material: material,
              unit_type: unit_type,
              month: month,
              year: year,
              target:target,
              note:note,
            }, 
            success: function(response){
              console.log(response.response);
              if(response.response === "plan same"){
                // $('#plan').val('');
                $('#send_plan').show(200);
                $('#msgWaiting').hide(200);
                msg.innerHTML = "Plan Target Be The Same In Database";
                $('#msg1').css('color', 'red');
                $('#msg1').show(200);
              }else if(response.response === 'success'){
                location.href ="<?php echo base_url().'Admin2/plan_target';?>";
                // $('#closePage').show(200);
                // $('#sendForm').show(200);
                // $('#msgWaiting').hide(200);
              }
            }
      });
  });

  var id_type_unit;
  var id_material;

  function get_type_unit(){
    $.ajax({
      type: "GET",
      url: '<?php echo base_url().'Admin2/get_type_unit_detail';?>',
      dataType: 'json',
      success: function(response){
        $.each(response,function(index,data){
          console.log(data);
          if(id_type_unit == data['id']){
            $('#unit_type2').append('<option class="role" value="'+data['id']+'" selected>'+data['nama']+'</option>');
            $("#input_unit_type2").show();
          }else{
            $('#unit_type2').append('<option class="role" value="'+data['id']+'">'+data['nama']+'</option>'); 
          }
        });   
      },
    });
  }

  function get_material(){
    $.ajax({
      type: "GET",
      url: '<?php echo base_url().'Admin2/get_material_detail';?>',
      dataType: 'json',
      success: function(response){
        $.each(response,function(index,data){
          if(id_material == data['id']){
            $('#material2').append('<option class="role" value="'+data['id']+'" selected>'+data['kode']+'</option>');
            $("#input_mat2").show();
          }else{
            $('#material2').append('<option class="role" value="'+data['id']+'">'+data['kode']+'</option> '); 
          }
        });   
      },
    });
  }

  function plan_detail(id){
    $.ajax({
      type: "GET",
      url: '<?php echo base_url().'Admin2/get_plan_detail/';?>'+id,
      dataType: 'json',
      success: function(response){
          console.log(response)
          var id = response[0].id;
          id_type_unit = response[0].id_type_unit;
          id_material = response[0].id_material;
          var plan = response[0].plan;
          // var mate = response[0].mate;
          var month = response[0].month;
          var year = response[0].year;
          var target = response[0].target;
          var note = response[0].note;
          $('#id_plan').val(id);
          $('#plan2').val(plan);
          // $('#mate2').val(mate);
          $('#month2').val(month);
          $('#year2').val(year);
          $('#target2').val(target);
          $('#note2').val(note);
          get_type_unit();
          get_material();
          console.log(id_type_unit);
          $('#edit_plan2').modal("show");
      },
    });
  }
</script>

  <!-- Modal Edit Data Plan -->
  <div class="modal fade" id="edit_plan2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background: #80808038;">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Plan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="update_plan">
            <div style="text-align: center; font-size: 20px; color: red; display: none;" id="msg7"><p id="msg8"></p></div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Plan:</label>
                  <input type="hidden" name="id_plan" id="id_plan">
                  <select name="plan" id="plan2" class="form-control" required autocomplete="off">
                    <option value="1">Produksi</option>
                    <option value="2">PA</option>
                    <option value="3">UA</option>
                    <option value="4">Productivity</option>
                    <option value="5">Fuel Ratio</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row" id="input_mat2" style="display: none;">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Material:</label>
                  <select name="material" id="material2" class="form-control" required autocomplete="off">
                    
                  </select>
                </div>
              </div>
            </div>
            <div class="row" id="input_unit_type2" style="display: none;">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Unit Type:</label>
                  <select name="unit_type" id="unit_type2" class="form-control" required autocomplete="off">
                    
                  </select>
                </div>
              </div>
            </div>
            <?php
    		        $month = [
    		            "January",
    		            "February",
    		            "March",
    		            "April",
    		            "May",
    		            "June",
    		            "July",
    		            "August",
    		            "September",
    		            "October",
    		            "November",
    		            "December"
    		        ];
    		    ?>
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label>Month:</label>
                  <select name="month" id="month2" class="form-control" required>
                      <?php
                        $no = 1;
	                      foreach ($months as $month) {
	                          if ($month == $months) {
	                              $selected = 'selected';
	                          } else {
	                              $selected = '';
	                          }
                            echo '<option value="'. $no .'" '. $selected .'>'. $month .'</option>';
                            $no++;
	                      }
	                  ?>
                  </select>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                <label>Year:</label>
                <select name="year" id="year2" class="form-control" required>
                    <?php
                        for ($j = date('Y'); $j <= date('Y')+10; $j++) {
                          if ($year == $j) {
                            $selected = 'selected';
                          } else {
                            $selected = '';
                          }
                            echo '<option value="'. $j .'" '. $selected .'>'. $j .'</option>';
                        }
                    ?>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Target:</label>
                  <input type="number" class="form-control" name="target" id="target2" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Notes:</label>
                  <!-- <input type="text" class="form-control" name="note" id="note2" autocomplete="off" required> -->
                  <textarea class="form-control" name="note" id="note2" cols="40" rows="6"></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <button type="submit" style="width: 100%;" class="btn btn-primary" id="send_plan2">Save</button>
                <h5 style="color: #1572E8; display: none;" id="msgWaiting7">Waiting Process...</h5>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Edit Data Plan End -->


  <script>
  $("#update_plan").submit(function(e) {
      e.preventDefault(); // avoid to execute the actual submit of the form.
      var id = $('#id_plan').val();
      var plan = $('#plan2').val();
      var material = $('#material2').val();
      var unit_type = $('#unit_type2').val();
      var month = $('#month2').val();
      var year = $('#year2').val();
      var target = $('#target2').val();
      var note = $('#note2').val();
      var msg = document.getElementById("msg8");

      console.log('plan '+plan);
      console.log('material '+material);
      console.log('unit_type '+unit_type);
      console.log('month '+month);
      console.log('year '+year);
      console.log('target '+target);
      console.log('note '+note);
      
      $('#send_plan2').hide(200);
      $('#msgWaiting7').show(200);
      $.ajax({
          type: "POST",
            url: '<?php echo base_url().'Admin2/edit_plan';?>',
            dataType: 'json',
            data:{
              plan: plan,
              material: material,
              unit_type: unit_type,
              month: month,
              year: year,
              target:target,
              note:note,
              id, id
            }, 
            success: function(response){
              console.log(response.response);
              if(response.response === "no plan same"){
                // $('#no_plan').val('');
                $('#send_plan2').show(200);
                $('#msgWaiting7').hide(200);
                msg.innerHTML = "No plan Be The Same In Database";
                $('#msg7').css('color', 'red');
                $('#msg7').show(200);
              }else if(response.response === 'success'){
                location.href ="<?php echo base_url().'Admin2/plan_target';?>";
                // $('#closePage').show(200);
                // $('#sendForm').show(200);
                // $('#msgWaiting').hide(200);
              }
            }
      });
  });

  $('#edit_plan2').on('hidden.bs.modal', function(e) {
    $(this).find('form').trigger('reset');
    $('#msg7').hide(200);
  });

  $('#plan2').on('change', function() {
    if(this.value == '1'){
      $("#input_mat2").show();
      $('#material2').prop('required',true);
      $('#unit_type2').removeAttr('required');
      $("#input_unit_type2").hide();
    }else{
      $("#input_mat2").hide();
      $("#input_unit_type2").show();
      $('#unit_type2').prop('required',true);
      $('#material2').removeAttr('required');
    }
  });
</script>