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
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.css">
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
      <div class="container">
        <div class="card text-center" style="margin-left: 65px; width: 10rem; border: 1px solid black;">
          <div class="card-body">
            <h5 class="card-title">Add CCR User</h5>
            <button type="button" class="btn" style="border: 1px solid black; width: 5rem;" data-toggle="modal"
              data-target="#exampleModalLong">+</button>
          </div>
        </div>
      </div>


      <div class="page-content">
        <!-- Panel Basic -->
        <div class="panel" style="margin-left: 30px;">
          <header class="panel-heading text-center">
            <div class="panel-actions"></div>
            <h1 class="panel-title" style="background:#0267ca; color: #fff; font-size: large; text-align: left;">CCR
              User</h1>
          </header>
          <div class="panel-body">
            <table class="table table-hover dataTable table-striped w-full" data-plugin="dataTable">
              <thead>
                <tr>
                  <th>NRP</th>
                  <th>Username</th>
                  <th>Name</th>
                  <th>Role</th>
                  <th>Create Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                  if(!empty($user['id'])){
                    for ($i=0; $i < count($user['id']); $i++) { 
                      $id = $user['id'][$i];
                      $nrp = $user['nrp'][$i];
                      $username = $user['username'][$i];
                      $name = $user['name'][$i];
                      $name_role = $user['name_role'][$i];
                      $create_date = $user['created_date'][$i]
                    
                ?>
                <tr>
                  <td><?php echo $nrp;?></td>
                  <td><?php echo $username;?></td>
                  <td><?php echo $name;?></td>
                  <td><?php echo $name_role;?></td>
                  <td><?php echo $create_date;?></td>
                  <td>
                    <a href="#" class="button mr-10" onclick="user_detail('<?php echo $id;?>')" style="font-size:large; text-decoration:none !important;">
                      <i class="icon md-settings"></i>
                    </a>
                    <a href="<?php echo base_url().'Admin/delete_user/'.$id;?>" class="button delete-btn" style="font-size:large; text-decoration:none !important;">
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
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background: #80808038;">
          <h5 class="modal-title" id="exampleModalLongTitle">Add New CCR User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="create_user">
            <div style="text-align: center; font-size: 20px; color: red; display: none;" id="msg1"><p id="msg2"></p></div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>NRP</label>
                  <input type="text" class="form-control" name="nrp" id="nrp" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" id="name" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" name="username" id="username" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Role</label>
                  <select name="role" id="role" class="form-control" required>
                    <option value="" disabled selected>Select role</option>
                    <?php
                      if(!empty($role['id'])){
                        for ($i=0; $i < count($role['id']); $i++) { 
                          $id2 = $role['id'][$i];
                          $name2 = $role['name'][$i];
                          ?>
                            <option value="<?php echo $id2;?>"><?php echo $name2;?></option>
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
                  <label>Shift</label>
                  <select name="shift" id="shift" class="form-control" required>
                    <option value="" disabled selected>Select shift</option>
                    <option value="1">Shift 1</option>
                    <option value="2">Shift 2</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password" id="password" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <button type="submit" style="width: 100%;" class="btn btn-primary" id="send_user">Save</button>
                <h5 style="color: #1572E8; display: none;" id="msgWaiting">Waiting Process...</h5>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
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
              icon: 'danger',
              title: 'Failed',
              showConfirmButton: false,
              timer: 2000
            })
          }
      }
  });
  $("#create_user").submit(function(e) {
      e.preventDefault(); // avoid to execute the actual submit of the form.
      var nrp = $('#nrp').val();
      var name = $('#name').val();
      var username = $('#username').val();
      var role = $('#role').val();
      var password = $('#password').val();
      var shift = $('#shift').val();
      var msg = document.getElementById("msg2");

      console.log('nrp '+nrp);
      console.log('name '+name);
      console.log('username '+username);
      console.log('role '+role);
      console.log('password '+password);
      
      $('#send_user').hide(200);
      $('#msgWaiting2').show(200);
      $.ajax({
          type: "POST",
            url: '<?php echo base_url().'Admin/create_user';?>',
            dataType: 'json',
            data:{
              nrp: nrp,
              name: name,
              username: username,
              role: role,
              password: password,
              shift: shift
            }, 
            success: function(response){
              console.log(response.response);
              if(response.response === "nrp same"){
                $('#nrp').val('');
                $('#send_user').show(200);
                $('#msgWaiting2').hide(200);
                msg.innerHTML = "NRP Be The Same In Database";
                $('#msg1').css('color', 'red');
                $('#msg1').show(200);
              }else if(response.response === "username same"){
                $('#nrp').val('');
                $('#send_user').show(200);
                $('#msgWaiting2').hide(200);
                msg.innerHTML = "Username Be The Same In Database";
                $('#msg1').css('color', 'red');
                $('#msg1').show(200);
              }else if(response.response === 'success'){
                location.href ="<?php echo base_url().'Admin/user_management';?>";
                // $('#closePage').show(200);
                // $('#sendForm').show(200);
                // $('#msgWaiting').hide(200);
              }
            }
      });
  });

  var id_role2;
  var shift2;
  function get_role(){
    $.ajax({
      type: "GET",
      url: '<?php echo base_url().'Admin/get_role_detail';?>',
      dataType: 'json',
      success: function(response){
        $.each(response,function(index,data){
          if(id_role2 == data['id']){
            $('#role2').append('<option class="role" value="'+data['id']+'" selected>'+data['name']+'</option>');
          }else{
            $('#role2').append('<option class="role" value="'+data['id']+'">'+data['name']+'</option>'); 
          }
        });   
      },
    });
  }


  function get_shift(){
    if(shift2 === '1'){
      $('#shift2').append('<option class="shift" value="1" selected>Shift 1</option>');
      $('#shift2').append('<option class="shift" value="2">Shift 2</option>');
    }else{
      $('#shift2').append('<option class="shift" value="1">Shift 1</option>');
      $('#shift2').append('<option class="shift" value="2" selected>Shift 2</option>'); 
    }
  }

  function user_detail(id){
    $.ajax({
      type: "GET",
      url: '<?php echo base_url().'Admin/get_user_detail/';?>'+id,
      dataType: 'json',
      success: function(response){
          console.log(response)
          var id = response[0].id;
          id_role2 = response[0].id_role;
          var name_role = response[0].name_role;
          var nrp = response[0].nrp;
          var username = response[0].username;
          var name = response[0].name;
          shift2 = response[0].shift;
          $('#id2').val(id);
          $('#nrp2').val(nrp);
          $('#name2').val(name);
          $('#username2').val(username);
          get_role();
          get_shift();
          $('#edit_user').modal("show");
      },
    });
  }

  
  $('#exampleModalLong').on('hidden.bs.modal', function(e) {
    $(this).find('form').trigger('reset');
    $('#msg1').hide();
  });
  $('#edit_user').on('hidden.bs.modal', function(e) {
    $(this).find('form').trigger('reset');
    $('#msg3').hide();
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
<!-- Modal Edit-->
  <div class="modal fade" id="edit_user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
    aria-hidden="true" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background: #80808038;">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit CCR User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="update_user">
            <div style="text-align: center; font-size: 20px; color: red; display: none;" id="msg3"><p id="msg4"></p></div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>NRP</label>
                  <input type="hidden" name="id" id="id2">
                  <input type="text" class="form-control" name="nrp" id="nrp2" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" id="name2" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" name="username" id="username2" autocomplete="off" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Role</label>
                  <select name="role" id="role2" class="form-control" required>
                    
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Shift</label>
                  <select name="shift" id="shift2" class="form-control" required>
                    
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password" id="password2" autocomplete="off">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <button type="submit" style="width: 100%;" class="btn btn-primary" id="send_user2">Save</button>
                <h5 style="color: #1572E8; display: none;" id="msgWaiting2">Waiting Process...</h5>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page -->
</html>
<script>
  $("#update_user").submit(function(e) {
      e.preventDefault(); // avoid to execute the actual submit of the form.
      var id = $('#id2').val();
      var nrp = $('#nrp2').val();
      var name = $('#name2').val();
      var username = $('#username2').val();
      var role = $('#role2').val();
      var password = $('#password2').val();
      var shift = $('#shift2').val();
      var msg = document.getElementById("msg4");

      console.log('nrp '+nrp);
      console.log('name '+name);
      console.log('username '+username);
      console.log('role '+role);
      console.log('password '+password);
      
      $('#send_user').hide(200);
      $('#msgWaiting2').show(200);
      $.ajax({
          type: "POST",
            url: '<?php echo base_url().'Admin/edit_user';?>',
            dataType: 'json',
            data:{
              nrp: nrp,
              name: name,
              username: username,
              role: role,
              password: password,
              shift: shift,
              id:id
            }, 
            success: function(response){
              console.log(response.response);
              if(response.response === "nrp same"){
                $('#nrp').val('');
                $('#send_user').show(200);
                $('#msgWaiting2').hide(200);
                msg.innerHTML = "NRP Be The Same In Database";
                $('#msg3').css('color', 'red');
                $('#msg3').show(200);
              }else if(response.response === "username same"){
                $('#nrp').val('');
                $('#send_user').show(200);
                $('#msgWaiting2').hide(200);
                msg.innerHTML = "Username Be The Same In Database";
                $('#msg3').css('color', 'red');
                $('#msg3').show(200);
              }else if(response.response === 'success'){
                location.href ="<?php echo base_url().'Admin/user_management';?>";
                // $('#closePage').show(200);
                // $('#sendForm').show(200);
                // $('#msgWaiting').hide(200);
              }
            }
      });
  });
</script>