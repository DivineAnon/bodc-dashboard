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
          <h4 style="margin-left: 65px;"><b>SUPER ADMIN</b></h4>
        </div>
      </div>

      <!-- DATA UNIT -->
      <div class="page-content">
        <!-- Panel Basic -->
        <div class="panel" style="margin-left: 30px;">
          <header class="panel-heading text-center">
            <div class="panel-actions"></div>
            <h1 class="panel-title" style="background:#0267ca; color: #fff; font-size: large; text-align: left;">Data Plan</h1>
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
                  <th>Notes</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  if(!empty($plan['id'])){
                    for ($i=0; $i < count($plan['id']); $i++) { 
                      $id = $plan['id'][$i];
                      $no_unit = $plan['no_unit'][$i];
                      $egi = $plan['egi'][$i];
                      $type_unit = $plan['type_unit'][$i];
                      $type = $plan['type'][$i];
                      $brand = $plan['brand'][$i];
                      $owner = $plan['owner'][$i];
                    
                ?>
                <tr>
                  <!-- <td><?php echo $no_unit;?></td>
                  <td><?php echo $egi;?></td>
                  <td><?php echo $type_unit;?></td> -->
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
    </div>
  </div>

  <!-- Modal Add Data Unit -->
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
                    <option>Produksi</option>
                    <option>PA</option>
                    <option>UA</option>
                    <option>Productivity</option>
                    <option>Fuel Ratio</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Material:</label>
                  <select name="id_material" id="id_material" class="form-control" required autocomplete="off">
                    <option value="" disabled selected>Select material</option>
	                  <?php
	                    if(!empty($material['id'])){
	                      for ($i=0; $i < count($material['id']); $i++) { 
	                        $id = $material['id'][$i];
	                        $kode = $material['kode'][$i];
	                  ?>

                    <option value="<?php echo $id;?>"><?php echo $kode;?></option>
                  
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
                  <label>Unit Type:</label>
                  <select name="id_type_unit" id="id_type_unit" class="form-control" required autocomplete="off">
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
    		            "Jan",
    		            "Feb",
    		            "Mar",
    		            "Apr",
    		            "May",
    		            "Jun",
    		            "Jul",
    		            "Aug",
    		            "Sep",
    		            "Oct",
    		            "Nov",
    		            "Dec"
    		        ];
    		    ?>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Month:</label>
                  <select name="month" id="month" class="form-control">
	                    <?php
	                        foreach ($months as $month) {
	                            echo '<option value="'. $month .'">'. $month .'</option>';
	                        }
	                    ?>
	                </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Year:</label>
                  <select name="year" id="year" class="form-control">
                    <?php
                        for ($i = 2020; $i >= 1950; $i--) {
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
                  <input type="number" class="form-control" name="target" id="target" autocomplete="off" required>
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
                <button type="submit" style="width: 100%;" class="btn btn-primary" id="send_unit">Save</button>
                <h5 style="color: #1572E8; display: none;" id="msgWaiting">Waiting Process...</h5>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Add Data Unit End -->
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
    $('#msg2').hide();
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
  $('#dataplan').on('hidden.bs.modal', function(e) {
    $(this).find('form').trigger('reset');
    $('#msg1').hide();
  });
  $('#materialplan').on('hidden.bs.modal', function(e) {
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
      
      $('#send_kode_material').hide(200);
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

  $("#create_plan").submit(function(e) {
      e.preventDefault(); // avoid to execute the actual submit of the form.
      var plan = $('#plan').val();
      var id_material = $('#id_material').val();
      var id_type_unit = $('#id_type_unit').val();
      var month = $('#month').val();
      var year = $('#year').val();
      var target = $('#target').val();
      var note = $('#note').val();
      var msg = document.getElementById("msg2");

      console.log('plan '+plan);
      console.log('id_material '+id_material);
      console.log('id_type_unit '+id_type_unit);
      console.log('month '+month);
      console.log('year '+year);
      console.log('target '+target);
      console.log('note '+note);
      
      $('#send_unit').hide(200);
      $('#msgWaiting').show(200);
      $.ajax({
          type: "POST",
            url: '<?php echo base_url().'Admin/create_plan';?>',
            dataType: 'json',
            data:{
              plan: plan,
              id_material: id_material,
              id_type_unit: id_type_unit,
              month: month,
              year: year,
              target: target,
              note: note,
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
                location.href ="<?php echo base_url().'Admin/add_data_plan';?>";
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
</script>

  <!-- Modal Edit Data Unit -->
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
                    
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Material:</label>
                  <select name="material" id="material2" class="form-control" required autocomplete="off">
                    
                  </select>
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
            <?php
    		        $month = [
    		            "Jan",
    		            "Feb",
    		            "Mar",
    		            "Apr",
    		            "May",
    		            "Jun",
    		            "Jul",
    		            "Aug",
    		            "Sep",
    		            "Oct",
    		            "Nov",
    		            "Dec"
    		        ];
    		    ?>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Month:</label>
                  <select name="month" id="month" class="form-control">
	                  <?php
	                      foreach ($month as $months) {
	                          if ($month == $months) {
	                              $selected = 'selected';
	                          } else {
	                              $selected = '';
	                          }
	                          echo '<option value="'. $months .'" '. $selected .'>'. $months .'</option>';
	                      }
	                  ?>
	                </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Year:</label>
                  <select name="year" id="year" class="form-control">
                    <?php
                        for ($j = 2020; $j >= 1950; $j--) {
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
                  <input type="text" class="form-control" name="target" id="target2" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Notes:</label>
              	  <textarea name="notes" id="notes2" class="form-control" cols="40" rows="6" autocomplete="off" required></textarea>
                </div>
              </div>
            </div>

            <!-- <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>No. Unit:</label>
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
            </div> -->
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
  <!-- Modal Edit Data Unit End -->

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
</script>