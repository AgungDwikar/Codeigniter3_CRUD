<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');  ?>">
  <script src="<?php echo base_url('assets/js/jquery-3.3.1.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
  </script>
</head>

<div class="container">
  <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel panel-info">
      <div class="panel-heading">
        <div class="panel-title">Sign In</div>
      </div>
      <?php if ($this->session->flashdata('messageAkses')) {
        echo $this->session->flashdata('messageAkses');
      } ?>
      <div style="padding-top:30px" class="panel-body">

        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

        <form action="<?php echo base_url('auth/login') ?>" method="post">
          <?php if ($this->session->flashdata('messageUser')) {
            echo $this->session->flashdata('messageUser');
          } ?>
          <div style="margin-bottom: 25px" class="input-group">

            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input id="email" type="text" class="form-control" name="email" value="" placeholder="email">
          </div>
          <?php if ($this->session->flashdata('messagePass')) {
            echo $this->session->flashdata('messagePass');
          } ?>
          <div style="margin-bottom: 25px" class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input id="password" type="password" class="form-control" name="password" placeholder="password">
          </div>



          <div class="input-group">
            <div class="checkbox">
              <label>
                <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
              </label>
            </div>
          </div>


          <div style="margin-top:10px" class="form-group">
            <!-- Button -->

            <div class="col-sm-12 controls">
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>