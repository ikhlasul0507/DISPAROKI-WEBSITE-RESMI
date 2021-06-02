<?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=$title.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
              <table id="example2" class="table table-striped table-bordered data table-responsive"  style="width:100%" border="1">
                <thead>
                  <tr>
                    <td colspan="15" align="center">Data Master Wisata Dinas Pariwisata Dan Kebudayaan Kota Pagaralam</td>
                  </tr>
                <tr>
                  <th>ID Wisata</th>
                  <th>Kode Master Wisata</th>
                  <th>Jenis Wisata</th>
                  <th>Nama Kecamatan</th>
                  <th>Nama Desa</th>
                  <th>Nama Wisata</th>
                  <th>Deskripsi 1</th>
                  <th>Deskripsi 2</th>
                  <th>Deskripsi 3</th>
                  <th>Photo</th>
                  <th>Link Video</th>
                  <th>link Google</th>
                  <th>Latitude</th>
                  <th>Longtitude</th>
                  <th>Status Video</th>
                  <th>Status Wisata</th>
                  
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($data_wst as $sr):?>
                <tr>
                  <td><?= $sr->id_master_wisata;?></td>
                  <td><?= $sr->kode_master_wisata;?></td>
                  <td><?= $sr->nama_wisata;?></td>
                  <td><?= $sr->nama_kecamatan;?></td>
                  <td><?= $sr->nama_desa;?></td>
                  <td><?= $sr->nama_master_wisata;?></td>
                  <td><?= $sr->deskripsi_wisata1;?></td>
                  <td><?= $sr->deskripsi_wisata2;?></td>
                  <td><?= $sr->deskripsi_wisata3;?></td>
                  <td><?= $sr->photo_wisata;?></td>
                  <td align="center"><?= $sr->link_video;?></td>
                  <td align="center"><?= $sr->link_google;?></td>
                  <td><?= $sr->latitude;?></td>
                  <td><?= $sr->longtitude;?></td>
                  <td>
                    <?php if ($sr->status_video=='1') { ?>
                      <b> Video Sedang Tayang.... </b>
                    <?php }else{ ?>
                      <b> Video Lokal !!!</b>
                    <?php }?>
                  </td>
                  <td>
                    <?php if ($sr->status_wisata=='1') { ?>
                      <b> Wisata Populer </b>
                    <?php }else{ ?>
                      <b> Wisata Biasa</b>
                    <?php }?>
                  </td>
                </tr>
               <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>ID Sarana</th>
                  <th>Kode Master Sarana</th>
                  <th>Jenis Sarana</th>
                  <th>Nama Kecamatan</th>
                  <th>Nama Desa</th>
                  <th>Nama Sarana</th>
                  <th>Deskripsi 1</th>
                  <th>Deskripsi 2</th>
                  <th>Deskripsi 3</th>
                  <th>Photo</th>
                  <th>Link Video</th>
                  <th>link Google</th>
                  <th>Latitude</th>
                  <th>Longtitude</th>
                  <th>Status Video</th>
                  <th>Status Wisata</th>
                 
                </tr>
                </tfoot>
              </table>