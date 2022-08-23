<!DOCTYPE html>
<html>

<head>
  <title>BODC CYBER APPS</title>
  <meta charset="UTF-8" />

  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendor/animate/animate.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendor/css-hamburgers/hamburgers.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/vendor/select2/select2.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/util.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/main.css">
</head>

<body>
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt>
          <img src="<?= base_url(); ?>assets/images/img-01.png" alt="IMG">
        </div>

        <form id="login" class="login100-form validate-form" action="<?= base_url('do_login'); ?>" method="POST">
          <span class="login100-form-title">
            <h3>Login BODC</h3>
          </span>

          <?= $this->session->flashdata('msg'); ?>

          <div class="wrap-input100 validate-input">
            <input id="username" class="input100" type="text" name="username" placeholder="Username">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-user" aria-hidden="true"></i>
            </span>
          </div>

          <div class="wrap-input100 validate-input" data-validate="Password is required">
            <input id="password" class="input100" type="password" name="password" placeholder="Password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock" aria-hidden="true"></i>
            </span>
          </div>

          <div class="container-login100-form-btn">
            <!-- <a href="../pages/Admin/dashboard-superadmin.html" class="login100-form-btn" type="submit">Login</a> -->
            <button type="submit" class="login100-form-btn">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- You can also require other files to run in this process -->
  <!-- <script src="<?= base_url(); ?>index.js"></script> -->
  <!-- <script src="<?= base_url(); ?>renderer.js"></script> -->

  <script src="<?= base_url(); ?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/popper.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/select2/select2.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/tilt/tilt.jquery.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/main.js"></script>
</body>

</html>