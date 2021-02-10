
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url('assets/admin/img/akun/') . $user['photo']; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
         <!--  <p>Alexander Pierce</p> -->
         <a href="#"><?= $user['nama']; ?> -  
                  <?php if($user['role_id'] == 1){
                    echo "Administrator";
                  }elseif ($user['role_id'] == 2) {
                    echo "Kepala Dinas";
                  }elseif ($user['role_id'] == 3) {
                    echo "Kepala Bagian";
                  }elseif ($user['role_id'] == 4){
                    echo "Pegawai";
                  }
                  ?></a><br>
          <i class="fa fa-circle text-success"></i> Online
        </div>
      </div>

      

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu mt-4" data-widget="tree">
        <li class="header">Main Menu Aplikasi</li>
        <li class="active"><a href=" <?= base_url();?>admin"><i class="fa fa-dashboard"></i> <span>Beranda Utama</span></a></li>

         <li class="treeview">
          <?php if($user['role_id'] == 1 || $user['role_id'] == 2 || $user['role_id'] == 3 ) {?>
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <?php } ?>
          <ul class="treeview-menu">
              <li>
                <a href="<?= base_url();?>admin/namawst">
                  <i class="fa fa-book"></i> <span>Data Wisata</span>
                  <span class="pull-right-container">
                    <small class="label pull-right bg-blue">
                    <?php $a = $this->db->query("SELECT *FROM tbl_master_wisata");
                    $hasil= $a->num_rows();
                    echo $hasil; 
                    ?>
                    </small>
                  </span>
                </a>
              </li>
               <li>
                <a href="<?= base_url();?>admin/namabdy">
                  <i class="fa fa-book"></i> <span>Data Budaya</span>
                  <span class="pull-right-container">
                    <small class="label pull-right bg-blue">
                    <?php $a = $this->db->query("SELECT *FROM tbl_master_budaya");
                    $hasil= $a->num_rows();
                    echo $hasil; 
                    ?>
                    </small>
                  </span>
                </a>
              </li>
              <li>
                <a href="<?= base_url();?>admin/namasrn">
                  <i class="fa fa-book"></i> <span>Data Sarana</span>
                  <span class="pull-right-container">
                    <small class="label pull-right bg-blue">
                    <?php $a = $this->db->query("SELECT *FROM tbl_master_sarana");
                    $hasil= $a->num_rows();
                    echo $hasil; 
                    ?>
                    </small>
                  </span>
                </a>
              </li>
               <li>
                <a href="<?= base_url();?>admin/namajab">
                  <i class="fa fa-book"></i> <span>Data Jabatan</span>
                  <span class="pull-right-container">
                    <small class="label pull-right bg-blue">
                    <?php $a = $this->db->query("SELECT *FROM tbl_master_jabatan");
                    $hasil= $a->num_rows();
                    echo $hasil; 
                    ?>
                    </small>
                  </span>
                </a>
              </li>
              <li>
                <a href="<?= base_url();?>admin/namastr">
                  <i class="fa fa-book"></i> <span>Data Struktur</span>
                  <span class="pull-right-container">
                    <small class="label pull-right bg-blue">
                    <?php $a = $this->db->query("SELECT *FROM tbl_struktur");
                    $hasil= $a->num_rows();
                    echo $hasil; 
                    ?>
                    </small>
                  </span>
                </a>
              </li>
               <li>
                <a href="<?= base_url();?>admin/namavis">
                  <i class="fa fa-book"></i> <span>Data Visi</span>
                  <span class="pull-right-container">
                    <small class="label pull-right bg-blue">
                    <?php $a = $this->db->query("SELECT *FROM tbl_visi");
                    $hasil= $a->num_rows();
                    echo $hasil; 
                    ?>
                    </small>
                  </span>
                </a>
              </li>
               <li>
                <a href="<?= base_url();?>admin/namamis">
                  <i class="fa fa-book"></i> <span>Data Misi</span>
                  <span class="pull-right-container">
                    <small class="label pull-right bg-blue">
                    <?php $a = $this->db->query("SELECT *FROM tbl_misi");
                    $hasil= $a->num_rows();
                    echo $hasil; 
                    ?>  
                    </small>
                  </span>
                </a>
              </li>
               <li>
                <a href="<?= base_url();?>admin/namamed">
                  <i class="fa fa-book"></i> <span>Data Media Sosial</span>
                  <span class="pull-right-container">
                    <small class="label pull-right bg-blue">
                    <?php $a = $this->db->query("SELECT *FROM tbl_media_sosial");
                    $hasil= $a->num_rows();
                    echo $hasil; 
                    ?>
                    </small>
                  </span>
                </a>
              </li>

          </ul>
        </li>

       
       <li class="treeview">
        <?php if($user['role_id'] == 1 || $user['role_id'] == 2 || $user['role_id'] == 3 ) {?>
          <a href="#">
            <i class="fa fa-clipboard"></i> <span>Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        <?php } ?>
          <ul class="treeview-menu">
             
              <li>
                <a href="<?= base_url();?>admin/namawis">
                  <i class="fa fa-tree"></i> <span>Nama Wisata</span>
                  <span class="pull-right-container">
                    <small class="label pull-right bg-blue">
                    <?php $a = $this->db->query("SELECT *FROM tbl_wisata");
                    $hasil= $a->num_rows();
                    echo $hasil; 
                    ?>
                    </small>
                  </span>
                </a>
              </li>
               <li>
                <a href="<?= base_url();?>admin/namasar">
                  <i class="fa fa-street-view"></i> <span>Nama Sarana</span>
                  <span class="pull-right-container">
                    <small class="label pull-right bg-blue">
                    <?php $a = $this->db->query("SELECT *FROM tbl_sarana");
                    $hasil= $a->num_rows();
                    echo $hasil; 
                    ?>
                    </small>
                  </span>
                </a>
              </li>
               <li>
                <a href="<?= base_url();?>admin/namabud">
                  <i class="fa  fa-odnoklassniki"></i> <span>Nama Budaya</span>
                  <span class="pull-right-container">
                    <small class="label pull-right bg-blue">
                    <?php $a = $this->db->query("SELECT *FROM tbl_budaya");
                    $hasil= $a->num_rows();
                    echo $hasil; 
                    ?>
                    </small>
                  </span>
                </a>
              </li>
              <li>
                <a href="<?= base_url();?>admin/namakec">
                  <i class="fa fa-file-text-o"></i> <span>Nama Kecamatan</span>
                  <span class="pull-right-container">
                    <small class="label pull-right bg-blue">
                    <?php $a = $this->db->query("SELECT *FROM tbl_kecamatan");
                    $hasil= $a->num_rows();
                    echo $hasil; 
                    ?>
                    </small>
                  </span>
                </a>
              </li>
              <li>
                <a href="<?= base_url();?>admin/namades">
                  <i class="fa fa-file-text-o"></i> <span>Nama Desa</span>
                  <span class="pull-right-container">
                    <small class="label pull-right bg-blue">
                    <?php $a = $this->db->query("SELECT *FROM tbl_desa");
                    $hasil= $a->num_rows();
                    echo $hasil; 
                    ?>
                    </small>
                  </span>
                </a>
              </li>

          </ul>
        </li>
       
   
       <li class="treeview">
          <a href="#">
            <i class="fa fa-list"></i> <span>Informasi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
             
              <li>
                <a href="<?= base_url();?>admin/namabrt">
                  <i class="fa fa-clipboard"></i> <span>Data Berita</span>
                  <span class="pull-right-container">
                    <small class="label pull-right bg-blue">
                    <?php $a = $this->db->query("SELECT *FROM tbl_berita");
                    $hasil= $a->num_rows();
                    echo $hasil; 
                    ?>
                    </small>
                  </span>
                </a>
              </li>
               <li>
                <a href="<?= base_url();?>admin/namapgj">
                  <i class="fa fa-exchange"></i> <span>Data Pengajuan</span>
                  <span class="pull-right-container">
                    <small class="label pull-right bg-blue">
                    <?php $a = $this->db->query("SELECT *FROM tbl_pengajuan");
                    $hasil= $a->num_rows();
                    echo $hasil; 
                    ?>
                    </small>
                  </span>
                </a>
              </li>
              <li>
                <a href="<?= base_url();?>admin/namakon">
                  <i class="fa fa-envelope"></i> <span>Data Kontak</span>
                  <span class="pull-right-container">
                    <small class="label pull-right bg-blue">
                    <?php $a = $this->db->query("SELECT *FROM tbl_kontak");
                    $hasil= $a->num_rows();
                    echo $hasil; 
                    ?>
                    </small>
                  </span>
                </a>
              </li>
               <li>
                <a href="<?= base_url();?>admin/namaasp">
                  <i class="fa fa-bookmark"></i> <span>Aspirasi</span>
                  <span class="pull-right-container">
                    <small class="label pull-right bg-blue">
                    <?php $a = $this->db->query("SELECT *FROM tbl_aspirasi");
                    $hasil= $a->num_rows();
                    echo $hasil; 
                    ?>
                    </small>
                  </span>
                </a>
              </li>
              <li>
                <a href="<?= base_url();?>admin/namavismis">
                  <i class="fa fa-cc"></i> <span>Data Visi & Misi</span>
                  <span class="pull-right-container">
                    <small class="label pull-right bg-blue">Update</small>
                  </span>
                </a>
              </li>
              <li>
                <a href="<?= base_url();?>admin/namapeng">
                  <i class="fa fa-cc"></i> <span>Data Penghargaan</span>
                  <span class="pull-right-container">
                    <small class="label pull-right bg-blue">
                    <?php $a = $this->db->query("SELECT *FROM tbl_penghargaan");
                    $hasil= $a->num_rows();
                    echo $hasil; 
                    ?>
                    </small>
                  </span>
                </a>
              </li>
              <li>
                <a href="<?= base_url();?>admin/namainfo">
                  <i class="fa fa-bullhorn"></i> <span>Info Dispar</span>
                  <span class="pull-right-container">
                    <small class="label pull-right bg-blue">Update</small>
                  </span>
                </a>
              </li>
             
              

          </ul>
        </li>

        <li>
          <a href="<?= base_url();?>admin/kalender">
            <i class="fa fa-calendar"></i> <span>Kalender Agenda</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-blue">New</small>
            </span>
          </a>
        </li>
     
       
      
  
        <li class="header">Setting Aplikasi</li>
        <?php if($user['role_id'] == 1 || $user['role_id'] == 2 ) {?>
        <li><a href="<?= base_url();?>admin/aksesakun"><i class="fa fa-circle-o text-red"></i> <span>Akses Akun</span></a></li>
        <?php } ?>
        <li><a href="#" data-toggle="control-sidebar"><i class="fa fa-circle-o text-red"></i><span>Aplikasi </span></a></a></li>
        <?php if($user['role_id'] == 1 || $user['role_id'] == 2 ) {?>
        <li><a href="#" data-toggle="modal" data-target="#exampleModalpeta"><i class="fa fa-circle-o text-yellow"></i> <span>Peta</span></a></li>
        <?php } ?>
        <li><a href="<?= base_url();?>User_guide"><i class="fa fa-circle-o text-yellow"></i> <span>User Guide</span></a></li>
        <li><a href="#" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-circle-o text-aqua"></i> <span>Version</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Version Application</h5>
      </div>
      <div class="modal-body">
        <p align="center">Official Application of Culture and Tourism Office of Ogan Komering Ilir Regency Is Version 2020-1 designed and made by Sriwijaya State Polytechnic Students</p>
        <center>
        <img src="<?= base_url();?>assets/users/gambar/polsri.png" style="width: 100px;height: 100px">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalpeta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <ul class="list-group">
                  <li class="list-group-item active">Pengaturan Peta</li>
                  <h2>Pengaturan Peta</h2>
                   <!-- Profile Image -->
                      <div class="box box-primary">
                        <div class="box-body box-profile">
                          <a href="<?= base_url('assets/users/gambar/logo.png');?>" target="_blank"><img class="profile-user-img img-responsive img-circle" src="<?= base_url('assets/admin/img/akun/') . $user['photo']; ?>" alt="User profile picture"></a>

                          <h3 class="profile-username text-center">Sistem Informasi Geografis Persebaran Objek Wisata</h3>

                          <p class="text-muted text-center">Di Kabupaten Ogan Komering Ilir</p>
                          <ul class="list-group list-group-unbordered">
                            <form method="post" action="<?= base_url();?>Admin/petazoom">
                            <li class="list-group-item">
                              <b>Status</b> : 
                              <?php if($peta['is_active']==1)
                              { 
                                echo "--Sedang Aktif--";
                              }else{
                                echo "--Tidak Aktif";
                              }
                              ?>
                              <?php if($peta['is_active']==1)
                              { ?>
                              <a href="<?= base_url('admin/petaoff/'.$peta['id']);?>" class="pull-right badge badge-success">Off</a>
                              <?php }else{ ?>
                              <a href="<?= base_url('admin/petaon/'.$peta['id']);?>" class="pull-right badge badge-success">ON</a>
                              <?php } ?>
                            </li>
                            
                            <li class="list-group-item">
                              <input type="hidden" name="is_active" value="<?= $peta['is_active'];?>">
                              <b>Zoom</b> : <input type="number" name="zoom" value="<?= $peta['zoom']; ?>"><button type="submit" class="pull-right btn-primary">Ubah</button>
                            </li>
                            </form>
                          </ul>

                          <a href="#" class="btn btn-primary btn-block"><b class="blink">Berhati-Hati Lah Atas Kerahasiaan Akun Anda !</b></a>
                        </div>
                        <!-- /.box-body -->
                      </div>
                      <!-- /.box -->
                </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>