
<body background="<?= base_url();?>assets/users/gambar/logo.jpg" style="width: auto; height: auto">
	
	<div class="content">
  <div class="row">
    <div class="col-xs-4">
       <img  style="width: 200px; height: 80px" src="<?= base_url();?>assets/users/gambar/logo.png">
    </div>
    <div class="col-xs-8">
      <h3 class="box-title" style="background-color: white">Data Kontak Kota Pagaralam<br>Dinas Pariwisata Dan Kebudayaan</h3>
    </div>
  </div>
    <hr>
	<!-- konten -->
              <table id="example2" class="table table-striped table-bordered data table-responsive">
                
              <thead>
                 <tr>
                  <th align="center">ID Kontak</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Judul</th>
                  <th>Pesan</th>
                  <th>Waktu</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($data_kon as $ko):?>
                <tr>
                  <td align="center"><?= $ko['id_kontak'];?></td>
                  <td><?= $ko['nama_kontak'];?></td>
                  <td><?= $ko['email_kontak'];?></td>
                  <td><?= $ko['judul_kontak'];?></td>
                  <td><?= $ko['pesan_kontak'];?></td>
                  <td><?= $ko['waktu'];?></td>
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
