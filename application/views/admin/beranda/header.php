<style>
 .blink {
  color: red;
  animation: blink-animation 1s steps(5, start) infinite;
  -webkit-animation: blink-animation 1s steps(5, start) infinite;
}
  @keyframes blink-animation {
        to {
          visibility: hidden;
            }
            }
        @-webkit-keyframes blink-animation {
        to {
            visibility: hidden;
        }
      }                     
</style>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>DM</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Aplikasi Admin</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <?php $a = $this->db->query("SELECT *FROM tbl_aspirasi");
            $aspi= $a->num_rows();?>
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success <?php if($aspi>0){ 
                echo 'blink';
              } ?>"><?= $aspi;?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header"><?php if($aspi>0){ ?>
                  Ada <?= $aspi;?> Aspirasi Baru !
                <?php }else{
                  echo "Tidak Ada Aspirasi";
                } ?></li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <?php 
                    // $sp=0;
                    // $this->db->select('*');
                    // $this->db->where('status_pengajuan', $sp);
                    $data_notif = $this->db->get('tbl_aspirasi',5)->result_array();
                   ?>
                   <?php foreach ($data_notif as $as):?>
                  <li><!-- start message -->
                    <a href="<?= base_url();?>admin/namaasp">
                      <div class="pull-left">
                        <img src="<?= base_url('assets/users/');?>gambar/<?= $as['photo_aspirasi'];?>" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        <?php 
                        $kalimat = $as['judul_aspirasi'];
                        $sub_kalimat = substr($kalimat,0,10);
                        echo $sub_kalimat.'...'
                       ?>;
                        <small><i class="fa fa-clock-o"></i>
                          <?= $as['waktu']; ?>
                        </small>
                      </h4>
                      <p>
                        <?php 
                        $kalimat = $as['aspirasi'];
                        $sub_kalimat = substr($kalimat,0,20);
                        echo $sub_kalimat.'...';
                       ?>
                      </p>
                    </a>
                  </li>
                  <!-- end message -->
                  <?php endforeach; ?>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="<?= base_url();?>admin/namaasp">Lihat Semua Aspirasi</a></li>
            </ul>
          </li>
           <?php $a = $this->db->query("SELECT *FROM tbl_pengajuan WHERE status_pengajuan='0'");
            $hasil= $a->num_rows();?>
            
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              
              <span class="label label-warning <?php if($hasil>0){ 
                echo 'blink';
              } ?>"><?= $hasil;?></span>
            </a>
            <ul class="dropdown-menu">
             
              <li class="header">
                <?php if($hasil>0){ ?>
                  Ada <?= $hasil;?> Pengajuan Baru !
                <?php }else{
                  echo "Tidak Ada Pengajuan";
                } ?>
                </li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <?php 
                    $sp=0;
                    $this->db->select('*');
                    $this->db->where('status_pengajuan', $sp);
                    $data_notif = $this->db->get('tbl_pengajuan',5)->result_array();
                   ?>
                  <?php foreach ($data_notif as $pg):?>
                    <a href="<?= base_url();?>admin/namapgj">
                      <div class="pull-left">
                        <img style="width: 50px;height: 50px" src="<?= base_url();?>assets/admin/img/pengajuan/<?= $pg['photo_pengajuan'];?>" class="img-circle" alt="User Image">
                      </div>
                      <h6>
                      <i class="fa fa-user text-red"></i><?= $pg['kontak_pengajuan']; ?>
                        <small><i class="fa fa-clock-o"></i>Proses</small>
                      </h6>
                      <p><?= $pg['nama_pengajuan']; ?></p>
                    </a>
                  <?php endforeach; ?>
                </ul>
              </li>
              <?php if($hasil>0){ ?>
              <li class="footer"><a href="<?= base_url();?>admin/namapgj">Lihat Semua</a></li>
              <?php } ?>
            </ul>
          </li>

          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?= base_url('assets/admin/img/akun/') . $user['photo']; ?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?= $user['nama']; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?= base_url('assets/admin/img/akun/') . $user['photo']; ?>" class="img-circle" alt="User Image">

                <p>
                  <?= $user['nama']; ?> - 
                  <?php if($user['role_id'] == 1){
                    echo "Administrator";
                  }elseif ($user['role_id'] == 2) {
                    echo "Kepala Dinas";
                  }elseif ($user['role_id'] == 3) {
                    echo "Kepala Bagian";
                  }elseif ($user['role_id'] == 4){
                    echo "Pegawai";
                  }
                  ?>
                  <small><?= $user['email']; ?></small>
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?= base_url();?>admin/profil" class="btn btn-default btn-flat">Profil</a>
                </div>
                <div class="pull-right">
                  <a href="<?= base_url('auth/logout');?>" class="btn btn-default btn-flat">Keluar</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>