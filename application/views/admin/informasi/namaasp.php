  <section class="content">
          <div class="box">
            <div class="box-header">
              <div class="row">
                <div class="col-xs-9"><h3 class="box-title"><b><?= $link.' '.$link1;?></b></h3><br>
          
                  <!-- notifikasi -->
                  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>">
                  </div>
                  <!-- end notifikasi -->
                </div>
                <div class="col-xs-3">
                <a class="btn btn-danger btn-flat" href=" <?= base_url();?>admin/excelasp"><i class="fa  fa-file-excel-o"></i> Excel</a>
                <a class="btn btn-warning btn-flat float-right" type="button" href=" <?= base_url();?>admin/printasp" target="blank"><i class="fa fa-print"></i> Print</a>
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
                  <th>ID Aspirasi</th>
                  <th>Judul</th>
                  <th>Photo</th>
                  <th>Aspirasi</th>
                  <th>Waktu</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($data_asp as $as):?>
                <tr>
                  <td><?= $as['id_aspirasi'];?></td>
                  <td><?= $as['judul_aspirasi'];?></td>
                  <td>
                    <a href="<?= base_url();?>assets/users/gambar/<?= $as['photo_aspirasi'];?>" target="blank">
                    <img src="<?= base_url();?>assets/users/gambar/<?= $as['photo_aspirasi'];?>" style="width: 50px;height: 50px;border-radius: 100%;background-color: #3c8dbc" />
                    </a>
                  </td>
                  <td><?= $as['aspirasi'];?></td>
                  <td><?= $as['waktu']; ?></td>
                  <td>
                      <a class="btn btn-social-icon btn-google" style="margin-right: 5px"  title='Hapus' data-toggle="modal" data-target="#modal-danger<?php echo $as['id_aspirasi'];?>"><i class="fa fa-trash"></i></a></td>   
                </tr>
               <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>ID Aspirasi</th>
                  <th>Judul</th>
                  <th>Photo</th>
                  <th>Aspirasi</th>
                  <th>Waktu</th>
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
        <?php foreach ($data_asp as $as) :
          $id_kontak= $as['id_aspirasi'];
        ?>
         <div class="modal modal-danger fade" id="modal-danger<?php echo $as['id_aspirasi'];?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Apakah Anda Yakin Ingin Menghapus ?<br> <?= $as['id_aspirasi'];?></h4>
              </div>
              <div class="modal-body">
                <p>Tekan "Hapus" Jika Yakin</p>
                <p>Tekan "Tidak" Jika Tidak Yakin</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline" data-dismiss="modal">Tidak</button>
                <a type="submit" href="<?= base_url();?>admin/hapusaspirasi/<?= $as['id_aspirasi'];?>" class="btn btn-outline" tombol-hapus>Hapus</a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
       <?php endforeach;?>

<script src="<?= base_url('assets/admin/');?>bower_components/jquery/dist/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>

 