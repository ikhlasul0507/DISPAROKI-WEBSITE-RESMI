
<body background="<?= base_url();?>assets/users/gambar/logo.jpg" style="width: auto; height: auto">
	
	<div class="content">
  <div class="row">
    <div class="col-xs-4">
       <img  style="width: 200px; height: 80px" src="<?= base_url();?>assets/users/gambar/logo.png">
    </div>
    <div class="col-xs-8">
      <h3 class="box-title" style="background-color: white">Data Penghargaan Kabupaten Ogan Komering Ilir<br>Dinas Pariwisata Dan Kebudayaan</h3>
    </div>
  </div>
    <hr>
	<!-- konten -->
               <table id="example2" class="table table-striped table-bordered data table-responsive" border="1"  style="width:100%">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nama Penghargaan</th>
                  <th>Photo</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($data_peng as $pg):?>
                <tr>
                  <td align="center"><?= $pg['id'];?></td>
                  <td align="center"><?= $pg['nama_penghargaan'];?></td>
                  <td align="center">
                    <a href="<?= base_url();?>assets/admin/img/penghargaan/<?= $pg['photo_penghargaan'];?>" target="blank">
                    <img src="<?= base_url();?>assets/admin/img/penghargaan/<?= $pg['photo_penghargaan'];?>" style="width: 100px;height: 100px;background-color: #3c8dbc" />
                    </a>
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
