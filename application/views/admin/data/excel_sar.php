<?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=$title.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
  <table id="example2" class="table table-bordered table-striped" border="1">
                <thead>
                  <tr>
                    <th colspan="4" align="center" bgcolor="blue">Data Sarana</th>
                  </tr>
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
                  <th>ID</th>
                  <th>Kode Sarana</th>
                  <th>Nama Sarana</th>
                  <th>Link</th>
                 
                </tr>
                </tfoot>
              </table>