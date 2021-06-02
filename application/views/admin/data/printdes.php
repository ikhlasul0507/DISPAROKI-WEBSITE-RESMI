<!DOCTYPE html>
<html>
<head>
	<title> <?= $judul; ?> </title>
</head>
<body background="<?= base_url();?>assets/users/gambar/logo.jpg" style="width: auto; height: auto">
	<center>
	<div class="content">
	 <img  style="width: 200px; height: 80px" src="<?= base_url();?>assets/users/gambar/logo.png">
    <h3 class="box-title" style="background-color: white">Data Desa Di Kota Pagaralam</h3>
    <hr>
	<table class="table table-bordered table-striped" border="1" cellspacing="0" cellpadding="2" style="background-color: white;width: 100%">
                <thead>
                <tr>
                  <th bgcolor="yellow">ID</th>
                  <th bgcolor="yellow">Kode Desa</th>
                  <th bgcolor="yellow">Nama Kecamatan</th>
                  <th bgcolor="yellow">Nama Desa</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($data_des as $d):?>
                <tr>
                  <td><?= $d->id_desa;?>
                  </td>
                  <td><?= $d->kode_desa;?></td>
                  <td><?= $d->nama_kecamatan;?></td>
                  <td><?= $d->nama_desa;?></td> 
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
