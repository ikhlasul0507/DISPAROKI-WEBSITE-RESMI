
<body background="<?= base_url();?>assets/users/gambar/logo.jpg" style="width: auto; height: auto">
	
	<div class="content">
  <div class="row">
    <div class="col-xs-4">
       <img  style="width: 200px; height: 80px" src="<?= base_url();?>assets/users/gambar/logo.png">
    </div>
    <div class="col-xs-8">
      <h3 class="box-title" style="background-color: white">Data Pengajuan Kota Pagaralam<br>Dinas Pariwisata Dan Kebudayaan</h3>
    </div>
  </div>
    <hr>
	<!-- konten -->
              <table id="example2" class="table table-striped table-bordered data table-responsive">
                
              <thead>
                <tr>
                  <th>ID Pengajuan</th>
                  <th>Kode Pengajuan</th>
                  <th>Nama Kecamatan</th>
                  <th>Nama Desa</th>
                  <th>Nama Pengajuan</th>
                  <th>Photo</th>
                  <th>Deskriksi</th>
                  <th>Alamat</th>
                  <th>Kontak</th>
                  <th>Status</th>
                 
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($data_pgj as $pg):?>
                <tr>
                  <td><?= $pg->id_pengajuan;?></td>
                  <td><?= $pg->kode_pengajuan;?></td>
                  <td><?= $pg->nama_kecamatan;?></td>
                  <td><?= $pg->nama_desa;?></td>
                  <td><?= $pg->nama_pengajuan;?></td>
                  <td>
                    <img src="<?= base_url();?>assets/admin/img/pengajuan/<?= $pg->photo_pengajuan;?>" style="width: 400px;height: 100px;background-color: #3c8dbc" />
                    </a>
                  </td>
                  <td><?= $pg->deskripsi_pengajuan;?></td>
                  <td><?= $pg->alamat_pengajuan;?></td>
                  <td><?= $pg->kontak_pengajuan;?></td>
                  <td>
                    <?php if ($pg->status_pengajuan=='0') { ?>
                      <b>Pengajuan Baru</b>
                     <?php }elseif($pg->status_pengajuan=='1'){ ?>
                      <b>Sedang Di Proses...</b>
                      <?php }else{?>
                        Selesai
                    <?php } ?>
                  </td>
                 
                </tr>
               <?php endforeach; ?>
                </tbody>
              </table>
	</div>
<script type="text/javascript">
	window.print();
</script>
</body>
</html>
