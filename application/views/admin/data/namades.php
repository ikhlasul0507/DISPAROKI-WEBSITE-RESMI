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
                <a class="btn btn-danger btn-flat" href=" <?= base_url();?>admin/jmzoclrmbehinbdafxtw"><i class="fa  fa-file-excel-o"></i> Excel</a>
                <a class="btn btn-warning btn-flat float-right" type="button" href=" <?= base_url();?>admin/trmxbxfeszumgnfepjoz" target="blank"><i class="fa fa-print"></i> Print</a>
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
              <table id="example2" class="table table-bordered table-striped table-responsive">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Kode Desa</th>
                  <th>Nama Kecamatan</th>
                  <th>Nama Desa</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  <?php foreach ($data_des as $d):?>
                <tr>
                  <td><?= $d->id_desa;?>
                  </td>
                  <td><?= $d->kode_desa;?></td>
                  <td><?= $d->nama_kecamatan;?></td>
                  <td><?= $d->nama_desa;?></td>
                  <td> 
                    <a class="btn btn-social-icon btn-bitbucket"  title='Edit' data-toggle="modal" data-target="#modal-edit<?php echo $d->id_desa;?>" type="button"><i class="fa fa-edit "></i></a>
                    <a class="btn btn-social-icon btn-google" style="margin-right: 5px"  title='Hapus' data-toggle="modal" data-target="#modal-danger<?php echo $d->kode_desa;?>"><i class="fa fa-trash"></i></a></td>
                </tr>
               <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Kode Desa</th>
                  <th>Kode Kecamatan</th>
                  <th>Nama Desa</th>
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

        <?php foreach ($data_des as $d) :
          $id_desa= $d->id_desa;
          $kode_desa= $d->kode_desa;
          $kode_kecamatan = $d->kode_kecamatan;
          $nama_desa = $d->nama_desa;
        ?>
    <!-- modal edit -->
     <div class="modal modal-info fade" id="modal-edit<?php echo $d->id_desa;?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header"><?php echo $d->id_desa;?>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Desa</h4>
              </div>
              <div class="modal-body">
                        <form role="form" action=" <?= base_url();?>admin/ubahdes/<?= $d->id_desa;?>" method="post">    
                          <div class="box box-primary"> 
                                  <div class="box-body">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-paragraph"></i></span>
                              <input type="hidden" name="id_desa" value="<?= $d->id_desa;?>">
                              <input type="text" class="form-control" placeholder="Kode Desa" id="kode_kecamatan" name="kode_desa" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus value=" <?= $d->kode_desa;?> ">
                            </div>
                            <br>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-paragraph"></i></span>
                              <select class="form-control select2" style="width: 100%;" name="kode_kecamatan" required oninvalid="this.setCustomValidity('Data Harus Dipilih !')" oninput="setCustomValidity('')">
                                <option selected disabled="disabled" value="">--Kode Kecamatan--</option>
                                <?php foreach ($data_kec as $k):?>
                                <option value="<?= $k['kode_kecamatan'];?>"><?= $k['nama_kecamatan'];?></option>
                                <?php endforeach; ?>
                              </select>
                            </div>
                            <br>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-font"></i></span>
                              <input type="text" class="form-control" placeholder="Nama Desa" id="nama_desa" name="nama_desa" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus value=" <?= $d->nama_desa;?> ">
                             
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
        <?php foreach ($data_des as $d) :
          $kode_desa= $d->kode_desa;
        ?>
         <div class="modal modal-danger fade" id="modal-danger<?php echo $d->kode_desa;?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Apakah Anda Yakin Ingin Menghapus ? <?= $d->nama_desa;?></h4>
              </div>
              <div class="modal-body">
                <p>Tekan "Hapus" Jika Yakin</p>
                <p>Tekan "Tidak" Jika Tidak Yakin</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline" data-dismiss="modal">Tidak</button>
                <a type="submit" href="<?= base_url();?>admin/wsliqhoxiakdmfurzeac/<?= $d->kode_desa;?>" class="btn btn-outline" tombol-hapus>Hapus</a>
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
                  <h4 class="modal-title">Tambah Kecamatan</h4>
                </div>
                  <div class="modal-body">
                        <form role="form" action=" <?= base_url();?>admin/tqwmcwxvhpuuycwofohx" method="post">    
                          <div class="box box-primary"> 
                          <div class="box-body">
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-paragraph"></i></span>
                              <input type="text" class="form-control" placeholder="Kode Desa" id="kode_kecamatan" name="kode_desa" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus>
                            </div>
                            <br>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-paragraph"></i></span>
                              <select class="form-control select2" style="width: 100%;" name="kode_kecamatan" required oninvalid="this.setCustomValidity('Data Harus Dipilih !')" oninput="setCustomValidity('')">
                                <option selected disabled="disabled" value="">--Kode Kecamatan--</option>
                                <?php foreach ($data_kec as $k):?>
                                <option value="<?= $k['kode_kecamatan'];?>"><?= $k['nama_kecamatan'];?></option>
                                <?php endforeach; ?>
                              </select>
                            </div>
                            <br>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-font"></i></span>
                              <input type="text" class="form-control" placeholder="Nama Desa" id="nama_kecamatan" name="nama_desa" required oninvalid="this.setCustomValidity('Data Harus Diisi Dan Tidak Boleh Sama !')" oninput="setCustomValidity('')" autocomplete="off" autofocus>
                             
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

        <!-- sricpt tambaha -->
        <script src="<?= base_url('assets/admin/');?>bower_components/jquery/dist/jquery.min.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
         <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
