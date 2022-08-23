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

  <link rel="apple-touch-icon" href="<?= base_url(); ?>assets/mmenu/assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="<?= base_url(); ?>assets/mmenu/assets/images/favicon.ico">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/mmenu/assets/css/site.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/select2/select2.css">
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
            <a href="<?php echo base_url().'radio';?>" class="nav-link waves-effect waves-light waves-round">
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
      <div class="row" data-plugin="matchHeight" data-by-row="true">
        <div class="col-xl-12 col-md-12 text-left mb-15">
          <h2 style="color: #000000; margin-left: 65px;"><b>BREAKDOWN INFORMATION (RADIO)</b></h2>
        </div>
      </div>
      <div class="container">
        <form id="form" method="POST" class="form-inline mb-20">
          <p style="color: #000000; margin-left: 50px; margin-top: 10px !important; margin-right: 5px;">nomor unit :</p>
          <!-- <input type="text" class="form-control" id="no_unit" name="type_numberic" placeholder="nomor unit" style="margin-right: 5px;" required> -->
          <select id="no_unit" class="form-control select2" style="margin-right: 15px !important; width: 14%;">
            <option disabled selected>-- Nomor Unit --</option>
            <?php
              foreach ($units as $unit) {
                echo '<option value="'. $unit['id'] .'">'. $unit['no_unit'] .'</option>';
              }
            ?>
          </select>
          <button type="submit" class="btn btn-raised btn-primary btn-block waves-effect waves-classic" style="width: 10%;margin-left: 5px;">
            Add
          </button>
        </form>
      </div>
      <div class="page-content">
        <!-- Panel Basic -->
        <div class="panel" style="margin-left: 30px;">
          <header class="panel-heading text-center">
            <div class="panel-actions"></div>
            <h1 class="panel-title" style="background:#0267ca; color: #fff; font-size: large; text-align: left;">Last Update Breakdown Information</h1>
          </header>
          <div class="panel-body mt-10">
            <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
              <thead>
                <tr>
                  <th>Date</th>
                  <th>No Unit</th>
                  <th>Type Unit</th>
                  <th>Lokasi</th>
                  <th>Type</th>
                  <th>Start BD</th>
                  <th>RFU Time</th>
                  <th>Lokasi RFU</th>
                  <th>Standby Status</th>
                  <th>Remark</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  foreach ($breakdowns as $b) {
                ?>
                <tr>
                  <td><?= date('d-m-Y', strtotime($b['tgl_aktifitas'])); ?></td>
                  <td><?= $b['Nomor_Unit']; ?></td>
                  <td><?= $b['nama']; ?></td>
                  <td><?= $b['lokasi']; ?></td>
                  <td><?= $b['type_unit']; ?></td>
                  <td><?= date('H:i', strtotime($b['start_bd'])); ?></td>
                  <td><?= date('H:i', strtotime($b['rfu'])); ?></td>
                  <td><?= $b['lokasi_rfu']; ?></td>
                  <td><?= $b['standby_status']; ?></td>
                  <td><?= $b['remark']; ?></td>
                  <td>
                    <a href="<?= base_url('radio/breakdown/edit/'.$b['id']); ?>" class="button mr-10" style="font-size:large; text-decoration:none !important;">
                      <i class="icon md-edit"></i>
                    </a>
                    <a href="<?= base_url('radio/breakdown/delete/'.$b['id']); ?>" class="button delete-btn" style="font-size:large; text-decoration:none !important;">
                      <i class="icon md-delete"></i>
                    </a>
                  </td>
                </tr>
                <?php
                  }
                ?>
              </tbody>
            </table>
          </div>
        </div>
        <!-- End Panel Basic -->
      </div>
    </div>
  </div>
  <!-- End Page -->
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
  <script src="<?= base_url(); ?>assets/global/js/Plugin/select2.js"></script>
  <script src="<?= base_url(); ?>assets/global/vendor/select2/select2.full.min.js"></script>
  <script src="<?= base_url(); ?>assets/mmenu/assets/examples/js/tables/datatable.js"></script>
  <script src="<?= base_url(); ?>assets/mmenu/assets/examples/js/uikit/icon.js"></script>
</body>
  
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


      $('#form').on('submit', function(e) {
        e.preventDefault();
        var no_unit = $('#no_unit').val();
        window.location.href = '<?= base_url("radio/breakdown/") ?>' + no_unit;
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

</html>