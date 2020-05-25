<?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=$title.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
 <table id="example2" class="table table-bordered table-striped" border="1">
                <thead>
                <tr>
                	<th colspan="3" align="center" bgcolor="blue">Data Kecamatan</th>
                </tr>
                <tr>
                  <th bgcolor="yellow">ID</th>
                  <th bgcolor="silver">Kode Kecamatan</th>
                  <th bgcolor="green">Nama Kecamatan</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($data_kec as $k):?>
                <tr>
                  <td bgcolor="yellow"><?= $k['id'];?></td>
                  <td bgcolor="silver"><?= $k['kode_kecamatan'];?></td>
                  <td bgcolor="green"><?= $k['nama_kecamatan'];?></td>
    
                </tr>
               <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th bgcolor="yellow">ID</th>
                  <th bgcolor="silver">Kode Kecamatan</th>
                  <th bgcolor="green">Nama Kecamatan</th>
                
                </tr>
                </tfoot>
</table>