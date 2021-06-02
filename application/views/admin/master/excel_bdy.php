<?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=$title.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
              <table id="example2" class="table table-striped table-bordered data table-responsive"  style="width:100%" border="1">
                <thead>
                  <tr>
                    <td colspan="15" align="center">Data Master Budaya Dinas Pariwisata Dan Kebudayaan Kota Pagaralam</td>
                  </tr>
                <tr>
                  <th>ID Budaya</th>
                  <th>Kode Master Budaya</th>
                  <th>Jenis Budaya</th>
                  <th>Nama Kecamatan</th>
                  <th>Nama Desa</th>
                  <th>Nama Budaya</th>
                  <th>Deskripsi 1</th>
                  <th>Deskripsi 2</th>
                  <th>Deskripsi 3</th>
                  <th>Photo</th>
                  <th>Link Video</th>
                  <th>link Google</th>
                  <th>Latitude</th>
                  <th>Longtitude</th>
                  <th>Status Video</th>
                  <th>Status Budaya</th>
                  
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($data_bdy as $sr):?>
                <tr>
                  <td><?= $sr->id_master_budaya;?></td>
                  <td><?= $sr->kode_master_budaya;?></td>
                  <td><?= $sr->nama_budaya;?></td>
                  <td><?= $sr->nama_kecamatan;?></td>
                  <td><?= $sr->nama_desa;?></td>
                  <td><?= $sr->nama_master_budaya;?></td>
                  <td><?= $sr->deskripsi_budaya1;?></td>
                  <td><?= $sr->deskripsi_budaya2;?></td>
                  <td><?= $sr->deskripsi_budaya3;?></td>
                  <td><?= $sr->photo_budaya;?></td>
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
                    <?php if ($sr->status_budaya=='1') { ?>
                      <b> budaya Populer </b>
                    <?php }else{ ?>
                      <b> budaya Biasa</b>
                    <?php }?>
                  </td>
                </tr>
               <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>ID Budaya</th>
                  <th>Kode Master Budaya</th>
                  <th>Jenis Budaya</th>
                  <th>Nama Kecamatan</th>
                  <th>Nama Desa</th>
                  <th>Nama Budaya</th>
                  <th>Deskripsi 1</th>
                  <th>Deskripsi 2</th>
                  <th>Deskripsi 3</th>
                  <th>Photo</th>
                  <th>Link Video</th>
                  <th>link Google</th>
                  <th>Latitude</th>
                  <th>Longtitude</th>
                  <th>Status Video</th>
                  <th>Status Budaya</th>
                 
                </tr>
                </tfoot>
              </table>