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
    <p class="login-box-msg">Silahkan Login !</p>

    <form action="<?= base_url();?>auth" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Email" value="<?= set_value('email'); ?>" name="email" autocomplete>
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
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <a href="<?= base_url();?>auth/registrasi">Daftar Akun</a> || <a href="<?= base_url('auth/lupapassword'); ?>">Lupa Password</a>
            </label>
          </div>
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

