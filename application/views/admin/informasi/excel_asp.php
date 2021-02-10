<?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=$title.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
              <table id="example2" class="table table-striped table-bordered data table-responsive"  style="width:100%" border="1">
                <thead>
                  <tr>
                    <td colspan="4" bgcolor="yellow" align="center">Data Aspirasi Dinas Pariwisata Dan Kebudayaan Kabupaten Ogan Komering Ilir</td>
                  </tr>
                <tr>
                 <th>ID Aspirasi</th>
                  <th>Judul</th>
                  <th>Photo</th>
                  <th>Aspirasi</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($data_asp as $as):?>
                <tr>
                  <td align="center"><?= $as['id_aspirasi'];?></td>
                  <td><?= $as['judul_aspirasi'];?></td>
                  <td><?= $as['photo_aspirasi'];?>"</td>
                  <td><?= $as['aspirasi'];?></td>
                  
                </tr>
               <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>ID Aspirasi</th>
                  <th>Judul</th>
                  <th>Photo</th>
                  <th>Aspirasi</th>
                </tr>
                </tfoot>
              </table>