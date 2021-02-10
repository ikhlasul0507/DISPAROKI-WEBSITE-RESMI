<?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=$title.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
              <table id="example2" class="table table-striped table-bordered data table-responsive"  style="width:100%" border="1">
                <thead>
                  <tr>
                    <td colspan="14" bgcolor="yellow">Data Berita Dinas Pariwisata Dan Kebudayaan Kabupaten Ogan Komering Ilir</td>
                  </tr>
                <tr>
                  <th>ID Sarana</th>
                  <th>Kode Berita</th>
                  <th>Nama Kecamatan</th>
                  <th>Nama Desa</th>
                  <th>Jenis Wisata</th>
                  <th>Jenis Sarana</th>
                  <th>Waktu Berita</th>
                  <th>Judul Berita</th>
                  <th>Photo Berita</th>
                  <th>Deskripsi 1</th>
                  <th>Deskripsi 2</th>
                  <th>Deskripsi 3</th>
                  <th>Status Berita</th>
                 
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($data_brt as $br):?>
                <tr>
                  <td><?= $br->id_berita;?></td>
                  <td><?= $br->kode_berita;?></td>
                  <td><?= $br->nama_kecamatan;?></td>
                  <td><?= $br->nama_desa;?></td>
                  <td><?= $br->nama_wisata;?></td>
                  <td><?= $br->nama_sarana;?></td>
                  <td><?= $br->waktu_berita;?></td>
                  <td><?= $br->judul_berita;?></td>
                  <td><?= $br->photo_berita;?></td>
                  <td><?= $br->deskripsiberita1;?></td>
                  <td><?= $br->deskripsiberita2;?></td>
                  <td><?= $br->deskripsiberita3;?></td> 
                  <td>
                    <?php if ($br->status_berita=='1') { ?>
                      <b> Berita Sedang Tayang.... </b>
                    <?php }else{ ?>
                      <b> Berita Lokal !!!</b>
                    <?php }?>
                  </td>
                </tr>
               <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>ID Sarana</th>
                  <th>Kode Berita</th>
                  <th>Nama Kecamatan</th>
                  <th>Nama Desa</th>
                  <th>Jenis Wisata</th>
                  <th>Jenis Sarana</th>
                  <th>Waktu Berita</th>
                  <th>Judul Berita</th>
                  <th>Photo Berita</th>
                  <th>Deskripsi 1</th>
                  <th>Deskripsi 2</th>
                  <th>Deskripsi 3</th>
                  <th>Status Berita</th>
                </tr>
                </tfoot>
              </table>