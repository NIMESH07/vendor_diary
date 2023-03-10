<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Staff | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Staff</b>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
    <!--<?php echo validation_errors("<div class='alert alert-danger alert-dismissible'>","</div>"); ?>-->
    <?php if(isset($error))
    {
    ?>
    <div class='alert alert-danger alert-dismissible'>
        <?php echo $error;?>
    </div>
    <?php } ?>
      <!--<form action="<?php echo base_url();?>Adminlogin/loginCheck" method="post">-->
      <form action="" method="post">
        <?php echo form_error('email',"<div class='alert alert-danger alert-dismissible'>","</div>"); ?>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" value="<?php echo set_value('email'); ?>" placeholder="Email" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <?php echo form_error('password',"<div class='alert alert-danger alert-dismissible'>","</div>"); ?>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" value="<?php echo set_value('password'); ?>" placeholder="Password" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
           
          </div>
          <!-- /.col -->
          <div class="col-4">
            <!--<button type="submit" class="btn btn-primary btn-block">Sign In</button>-->
            <input type="submit" class="btn btn-primary btn-block" value="Submit" />
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url();?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/dist/js/adminlte.min.js"></script>
<?php
$code = rand(100000, 999999);
$this->session->set_userdata('capcha', $code)
?>
</body>
</html>
