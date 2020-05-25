
<body background="<?= base_url();?>assets/users/gambar/logo.jpg" style="width: auto; height: auto">
	
	<div class="content">
  <div class="row">
    <div class="col-xs-4">
      <img  style="width: 200px; height: 80px" src="<?= base_url();?>assets/users/gambar/logo.png">
    </div>
    <div class="col-xs-8">
      <h3 class="box-title" style="background-color: white">Data Wisata Kabupaten Ogan Komering Ilir<br>Dinas Pariwisata Dan Kebudayaan</h3>
    </div>
  </div>
    <hr>
	<!-- konten -->
  <?php foreach ($data_wst as $sn): ?>
   <div class="box box-primary">
            <div class="box-body box-profile">
              <img  style="width: 100%" src="<?= base_url();?>assets/admin/img/master_wisata/<?= $sn->photo_wisata;?>">
              <h3 class="profile-username"><b><?= $sn->nama_master_wisata; ?></b></h3>

              <p class="text-muted"><small>Alamat : <?= $sn->nama_desa.''.$sn->nama_kecamatan;?></small></p>
              <p align="left"><?= $sn->deskripsi_wisata1; ?></p>
              <p align="left"><?= $sn->deskripsi_wisata2; ?></p>
              <p align="left"><?= $sn->deskripsi_wisata3; ?></p>
              <div class="row">
                <div class="col-xs-6">
                <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Latitude</b> <a class="pull-right"><?= $sn->latitude; ?></a>
                </li>
              </ul>
                </div>
                <div class="col-xs-6">
                <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Longtitude</b> <a class="pull-right"><?= $sn->longtitude; ?></a>
                </li>
                </ul>
                </div>
              </div>
              <p>Link Video :<br><b> <?= $sn->link_video; ?></b></p>
              <p>Link Google :<br><b><?= $sn->link_google; ?></b></p>
              <img src="<?= base_url('admin/QRcode/'.$sn->link_video);?>">
              <img src="<?= base_url('admin/QRcode/'.$sn->link_google);?>">
             
            </div>
            <!-- /.box-body -->
          </div>
  <?php endforeach ?>
	</div>
<script type="text/javascript">
	window.print();
</script>
</body>
</html>
