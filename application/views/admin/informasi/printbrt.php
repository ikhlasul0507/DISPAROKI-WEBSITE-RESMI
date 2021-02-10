
<body background="<?= base_url();?>assets/users/gambar/logo.jpg" style="width: auto; height: auto">
	
	<div class="content">
  <div class="row">
    <div class="col-xs-4">
       <img  style="width: 200px; height: 80px" src="<?= base_url();?>assets/users/gambar/logo.png">
    </div>
    <div class="col-xs-8">
      <h3 class="box-title" style="background-color: white">Data Berita Kabupaten Ogan Komering Ilir<br>Dinas Pariwisata Dan Kebudayaan</h3>
    </div>
  </div>
    <hr>
	<!-- konten -->
  <?php foreach ($data_brt as $sn): ?>
   <div class="box box-primary">
            <div class="box-body box-profile">
              <img  style="width: 100%" src="<?= base_url();?>assets/admin/img/berita/<?= $sn->photo_berita;?>">
              <h3 class="profile-username"><b><?= $sn->judul_berita; ?></b></h3>

              <p class="text-muted"><small>Alamat : <?= $sn->nama_desa.''.$sn->nama_kecamatan;?></small><small class="pull-right">Waktu : <?= $sn->waktu_berita; ?></small></p><hr>
              <p align="left"><?= $sn->deskripsiberita1; ?></p>
              <p align="left"><?= $sn->deskripsiberita2; ?></p>
              <p align="left"><?= $sn->deskripsiberita3; ?></p>
              <p>Status Berita :
                <b><?php if ($sn->status_berita=='1') { ?>
                      <b> Berita Sedang Tayang.... </b>
                    <?php }else{ ?>
                      <b> Berita Lokal !!!</b>
                    <?php }?>
                </b></p>
            </div></div>
  <?php endforeach ?>
	</div>
<script type="text/javascript">
	window.print();
</script>
</body>
</html>
