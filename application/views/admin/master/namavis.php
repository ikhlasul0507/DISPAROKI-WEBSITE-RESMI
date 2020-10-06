  <section class="content">
          <div class="box">
            <div class="box-header">
              <div class="row">
                <div class="col-xs-8"><h3 class="box-title"><b><?= $link.' '.$link1;?></b></h3>
                  <!-- notifikasi -->
                  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>">
                  </div>
                  <!-- end notifikasi -->
                </div>
              <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-flat" title='Tambah' data-toggle="modal" data-target="#ModalaAdd"> <i class="fa fa-plus-square-o"></i> Tambah</button>
                <a class="btn btn-danger btn-flat" href=" <?= base_url();?>admin/whdeoymdsunibkgnjuoj"><i class="fa  fa-file-excel-o"></i> Excel</a>
                <a class="btn btn-warning btn-flat float-right" type="button" href=" <?= base_url();?>admin/qolonvzaneclmgkzbnes" target="blank"><i class="fa fa-print"></i> Print</a>
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
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Visi</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($data_vis as $k):?>
                <tr>
                  <td><?= $k['id_visi'];?></td>
                  <td><?= $k['visi'];?></td>
                  <td> 
                    <a class="btn btn-social-icon btn-bitbucket"  title='Edit' data-toggle="modal" data-target="#modal-edit<?php echo $k['id_visi'];?>" type="button"><i class="fa fa-edit "></i></a>
                    <a class="btn btn-social-icon btn-google" style="margin-right: 5px"  title='Hapus' data-toggle="modal" data-target="#modal-danger<?php echo $k['id_visi'];?>"><i class="fa fa-trash"></i></a></td>
                </tr>
               <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Visi</th>
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

        <?php foreach ($data_vis as $k) :
          $id= $k['id_visi'];
          $visi = $k['visi'];
        ?>
    <!-- modal edit -->
     <div class="modal modal-info fade" id="modal-edit<?php echo $k['id_visi'];?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Visi</h4>
              </div>
              <div class="modal-body">
                        <form role="form" action=" <?= base_url();?>admin/ubahvis/<?= $k['id_visi'];?>" method="post">    
                          <div class="box box-primary"> 
                          <div class="box-body">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-paragraph"></i></span>
                              <input type="text" class="form-control" placeholder="ID Visi" value=" <?= $k['id_visi']; ?> " name="id_visi" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus readonly>
                            </div>
                            <br>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                               <textarea placeholder="Visi" style="width: 100%; height: 200px; font-size: 14px;padding: 10px;color: black" name="visi" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus><?= $k['visi']; ?></textarea>
                            </div>
                          </div>
                      </div>
                  </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline" data-dismiss="modal">Tutup</button>
                  <button type="submit" class="btn btn-outline">Edit</button>
                </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <?php endforeach;?>
        <!-- modal hapus -->
        <?php foreach ($data_vis as $k) :
          $id= $k['id_visi'];
        ?>
         <div class="modal modal-danger fade" id="modal-danger<?php echo $k['id_visi'];?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Apakah Anda Yakin Ingin Menghapus ? <?= $k['id_visi'];?></h4>
              </div>
              <div class="modal-body">
                <p>Tekan "Hapus" Jika Yakin</p>
                <p>Tekan "Tidak" Jika Tidak Yakin</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline" data-dismiss="modal">Tidak</button>
                <a type="submit" href="<?= base_url();?>admin/vjxypokfgfajpqueznym/<?= $k['id_visi'];?>" class="btn btn-outline" tombol-hapus>Hapus</a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
       <?php endforeach;?>
  <!-- modal tambah -->
  
     <div class="modal modal-info fade" id="ModalaAdd">
          <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Tambah Visi</h4>
                </div>
                  <div class="modal-body">
                        <form role="form" action=" <?= base_url();?>admin/fldnpugcitukwbdclulb" method="post">    
                          <div class="box box-primary"> 
                          <div class="box-body">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-paragraph"></i></span>
                              <input type="text" class="form-control" placeholder="ID Visi" name="id_visi" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus>
                            </div>
                            <br>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-file-text"></i></span>
                               <textarea placeholder="Visi" style="width: 100%; height: 200px; font-size: 14px;padding: 10px;color: black" name="visi" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus></textarea>
                            </div>
                          </div>
                      </div>
                  </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline" data-dismiss="modal">Tutup</button>
                  <button type="submit" class="btn btn-outline" id="simpan">Simpan</button>
                </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>


        <script src="<?= base_url('assets/admin/');?>bower_components/jquery/dist/jquery.min.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
         <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
