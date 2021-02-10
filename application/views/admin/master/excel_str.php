<?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=$title.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
              <table id="example2" class="table table-bordered table-striped" border="1">
                <thead>
                  <tr>
                    <th colspan="4" align="center" bgcolor="yellow">Data Struktur Dinas Pariwisata</th>
                  </tr>
                <tr>
                  <th>ID</th>
                  <th>Kode Jabatan</th>
                  <th>Nama</th>
                  <th>Photo</th>
                  
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($data_str as $k):?>
                <tr>
                  <td><?= $k->id_struktur;?></td>
                  <td><?= $k->nama_jabatan;?></td>
                  <td><?= $k->nama;?></td>
                  <td><a href="<?= base_url();?>assets/admin/img/struktur/<?= $k->photo;?>" target="blank"><?= $k->photo;?></a></td>
                  
                </tr>
               <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Kode Jabatan</th>
                  <th>Nama</th>
                  <th>Photo</th>
                
                </tr>
                </tfoot>
              </table>