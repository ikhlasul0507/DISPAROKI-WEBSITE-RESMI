<?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=$title.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
  <table id="example2" class="table table-bordered table-striped" border="1">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Kode Desa</th>
                  <th>Nama Kecamatan</th>
                  <th>Nama Desa</th>
               
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
                  <th>ID</th>
                  <th>Kode Desa</th>
                  <th>Kode Kecamatan</th>
                  <th>Nama Desa</th>
                </tr>
                </tfoot>
              </table>