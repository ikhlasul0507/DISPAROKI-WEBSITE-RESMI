
<body background="<?= base_url();?>assets/users/gambar/logo.jpg" style="width: auto; height: auto">
	<center>
	<div class="content">
	 <img  style="width: 200px; height: 80px" src="<?= base_url();?>assets/users/gambar/logo.png">
  <h3 class="box-title" style="background-color: white">Data Struktur Dinas Pariwisata</h3>
    <hr>
	<table class="table table-bordered table-striped" border="1" cellspacing="0" cellpadding="2" style="background-color: white;">
                <thead>
                  <tr>
                    <th colspan="2" align="center">Data Struktur Dinas Pariwisata</th>
                  </tr>
                <tr>
                  <th>IDENTITAS</th>
                  <th>PHOTO</th>
                     
                </tr>
                </thead>
                <tbody>
                <?php foreach ($data_str as $k):?>
                <tr>
                  <td>
                      <ul class="list-group">
                      <li class="list-group-item">ID : <?= $k->id_struktur;?></li>
                      <li class="list-group-item">Jabatan : <?= $k->nama_jabatan;?></li>
                      <li class="list-group-item">Nama : <?= $k->nama;?></li>
                      </ul>
                  </td>
                  <td><img src="<?= base_url();?>assets/admin/img/struktur/<?= $k->photo;?>" style="width: 100px;height: 120px;background-color: #3c8dbc" /></td>
                  
                </tr>
               <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th colspan="2">Copyright@Dinas Pariwisata dan Kebudayaan Kota Pagaralam</th>
                 
                </tr>
                </tfoot>
    </table>
	</div>
<script type="text/javascript">
	window.print();
</script>
</body>
</html>
