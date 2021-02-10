<?php
 
 header("Content-type: application/vnd-ms-excel");
 
 header("Content-Disposition: attachment; filename=$title.xls");
 
 header("Pragma: no-cache");
 
 header("Expires: 0");
 
 ?>
              <table id="example2" class="table table-striped table-bordered data table-responsive"  style="width:100%" border="1">
                <thead>
                  <tr>
                    <td colspan="10" align="center" bgcolor="yellow">Data Pengajuan Dinas Pariwisata Dan Kebudayaan Kabupaten Ogan Komering Ilir</td>
                  </tr>
                <tr>
                  <th>ID Pengajuan</th>
                  <th>Kode Pengajuan</th>
                  <th>Nama Kecamatan</th>
                  <th>Nama Desa</th>
                  <th>Nama Pengajuan</th>
                  <th>Photo</th>
                  <th>Deskriksi</th>
                  <th>Alamat</th>
                  <th>Kontak</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($data_pgj as $pg):?>
                <tr>
                  <td align="center"><?= $pg->id_pengajuan;?></td>
                  <td align="center"><?= $pg->kode_pengajuan;?></td>
                  <td><?= $pg->nama_kecamatan;?></td>
                  <td><?= $pg->nama_desa;?></td>
                  <td><?= $pg->nama_pengajuan;?></td>
                  <td><?= $pg->photo_pengajuan;?></td>
                  <td><?= $pg->deskripsi_pengajuan;?></td>
                  <td><?= $pg->alamat_pengajuan;?></td>
                  <td><?= $pg->kontak_pengajuan;?></td>
                  <td>
                    <?php if ($pg->status_pengajuan=='0') { ?>
                      <b>Pengajuan Baru</b>
                    <?php }elseif($pg->status_pengajuan=='1'){ ?>
                      <b>Sedang Di Proses...</b>
                    <?php }else{?>
                      Selesai
                    <?php } ?>
                  </td>
                </tr>
               <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                   <th>ID Pengajuan</th>
                  <th>Kode Pengajuan</th>
                  <th>Nama Kecamatan</th>
                  <th>Nama Desa</th>
                  <th>Nama Pengajuan</th>
                  <th>Photo</th>
                  <th>Deskriksi</th>
                  <th>Alamat</th>
                  <th>Kontak</th>
                  <th>Status</th>
                </tr>
                </tfoot>
              </table>