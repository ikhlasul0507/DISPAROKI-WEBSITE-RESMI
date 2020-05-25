<?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=$title.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
              <table id="example2" class="table table-striped table-bordered data table-responsive"  style="width:100%" border="1">
                <thead>
                  <tr>
                    <td colspan="15">Data Master Sarana Dinas Pariwisata Dan Kebudayaan Kabupaten Ogan Komering Ilir</td>
                  </tr>
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
                  
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($data_srn as $sr):?>
                <tr>
                  <td><?= $sr->id_sarana;?></td>
                  <td><?= $sr->kode_master_sarana;?></td>
                  <td><?= $sr->nama_sarana;?></td>
                  <td><?= $sr->nama_kecamatan;?></td>
                  <td><?= $sr->nama_desa;?></td>
                  <td><?= $sr->nama_master_sarana;?></td>
                  <td><?= $sr->deskripsi_sarana1;?></td>
                  <td><?= $sr->deskripsi_sarana2;?></td>
                  <td><?= $sr->deskripsi_sarana3;?></td>
                  <td><?= $sr->photo_sarana;?></td>
                  <td align="center"><?= $sr->link_video;?></td>
                  <td align="center"><?= $sr->link_google;?></td>
                  <td><?= $sr->latitude;?></td>
                  <td><?= $sr->longtitude;?></td>
                  <td>
                    <?php if ($sr->status_sarana=='1') { ?>
                      <b> Video Sedang Tayang.... </b>
                    <?php }else{ ?>
                      <b> Video Lokal !!!</b>
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
                 
                </tr>
                </tfoot>
              </table>