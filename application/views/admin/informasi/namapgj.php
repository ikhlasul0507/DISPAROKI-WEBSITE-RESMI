  <section class="content">
          <div class="box">
            <div class="box-header">
              <div class="row">
                <div class="col-xs-8"><h3 class="box-title"><b><?= $link.' '.$link1;?></b></h3><br>
                  <style>
                      .blink {
                        color: red;
                        animation: blink-animation 1s steps(5, start) infinite;
                        -webkit-animation: blink-animation 1s steps(5, start) infinite;
                      }
                      @keyframes blink-animation {
                        to {
                          visibility: hidden;
                        }
                      }
                      @-webkit-keyframes blink-animation {
                        to {
                          visibility: hidden;
                        }
                      }
                      </style>
                  <!-- notifikasi -->
                  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>">
                  </div>
                  <!-- end notifikasi -->
                </div>
                <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-flat" title='Tambah' data-toggle="modal" data-target="#ModalaAdd"> <i class="fa fa-calendar-o"></i> Rekap Data</button>
                <a class="btn btn-danger btn-flat" href=" <?= base_url();?>admin/excelpgj"><i class="fa  fa-file-excel-o"></i> Excel</a>
                <a class="btn btn-warning btn-flat float-right" type="button" href=" <?= base_url();?>admin/printpgj" target="blank"><i class="fa fa-print"></i> Print</a>
                <!-- tools box -->
                                <div class="pull-right box-tools">
                                  <button type="button" class="btn btn-success btn-sm" data-widget="collapse" data-toggle="tooltip"
                                          title="Minimize">
                                    <i class="fa fa-minus"></i></button>
                                  <button type="button" class="btn btn-success btn-sm" data-widget="remove" data-toggle="tooltip"
                                          title="Close">
                                    <i class="fa fa-times"></i></button>
                                </div>
                                <!-- /. tools -->
              </div>
              </div>
            </div>
            <div class="box-body" id="printkec">
              <div class="table-responsive">
              <table id="example2" class="table table-striped table-bordered data table-responsive"  style="width:100%">
                <thead>
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
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($data_pgj as $pg):?>
                <tr>
                  <td><?= $pg->id_pengajuan;?></td>
                  <td><?= $pg->kode_pengajuan;?></td>
                  <td><?= $pg->nama_kecamatan;?></td>
                  <td><?= $pg->nama_desa;?></td>
                  <td><?= $pg->nama_pengajuan;?></td>
                  <td>
                    <a href="<?= base_url();?>assets/admin/img/pengajuan/<?= $pg->photo_pengajuan;?>" target="blank">
                    <img src="<?= base_url();?>assets/admin/img/pengajuan/<?= $pg->photo_pengajuan;?>" style="width: 50px;height: 50px;border-radius: 100%;background-color: #3c8dbc" />
                    </a>
                  </td>
                  <td>
                    <?php 
                        $kalimat = $pg->deskripsi_pengajuan;
                        $sub_kalimat = substr($kalimat,0,100);
                        echo $sub_kalimat.'.....';
                     ?>
                  </td>
                  <td><?= $pg->alamat_pengajuan;?></td>
                  <td><?= $pg->kontak_pengajuan;?></td>
                  <td>
                    <?php if ($pg->status_pengajuan=='0') { ?>
                      <b>Pengajuan Baru</b>
                      <br> 
                      <a class="btn btn-danger" href="<?= base_url();?>admin/prosespgj/<?=$pg->id_pengajuan;?>">Proses</a>
                    <?php }elseif($pg->status_pengajuan=='1'){ ?>
                      <b>Sedang Di Proses...</b>
                      <br>
                      <a class="btn btn-warning" href="<?= base_url();?>admin/selesaipgj/<?=$pg->id_pengajuan;?>">Selesai</a>
                    <?php }else{?>
                      <button class="btn btn-success" disabled>Selesai</button>
                    <?php } ?>
                  </td>
                  <td> 
                    <?php if ($pg->status_pengajuan=='2'){?>
                         <a class="btn btn-social-icon btn-google" style="margin-right: 5px"  title='Hapus' data-toggle="modal" data-target="#modal-danger<?php echo $pg->id_pengajuan;?>"><i class="fa fa-trash"></i></a></td>
                    <?php }else{?>
                        <a class="btn btn-social-icon btn-success" href="https://api.whatsapp.com/send?phone=62<?= $pg->kontak_pengajuan; ?>" target="blank"  title='Chat Whatsapp'><i class="fa fa-whatsapp"></i></a>
                        <a class="btn btn-social-icon btn-google" style="margin-right: 5px"  title='Hapus' data-toggle="modal" data-target="#modal-danger<?php echo $pg->id_pengajuan;?>"><i class="fa fa-trash"></i></a></td>
                    <?php } ?>
                    
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
                  <th>Aksi</th>
                </tr>
                </tfoot>
              </table>
            </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

    </section>
    <!-- /.content -->

        <!-- modal hapus -->
        <?php foreach ($data_pgj as $pg) :
          $id_pengajuan= $pg->id_pengajuan;
          $photo_pengajuan = $pg->photo_pengajuan;
        ?>
         <div class="modal modal-danger fade" id="modal-danger<?php echo $pg->id_pengajuan;?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Apakah Anda Yakin Ingin Menghapus ?<br> <?= $pg->id_pengajuan;?></h4>
              </div>
              <div class="modal-body">
                <p>Tekan "Hapus" Jika Yakin</p>
                <p>Tekan "Tidak" Jika Tidak Yakin</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline" data-dismiss="modal">Tidak</button>
                <a type="submit" href="<?= base_url();?>admin/hapuspengajuan/<?= $pg->id_pengajuan;?>" class="btn btn-outline" tombol-hapus>Hapus</a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
       <?php endforeach;?>
 <!-- modal rekap -->
  
      <div class="modal modal-info fade" id="ModalaAdd">
          <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Rekap Pengajuan</h4>
                </div>
                  <div class="modal-body">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          <button class="btn btn-danger" disabled>Data Masuk</button>
                          <span class="badge badge-primary badge-pill" style="background-color: red;width: 30px;height: 30px;position:"><b style="font-size: 20px"></b>
                            <?php $a = $this->db->query("SELECT *FROM tbl_pengajuan WHERE status_pengajuan='0'");
                            $hasil= $a->num_rows();
                            echo $hasil; 
                            ?>
                          </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          <button class="btn btn-warning" disabled>Data Proses</button>
                          <span class="badge badge-primary badge-pill" style="background-color: orange;width: 30px;height: 30px;position:"><b style="font-size: 20px"></b>
                            <?php $a = $this->db->query("SELECT *FROM tbl_pengajuan WHERE status_pengajuan='1'");
                            $hasil= $a->num_rows();
                            echo $hasil; 
                            ?>
                          </span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                          <button class="btn btn-success" disabled>Data Selesai</button>
                          <span class="badge badge-primary badge-pill" style="background-color: green;width: 30px;height: 30px;position:"><b style="font-size: 20px"></b>
                            <?php $a = $this->db->query("SELECT *FROM tbl_pengajuan WHERE status_pengajuan='2'");
                            $hasil= $a->num_rows();
                            echo $hasil; 
                            ?>
                          </span>
                        </li>
                      </ul>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
          </div>
<script src="<?= base_url('assets/admin/');?>bower_components/jquery/dist/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

 