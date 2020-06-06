<!-- notifikasi -->
<div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>">
                  </div>
                  <!-- end notifikasi -->
<body class="hold-transition login-page" style="background: linear-gradient(#00BFFF,   #87CEFA); ">
<div class="login-box">
  <div class="login-logo">
    <img style="width: 100%; height: 100px" src="<?= base_url('assets/users/');?>gambar/logo.png" alt="">
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Lupa Password !</p>

    <form action="<?= base_url();?>auth/lupapassword" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Email" value="<?= set_value('email'); ?>" name="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="row">
        <div class="col-xs-8">
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Kirim </button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <br>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

