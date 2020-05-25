<?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=$title.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
              <table id="example2" class="table table-striped table-bordered data table-responsive"  style="width:100%" border="1">
                <thead>
                  <tr>
                    <td colspan="5" bgcolor="yellow" align="center">Data Kontak Dinas Pariwisata Dan Kebudayaan Kabupaten Ogan Komering Ilir</td>
                  </tr>
                <tr>
                  <th>ID Kontak</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Judul</th>
                  <th>Pesan</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($data_kon as $ko):?>
                <tr>
                  <td align="center"><?= $ko['id_kontak'];?></td>
                  <td><?= $ko['nama_kontak'];?></td>
                  <td><?= $ko['email_kontak'];?></td>
                  <td><?= $ko['judul_kontak'];?></td>
                  <td><?= $ko['pesan_kontak'];?></td>
                </tr>
               <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>ID Kontak</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Judul</th>
                  <th>Pesan</th>
                </tr>
                </tfoot>
              </table>