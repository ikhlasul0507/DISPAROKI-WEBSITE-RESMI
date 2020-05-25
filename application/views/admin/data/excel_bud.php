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
                  <th>ID</th>
                  <th>Kode Budaya</th>
                  <th>Nama Budaya</th>
                  <th>Link Budaya</th>
                
                </tr>
                </tfoot>
              </table>