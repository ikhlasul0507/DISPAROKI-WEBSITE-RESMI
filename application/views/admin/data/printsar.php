<!DOCTYPE html>
<html>
<head>
	<title> <?= $judul; ?> </title>
</head>
<body background="<?= base_url();?>assets/users/gambar/logo.jpg" style="width: auto; height: auto">
	<center>
	<div class="content">
	 <img  style="width: 200px; height: 80px" src="<?= base_url();?>assets/users/gambar/logo.png">
    <h3 class="box-title" style="background-color: white">Data Kecamatan Di Kota Pagaralam</h3>
    <hr>
	<table class="table table-bordered table-striped" border="1" cellspacing="0" cellpadding="2" style="background-color: white;width: 100%">
                 <thead>
                <tr>
                  <th>ID</th>
                  <th>Kode Sarana</th>
                  <th>Nama Sarana</th>
                  <th>Link</th>
                 
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($data_sar as $k):?>
                <tr>
                  <td><?= $k['id'];?></td>
                  <td><?= $k['kode_sarana'];?></td>
                  <td><?= $k['nama_sarana'];?></td>
                  <td><?= $k['link']; ?></td>
                  
                </tr>
               <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th colspan="4">Copyright@Dinas Pariwisata dan Kebudayaan Ogan Komering Ilir</th>
                 
                </tr>
                </tfoot>
    </table>
	</div>
<script type="text/javascript">
	window.print();
</script>
</body>
</html>
