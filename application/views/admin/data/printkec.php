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
                <thead style="background-color: yellow">
                <tr>
                  <th>ID</th>
                  <th>Kode Kecamatan</th>
                  <th>Nama Kecamatan</th>
                 
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($data_kec as $k):?>
                <tr>
                  <td><?= $k['id'];?></td>
                  <td><?= $k['kode_kecamatan'];?></td>
                  <td><?= $k['nama_kecamatan'];?></td>
                 
                </tr>
               <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th colspan="3">Copyright@Dinas Pariwisata dan Kebudayaan Ogan Komering Ilir</th>
                 
                </tr>
                </tfoot>
    </table>
	</div>
<script type="text/javascript">
	window.print();
</script>
</body>
</html>
