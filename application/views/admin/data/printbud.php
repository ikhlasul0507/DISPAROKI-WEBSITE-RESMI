<!DOCTYPE html>
<html>
<head>
	<title> <?= $judul; ?> </title>
</head>
<body background="<?= base_url();?>assets/users/gambar/logo.jpg" style="width: auto; height: auto">
	<center>
	<div class="content">
	 <img  style="width: 200px; height: 80px" src="<?= base_url();?>assets/users/gambar/logo.png">
    <h3 class="box-title" style="background-color: white">Data Budaya Di Kabupaten Ogan Komering Ilir</h3>
    <hr>
	<table class="table table-bordered table-striped" border="1" cellspacing="0" cellpadding="2" style="background-color: white;width: 100%">
                 <thead>
                <tr>
                  <th>ID</th>
                  <th>Kode Budaya</th>
                  <th>Nama Budaya</th>
                  <th>Link Budaya</th>
                 
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($data_bud as $k):?>
                <tr>
                  <td><?= $k['id_budaya'];?></td>
                  <td><?= $k['kode_budaya'];?></td>
                  <td><?= $k['nama_budaya'];?></td>
                  <td><?= $k['link_budaya']; ?></td>
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
