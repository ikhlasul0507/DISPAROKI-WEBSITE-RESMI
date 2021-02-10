
<body class="hold-transition login-page" style="background: linear-gradient(#00BFFF,   #87CEFA); ">
<div class="login-box">
  <div class="login-logo">
    <img style="width: 100%; height: 100px" src="<?= base_url('assets/users/');?>gambar/logo.png" alt="">
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Ubah Password !</p>

    <form action="<?= base_url();?>auth/ubahpassword" method="post">
      
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password1">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Ulangi Password" name="password2">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Ubah</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <br>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

