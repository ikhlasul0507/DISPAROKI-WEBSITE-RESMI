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
                  <th>Kode Jabatan</th>
                  <th>Nama Jabatan</th>

                </tr>
                </thead>
                <tbody>
                  <?php foreach ($data_jab as $k):?>
                <tr>
                  <td><?= $k['id'];?></td>
                  <td><?= $k['kode_jabatan'];?></td>
                  <td><?= $k['nama_jabatan'];?></td>
                 
                </tr>
               <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Kode Jabatan</th>
                  <th>Nama Jabatan</th>
                  
                </tr>
                </tfoot>
              </table>