
<body background="<?= base_url();?>assets/users/gambar/logo.jpg" style="width: auto; height: auto">
	
	<div class="content">
  <div class="row">
    <div class="col-xs-4">
      <img  style="width: 200px; height: 80px" src="<?= base_url();?>assets/users/gambar/logo.png">
    </div>
    <div class="col-xs-8">
      <h3 class="box-title" style="background-color: white">Data Aspirasi Kabupaten Ogan Komering Ilir<br>Dinas Pariwisata Dan Kebudayaan</h3>
    </div>
  </div>
    <hr>
	<!-- konten -->
               <table id="example2" class="table table-striped table-bordered data table-responsive"  style="width:100%" border="1">
                <thead>
                  <tr>
                    <td colspan="4" bgcolor="yellow" align="center">Data Aspirasi Dinas Pariwisata Dan Kebudayaan Kabupaten Ogan Komering Ilir</td>
                  </tr>
                <tr>
                 <th>ID Aspirasi</th>
                  <th>Judul</th>
                  <th>Photo</th>
                  <th>Aspirasi</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($data_asp as $as):?>
                <tr>
                  <td><?= $as['id_aspirasi'];?></td>
                  <td><?= $as['judul_aspirasi'];?></td>
                  <td><?= $as['photo_aspirasi'];?>"</td>
                  <td><?= $as['aspirasi'];?></td>
                  
                </tr>
               <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>ID Aspirasi</th>
                  <th>Judul</th>
                  <th>Photo</th>
                  <th>Aspirasi</th>
                </tr>
                </tfoot>
              </table>
	</div>
<script type="text/javascript">
	window.print();
</script>
</body>
</html>
