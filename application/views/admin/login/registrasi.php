
<body class="hold-transition login-page" style="background: linear-gradient(#00BFFF,   #87CEFA); ">
<div class="login-box">
  <div class="login-logo">
    <img style="width: 100%; height: 100px" src="<?= base_url('assets/users/');?>gambar/logo.png" alt="">
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Pendaftaran !</p>

    <form action="<?= base_url();?>auth/registrasi" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" value="<?= set_value('nama'); ?>">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Email" name="email" value="<?= set_value('email'); ?>">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="form-group has-feedback">
        <select class="form-control" style="width: 100%;" name="role_id" required oninvalid="this.setCustomValidity('Data Harus Dipilih !')" oninput="setCustomValidity('')">
          <option selected disabled="disabled" value="">--Pilih Status--</option>
          <?php foreach ($role as $k):?>
            <option value="<?= $k['id'];?>"><?= $k['nama_role'];?></option>
            <?php endforeach; ?>
          </select>
        <span class="glyphicon glyphicon-home form-control-feedback"></span>
      </div>
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
            <label>
              <a href="<?= base_url();?>auth">Login </a> || <a href="<?= base_url();?>auth/lupapassword">Lupa Password</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Daftar </button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <br>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

